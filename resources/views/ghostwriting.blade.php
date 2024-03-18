<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <link rel="canonical" href="ghostwriting.blade.php">
    <link rel="alternate" href="ghostwriting.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/ghostwriting/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/ghostwriting/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/ghostwriting/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/ghostwriting/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/ghostwriting/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/ghostwriting/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/ghostwriting/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/ghostwriting/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/ghostwriting/css/css-style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>GhostWriting</title>
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

<div class="mainBanner" style="background-image:url({{asset('web/ghostwriting/images/bg.jpeg')}}); ">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="banner-txt">
                    <h4>Are You Ready to Unveil Your Story to the World?</h4>
                    <h2>Exceptional Ghostwriters Await Your Click</h2>
                    <p>To us, writing holds no significance unless it breathes with the author's emotions and essence. We are
dedicated to crafting captivating narratives that fuse your concepts with our boundless creativity.
                    </p>
                    <ul class="contact-lst banner-ctas">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-chat-icon.webp')}}"></span>Your Line To The Other
                                Side</a>
                        </li>
                        <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="bannerForm">
                    <img class="lazy" src="{{asset('web/ghostwriting/images/images-Banner-Timer.webp')}}">
                    <div>
                        <h2>The <span>Best Ghostwriters in Town</span></h2>
                        <h3>Within Easy Reach</h3>
                        <form class="form-get-quote" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="text" name="name" placeholder="Name" required="required" minlength="2"> <i class="fas fa-user"></i>
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
                                <input type="hidden" name="route" value="/ghost-writing-services/">
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

<section class="client-strip">
    <div class="container wow slideInRight">
        <ul class="client_strip_slider">
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-02.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-03.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-04.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-05.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-06.webp')}}"></a>
            </li>
            <li class="last">
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/ghostwriting/images/images-images-p-07.webp')}}"></a>
            </li>
        </ul>
    </div>
</section>
<div class="section-category">
    <div class="category-m"></div>
    <div class="container">
        <h2>What Makes Us the <br> <span>Literature Wizards</span></h2>
        <p>Whether your story is about a lifetime of struggles, an old flame that ignites hell, a far-flung galaxy,
            or a noirish trail of red, our most gifted writers will work their magic to transform your ideas into
            what your audiences want.</p>
        <ul class="category-list">
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Mystery.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Mystery</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Horror.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Horror</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Romance.webp')}}" alt="feat-icon" width="96" height="103">
                <h6>Romance</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-children-books.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Children&rsquo;s books</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Fantasy.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Fantasy</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-How-To-Guides.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>How-To Guides</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Drama.webp')}}" alt="feat-icon" width="88" height="103">
                <h6>Drama</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Crime.webp')}}" alt="feat-icon" width="97" height="103">
                <h6>Crime</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Biography.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Biography</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Health.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>Health</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Travel.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Travel</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Philosophy.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Philosophy</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Science-Fiction.webp')}}" alt="feat-icon" width="86" height="103">
                <h6>Science Fiction</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Trilogy.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Trilogy</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Adventure.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Adventure</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Art.webp')}}" alt="feat-icon" width="97" height="103">
                <h6>Art</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-Business.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Business</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/ghostwriting/images/images-And-More.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>And More...</h6>
            </li>
        </ul>
        <div class="clear_fix"></div>
        <div class="txt-contact-bx">
            <p><span>And this is </span> just the tip of the iceberg!</p>
            <ul class="contact-lst">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-chat-icon.webp')}}"></span>Your Line To The Other Side</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420
                </a></li>
            </ul>
        </div>
    </div>
</div>
<section class="cta-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cta-txt">
                    <h4>Need Help From the Literary Gurus?</h4>
                    <h2>Signup with $5 for <br>30 Minutes Consultation</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cta-txt-rit"> <img class="lazy" src="{{asset('web/ghostwriting/images/images-stars.webp')}}">
                    <p>Our in-house ghostwriters are always in for a new challenge.</p>
                    <div class="ct-button">
                        <form  method="post" data-hs-cf-bound="true">
                            <input type="hidden" name="route" value="/ghost-writing-services/">
                            <input type="hidden" name="form_type" value="midForm">
                            <input type="hidden" name="visitor_country" value>
                            <input type="hidden" name="visitor_ip" value>
                            <input type="hidden" name="visitor_city" value>
                            <input type="hidden" name="visitor_state" value>
                            <input type="hidden" name="visitor_isp" value>
                            <input type="hidden" name="visitor_timezone" value>
                            <button type="submit" class="montfont btn-orders btn seo-cutm-btn" tabindex="0">Book
                                Now</button>
                        </form>
                    </div>
                    <ul class="contact-lst">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-chat-icon.webp')}}"></span>Your Line To The Other
                                Side</a>
                        </li>
                        <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-6 full-section">
    <div class="container">
        <div class="inner-container align-center">
            <h2 class="title_block center">Can't Find the <span>Right Words?</span></h2>
            <p>Seeking a literary expert to breathe life into your vision? Look no further! Our content writers boast
