<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <link rel="canonical" href="testimonials.blade.php">
    <link rel="alternate" href="testimonials.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/testimonials/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/testimonials/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/testimonials/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/testimonials/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/testimonials/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/testimonials/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/testimonials/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/testimonials/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/testimonials/css/css-style2.css')}}">
    <title>Testimonials</title>

    <style>
        .slick-active {
            opacity: 1 !important;
        }
    </style>

</head>
<body class="testi-pg">

@include('web.includes.header')
<div class="mainBanner testnnr" style="background-image:url({{asset('web/testimonials/images/bg.jpeg')}}); ">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="banner-txt">
                    <h2>Our Archive of Reviews</h2>
                    <p>With our fine-tuned strategies and relentless pursuit of excellence, we&rsquo;ve helped hundreds of
                        aspiring authors realize their dreams. Here&rsquo;s a peek at what they think about us
                    </p>
                    <ul class="contact-lst">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/testimonials/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                        <li class="last">
                            <a href="tel:(917) 203-8420">
                               <span>
                                   <img class="lazy" src="{{asset('web/publishing/images/images-tele-icon.webp')}}">
                               </span>(917) 203-8420

                           </a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="bannerForm">
                    <img class="lazy" src="{{asset('web/testimonials/images/images-Banner-Timer.webp')}}">
                    <div>
                        <h2>The <span>Best Ghostwriters in Town</span></h2>
                        <h3>Within Easy Reach</h3>
                        <form class="form-get-quote"  method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="text" name="name" placeholder="Name" required="required"  minlength="2"> <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="email" name="email" placeholder="Email" required="required"> <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="text" name="phone" placeholder="Phone" maxlength="12" minlength="12" required="required"> <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="fld-btn">
                                <button class="packageformsubmit1" type="submit">Get Started</button>
                                <input type="hidden" name="route" value="/testimonials/">
                                <input type="hidden" name="form_type" value="topForm">
                                <input type="hidden" name="visitor_country" value>
                                <input type="hidden" name="visitor_ip" value>
                                <input type="hidden" name="visitor_city" value>
                                <input type="hidden" name="visitor_state" value>
                                <input type="hidden" name="visitor_isp" value>
                                <input type="hidden" name="visitor_timezone" value>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="testimonials_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="test_heading">
                    <h2>What Our Clients Say About Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testi_box_wrp">
                    <div class="testti-bodyy">
                        <p>&ldquo;I am glad that I trusted Bookkraaft for their ghostwriting services! The team
                            that I worked with managed to maintain a high level of professionalism throughout the
                            timeline of the project and they submitted exactly
                            what I was looking for. Good job guys!&rdquo;
                        </p>
                        <div class="boddy_qout">
                            <img src="{{asset('web/testimonials/images/images-qut-one.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="testti-fotr">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="testi_imgg">
                                    <img src="{{asset('web/testimonials/images/images-t-1.webp')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-7 m-auto">
                                <div class="testi-fotr_dtll">
                                    <h5>Anne Gardner</h5>
                                    <ul class="d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi_box_wrp">
                    <div class="testti-bodyy">
                        <p>&ldquo;Working with Bookkraaft was a pleasure and I can&rsquo;t imagine receiving better
                            content from any other agency. They managed to deliver exactly what we discussed in the
                            initial brief and kept me in the loop throughout
                            the timeline of the project&ndash; perhaps because I was a little reluctant on trusting their
                            writers at first. I take my words back and appreciate the additional effort!&rdquo;
                        </p>
                        <div class="boddy_qout">
                            <img src="{{asset('web/testimonials/images/images-qut-one.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="testti-fotr">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="testi_imgg">
                                    <img src="{{asset('web/testimonials/images/images-t-2.webp')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-7 m-auto">
                                <div class="testi-fotr_dtll">
                                    <h5>Bruce Owens</h5>
                                    <ul class="d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi_box_wrp">
                    <div class="testti-bodyy">
                        <p>&ldquo;I needed some help in writing a book for my students. Even though I had a lot of
                            material and resources for inspiration, my schedule didn&rsquo;t allow me to actually sit
                            down, and fan the flames of a long-lost hobby. Long story
                            short, I stumbled upon this brilliant agency and my students absolutely love my
                            lectures! Naturally, I plan on hiring them again very soon!&rdquo;
                        </p>
                        <div class="boddy_qout">
                            <img src="{{asset('web/testimonials/images/images-qut-one.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="testti-fotr">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="testi_imgg">
                                    <img src="{{asset('web/testimonials/images/images-t-3.webp')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-7 m-auto">
                                <div class="testi-fotr_dtll">
                                    <h5>Emilie Robertson</h5>
                                    <ul class="d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi_box_wrp">
                    <div class="testti-bodyy">
                        <p>&ldquo;Bookkraaft is the best! I am an accomplished writer myself and I was pretty
                            excited to get my work done from these guys. Perhaps the biggest compliment I can give
                            these guys is that I learned a thing or two about
                            writing compelling content throughout the timeline of my project. Of course, this only
                            happened because they kept me in the loop from start to finish. Keep up the good work
                            guys!&rdquo;
                        </p>
                        <div class="boddy_qout">
                            <img src="{{asset('web/testimonials/images/images-qut-one.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="testti-fotr">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="testi_imgg">
                                    <img src="{{asset('web/testimonials/images/images-t-4.webp')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-7 m-auto">
                                <div class="testi-fotr_dtll">
                                    <h5>Portia Fey</h5>
                                    <ul class="d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi_box_wrp">
                    <div class="testti-bodyy">
                        <p>&ldquo;This is a special shoutout to George and his team in Bookkraaft because they
                            managed to conjure up a well-thought-out memoir for me so I could gift it to my wife on
                            our wedding. To read your own biography as if
                            it was a fairytale is probably the best wedding gift and I know now that the
                            ghostwriters at Bookkraaft are up to the challenge. P.S. my wife loves it!&rdquo;
                        </p>
                        <div class="boddy_qout">
                            <img src="{{asset('web/testimonials/images/images-qut-one.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="testti-fotr">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="testi_imgg">
                                    <img src="{{asset('web/testimonials/images/images-t-5.webp')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-7 m-auto">
                                <div class="testi-fotr_dtll">
                                    <h5>John Sumner</h5>
                                    <ul class="d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-form-sec wow bounceInUp">
    <div class="container">
        <div class="footerbox">
            <div class="row">
                <div class="col-md-6 pad-r-zero p-0">
                    <div class="video-container">
                        <video autoplay loop muted playsinline>
                            <source src="{{asset('web/home/lottie.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-6 pad-l-zero p-0">
                    <div class="footer-right">
                        <h4>Let&rsquo;s Get Your <span>Story </span> Out There!</h4>
                        <form method="POST" action="{{route('customer.form')}}" class="form-get-quote">
                            @csrf
                            <div class="footer-form">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="footer-form-input">
                                            <input type="text" name="name" placeholder="Full Name" required="required"
                                                   minlength="2">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-form-input">
                                            <input type="number" name="phone" placeholder="Phone Number"
                                                   required="required" maxlength="10" minlength="10">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-form-input">
                                            <input type="email" name="email" placeholder="Email" required="required">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="footer-form-textarea">
                                            <textarea name="project_detail" placeholder="Project Details"
                                                      required="required"></textarea>
                                            @error('project_detail')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="footer-form-submit">
                                            <input type="submit" value="Submit Now">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-logos text-center wow bounceIn"> <img class="lazy" src="{{asset('web/testimonials/images/images-footer-logos.webp')}}" alt> </div>
    </div>
</section>
@include('web.includes.footer')
<script src="{{asset('web/testimonials/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-slick-slick.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-slick-slick.min.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-fancybox.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-font-awesome.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-font.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/testimonials/js/js-customs.js')}}"></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64f65109a91e863a5c11a0e3/1h9h2p3hn';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
</body>
</html>
