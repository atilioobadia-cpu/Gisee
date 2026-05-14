# Gisee Infotech Landing Page

This is a responsive PHP-based landing page for the Gisee Infotech website.

## Project Structure

- `index.php` – main homepage template and JavaScript interactions
- `assets/css/style.css` – site styles and responsive/mobile layout rules
- `images/` – image assets used by the site, including logos and icons
- `images/tech-icons/` – technology icon assets

## Local Development

1. Place the project in your local web server root.
2. Start a PHP development server from the project folder:
   ```powershell
   cd c:\xampp\htdocs\gisee
   & "C:\xampp\php\php.exe" -S localhost:8080 -t .
   ```
3. Open `http://localhost:8080/` in your browser.

## Notes

- The site is designed to be mobile-friendly and uses responsive CSS breakpoints.
- Navigation is handled by JavaScript in `index.php` with a mobile menu toggle.
- Customize the content directly in `index.php` and styles in `assets/css/style.css`.

## Recommended next steps

- Review the mobile header and hero section styles in `assets/css/style.css`.
- Replace placeholder content and links with real business details.
- Update the logo and WhatsApp assets as needed.
