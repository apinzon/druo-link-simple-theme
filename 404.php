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

    <section class="box-template">
        <article class="error-404 not-found default-max-width">

            <div class="wp-block-column" style="flex-basis:100%">
                <h4 class="">
                    <img loading="lazy" class="alignnone  wp-image-78" src="/wp-content/uploads/2021/07/embarrassed-150x150.png" alt="" srcset="/wp-content/uploads/2021/07/embarrassed-150x150.png 150w, /wp-content/uploads/2021/07/embarrassed-300x300.png 300w, /wp-content/uploads/2021/07/embarrassed-100x100.png 100w, /wp-content/uploads/2021/07/embarrassed-140x140.png 140w, /wp-content/uploads/2021/07/embarrassed-500x500.png 500w, /wp-content/uploads/2021/07/embarrassed-350x350.png 350w, /wp-content/uploads/2021/07/embarrassed.png 512w" sizes="(max-width: 125px) 100vw, 125px" width="125" height="125">
                </h4>
                <h4><strong><?php echo esc_html__( '404', 'druo' ); ?></strong></h4>

                <p><?php echo esc_html__( 'Page Not Found', 'druo' ); ?></p>

                <a class="button" href="<?php echo esc_url( home_url() ); ?>"><span><?php echo esc_html__( 'Back Home', 'salient' ); ?> </span><i class="icon-button-arrow"></i></a>

            </div>

        </article><!-- .error-404 -->
    </section>

<?php
get_footer();
