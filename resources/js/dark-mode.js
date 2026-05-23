const themeKey = 'tally-counter-theme';

function preferredTheme() {
    return localStorage.getItem(themeKey) ?? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
}

function applyTheme(theme) {
    // Dark mode is stored in localStorage so the chosen theme returns on refresh.
    document.documentElement.classList.toggle('dark', theme === 'dark');
    document.querySelectorAll('.theme-toggle-icon').forEach((icon) => {
        icon.textContent = theme === 'dark' ? '☀' : '◐';
    });
}

applyTheme(preferredTheme());

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.theme-toggle').forEach((button) => {
        button.addEventListener('click', () => {
            const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
            localStorage.setItem(themeKey, nextTheme);
            applyTheme(nextTheme);
        });
    });
});
