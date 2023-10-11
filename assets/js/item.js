	var swiper1 = new Swiper(".swiper1", {
		navigation: {
			nextEl: ".swiper1_next",
			prevEl: ".swiper1_prev",
		},
		scrollbar: {
			el: ".swiper1_scrollbar",
			// hide: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			501: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			1025: {
				slidesPerView: 'auto',
				spaceBetween: 20,
			}
		}
	});


	var swiper12 = new Swiper(".swiper12", {
		navigation: {
			nextEl: ".swiper12_next",
			prevEl: ".swiper12_prev",
		},
		scrollbar: {
			el: ".swiper12_scrollbar",
			// hide: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			501: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			1025: {
				slidesPerView: 'auto',
				spaceBetween: 20,
			}
		}
	});


	// var mySwiper_5 = new Swiper(".mySwiper_5", {
	// 	// navigation: {
	// 	// 	nextEl: ".swiper_next_1",
	// 	// 	prevEl: ".swiper_prev_1",
	// 	// },
	// 	scrollbar: {
	// 		el: ".swiper_scrollbar5",
	// 		// hide: true,
	// 	},
	// 	breakpoints: {
	// 		320: {
	// 			slidesPerView: 1,
	// 			spaceBetween: 20,
	// 		},
	// 		501: {
	// 			slidesPerView: 2,
	// 			spaceBetween: 30,
	// 		},
	// 		1025: {
	// 			slidesPerView: 'auto',
	// 			spaceBetween: 20,
	// 		}
	// 	}
	// });

	var swiper2 = new Swiper(".swiper2", {
		navigation: {
			nextEl: ".swiper2_next",
			prevEl: ".swiper2_prev",
		},
		scrollbar: {
			el: ".swiper2_scrollbar",
			// hide: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			501: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			1025: {
				slidesPerView: 'auto',
				spaceBetween: 30,
			}
		}
	});





	var rbl4_c = new Swiper(".rbl4_c", {
		slidesPerView: "auto",
		navigation: {
			nextEl: ".swiper_next_1",
			prevEl: ".swiper_prev_1",
		},
	});






$(document).ready(function() {







	// add product
	$('.img_inc_pop').click(function(){
		$('.img_inc_block').addClass('pop_bl_act');
		$('#html').addClass('ovr_h');

		// mySwiper_87.activeIndex($(this).attr('data-n'))
		// mySwiper_87.initialSlide = ;
		// console.log($(this).attr('data-n'));

		san_n = $(this).attr('data-n')

		var swiper87 = new Swiper(".swiper87", {
			slidesPerView: 1,
			initialSlide: san_n,
			navigation: {
				nextEl: ".swiper87_next",
				prevEl: ".swiper87_prev",
			},
			scrollbar: {
				el: ".swiper87_scrollbar",
				// hide: true,
			},
		});

		$('.lazy_zoom').lazy({bind:"event"});

	})
	$('.img_inc_back').click(function(){
		$('.img_inc_block').removeClass('pop_bl_act');
		$('#html').removeClass('ovr_h');
	})










})