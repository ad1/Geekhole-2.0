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
		$$('#geekhole-series').linkify();
		GH.backLinker.init();
		GH.imageZoom.init();
	});
})(jQuery);