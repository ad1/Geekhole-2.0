(function($){
	$.fn.extend({
		searchify: function(){
			$.extend();
			
			return $(this).each(function() {
				if ($(this).attr('id').length > 0 && $(this).attr('data-default').length > 0) {
					$(this).focus(function() {
						if ($(this).val() == $(this).attr('data-default')) {
							$(this).val("");
							$(this).addClass('dark');
						}
					});
					
					$(this).blur(function() {
						if ($(this).val() == "") {
							$(this).val($(this).attr('data-default'));
							if ($(this).hasClass('dark')) {
								$(this).removeClass('dark');
							}
						}
					});
				}
			});
		}
	});
})(jQuery);