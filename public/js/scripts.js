/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
$(document).ready(function () {
  var menuButton = $('.menu-button'),
      navMenu = $('.menu');
  menuButton.each(function () {
    $(this).on('click', function () {
      navMenu.toggleClass('hidden');
    });
    $(this).hover(function () {
      menuButton.removeClass("active");
      $(this).addClass("active");
    });
  });
  $(".slide-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slide-nav-menu'
  });
  $(".slide-nav-menu").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slide-container',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        autoplay: true,
        arrows: false,
        centerMode: true
      }
    }]
  });
  $('.timelime-item').each(function () {
    $(this).on("click", function () {
      $("p.timeline-text").css({
        "display": "none"
      });
      $("span .pulse").removeClass("animate-ping");
      $(this).children("p.timeline-text").fadeToggle();
      $(this).children("span .pulse").addClass(".animate-ping");
      console.log($(this).children("span .pulse"));
    });
  }); //Mapa

  $('.pin-map').each(function () {
    $(this).on("click", function () {
      $(".globo-text-container").fadeOut();
      $(this).children(".globo-text-container").fadeToggle();
    });
  }); //mostrar ocultar landing

  function changeThemeLanding(open) {
    if (open) {
      $("#app").addClass("overflow-y-hidden");
      $(".logo").addClass("hidden");
      $(".logo-landing").removeClass("hidden");
      $(".menu-navbar").addClass("text-black");
      $(".menu-navbar").removeClass("md:text-white");
    } else if (!open) {
      $("#app").removeClass("overflow-y-hidden");
      $(".logo").removeClass("hidden");
      $(".logo-landing").addClass("hidden");
      $(".menu-navbar").removeClass("text-black");
      $(".menu-navbar").addClass("md:text-white");
    }

    open = !open;
  }

  $(".landing-button").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();

      if ($(this).hasClass("biomedica")) {
        $('.biomedica-landing').fadeIn("slow");
        $('.biomedica-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }

      if ($(this).hasClass("servicios")) {
        $('.servicios-landing').fadeIn("slow");
        $('.servicios-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }

      if ($(this).hasClass("judevi")) {
        $('.judevi-landing').fadeIn("slow");
        $('.judevi-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }

      if ($(this).hasClass("nura")) {
        $('.nura-landing').fadeIn("slow");
        $('.nura-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }

      if ($(this).hasClass("cidkapital")) {
        $('.cidkapital-landing').fadeIn("slow");
        $('.cidkapital-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }

      if ($(this).hasClass("clir")) {
        $('.clir-1-landing').fadeIn("slow");
        $('.clir-1-landing').removeClass("pointer-events-none");
        changeThemeLanding(true);
      }
    });
  });
  $(".clir-1-button").on("click", function () {
    $('.landing').fadeOut();
    $('.clir-1-landing').fadeIn("slow");
    $('.clir-1-landing').removeClass("pointer-events-none");
    changeThemeLanding(true);
  });
  $(".clir-2-button").on("click", function () {
    $('.landing').fadeOut();
    $('.clir-2-landing').fadeIn("slow");
    $('.clir-2-landing').removeClass("pointer-events-none");
    changeThemeLanding(true);
  });
  $(".close-landing").on("click", function () {
    if (!$(this).next(".landing").hasClass("pointer-events-none")) {
      $('.landing').fadeOut("slow");
      $('.landing').addClass("pointer-events-none");
      changeThemeLanding(false);
    }
  }); // Select all links with hashes

  $('a[href*="#"]') // Remove links that don't actually link to anything
  .not('[href="#"]').not('[href="#0"]').click(function (event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?

      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top + -60
        }, 1000, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();

          if ($target.is(":focus")) {
            // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

            $target.focus(); // Set focus again
          }

          ;
        });
      }
    }
  });
});
$(document).on('scroll', function () {
  var $nav = $('.navbar');
  $nav.toggleClass('scroll', $(this).scrollTop() > $nav.height());
}); // ScrollMagic scroll animation site

var controller = new ScrollMagic.Controller();
var nosotrosTween = gsap.timeline().from("#nosotros .imagen", .5, {
  x: -180,
  scale: 0.7,
  opacity: 0
}).from("#nosotros .texto", .5, {
  x: 180,
  scale: 0.7,
  opacity: 0
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#nosotros"
}).setTween(nosotrosTween).addTo(controller);
var historiaTween = gsap.timeline().from("#historia .historia-title", .5, {
  x: -180,
  scale: 0.7,
  opacity: 0
}).from("#historia .description", .5, {
  x: 180,
  scale: 0.7,
  opacity: 0
}).from(".timelime-item", .80, {
  y: -20,
  scale: 0.3,
  opacity: 0,
  stagger: 0.25
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#historia"
}).setTween(historiaTween).addTo(controller);
var divisionTween = gsap.timeline().from("#divisiones h2", .5, {
  x: -180,
  scale: 0.7,
  opacity: 0
}).from("#divisiones p", .5, {
  x: 180,
  scale: 0.7,
  opacity: 0
}).from(".landing-button", .80, {
  y: 10,
  scale: 0.3,
  opacity: 0,
  stagger: 0.25
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#divisiones"
}).setTween(divisionTween).addTo(controller);
var enfocamosTween = gsap.timeline().from("#nos-enfocamos p", .5, {
  y: 180,
  scale: 0.5,
  opacity: 0
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#nos-enfocamos"
}).setTween(enfocamosTween).addTo(controller);
var mapaTween = gsap.timeline().from("#instalaciones .texto", .5, {
  x: -180,
  opacity: 0
}).from("#instalaciones .mapa", .5, {
  x: 180,
  opacity: 0
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#instalaciones"
}).setTween(mapaTween).addTo(controller);
var clientesTween = gsap.timeline().from("#clientes h2", .5, {
  y: -180,
  opacity: 0
}).from("#clientes p", .5, {
  y: 180,
  opacity: 0
}).from("#clientes .clientes-img", .8, {
  y: -180,
  scale: .5,
  opacity: 0
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#clientes"
}).setTween(clientesTween).addTo(controller);
var inspiramosTween = gsap.timeline().from("#inspiramos p", .5, {
  y: -180,
  scale: 0.5,
  opacity: 0
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#inspiramos"
}).setTween(inspiramosTween).addTo(controller);
var contactoTween = gsap.timeline().from("#contacto h2.title", .5, {
  y: -180,
  opacity: 0
}).from("#contacto p.text", .5, {
  y: 180,
  opacity: 0
}).from("#contacto .form-control", 1, {
  y: 180,
  opacity: 0,
  stagger: .25
});
new ScrollMagic.Scene({
  offset: 50,
  triggerElement: "#contacto"
}).setTween(contactoTween).addTo(controller);
/******/ })()
;