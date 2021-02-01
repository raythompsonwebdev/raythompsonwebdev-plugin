(function ($) {
	//Hero Slider
	$('.hero-slider ul a').click(function () {
		//reset all the items
		$('.customBlock ul a').removeClass('active');
		//set current item as active
		$(this).addClass('active');
		//scroll it to the right position
		$('.hero-slider > .mask').scrollTo($(this).attr('rel'), 300);
		//disable click event
		return false;
	});
})(jQuery);
