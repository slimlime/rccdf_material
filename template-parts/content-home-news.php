<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package MDLWP
 */

?>
<section class="home-latest-news mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet">

	<div class="mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Latest News</h2>
	  </div>
	  <?php $args = array( 'post_type' => 'news', 'posts_per_page' => 4 );
			$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();  ?>

		<div class="mdl-card__supporting-text mdl-card--border">

		  <h3 class="sans-serif"><?php the_title(); ?></h3>
		  <a class="mdl-button mdl-js-button mdl-button--fab mdl-button--fab-small mdl-js-ripple-effect mdl-button--colored" style="float:right;" href="<?php the_permalink(); ?>">
			  <i class="fa fa-chevron-right"></i>
		  </a>
		  <?php the_content( '... Read More'); ?>
		  <!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		      Read More
		  </a>-->

		</div>
		  
		<?php endwhile; ?>

		<div class="mdl-card__actions mdl-card--border">
	    	<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo get_site_url(); ?>/news/" title="More News Items">
	      		MORE NEWS ITEMS &nbsp;<i class="fa fa-chevron-circle-right"></i>
	    	</a>
	 	</div>
	 
	</div>
</section>


