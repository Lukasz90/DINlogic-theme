<?php
/**
 * Front page template that replicates the DINlogic mockup hero.
 *
 * @package DINlogic
 */

get_header();
?>
<main id="primary" class="site-main">
    <section class="hero">
        <div class="hero__content">
            <div class="hero__inner">
                <div class="hero__body">
                    <div class="hero__intro">
                        <span class="hero__eyebrow">Elektronika przemysłowa · B2B</span>
                        <div class="hero__split">
                            <div class="hero__copy">
                                <h1 class="hero__title"><?php esc_html_e( 'Elektryka i Automatyka — wysyłka 24–48 h', 'dinlogic' ); ?></h1>
                                <p class="hero__description"><?php esc_html_e( 'Zenergia do monogoi – Dla ocieli dla besctie tu resciapew a Euroscia.', 'dinlogic' ); ?></p>
                                <div class="hero__actions">
                                    <?php
                                    dinlogic_render_button( __( 'Zobacz produkty', 'dinlogic' ), '#products' );
                                    dinlogic_render_button( __( 'Zamów od ręki', 'dinlogic' ), '#order', 'outline' );
                                    ?>
                                </div>
                            </div>
                            <?php
                            $hero_device_id   = get_theme_mod( 'dinlogic_hero_device_image' );
                            $hero_device_html = '';

                            if ( $hero_device_id ) {
                                $hero_device_html = wp_get_attachment_image(
                                    $hero_device_id,
                                    'dinlogic-hero',
                                    false,
                                    array( 'loading' => 'lazy' )
                                );
                            } else {
                                $hero_device_file = DINLOGIC_THEME_DIR . '/assets/images/hero-device.png';

                                if ( file_exists( $hero_device_file ) ) {
                                    $hero_device_html = sprintf(
                                        '<img src="%s" alt="" loading="lazy">',
                                        esc_url( DINLOGIC_THEME_URI . '/assets/images/hero-device.png' )
                                    );
                                }
                            }

                            if ( $hero_device_html ) :
                                ?>
                                <div class="hero__device" aria-hidden="true">
                                    <?php echo $hero_device_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="hero__stats">
                            <div class="hero__stat">
                                <span class="hero__stat-value">1 200+</span>
                                <span><?php esc_html_e( 'Referencji magazynowych', 'dinlogic' ); ?></span>
                            </div>
                            <div class="hero__stat">
                                <span class="hero__stat-value">24h</span>
                                <span><?php esc_html_e( 'Średni czas realizacji', 'dinlogic' ); ?></span>
                            </div>
                            <div class="hero__stat">
                                <span class="hero__stat-value">98%</span>
                                <span><?php esc_html_e( 'Pozytywnych opinii B2B', 'dinlogic' ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="hero__order" aria-labelledby="quick-order-title">
                    <div class="quick-order" id="order">
                        <h2 class="quick-order__title" id="quick-order-title"><?php esc_html_e( 'Quick Order PRO', 'dinlogic' ); ?></h2>
                        <p class="hero__description"><?php esc_html_e( 'Wklej numery katalogowe, aby dodać produkty do koszyka w kilka sekund.', 'dinlogic' ); ?></p>
                        <form class="quick-order__form">
                            <div class="quick-order__input">
                                <label for="quick-order-csv"><?php esc_html_e( 'Import CSV', 'dinlogic' ); ?></label>
                                <input id="quick-order-csv" type="text" placeholder="np. 3RT2012-1AB04, QF5/32, ..." data-quick-order-input>
                            </div>
                            <div class="quick-order__actions">
                                <button class="btn" type="submit"><?php esc_html_e( 'Utwórz BOM', 'dinlogic' ); ?></button>
                                <button class="btn btn--outline" data-quick-order-clear><?php esc_html_e( 'Wyczyść', 'dinlogic' ); ?></button>
                            </div>
                        </form>
                        <div class="quick-order__links">
                            <a href="#catalogue"><?php esc_html_e( 'Import CSV', 'dinlogic' ); ?></a>
                            <a href="#support"><?php esc_html_e( 'Wsparcie techniczne', 'dinlogic' ); ?></a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="categories" id="products">
        <div class="categories__heading">
            <h2 class="categories__title"><?php esc_html_e( 'Twoje najczęstsze kategorie', 'dinlogic' ); ?></h2>
            <p class="categories__subtitle"><?php esc_html_e( 'Sprawdź gotowe propozycje przygotowane dla Ciebie', 'dinlogic' ); ?></p>
        </div>
        <div class="categories__grid">
            <?php
            $categories = array(
                array(
                    'icon'        => '⚡',
                    'title'       => __( 'Automatyka', 'dinlogic' ),
                    'description' => __( 'Sterowniki PLC, moduły I/O, przekaźniki.', 'dinlogic' ),
                ),
                array(
                    'icon'        => '🔌',
                    'title'       => __( 'Okablowanie', 'dinlogic' ),
                    'description' => __( 'Przewody instalacyjne, magistrale, kable sterownicze.', 'dinlogic' ),
                ),
                array(
                    'icon'        => '💡',
                    'title'       => __( 'Oświetlenie LED', 'dinlogic' ),
                    'description' => __( 'Przemysłowe źródła światła, stateczniki, oprawy.', 'dinlogic' ),
                ),
                array(
                    'icon'        => '🛡️',
                    'title'       => __( 'Zabezpieczenia', 'dinlogic' ),
                    'description' => __( 'Wyłączniki mocy, styczniki, ochronniki przepięciowe.', 'dinlogic' ),
                ),
                array(
                    'icon'        => '🔧',
                    'title'       => __( 'Narzędzia serwisowe', 'dinlogic' ),
                    'description' => __( 'Praska, tester instalacji, zestawy montażowe.', 'dinlogic' ),
                ),
                array(
                    'icon'        => '🌐',
                    'title'       => __( 'Sieć i IoT', 'dinlogic' ),
                    'description' => __( 'Routery przemysłowe, bramy IoT, konwertery.', 'dinlogic' ),
                ),
            );

            foreach ( $categories as $category ) :
                ?>
                <a class="category-card" href="#">
                    <span class="category-card__icon" aria-hidden="true"><?php echo esc_html( $category['icon'] ); ?></span>
                    <span class="category-card__title"><?php echo esc_html( $category['title'] ); ?></span>
                    <span class="category-card__description"><?php echo esc_html( $category['description'] ); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="info-banner" id="promotions">
        <div>
            <h2 class="info-banner__title"><?php esc_html_e( 'Dedykowany opiekun B2B', 'dinlogic' ); ?></h2>
            <p class="info-banner__description"><?php esc_html_e( 'Wspieramy projekt od pierwszego zapytania po uruchomienie. Skontaktuj się z nami, aby otrzymać spersonalizowaną ofertę.', 'dinlogic' ); ?></p>
        </div>
        <div>
            <?php dinlogic_render_button( __( 'Umów konsultację', 'dinlogic' ) ); ?>
        </div>
    </section>
</main>
<?php
get_footer();
