<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package MDLWP
 */

?>
<section class="home-latest-article mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet">
	<div class="mdl-card mdl-shadow--2dp">
	  <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Latest Article</h2>
	  </div>
	
	  <?php $args = array( 'post_type' => 'article', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();  ?>

		<div class="mdl-card__supporting-text">

		  <h3><?php the_title(); ?></h3>
		  <h4 class="sans-serif article-meta">Posted on <a href="<?php echo get_day_link('', '', ''); ?>" title="Other articles posted on <?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></a>, by <a href="<?php the_author_link(); ?>" title="Other articles posted by <?php the_author(); ?>"><?php the_author(); ?></a>.</h4>
		  <?php the_excerpt(); ?>
		  <h5 class="sans-serif post-meta location"><i class="fa fa-map-marker"></i>&nbsp; <?php echo get_post_meta($post->ID, 'Location', true); ?></h5>

		</div>
		<div class="mdl-card__actions mdl-card--border">
		    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		      Read More
		    </a>
		    <?php 
		  		$num_comments = get_comments_number(); // get_comments_number returns only a numeric value

				if ( comments_open() ) {
					if ( $num_comments == 0 ) {
						$comments = __('Leave a Comment');
					} elseif ( $num_comments > 1 ) {
						$comments = $num_comments . __(' Comments');
					} else {
						$comments = __('1 Comment');
					}
					$write_comments = '<a href="' . get_comments_link() .'"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">'. $comments.'</a>';

					echo $write_comments;
				}

				
			?>
		  </div>
		  
		  
		<?php endwhile; ?>
	 
	</div>
	<div class="mdl-card mdl-shadow--2dp call-to-action">
	  <div class="mdl-card__title">
	    <h4 class="mdl-card__title-text sans-serif">Find Articles and Resources</h4>
	  </div>
	  <div class="mdl-card__menu">
	    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
		  <i class="fa fa-chevron-right"></i>
		</button>
	  </div>
	</div>
</section>

