jQuery(document).ready(function () {
    var e,
        a = jQuery("#slidertext");
    jQuery(function () {
        var e = a.children(".main-text"),
            i = e.length,
            t = 0,
            o = function () {
                e.eq(t).fadeOut(500, function () {
                    (t += 1) === i && (t = 0), e.eq(t).fadeIn(500);
                });
            };
        e.not(":first").hide(), setInterval(o, 3e3);
    }),
        jQuery(".big-img").magnificPopup({
            delegate: "a",
            type: "image",
            closeOnContentClick: !1,
            closeBtnInside: !1,
            mainClass: "mfp-with-zoom mfp-img-mobile",
            image: { verticalFit: !0 },
            gallery: { enabled: !1 },
            zoom: {
                enabled: !0,
                duration: 300,
                opener: function (e) {
                    return e.find("img");
                },
            },
        }),
        jQuery(".big-img-1").magnificPopup({ type: "image" }),
        $(".big-video").magnificPopup({
            type: "iframe",
            iframe: {
                patterns: {
                    dailymotion: {
                        index: "dailymotion.com",
                        id: function (e) {
                            var a = e.match(
                                /^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/
                            );
                            return null !== a
                                ? void 0 !== a[4]
                                    ? a[4]
                                    : a[2]
                                : null;
                        },
                        src: "http://www.dailymotion.com/embed/video/%id%",
                    },
                },
            },
        }),
        $(".big-youtube").magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-with-zoom mfp-img-mobile",
            removalDelay: 0,
            preloader: !1,
            fixedContentPos: !1,
            iframe: {
                patterns: {
                    youtube: {
                        src: "http://www.youtube.com/embed/%id%?autoplay=1&rel=0",
                    },
                },
            },
        }),
        $(".vim-video").magnificPopup({
            type: "iframe",
            iframe: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><div class="mfp-title">Some caption</div></div>',
            },
            callbacks: {
                markupParse: function (e, a, i) {
                    a.title = i.el.attr("title");
                },
            },
        }),
        $(".popup-video").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: !1,
            fixedContentPos: !1,
            iframe: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
                srcAction: "iframe_src",
            },
        });
    var i = jQuery("#step-text");
    i.isotope({
        itemSelector: ".cont",
        filter: ".planing",
        hiddenStyle: { opacity: 0 },
        visibleStyle: { opacity: 1 },
    }),
        jQuery(".filt-step").on("click", function (e) {
            e.preventDefault();
            var a = jQuery(this);
            if (a.hasClass("active")) return !1;
            a.parents().find(".active").removeClass("active"),
                a.addClass("active");
            var t = jQuery(this).attr("data-filter");
            return i.isotope({ filter: t }), !1;
        });
    var t = jQuery("#services");
    t.isotope({
        itemSelector: ".service",
        filter: ".passion",
        hiddenStyle: { opacity: 0 },
        visibleStyle: { opacity: 1 },
    }),
        jQuery(".filt-serv").on("click", function (e) {
            e.preventDefault();
            var a = jQuery(this);
            if (a.hasClass("selected")) return !1;
            a.parents().find(".selected").removeClass("selected"),
                a.addClass("selected");
            var i = jQuery(this).attr("data-filter");
            return t.isotope({ filter: i }), !1;
        }),
        jQuery("#w-gallery-container").length &&
            new Macy({
                container: "#w-gallery-container",
                trueOrder: !1,
                waitForImages: !0,
                debug: !0,
                columns: 3,
                breakAt: {
                    1200: { columns: 3 },
                    940: { columns: 2 },
                    520: { columns: 2 },
                    400: { columns: 1 },
                },
            });
    var o = jQuery(".w-gallery-container");
    o.isotope({ itemSelector: ".w-gallery", filter: "*" }),
        jQuery(".filt-projects-w").on("click", function (e) {
            e.preventDefault();
            var a = jQuery(this);
            if (a.hasClass("selected")) return !1;
            a.parents().find(".selected").removeClass("selected"),
                a.addClass("selected");
            var i = $(this).attr("data-project");
            return o.isotope({ filter: i }), !1;
        }),
        o.imagesLoaded().progress(function () {
            o.isotope("layout");
        }),
        $(".filtter-icon").on("click", function () {
            $("#filter-porto").slideToggle(600),
                $("#filter-hide").toggleClass("show");
        }),
        $("#owl-testimonial").owlCarousel({
            margin: 15,
            responsiveClass: !0,
            responsive: {
                0: { items: 1 },
                320: { items: 1 },
                414: { items: 1, loop: !0 },
                800: { items: 1, loop: !0 },
                1024: { items: 1, loop: !0 },
            },
        }),
        $("#owl-gal").owlCarousel({
            margin: 0,
            responsiveClass: !0,
            responsive: {
                0: { items: 1, nav: !0, stagePadding: 0 },
                320: { items: 1, nav: !0, stagePadding: 0 },
                414: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
                800: { items: 2, nav: !0, loop: !0, stagePadding: 0 },
                1024: { items: 3, nav: !0, loop: !0, stagePadding: 160 },
            },
            nav: !0,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        }),
        $("#owl-tour").owlCarousel({
            margin: 0,
            responsiveClass: !0,
            responsive: {
                0: { items: 1, nav: !0, stagePadding: 0 },
                320: { items: 1, nav: !0, stagePadding: 0 },
                414: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
                800: { items: 2, nav: !0, loop: !0, stagePadding: 0 },
                1024: { items: 3, nav: !0, loop: !0, stagePadding: 160 },
            },
            nav: !0,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });
    var s = jQuery("#owl-post");
    s.owlCarousel({
        items: 3,
        pagination: !1,
        itemsDesktop: [1e3, 2],
        itemsDesktopSmall: [900, 2],
        itemsTablet: [600, 1],
        itemsMobile: !1,
        autoPlay: !1,
        navigation: !0,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>",
        ],
    });
    var s = jQuery("#owl-team");
    s.owlCarousel({
        margin: 15,
        responsiveClass: !0,
        responsive: {
            0: { items: 1, nav: !0, stagePadding: 0 },
            320: { items: 1, nav: !0, stagePadding: 0 },
            414: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
            800: { items: 2, nav: !0, loop: !0, stagePadding: 0 },
            1024: { items: 2, nav: !0, loop: !1, stagePadding: 160 },
            1600: { items: 3, nav: !0, loop: !1, stagePadding: 160 },
            1920: { items: 4, nav: !0, loop: !1, stagePadding: 160 },
            2200: { items: 5, nav: !0, loop: !1, stagePadding: 160 },
            2300: { items: 6, nav: !0, loop: !1, stagePadding: 160 },
        },
        nav: !0,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
    });
    var s = jQuery("#owl-brand");
    s.owlCarousel({
        items: 6,
        pagination: !1,
        itemsDesktop: [1e3, 4],
        itemsDesktopSmall: [900, 3],
        itemsTablet: [600, 2],
        itemsMobile: !1,
        autoPlay: 2e3,
        stopOnHover: !0,
    }),
        $("#projectsBig").owlCarousel({
            margin: 15,
            responsiveClass: !0,
            responsive: {
                0: { items: 1, nav: !0, stagePadding: 0 },
                320: { items: 1, nav: !0, stagePadding: 0 },
                414: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
                800: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
                1024: { items: 1, nav: !0, loop: !0, stagePadding: 0 },
            },
            nav: !0,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        }),
        (e = jQuery("#revolution-slider").revolution({
            delay: 15e3,
            startwidth: 1170,
            startheight: 600,
            onHoverStop: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,
            touchenabled: "on",
            stopAtSlide: -1,
            stopAfterLoops: -1,
            touchenabled: "on",
            navigationType: "none",
            dottedOverlay: "",
            fullWidth: "on",
            fullScreen: "on",
            shadow: 0,
        })),
        (e = jQuery("#revolution-slider-half").revolution({
            delay: 9e3,
            startwidth: 960,
            startheight: 680,
            onHoverStop: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,
            touchenabled: "on",
            stopAtSlide: -1,
            stopAfterLoops: -1,
            touchenabled: "on",
            navigationType: "none",
            dottedOverlay: "",
            fullWidth: "on",
            shadow: 0,
        }));
});
