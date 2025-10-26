<?php
/**
 * Default index template.
 *
 * @package DINlogic
 */

get_header();
?>
<main id="primary" class="site-main">
    <section class="content">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Nothing found.', 'dinlogic' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
