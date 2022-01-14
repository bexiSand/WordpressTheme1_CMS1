(function($){

	// Menu icon

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	// Search icon

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});

})(jQuery);