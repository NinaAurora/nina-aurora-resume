$(document).ready(function () {
    $(".logo").click(function (e) {

        $(".landinglogo").removeClass("animate__fadeIn animate__slow");
        $(".landinglogo").addClass("animate__fadeOut");

        e.preventDefault();
        setTimeout(function (url) {
            window.location = url
        }, 1000, this.href);
    });
});