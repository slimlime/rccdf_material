jQuery(document).ready(function($){

	//
	//Class additions for packages that can't be overwritten.
	//
	//
	//


	// plugin buttons
	$('input[type="submit"], button[type="submit"]').addClass('mdl-button mdl-js-button mdl-button--raised mdl-button--colored');

	// forum widgets
	// - recent topics
	$('.widget_display_topics ul').find('li').each(function(){
		$(this).find('.bbp-forum-title').after('<br/>');
		$(this).wrapInner('<div style="display:inline-block;">');
		$(this).prepend('<i class="fa fa-comments"></i>');
	});

	// forum widgets
	// - subscribe button
	$('.subscription-toggle').prepend('<i class="fa fa-bookmark"></i>').addClass('mdl-button mdl-js-button mdl-js-ripple-effect');

	// forum widgets
	// - statisics widget
	$('.widget_display_stats')


});