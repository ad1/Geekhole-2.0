(function($){
	$.fn.extend({
		widgetize: function(){
			$.extend();
			
			return $(this).each(function() {
				$(this).find("ul li").each(function(){
					$(this).click(function() {
						window.open($(this).attr('data-url'));
					});
					
					$(this).hover(function() {
						var text = $(this).attr('data-text') + 
							'<span class="light">' + 
							$(this).attr('data-light-text') + 
							'</span>';
						
						$('#social-link').html(text);
					});
				});
			});
		}
	});
})(jQuery);