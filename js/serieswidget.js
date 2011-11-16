(function($){
	$.fn.extend({
		linkify: function(){
			$.extend();
			
			return $(this).each(function() {
				$(this).find("div.series").each(function(){
					$(this).click(function() {
						window.open($(this).attr('data-url'));
					});
				});
			});
		}
	});
})(jQuery);