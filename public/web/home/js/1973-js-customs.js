$(document).ready(function() {

    //How It Works Carousel
 $('.howitwork-carousel').owlCarousel({
   loop: true,
   nav: false,
   mouseDrag: false,
   autoplay:false,
   autoplayTimeout:3000,
   autoplayHoverPause:true,
   dots: true,
   items: 1,
   autoHeight:false,
 });

 $('#step1').addClass("hiw-active");

 $('#step1').click(function(){
   $('#step2, #step3, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step1').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 0)
 });
 $('#step2').click(function(){
   $('#step1, #step3, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step2').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 1)
 });
 $('#step3').click(function(){
   $('#step1, #step2, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step3').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 2)
 });
 $('#step4').click(function(){
   $('#step1, #step2, #step3, #step5, #step6').removeClass("hiw-active");
   $('#step4').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 3)
 });
 $('#step5').click(function(){
   $('#step1, #step2, #step3, #step4, #step6').removeClass("hiw-active");
   $('#step5').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 4)
 });
 $('#step6').click(function(){
   $('#step1, #step2, #step3, #step4, #step5').removeClass("hiw-active");
   $('#step6').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 5)
 });




//
 $('.owl-dot:nth-child(1)').click(function(){
   $('#step2, #step3, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step1').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 0)
 });
 $('.owl-dot:nth-child(2)').click(function(){
   $('#step1, #step3, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step2').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 1)
 });
 $('.owl-dot:nth-child(3)').click(function(){
   $('#step1, #step2, #step4, #step5, #step6').removeClass("hiw-active");
   $('#step3').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 2)
 });
 $('.owl-dot:nth-child(4)').click(function(){
   $('#step1, #step2, #step3, #step5, #step6').removeClass("hiw-active");
   $('#step4').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 3)
 });
 $('.owl-dot:nth-child(5)').click(function(){
   $('#step1, #step2, #step3, #step4, #step6').removeClass("hiw-active");
   $('#step5').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 4)
 });
 $('.owl-dot:nth-child(6)').click(function(){
   $('#step1, #step2, #step3, #step4, #step5').removeClass("hiw-active");
   $('#step6').addClass("hiw-active");
   $('.howitwork-carousel').trigger('to.owl.carousel', 5)
 });


 //
   switchDiv();

   $("li:first-child").addClass("first");
   $("li:last-child").addClass("last");

   $('[href="#"]').attr("href", "javascript:;");

   $(".menu-Bar").click(function() {
       $(this).toggleClass("open");
       $(".menuWrap").toggleClass("open");
       $("body").toggleClass("ovr-hiddn");
   });

   $(".loginUp").click(function() {
       $(".LoginPopup").fadeIn();
       $(".overlay").fadeIn();
   });

   $(".signUp").click(function() {
       $(".signUpPop").fadeIn();
       $(".overlay").fadeIn();
   });

    $(".btn-popup").click(function() {
       $('.LoginPopup').fadeIn();
       $('.overlay').fadeIn();
   });

   $(".closePop,.overlay").click(function() {
       $(".popupMain").fadeOut();
       $(".overlay").fadeOut();
   });

   $(".menu .menu-item-has-children").addClass("dropdown-nav ");
   $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

   /* Tabbing Function */
   $("[data-targetit]").on("click", function(e) {
       $(this).addClass("active");
       $(this)
           .siblings()
           .removeClass("active");
       var target = $(this).data("targetit");
       $("." + target)
           .siblings('[class^="box-"]')
           .hide();
       $("." + target).fadeIn();
       $(".tabViewList").slick("setPosition", 0);
   });

   // Accordian
   $(".accordian h4").click(function() {
       $(".accordian li").removeClass("active");
       $(this)
           .parent("li")
           .addClass("active");
       $(".accordian li div").slideUp();
       $(this)
           .parent("li")
           .find("div")
           .slideDown();
   });

   $("li.dropdown-nav").hover(function() {
       $(this)
           .children("ul")
           .stop(true, false, true)
           .slideToggle(300);
   });

   $(".searchBtn").click(function() {
       $(".searchWrap").addClass("active");
       $(".overlay").fadeIn("active");
       $(".searchWrap input").focus();
       $(".searchWrap input").focusout(function(e) {
           $(this)
               .parents()
               .removeClass("active");
           $(".overlay").fadeOut("active");
           $("body").removeClass("ovr-hiddn");
       });
   });

   $(".index-slider").slick({
       dots: false,
       infinite: true,
       speed: 300,
       slidesToShow: 1
           // prevArrow: $('.prev'),
           // nextArrow: $('.next')
   });


   // Slider testimonials
   $('.testi-sldier').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       autoplay:true,
       dots: false,
        arrows: true,
            lazyLoad: 'progressive',
            focusOnSelect: true,
             prevArrow: '<i class="fas fa-caret-left slick-prev key1"></i>',
            nextArrow: '<i class="fas fa-caret-right slick-next key2"></i>',
            responsive: [
   {
     breakpoint: 568,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,

     }
   }
        ]

   });

