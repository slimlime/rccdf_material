<?php
/**
 *
 * Template Name: Page Home
 *
 *
 * @package MDLWP
 */

get_header(); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main mdlwp-1200" role="main">

			<?php do_action( 'mdlwp_before_content' ); ?>

			<?php get_template_part( 'template-parts/content', 'home-primary' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<section class="mdl-grid home-secondary">
					<?php get_template_part( 'template-parts/content', 'home-article'); ?>

					<?php get_template_part( 'template-parts/content', 'home-submissions'); ?>

					<?php get_template_part( 'template-parts/content', 'home-news'); ?>
				</section>

			<?php endwhile; // End of the loop. ?>

			<?php get_template_part( 'template-parts/content', 'home-tertiary' ); ?>

			<?php do_action( 'mdlwp_after_content' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
