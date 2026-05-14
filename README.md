# Gisee Infotech

The Gisee Infotech marketing site, rebuilt on **Laravel 12**. It keeps the
original hand-crafted, fully responsive design (desktop + mobile) and adds a
real back end: account registration / login and a persisted contact form.

## Stack

- **Laravel 12** (PHP 8.2+)
- **Blade** templates — no front-end framework
- **Vite** bundles the original `style.css` and the site interaction script
- **SQLite** database (zero-config; file at `database/database.sqlite`)

## Project layout

| Path | Purpose |
| --- | --- |
| `routes/web.php` | Home page, auth (login/register/logout), contact form |
| `config/site.php` | All marketing content + the inline SVG icon set |
| `app/Http/Controllers` | `HomeController`, `ContactController`, `Auth/*` |
| `app/Http/Requests` | Validation for contact + auth (`LoginRequest` also rate-limits) |
| `app/Models/ContactMessage.php` | Stored contact submissions |
| `resources/views/layouts/app.blade.php` | Page shell, `<head>`, modal-state logic |
| `resources/views/home.blade.php` | Composes the page from `sections/*` partials |
| `resources/views/partials` | `header`, `footer`, `auth-modal`, `contact-modal` |
| `resources/views/sections` | `hero`, `services`, `transformation`, `delivery`, `softwares`, `technologies`, `about`, `media`, `shop` |
| `resources/views/components/icon.blade.php` | `<x-icon name="…">` — inline SVG helper |
| `resources/css/app.css` | The original site stylesheet (responsive breakpoints intact) |
| `resources/js/site.js` | Navigation, modals, reveal animations, counters |
| `public/images` | Logos, WhatsApp icon, technology icons |

## Local development

Requires PHP 8.2+, Composer, and Node.js.

```powershell
cd c:\xampp\htdocs\gisee

composer install
npm install

# first-time setup only
copy .env.example .env
php artisan key:generate
php artisan migrate

# run it (two terminals)
php artisan serve        # http://localhost:8000
npm run dev              # Vite dev server with hot reload
```

For a production-style build, run `npm run build` instead of `npm run dev`.

### Serving under XAMPP / Apache

Laravel's web root is the `public/` directory. Point an Apache VirtualHost's
`DocumentRoot` at `c:\xampp\htdocs\gisee\public`, or just use
`php artisan serve` for local work.

## How auth and contact work

The site is a single page; sign-in, sign-up, and contact are modal dialogs.

- The modal forms POST to real Laravel routes (`login.store`, `register.store`,
  `contact.store`).
- Validation errors are flashed into named bags (`login`, `register`,
  `contact`). `layouts/app.blade.php` reads those bags and tells `site.js`
  which modal to re-open via `data-open-modal` on `<body>`.
- Successful actions redirect home with a flash message that `site.js` renders
  as a toast.
- Contact submissions are stored in the `contact_messages` table.

## Notes

- The legacy single-file `index.php` and `assets/` folder have been fully
  migrated into the Laravel structure above and removed.
- Password reset / email verification are not wired up yet — they can be added
  on top of the existing `Auth` controllers when needed.
