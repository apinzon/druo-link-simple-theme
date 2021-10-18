
	<?php if ( ! is_404() ): ?>

	<footer class="site-footer">

        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

            <?php dynamic_sidebar( 'footer-1' ); ?>

        <?php endif; ?>

	</footer><!-- #colophon -->

    <?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
