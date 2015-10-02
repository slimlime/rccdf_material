<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package MDLWP
 */

?>

<section class="mdl-grid home-primary mdl-shadow--2dp "> 


		<?php $args = array( 'post_type' => 'home-primary', 'posts_per_page' => 4 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();  ?>

			<?php $icon = get_post_meta($post->ID, 'Icon', true); ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>


		 	<div class="mdl-card mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
			  <div class="mdl-card__title" style="background-image:url('<?php echo $image[0]; ?>');">
			    <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php the_content(); ?>
			  </div>
			  <div class="mdl-card__menu">
			    <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?php the_permalink(); ?>">
				  <i class="fa fa-<?php echo $icon; ?>"></i>
				</a>
			  </div>
			 </div>
		<?php endwhile; ?>


</section> <!-- .mdl-cell -->


