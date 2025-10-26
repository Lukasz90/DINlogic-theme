<?php
/**
 * Header template.
 *
 * @package DINlogic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-wrapper">
    <header class="site-header">
        <div class="branding">
            <div class="branding__mark" aria-hidden="true">DL</div>
            <div class="branding__text">
                <p class="branding__title">DINLogic</p>
                <p class="branding__subtitle">sheme|ru-info</p>
            </div>
        </div>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="header-nav" aria-label="<?php esc_attr_e( 'Primary', 'dinlogic' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'depth'          => 1,
                        'items_wrap'     => '<ul class="menu">%3$s</ul>',
                        'link_before'    => '<span>',
                        'link_after'     => '</span>',
                    )
                );
                ?>
            </nav>
        <?php else : ?>
            <nav class="header-nav" aria-label="<?php esc_attr_e( 'Primary', 'dinlogic' ); ?>">
                <ul class="menu">
                    <li><a href="#features"><?php esc_html_e( 'Catalogue', 'dinlogic' ); ?></a></li>
                    <li><a href="#solutions"><?php esc_html_e( 'Solutions', 'dinlogic' ); ?></a></li>
                    <li><a href="#promotions"><?php esc_html_e( 'Promotions', 'dinlogic' ); ?></a></li>
                    <li><a href="#contact"><?php esc_html_e( 'Contact', 'dinlogic' ); ?></a></li>
                </ul>
            </nav>
        <?php endif; ?>
        <div class="header-actions">
            <?php
            dinlogic_render_button( __( 'Sign in', 'dinlogic' ), '#', 'outline' );
            dinlogic_render_button( __( 'Create account', 'dinlogic' ), '#', 'primary' );
            ?>
        </div>
    </header>
