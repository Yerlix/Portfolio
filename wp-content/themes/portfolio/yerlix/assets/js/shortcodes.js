jQuery(document).ready(function ($) {
	$.fn.yerlix_sliders_editor_shortcode = function() {
		$(this).each(function(){
			var select = $('#yerlix-slider-editor-shortcode-select');
			var settings = $('#yerlix-slider-editor-shortcode-settings');
			settings.hide();
			select.change(function(){
				if ('' == select.val()) {
					settings.hide();
					return;
				}
				settings.show();
			});
			$('#yerlix-slider-editor-shortcode-insert').click(function(e){
				e.preventDefault();
				window.send_to_editor(yerlix_generate_slider_shortcode(select.val(), settings.find('select')));
			});
		});		
	}
	$('#yerlix-slider-editor-shortcode-wrap').yerlix_sliders_editor_shortcode();
});