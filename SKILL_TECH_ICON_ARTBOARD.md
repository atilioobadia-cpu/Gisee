# Skill: Professional Tech Icon Artboard Customization

**Purpose:** Transform a hero artboard from ornamental design into a tech-focused, professional layout with transparent bordered cards, rotating icons, and dotted connectors.

**Scope:** Laravel Blade views + CSS styling for hero sections, compatible with any card-based layout system.

---

## Workflow

### 1. Define Tech Icon Strategy
- **Identify use cases:** Web development, security, coding, administration, networking, API integration
- **Select icons from existing palette:** `browser-layout`, `shield-check`, `monitor-code`, `network-nodes`, `api-merge`
- **Verify icon availability:** All icons must exist in `config/site.php` as inline SVG definitions
- **Add custom icons if needed:** Create new SVG entries with unique names (e.g., `computer-3d`)

### 2. Update Blade Template Structure
**Location:** `resources/views/sections/hero.blade.php`

**Changes:**
- Replace ornamental elements (silhouettes, gradients, metrics) with **tech icon cards**
- Swap icon references: `team-user` → `computer-3d`, `shield` → `shield-check`, silhouette → `browser-layout`
- Update nested DOM: Replace `.profile-silhouette` with `.profile-card-shell` + `.profile-card-icon`
- Update mini-chips: `workflow`, `analytics` → `network-nodes`, `api-merge`
- Restructure `.chip-graphic` to wrap a `.chip-core-icon` instead of empty `.chip-core`

### 3. Apply Transparent + Border Styling
**Location:** `resources/css/app.css`

**Card Styling Pattern:**
```css
.art-card {
  border: 1px solid rgba(255, 255, 255, 0.24);      /* Subtle white border */
  background: rgba(255, 255, 255, 0.06);            /* Transparent white base */
  backdrop-filter: blur(10px);                       /* Glass effect */
  box-shadow: 0 18px 40px rgba(13, 12, 10, 0.06);  /* Soft shadow */
}
```

**Icon Container Styling:**
- Background: `rgba(18, 16, 14, 0.55)` to `0.62` (semi-transparent dark)
- Border: `1px solid rgba(255, 255, 255, 0.25)` (subtle contrast)
- Display: `flex` + `align-items: center` + `justify-content: center` (centered content)

**Mini-Chip Styling:**
- Border: `1px dashed rgba(255, 255, 255, 0.24)` (dotted for visual separation)
- Background: `rgba(255, 255, 255, 0.07)` (very light transparency)

### 4. Add Rotating Icon Animation
**CSS Keyframe:**
```css
@keyframes iconRotate {
  0% { transform: rotateY(0deg); }
  100% { transform: rotateY(360deg); }
}
```

**Apply to icon SVGs:**
- Add `animation: iconRotate 10s linear infinite;` to `.device-icon svg`, `.profile-card-icon`, `.chip-core-icon`, `.mini-chip span svg`
- Duration: 10s (smooth, not jarring)
- Timing: `linear` (consistent speed)

### 5. Update Connectors to Dotted Lines
**Location:** `.art-connector` class

**Change:**
```css
/* Before */
.art-connector {
  background: #12100e;                              /* Solid line */
  border-radius: 999px;
}

/* After */
.art-connector {
  background: none;                                 /* No fill */
  border: 1px dotted rgba(255, 255, 255, 0.35);   /* Dotted border */
  border-radius: 999px;
}
```

### 6. Quality Checklist
- [ ] All tech icons render correctly and rotate smoothly
- [ ] Card backgrounds are transparent but visible on light/dark backgrounds
- [ ] Borders have sufficient contrast (test against page background)
- [ ] Dotted connectors align properly with cards (adjust width/height if needed)
- [ ] Animations don't cause layout shift (use `transform` only)
- [ ] No color gradients remain (all transparent/frosted glass style)
- [ ] Font-based icons and SVG icons both animate
- [ ] Responsive layout maintained (no overlaps on mobile)

---

## Common Pitfalls

| Issue | Solution |
|-------|----------|
| Icons don't rotate | Ensure `animation` is applied to `svg` element, not parent container |
| Connectors disappear | Check border color has sufficient opacity (0.35+) |
| Cards look flat | Add `backdrop-filter: blur()` for glass effect and subtle shadows |
| Spacing broken on mobile | Keep `.art-connector` width/height values proportional; test on `max-width: 768px` |
| Icons misaligned in card | Use `display: flex` + `align-items/justify-content: center` on parent |

---

## Configuration Points

**Icon speed:** Change `10s` to `8s` for faster, `12s` for slower rotation.

**Transparency levels:**
- Card background: `rgba(255, 255, 255, 0.06)` → adjust second value (0.00–0.15 range)
- Icon background: `rgba(18, 16, 14, 0.55)` → adjust second value (0.40–0.70 range)
- Border opacity: `rgba(255, 255, 255, 0.24)` → adjust to 0.15–0.40 for visibility

**Color scheme:** Change `#ffffff` (white) borders to match brand colors if needed.

---

## Related Skills
- **Icon Library Management:** Adding/registering new inline SVG icons
- **Glass Morphism Styling:** Backdrop blur + transparency for modern UI
- **CSS Animation Optimization:** Preventing jank and layout thrashing
- **Responsive Card Systems:** Adapting artboards to different screen sizes

