jQuery(window).on("load", function () {
    "use strict";
    autoheight(), autoheight1(), autoheight2();
    var e = jQuery(".preloader, .preloader-white"),
        a = jQuery(".bg-preloader, .bg-preloader-white"),
        t = jQuery("#main-menu"),
        n = jQuery(".navbar-default-white");
    jQuery("nav a"),
        jQuery(".subnav"),
        e.fadeOut("slow", function () {
            a.fadeOut(900),
                onStep(),
                n.sticky(),
                jQuery(window).width(),
                jQuery(".navbar-toggle").on("click", function () {
                    t.slideToggle(300), n.toggleClass("fullHeight");
                });
        });
    var l = $("#name-contact-1"),
        s = $("#email-contact, input#email-contact"),
        c = $("#message-contact"),
        o = $("#send-contact-1");
    jQuery("#mail_success"),
        jQuery("#mail_failed"),
        jQuery(function () {
            o.on("click", function (e) {
                e.preventDefault();
                var e = l.val(),
                    a = s.val(),
                    t = c.val();
                return (
                    0 == a.length ||
                    "-1" == a.indexOf("@") ||
                    "-1" == a.indexOf(".")
                        ? s.css({ border: "2px solid #c8b16f" })
                        : s.css({ border: "2px solid #f1f1f1" }),
                    0 == e.length
                        ? l.css({ border: "2px solid #c8b16f" })
                        : l.css({ border: "2px solid #f1f1f1" }),
                    0 == t.length
                        ? c.css({ border: "2px solid #c8b16f" })
                        : c.css({ border: "2px solid #f1f1f1" }),
                    !1
                );
            });
        }),
        $(".input-group.date").datepicker({ format: "dd/mm/yyyy" }),
        $(function () {
            $("p.max-char").each(function (e, a) {
                var t = $(a).text();
                if (t.length > 80) {
                    var n = t.substr(0, 80),
                        l = t.substr(80);
                    $(a)
                        .html(n)
                        .append($('<a class="readmore"/>').html("..."))
                        .append($('<div class="hidden" />').html(l));
                }
            });
        });
});
