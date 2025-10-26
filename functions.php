<?php
/**
 * DINlogic Theme functions.
 */

define( 'DINLOGIC_THEME_VERSION', '1.0.0' );

define( 'DINLOGIC_THEME_DIR', get_template_directory() );
define( 'DINLOGIC_THEME_URI', get_template_directory_uri() );

add_action( 'after_setup_theme', 'dinlogic_setup_theme' );
/**
 * Theme setup.
 */
function dinlogic_setup_theme() {
    load_theme_textdomain( 'dinlogic', DINLOGIC_THEME_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'dinlogic' ),
            'utility' => __( 'Utility Menu', 'dinlogic' ),
        )
    );
}

add_action( 'wp_enqueue_scripts', 'dinlogic_enqueue_assets' );
/**
 * Enqueue theme assets.
 */
function dinlogic_enqueue_assets() {
    wp_enqueue_style( 'dinlogic-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'dinlogic-style', get_stylesheet_uri(), array( 'dinlogic-google-fonts' ), DINLOGIC_THEME_VERSION );

    wp_enqueue_script( 'dinlogic-scripts', DINLOGIC_THEME_URI . '/js/theme.js', array(), DINLOGIC_THEME_VERSION, true );
}

/**
 * Register custom image sizes used in the hero.
 */
add_action( 'after_setup_theme', function () {
    add_image_size( 'dinlogic-hero', 640, 800, false );
} );

/**
 * Short helper to render CTA buttons with consistent styles.
 *
 * @param string $label   Button label.
 * @param string $url     Button URL.
 * @param string $variant Either `primary` (default) or `outline`.
 */
function dinlogic_render_button( $label, $url = '#', $variant = 'primary' ) {
    $classes = 'btn';

    if ( 'outline' === $variant ) {
        $classes .= ' btn--outline';
    }

    printf(
        '<a class="%1$s" href="%2$s">%3$s</a>',
        esc_attr( $classes ),
        esc_url( $url ),
        esc_html( $label )
    );
}
