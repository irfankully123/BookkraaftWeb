<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <link rel="canonical" href="editing.blade.php">
    <link rel="alternate" href="editing.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/editing/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/editing/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/editing/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/editing/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/editing/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/editing/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/editing/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/editing/css/css-style1.css')}}">
    <link rel="stylesheet" href{{asset('web/editing/css/css-style2.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    <title>Editing Service</title>
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

<div class="mainBanner" style="background-image:url({{asset('web/editing/images/bg.jpeg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="banner-txt">

                    <h2>Shape the Future Bestseller with Our Editing and Formatting Maestros</h2>

                    <p>With us as your editors, rest assured that your manuscript will quickly capture the attention of
literary agents and publishing houses.</p>
                    <ul class="contact-lst banner-ctas">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/editing/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                        <li class="last"><a href="tel:(917) 203-84203"><span><img class="lazy" src="{{asset('web/editing/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="bannerForm">
                    <img class="lazy" src="{{asset('web/editing/images/images-Banner-Timer.webp')}}">
                    <div>
                        <h2>The <span>Best Book Editing in Town</span></h2>
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
                                <input type="hidden" name="route" value="/editing/">
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
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-02.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-03.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-04.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-05.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-06.webp')}}"></a>
            </li>
            <li class="last">
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/editing/images/images-p-07.webp')}}"></a>
            </li>
        </ul>
    </div>
</section>
<section class="book_needs_us_section">
    <div class="container">
        <div class="row flexRow">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="books_need_us_content">
                    <h4>Why Your</h4>
                    <h3>Book Need Us</h3>
                    <p>Authors around the globe aspire to leave an indelible mark on the world with their books, be it for
the better or otherwise. Our team of editing specialists is dedicated to magnifying that impact tenfold.
Over time, our editors and formatting experts have guided numerous like-minded individuals in
embarking on their path to becoming celebrated authors. Whether your manuscript requires editing,
rewriting, formatting, or simply a refined touch, consider us your exclusive gateway to crafting an
impeccable bestseller.</p>
                    <ul class="contact-lst">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/editing/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                        <li class="last"><a href="(917) 203-8420"><span><img class="lazy" src="{{asset('web/editing/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="book_need_us_image">
                    <img src="{{asset('web/editing/images/images-book-need.webp')}}" alt="Book Need Us">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-category">
    <div class="category-m"></div>
    <div class="container">
        <h2>What Makes Us the <br> <span>Unique</span></h2>
        <p>Our experience as editors and formatting experts stems from almost every known genre &ndash; from horror to
            drama and fiction, you know it, we&rsquo;ve done it &ndash; making us a jack of all trades.</p>
        <ul class="category-list editing_new_list">
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Mystery.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Mystery</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Horror.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Horror</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Romance.webp')}}" alt="feat-icon" width="96" height="103">
                <h6>Romance</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-children-books.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Children&rsquo;s books</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Fantasy.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Fantasy</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-How-To-Guides.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>How-To Guides</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Drama.webp')}}" alt="feat-icon" width="88" height="103">
                <h6>Drama</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Crime.webp')}}" alt="feat-icon" width="97" height="103">
                <h6>Crime</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Biography.webp')}}" alt="feat-icon" width="98" height="103">
                <h6>Biography</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Health.webp')}}" alt="feat-icon" width="106" height="103">
                <h6>Health</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Travel.webp')}}" alt="feat-icon" width="99" height="103">
                <h6>Travel</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Philosophy.webp')}}" alt="feat-icon" width="95" height="103">
                <h6>Philosophy</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Science-Fiction.webp')}}" alt="feat-icon" width="86" height="103">
                <h6>Science Fiction</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Adventure.webp')}}" alt="feat-icon" width="90" height="103">
                <h6>Adventure</h6>
            </li>
            <li> <img class="lazy" src="{{asset('web/editing/images/images-Art.webp')}}" alt="feat-icon" width="97" height="103">
                <h6>Art</h6>
            </li>
        </ul>
        <div class="clear_fix"></div>
        <div class="txt-contact-bx">
            <p>And More...</p>
            <ul class="contact-lst">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/editing/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/ghostwriting/images/images-tele-icon.webp')}}"></span>(917) 203-8420</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-6 full-section">
    <div class="container">
        <div class="inner-container align-center">
            <h2 class="title_block center">The Perks We <span>Bring to the Table</span></h2>
            <p>As a ghostwriting, editing, and publishing agency, Bookkraaft is dedicated to meeting clients's needs
through clear communication and unwavering security measures. We highly value the trust our clients
bestow upon us and are equally committed to assisting them in realizing their aspirations.</p>
        </div>
        <div id="hit-slidenav">
            <ul>
                <li><a href="javascript:void(0)" id="step1"><span>1</span><img src="{{asset('web/editing/images/images-Confidentiality.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step2"><span>2</span><img class="lazy" src="{{asset('web/editing/images/images-Time-Efficient.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step3"><span>3</span><img class="lazy" src="{{asset('web/editing/images/images-Expert-Guidance.webp')}}" width="50" height="47"></a></li>
                <li><a href="javascript:void(0)" id="step4"><span>4</span><img class="lazy" src="{{asset('web/editing/images/images-Plagiarism.webp')}}" width="50" height="47"></a></li>
            </ul>
        </div>
        <div id="hiw-sliderblock">
            <div id="owl-demo" class="owl-carousel howitwork-carousel">
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Confidentiality</h4>
                        <p>You signing up for our services acts as an NDA for us, and we safeguard everything, from
                            your identity to the content you provide.</p>
                    </div>
                    <div class="hiw-img"><img src="{{asset('web/editing/images/images-Confidentiality.jpg.web')}}p"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Time-Efficient </h4>
                        <p>Once you&rsquo;ve finished writing your book, editing can seem like a chore. So we sweep in to
                            do all the heavy lifting without taking any credit.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/editing/images/images-Time-Efficient1.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">Expert <span>Guidance</span></h4>
                        <p>This may be your first literary venture, but the pros at Bookkraaft have
                            been
                            at it for years. So you get to learn from the best!</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/editing/images/images-Expert-Guidance1.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
                <div class="item">
                    <div class="hiw-content">
                        <h4 class="title_block">0% <span> Plagiarism</span></h4>
                        <p>Dealing with plagiarism is a hassle, so we steer clear of it from the get-go, producing
                            unique, custom, and audience-specific content.</p>
                    </div>
                    <div class="hiw-img"><img class="lazy" src="{{asset('web/editing/images/images-Plagiarism1.webp')}}"></div>
                    <div class="clear_fix"></div>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="ct-button"> <a href="javascript:void(0)" class="btn-popup">Let&rsquo;s Get Started</a>
            <ul class="contact-lst2">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/editing/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/editing/images/images-tele-icon.webp')}}"></span>(917) 203-8420
                </a></li>
            </ul>
        </div>
    </div>
</div>
<section class="play_the_game_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 centerCol">
                <div class="play_the_game_content text-center">
                    <h2>How We Play the Game</h2>
                    <p>Our priorities lie with time management and customer satisfaction every time we deal with a
                        client. So we adopted a &lsquo;two birds, one stone&rsquo; strategy with our streamlined process.</p>
                </div>
            </div>
        </div>
        <div class="row card_row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="cardss">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>Draft Submission</h4>
                            </div>
                            <div class="flip-card-back">
                                <h4>Draft Submission</h4>
                                <p>As soon as you sign up with us, we start brainstorming on ways to approach your
                                    manuscript in the leanest, most efficient way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="cardss">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>Primary Editing</h4>
                            </div>
                            <div class="flip-card-back">
                                <h4>Primary Editing</h4>
                                <p>This phase deals with the nitty and gritty of editing, which includes editorial
                                    assessment, structural editing, and a lot more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="cardss">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>Formatting</h4>
                            </div>
                            <div class="flip-card-back">
                                <h4>Formatting</h4>
                                <p>An improper format can cause some big problems down the lane, so we ensure that
                                    your manuscript meets all global formatting standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="cardss">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>Secondary Editing</h4>
                            </div>
                            <div class="flip-card-back">
                                <h4>Secondary Editing</h4>
                                <p>We want to ensure that only the most refined and tuned iteration of your
                                    manuscript reaches you, as we take your opinions on the matter.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="cardss">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>Finalization</h4>
                            </div>
                            <div class="flip-card-back">
                                <h4>Finalization</h4>
                                <p>The finalized product is transferred to you for the final approval, after which
                                    your manuscript is publishing-ready.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-publication">
    <div class="container">
        <h2>Our <span>Insight and Experience </span> Render Us Agile, Adaptable, and a Pleasure to Collaborate With</h2>
        <p>Our experienced writers have given voices to biographies, assisted authors on their journey to greatness,
            and created characters out of thin air that feel as real as the sun, making us nimble and more adept at
            dealing with changes than most.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="poster-main perspectiv-carousel">
                    <div class="poster-btn poster-prev-btn"></div>
                    <ul class="poster-list">
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b1.webp')}}">
                            </a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b2.webp')}}"></a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b3.webp')}}">
                            </a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b4.webp')}}">
                            </a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b5.webp')}}">
                            </a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b6.webp')}}">
                            </a>
                        </li>
                        <li class="poster-item">
                            <a href="javascript:void(0)" target="_blank"><img class="lazy" src="{{asset('web/editing/images/images-b7.webp')}}">
                            </a>
                        </li>
                    </ul>
                    <div class="poster-btn poster-next-btn"></div>
                </div>
            </div>
        </div>

        <div class="ct-button"> <a href="javascript:void(0)" class="btn-popup">Let&rsquo;s Get Started</a>
            <ul class="contact-lst2">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy" src="{{asset('web/editing/images/images-chat-icon.webp')}}"></span>Live Chat Now</a></li>
                <li class="last"><a href="tel:(917) 203-8420"><span><img class="lazy" src="{{asset('web/editing/images/images-tele-icon.webp')}}"></span>(917) 203-8420
                </a></li>
            </ul>
        </div>
    </div>
