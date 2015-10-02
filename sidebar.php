<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package MDLWP
 */

if ( is_active_sidebar( 'sidebar-1' ) && !is_bbpress() ) : ?>
 
        <div id="secondary" class="widget-area mdl-cell mdl-cell--4-col mdl-cell--4-col-desktop" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
 
<?php elseif ( is_active_sidebar( 'bbp-sidebar' ) && is_bbpress() ) : ?>
 
     	<div id="secondary" class="widget-area" role="complementary">
    		<?php dynamic_sidebar( 'bbp-sidebar' ); ?>
    	</div><!-- .widget-area -->
 
<?php endif; ?>