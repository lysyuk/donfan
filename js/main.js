$(document).ready(function() {
    $("#menu a").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top - 50 + "px"
        }, {
            duration: 1000
        });
        return false;
    });
    $(".phone").mask("+7 (999) 999-9999", {placeholder: " "});
});