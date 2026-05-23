# Tally Counter

## Ultra-lightweight Laravel tally counter web app

A premium single-page online tally counter built with Laravel, Blade, Vanilla JavaScript, and Tailwind CSS. This app supports multiple counters, dark mode, localStorage persistence, and SEO-friendly content without any heavy frameworks or starter kits.

### Features

- Fast single-page counter interface
- Tap-to-count interaction
- + and - buttons for manual adjustment
- Reset, rename, add, delete, and switch counters
- Multiple counters saved in localStorage
- Dark mode with manual toggle
- Responsive mobile-first design
- SEO metadata and JSON-LD schema
- Privacy-first no-login experience
- Contact form with validation

### Tech stack

- Laravel
- Blade templates
- Vanilla JavaScript
- Tailwind CSS
- Vite build tooling

### Installation

```bash
composer install
npm install
```

### Local development

```bash
npm run dev
php artisan serve
```

Then open the displayed local URL in your browser.

### Build commands

```bash
npm run build
```

### Environment setup

Copy `.env.example` to `.env` and configure your application key:

```bash
cp .env.example .env
php artisan key:generate
```

### Deployment notes

Deploy this app to any Laravel-ready host. The counter UI runs in the browser, and localStorage persistence keeps counter state on the client.

### SEO features

- Canonical URL tags
- Open Graph metadata
- Twitter Card tags
- SoftwareApplication JSON-LD schema
- Semantic HTML and fast Core Web Vitals friendly layout

### GitHub setup

```bash
git init
git add .
git commit -m "Initial Laravel tally counter project"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/tally-counter.git
git push -u origin main
```

### Recommended repository details

- Repository name: `tally-counter`
- Description: Ultra-lightweight Laravel tally counter web app with multiple counters, dark mode, localStorage, SEO schema, and premium UI.

### License

This project is released under the MIT License.
