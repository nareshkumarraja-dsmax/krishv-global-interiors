!(function (e) {
  "use strict";
  if (
    (e(window).on("load", function () {
      e(".preloader").fadeOut();
    }),
    e(".preloader").length > 0 &&
      e(".preloaderCls").each(function () {
        e(this).on("click", function (t) {
          t.preventDefault(), e(".preloader").css("display", "none");
        });
      }),
    (e.fn.thmobilemenu = function (t) {
      var s = e.extend(
        {
          menuToggleBtn: ".th-menu-toggle",
          bodyToggleClass: "th-body-visible",
          subMenuClass: "th-submenu",
          subMenuParent: "th-item-has-children",
          subMenuParentToggle: "th-active",
          meanExpandClass: "th-mean-expand",
          appendElement: '<span class="th-mean-expand"></span>',
          subMenuToggleClass: "th-open",
          toggleSpeed: 400,
        },
        t
      );
      return this.each(function () {
        var t = e(this);
        function a() {
          t.toggleClass(s.bodyToggleClass);
          var a = "." + s.subMenuClass;
          e(a).each(function () {
            e(this).hasClass(s.subMenuToggleClass) &&
              (e(this).removeClass(s.subMenuToggleClass),
              e(this).css("display", "none"),
              e(this).parent().removeClass(s.subMenuParentToggle));
          });
        }
        t.find("li").each(function () {
          var t = e(this).find("ul");
          t.addClass(s.subMenuClass),
            t.css("display", "none"),
            t.parent().addClass(s.subMenuParent),
            t.prev("a").append(s.appendElement),
            t.next("a").append(s.appendElement);
        });
        var o = "." + s.meanExpandClass;
        e(o).each(function () {
          e(this).on("click", function (t) {
            var a;
            t.preventDefault(),
              (a = e(this).parent()),
              e(a).next("ul").length > 0
                ? (e(a).parent().toggleClass(s.subMenuParentToggle),
                  e(a).next("ul").slideToggle(s.toggleSpeed),
                  e(a).next("ul").toggleClass(s.subMenuToggleClass))
                : e(a).prev("ul").length > 0 &&
                  (e(a).parent().toggleClass(s.subMenuParentToggle),
                  e(a).prev("ul").slideToggle(s.toggleSpeed),
                  e(a).prev("ul").toggleClass(s.subMenuToggleClass));
          });
        }),
          e(s.menuToggleBtn).each(function () {
            e(this).on("click", function () {
              a();
            });
          }),
          t.on("click", function (e) {
            e.stopPropagation(), a();
          }),
          t.find("div").on("click", function (e) {
            e.stopPropagation();
          });
      });
    }),
    e(".th-menu-wrapper").thmobilemenu(),
    e(window).scroll(function () {
      e(this).scrollTop() > 500
        ? e(".sticky-wrapper").addClass("sticky")
        : e(".sticky-wrapper").removeClass("sticky");
    }),
    e(".scroll-top").length > 0)
  ) {
    var t = e(".scroll-top"),
      s = e(".scroll-top path"),
      a = s.get(0).getTotalLength();
    s.css({
      transition: "none",
      "-webkit-transition": "none",
      "stroke-dasharray": a + " " + a,
      "stroke-dashoffset": a,
    }),
      s.get(0).getBoundingClientRect(),
      s.css({
        transition: "stroke-dashoffset 10ms linear",
        "-webkit-transition": "stroke-dashoffset 10ms linear",
      });
    var o = function () {
      var t = e(window).scrollTop(),
        o = e(document).height() - e(window).height(),
        n = a - (t * a) / o;
      s.css("stroke-dashoffset", n);
    };
    o(), e(window).on("scroll", o);
    e(window).on("scroll", function () {
      e(this).scrollTop() > 50
        ? e(t).addClass("show")
        : e(t).removeClass("show");
    }),
      e(t).on("click", function (t) {
        return (
          t.preventDefault(), e("html, body").animate({ scrollTop: 0 }, 750), !1
        );
      });
  }
  e("[data-bg-src]").length > 0 &&
    e("[data-bg-src]").each(function () {
      var t = e(this).attr("data-bg-src");
      e(this).css("background-image", "url(" + t + ")"),
        e(this).removeAttr("data-bg-src").addClass("background-image");
    }),
    e("[data-mask-src]").length > 0 &&
      e("[data-mask-src]").each(function () {
        var t = e(this).attr("data-mask-src");
        e(this).css({
          "mask-image": "url(" + t + ")",
          "-webkit-mask-image": "url(" + t + ")",
        }),
          e(this).removeAttr("data-mask-src");
      }),
    e(".th-carousel").each(function () {
      var t = e(this);
      function s(e) {
        return t.data(e);
      }
      var a =
          '<button type="button" class="slick-prev"><i class="' +
          s("prev-arrow") +
          '"></i></button>',
        o =
          '<button type="button" class="slick-next"><i class="' +
          s("next-arrow") +
          '"></i></button>';
      e("[data-slick-next]").each(function () {
        e(this).on("click", function (t) {
          t.preventDefault(), e(e(this).data("slick-next")).slick("slickNext");
        });
      }),
        e("[data-slick-prev]").each(function () {
          e(this).on("click", function (t) {
            t.preventDefault(),
              e(e(this).data("slick-prev")).slick("slickPrev");
          });
        }),
        1 == s("arrows") &&
          (t.closest(".arrow-wrap").length ||
            t.closest(".container").parent().addClass("arrow-wrap")),
        t.slick({
          dots: !!s("dots"),
          fade: !!s("fade"),
          arrows: !!s("arrows"),
          speed: s("speed") ? s("speed") : 1e3,
          asNavFor: !!s("asnavfor") && s("asnavfor"),
          autoplay: 0 != s("autoplay"),
          infinite: 0 != s("infinite"),
          slidesToShow: s("slide-show") ? s("slide-show") : 1,
          adaptiveHeight: !!s("adaptive-height"),
          centerMode: !!s("center-mode"),
          autoplaySpeed: s("autoplay-speed") ? s("autoplay-speed") : 8e3,
          centerPadding: s("center-padding") ? s("center-padding") : "0",
          focusOnSelect: 0 != s("focuson-select"),
          pauseOnFocus: !!s("pauseon-focus"),
          pauseOnHover: !!s("pauseon-hover"),
          variableWidth: !!s("variable-width"),
          vertical: !!s("vertical"),
          verticalSwiping: !!s("vertical"),
          prevArrow: s("prev-arrow")
            ? a
            : '<button type="button" class="slick-prev"><i class="fal fa-long-arrow-left"></i></button>',
          nextArrow: s("next-arrow")
            ? o
            : '<button type="button" class="slick-next"><i class="fal fa-long-arrow-right"></i></button>',
          rtl: "rtl" == e("html").attr("dir"),
          responsive: [
            {
              breakpoint: 1600,
              settings: {
                arrows: !!s("xl-arrows"),
                dots: !!s("xl-dots"),
                slidesToShow: s("xl-slide-show")
                  ? s("xl-slide-show")
                  : s("slide-show"),
                centerMode: !!s("xl-center-mode"),
                centerPadding: 0,
              },
            },
            {
              breakpoint: 1400,
              settings: {
                arrows: !!s("ml-arrows"),
                dots: !!s("ml-dots"),
                slidesToShow: s("ml-slide-show")
                  ? s("ml-slide-show")
                  : s("slide-show"),
                centerMode: !!s("ml-center-mode"),
                centerPadding: 0,
              },
            },
            {
              breakpoint: 1200,
              settings: {
                arrows: !!s("lg-arrows"),
                dots: !!s("lg-dots"),
                slidesToShow: s("lg-slide-show")
                  ? s("lg-slide-show")
                  : s("slide-show"),
                centerMode: !!s("lg-center-mode") && s("lg-center-mode"),
                centerPadding: 0,
              },
            },
            {
              breakpoint: 992,
              settings: {
                arrows: !!s("md-arrows"),
                dots: !!s("md-dots"),
                slidesToShow: s("md-slide-show") ? s("md-slide-show") : 1,
                centerMode: !!s("md-center-mode") && s("md-center-mode"),
                centerPadding: 0,
              },
            },
            {
              breakpoint: 768,
              settings: {
                arrows: !!s("sm-arrows"),
                dots: !!s("sm-dots"),
                slidesToShow: s("sm-slide-show") ? s("sm-slide-show") : 1,
                centerMode: !!s("sm-center-mode") && s("sm-center-mode"),
                centerPadding: 0,
              },
            },
            {
              breakpoint: 576,
              settings: {
                arrows: !!s("xs-arrows"),
                dots: !!s("xs-dots"),
                slidesToShow: s("xs-slide-show") ? s("xs-slide-show") : 1,
                centerMode: !!s("xs-center-mode") && s("xs-center-mode"),
                centerPadding: 0,
              },
            },
          ],
        });
    }),
    e("[data-ani-duration]").each(function () {
      var t = e(this).data("ani-duration");
      e(this).css("animation-duration", t);
    }),
    e("[data-ani-delay]").each(function () {
      var t = e(this).data("ani-delay");
      e(this).css("animation-delay", t);
    }),
    e("[data-ani]").each(function () {
      var t = e(this).data("ani");
      e(this).addClass(t),
        e(".slick-current [data-ani]").addClass("th-animated");
    }),
    e(".slick-slider").on("afterChange", function (t, s, a, o) {
      e(s.$slides).find("[data-ani]").removeClass("th-animated"),
        e(s.$slides[a]).find("[data-ani]").addClass("th-animated");
    }),
    e("#heroSlide2").each(function () {
      e(this).slick({
        slidesToShow: 1,
        speed: 1e3,
        autoplaySpeed: 6e3,
        arrows: !1,
        fade: !0,
        dots: !0,
        appendDots: e(this).siblings(".slider-nav-wrap").find(".custom-dots"),
      });
    }),
    e("#projectSlide1").each(function () {
      e(this).slick({
        slidesToShow: 2,
        speed: 1e3,
        autoplaySpeed: 6e3,
        variableWidth: !0,
        arrows: !1,
        dots: !0,
        appendDots: e(this).siblings(".slider-nav-wrap").find(".custom-dots"),
      });
    }),
    e("#projectSlide3").each(function () {
      e(this).slick({
        slidesToShow: 2,
        speed: 1e3,
        autoplaySpeed: 6e3,
        arrows: !1,
        dots: !0,
        appendDots: e(this).siblings(".slider-nav-wrap").find(".custom-dots"),
        responsive: [{ breakpoint: 767, settings: { slidesToShow: 1 } }],
      });
    }),
    e("#testiSlide4").each(function () {
      e(this).slick({
        slidesToShow: 1,
        speed: 1e3,
        autoplaySpeed: 6e3,
        arrows: !1,
        fade: !0,
        dots: !0,
        appendDots: e(this).siblings(".slider-nav-wrap").find(".custom-dots"),
      });
    }),
    e(".slick-marquee").slick({
      speed: 6000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      infinite: true,
      arrows: false,
      dots: false,
      // buttons: !1,
      swipeToSlide: true,
      pauseOnHover: true,
      focusOnSelect: true,
    });
    e(".slick-marquee-continuous").slick({
      speed: 5000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      infinite: true,
      arrows: false,
      dots: false,
      // buttons: !1,
      swipeToSlide: true,
      pauseOnHover: false,
      focusOnSelect: true,
    });
  var n,
    i,
    r,
    l = ".ajax-contact",
    d = '[name="email"]',
    c = e(".form-messages");
  function u() {
    var t = e(l).serialize();
    (function () {
      var t,
        s = !0;
      function a(a) {
        a = a.split(",");
        for (var o = 0; o < a.length; o++)
          (t = l + " " + a[o]),
            e(t).val()
              ? (e(t).removeClass("is-invalid"), (s = !0))
              : (e(t).addClass("is-invalid"), (s = !1));
      }
      a(
        '[name="name"],[name="email"],[name="number"],[name="subject"],[name="message"]'
      ),
        e(d).val() &&
        e(d)
          .val()
          .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
          ? (e(d).removeClass("is-invalid"), (s = !0))
          : (e(d).addClass("is-invalid"), (s = !1));
      return s;
    })() &&
      jQuery
        .ajax({ url: e(l).attr("action"), data: t, type: "POST" })
        .done(function (t) {
          c.removeClass("error"),
            c.addClass("success"),
            c.text(t),
            e(l + ' input:not([type="submit"]),' + l + " textarea").val("");
        })
        .fail(function (e) {
          c.removeClass("success"),
            c.addClass("error"),
            "" !== e.responseText
              ? c.html(e.responseText)
              : c.html(
                  "Oops! An error occured and your message could not be sent."
                );
        });
  }
  e(l).on("submit", function (e) {
    e.preventDefault(), u();
  }),
    (n = ".sidemenu-wrapper"),
    (i = ".sideMenuCls"),
    (r = "show"),
    e(".sideMenuToggler").on("click", function (t) {
      t.preventDefault(), e(n).addClass(r);
    }),
    e(n).on("click", function (t) {
      t.stopPropagation(), e(n).removeClass(r);
    }),
    e(n + " > div").on("click", function (t) {
      t.stopPropagation(), e(n).addClass(r);
    }),
    e(i).on("click", function (t) {
      t.preventDefault(), t.stopPropagation(), e(n).removeClass(r);
    }),
    (function (t, s, a, o) {
      e(s).on("click", function (s) {
        s.preventDefault(), e(t).addClass(o);
      }),
        e(t).on("click", function (s) {
          s.stopPropagation(), e(t).removeClass(o);
        }),
        e(t)
          .find("form")
          .on("click", function (s) {
            s.stopPropagation(), e(t).addClass(o);
          }),
        e(a).on("click", function (s) {
          s.preventDefault(), s.stopPropagation(), e(t).removeClass(o);
        });
    })(".popup-search-box", ".searchBoxToggler", ".searchClose", "show"),
    e(".counter-number").counterUp({ delay: 10, time: 1e3 }),
    e(".progress-bar").waypoint(
      function () {
        e(".progress-bar").css({
          animation: "animate-positive 1.8s",
          opacity: "1",
        });
      },
      { offset: "75%" }
    );
  const p = {};
  function h() {
    const t = e(this),
      s = t.attr("src");
    if (!p[s]) {
      const t = e.Deferred();
      e.get(s, (s) => {
        t.resolve(e(s).find("svg"));
      }),
        (p[s] = t.promise());
    }
    p[s].then((s) => {
      const a = e(s).clone();
      t.attr("id") && a.attr("id", t.attr("id")),
        t.attr("class") && a.attr("class", t.attr("class")),
        t.attr("style") && a.attr("style", t.attr("style")),
        t.attr("width") &&
          (a.attr("width", t.attr("width")),
          t.attr("height") || a.removeAttr("height")),
        t.attr("height") &&
          (a.attr("height", t.attr("height")),
          t.attr("width") || a.removeAttr("width")),
        a.insertAfter(t),
        t.trigger("svgInlined", a[0]),
        t.remove();
    });
  }
  (e.fn.inlineSvg = function () {
    return this.each(h), this;
  }),
    e(".svg-img").inlineSvg();
  document.querySelectorAll(".th-cursor").forEach((e) => {
    let t;
    document.addEventListener("mousemove", (s) => {
      const a = ((e) => {
        const s = {
            x: e.clientX,
            y: e.clientY,
            width: 40,
            height: 40,
            radius: "50%",
          },
          a = {};
        if (null != t) {
          const {
              top: e,
              left: s,
              width: o,
              height: n,
            } = t.getBoundingClientRect(),
            i = window.getComputedStyle(t).borderTopLeftRadius;
          (a.x = s + o / 2),
            (a.y = e + n / 2),
            (a.width = o),
            (a.height = n),
            (a.radius = i);
        }
        return { ...s, ...a };
      })(s);
      ((e, t) => {
        e.style.setProperty("--x", t.x + "px"),
          e.style.setProperty("--y", t.y + "px"),
          e.style.setProperty("--width", t.width + "px"),
          e.style.setProperty("--height", t.height + "px"),
          e.style.setProperty("--radius", t.radius),
          e.style.setProperty("--scale", t.scale);
      })(e, a);
    }),
      document.querySelectorAll(".cursor-btn").forEach((e) => {
        e.addEventListener("mouseenter", () => (t = e)),
          e.addEventListener("mouseleave", () => (t = void 0));
      });
  }),
    new WOW().init(),
    e(".popup-image").magnificPopup({
      type: "image",
      gallery: { enabled: !0 },
    }),
    e(".popup-video").magnificPopup({ type: "iframe" }),
    (e.fn.shapeMockup = function () {
      e(this).each(function () {
        var t = e(this),
          s = t.data("top"),
          a = t.data("right"),
          o = t.data("bottom"),
          n = t.data("left");
        t.css({ top: s, right: a, bottom: o, left: n })
          .removeAttr("data-top")
          .removeAttr("data-right")
          .removeAttr("data-bottom")
          .removeAttr("data-left")
          .parent()
          .addClass("shape-mockup-wrap");
      });
    }),
    e(".shape-mockup") && e(".shape-mockup").shapeMockup(),
    e(".hover-item").hover(function () {
      e(this).addClass("item-active"),
        e(this).siblings().removeClass("item-active");
    }),
    e("#compslider").on("input change", (t) => {
      const s = t.target.value;
      e(".foreground-img").css("width", s + "%"),
        e(".slider-button").css("left", `calc(${s}% - 28px)`);
    }),
    e(".tilt-active").tilt({ maxTilt: 20, perspective: 300 }),
    // window.addEventListener(
    //   "contextmenu",
    //   function (e) {
    //     e.preventDefault();
    //   },
    //   !1
    // ),
    (document.onkeydown = function (e) {
      return (
        123 != event.keyCode &&
        (!e.ctrlKey || !e.shiftKey || e.keyCode != "I".charCodeAt(0)) &&
        (!e.ctrlKey || !e.shiftKey || e.keyCode != "C".charCodeAt(0)) &&
        (!e.ctrlKey || !e.shiftKey || e.keyCode != "J".charCodeAt(0)) &&
        (!e.ctrlKey || e.keyCode != "U".charCodeAt(0)) &&
        void 0

      );
    });
})(jQuery);


