<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @since DRUO Simple 1.0
 */

get_header();
?>

    <div class="error-404 not-found default-max-width">
        <h1><?php echo esc_html__( '404', 'druo' ); ?></h1>
        <h2><?php echo esc_html__( 'Page Not Found', 'druo' ); ?></h2>

        <a class="button" href="<?php echo esc_url( home_url() ); ?>"><span><?php echo esc_html__( 'Back Home', 'salient' ); ?> </span><i class="icon-button-arrow"></i></a>

    </div><!-- .error-404 -->

<?php
get_footer();
