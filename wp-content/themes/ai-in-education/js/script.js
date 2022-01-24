;(function ($) {
  "use strict";

  // Sticky Menu
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $(".header-area").removeClass("scroll-header");
    } else {
      $(".header-area").addClass("scroll-header");
    }
  });

  // scrollToTop
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  //Click event to scroll to top
  $('.scrollToTop').on("click", function () {
    $('html, body').animate({
      scrollTop: 0
    }, 100);
    return false;
  });

  // offcanvas menu
  $(".menu-tigger").on("click", function () {
    $(".extra-info,.offcanvas-overly").addClass("active");
    return false;
  });
  $(".menu-close,.offcanvas-overly").on("click", function () {
    $(".extra-info,.offcanvas-overly").removeClass("active");
  });

  // slider - active
  function mainSlider() {
    var BasicSlider = $('.slider-active');

    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });

    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });

    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      fade: true,
      arrows: false,
      prevArrow: '<i class="fas fa-chevron-left"></i>',
      nextArrow: '<i class="fas fa-chevron-right"></i>',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            arrows: false,
          }
        },
        {
          breakpoint: 768,
          settings: {
            dots: false,
          }
        }
      ],
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }

  mainSlider();

  // slider - active
  function mainSlider2() {
    var BasicSlider = $('.slider-active-3');

    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });

    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });

    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      fade: true,
      arrows: true,
      prevArrow: '<i class="fas fa-chevron-left"></i>',
      nextArrow: '<i class="fas fa-chevron-right"></i>',
      responsive: [{
        breakpoint: 992,
        settings: {
          arrows: false,
        }
      },],
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }

  mainSlider2();

  // Block-Five slider
  $('.block-five-active').slick({
    dots: false,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
    infinite: true,
    speed: 1000,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  // Block Six slider
  $('.block-six-active').slick({
    dots: false,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
    infinite: true,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Popup Images
  $('.popup-img').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });
  // Popup Video
  $('.video-launch').magnificPopup({
    type: 'iframe'
  });

  // Breadcrumbs ActiveMod
  $('ul.breadcrumb li.crumb-active').text($('h1').text());

  // Mobile-menu list hide on load page and show after click menu-btn
  $(".mobile-menu").on("click", function () {
    $(".menu-3 li").css('display', 'block');
    return false;
  });

  // Mobile-menu close after choose menu-item
  $(".menu-3 li a").on("click", function () {
    setTimeout( () => {
      $("div.mm-ocd.mm-ocd--left").removeClass("mm-ocd--open");
      $("body.customize-support").removeClass("mm-ocd-opened");
    });
  });

  // $('html').css('margin-top', $('#wpadminbar').height());

  // Function - Add anchor links and scrolling on them
  function anchorLink(link, id) {
    $(link).on('click', function () {
      let wpadminbar = $('#wpadminbar').length > 0 ? $('#wpadminbar').height() : 0;
      console.log($(id).offset());
      $('html').animate({
        scrollTop: $(id).offset().top - wpadminbar
      }, 10);
    });
  }
  // Call Functions anchorLink
  anchorLink('a[href="/#actual"]', '#actual');
  anchorLink('a[href="/#news"]', '#news');
  anchorLink('a[href="/#entertainment"]', '#entertainment');

  // Check contact item's icon
  $('.contact-text').each(function () {
    if ($(this).is(':empty')){
      $(this).closest('.contact-item').hide();
    }
  });
})(jQuery);

var $ticker = $('[data-ticker="list"]'),
    tickerItem = '[data-ticker="item"]',
    itemCount = $(tickerItem).length,
    viewportWidth = 0;

function setupViewport() {
  $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');

  for (i = 0; i < itemCount; i++) {
    var itemWidth = $(tickerItem).eq(i).outerWidth();
    viewportWidth = viewportWidth + itemWidth;
  }

  $ticker.css('width', viewportWidth);
}

function animateTicker() {
  $ticker.animate({
    marginLeft: -viewportWidth
  }, 30000, "linear", function () {
    $ticker.css('margin-left', '0');
    animateTicker();
  });
}

function initializeTicker() {
  setupViewport();
  animateTicker();

  $ticker.on('mouseenter', function () {
    $(this).stop(true);
  }).on('mouseout', function () {
    animateTicker();
  });
}

initializeTicker();

// Responsive Menu
document.addEventListener(
    "DOMContentLoaded", () => {
      const menu = new MmenuLight(
          document.querySelector("#menu"), "(max-width: 991px)"
      );

      const navigator = menu.navigation({
        selectedClass: 'Selected',
        slidingSubmenus: true,
        theme: 'dark',
        title: 'Menu'
      });
      const drawer = menu.offcanvas({
        position: 'left'
      });

      document.querySelector('a[href="#menu"]')
          .addEventListener('click', (evnt) => {
            evnt.preventDefault();
            drawer.open();
          });
    }
);

// Block Tabs
var tabLinks = document.querySelectorAll(".tablinks"),
    tabContent = document.querySelectorAll(".tabcontent");

tabLinks.forEach(function (el) {
  el.addEventListener("click", openTabs);
});

function openTabs(el) {
  var btnTarget = el.currentTarget,
      country = btnTarget.dataset.country;

  tabContent.forEach(function (el) {
    el.classList.remove("active");
  });

  tabLinks.forEach(function (el) {
    el.classList.remove("active");
  });

  document.querySelector("#" + country).classList.add("active");

  btnTarget.classList.add("active");
}
