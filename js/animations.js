$(function() {
    $("#container > #inner-container > #card").addClass("animated fadeIn");
    setTimeout(function() {
        $("#container > #inner-container > #card > #avatar > img").addClass("animated fadeIn");
        setTimeout(function() {
            $("#container > #inner-container > #card").children().not("#avatar").each(function(i) {
                var el = $(this);
                console.log(200*(i+1));
                setTimeout(function() {
                    el.addClass("animated fadeIn");
                }, 100*(i+1));
            });
        }, 400);
    }, 200);
});