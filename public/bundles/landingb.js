function shuffle(n) {
        var r, i, t = n.length;
        if (t)
            while (--t) i = Math.floor(Math.random() * (t + 1)), r = n[i], n[i] = n[t], n[t] = r;
        return n
    }(function(n) {
        function t(t, i, r, u) {
            var f = t.text().split(i),
                e = "";
            f.length && (n(f).each(function(n, t) {
                e += '<span class="' + r + (n + 1) + '">' + t + "<\/span>" + u
            }), t.empty().append(e))
        }
        var i = {
            init: function() {
                return this.each(function() {
                    t(n(this), "", "char", "")
                })
            },
            words: function() {
                return this.each(function() {
                    t(n(this), " ", "word", " ")
                })
            },
            lines: function() {
                return this.each(function() {
                    var i = "eefec303079ad17405c889e092e105b0";
                    t(n(this).children("br").replaceWith(i).end(), i, "line", "")
                })
            }
        };
        n.fn.lettering = function(t) {
            return t && i[t] ? i[t].apply(this, [].slice.call(arguments, 1)) : t === "letters" || !t ? i.init.apply(this, [].slice.call(arguments, 0)) : (n.error("Method " + t + " does not exist on jQuery.lettering"), this)
        }
    })(jQuery),
    function(n) {
        "use strict";

        function t(t) {
            return /In/.test(t) || n.inArray(t, n.fn.textillate.defaults.inEffects) >= 0
        }

        function i(t) {
            return /Out/.test(t) || n.inArray(t, n.fn.textillate.defaults.outEffects) >= 0
        }

        function r(t) {
            var r = t.attributes || [],
                i = {};
            return r.length ? (n.each(r, function(n, t) {
                /^data-in-*/.test(t.nodeName) ? (i.in = i.in || {}, i.in[t.nodeName.replace(/data-in-/, "")] = t.nodeValue) : /^data-out-*/.test(t.nodeName) ? (i.out = i.out || {}, i.out[t.nodeName.replace(/data-out-/, "")] = t.nodeValue) : /^data-*/.test(t.nodeName) && (i[t.nodeName] = t.nodeValue)
            }), i) : i
        }

        function f(n) {
            for (var i, r, t = n.length; t; i = parseInt(Math.random() * t), r = n[--t], n[t] = n[i], n[i] = r);
            return n
        }

        function e(n, t, i) {
            n.addClass("animated " + t).css("visibility", "visible").show();
            n.one("animationend webkitAnimationEnd oAnimationEnd", function() {
                n.removeClass("animated " + t);
                i && i()
            })
        }

        function u(r, u, o) {
            var h = this,
                s = r.length;
            if (!s) {
                o && o();
                return
            }
            u.shuffle && (r = f(r));
            u.reverse && (r = r.toArray().reverse());
            n.each(r, function(r, f) {
                function c() {
                    t(u.effect) ? h.css("visibility", "visible") : i(u.effect) && h.css("visibility", "hidden");
                    s -= 1;
                    !s && o && o()
                }
                var h = n(f),
                    l = u.sync ? u.delay : u.delay * r * u.delayScale;
                h.text() ? setTimeout(function() {
                    e(h, u.effect, c)
                }, l) : c()
            })
        }
        var o = function(f, e) {
            var o = this,
                s = n(f);
            o.init = function() {
                o.$texts = s.find(e.selector);
                o.$texts.length || (o.$texts = n('<ul class="texts"><li>' + s.html() + "<\/li><\/ul>"), s.html(o.$texts));
                o.$texts.hide();
                o.$current = n("<span>").text(o.$texts.find(":first-child").html()).prependTo(s);
                t(e.effect) ? o.$current.css("visibility", "hidden") : i(e.effect) && o.$current.css("visibility", "visible");
                o.setOptions(e);
                setTimeout(function() {
                    o.options.autoStart && o.start()
                }, o.options.initialDelay)
            };
            o.setOptions = function(n) {
                o.options = n
            };
            o.triggerEvent = function(t) {
                var i = n.Event(t + ".tlt");
                return s.trigger(i, o), i
            };
            o.in = function(f, e) {
                f = f || 0;
                var c = o.$texts.find(":nth-child(" + (f + 1) + ")"),
                    s = n.extend({}, o.options, r(c)),
                    h;
                c.addClass("current");
                o.triggerEvent("inAnimationBegin");
                o.$current.text(c.html()).lettering("words");
                o.$current.find('[class^="word"]').css({
                    display: "inline-block",
                    "-webkit-transform": "translate3d(0,0,0)",
                    "-moz-transform": "translate3d(0,0,0)",
                    "-o-transform": "translate3d(0,0,0)",
                    transform: "translate3d(0,0,0)"
                }).each(function() {
                    n(this).lettering()
                });
                h = o.$current.find('[class^="char"]').css("display", "inline-block");
                t(s.in.effect) ? h.css("visibility", "hidden") : i(s.in.effect) && h.css("visibility", "visible");
                o.currentIndex = f;
                u(h, s.in, function() {
                    o.triggerEvent("inAnimationEnd");
                    s.in.callback && s.in.callback();
                    e && e(o)
                })
            };
            o.out = function(t) {
                var f = o.$texts.find(":nth-child(" + (o.currentIndex + 1) + ")"),
                    e = o.$current.find('[class^="char"]'),
                    i = n.extend({}, o.options, r(f));
                o.triggerEvent("outAnimationBegin");
                u(e, i.out, function() {
                    f.removeClass("current");
                    o.triggerEvent("outAnimationEnd");
                    i.out.callback && i.out.callback();
                    t && t(o)
                })
            };
            o.start = function(n) {
                o.triggerEvent("start"),
                    function t(n) {
                        o.in(n, function() {
                            var i = o.$texts.children().length;
                            n += 1;
                            !o.options.loop && n >= i ? (o.options.callback && o.options.callback(), o.triggerEvent("end")) : (n = n % i, setTimeout(function() {
                                o.out(function() {
                                    t(n)
                                })
                            }, o.options.minDisplayTime))
                        })
                    }(n || 0)
            };
            o.init()
        };
        n.fn.textillate = function(t, i) {
            return this.each(function() {
                var f = n(this),
                    u = f.data("textillate"),
                    e = n.extend(!0, {}, n.fn.textillate.defaults, r(this), typeof t == "object" && t);
                u ? typeof t == "string" ? u[t].apply(u, [].concat(i)) : u.setOptions.call(u, e) : f.data("textillate", u = new o(this, e))
            })
        };
        n.fn.textillate.defaults = {
            selector: ".texts",
            loop: !1,
            minDisplayTime: 2e3,
            initialDelay: 0,
            "in": {
                effect: "fadeInLeftBig",
                delayScale: 1.5,
                delay: 50,
                sync: !1,
                reverse: !1,
                shuffle: !1,
                callback: function() {}
            },
            out: {
                effect: "hinge",
                delayScale: 1.5,
                delay: 50,
                sync: !1,
                reverse: !1,
                shuffle: !1,
                callback: function() {}
            },
            autoStart: !0,
            inEffects: [],
            outEffects: ["hinge"],
            callback: function() {}
        }
    }(jQuery);
