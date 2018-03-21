$(function () {
    $("#container > #inner-container > #card").addClass("animated fadeIn");
    setTimeout(function () {
        $("#container > #inner-container > #card > #avatar > img").addClass("animated fadeIn");
        setTimeout(function () {
            $("#container > #inner-container > #card").children().not("#avatar").each(function (i) {
                var el = $(this);
                setTimeout(function () {
                    el.addClass("animated fadeIn");
                }, 100 * (i + 1));
            });
        }, 400);
    }, 200);
    var strings = $("h1#typed").children("span").map(function () {
        return $(this).text();
    }).toArray();
    $("h1#typed").html("<span></span>").css("justify-content", "initial");
    var typed = new Typed("h1#typed > span", {
        backDelay: 2000,
        backSpeed: 100,
        loop: true,
        smartBackspace: false,
        startDelay: 1000,
        strings: strings,
        typeSpeed: 100
    });
});