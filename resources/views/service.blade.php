
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



        <section class="service-section service-page pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-1.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Social Media Marketing</a></h3>
                                <p>Boost your online presence with targeted campaigns across various social media platforms.</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-2.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Search Engine Optimization </a></h3>
                                <p>Improve your website's visibility and attract organic traffic with our comprehensive SEO strategies.</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-3.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Company Branding</a></h3>
                                <p>Create a strong and memorable brand identity that deeply resonates with your target audience.</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-4.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Graphic Designing</a></h3>
                                <p>Bring your ideas to life with visually stunning and effective graphic designs.</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-5.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Content Writing</a></h3>
                                <p>Engage your audience with high-quality, well-crafted content tailored to your needs.</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-6.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Other Digital Services</a></h3>
                                <p>Support your business growth with our wide range of digital services. </p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section -->

        @include('layouts.footer')
    </body>
</html>
