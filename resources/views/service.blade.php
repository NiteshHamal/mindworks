
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

        <div class="preloader" id="preloader">
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
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>
        <!-- ./ page-header -->



        <div class="feature-section bg-dark-1">
            <div class="container">
                <div class="section-heading heading-4">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Services</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Dominate the <span>Digital</span> Landscape</h2>
                </div>
                <div class="feature-items">
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-1.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Social Media Marketing</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Boost your online presence with targeted campaigns across various social media platforms.</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="500ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-2.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Search Engine Optimization</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-3.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Company Branding</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-4.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Web Development</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ feature-section -->



        {{-- <section class="service-section service-page pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-1.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Social Media Marketing</a></h3>
                                <p>Boost your online presence with targeted campaigns across various social media platforms.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-2.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Search Engine Optimization </a></h3>
                                <p>Improve your website's visibility and attract organic traffic with our comprehensive SEO strategies.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-3.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Company Branding</a></h3>
                                <p>Create a strong and memorable brand identity that deeply resonates with your target audience.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-6.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Web Development</a></h3>
                                <p>Build a Robust Online Platform with Our Custom Web Development Solutions</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section --> --}}

        @include('layouts.footer')
    </body>
</html>
