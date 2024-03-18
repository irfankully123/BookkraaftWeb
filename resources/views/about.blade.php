<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <link rel="canonical" href="about.blade.php">
    <link rel="alternate" href="about.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/about/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/about/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/about/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/about/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/about/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/about/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/about/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/about/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/about/css/css-style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>About</title>
    <style>
        .slick-active {
            opacity: 1 !important;
        }
    </style>
</head>
<body>
<script>
    @if(session('message'))
    Swal.fire({
        icon: 'success',
        title: 'Form Submitted',
        text: '{{ session('message') }}',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000 // Adjust this value to control how long the toast message is displayed (in milliseconds)
    });
    @endif
</script>

@include('web.includes.header')
<section class="inner-banner-sec themes-padd" style="background: url({{asset('web/about/images/bg.jpeg')}});">
    <div class="container">

        <div class="banner-txt">
            <div class="row">
                <div class="col-lg-6">
                    <p class="para_p_top">Know What Makes Us Different? Our Origin Story.</p>
                    <h1>The Pursuit of <span>Perfection</span></h1>
                    <p>The path to being a best seller is long and arduous; however, when you have guides like us,
                        it feels like a walk in the park.</p>

                    <ul class="contact-lst">
                        <li class="first"><a onclick="setButtonURL();" href="javascript:void(0)"><span><img class="lazy" src="{{asset('web/about/images/images-images-chat-icon.webp')}}"></span>Live Chat Now</a>
                        </li>
                        <li class="last">
                            <a href="tel:(917) 203-8420">
                               <span>
                                   <img class="lazy" src="{{asset('web/publishing/images/images-tele-icon.webp')}}">
                               </span>(917) 203-8420

                           </a>
                      </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about-banner">
                        <img src="{{asset('web/about/images/main.png')}}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="client-strip">
    <div class="container wow slideInRight">

        <ul class="client_strip_slider">



            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-02.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-03.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-04.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-05.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-06.webp')}}"></a>
            </li>
            <li class="last">
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/about/images/images-images-p-07.webp')}}"></a>
            </li>
        </ul>
    </div>
</section>


<section class="makes-sec birth_of py_8">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="themes-h4">The Birth of</h4>
                <h2 class="themes-h2 head-bg">Bookkraaft</h2>
                <p class="themes-p">Book enthusiasts and authors James Finney and Mila Schneider were like two peas
                    in an odd pod. They connected online with a single common thread; their shared love for
                    literature. After investing hundreds of hours on literary debates,
                    they finally tied the knot in 2014. <br> With their desire to take their love for literature to
                    the next level, the Finneys set up a home office where they would ghostwrite projects for
                    clients. As this micro-venture gained traction
                    among the literary community, the Finneys decided to go full-throttle and involve more people,
                    thus marking the birth of what would later be known as Bookkraaft.
                </p>
                <ul class="contact-lst">
                    <li class="first"><a onclick="setButtonURL();" href="javascript:void(0)"><span><img class="lazy" src="{{asset('web/about/images/images-images-chat-icon.webp')}}" data-src="../images/chat-icon.webp"></span>Live
                            Chat Now</a></li>
                            <li class="last">
                                <a href="tel:(917) 203-8420">
                                   <span>
                                       <img class="lazy" src="{{asset('web/publishing/images/images-tele-icon.webp')}}">
                                   </span>(917) 203-8420

                               </a>
                          </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('web/about/images/images-images-avalon-sec-img.webp')}}" alt="book">
            </div>
        </div>
    </div>
</section>

