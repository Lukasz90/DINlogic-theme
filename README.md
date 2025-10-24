# DINlogic Theme

Custom WordPress theme inspired by the DINLogic concept hero screen. The front page features a gradient backdrop, quick order widget, category shortcuts, and a promotional banner matching the provided mock-up.

## Installation

1. Copy the theme directory to `wp-content/themes/dinlogic` in your WordPress installation.
2. Activate the **DINlogic Theme** from the WordPress admin panel.
3. Set the "DINlogic" front page as the static homepage under **Settings → Reading** if it is not automatically applied.

## Development

- Primary styles live in `style.css` and use CSS custom properties for colors and spacing.
- JavaScript enhancements are in `js/theme.js` and currently power the quick-order clear button.
- Navigation uses the "Primary" menu location; default links are provided if the menu is not assigned.
- The front page content is defined in `front-page.php`. Remove or adapt sections as needed.

## Assets

The design relies on gradients and CSS to emulate product visuals, so no external images are required. Add product photography by swapping the `.hero__device` element inside `front-page.php` if desired.
