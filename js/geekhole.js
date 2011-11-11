(function($){
	
	var GH = GH || {};
	
	GH.backLinker = {
		herp: 'asdf',
		derp: 'foo',
		init: function() {
			if ($('#back-to-previous').length > 0) {
				$('#back-to-previous').click(function() {
					console.log(history);
				});
			}
		},
	};
	
	$(document).ready(function() {
		$('#social-bubble').widgetize();
		GH.backLinker.init();
	});
})(jQuery);