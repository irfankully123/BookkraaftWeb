<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <link rel="canonical" href="about.blade.php">
    <link rel="alternate" href="about.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/publishing/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/publishing/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/publishing/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/publishing/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/publishing/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/publishing/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/publishing/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/publishing/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/publishing/css/css-style2.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Publishing Service</title>

    <style>
        .slick-active {
            opacity: 1 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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


<div class="mainBanner" style="background-image:url({{asset('web/publishing/images/bg.jpeg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="banner-txt">
                    <h2>Present Your Masterwork to the World in the Perfect Manner</h2>
                    <p>Even a flawlessly crafted narrative and seamless coherence do not guarantee a book's publication.
This is where we step in to assist authors grappling with the challenges of getting their books
published.
                    </p>
                    <div class="price-bx">
                    </div>
                    <ul class="contact-lst banner-ctas">
                        <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy"
                                                                                                            src="{{asset('web/publishing/images/images-chat-icon.webp')}}"></span>Live
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
            <div class="col-md-5">
                <div class="bannerForm">
                    <img class="lazy" src="{{asset('web/publishing/images/images-Banner-Timer.webp')}}">
                    <div>
                        <h2>The <span>Best Book Publishing in Town</span></h2>
                        <h3>Within Easy Reach</h3>
                        <form class="form-get-quote">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="text" name="name" placeholder="Name" required="required"
                                               minlength="2">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="email" name="email" placeholder="Email" required="required"> <i
                                            class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fld-input">
                                        <input type="text" name="phone" placeholder="Phone" required="required"
                                               maxlength="12" minlength="12"> <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="fld-btn">
                                <button class="packageformsubmit1" type="submit">Get Started</button>
                                <input type="hidden" name="route" value="/book-publishing/">
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
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-02.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-03.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-04.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-05.webp')}}"></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-06.webp')}}"></a>
            </li>
            <li class="last">
                <a href="javascript:void(0)"><img class="lazy" src="{{asset('web/publishing/images/images-p-07.webp')}}"></a>
            </li>
        </ul>
    </div>
</section>
<section class="makes-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="themes-h4">What Makes Us</h4>
                <h2 class="themes-h2 head-bg">The Optimal Selection for You?</h2>
                <p class="themes-p">In a world with countless avenues for publishing your book, a new query emerges: Which one suits
you best? Our publishing and marketing experts are unparalleled in devising publication strategies
tailored to diverse client genres. From printing and distribution to comprehensive marketing, our
publishing experts manage every aspect on your behalf."
                </p>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy"
                                                                                                        src="{{asset('web/publishing/images/images-chat-icon.webp')}}"></span>Live
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
                <img class="lazy" src="{{asset('web/publishing/images/cover-designers.png')}}" alt="images">
            </div>
        </div>
    </div>
