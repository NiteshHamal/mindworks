
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('layouts.header')
    </head>

    <body>
        <!-- header-area-start -->
        @include('layouts.nav')
        <!-- /.Main Header -->

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                </form>
                <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
        </div>
        <!-- /#popup-search-box -->

        <div class="preloader">
            <img src="{{url('assets/img/proloader.gif')}}" alt="preloader-icon">
        </div>
        <!--/.site-preloader-->

        <div class="mobile-side-menu">
            <div class="side-menu-content">
                <div class="side-menu-head">
                    <a href="{{url('/')}}"><img src="{{url('assets/img/5.png')}}" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                {{-- <div class="contact-item item-2">
                    <ul class="contact-list">
                        <li>Address : <span>Amsterdam, 109-74</span></li>
                        <li>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                        <li>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>

        {{-- <section class="page-header" data-background="{{url('assets/img/page-header-bg.jpg')}}">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Faq</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="faq.html" class="inner-page"> Faq</a></h4>
                </div>
            </div>
        </section> --}}

        <div class="client-logos-section">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Discover <span>FAQ </span> Solutions</h2>
            </div>
        </div>
        <!-- ./ page-header -->

        <section class="faq-section pb-120">
            <div class="container">
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExampleTwo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Why is digital marketing important?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What are the key components of a digital strategy?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How does SEO impact digital marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What is the role of social media in digital marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExampleTwo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What are the key components of a digital strategy?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What are the key components of a digital strategy?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How does SEO impact digital marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleThree">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            What is the role of social media in digital marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ faq-section -->

        {{-- <section class="content-section pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-thumb">
                            <img src="{{url('assets/img/content-img.png')}}" alt="content">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-info">
                            <div class="section-heading sub-heading-color heading-3">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fade-in-bottom;">What We Do</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fade-in-bottom;">Capitalize on the Power of <span>SEO Digital</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                            </div>
                            <ul class="content-list">
                                <li>
                                    <div class="arrow"><img src="{{url('assets/img/arrow-shape.png')}}" alt="arrow"></div>
                                    <span class="number">01</span>
                                    <h4 class="title">Conversion Rate</h4>
                                </li>
                                <li style="--pb-color-theme-primary: #57D288;">
                                    <div class="arrow"><img src="{{url('assets/img/arrow-shape.png')}}" alt="arrow"></div>
                                    <span class="number">02</span>
                                    <h4 class="title">Real Authority Method</h4>
                                </li>
                                <li style="--pb-color-theme-primary: #657EFF;">
                                    <span class="number">03</span>
                                    <h4 class="title">Conversion Rate</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ content-section -->

        @include('layouts.footer')
    </body>
</html>
