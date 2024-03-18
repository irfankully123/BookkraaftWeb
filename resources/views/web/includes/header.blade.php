<header>
    <div class="main-header ">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center wow slideInDown">
                <div class="col-md-3 col-lg-2 text-left">
                    <a href="{{route('home')}}" class="logo">
                        <img class="lazy" src="{{asset('logo.svg')}}" alt>
                    </a>
                </div>
                <div class="col-xl-6 col-md-9  d-none d-md-block menuSec">
                    <ul id="menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Services</a>
                            <ul>
                                <li><a href="{{route('editing')}}">Editing</a></li>
                                <li><a href="{{route('ghostwriting')}}">Ghostwriting</a></li>
                                <li><a href="{{route('publishing')}}">Publishing</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 text-right">
                    <div class="contact">
                        <ul class="contact-lst">
                            <li class="first">
                                <a onclick="setButtonURL();" href="javascript:void(0)">
                                    <span>
                                        <img class="lazy" src="{{asset('web/home/images/images-chat-icon.webp')}}">
                                    </span>Contact Us</a>
                            </li>
                            <li class="last">
                                <a href="tel:(917) 203-8420">
                                    <span>
                                        <img class="lazy" src="{{asset('web/home/images/images-tele-icon.webp')}}">
                                    </span>(917) 203-8420
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
