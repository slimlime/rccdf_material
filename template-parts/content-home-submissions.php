<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package MDLWP
 */

?>

<section class="home-latest-submission mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet">
	<div class="mdl-card mdl-shadow--2dp">
	  <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Latest Submissions</h2>
	  </div>
	</div>

	
	  <?php $args = array( 'post_type' => 'data', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();  ?>
		 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="submission-link mdl-js-ripple-effect">
			<div class="mdl-card mdl-shadow--2dp">
				<div class="mdl-card__supporting-text mdl-grid">

				  <?php $type = get_post_meta($post->ID, 'Type', true); ?>

				  <div class="mdl-cell mdl-cell--3-col">
				  	<a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored custom 
					  <?php if ( $type == 'Tool' ) : ?> 
					  	salmon"><i class="fa fa-wrench"></i>
					  <?php elseif ( $type == 'Collection' ) : ?>
					  	lblue"><i class="fa fa-folder-open"></i>
					  <?php elseif ( $type == 'Dataset' ) : ?>
					  	lbrown"><i class="fa fa-table"></i>
					  <?php endif; ?>
					  </a>
					</div>
					<div class="mdl-cell mdl-cell--9-col">
					  <h3 class="sans-serif"><?php the_title(); ?></h3>
					  <h5 class="sans-serif post-meta"><?php echo get_the_date(); ?></h5>
					  <?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		 </a>
		<?php endwhile; ?>

	<div class="mdl-card mdl-shadow--2dp call-to-action">
	  <div class="mdl-card__title">
	    <h4 class="mdl-card__title-text sans-serif">Explore The Repository</h4>
	  </div>
	  <div class="mdl-card__menu">
	    <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
		  <i class="fa fa-chevron-right"></i>
		</a>
	  </div>
	</div>
	 
	
</section>


