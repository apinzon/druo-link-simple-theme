<?php
/**
 * Template Name: Page with a Box
 *
 * The template for displaying the content of a page in a box in the middle.
 *
 * @since DRUO Simple 1.0
 */

get_header();

?>

<section class="box-template">

    <?php

    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content/content-page' );

        // If comments are open or there is at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
    endwhile; // End of the loop.

    ?>
</section>

<?php

get_footer();
