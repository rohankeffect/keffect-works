/* ----------------------------------------------------------------------------------------
 * Author        : 1W Media
 * Template Name : Voices HTML Template
 * Version       : 1.0
 * ---------------------------------------------------------------------------------------- */

(function ($) {
  "use strict";

  $(window).on("load", function () {
    /*  -------------------------------------------------------------------------  *
     *                            Preloader                                        *
     *  -------------------------------------------------------------------------  */
    $("#preloader")
      .delay(300)
      .fadeOut("slow", function () {
        $(this).remove();
      });
  });

  $(document).ready(function () {
    /*  -------------------------------------------------------------------------  *
     *                            Sticky Menu                                      *
     *  -------------------------------------------------------------------------  */
    // $(".menu-area > .sticky").sticky({
    //   topSpacing: 0,
    // });

    /*  -------------------------------------------------------------------------  *
     *                            Scrolling Js                                      *
     *  -------------------------------------------------------------------------  */

    $(document).on("click", ".navbar-collapse.in", function (e) {
      if (
        $(e.target).is("a") &&
        $(e.target).attr("class") != "dropdown-toggle"
      ) {
        $(this).collapse("hide");
      }
    });

    $("body").scrollspy({
      target: ".navbar-collapse",
      offset: 195,
    });

    /*  -------------------------------------------------------------------------  *
     *                            Scroll to Top                                     *
     *  -------------------------------------------------------------------------  */
    $(window).scroll(function () {
      if ($(this).scrollTop() >= 50) {
        // If page is scrolled more than 50px
        $("#return-to-top").fadeIn(200); // Fade in the arrow
      } else {
        $("#return-to-top").fadeOut(200); // Else fade out the arrow
      }
    });
    $("#return-to-top").click(function () {
      // When arrow is clicked
      $("body,html").animate(
        {
          scrollTop: 0, // Scroll to top of body
        },
        500
      );
    });

    /*  -------------------------------------------------------------------------  *
     *                            Navigation js                                    *
     *  -------------------------------------------------------------------------  */

    // $(document).on("click", ".navbar-collapse.in", function (e) {
    //   if (
    //     $(e.target).is("a") &&
    //     $(e.target).attr("class") != "dropdown-toggle"
    //   ) {
    //     $(this).collapse("hide");
    //   }
    // });

    // $("body").scrollspy({
    //   target: ".navbar-collapse",
    //   offset: 195,
    // });

    // $('.navbar-voice a[href^="#"]').on("click", function (e) {
    //   e.preventDefault();

    //   var target = this.hash;
    //   var $target = $(target);

    //   $("html, body")
    //     .stop()
    //     .animate(
    //       {
    //         scrollTop: $target.offset().top,
    //       },
    //       900,
    //       "swing",
    //       function () {
    //         window.location.hash = target;
    //       }
    //     );
    // });
  });
  $(function () {
    $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(
      "active"
    );
  });
})(jQuery);
