//Hamburger Menu
var Menu = {
  el: {
  ham: jQuery('.menu-m'),
  menuTop: jQuery('.menu-top'),
  menuMiddle: jQuery('.menu-middle'),
  menuBottom: jQuery('.menu-bottom')
  },
  init: function() {
  Menu.bindUIactions();
  },
  bindUIactions: function() {
  Menu.el.ham
  .on(
  'click',
  function(event) {
  Menu.activateMenu(event);
  event.preventDefault();
  }
  );
  },
  activateMenu: function() {
  Menu.el.menuTop.toggleClass('menu-top-click');
  Menu.el.menuMiddle.toggleClass('menu-middle-click');
  Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
  }
  };
Menu.init();

// Header change on scroll
$(document).ready(function() {
$(window).scroll(function(){
    if ($(this).scrollTop() > 70) {
       $('.logo_header').addClass('logo-change-on-scroll'); 
       $('.logo_site').addClass('logo-change-on-scroll'); 
       $('.headerbar').addClass('reduce-header-height-on-scroll');
      //  $('.navbar-toggler2').addClass('scroll-hamburger');
       $('header').addClass('shadow-show-on-scroll');
       $('body').addClass('body-on-scroll');
    } else {
       $('.logo_header').removeClass('logo-change-on-scroll');
       $('.logo_site').removeClass('logo-change-on-scroll');
       $('.headerbar').removeClass('reduce-header-height-on-scroll');
      //  $('.navbar-toggler2').removeClass('scroll-hamburger');
       $('header').removeClass('shadow-show-on-scroll');
       $('body').removeClass('body-on-scroll');
    }
    if ($(this).scrollTop() > 30) {
      $('body').addClass('body-on-scroll');
   } else {
      $('body').removeClass('body-on-scroll');
   }
});
});

// for rightmenu.php header
// $(document).ready(function() {
//   $('.navbar-toggler').click(function() {
//     $('.menu-menu-1-container').toggleClass('act');
//   });

//   $('li a').click(function() {
//     $('.menu-menu-1-container').removeClass('act');
//     $('.menu-bottom').removeClass('menu-bottom-click');
//     $('.menu-top').removeClass('menu-top-click');
//   });
// });

// Search Result
// $('.control').click( function(){
//   $('body').addClass('search-active');
//   $('.fa-search-loc').addClass('d-none');
//   $('.input-search').focus();
// });
// Search Result END

// $('.icon-close').click( function(){
//   $('body').removeClass('search-active');
//   $('.fa-search-loc').removeClass('d-none');
// });



// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("standard-header").style.cssText = "top: 0px; transition: .5s";
//   } else {
//     document.getElementById("standard-header").style.cssText = "top: -45px; transition: .5s;";
//   }
//   prevScrollpos = currentScrollPos;
// }

// $(document).ready(function() {
//   const navbarToggler = $('.navbar-toggler');
//   const site = $('.site-home, .site, .site-main, .page-all, .site-other');
//   const body = $('html');
//   navbarToggler.on('click', function() {
//     body.toggleClass('no-scroll');
//     site.toggleClass('filter-style');
//   });
//   });


// Menu for standard header with blur effect
$(document).ready(function() {
const navbarToggler = $('.navbar-toggler-standard');
const site = $('.site');
const body = $('body');

navbarToggler.on('click', function() {
  if (body.hasClass('no-scroll')) {
    body.removeClass('no-scroll');
    site.removeClass('filter-style');
    $(window).scrollTop(body.data('scroll-position')); // Restore previous scroll position
  } else {
    body.data('scroll-position', $(window).scrollTop()); // Save current scroll position
    body.addClass('no-scroll');
    site.addClass('filter-style');
  }
});
});


// Close navbar when click on link ( used for Landingpages )
function closeNavbar() {
$(".navbar-toggler").attr("aria-expanded", "false");
$(".navbar-collapse").removeClass("show");
$(".menu-top").removeClass("menu-top-click");
$(".menu-middle").removeClass("menu-middle-click");
$(".menu-bottom").removeClass("menu-bottom-click");
$("body").removeClass("no-scroll");
$(".site").removeClass("filter-style");
$(".menu-menu-1-container").removeClass("act");
toggleScroll();
}
$(".navbar-collapse li a").on("click", function() {
closeNavbar();
});


//For all navigation, add menu-open class on body
document.addEventListener('DOMContentLoaded', function () {
var navbar = document.getElementById('navbarNav');

navbar.addEventListener('show.bs.collapse', function () {
  document.body.classList.add('menu-open');
});

navbar.addEventListener('hide.bs.collapse', function () {
  document.body.classList.remove('menu-open');
});
});

var swiper = new Swiper(".bannerSwiper", {
slidesPerView: 1,
loop: true,
effect: "fade",
// autoHeight: true,
navigation: {
  nextEl: ".banner-button-next",
  prevEl: ".banner-button-prev",
},
autoplay: {
  delay: 3000,
  disableOnInteraction: true,
},
});

var swiper = new Swiper(".swiperCard", {
effect: "cards",
grabCursor: true,
autoplay: {
  delay: 3500,
  disableOnInteraction: false,
},
});

var swiper = new Swiper(".ourServicesSwiper", {
slidesPerView: 1.3,
spaceBetween: 15,
// autoHeight: true,
loop: true,
autoplay: {
  delay: 1500,
  disableOnInteraction: false,
},
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
breakpoints: {
  640: {
    slidesPerView: 2,
    spaceBetween: 15,
  },
  768: {
    slidesPerView: 3,
    spaceBetween: 16,
  },
  991.98: {
    slidesPerView: 5,
    spaceBetween: 16,
  },
},
});


var swiper = new Swiper(".gallerySwiper", {
slidesPerView: 1.3,
spaceBetween: 15,
// autoHeight: true,
loop: false,
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
autoplay: {
  delay: 2000,
  disableOnInteraction: false,
},
breakpoints: {
  640: {
    slidesPerView: 2,
    spaceBetween: 15,
  },
  768: {
    slidesPerView: 3,
    spaceBetween: 16,
  },
  991.98: {
    slidesPerView: 4,
    spaceBetween: 16,
  },
},
});

var swiper = new Swiper(".four-boxes-swiper", {
slidesPerView: 1,
spaceBetween: 15,
// autoHeight: true,
loop: true,
autoplay: {
  delay: 4000,
  disableOnInteraction: false,
},
pagination: {
  el: ".swiper-pagination",
  clickable: true,
},
breakpoints: {
  640: {
    slidesPerView: 2.5,
    spaceBetween: 15,
  },
  768: {
    slidesPerView: 3.4,
    spaceBetween: 16,
  },
},
});


//Video Modal
function openVideoModal() {
const modal = document.getElementById('videoModal');
const video = document.getElementById('modalVideo');
modal.classList.add('active');
video.currentTime = 0;
video.play();
}

function closeVideoModal() {
const modal = document.getElementById('videoModal');
const video = document.getElementById('modalVideo');
video.pause();
modal.classList.remove('active');
}

document.querySelector('.play-icon')?.addEventListener('click', openVideoModal);