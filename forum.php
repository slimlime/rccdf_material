<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package MDLWP
 */

get_header(); ?>

		
	<div id="primary" class="content-area">
		<main id="main" class="site-main forum mdl-grid mdlwp-1200" role="main">

			<?php do_action( 'mdlwp_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'forum' ); ?>

			<?php endwhile; // End of the loop. ?>

			<?php do_action( 'mdlwp_after_content' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