$(".client_strip_slider").slick({
   dots: false,
   arrows: false,
   infinite: true,
   speed: 300,
   autoplay: true,
   slidesToShow: 6,
   slidesToScroll: 1,
   responsive: [{
           breakpoint: 1024,
           settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
           }
       },
       {
           breakpoint: 767,
           settings: {
               slidesToShow: 2,
               slidesToScroll: 1
           }
       }
   ]
});

   $('#popupcountrycode').val("+1");
   $('#countrycode').val("+1");
   $('#homeformcountry').change(function() {
       var thisval = $(this).children('option:selected').val();
       var thiscode = $(this).children('option:selected').attr('data-abbr');

       $('#countrycode').val("+" + thisval);
       if (thiscode == 'CA') {
           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fgca');
       } else {

           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fg' + thisval);
       }
   });
   $('#popupformcountry').change(function() {
       var thisval = $(this).children('option:selected').val();
       var thiscode = $(this).children('option:selected').attr('data-abbr');

       $('#popupcountrycode').val("+" + thisval);

       if (thiscode == 'CA') {
           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fgca');
       } else {
           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fg' + thisval);
       }




   });




   $('.countrylist').change(function() {
       var thisval = $(this).children('option:selected').val();
       var thiscode = $(this).children('option:selected').attr('data-abbr');

       $('#countrycode').val("+" + thisval);
       $('.countrycode').val("+" + thisval);

       if (thiscode == 'CA') {
           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fgca');
       } else {
           $(this).siblings('span').removeClass();
           $(this).siblings('span').addClass('fg' + thisval);
       }



   });

   ////////////////////////////////////////////////////////////////////////////////////

//    var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
// var days, hours, minutes, seconds; // variables for time units

// var countdown = document.getElementById("tiles"); // get tag element

// getCountdown();
//
// setInterval(function () { getCountdown(); }, 1000);
//
// function getCountdown(){
//
//    // find the amount of "seconds" between now and target
//    var current_date = new Date().getTime();
//    var seconds_left = (target_date - current_date) / 1000;
//
//    days = pad( parseInt(seconds_left / 86400) );
//    seconds_left = seconds_left % 86400;
//
//    hours = pad( parseInt(seconds_left / 3600) );
//    seconds_left = seconds_left % 3600;
//
//    minutes = pad( parseInt(seconds_left / 60) );
//    seconds = pad( parseInt( seconds_left % 60 ) );
//
//    // format countdown string + set tag value
//    countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>";
// }

// function pad(n) {
//    return (n < 10 ? '0' : '') + n;
// }
   ////////////////////////////////////////////////////////////////////////////////////
   //     Slider For
   // $('.slider-for').slick({
   //     slidesToShow: 1,
   //     slidesToScroll: 1,
   //     dots: false,
   //     arrows: false,
   //     fade: true,
   //     asNavFor: '.slider-nav'
   // });
   // $('.slider-nav').slick({
   //     slidesToShow: 4,
   //     slidesToScroll: 1,
   //     asNavFor: '.slider-for',
   //     dots: false,
   //     focusOnSelect: true
   // });

   /* Top Scroll */
   // $('body').on('click', '.scrolldown-fl', function() {
   //     goToScroll('awardSec');
   // });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });
$('.side-bar-frm-head, .sidebar-popup').click(function() {
   $('.side-bar-form').toggleClass('active');
   $('.side-bar-frm-head').toggleClass('active');
   $('.side-bar').toggleClass('active');
});

$(window).on("load", function() {
   var currentUrl = window.location.href.substr(
       window.location.href.lastIndexOf("/") + 1
   );
   $("ul.menu li a").each(function() {
       var hrefVal = $(this).attr("href");
       if (hrefVal === currentUrl) {
           $(this).removeClass("active");
           $(this)
               .closest("li")
               .addClass("active");
           $("ul.menu li.first").removeClass("active");
       }
   });
   if ($(window).width() > 767 ) {

       // console.log("scroll 200")
       // $(window).on("scroll touchmove", function() {
       //     $(".side-bar,.side-bar-form,.side-bar-frm-head").addClass("active", $(document).scrollTop() > 12000);
       // });
       // $('.side-bar,.side-bar-form,.side-bar-frm-head').addClass('active');
       // console.log($('.side-bar'));
   }
});

/* RESPONSIVE JS */
if ($(window).width() < 767) {

    $(".client-strip ul").slick({
       dots: false,
       infinite: true,
       speed: 300,
       slidesToShow: 2,
       autoplay:true,
           // prevArrow: $('.prev'),
           // nextArrow: $('.next')
   });
}

function switchDiv() {
   var $window = $(window).outerWidth();
   if ($window <= 768) {
       $(".topAppendTxt").each(function() {
           var getdtd = $(this)
               .find(".cloneDiv")
               .clone(true);
           $(this)
               .find(".cloneDiv")
               .remove();
           $(this).append(getdtd);
       });
   }
}

function goToScroll(e) {
   $("html, body").animate({
           scrollTop: $("." + e).offset().top
       },
       1000
   );
}
//
// $("form").submit(function (e) {
//       e.preventDefault();
//       var formData = $(this).serialize();
//       const redirectURL = $(this).attr('action');
//       $.ajax({
//         type: "POST",
//         url: "../process.php",
//         data: formData,
//         // dataType: "json",
//         // async: false,
//         success: function (response) {
//           //var jsonData = JSON.parse(response);
//           if (response == 'success') {
//             //console.log(response);
//             window.location.href = redirectURL;
//           }
//         }
//       });
//     });
	//
	// function iplocate() {
    //   var key = '5XpThOAEkfgOvEJ';
    //   $.ajax({
    //     method: 'get',
    //     url: '//pro.ip-api.com/json/',
	// 	dataType : 'jsonp',   //you may use jsonp for cross origin request
    //     crossDomain:true,
    //     data: { key: key },
    //     success: function (data) {
    //       if (data) {
    //         console.log(data);
    //         $('input[name=visitor_ip]').val(data.query);
    //         $('input[name=visitor_country]').val(data.country);
    //         $('input[name=visitor_city]').val(data.city);
    //         $('input[name=visitor_state]').val(data.regionName);
    //         $('input[name=visitor_isp]').val(data.isp);
    //         $('input[name=visitor_timezone]').val(data.timezone);
    //       }
    //     }
    //   });
    // }
	//
	// iplocate();
