$(function() {
    var n = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    $(window).resize(function() {
        n = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
    });
    $(".modal").click(function(n) {
        ($(n.target).is("div.container") || $(n.target).is("div.close")) && ($(this).addClass("hidden"), $("#video .inner iframe").remove())
    });
    $(".show-sign-up").click(function() {
        return n > 630 ? ($("#sign-up").removeClass("hidden"), $("#Username").focus(), !1) : $(this).is("a") ? !0 : (window.location.href = "/auth/register", !1)
    });
    $(".show-video").click(function() {
        return $("#video").has("iframe").length || $("#video .inner").append('<iframe id="dragdis-video" src="https://youtube.com/embed/PpKwMkyAtiU?autoplay=1&controls=1&autohide=1" frameborder="0" allowfullscreen><\/iframe>'), $("#video").removeClass("hidden"), !1
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
    });*/
    $("a").click(function() {
        return $("html, body").animate({
            scrollTop: $($.attr(this, "href")).offset().top
        }, 500), !1
    })
})