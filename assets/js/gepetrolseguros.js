(function ($) {
  "use strict";

  //Hide Loading Box (Preloader)
  function handlePreloader() {
    if ($(".loader-wrap").length) {
      $(".loader-wrap").delay(1000).fadeOut(500);
    }
  }

  if ($(".preloader-close").length) {
    $(".preloader-close").on("click", function () {
      $(".loader-wrap").delay(200).fadeOut(500);
    });
  }

  //Update Header Style and Scroll to Top
  function headerStyle() {
    if ($(".main-header").length) {
      var windowpos = $(window).scrollTop();
      var siteHeader = $(".main-header");
      var scrollLink = $(".scroll-top");
      if (windowpos >= 110) {
        siteHeader.addClass("fixed-header");
        scrollLink.addClass("open");
      } else {
        siteHeader.removeClass("fixed-header");
        scrollLink.removeClass("open");
      }
    }
  }

  headerStyle();

  //Submenu Dropdown Toggle
  if ($(".main-header li.dropdown ul").length) {
    $(".main-header .navigation li.dropdown").append(
      '<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>'
    );
  }

  //Mobile Nav Hide Show
  if ($(".mobile-menu").length) {
    $(".mobile-menu .menu-box").mCustomScrollbar();

    var mobileMenuContent = $(".main-header .menu-area .main-menu").html();
    $(".mobile-menu .menu-box .menu-outer").append(mobileMenuContent);
    $(".sticky-header .main-menu").append(mobileMenuContent);

    //Dropdown Button
    $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
      $(this).toggleClass("open");
      $(this).prev("ul").slideToggle(500);
    });
    //Dropdown Button
    $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
      $(this).prev(".megamenu").slideToggle(900);
    });
    //Menu Toggle Btn
    $(".mobile-nav-toggler").on("click", function () {
      $("body").addClass("mobile-menu-visible");
    });

    //Menu Toggle Btn
    $(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on(
      "click",
      function () {
        $("body").removeClass("mobile-menu-visible");
      }
    );
  }

  // Scroll to a Specific Div
  if ($(".scroll-to-target").length) {
    $(".scroll-to-target").on("click", function () {
      var target = $(this).attr("data-target");
      // animate
      $("html, body").animate(
        {
          scrollTop: $(target).offset().top,
        },
        1000
      );
    });
  }

  // Elements Animation
  if ($(".wow").length) {
    var wow = new WOW({
      mobile: false,
    });
    wow.init();
  }

  //Fact Counter + Text Count
  if ($(".count-box").length) {
    $(".count-box").appear(
      function () {
        var $t = $(this),
          n = $t.find(".count-text").attr("data-stop"),
          r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
          $t.addClass("counted");
          $({
            countNum: $t.find(".count-text").text(),
          }).animate(
            {
              countNum: n,
            },
            {
              duration: r,
              easing: "linear",
              step: function () {
                $t.find(".count-text").text(Math.floor(this.countNum));
              },
              complete: function () {
                $t.find(".count-text").text(this.countNum);
              },
            }
          );
        }
      },
      { accY: 0 }
    );
  }

  //LightBox / Fancybox
  if ($(".lightbox-image").length) {
    $(".lightbox-image").fancybox({
      openEffect: "fade",
      closeEffect: "fade",
      helpers: {
        media: {},
      },
    });
  }

  //Tabs Box
  if ($(".tabs-box").length) {
    $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).is(":visible")) {
        return false;
      } else {
        target
          .parents(".tabs-box")
          .find(".tab-buttons")
          .find(".tab-btn")
          .removeClass("active-btn");
        $(this).addClass("active-btn");
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .fadeOut(0);
        target
          .parents(".tabs-box")
          .find(".tabs-content")
          .find(".tab")
          .removeClass("active-tab");
        $(target).fadeIn(300);
        $(target).addClass("active-tab");
      }
    });
  }

  //Accordion Box
  if ($(".accordion-box").length) {
    $(".accordion-box").on("click", ".acc-btn", function () {
      var outerBox = $(this).parents(".accordion-box");
      var target = $(this).parents(".accordion");

      if ($(this).hasClass("active") !== true) {
        $(outerBox).find(".accordion .acc-btn").removeClass("active");
      }

      if ($(this).next(".acc-content").is(":visible")) {
        return false;
      } else {
        $(this).addClass("active");
        $(outerBox).children(".accordion").removeClass("active-block");
        $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
        target.addClass("active-block");
        $(this).next(".acc-content").slideDown(300);
      }
    });
  }

