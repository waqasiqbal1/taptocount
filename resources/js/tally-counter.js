const storageKey = 'tally-counter-counters';
const activeKey = 'tally-counter-active-id';
const soundKey = 'tally-counter-sound';

const starterCounters = [
    { name: 'Visitor Count', value: 0 },
    { name: 'Tasbeeh Counter', value: 0 },
    { name: 'Inventory Count', value: 0 },
    { name: 'Prayer Count', value: 0 },
    { name: 'Lap Counter', value: 0 },
];

function now() {
    return new Date().toISOString();
}

function createCounter(name = 'New Counter') {
    const createdAt = now();

    return {
        id: crypto.randomUUID(),
        name,
        value: 0,
        startValue: 0,
        limitEnabled: false,
        limitValue: 100,
        createdAt,
        updatedAt: createdAt,
    };
}

function toNumber(value, fallback = 0) {
    const parsed = Number(value);

    return Number.isFinite(parsed) ? Math.trunc(parsed) : fallback;
}

function normalizeCounter(counter) {
    return {
        ...counter,
        id: counter.id || crypto.randomUUID(),
        name: counter.name || 'Untitled Counter',
        value: toNumber(counter.value, 0),
        startValue: toNumber(counter.startValue, 0),
        limitEnabled: Boolean(counter.limitEnabled),
        limitValue: toNumber(counter.limitValue, 100),
        createdAt: counter.createdAt || now(),
        updatedAt: counter.updatedAt || now(),
    };
}

function escapeHtml(value) {
    const element = document.createElement('span');
    element.textContent = value;
    return element.innerHTML;
}

function loadCounters() {
    try {
        const saved = JSON.parse(localStorage.getItem(storageKey));
        if (Array.isArray(saved) && saved.length > 0) {
            return saved.map(normalizeCounter);
        }
    } catch {
        localStorage.removeItem(storageKey);
    }

    return starterCounters.map((counter) => createCounter(counter.name));
}

function saveCounters(counters) {
    // localStorage keeps the multiple counter objects on this browser only.
    localStorage.setItem(storageKey, JSON.stringify(counters));
}

function playClickSound(enabled) {
    if (!enabled) {
        return;
    }

    const AudioContext = window.AudioContext || window.webkitAudioContext;
    if (!AudioContext) {
        return;
    }

    const context = new AudioContext();
    const oscillator = context.createOscillator();
    const gain = context.createGain();

    oscillator.type = 'sine';
    oscillator.frequency.value = 520;
    gain.gain.value = 0.025;
    oscillator.connect(gain);
    gain.connect(context.destination);
    oscillator.start();
    oscillator.stop(context.currentTime + 0.035);
}

function vibrate() {
    if ('vibrate' in navigator) {
        navigator.vibrate(12);
    }
}

