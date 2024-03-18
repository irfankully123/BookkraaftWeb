$(".market-slider").slick({
    dots: !1,
    arrows: !0,
    infinite: !1,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {slidesToShow: 3, slidesToScroll: 3, infinite: !0, dots: !0}
    }, {breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}}, {
        breakpoint: 480,
        settings: {slidesToShow: 1, slidesToScroll: 1}
    }]
}), $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    fade: !0,
    asNavFor: ".slider-nav"
}), $(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: !0,
    centerMode: !0,
    focusOnSelect: !0
}), $(".tab_slider").slick({
    dots: !0,
    infinite: !0,
    speed: 300,
    autoplay: !0,
    slidesToShow: 3,
    slidesToScroll: 1
}), $(".client_strip_slider").slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 300,
    autoplay: !0,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {slidesToShow: 3, slidesToScroll: 3, infinite: !0, dots: !0}
    }, {breakpoint: 767, settings: {slidesToShow: 2, slidesToScroll: 1}}]
}), window.matchMedia("(max-width: 767px)").matches ? ($(".mb_slider").removeClass("row"), $(".mb_slider").slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 300,
    autoplay: !0,
    slidesToShow: 1,
    slidesToScroll: 1
})) : ($(".mb_slider").removeClass("mb_slider"), $(".mb_slider").addClass("row")), $(function () {
    new WOW().init()
}), $(function () {
    $("#menu").slicknav()
}), $(".testi-sldier").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: !0,
    dots: !1,
    arrows: !0,
    lazyLoad: "progressive",
    focusOnSelect: !0,
    prevArrow: '<i class="fas fa-caret-left slick-prev key1"></i>',
    nextArrow: '<i class="fas fa-caret-right slick-next key2"></i>',
    responsive: [{breakpoint: 568, settings: {slidesToShow: 1, slidesToScroll: 1}}]
});
var days, hours, minutes, seconds, target_date = new Date().getTime() + 1728e5,
    countdown = document.getElementById("tiles");
//
// function getCountdown() {
//     // Define the target date (you need to set this value)
//     var target_date = new Date("2023-12-31T23:59:59").getTime();
//
//     var current_time = new Date().getTime();
//     var time_difference = (target_date - current_time) / 1000;
//
//     var days = pad(parseInt(time_difference / 86400));
//     time_difference %= 86400;
//
//     var hours = pad(parseInt(time_difference / 3600));
//     time_difference %= 3600;
//
//     var minutes = pad(parseInt(time_difference / 60));
//     var seconds = pad(parseInt(time_difference % 60));
//
//     // Assuming 'countdown' is an HTML element with this ID
//     var countdown = document.getElementById("countdown");
//     countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>";
// }
//
// // Call the getCountdown function
// getCountdown();
//
// // Update the countdown every second
// setInterval(getCountdown, 1000);
//
//
// function pad(s) {
//     return (s < 10 ? "0" : "") + s
// }
//
// getCountdown();
// setInterval(function () {
//     getCountdown()
// }, 1e3);
