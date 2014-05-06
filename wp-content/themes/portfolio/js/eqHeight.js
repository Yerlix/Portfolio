(function($) {
	$.fn.eqHeight = function(grTarget) {

		if(grTarget != null){
			this.height($(grTarget).height());
		}else {
			var highestBox = 0;
		    this.each(function(){

		    	var target = $(this).data('target');

		    	if($(this).data('target') !== 'undefined') {
		    		$(this).height($(target).height());

		    		$("#test").append($(target).height());
		    	}

		    	if($(this).height() > highestBox) {
		           highestBox = $(this).height(); 
		    	}
		    });  

		    $(this).height(highestBox);
		}
	};
		    
})(jQuery);



	