var isLargeWindow, firstRun = !0, iconRuns = 1, icons = ['html5-plain-wordmark', 'javascript-plain', 'css3-plain-wordmark', 'jquery-plain-wordmark', 'bootstrap-plain-wordmark', 'nodejs-plain-wordmark', 'php-plain', 'mysql-plain-wordmark', 'git-plain-wordmark', 'android-plain', 'docker-plain-wordmark', 'java-plain-wordmark', 'windows8-plain', 'ubuntu-plain-wordmark', 'linux-plain', 'apple-plain'];
$(window).on("load resize", function() {
    (
        $(window).width() > 576 == !isLargeWindow || firstRun) && (firstRun ? firstRun = !1 : isLargeWindow = !isLargeWindow, $("h1, h2").not("#typed").each(function() {
        if (isLargeWindow) $(this).html($(this).text().split(" ").map(function(n) {
            return "<span>" + n + "</span>"
        }).join("&nbsp;"));
        else {
            var n = "";
            $(this).children("span").each(function() {
                n += $(this).text() + " "
            }), $(this).html(n.substring(0, n.length - 1))
        }
    }))
}), $(function() {
    var n = $("h1#typed").children("span").map(function() {
        return $(this).text()
    }).toArray();
    $("h1#typed").html("<span></span>").css("justify-content", "initial");
    new Typed("h1#typed > span", {
        backDelay: 2e3,
        backSpeed: 100,
        loop: !0,
        smartBackspace: !1,
        startDelay: 1e3,
        strings: n,
        typeSpeed: 100
    });
    $("#container > #inner-container > #card").addClass("animated fadeIn"), setTimeout(function() {
        $("#container > #inner-container > #card > #avatar > img").addClass("animated fadeIn"), setTimeout(function() {
            $("#container > #inner-container > #card").children().not("#avatar").each(function(n) {
                var t = $(this);
                setTimeout(function() {
                    t.addClass("animated fadeIn");
                    if(t.is("#competence-container")) {
                        $("#competence-container i").each(function() {
                            $(this).attr("class", 'devicon-' + icons[$(this).index()]);
                        });
                    }
                }, 100 * (n + 1))
            })
        }, 400)
    }, 200)

});