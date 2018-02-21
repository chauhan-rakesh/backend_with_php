(function ($) {

		var slider = $('.bxslider').bxSlider({
  mode: 'horizontal'
});

$('#reload-slider').click(function(e){
  e.preventDefault();
  slider.reloadSlider({
    mode: 'fade',
    auto: true,
    pause: 100,
    speed: 500
  });
});

$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
				return false;
		});

		wow = new WOW(
	 {

		}	)
		.init();

})(jQuery);
/*
$(document).ready(function() {

		$('#nav').affix({
offset: {
top: $('header').height()
}
});
	$('#nav').on('affix.bs.affix', function () {
		var navHeight = $('.navbar').outerHeight(true);

		$('#nav + .container').css('margin-top', navHeight);
});
	$('#nav').on('affix-top.bs.affix', function () {
		 $('#nav + .container').css('margin-top', 0);
});


$('#sidebar').affix({
offset: {
top: 17
}
});

});*/
var x = $('header')

$(document).scroll(function(e){
    var scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        console.log(scrollTop);
        $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');


    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');

    }
});
