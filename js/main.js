$(document).ready(function() {
    $('#menu').affix({
        offset: {
            top: 100
        }
    })
    $("#menu a").click(function() {
        var str = $(this).attr("href");
        $.scrollTo(str, 1000, {offset: -67});
        return false;
    });
    $(".phone").mask("+7 (999) 999-9999", {placeholder: " "});
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});