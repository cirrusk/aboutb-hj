// ca_view.js

$(function(){

	$(".ca-tabBox>li").click(function(e) {
		e.preventDefault();
		$(this).addClass('on').siblings().removeClass('on');

		var idx = $(this).index();
		$("#ca-tab-cont>.ca-inbox>div").eq(idx).addClass('on').siblings().removeClass('on');
	}); // click //

	// a태그 기능 죽이기
	$(".ca-favor a").click(function(e) {
		e.preventDefault();
	});

	
	// Swiper

	var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 3,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });

}); // jQB //