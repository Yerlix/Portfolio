jQuery(document).ready(function($) {

	$(".ale-tabs").tabs();
	
	$(".ale-toggle").each( function () {
		if($(this).attr('data-id') == 'closed') {
			$(this).accordion({ header: '.ale-toggle-title', collapsible: true, active: false, heightStyle: "content" });
		} else {
			$(this).accordion({ header: '.ale-toggle-title', collapsible: true, heightStyle: "content"});
		}
	});
	
	
});