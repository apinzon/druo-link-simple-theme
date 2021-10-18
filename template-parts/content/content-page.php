<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since DRUO Simple 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--	--><?php //if ( ! is_front_page() ) : ?>
<!--		<header class="entry-header alignwide">-->
<!--			--><?php //get_template_part( 'template-parts/header/entry-header' ); ?>
<!--		</header>-->
<!--	--><?php //endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
