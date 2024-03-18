<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <link rel="canonical" href="contact.blade.php">
    <link rel="alternate" href="contact.blade.php" hreflang="en-US">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link href="{{asset('web/contact/css/css-css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/contact/css/css-slick-slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/contact/css/css-slick-slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/contact/css/css-css-all-main.css')}}" rel="stylesheet">
    <link href="{{asset('web/contact/css/css-css-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/contact/css/css-css-wp-custom.css')}}" rel="stylesheet">
    <link href="{{asset('web/contact/css/css-css-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/contact/css/css-style1.css')}}">
    <link rel="stylesheet" href="{{asset('web/contact/css/css-style2.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contact</title>

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
<div class="contact-detail-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contat-box">
                    <i class="fa-solid fa-phone"></i>
                    <h6>Phone</h6>
                    <p><a href="tel: (917) 203-8420"> (917) 203-8420</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contat-box borders">
                    <i class="fa-solid fa-location-dot"></i>
                    <h6>Location</h6>
                    <p>Site Office: 1019 Theodora St. Franklin Sq. NY, 11010.1</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contat-box">
                    <i class="fa-solid fa-envelope"></i>
                    <h6>Email</h6>
                    <p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=info@xyberixsolutions.com"><span class="__cf_email__" >info@xyberixsolutions.com</span></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="{{asset('web/contact/js/jquery-3.6.1.min.js')}}" ></script>
<script src="{{asset('web/contact/js/js-js-owl.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-wow.js')}}"></script>
<script src="{{asset('web/contact/js/js-slick-slick.js')}}"></script>
{{--<script src="{{asset('web/contact/js/js-slick-slick.min.js')}}"></script>--}}
<script src="{{asset('web/contact/js/js-js-jquery.slicknav.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-fancybox.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-font-awesome.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-bootstrap.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-font.js')}}"></script>
<script src="{{asset('web/contact/js/js-js-custom.js')}}"></script>
<script src="{{asset('web/contact/js/js-customs.js')}}"></script>
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