rapid turnaround times and a talent for crafting compelling and mesmerizing language, ensuring that
you receive nothing but the finest quality.</p>
        </div>
        <div id="hit-slidenav">
            <ul>
                <li><a href="javascript:void(0)" id="step1"><span>1</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-01.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step2"><span>2</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-02.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step3"><span>3</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-03.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step4"><span>4</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-04.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step5"><span>5</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-05.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step6"><span>6</span><img class="lazy" src="{{asset('web/ghostwriting/images/images-hw-step-06.webp')}}" width="50" height="47"></a></li>
            </ul>
        </div>
        <div id="hiw-sliderblock">
            <div id="owl-demo" class="owl-carousel howitwork-carousel">
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Initial <span>Debriefing</span></h4>
                        <p>As soon as you sign up with us, we send you a questionnaire to better gauge your vision
                            and align our approach accordingly. Don't worry, this is all just procedure to find you
                            the writer that's best suited to your genre and direction.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-1.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Chapter <span>One Approval</span></h4>
                        <p>Bookkraaft is nothing if not pitch perfect. We don't wait till the end of
                            the
                            book to get your feedback; as the first chapter wraps up, it's presented to you, and
                            your response is recorded. If you don't like the tone or even the use of a certain word,
                            we remove it.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-2.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">First Batch <span>of Revisions</span></h4>
                        <p>With client satisfaction acting as the driving force, we get to righting all the wrongs
                            as soon as you provide feedback. After all, it's your book, and we want it to be just as
                            you pictured it. We don't stop there; we send you the revised work as well for your
                            approval.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-3.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Editing and <span> Proofreading</span></h4>
                        <p>At Bookkraaft, we thrive by pursuing excellence in all our pieces.
                            Therefore,
                            to nullify all chances of errors, we assign your manuscript a dedicated editor that
                            conducts a thorough QA process so you receive the perfected version of the manuscript.
                        </p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-4.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Book <span>Cover Design</span></h4>
                        <p>Crafting a book cover that's relevant and on-point with your book's theme is one of the
                            most important marketing strategies, so we wrack our caffeinated brains and reach out to
                            you for advice on how to make an impression on potential buyers with your cover.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-5.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Final <span>Review and Delivery</span></h4>
                        <p>Once we're certain that we've left no stone unturned, we deliver the final manuscript to
                            you for your approval, and as soon as you greenlight it, it's delivered to you along
                            with the cover design. Thus, marking the end of our journey together. Or is it?</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/ghostwriting/images/images-how-work-im-6.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="ct-button"> <a href="javascript:void(0)" class="btn-popup">Let&rsquo;s Get Started</a>
            <ul class="contact-lst2">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420 </a></li>
            </ul>
        </div>
    </div>
