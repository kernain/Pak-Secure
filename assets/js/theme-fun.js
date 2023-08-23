$(function () {
  $(".mobile-nav-btn").click(function () {
    $(".mobile-navbar-main").addClass("active");
  });

  $(".mobile-navbar-main .close-btn").click(function () {
    $(".mobile-navbar-main").removeClass("active");
  });
  $(".mobile-navbar-main").click(function () {
    $(".mobile-navbar-main").removeClass("active");
  });
});

// Testimonial Slider

$('.banner-slider').slick({
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: true,
	asNavFor: '.banner-image-slider',
	fade: true,
	focusOnSelect: true,
	 responsive: [
      {
        breakpoint: 1365,
        settings: {
          arrows: false,
        }
      }
    ]
});


$('.banner-image-slider').slick({
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
	asNavFor: '.banner-slider',
	fade: true,
});





// bannerImageSlider.controller.control = this.bannerContentSlider;



// Our Clients Slider

var swiper = new Swiper(".clients-slider", {
  loop: true,
  autoplay: {
    enabled: false,
    delay: 2500,
    disableOnInteraction: false,
  },
  speed: 1000,
  slidesPerView: 3,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    980: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },
  },
});


// $(document).on("change", ".wpcf7-form-control", function(){
//     if($(this).val() == "Single Trip"){
// 		alert('Hello');
// //       $("div[data-id='dateTo']").addClass("show"); 
		
//     }
// });
// Our Partners Slider

var swiper = new Swiper(".partners-slider", {
  loop: true,
  autoplay: {
    enabled: true,
    delay: 2500,
    disableOnInteraction: false,
  },
  speed: 1000,
  slidesPerView: 5,
  spaceBetween: 30,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    480: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1280: {
      slidesPerView: 5,
    },
  },
});

// News Slider

var newsSlider = new Swiper(".news-slider", {
  loop: true,
  autoplay: {
    enabled: true,
    delay: 2000,
  },
  speed: 1000,
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
  pagination: {
    el: ".swiper-pagination",
    clickable:'true',
  dynamicBullets: true,
  },
});

$(".counter11").each(function () {
  $(this)
    .prop("Counter11", 0)
    .animate(
      {
        Counter: $(this).text(),
      },
      {
        duration: 4000,
        easing: "swing",
        step: function (now) {
          $(this).text(Math.ceil(now));
        },
      }
    );
});

// $(window).scroll(function () {
//   inCounter();
// });