<div class="section-category">
    <div class="category-m"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="themes-h2">Our Areas <br> <span class="head-bg">of Expertise</span></h2>
                <div class="col-lg-8 offset-lg-2">
                    <p class="themes-p">In our 7+ years of service, we&rsquo;ve dealt with projects from all known
                        genres. From noir-esque tales from the eighties to romance dramas, we&rsquo;ve dabbled in
                        all sorts of literary shenanigans.</p>
                </div>
            </div>
        </div>
        <ul class="category-list editing_new_list">
            <li> <img src="{{asset('web/about/images/images-images-Mystery.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Mystery</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Horror.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Horror</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Romance.webp')}}" alt="feat-icon" width="96" height="103">
                <h6>Romance</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-children-books.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Children&rsquo;s books</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Fantasy.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Fantasy</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-How-To-Guides.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>How-To Guides</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Drama.webp')}}" alt="feat-icon" width="88" height="103">
                <h6>Drama</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Crime.web')}}p" alt="feat-icon" width="97" height="103">
                <h6>Crime</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Biography.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Biography</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Health.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>Health</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Travel.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Travel</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Philosophy.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Philosophy</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Science-Fiction.webp')}}" alt="feat-icon" width="86" height="103">
                <h6>Science Fiction</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Trilogy.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Trilogy</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Adventure.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Adventure</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Art.webp')}}" alt="feat-icon" width="97" height="103">
                <h6>Art</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-Business.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Business</h6>
            </li>
            <li> <img src="{{asset('web/about/images/images-images-And-More.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>And More...</h6>
            </li>
        </ul>
        <div class="clear_fix"></div>
        <div class="txt-contact-bx">
            <p>And More...</p>

            <ul class="contact-lst">
                <li class="first"><a onclick="setButtonURL();" href="javascript:void(0)"><span><img class="lazy" src="{{asset('web/about/images/images-images-chat-icon.webp')}}" data-src="../images/chat-icon.webp"></span>Live
                        Chat Now</a></li>
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
</div>

