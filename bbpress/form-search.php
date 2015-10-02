<?php

/**
 * Search 
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<form role="search" method="get" id="bbp-search-form" action="<?php bbp_search_url(); ?>">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input type="hidden" name="action" value="bbp-search-request" />
		<input tabindex="<?php bbp_tab_index(); ?>" type="text" class="mdl-textfield__input" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" name="bbp_search" id="bbp_search" />
		<label class="mdl-textfield__label" for="bbp_search">Search for forum or thread with keywords ...</label>
		<button tabindex="<?php bbp_tab_index(); ?>" class="button mdl-button mdl-js-button" type="submit" id="bbp_search_submit" ><i class="fa fa-search"></i></button>
	</div>
</form>
