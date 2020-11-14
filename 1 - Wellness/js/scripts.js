/*
* ----------------------------------------------------------------------------------------
Author       : ThemePoke
Template Name: Ultimax OnePage HTML Template
Version      : 1.0
* ----------------------------------------------------------------------------------------
*/
(function ($) {
  "use strict";

  jQuery(document).ready(function () {
    /*START PRELOADED*/
    $(window).on("load", function () {
      $(".preloader").fadeOut();
      $(".preloader-area").delay(350).fadeOut("slow");
    });
    /*END PRELOADED*/

    /*START TESTMONIAL ACTIVATION JS*/
    $(".team-list").owlCarousel({
      items: 3,
      autoPlay: true,
      loop: true,
      margin: 10,
      navigation: false,
      itemsDesktop: [1199, 1],
      itemsDesktopSmall: [980, 2],
      itemsTablet: [768, 2],
      itemsTabletSmall: false,
      itemsMobile: [479, 1],
      autoHeight: true,
      pagination: true,
    });
    /*END TESTMONIAL ACTIVATION JS*/

    /*START VIDEO JS*/
    function autoPlayYouTubeModal() {
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.on("click", function () {
        var theModal = $(this).data("target"),
          videoSRC = $("#video-modal iframe").attr("src"),
          videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + " iframe").attr("src", videoSRCauto);
        $(theModal + " button.close").on("click", function () {
          $(theModal + " iframe").attr("src", videoSRC);
        });
        $(".modal").on("click", function () {
          $(theModal + " iframe").attr("src", videoSRC);
        });
      });
    }
    autoPlayYouTubeModal();
    /*END VIDEO JS*/

    /*START CHANGE MENU BACKGROUND JS*/
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        $(".header-top-area").addClass("stick_menu_bg");
      } else {
        $(".header-top-area").removeClass("stick_menu_bg");
      }
    });
    /*END CHANGE MENU BACKGROUND JS*/

    /*START SMOTH JS*/
    $("a.smoth-scroll").on("click", function (e) {
      var anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $(anchor.attr("href")).offset().top - 60,
          },
          1000
        );
      e.preventDefault();
    });
    /*END SMOTH JS*/

    /*START BOOTSTRAP SCROLL-SPY*/
    $("body").scrollspy({
      target: ".navbar-collapse",
      offset: 195,
    });
    /*END BOOTSTRAP SCROLL-SPY*/

    /*START MENU HIDE*/
    $(document).on("click", ".navbar-collapse.in", function (e) {
      if (
        $(e.target).is("a") &&
        $(e.target).attr("class") != "dropdown-toggle"
      ) {
        $(this).collapse("hide");
      }
    });
    /*END MENU HIDE*/

    /*START COUNTER UP JS*/
    $(".cp-number").counterUp({
      time: 2000,
      delay: 10,
    });
    /*END COUNTER UP JS*/

    /*START POPUP JS*/
    $(".portfolio-popup").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
    /*END POPUP JS*/

    /*START MIXITUP JS*/
    $(".portfolio-inner").mixItUp();
    /*END MIXITUP JS*/

    /*START TESITMONIAL JS*/
    $(".testimonial-list").owlCarousel({
      items: 1,
      autoPlay: true,
      navigation: false,
      itemsDesktop: [1199, 1],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 1],
      itemsTabletSmall: false,
      itemsMobile: [479, 1],
      pagination: true,
    });
    /*END TESTIMONIAL JS*/

    /*START PERTNER JS*/
    $(".partner-list").owlCarousel({
      items: 6,
      autoPlay: true,
      navigation: true,
      navigationText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>",
      ],
      itemsDesktop: [1199, 5],
      itemsDesktopSmall: [980, 5],
      itemsTablet: [768, 3],
      itemsTabletSmall: false,
      itemsMobile: [479, 1],
      autoHeight: false,
      pagination: false,
      margin: 0,
    });
    /*END PERTNER JS*/

    /*COUNTER UP JS*/
    $(".counter_number").counterUp({
      time: 2000,
      delay: 10,
    });
    /*COUNTER UP JS*/

    /*START MAP JS*/
    var contact = {
      lat: "40.693112",
      lon: "-73.875220",
    }; //Change a map coordinate here!
    try {
      $(".map").gmap3(
        {
          action: "addMarker",
          latLng: [contact.lat, contact.lon],
          map: {
            center: [contact.lat, contact.lon],
            zoom: 6,
            styles: [
              {
                visibility: "simplified",
              },
              {
                hue: "#ff8a00",
              },
            ],
          },
        },
        {
          action: "setOptions",
          args: [
            {
              scrollwheel: false,
            },
          ],
        }
      );
    } catch (err) {}
    /*END MAP JS*/

    /*START SCROLL TO UP*/
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 500) {
        $(".scrollup").fadeIn();
      } else {
        $(".scrollup").fadeOut();
      }
    });
    $(".scrollup").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        800
      );
      return false;
    });
    /*END SCROLL TO UP*/
  });
})(jQuery);
