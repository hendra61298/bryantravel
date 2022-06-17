$(document).ready(function () {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        //>=, not <=
        if (scroll >= 250) {
            //clearHeader, not clearheader - caps H
            $(".navbar").addClass("sticky-top fixed");
        }
        if (scroll == 0) {
            $(".navbar").removeClass("sticky-top fixed");
        }
    });
    $('#recipeCarousel').carousel({
        interval: 10000
    })


});
