<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MDLWP
 */

?>

	<?php do_action( 'mdlwp_before_closing_content' ); ?>

	</div><!-- #content -->
    </main> <!-- .mdl-layout__content -->
		<footer class="mdl-mega-footer">

		<?php do_action( 'mdlwp_after_opening_footer' ); ?>

		<?php get_template_part( 'template-parts/content', 'footer' ); ?>

		<?php do_action( 'mdlwp_before_closing_footer' ); ?>

		</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

<?php do_action( 'mdlwp_before_closing_body' ); ?>

</body>
</html>
