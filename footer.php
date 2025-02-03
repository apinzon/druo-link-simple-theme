
    <footer class="site-footer">

        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="footer-desktop">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-mobile' ) ) : ?>
            <div class="footer-mobile">
                <?php dynamic_sidebar( 'footer-mobile' ); ?>
            </div>
        <?php endif; ?>

    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
