function myFunction() {
    var t = document.getElementById("myLinks");
    "block" === t.style.display
        ? (t.style.display = "none")
        : (t.style.display = "block");
}
!(function (t) {
    "function" == typeof define && define.amd
        ? define(["jquery"], t)
        : "object" == typeof module && module.exports
        ? (module.exports = t(require("jquery")))
        : t(jQuery);
})(function (t) {
    var e = Array.prototype.slice,
        s = Array.prototype.splice,
        n = {
            topSpacing: 0,
            bottomSpacing: 0,
            className: "is-sticky",
            wrapperClassName: "sticky-wrapper",
            center: !1,
            getWidthFrom: "",
            widthFromWrapper: !0,
            responsiveWidth: !1,
            zIndex: "inherit",
        },
        i = t(window),
        o = t(document),
        a = [],
        r = i.height(),
        c = function () {
            for (
                var e = i.scrollTop(),
                    s = o.height(),
                    n = s - r,
                    c = e > n ? n - e : 0,
                    p = 0,
                    l = a.length;
                p < l;
                p++
            ) {
                var d = a[p],
                    h = d.stickyWrapper.offset().top - d.topSpacing - c;
                if (
                    (d.stickyWrapper.css(
                        "height",
                        d.stickyElement.outerHeight()
                    ),
                    e <= h)
                )
                    null !== d.currentTop &&
                        (d.stickyElement.css({
                            width: "",
                            position: "",
                            top: "",
                            "z-index": "",
                        }),
                        d.stickyElement.parent().removeClass(d.className),
                        d.stickyElement.trigger("sticky-end", [d]),
                        (d.currentTop = null));
                else {
                    var u,
                        m =
                            s -
                            d.stickyElement.outerHeight() -
                            d.topSpacing -
                            d.bottomSpacing -
                            e -
                            c;
                    m < 0 ? (m += d.topSpacing) : (m = d.topSpacing),
                        d.currentTop !== m &&
                            (d.getWidthFrom
                                ? ((padding =
                                      d.stickyElement.innerWidth() -
                                      d.stickyElement.width()),
                                  (u =
                                      t(d.getWidthFrom).width() - padding ||
                                      null))
                                : d.widthFromWrapper &&
                                  (u = d.stickyWrapper.width()),
                            null == u && (u = d.stickyElement.width()),
                            d.stickyElement
                                .css("width", u)
                                .css("position", "fixed")
                                .css("top", m)
                                .css("z-index", d.zIndex),
                            d.stickyElement.parent().addClass(d.className),
                            null === d.currentTop
                                ? d.stickyElement.trigger("sticky-start", [d])
                                : d.stickyElement.trigger("sticky-update", [d]),
                            (d.currentTop === d.topSpacing &&
                                d.currentTop > m) ||
                            (null === d.currentTop && m < d.topSpacing)
                                ? d.stickyElement.trigger(
                                      "sticky-bottom-reached",
                                      [d]
                                  )
                                : null !== d.currentTop &&
                                  m === d.topSpacing &&
                                  d.currentTop < m &&
                                  d.stickyElement.trigger(
                                      "sticky-bottom-unreached",
                                      [d]
                                  ),
                            (d.currentTop = m));
                    var f = d.stickyWrapper.parent();
                    d.stickyElement.offset().top +
                        d.stickyElement.outerHeight() >=
                        f.offset().top + f.outerHeight() &&
                    d.stickyElement.offset().top <= d.topSpacing
                        ? d.stickyElement
                              .css("position", "absolute")
                              .css("top", "")
                              .css("bottom", 0)
                              .css("z-index", "")
                        : d.stickyElement
                              .css("position", "fixed")
                              .css("top", m)
                              .css("bottom", "")
                              .css("z-index", d.zIndex);
                }
            }
        },
        p = function () {
            r = i.height();
            for (var e = 0, s = a.length; e < s; e++) {
                var n = a[e],
                    o = null;
                n.getWidthFrom
                    ? n.responsiveWidth && (o = t(n.getWidthFrom).width())
                    : n.widthFromWrapper && (o = n.stickyWrapper.width()),
                    null != o && n.stickyElement.css("width", o);
            }
        },
        l = {
            init: function (e) {
                return this.each(function () {
                    var s = t.extend({}, n, e),
                        i = t(this),
                        o = i.attr("id"),
                        r = o
                            ? o + "-" + n.wrapperClassName
                            : n.wrapperClassName,
                        c = t("<div></div>")
                            .attr("id", r)
                            .addClass(s.wrapperClassName);
                    i.wrapAll(function () {
                        if (0 == t(this).parent("#" + r).length) return c;
                    });
                    var p = i.parent();
                    s.center &&
                        p.css({
                            width: i.outerWidth(),
                            marginLeft: "auto",
                            marginRight: "auto",
                        }),
                        "right" === i.css("float") &&
                            i
                                .css({ float: "none" })
                                .parent()
                                .css({ float: "right" }),
                        (s.stickyElement = i),
                        (s.stickyWrapper = p),
                        (s.currentTop = null),
                        a.push(s),
                        l.setWrapperHeight(this),
                        l.setupChangeListeners(this);
                });
            },
            setWrapperHeight: function (e) {
                var s = t(e),
                    n = s.parent();
                n && n.css("height", s.outerHeight());
            },
            setupChangeListeners: function (t) {
                window.MutationObserver
                    ? new window.MutationObserver(function (e) {
                          (e[0].addedNodes.length ||
                              e[0].removedNodes.length) &&
                              l.setWrapperHeight(t);
                      }).observe(t, { subtree: !0, childList: !0 })
                    : window.addEventListener
                    ? (t.addEventListener(
                          "DOMNodeInserted",
                          function () {
                              l.setWrapperHeight(t);
                          },
                          !1
                      ),
                      t.addEventListener(
                          "DOMNodeRemoved",
                          function () {
                              l.setWrapperHeight(t);
                          },
                          !1
                      ))
                    : window.attachEvent &&
                      (t.attachEvent("onDOMNodeInserted", function () {
                          l.setWrapperHeight(t);
                      }),
                      t.attachEvent("onDOMNodeRemoved", function () {
                          l.setWrapperHeight(t);
                      }));
            },
            update: c,
            unstick: function (e) {
                return this.each(function () {
                    for (var e = t(this), n = -1, i = a.length; i-- > 0; )
                        a[i].stickyElement.get(0) === this &&
                            (s.call(a, i, 1), (n = i));
                    -1 !== n &&
                        (e.unwrap(),
                        e.css({
                            width: "",
                            position: "",
                            top: "",
                            float: "",
                            "z-index": "",
                        }));
                });
            },
        };
    window.addEventListener
        ? (window.addEventListener("scroll", c, !1),
          window.addEventListener("resize", p, !1))
        : window.attachEvent &&
          (window.attachEvent("onscroll", c),
          window.attachEvent("onresize", p)),
        (t.fn.sticky = function (s) {
            return l[s]
                ? l[s].apply(this, e.call(arguments, 1))
                : "object" != typeof s && s
                ? void t.error(
                      "Method " + s + " does not exist on jQuery.sticky"
                  )
                : l.init.apply(this, arguments);
        }),
        (t.fn.unstick = function (s) {
            return l[s]
                ? l[s].apply(this, e.call(arguments, 1))
                : "object" != typeof s && s
                ? void t.error(
                      "Method " + s + " does not exist on jQuery.sticky"
                  )
                : l.unstick.apply(this, arguments);
        }),
        t(function () {
            setTimeout(c, 0);
        });
}),
    $(function () {
        $(".js-sticky-header").sticky({ topSpacing: 0 }),
            $(".js-clone-nav").each(function () {
                $(this)
                    .clone()
                    .attr("class", "site-nav-wrap")
                    .appendTo(".site-mobile-menu-body");
            }),
            setTimeout(function () {
                var t = 0;
                $(".site-mobile-menu .has-children").each(function () {
                    var e = $(this);
                    e.prepend('<span class="arrow-collapse collapsed">'),
                        e.find(".arrow-collapse").attr({
                            "data-toggle": "collapse",
                            "data-target": "#collapseItem" + t,
                        }),
                        e.find("> ul").attr({
                            class: "collapse",
                            id: "collapseItem" + t,
                        }),
                        t++;
                });
            }, 1e3),
            $("body").on("click", ".arrow-collapse", function (t) {
                var e = $(this);
                e.closest("li").find(".collapse").hasClass("show")
                    ? e.removeClass("active")
                    : e.addClass("active"),
                    t.preventDefault();
            }),
            $(window).resize(function () {
                $(this).width() > 768 &&
                    $("body").hasClass("offcanvas-menu") &&
                    $("body").removeClass("offcanvas-menu");
            }),
            $("body").on("click", ".js-menu-toggle", function (t) {
                var e = $(this);
                t.preventDefault(),
                    $("body").hasClass("offcanvas-menu")
                        ? ($("body").removeClass("offcanvas-menu"),
                          e.removeClass("active"))
                        : ($("body").addClass("offcanvas-menu"),
                          e.addClass("active"));
            }),
            $(document).mouseup(function (t) {
                var e = $(".site-mobile-menu");
                !e.is(t.target) &&
                    0 === e.has(t.target).length &&
                    $("body").hasClass("offcanvas-menu") &&
                    $("body").removeClass("offcanvas-menu");
            });
    });
