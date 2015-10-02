<?php
/**
 * The template part for displaying the main navigation
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

?>
<section class="main-nav">
  <header class=" mdl-layout--fixed-header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row mdlwp-1200">

	      <!-- Title -->
  		  
  		   <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
			    <div class='site-logo mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--3-col-phone'>
			        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
			    </div>
			<?php else : ?>
			    <span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
			<?php endif; ?>
	      <!-- Add spacer, to align navigation to the right -->
	      <div class="mdl-layout-spacer"></div>
	      <!-- Navigation -->
	      <?php
				$args = array(
			        'theme_location' => 'primary',
			        'container'       => 'nav',
			        'items_wrap' => '%3$s',
			        'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
					'walker' => new MDLWP_Nav_Walker()
				);

				if (has_nav_menu('primary')) {
				       wp_nav_menu($args);
				    }
			?>
			<!-- Right aligned menu below button -->
			<button id="mobile-main-nav" class="mdl-button mdl-button--colored mdl-js-button mdl-button--icon mdl-layout--small-screen-only collapsed-nav-button">
			  <i class="material-icons">more_vert</i>
			</button>

			<?php
				$args = array(
			        'theme_location' => 'primary',
			        'items_wrap' => '<ul for="mobile-main-nav" id="%1$s" class="%2$s">%3$s</ul>',
			        'container' => false,
			        //'menu_id' => 'mobile-main-nav',
			        'menu_class' => 'mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect',
					'walker' => new MDLWP_Nav_Walker()
				);

				if (has_nav_menu('primary')) {
				       wp_nav_menu($args);
				    }
			?>



	  </div>
  </header>
</section>
