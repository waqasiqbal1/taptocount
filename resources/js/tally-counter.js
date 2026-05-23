const STORAGE_KEY = 'tallyCounters';
const ACTIVE_COUNTER_KEY = 'tallyActiveCounter';
const DEFAULT_COUNTERS = [
    {
        id: 'counter-1',
        name: 'Main Counter',
        value: 0,
        createdAt: new Date().toISOString(),
        updatedAt: new Date().toISOString(),
    },
];

const state = {
    counters: [],
    activeId: null,
};

const counterNameElement = document.getElementById('counterName');
const counterValueElement = document.getElementById('counterValue');
const counterSelect = document.getElementById('counterSelect');
const renameInput = document.getElementById('renameCounterInput');
const increaseButton = document.getElementById('increaseButton');
const decreaseButton = document.getElementById('decreaseButton');
const resetButton = document.getElementById('resetButton');
const addButton = document.getElementById('addCounterButton');
const deleteButton = document.getElementById('deleteCounterButton');
const renameButton = document.getElementById('renameButton');
const tapArea = document.getElementById('tapArea');

function loadCounters() {
    try {
        const saved = localStorage.getItem(STORAGE_KEY);
        const activeId = localStorage.getItem(ACTIVE_COUNTER_KEY);
        if (saved) {
            const parsed = JSON.parse(saved);
            if (Array.isArray(parsed) && parsed.length > 0) {
                state.counters = parsed;
                if (activeId && parsed.some((counter) => counter.id === activeId)) {
                    state.activeId = activeId;
                } else {
                    state.activeId = parsed[0].id;
                }
                return;
            }
        }
    } catch (error) {
        console.warn('Unable to load counters from storage', error);
    }
    state.counters = DEFAULT_COUNTERS;
    state.activeId = DEFAULT_COUNTERS[0].id;
    saveCounters();
}

function saveCounters() {
    try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(state.counters));
        localStorage.setItem(ACTIVE_COUNTER_KEY, state.activeId);
    } catch (error) {
        console.warn('Unable to save counters', error);
    }
}

function getActiveCounter() {
    const active = state.counters.find((counter) => counter.id === state.activeId);
    if (active) {
        return active;
    }
    return state.counters[0] || null;
}

function renderCounterOptions() {
    if (!counterSelect) {
        return;
    }
    counterSelect.innerHTML = state.counters
        .map(
            (counter) =>
                `<option value="${counter.id}" ${counter.id === state.activeId ? 'selected' : ''}>${counter.name} (${counter.value})</option>`
        )
        .join('');
}

function renderDisplay() {
    const active = getActiveCounter();
    if (!active) {
        return;
    }
    if (counterNameElement) {
        counterNameElement.textContent = active.name;
    }
    if (counterValueElement) {
        counterValueElement.textContent = active.value;
    }
    if (renameInput) {
        renameInput.value = active.name;
    }
}

function setActiveCounter(counterId) {
    state.activeId = counterId;
    saveCounters();
    renderDisplay();
    renderCounterOptions();
}

function updateActiveValue(delta) {
    const active = getActiveCounter();
    if (!active) {
        return;
    }
    active.value = Math.max(0, active.value + delta);
    active.updatedAt = new Date().toISOString();
    saveCounters();
    renderDisplay();
    renderCounterOptions();
}

function resetActiveCounter() {
    const active = getActiveCounter();
    if (!active) {
        return;
    }
    const confirmed = confirm('Reset the active counter to zero?');
    if (!confirmed) {
        return;
    }
    active.value = 0;
    active.updatedAt = new Date().toISOString();
    saveCounters();
    renderDisplay();
    renderCounterOptions();
}

function renameActiveCounter() {
    const active = getActiveCounter();
    if (!active || !renameInput) {
        return;
    }
    const trimmed = renameInput.value.trim();
    if (!trimmed) {
        alert('Please enter a valid counter name.');
        return;
    }
    active.name = trimmed;
    active.updatedAt = new Date().toISOString();
    saveCounters();
    renderDisplay();
    renderCounterOptions();
}

function addCounter() {
    const defaultName = `Counter ${state.counters.length + 1}`;
    const name = window.prompt('Add a new counter name', defaultName);
    if (!name) {
        return;
    }
    const counter = {
        id: `counter-${Date.now()}-${Math.random().toString(16).slice(2)}`,
        name: name.trim() || defaultName,
        value: 0,
        createdAt: new Date().toISOString(),
        updatedAt: new Date().toISOString(),
    };
    state.counters.unshift(counter);
    setActiveCounter(counter.id);
    saveCounters();
    renderCounterOptions();
}

function deleteActiveCounter() {
    if (state.counters.length <= 1) {
        alert('At least one counter must remain.');
        return;
    }
    const active = getActiveCounter();
    if (!active) {
        return;
    }
    const confirmed = confirm(`Delete the counter “${active.name}”? This cannot be undone.`);
    if (!confirmed) {
        return;
    }
    state.counters = state.counters.filter((counter) => counter.id !== active.id);
    state.activeId = state.counters[0].id;
    saveCounters();
    renderDisplay();
    renderCounterOptions();
}

function handleKeyboardShortcuts(event) {
    const activeElement = document.activeElement;
    const ignore = activeElement && ['INPUT', 'TEXTAREA', 'SELECT', 'BUTTON'].includes(activeElement.tagName);
    if (ignore) {
        return;
    }

    const key = event.key.toLowerCase();
    if (key === ' ' || key === 'enter') {
        event.preventDefault();
        updateActiveValue(1);
    }
    if (key === '-' || key === 'backspace') {
        event.preventDefault();
        updateActiveValue(-1);
    }
    if (key === 'r') {
        event.preventDefault();
        resetActiveCounter();
    }
}

function bindListeners() {
    if (tapArea) {
        tapArea.addEventListener('click', () => updateActiveValue(1));
    }
    if (increaseButton) {
        increaseButton.addEventListener('click', () => updateActiveValue(1));
    }
    if (decreaseButton) {
        decreaseButton.addEventListener('click', () => updateActiveValue(-1));
    }
    if (resetButton) {
        resetButton.addEventListener('click', resetActiveCounter);
    }
    if (renameButton) {
        renameButton.addEventListener('click', renameActiveCounter);
    }
    if (addButton) {
        addButton.addEventListener('click', addCounter);
    }
    if (deleteButton) {
        deleteButton.addEventListener('click', deleteActiveCounter);
    }
    if (counterSelect) {
        counterSelect.addEventListener('change', (event) => {
            setActiveCounter(event.target.value);
        });
    }
    document.addEventListener('keydown', handleKeyboardShortcuts);
}

function initialize() {
    loadCounters();
    renderCounterOptions();
    renderDisplay();
    bindListeners();
}

if (typeof document !== 'undefined') {
    document.addEventListener('DOMContentLoaded', initialize);
}
