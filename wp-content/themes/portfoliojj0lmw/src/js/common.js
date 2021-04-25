(function ($){
	$(document).ready(function ($) {

		$.fn.scrollTo = function (e) {

			e.preventDefault();

			let href = $(this).attr('href');
			let elem = $(href);
			let position = elem.offset().top;
			let speed = 500;

			$('html, body').animate({ scrollTop: position }, speed, 'swing');
			return false;
		}

		$('.menu ul li a').on('click', function(e){
			$(this).scrollTo(e);
		});
		$('.return').on('click', function(e){
			$(this).scrollTo(e);
		});
	});
}(jQuery));