<section class="services_sec img-style py_8">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="themes-h2 head-bg"> Our Mission</h2>
                <p class="themes-p">&ldquo;We believe that books act as the sources of preservation in many
                    cultures. Whether fact or fiction, books grant us a glimpse into another reality, and at Bookraaft
                    , we want to preserve this ideology. We want to ensure that
                    no trashy book ever hits the shelves, that no reader thinks of putting down a book because
                    it&rsquo;s not good enough.&rdquo;</p>

                <p class="themes-p"><i>Mila Finney</i></p>
                <ul class="contact-lst no-end">
                    <li class="first"><a onclick="setButtonURL();" href="javascript:void(0)"><span><img class="lazy" src="{{asset('web/about/images/images-images-chat-icon.webp')}}" data-src="../images/chat-icon.webp"></span>Live
                            Chat Now</a></li>
                            <li class="last">
                                <a href="tel:(917) 203-8420">
                                   <span>
                                       <img class="lazy" src="{{asset('web/publishing/images/images-tele-icon.webp')}}">
                                   </span>(917) 203-8420

                               </a>
                          </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="mission-img">
                    <img src="{{asset('web/about/images/images-images-mission-img.webp')}}" alt>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="battel-sec bg-change themes-padd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="themes-h2">Our Achievements</h2>
                <div class="col-lg-8 offset-lg-2">
                    <p class="themes-p">Bookkraaft enjoys its current reputation in the literary world
                        because of our caffeinated team of creative ghostwriters, who work dedicatedly to ensure our
                        clients only receive the best. With an expansive network of satisfied
                        clients and a will to do more, we&rsquo;ve outwitted, outplayed, and outlasted our
                        competition into becoming the best this industry has to offer.</p>
                </div>
            </div>
        </div>
        <div class="row mg-50 box-size" id="counter">
            <div class="col-lg-3 col-md-6">
                <div class="battel-box">
                    <img src="{{asset('web/about/images/images-images-achievement-icon-1.webp')}}" alt="icon">
                    <h4 class="counter">268</h4>
                    <h5>Writers</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="battel-box">
                    <img src="{{asset('web/about/images/images-images-achievement-icon-2.webp')}}" alt="icon">
                    <h4><span class="counter">1500</span>+</h4>
                    <h5>Projects Completed</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="battel-box">
                    <img src="{{asset('web/about/images/images-images-achievement-icon-3.webp')}}" alt="icon">
                    <h4><span class="counter">500</span>+</h4>
                    <h5>Active Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="battel-box">
                    <img src="{{asset('web/about/images/images-images-achievement-icon-4.webp')}}" alt="icon">
                    <h4><span class="counter">280</span>+</h4>
                    <h5>Best Sellers</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow bounceInRight">
                <div><img class="lazy" src="{{asset('web/home/images/client-reviews.png')}}"></div>
            </div>
            <div class="col-md-7 wow slideInRight">
                <div class="testimonials-text">
                    <h5>What Our Clients Say About Us</h5>
                    <h3>Here&rsquo;s how our ever expanding web of global clients views us.</h3>
                    <div class="reviw-testi testi-sldier">
                        <div>
                            <p>&ldquo;I am glad that I trusted Bookkraaft for their ghostwriting
                                services!
                                The team that I worked with managed to maintain a high level of professionalism
                                throughout the timeline of the project and they submitted exactly
                                what I was looking for. Good job guys!&rdquo;</p>
                            <div class="star-name">
                                <h6>Anne Gardner</h6> <img class="lazy"
                                                           src="{{asset('web/home/images/images-images-stars-review.jpg')}}">
                            </div>
                        </div>
                        <div>
                            <p>&ldquo;Working with Bookkraaft was a pleasure and I can&rsquo;t imagine
                                receiving better content from any other agency. They managed to deliver exactly what
                                we discussed in the initial brief and kept me in the loop throughout
                                the timeline of the project&ndash; perhaps because I was a little reluctant on
                                trusting their writers at first. I take my words back and appreciate the additional
                                effort!&rdquo;</p>
                            <div class="star-name">
                                <h6>Emilie Robertson</h6> <img class="lazy"
                                                               src="{{asset('web/home/images/images-images-stars-review.jpg')}}">
                            </div>
                        </div>
                        <div>
                            <p>&ldquo;I needed some help in writing a book for my students. Even though I had a lot
                                of material and resources for inspiration, my schedule didn&rsquo;t allow me to
                                actually sit down, and fan the flames of a long-lost hobby. Long story
                                short, I stumbled upon this brilliant agency and my students absolutely love my
                                lectures! Naturally, I plan on hiring them again very soon!&rdquo;</p>
                            <div class="star-name">
                                <h6>Bruce Owens</h6> <img class="lazy"
                                                          src="{{asset('web/home/images/images-images-stars-review.jpg')}}">
                            </div>
                        </div>
                        <div>
                            <p>&ldquo;Bookkraaft is the best! I am an accomplished writer myself and I
                                was
                                pretty excited to get my work done from these guys. Perhaps the biggest compliment I
                                can give these guys is that I learned a thing or two about
                                writing compelling content throughout the timeline of my project. Of course, this
                                only happened because they kept me in the loop from start to finish. Keep up the
                                good work guys!&rdquo;</p>
                            <div class="star-name">
                                <h6>Portia Fey</h6> <img class="lazy"
                                                         src="{{asset('web/home/images/images-images-stars-review.jpg')}}">
                            </div>
                        </div>
                        <div>
                            <p>&ldquo;This is a special shoutout to George and his team in Bookkraaft
                                because they managed to conjure up a well-thought-out memoir for me so I could gift
                                it to my wife on our wedding. To read your own biography as if
                                it was a fairytale is probably the best wedding gift and I know now that the
                                ghostwriters at Bookkraaft are up to the challenge. P.S. my wife loves
                                it!&rdquo;</p>
                            <div class="star-name">
                                <h6>John Sumner</h6> <img class="lazy"
                                                          src="{{asset('web/home/images/images-images-stars-review.jpg')}}">
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
                                            <input type="submit" value="Submit Now"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-logos text-center wow bounceIn"> <img class="lazy" src="{{asset('web/about/images/images-footer-logos.webp')}}" alt> </div>
    </div>
</section>
@include('web.includes.footer')


<script src="{{asset('web/about/js/jquery-3.6.1.min.js')}}" ></script>
<script src="{{asset('web/about/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/about/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/about/js/js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/about/js/js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/about/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/about/js/js-js-fancybox.js')}}"></script>
<script src="{{asset('web/about/js/js-js-font-awesome.js')}}"></script>
<script src="{{asset('web/about/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/about/js/js-js-font.js')}}"></script>
<script src="{{asset('web/about/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/about/js/js-customs.js')}}"></script>
</body>
</html>