</div>
<section class="best-value">
    <div class="container">
        <h2><span>Our Battle-Tested Process </span> Acts as a One-Way Ticket to Creating Best-Sellers</h2>
        <p>Our budget-friendly packages and end-to-end services make us the best partner any author could ask for!
        </p>
        <div class="row">
            <div class="col-md-6">
                <div class="value-bx">
                    <h3><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-value-1.jpg')}}"></span> Research</h3>
                    <p>As soon as you sign up with us, we research your genre through various e-learning sites to
                        deliver curated solutions.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-bx">
                    <h3><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-value-2.jpg')}}"></span> Editing and Proofreading</h3>
                    <p>We conduct rigorous fact-checking to ensure your final manuscript reaches the epitome of
                        perfection in minimum time. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-bx">
                    <h3><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-value-3.jpg')}}"></span> Designing, Typesetting, and
                        Publishing</h3>
                    <p>Getting your manuscript accepted by publishing agents and houses is our responsibility, and
                        we provide effective strategies to do so.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-bx">
                    <h3><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-value-4.jpg')}}"></span> Promotion</h3>
                    <p>As the book reaches the publication stage, the only thing left is marketing. Whether you need
                        book promotion, author publicity, or marketing, we can help!</p>
                </div>
            </div>
        </div>
        <div class="ct-button"> <a href="javascript:void(0)" class="btn-popup">Let&rsquo;s Get Started</a>
            <ul class="contact-lst2">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
            </ul>
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
<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Frequently <span>Asked Questions</span></h2>
                <p>Got any questions? We're here to answer them! We've collected a few of the questions our clients
                    frequently ask us, and if you have more, feel free to give us a Call Now or set up a Live Chat.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-sec">
                    <ul class="accordian">
                        <li class="first active">
                            <h4>What are ghostwriters?
                            </h4>
                            <div style="display: block;">
                                <p>Ghost writers are professional and qualified individuals who write books, novels,
                                    and other writing pieces for someone else without taking credits.</p>
                            </div>
                        </li>
                        <li class>
                            <h4>How to Hire a Ghostwriter?
                            </h4>
                            <div style="display: none;">
                                <p>Contact our team via call, email, or live chat to hire a ghostwriter for your
                                    project. </p>
                            </div>
                        </li>
                        <li class>
                            <h4>How much does it cost to hire a ghostwriter?
                            </h4>
                            <div style="display: none;">
                                <p>The cost to hire a ghostwriter depends on the word count, genre, page length, and
                                    other factors.</p>
                            </div>
                        </li>
                        <li class>
                            <h4>How long does it take to write a book?
                            </h4>
                            <div style="display: none;">
                                <p>Usually, it takes 5 to 6 months to write a book.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>Do ghostwriters get credit?</h4>
                            <div style="display: none;">
                                <p>No, all the rights and credits belong to the client.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>Do ghostwriters get royalties?
                            </h4>
                            <div style="display: none;">
                                <p>We provide reliable ghost book writing services. Our whole procedure is
                                    transparent. Thus, our writers do not demand or take royalties.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>Are your services 100% confidential?
                            </h4>
                            <div style="display: none;">
                                <p>Yes, we are the trustworthy ghostwriting service providers who work with full
                                    transparency and excellence.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to ghostwrite a book?
                            </h4>
                            <div style="display: none;">
                                <p>We write a book by making proper planning, research, and meetings. However, we
                                    offer unlimited revisions to attain full customer satisfaction.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to find a ghostwriter for a book?
                            </h4>
                            <div style="display: none;">
                                <p>You might find online ghostwriters for hire. You can consult the best writers
                                    from book writing Avalon to publish bestselling books. </p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to get a ghostwriter?
                            </h4>
                            <div style="display: none;">
                                <p>Contact our team to reach ghostwriters. Provide your project details and goals
                                    and get a ghostwriter according to your budget and needs. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-form-sec">
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
        <div class="footer-logos text-center"> <img class="lazy" src="{{asset('web/ghostwriting/images/images-footer-logos.webp')}}" alt> </div>
    </div>
</section>
<div class="overlay" style="display: none;"></div>
<div class="popupMain LoginPopup" style="display: none;">
    <div class="popup-inner">
        <a class="closePop" href="javascript:void(0)">X</a>
    </div>
    <div class="popup-img"> <img class="lazy" src="{{asset('web/ghostwriting/images/images-pop-img.jpg')}}" alt></div>
    <div class="popform-holder">
        <div class="popTxt">
            <h6>Ready to become a Bestseller</h6>
            <p>Schedule a call and talk to<br> our book writing experts</p>
        </div>
        <form method="POST" class="form-get-quote" >
            <div class="popup-header">
            </div>
            <div class="popup-bdy">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="footer-form-input">
                            <input type="text" name="name" placeholder="Full Name" required="required" minlength="2">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="footer-form-input">
                            <input type="number" name="phone" placeholder="Phone Number" required="required" maxlength="10" minlength="10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-form-input">
                            <input type="email" name="email" placeholder="Email" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-form-textarea">
                        <textarea name="brief" placeholder="Project Details" required="required"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" href="javascript:;" class="popup-btn" id>Get Started</button>
            <input type="hidden" name="route" value="/ghost-writing-services/">
            <input type="hidden" name="form_type" value="popUp">
            <input type="hidden" name="visitor_country" value>
            <input type="hidden" name="visitor_ip" value>
            <input type="hidden" name="visitor_city" value>
            <input type="hidden" name="visitor_state" value>
            <input type="hidden" name="visitor_isp" value>
            <input type="hidden" name="visitor_timezone" value>
        </form>
    </div>
</div>
@include('web.includes.footer')


<script src="{{asset('web/ghostwriting/js/jquery-3.6.1.min.js')}}" ></script>
<script src="{{asset('web/ghostwriting/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/ghostwriting/js/js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/ghostwriting/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-js-font-awesome.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/ghostwriting/js/js-customs.js')}}"></script>
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
