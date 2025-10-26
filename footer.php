<?php
/**
 * Footer template.
 *
 * @package DINlogic
 */
?>
    <footer class="site-footer" id="contact">
        <div class="site-footer__inner">
            <div>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> DINLogic. <?php esc_html_e( 'All rights reserved.', 'dinlogic' ); ?></div>
            <div>
                <a href="#privacy"><?php esc_html_e( 'Privacy policy', 'dinlogic' ); ?></a>
                &nbsp;&bull;&nbsp;
                <a href="#terms"><?php esc_html_e( 'Terms of use', 'dinlogic' ); ?></a>
            </div>
        </div>
    </footer>
</div><!-- .site-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
