$.fn.expandable = function( options ) {
	var expd = $.extend({
		// These are the defaults.
		target	: ".answer",
		group	: "num"
	}, options );
	return this.each(function() {
		var $this = $(this);
		$this.click(function() {
			var num = $this.attr(expd.group);
			var answ = $(expd.target+"["+expd.group+"="+num+"]");
			if ($this.hasClass('expanded') && !answ.hasClass('animated')) {
				$this.removeClass('expanded');
				answ.addClass('animated');
				answ.slideUp({ 
				queue	:	false ,
				complete:	function() {
					//$this.removeClass('expanded');
					answ.removeClass('animated');
				}});
			} else if (!answ.hasClass('animated')) {
				$this.addClass('expanded');
				answ.addClass('animated');
				answ.slideDown({ 
				queue	:	false ,
				complete: function() {
					//$this.addClass('expanded');
					answ.removeClass('animated');
				}});
			}
		});
	});
};