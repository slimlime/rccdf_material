<?php
/**
 * The template that controls footer logos and content.
 *
 * @package MDLWP
 */

?>
<section class="mdl-grid footer-content mdlwp-1200">
	<div class="mdl-cell mdl-cell--12-col">
		<h5><?php bloginfo( 'description' ); ?></h5>
	</div>
	<div class="mdl-cell mdl-cell--1-col"></div>
	<div class="mdl-cell mdl-cell--5-col mdl-cell--12-col-tablet">
		<p>Produced By:</p>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adb-logo.png"/>
	</div>
	<div class="mdl-cell mdl-cell--5-col mdl-cell--12-col-tablet">
		<p>In collaboration with these Consortium Partners:</p>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gu-logo.png"/>
			</div>
			<div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/csiro-logo.png"/>
			</div>
			<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adbi-logo.png"/>
			</div>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--1-col"></div>

</section>
