# TapToCount

TapToCount is a fast, private, no-login online tally counter built with Laravel, Livewire, Vite, and vanilla JavaScript.

Live website: [https://www.taptocount.app](https://www.taptocount.app)

## About

TapToCount helps users count anything from a browser without creating an account. It supports multiple counters, local browser saving, custom counter names, start values, optional counter limits, dark mode, and mobile-friendly tap controls.

Useful for:

- inventory counting
- prayer or dhikr counting
- visitor and people counting
- lap counting
- fitness reps
- game scores
- habit tracking
- everyday tally tasks

## Features

- Multiple counters saved in `localStorage`
- Rename counters with duplicate-name handling
- Add, delete, reset, increment, and decrement counters
- Optional per-counter start value and limit settings
- Mobile tap area with double-tap zoom prevention
- Dark mode toggle
- SEO pages for privacy policy and disclaimer
- Dynamic `sitemap.xml`
- SVG and ICO favicon assets

## Tech Stack

- Laravel
- Livewire
- Vite
- Tailwind CSS
- Vanilla JavaScript
- SQLite for local development

## Local Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

## Development

Run the frontend watcher:

```bash
npm run dev
```

Run tests:

```bash
php artisan test
```

## License

This project is open-sourced under the license included in this repository.
