# DINlogic Theme

Custom WordPress theme inspired by the DINLogic concept hero screen. The front page features a gradient backdrop, quick order widget, category shortcuts, and a promotional banner matching the provided mock-up.

## Front Page Layout

1. **Hero sekcja (górna część strony)** – gradientowe tło z lewej kolumną treści. Zawiera etykietę branżową, nagłówek z głównym hasłem, opis, dwa przyciski CTA oraz trzy kafelki statystyk.
2. **Panel szybkiego zamówienia** – po prawej stronie hero znajduje się moduł „Quick Order PRO" z miejscem na grafikę urządzenia DIN (konfigurowaną w Personalizacji lub z lokalnego pliku), formularzem wklejania numerów katalogowych, przyciskiem tworzenia BOM oraz linkami do importu CSV i wsparcia.
3. **Siatka kategorii** – sekcja „Twoje najczęstsze kategorie” pod hero. W nagłówku tytuł i opis, a niżej dwukolumnowa (na desktopie) siatka kafelków kategorii z ikoną emoji, nazwą i krótką charakterystyką.
4. **Baner informacyjny** – na dole front page widoczny jest moduł z hasłem „Dedykowany opiekun B2B”, opisem oraz przyciskiem „Umów konsultację”. Sekcja ta posiada jednolite tło kontrastowe wobec hero.

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

- Repozytorium ignoruje `assets/images/hero-device.png`, więc możesz umieścić własny plik PNG obok motywu bez ryzyka zablokowania aktualizacji gałęzi.
- Alternatywnie skorzystaj z Personalizatora: **Wygląd → Personalizacja → Strona główna – Hero → Grafika urządzenia w hero** i wgraj ilustrację do biblioteki mediów WordPressa.