</section>
<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Frequently <span>Asked Questions</span></h2>
                <p>Got any questions? We&rsquo;re here to answer them! We&rsquo;ve collected a few of the questions our clients
                    frequently ask us, and if you have more, feel free to give us a <a href="tel:(888)%20814-9188%20">Call
                        Now</a> or set up a <a href="javascript:void(0)" onclick="setButtonURL();">Live Chat</a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-sec">
                    <ul class="accordian">
                        <li class="first active">
                            <h4>What is book editing?
                            </h4>
                            <div style="display: block;">
                                <p>Book editing refers to keenly reading and reviewing the written content, detect
                                    the mistakes and then eliminating them to make it error-free.</p>
                            </div>
                        </li>
                        <li class>
                            <h4>Why does one need book editing services?
                            </h4>
                            <div style="display: none;">
                                <p>To make your book professional and free of mistakes, taking a professional
                                    editing service is essential.</p>
                            </div>
                        </li>
                        <li class>
                            <h4>Which book editing srvices should I employ?
                            </h4>
                            <div style="display: none;">
                                <p>Bookkraaft offers top-notch book editor services for all sorts of
                                    books at competitive rates.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>What is book formatting?</h4>
                            <div style="display: none;">
                                <p>Book formatting refers to the arranging and styling of the content by splitting
                                    it into the finest paragraphs, adding punctuations, symbols, interior layout,
                                    graphics, and other elements.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to format a book for publishing?
                            </h4>
                            <div style="display: none;">
                                <p>Formatting a book is essential however it takes a lot of time and professional
                                    expertise. To format a book, you can consult the expert team of Bookkraaft.</p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How much to charge for formatting a book?
                            </h4>
                            <div style="display: none;">
                                <p>The book formatting cost depends on your project nature, genre, and length.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow bounceInRight">
                <img class="lazy" src="{{asset('web/home/images/client-reviews.png')}}">
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
                                <h6>Anne Gardner</h6>
                                <img class="lazy"
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
<section class="footer-form-sec editing_new_footerform">
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
        <div class="footer-logos text-center"> <img class="lazy" src="{{asset('web/editing/images/images-footer-logos.webp')}}" alt> </div>
    </div>
</section>
@include('web.includes.footer')
<script src="{{asset('web/editing/js/jquery-3.6.1.min.js')}}" ></script>
<script src="{{asset('web/editing/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/editing/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/editing/js/js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/editing/js/js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/editing/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/editing/js/js-js-fancybox.js')}}"></script>
{{--<script src="{{asset('web/editing/js/js-js-font-awesome.js')}}"></script>--}}
<script src="{{asset('web/editing/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/editing/js/js-js-font.js')}}"></script>
<script src="{{asset('web/editing/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/editing/js/js-customs.js')}}"></script>
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
<div class="overlay" style="display: none;"></div>
<div class="popupMain LoginPopup" style="display: none;">
    <div class="popup-inner">
        <a class="closePop" href="javascript:void(0)">X</a>
    </div>
    <div class="popup-img"> <img class="lazy" src="{{asset('web/editing/images/images-pop-img.jpg')}}" alt></div>
    <div class="popform-holder">
        <div class="popTxt">
            <h6>Ready to become a Bestseller</h6>
            <p>Schedule a call and talk to<br> our book writing experts</p>
        </div>
        <form method="POST" class="form-get-quote">
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
            <input type="hidden" name="route" value="/editing/">
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
</body>
</html>