document.addEventListener("DOMContentLoaded", function () {
  const allLinks = document.querySelectorAll(".main-menu a, .th-mobile-menu a");
  const currentPath = window.location.pathname.split("/").pop();

  allLinks.forEach(link => {
    const linkPath = link.getAttribute("href");
    if (linkPath === currentPath) {
      link.classList.add("active");

      // Also add a class to the parent <li> for gradient or styling
      const parentLi = link.closest("li");
      if (parentLi) {
        parentLi.classList.add("th-active"); // useful for submenu highlight
      }

      // Optionally expand the parent menu if it’s nested
      const parentMenuItem = link.closest(".menu-item-has-children");
      if (parentMenuItem) {
        parentMenuItem.classList.add("th-active");
      }
    }
  });
});


document.addEventListener("DOMContentLoaded", function() {
  const currentPage = window.location.href;

  document.querySelectorAll(".main-menu .sub-menu a").forEach((submenuLink) => {
    submenuLink.addEventListener("click", function() {
      const parentMenuItem = this.closest(".menu-item-has-children");

      if (parentMenuItem) {
        parentMenuItem.classList.add("active");

        document.querySelectorAll(".menu-item-has-children").forEach((item) => {
          if (item !== parentMenuItem) {
            item.classList.remove("active");
          }
        });
      }
    });


    if (currentPage.includes(submenuLink.getAttribute("href"))) {
      const parentMenuItem = submenuLink.closest(".menu-item-has-children");
      if (parentMenuItem) {
        parentMenuItem.classList.add("active");
      }
    }
  });
});





document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('[data-ani="slideinup"]');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    elements.forEach(el => observer.observe(el));
});


$('.th-carousel').each(function(){
  var $this = $(this);
  $this.slick({
    slidesToShow: $this.data('slide-show') || 1,
    slidesToScroll: 1,
    dots: true, // ensure dots are enabled
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: $this.data('md-slide-show') || 1
        }
      }
    ]
  });
});







// ---testimonials
// $('.th-carousel').slick({
//   slidesToShow: 2,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
//   speed: 400,
//   responsive: [
//     {
//       breakpoint: 992,
//       settings: {
//         slidesToShow: 1
//       }
//     }
//   ]
// });