// banner-carousel
if ($(".banner-carousel").length) {
  $(".banner-carousel").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: true,
    dots: false,

    // Transición más suave
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 900,          // duración transición
    autoplay: true,
    autoplayTimeout: 6500,    // tiempo entre slides
    autoplaySpeed: 900,       // sincronizado con smartSpeed
    autoplayHoverPause: false,
    autoHeight: false,

    navText: [
      '<span class="icon-Left-arrow"></span>',
      '<span class="icon-Right-arrow"></span>',
    ],

    responsive: {
      0:    { items: 1 },
      600:  { items: 1 },
      800:  { items: 1 },
      1024: { items: 1 },
    },
  });
}

  //three-item-carousel
  if ($(".three-item-carousel").length) {
    $(".three-item-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      smartSpeed: 500,
      autoplay: 1000,
      navText: [
        '<span class="icon-Arrow-Left"></span>',
        '<span class="icon-Arrow-Right"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        600: {
          items: 2,
        },
        800: {
          items: 2,
        },
        1024: {
          items: 3,
        },
      },
    });
  }

  // Four Item Carousel
  if ($(".four-item-carousel").length) {
    $(".four-item-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      smartSpeed: 500,
      autoplay: 1000,
      navText: [
        '<span class="icon-Arrow-Left"></span>',
        '<span class="icon-Arrow-Right"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        800: {
          items: 3,
        },
        1024: {
          items: 3,
        },
        1200: {
          items: 4,
        },
      },
    });
  }

  // single-item-carousel
  if ($(".single-item-carousel").length) {
    $(".single-item-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      smartSpeed: 3000,
      autoplay: true,
      navText: [
        '<span class="icon-Left-arrow"></span>',
        '<span class="icon-Right-arrow"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        600: {
          items: 1,
        },
        800: {
          items: 1,
        },
        1200: {
          items: 1,
        },
      },
    });
  }

  //two-column-carousel
  if ($(".two-column-carousel").length) {
    $(".two-column-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      smartSpeed: 1000,
      autoplay: 500,
      navText: [
        '<span class="fas fa-algle-left"></span>',
        '<span class="fas fa-algle-left-right"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        600: {
          items: 1,
        },
        800: {
          items: 2,
        },
        1024: {
          items: 2,
        },
      },
    });
  }

  // clients-carousel
  if ($(".clients-carousel").length) {
    $(".clients-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      smartSpeed: 3000,
      autoplay: true,
      navText: [
        '<span class="icon-Arrow-Left"></span>',
        '<span class="icon-Arrow-Right"></span>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        600: {
          items: 3,
        },
        800: {
          items: 4,
        },
        1200: {
          items: 5,
        },
      },
    });
  }

  //Product Tabs
  if ($(".project-tab").length) {
    $(".project-tab .project-tab-btns .p-tab-btn").on("click", function (e) {
      e.preventDefault();
      var target = $($(this).attr("data-tab"));

      if ($(target).hasClass("actve-tab")) {
        return false;
      } else {
        $(".project-tab .project-tab-btns .p-tab-btn").removeClass(
          "active-btn"
        );
        $(this).addClass("active-btn");
        $(".project-tab .p-tabs-content .p-tab").removeClass("active-tab");
        $(target).addClass("active-tab");
      }
    });
  }

  //Add One Page nav
  if ($(".scroll-nav").length) {
    $(".scroll-nav").onePageNav();
  }

  //Sortable Masonary with Filters
  function enableMasonry() {
    if ($(".sortable-masonry").length) {
      var winDow = $(window);
      // Needed variables
      var $container = $(".sortable-masonry .items-container");
      var $filter = $(".filter-btns");

      $container.isotope({
        filter: "*",
        masonry: {
          columnWidth: ".masonry-item.small-column",
        },
        animationOptions: {
          duration: 500,
          easing: "linear",
        },
      });

      // Isotope Filter
      $filter.find("li").on("click", function () {
        var selector = $(this).attr("data-filter");

        try {
          $container.isotope({
            filter: selector,
            animationOptions: {
              duration: 500,
              easing: "linear",
              queue: false,
            },
          });
        } catch (err) {}
        return false;
      });

      winDow.on("resize", function () {
        var selector = $filter.find("li.active").attr("data-filter");

        $container.isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            easing: "linear",
            queue: false,
          },
        });
      });

      var filterItemA = $(".filter-btns li");

      filterItemA.on("click", function () {
        var $this = $(this);
        if (!$this.hasClass("active")) {
          filterItemA.removeClass("active");
          $this.addClass("active");
        }
      });
    }
  }

  enableMasonry();

  // Progress Bar
  if ($(".count-bar").length) {
    $(".count-bar").appear(
      function () {
        var el = $(this);
        var percent = el.data("percent");
        $(el).css("width", percent).addClass("counted");
      },
      { accY: -50 }
    );
  }

  // page direction
  function directionswitch() {
    if ($(".page_direction").length) {
      $(".direction_switch button").on("click", function () {
        $("body").toggleClass(function () {
          return $(this).is(".rtl, .ltr") ? "rtl ltr" : "rtl";
        });
      });
    }
  }

  // color switcher
  function swithcerMenu() {
    if ($(".switch_menu").length) {
      $(".switch_btn button").on("click", function () {
        $(".switch_menu").toggle(500);
      });

      $("#styleOptions").styleSwitcher({
        hasPreview: true,
        fullPath: "assets/css/color/",
        cookie: {
          expires: 30,
          isManagingLoad: true,
        },
      });
    }
  }

  if ($(".paroller").length) {
    $(".paroller").paroller({
      factor: 0.1, // multiplier for scrolling speed and offset, +- values for direction control
      factorLg: 0.1, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control
      type: "foreground", // background, foreground
      direction: "vertical", // vertical, horizontal
    });
  }

  if ($(".paroller-2").length) {
    $(".paroller-2").paroller({
      factor: -0.1, // multiplier for scrolling speed and offset, +- values for direction control
      factorLg: -0.1, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control
      type: "foreground", // background, foreground
      direction: "vertical", // vertical, horizontal
    });
  }

  $(document).ready(function () {
    $("select:not(.ignore)").niceSelect();
  });

  /*	=========================================================================
	When document is Scrollig, do
	========================================================================== */

  jQuery(document).on("ready", function () {
    (function ($) {
      // add your functions
      directionswitch();
      swithcerMenu();
    })(jQuery);
  });

  /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

  $(window).on("scroll", function () {
    headerStyle();
  });

  /* ==========================================================================
   When document is loaded, do
   ========================================================================== */

  $(window).on("load", function () {
    handlePreloader();
    enableMasonry();
  });

  /* ==========================================================================
	Xmas Audio Toggle 
	========================================================================== */
  document.addEventListener("DOMContentLoaded", function () {
    var btn = document.querySelector(".gepetrol-xmas-audio-toggle");
    var audio = document.querySelector("#gepetrol-xmas-audio");

    if (!btn || !audio) return;

    btn.addEventListener("click", function () {
      if (audio.paused) {
        audio
          .play()
          .then(function () {
            btn.classList.add("is-playing");
            btn.setAttribute("aria-pressed", "true");
            btn.setAttribute("aria-label", "Pausar música de Navidad");
          })
          .catch(function (err) {
            console.warn("No se pudo reproducir el audio:", err);
          });
      } else {
        audio.pause();
        btn.classList.remove("is-playing");
        btn.setAttribute("aria-pressed", "false");
        btn.setAttribute("aria-label", "Reproducir música de Navidad");
      }
    });
  });

  // ===============================
  //  MODAL INICIO GEPETROL
  //  - Abre solo en Home
  //  - Solo una vez por sesión (localStorage)
  // ===============================
  document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("gepetrol-home-modal");
    if (!modal) return;

    function openModal() {
      modal.setAttribute("aria-hidden", "false");
      document.documentElement.classList.add("gepetrol-modal-open");
    }

    function closeModal() {
      modal.setAttribute("aria-hidden", "true");
      document.documentElement.classList.remove("gepetrol-modal-open");
    }

    // Cerrar al clicar en elementos con data-gp-modal-close
    modal.querySelectorAll("[data-gp-modal-close]").forEach(function (el) {
      el.addEventListener("click", closeModal);
    });

    // Cerrar con ESC
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        closeModal();
      }
    });

    // 👉 Mostrar SIEMPRE a los 900ms en cada carga
    setTimeout(openModal, 900);

    // --- Botón audio modal -----------------------
    var audio = document.getElementById("gepetrol-xmas-audio");
    var audioBtn = modal.querySelector("[data-gp-xmas-audio-toggle]");
    if (audio && audioBtn) {
      audioBtn.addEventListener("click", function () {
        if (audio.paused) {
          audio
            .play()
            .then(function () {
              audioBtn.setAttribute("aria-pressed", "true");
              audioBtn.classList.add("is-playing");
            })
            .catch(function (err) {
              console.warn("No se pudo reproducir el audio:", err);
            });
        } else {
          audio.pause();
          audioBtn.setAttribute("aria-pressed", "false");
          audioBtn.classList.remove("is-playing");
        }
      });
    }

    // 🧊 FUNCIÓN QUE GENERA NIEVE / EMOJIS EN BUCLE
    function gepetrolStartSnow() {
      var layer = document.getElementById("gepetrol-snow-layer");
      if (!layer) return;

      // Evitamos arrancar dos veces
      if (layer.dataset.gpSnowRunning === "1") return;
      layer.dataset.gpSnowRunning = "1";
      layer.classList.add("is-active");

      // Configuración desde data-attributes
      var intensity = layer.getAttribute("data-snow-intensity") || "medium";
      var style = layer.getAttribute("data-snow-style") || "both";
      var isMobile =
        layer.getAttribute("data-snow-mobile") === "1" ||
        /Mobi|Android/i.test(navigator.userAgent) ||
        window.innerWidth < 768;

      // Si es móvil, bajamos un poco la intensidad automáticamente
      if (isMobile) {
        if (intensity === "high") {
          intensity = "medium";
        } else if (intensity === "medium") {
          intensity = "low";
        }
      }
      var intervalMs;
      switch (intensity) {
        case "low":
          intervalMs = 350; // menos copos
          break;
        case "high":
          intervalMs = 80; // muchos copos
          break;
        case "medium":
        default:
          intervalMs = 180;
          break;
      }

      var emojiSet = ["❄️", "❄️", "❄️", "🎄", "🎁", "⭐️", "☃️"];
      var snowChar = "❄";

      // Bucle infinito (hasta que se cambie de página o se quite el div)
      setInterval(function () {
        if (!document.body.contains(layer)) {
          return; // si se ha eliminado la capa, no hacemos nada
        }

        var flake = document.createElement("span");
        flake.className = "gepetrol-snowflake";

        // Determinar si este copo será nieve o emoji
        var useEmoji;
        if (style === "snow") {
          useEmoji = false;
        } else if (style === "emojis") {
          useEmoji = true;
        } else {
          // both -> 30% emojis, 70% copos
          useEmoji = Math.random() < 0.3;
        }

        if (useEmoji) {
          flake.textContent =
            emojiSet[Math.floor(Math.random() * emojiSet.length)];
        } else {
          flake.textContent = snowChar;
        }

        var left = Math.random() * 100; // 0–100 vw
        var duration = 5 + Math.random() * 7; // 5–12 s
        var size = 12 + Math.random() * 18; // 12–30 px
        var delay = Math.random() * 5; // 0–5 s

        flake.style.left = left + "vw";
        flake.style.animationDuration = duration + "s";
        flake.style.fontSize = size + "px";
        flake.style.animationDelay = delay + "s";

        layer.appendChild(flake);

        // Limpiar cada copo al acabar la animación
        setTimeout(function () {
          if (flake.parentNode === layer) {
            layer.removeChild(flake);
          }
        }, (duration + delay) * 1000 + 500);
      }, intervalMs);
    }

    // ▶️ ARRANCAR NIEVE AUTOMÁTICAMENTE SI LA CAPA EXISTE
    if (document.getElementById("gepetrol-snow-layer")) {
      gepetrolStartSnow();
    }

    // 🔔 OPCIONAL: también llamamos al cerrar el modal (por si el modal está en otra página en el futuro)
    var modal = document.getElementById("gepetrol-home-modal");
    if (modal) {
      var closeEls = modal.querySelectorAll("[data-gp-modal-close]");
      closeEls.forEach(function (btn) {
        btn.addEventListener("click", function () {
          gepetrolStartSnow(); // no pasa nada si ya está corriendo, se protege con el flag
        });
      });
    }
  });
})(jQuery);