String.prototype.supplant = function(n) {
    return this.replace(/{([^{}]*)}/g, function(t, i) {
        var r = n[i];
        return typeof r == "string" || typeof r == "number" ? r : t
    })
};
$(function() {
    var n = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    $(window).resize(function() {
        n = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
    });
    n > 630 && $(".title .container").textillate({
        loop: !0,
        minDisplayTime: 3e3,
        initialDelay: 0,
        "in": {
            delayScale: 1.5,
            delay: 50,
            sync: !0,
            effect: "flipInX"
        },
        out: {
            sync: !0,
            delayScale: 1.5,
            effect: "fadeOut"
        }
    });
    $(".tweets").length && $.getJSON("Public/tweets.json", function(n) {
        n = shuffle(n);
        $.get("Public/views/partial_tweet.html", function(t) {
            for (var i = 0; i <= 5; i++) $(".tweets").append(t.supplant(n[i]))
        })
    });
    $(".modal").click(function(n) {
        ($(n.target).is("div.container") || $(n.target).is("div.close")) && ($(this).addClass("hidden"), $("#video .inner iframe").remove())
    });
    $(".show-sign-up").click(function() {
        return ga("send", "pageview", {
            page: "/auth/email",
            title: "Authenticated via email",
            hitCallback: function() {
                isFormSubmitted = !0
            }
        }), n > 630 ? ($("#sign-up").removeClass("hidden"), $("#Username").focus(), !1) : !0
    });
    $(".show-video").click(function() {
        return $("#video").has("iframe").length || $("#video .inner").append('<iframe id="dragdis-video" src="https://youtube.com/embed/HLEAA_tIpbY?autoplay=1&controls=1&autohide=1" frameborder="0" allowfullscreen><\/iframe>'), $("#video").removeClass("hidden"), !1
    });
    /*$("#externalLogin button").click(function() {
        var n = $(this).parents("form").get(0),
            t = $(this).parent().attr("class"),
            i = !1;
        return n.elements.provider.value = $(this).val(), localStorage.setItem("resetAnalyticsRefferer", !0), ga("send", "pageview", {
            page: "/auth/" + t,
            title: "Authenticated via " + t,
            hitCallback: function() {
                i = !0;
                n.submit()
            }
        }), setTimeout(function() {
            i || n.submit()
        }, 2e3), !1
    })*/
})