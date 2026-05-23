const themeToggleButton = document.getElementById('theme-toggle');
const themeLabel = document.getElementById('theme-mode-label');
const THEME_KEY = 'tallyTheme';

function getStoredTheme() {
    try {
        return localStorage.getItem(THEME_KEY);
    } catch (error) {
        return null;
    }
}

function saveTheme(theme) {
    try {
        localStorage.setItem(THEME_KEY, theme);
    } catch (error) {
        console.warn('Unable to save theme preference', error);
    }
}

function applyTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    saveTheme(theme);
    updateThemeLabel();
}

function updateThemeLabel() {
    if (!themeLabel) {
        return;
    }
    themeLabel.textContent = document.documentElement.classList.contains('dark') ? 'Light mode' : 'Dark mode';
}

function toggleTheme() {
    const current = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
    applyTheme(current === 'dark' ? 'light' : 'dark');
}

if (typeof document !== 'undefined') {
    document.addEventListener('DOMContentLoaded', () => {
        const stored = getStoredTheme();
        if (stored === 'dark' || stored === 'light') {
            applyTheme(stored);
        } else {
            updateThemeLabel();
        }

        if (themeToggleButton) {
            themeToggleButton.addEventListener('click', toggleTheme);
        }
    });
}
