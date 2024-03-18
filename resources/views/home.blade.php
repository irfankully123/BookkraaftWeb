<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Bookkraft">
    <link rel="canonical" href="home.blade.php">
    <link rel="alternate" href="home.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('web/home/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/home/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/home/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/home/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/home/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/home/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/home/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/home/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/home/css/css-style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Bookkraaft</title>
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
<section class="main_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <div class="banner_text">
                    <h1>Your Tale, Woven in Our Verbal Tapestry</h1>
                    <p>Having a history of consistently delivering outstanding results, Bookkraaft is the ideal collaborator for
                       budding authors looking to embark on their literary voyage.</p>
                    <ul class="contact-lst">
                        <li class="first">
                            <a onclick="setButtonURL();" href="javacript:void(0)">
                                <span>
                                    <img class="lazy" src="{{asset('web/home/images/images-chat-icon.webp')}}">
                                </span>Contact Us Now
                            </a>
                        </li>
                        <li class="last">
                            <a href="tel:(917) 203-8420">
                                <span><img class="lazy" src="{{asset('web/home/images/images-tele-icon.webp')}}">
                                </span>(917) 203-8420
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 wow bounceInLeft">
                <div class="banner_image">
                    <img class="lazy" src="{{asset('web/home/images/main.png')}}" alt>
                    <img class="lazy" src="{{asset('web/home/images/images-banner_ele1.webp')}}" alt>
                    <img class="lazy" src="{{asset('web/home/images/images-banner_ele2.webp')}}" alt>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="client-strip">
    <div class="container wow slideInRight">
        <ul class="client_strip_slider">
            <li>
                <a href="javacript:void(0)">
                    <img class="lazy" src="{{asset('web/home/images/images-images-p-02.webp')}}">
                </a>
            </li>
            <li>
                <a href="javacript:void(0)">
                    <img class="lazy" src="{{asset('web/home/images/images-images-p-03.webp')}}">
                </a>
            </li>
            <li>
                <a href="javacript:void(0)">
                    <img class="lazy" src="{{asset('web/home/images/images-images-p-04.webp')}}">
                </a>
            </li>
            <li>
                <a href="javacript:void(0)"><img class="lazy"
                                                 src="{{asset('web/home/images/images-images-p-05.webp')}}"></a>
            </li>
            <li>
                <a href="javacript:void(0)"><img class="lazy"
                                                 src="{{asset('web/home/images/images-images-p-06.webp')}}"></a>
            </li>
            <li class="last">
                <a href="javacript:void(0)"><img class="lazy"
                                                 src="{{asset('web/home/images/images-images-p-07.webp')}}"></a>
            </li>
        </ul>
    </div>
</section>
<section class="makes-sec py_8">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow slideInLeft">
                <h2 class="themes-h2 head-bg">A House of Words</h2>
                <p class="themes-p">
                   Operated by two individuals who have a deep appreciation for metaphors, a strong penchant for
                   similes, and a strong aversion to typos, Bookkraaft serves as the destination where authors transform
                   their ideas into vibrant, living pieces of literature. Our team comprises over 260 seasoned writers,
                   collectively producing over 500,000 words, and successfully completing more than 1,500 projects. We
                   take pride in asserting that we excel in our craf</p>
                <ul class="contact-lst">
                    <li class="first"><a onclick="setButtonURL();" href="javacript:void(0)"><span><img class="lazy"
                                                                                                       src="{{asset('web/home/images/images-chat-icon.webp')}}"></span>Contact
                            Us Now</a></li>
                    <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy"
                                                                                src="{{asset('web/home/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
                </ul>
            </div>
            <div class="col-lg-6 wow bounceInLeft">
                <img class="lazy" src="{{asset('web/home/images/home-cover.png')}}" alt="images">
                {{-- <div class="video-container">
                  <video autoplay loop muted playsinline>
                      <source src="{{ asset('assets/video/SVoNkW.mp4') }}" type="video/mp4">
                  </video>
                </div>
              </div> --}}
            </div>
        </div>
    </div>
</section>
<section class="what_we_bring pt_8">
    <div class="container">
        <div class="theme_heading text-center wow fadeInUp">
            <h2>What We Bring to the Table</h2>
            <p>Our ascent to the top spot among book writers in the United States wasn't achieved through random
              actions; rather, it was the result of meticulous strategic planning and providing clients with something
              unique that no one else could offer.</p>
        </div>
        <div class="row mb_slider">
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring1.webp')}}" alt>
                    <h2>Transparency</h2>
                    <p>Insufficient transparency is the root of all problems, so we keep our distance from it.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring2.webp')}}" alt>
                    <h2>24/7 Support</h2>
                    <p>Our account managers help streamline the process, keeping you updated every step of the way.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring3.webp')}}" alt>
                    <h2>Quick Turnarounds</h2>
                    <p>With lightning-fast turnaround times, we stay two steps ahead of our competition.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring4.webp')}}" alt>
                    <h2>Guaranteed Privacy</h2>
                    <p>We treasure the trust our clients place in us, and we would never dream of hurting it.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring5.webp')}}" alt>
                    <h2>Army of Ghostwriters</h2>
                    <p>As per your book&rsquo;s requirements, a ghostwriter is allotted to you from the get-go.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow bounceInUp">
                <div class="bring_bx">
                    <img class="lazy" src="{{asset('web/home/images/images-bring6.webp')}}" alt>
                    <h2>0% Plagiarism Policy</h2>
                    <p>Our 0% plagiarism policy ensures all clients get authentic, custom, and unique content.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services_sec py_8">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <h4>Our Services</h4>
                <h2 class="themes-h2 head-bg"> What We Can Do for You</h2>
                <p>Driven by a commitment to unwavering excellence and absolute customer contentment, we infuse
