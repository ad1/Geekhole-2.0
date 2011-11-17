(function($){
	
	var GH = GH || {};
	
	GH.backLinker = {
		init: function() {
			if ($('#back-to-previous').length > 0) {
				$('#back-to-previous').click(function() {
					console.log(history);
				});
			}
		},
	};
	
	GH.imageZoom = {
			init: function() {
				$('.image-zoom, .wp-caption a').fancybox();
			}
	};
	
	$(document).ready(function() {
		$('#social-bubble').widgetize();
<<<<<<< HEAD
		GH.backLinker.init();
=======
		$('input#s').searchify();
>>>>>>> 0f12185... Added JS to handle search-input (empty, default text, ...)
		GH.imageZoom.init();
	});
})(jQuery);
