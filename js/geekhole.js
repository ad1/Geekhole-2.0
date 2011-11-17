(function($){
	
	var GH = GH || {};
	
	GH.imageZoom = {
			init: function() {
				$('.image-zoom, .wp-caption a').fancybox();
			}
	};
	
	$(document).ready(function() {
		$('#social-bubble').widgetize();
		$('input#s').searchify();
		GH.imageZoom.init();
	});
})(jQuery);