your narrative essence into our prose, molding the final creation into an authentic and one-of-a-kind
literary masterpiece. Leveraging our expertise and insights as guiding instruments, we formulate
tailored strategies that align perfectly with our clients' objectives.</p>
                <h4>Ghostwriting</h4>
                <p>We provide white-label services to clients seeking to borrow our eloquent words to vividly convey
their ideas. Rest assured, our ghostwriters are unparalleled in their skill and expertise.</p>
                <h4>Editing &amp; Formatting</h4>
                <p>When it comes to polishing your manuscript, the importance lies in the finer points. Yet, with our
sharp-eyed editors and vigilant formatting professionals at work, you can feel assured and at ease.
                </p>
                <h4>Publishing</h4>
                <p>Looking to capture the interest of publishing agents and houses? Look no further! With our extensive resources and expertise, we can swiftly identify the perfect publishing match for your book.</p>
            </div>
            <div class="col-md-6 wow bounceInLeft">
                <div class="services_image">
                    <img class="lazy" src="{{asset('web/home/images/service-img.png')}}" alt>
                </div>
                <ul class="contact-lst">
                    <li class="first"><a onclick="setButtonURL();" href="javacript:void(0)">
                            <span>
                                <img class="lazy" src="{{asset('web/home/images/images-chat-icon.webp')}}">
                            </span>Contact Us Now</a>
                    </li>
                    <li class="last">
                        <a href="tel:(917) 203-8420">
                            <span><img class="lazy" src="{{asset('web/home/images/images-tele-icon.webp')}}"></span>
                            (917) 203-8420
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="battel-sec themes-padd">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-lg-12 text-center">
                <h2 class="themes-h2">Our Battle-Tested Process</h2>
                <p>Creative junkies like us are always a mess, so we developed a foolproof plan to eliminate all
                    potential errors.</p>
            </div>
        </div>
        <div class="row mg-50">
            <div class="col-lg wow fadeInUpBig">
                <div class="battel-box">
                    <h6>1</h6>
                    <img class="lazy" src="{{asset('web/home/images/images-labvel-icon-1.webp')}}" alt="icon">
                    <h4>Draft Submission</h4>
                </div>
            </div>
            <div class="col-lg wow fadeInUpBig" data-wow-delay="0.2s">
                <div class="battel-box">
                    <h6>2</h6>
                    <img class="lazy" src="{{asset('web/home/images/images-labvel-icon-2.webp')}}" alt="icon">
                    <h4>Primary Editing</h4>
                </div>
            </div>
            <div class="col-lg wow fadeInUpBig" data-wow-delay="0.4s">
                <div class="battel-box">
                    <h6>3</h6>
                    <img class="lazy" src="{{asset('web/home/images/images-labvel-icon-3.webp')}}" alt="icon">
                    <h4>Formatting</h4>
                </div>
            </div>
            <div class="col-lg wow fadeInUpBig" data-wow-delay="0.6s">
                <div class="battel-box">
                    <h6>4</h6>
                    <img class="lazy" src="{{asset('web/home/images/images-labvel-icon-4.webp')}}" alt="icon">
                    <h4>Final Editing</h4>
                </div>
            </div>
            <div class="col-lg wow fadeInUpBig" data-wow-delay="0.8s">
                <div class="battel-box">
                    <h6>5</h6>
                    <img class="lazy" src="{{asset('web/home/images/images-labvel-icon-5.webp')}}" alt="icon">
                    <h4>Finalization</h4>
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
        <div class="footer-logos text-center wow bounceIn">
            <img class="lazy"
                 src="{{asset('web/home/images/images-footer-logos.webp')}}"
                 alt>
        </div>
    </div>
</section>
@include('web.includes.footer')
<script src="{{asset('web/home/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('web/home/js/5394-js-js-owl.js')}}"></script>
<script src="{{asset('web/home/js/8361-js-js-wow.js')}}"></script>
<script src="{{asset('web/home/js/6828-js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/home/js/552-js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/home/js/5787-js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/home/js/4967-js-js-fancybox.js')}}"></script>
{{--<script src="{{asset('web/home/js/2701-js-js-font-awesome.js')}}"></script>--}}
<script src="{{asset('web/home/js/9553-js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/home/js/7224-js-js-font.js')}}"></script>
<script src="{{asset('web/home/js/7229-js-js-custom.js')}}"></script>
<script src="{{asset('web/home/js/1973-js-customs.js')}}"></script>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/64f65109a91e863a5c11a0e3/1h9h2p3hn';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
</body>
</html>
