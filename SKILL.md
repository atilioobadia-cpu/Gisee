---
name: header-dropdowns
user-invocable: true
description: "Add a polished responsive header with dropdown navigation for Home, Services, Softwares, Portfolio, About Us, Shop, and Contact."
---

# Header Dropdown Navigation Skill

## What this skill does

This skill guides the workspace owner to build a responsive site header with nested dropdown navigation menus, matching the layout shown in the provided image.

It covers:
- a sticky top bar with brand logo
- navigation items including `Home`, `Services`, `Softwares`, `Portfolio`, `About Us`, `Shop`, and `Contact`
- a dropdown mega menu for `Services` with columns for `Consulting`, `Development`, and `Support`
- keyboard- and focus-friendly markup for accessibility
- CSS patterns for layered dropdown panels, hover states, and mobile collapsing

## When to use

Use this skill when you want to convert the current navigation into a professional dropdown header like the example image, while preserving the existing site style.

## Implementation steps

1. Add or update the navigation data in `index.php`:
   - Keep `Home`, `About Us`, `Shop`, and `Contact` as primary links.
   - Add `Services`, `Softwares`, and `Portfolio` as menu triggers with dropdown content.
2. Create nested submenu markup inside the header navigation using semantic `nav`, `button`, and `ul`/`li` structures.
3. Style the dropdown using `position: absolute` and `display: grid` for the mega menu layout.
4. Add mobile support for the hamburger toggle and collapsed submenu state.
5. Verify anchor IDs or section targets exist, and add a `Portfolio` section if needed.

## Example menu structure

- Home
- Services
  - Consulting
    - IT Strategy
    - Security Audits
    - Cloud Migration
  - Development
    - Web Applications
    - Mobile App Dev
    - E-commerce Platforms
  - Support
    - Managed Services
    - Help Desk
    - Legacy System Maintenance
- Softwares
- Portfolio
- About Us
- Shop
- Contact

## Suggested prompts to use with this skill

- `Add the header dropdown menu structure from the provided design.`
- `Create a responsive header with a Services mega menu and mobile toggle.`
- `Update the header to include Services, Softwares, Portfolio, About Us, Shop, and Contact.`

## Notes

- This skill is workspace-scoped and should be stored in the project root so it can guide current site changes.
- If you want a fully working implementation, apply the markup and CSS from the `Implementation steps` section to `index.php` and `assets/css/style.css`.