</section>
<div class="section-category">
    <div class="category-m"></div>
    <div class="container position-relative">
        <h2>Our Army of <br> <span>Clientele</span></h2>
        <p>Bookkraaft is supported by thousands of authors who were in the same spot as you. However,
            with
            clever marketing strategies and bespoke publication methods, we were able to help them effectively.
        </p>
        <ul class="category-list editing_new_list">
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Mystery.webp')}}" alt="feat-icon" width="99"
                     height="103">
                <h6>Mystery</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Horror.webp')}}" alt="feat-icon" width="90"
                     height="103">
                <h6>Horror</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Romance.webp')}}" alt="feat-icon" width="96"
                     height="103">
                <h6>Romance</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-children-books.webp')}}" alt="feat-icon"
                     width="95" height="103">
                <h6>Children&rsquo;s Books</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Fantasy.webp')}}" alt="feat-icon" width="98"
                     height="103">
                <h6>Fantasy</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-How-To-Guides.webp')}}" alt="feat-icon"
                     width="106" height="103">
                <h6>How-To Guides</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Drama.webp')}}" alt="feat-icon" width="88"
                     height="103">
                <h6>Drama</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Crime.webp')}}" alt="feat-icon" width="97"
                     height="103">
                <h6>Crime</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Biography.webp')}}" alt="feat-icon" width="98"
                     height="103">
                <h6>Biography</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Health.webp')}}" alt="feat-icon" width="106"
                     height="103">
                <h6>Health</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Travel.webp')}}" alt="feat-icon" width="99"
                     height="103">
                <h6>Travel</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Philosophy.webp')}}" alt="feat-icon" width="95"
                     height="103">
                <h6>Philosophy</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Science-Fiction.webp')}}" alt="feat-icon"
                     width="86" height="103">
                <h6>Science Fiction</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Adventure.webp')}}" alt="feat-icon" width="90"
                     height="103">
                <h6>Adventure</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Art.webp')}}" alt="feat-icon" width="97"
                     height="103">
                <h6>Art</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-Business.webp')}}" alt="feat-icon" width="99"
                     height="103">
                <h6>Business</h6>
            </li>
            <li>
                <img class="lazy" src="{{asset('web/publishing/images/images-And-More.webp')}}" alt="feat-icon" width="106"
                     height="103">
                <h6>And More...</h6>
            </li>
        </ul>
        <div class="clear_fix"></div>
        <div class="txt-contact-bx">
            <p><span>And this is </span> just the tip of the iceberg!</p>
            <ul class="contact-lst">
                <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy"
                                                                                                    src="{{asset('web/publishing/images/images-chat-icon.webp')}}"></span>Live
                        Chat Now</a></li>
                <li class="midd"><a href="javascript:void(0)" class="btn-popup">Contact an Expert</a></li>
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
<section class="we-get-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="themes-h2">Our Fields of Expertise</h2>
                <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                    <p class="themes-p">Bookkraaft was founded to help aspiring authors realize their
                        dreams in the most efficient and accessible method possible. Our publishing professionals
                        have transformed the careers of a thousand-too-many authors, and now we&rsquo;re looking to do
                        the
                        same for you!
                    </p>
                </div>
            </div>
        </div>
        <div class="row mg-30">
            <div class="col-lg-4 col-md-6">
                <div class="get-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-get-icon-1.webp')}}" alt="images">
                    <h5>Distribution &amp; Royalty Setup</h5>
                    <p class="themes-p">We use our connections with online retailers and distributors and come to an
                        arrangement that grants you royalty checks.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="get-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-get-icon-2.webp')}}" alt="images">
                    <h5>Finding a Literary Agent</h5>
                    <p class="themes-p">In a competitive industry, getting noticed by relevant publishing houses is
                        a bit tricky. So we introduce you to the right agent for your book.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="get-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-get-icon-3.webp')}}" alt="images">
                    <h5>Paperback Distribution</h5>
                    <p class="themes-p">Professional interior layouts are all the buzz in paperbacks, and we help
                        you with just that. You even get to keep all your rights and sales!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-2">
                <div class="get-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-get-icon-4.webp')}}" alt="images">
                    <h5>Self-Publishing Service</h5>
                    <p class="themes-p">Our self-publishing program allows you to roll out your book with
                        customizable packages tailored to your specific publishing requirements.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="get-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-get-icon-5.webp')}}" alt="images">
                    <h5>Kindle Book Publishing</h5>
                    <p class="themes-p">We can get you a business-class seat on Kindle&rsquo;s publishing train,
                        allowing
                        for a faster, more efficient, and accessible means of reaching your audience.
                    </p>
                </div>
            </div>
            <div class="col-md-12 txt-center">
                <ul class="contact-lst">
                    <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy"
                                                                                                        src="{{asset('web/publishing/images/images-chat-icon.webp')}}"></span>Live
                            Chat Now</a></li>
                    <li class="midd"><a href="javascript:void(0)" class="btn-popup">Contact an Expert</a></li>
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
</section>
<section class="expertise-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>How We Get You in the Limelight</h2>
                <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                    <p>We streamline our objectives with the help of our battle-tested process, never compromising
                        on quality.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="exper-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-exper-icon-1.webp')}}" alt="images">
                    <h3>Draft Submission</h3>
                    <p>We note down all the relevant details and brainstorm to find the perfect printing and
                        publishing strategy for you.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="exper-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-exper-icon-2.webp')}}" alt="images">
                    <h3>Proofreading &amp; Editing</h3>
                    <p>Quality assurance is essential in ensuring any book&rsquo;s success, so we dedicate our experts
                        to
                        conducting a thorough analysis of your book.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="exper-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-exper-icon-3.webp')}}" alt="images">
                    <h3>Book Design</h3>
                    <p>Once we&rsquo;re past the editing phase, we create a custom cover that is both unique and
                        relevant
                        to your genre and targeted audience.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="exper-box">
                    <img class="lazy" src="{{asset('web/publishing/images/images-exper-icon-4.webp')}}" alt="images">
                    <h3>Publishing and Distribution</h3>
                    <p>As soon as you finalize the design, we move onto the publication stage, publishing your book
                        as per your preferred format.
                    </p>
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
                <p>Got any questions? We&rsquo;re here to answer them! We&rsquo;ve collected a few of the questions our
                    clients
                    frequently ask us, and if you have more, feel free to give us a <b>Call Now</b> or set up a
                    <b>Live Chat</b>.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-sec">
                    <ul class="accordian">
                        <li class="first active">
                            <h4>What is book publishing ?</h4>
                            <div style="display: block;">
                                <p>Book publishing refers to making your written work recognized by making it
                                    accessible in stores and online for sale or reading. However, self-publishing a
                                    book gives you a chance to earn a reputable position as an author.
                                </p>
                            </div>
                        </li>
                        <li class>
                            <h4>How Much does publishing a book cost?</h4>
                            <div style="display: none;">
                                <p>The book publishing cost depends on your project nature and requirements. Online
                                    Writing Avalon provides reliable and affordable book publishing services in all
                                    genres.
                                </p>
                            </div>
                        </li>
                        <li class>
                            <h4>What are the steps to publishing a book ?</h4>
                            <div style="display: none;">
                                <p>The book publishing process includes numerous steps such as review, proofreading,
                                    editing, formatting, book cover design, and then publishing.
                                </p>
                            </div>
                        </li>
                        <li class>
                            <h4>How to publish a book?</h4>
                            <div style="display: none;">
                                <p>Contact the team of Bookkraaft to get your book published on
                                    multiple
                                    platforms at ease. We make book publishing fast and hassle-free.
                                </p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>What is Bookkraaft?</h4>
                            <div style="display: none;">
                                <p>Bookkraaft refers to the publishing house of books that allows you to
                                    book publishing on bookkraaft and interact with more readers.
                                </p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to get a book published on Bookkraaft?</h4>
                            <div style="display: none;">
                                <p>Contact our expert team to get reliable Bookkraaft services for all sorts
                                    of books.
                                </p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How to sell your book on Bookkraaft?</h4>
                            <div style="display: none;">
                                <p>Understand the reader market and Bookkraaft search engine functionality and rules
                                    well to target the right audience. This allows you to sell your book on Bookkraaft
                                    excellently.
                                </p>
                            </div>
                        </li>
                        <li class="last">
                            <h4>How much does it cost to self-publish a book on Bookkraaft?</h4>
                            <div style="display: none;">
                                <p>Bookkraaft is free of cost. However, the Bookkraaft will charge a
                                    specific amount from each amount you get when you sell book through Bookkraaft.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 txt-center">
                <ul class="contact-lst">
                    <li class="first"><a href="javascript:void(0)" onclick="setButtonURL();"><span><img class="lazy"
                                                                                                        src="{{asset('web/publishing/images/images-chat-icon.webp')}}"></span>Live
                            Chat Now</a></li>
                    <li class="midd"><a href="javascript:void(0)" class="btn-popup">Contact an Expert</a></li>
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
        <div class="footer-logos text-center"><img class="lazy"
                                                   src="{{asset('web/publishing/images/images-footer-logos.webp')}}" alt>
        </div>
    </div>
</section>
@include('web.includes.footer')

<script src="{{asset('web/publishing/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/publishing/js/js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/publishing/js/js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/publishing/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-fancybox.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-font-awesome.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-font.js')}}"></script>
<script src="{{asset('web/publishing/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/publishing/js/js-customs.js')}}"></script>
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