function initTallyCounter(root) {
    if (root.dataset.ready === 'true') {
        return;
    }

    root.dataset.ready = 'true';

    let counters = loadCounters();
    let activeId = localStorage.getItem(activeKey) || counters[0].id;
    let soundEnabled = localStorage.getItem(soundKey) === 'true';

    const valueElement = root.querySelector('.tally-value');
    const activeNameElement = root.querySelector('.tally-active-name');
    const nameInput = root.querySelector('.tally-name');
    const pillsElement = root.querySelector('.tally-pills');
    const tapArea = root.querySelector('.tally-tap-area');
    const soundButton = root.querySelector('.tally-sound-toggle');
    const infoButton = root.querySelector('.tally-counter-info');
    const infoModal = root.querySelector('.tally-info-modal');
    const infoPanel = root.querySelector('.tally-info-panel');
    const infoCloseButtons = root.querySelectorAll('.tally-info-close');
    const infoSupportLink = root.querySelector('.tally-info-support');
    const settingsButton = root.querySelector('.tally-counter-settings');
    const settingsModal = root.querySelector('.tally-settings-modal');
    const settingsForm = root.querySelector('.tally-settings-panel');
    const settingsPanel = root.querySelector('.tally-settings-panel');
    const settingsCloseButtons = root.querySelectorAll('.tally-settings-close');
    const startValueInput = root.querySelector('.tally-start-value');
    const limitEnabledInput = root.querySelector('.tally-limit-enabled');
    const limitValueInput = root.querySelector('.tally-limit-value');
    const limitFields = root.querySelector('.tally-limit-fields');

    function isInfoModalOpen() {
        return infoModal && !infoModal.hidden;
    }

    function openInfoModal() {
        if (!infoModal) {
            return;
        }

        infoModal.hidden = false;
        document.body.style.overflow = 'hidden';
        infoModal.querySelector('.tally-info-close')?.focus();
    }

    function closeInfoModal() {
        if (!infoModal) {
            return;
        }

        infoModal.hidden = true;
        document.body.style.overflow = '';
        infoButton?.focus();
    }

    function isSettingsModalOpen() {
        return settingsModal && !settingsModal.hidden;
    }

    function syncLimitFields() {
        if (!limitFields || !limitEnabledInput) {
            return;
        }

        limitFields.hidden = !limitEnabledInput.checked;
    }

    function populateSettingsForm() {
        const active = activeCounter();

        startValueInput.value = active.startValue;
        limitEnabledInput.checked = active.limitEnabled;
        limitValueInput.value = active.limitValue;
        syncLimitFields();
    }

    function openSettingsModal() {
        if (!settingsModal) {
            return;
        }

        populateSettingsForm();
        settingsModal.hidden = false;
        document.body.style.overflow = 'hidden';
        startValueInput?.focus();
        startValueInput?.select();
    }

    function closeSettingsModal() {
        if (!settingsModal) {
            return;
        }

        settingsModal.hidden = true;
        document.body.style.overflow = '';
        settingsButton?.focus();
    }

    function activeCounter() {
        return counters.find((counter) => counter.id === activeId) || counters[0];
    }

    function uniqueCounterName(name, currentId = null) {
        const baseName = (name || 'Untitled Counter').trim() || 'Untitled Counter';
        const usedNames = new Set(
            counters
                .filter((counter) => counter.id !== currentId)
                .map((counter) => counter.name.trim().toLowerCase())
        );

        if (!usedNames.has(baseName.toLowerCase())) {
            return baseName;
        }

        let suffix = 2;
        let nextName = `${baseName} ${suffix}`;

        while (usedNames.has(nextName.toLowerCase())) {
            suffix += 1;
            nextName = `${baseName} ${suffix}`;
        }

        return nextName;
    }

    function persist() {
        saveCounters(counters);
        localStorage.setItem(activeKey, activeId);
    }

    function animateValue() {
        valueElement.classList.remove('count-pop');
        requestAnimationFrame(() => valueElement.classList.add('count-pop'));
    }

    function render() {
        const active = activeCounter();
        activeId = active.id;

        valueElement.textContent = active.value.toLocaleString();
        activeNameElement.textContent = active.name;
        if (document.activeElement !== nameInput) {
            nameInput.value = active.name;
        }
        soundButton.classList.toggle('is-active', soundEnabled);
        soundButton.setAttribute('aria-pressed', String(soundEnabled));

        pillsElement.innerHTML = counters.map((counter) => (
            `<button type="button" class="tally-pill ${counter.id === active.id ? 'is-active' : ''}" data-counter-id="${counter.id}" aria-pressed="${counter.id === active.id}">
                <span class="tally-pill-name">${escapeHtml(counter.name)}</span>
                <span class="tally-pill-value inline-flex items-center justify-center px-1 text-xs font-medium text-fg-brand-strong bg-teal-600/50 rounded-full dark:text-fg-brand-subtle">${counter.value.toLocaleString()}</span>
            </button>`
        )).join('');

        persist();
    }

    function switchCounter(id) {
        // Active counter switching changes which object is shown in the main screen.
        if (counters.some((counter) => counter.id === id)) {
            activeId = id;
            render();
        }
    }

    function updateValue(amount) {
        // Counter clicks are handled here in Vanilla JavaScript to avoid a Livewire request per tap.
        const active = activeCounter();
        const nextValue = active.value + amount;

        active.value = active.limitEnabled && amount > 0
            ? Math.min(nextValue, active.limitValue)
            : nextValue;
        active.updatedAt = now();
        render();
        animateValue();
        playClickSound(soundEnabled);
        vibrate();
    }

    function resetCounter() {
        // Confirmation protects against accidental reset during long counting sessions.
        if (!window.confirm('Reset this counter to 0?')) {
            return;
        }

        const active = activeCounter();
        active.value = active.startValue;
        active.updatedAt = now();
        render();
        animateValue();
    }

    function deleteCounter() {
        if (counters.length === 1) {
            resetCounter();
            return;
        }

        if (!window.confirm('Delete this counter?')) {
            return;
        }

        counters = counters.filter((counter) => counter.id !== activeId);
        activeId = counters[0].id;
        render();
    }

    root.querySelector('.tally-increment').addEventListener('click', () => updateValue(1));
    root.querySelector('.tally-decrement').addEventListener('click', () => updateValue(-1));
    root.querySelector('.tally-reset').addEventListener('click', resetCounter);
    root.querySelector('.tally-delete-counter').addEventListener('click', deleteCounter);

    root.querySelector('.tally-add-counter').addEventListener('click', () => {
        const counter = createCounter(uniqueCounterName('Counter'));
        counters.push(counter);
        activeId = counter.id;
        render();
        nameInput.focus();
        nameInput.select();
    });

    soundButton.addEventListener('click', () => {
        soundEnabled = !soundEnabled;
        localStorage.setItem(soundKey, String(soundEnabled));
        render();
    });

    infoButton?.addEventListener('click', openInfoModal);

    infoCloseButtons.forEach((button) => {
        button.addEventListener('click', closeInfoModal);
    });

    infoSupportLink?.addEventListener('click', closeInfoModal);

    infoModal?.addEventListener('click', (event) => {
        if (!infoPanel?.contains(event.target)) {
            closeInfoModal();
        }
    });

    settingsButton?.addEventListener('click', openSettingsModal);

    settingsCloseButtons.forEach((button) => {
        button.addEventListener('click', closeSettingsModal);
    });

    limitEnabledInput?.addEventListener('change', syncLimitFields);

    settingsModal?.addEventListener('click', (event) => {
        if (!settingsPanel?.contains(event.target)) {
            closeSettingsModal();
        }
    });

    settingsForm?.addEventListener('submit', (event) => {
        event.preventDefault();

        const active = activeCounter();
        const startValue = toNumber(startValueInput.value, active.startValue);
        const limitValue = toNumber(limitValueInput.value, active.limitValue);

        active.startValue = startValue;
        active.limitEnabled = limitEnabledInput.checked;
        active.limitValue = limitValue;

        if (active.limitEnabled && active.value > active.limitValue) {
            active.value = active.limitValue;
        }

        active.updatedAt = now();
        render();
        closeSettingsModal();
    });

    pillsElement.addEventListener('click', (event) => {
        const pill = event.target.closest('[data-counter-id]');
        if (pill) {
            switchCounter(pill.dataset.counterId);
        }
    });

    nameInput.addEventListener('input', (event) => {
        const active = activeCounter();
        active.name = event.target.value;
        active.updatedAt = now();
        render();
        nameInput.focus();
    });

    nameInput.addEventListener('blur', () => {
        const active = activeCounter();
        active.name = uniqueCounterName(nameInput.value, active.id);
        active.updatedAt = now();
        render();
    });

    tapArea.addEventListener('click', () => {
        // Tap-to-count makes the whole display a large mobile-friendly increment button.
        updateValue(1);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isSettingsModalOpen()) {
            event.preventDefault();
            closeSettingsModal();
            return;
        }

        if (event.key === 'Escape' && isInfoModalOpen()) {
            event.preventDefault();
            closeInfoModal();
            return;
        }

        if (isInfoModalOpen() || isSettingsModalOpen()) {
            return;
        }

        const tagName = event.target.tagName;
        if (tagName === 'INPUT' || tagName === 'TEXTAREA' || tagName === 'SELECT') {
            return;
        }

        // Keyboard shortcuts provide fast desktop counting without changing focus.
        if (event.code === 'Space' || event.code === 'Enter') {
            event.preventDefault();
            updateValue(1);
        }

        if (event.code === 'Backspace' || event.key === '-') {
            event.preventDefault();
            updateValue(-1);
        }

        if (event.key.toLowerCase() === 'r') {
            event.preventDefault();
            resetCounter();
        }
    });

    render();
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.tally-counter').forEach(initTallyCounter);
});
