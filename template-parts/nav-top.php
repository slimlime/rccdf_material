<?php
/**
 * The template part for displaying the top navigation row
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

?>
<section class="top-nav">
	<div class="mdl-layout__header-row mdlwp-1200">
		<div class="mdl-layout-spacer"></div>

		<div class="mdlwp-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">   
	      <?php get_search_form(); ?>
	    </div>
	  
	    <?php
			$args = array(
		        'theme_location' => 'top',
		        'container'       => 'nav',
		        'items_wrap' => '%3$s',
		        'container_class' => 'mdl-navigation',
				'walker' => new MDLWP_Nav_Walker()
			);

			if (has_nav_menu('top')) {
			       wp_nav_menu($args);
			    }
		?>
    </div>
</section>
