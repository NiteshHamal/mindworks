
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
                    <a href="index.html"><img src="assets/img/logo/logo-dark.png" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                <div class="contact-item item-2">
                    <ul class="contact-list">
                        <li>Address : <span>Amsterdam, 109-74</span></li>
                        <li>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                        <li>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>

        <section class="page-header" data-background="{{url('assets/img/page-header-bg.jpg')}}">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Project</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="project.html " class="inner-page"> Project</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="project-section project-page pt-120 pb-120">
            <div class="container">
                <div class="gallary-top">
                    <div class="section-heading sub-heading-color heading-3">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Gallery</h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Ignite Your Brand's Online Growth <span>Presence</span></h2>
                    </div>
                    <div class="gallary-right">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-1.jpg')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Brand design</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-2.png')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">E-commerce Solutions</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-3.jpg')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Mobile Marketing</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-4.png')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">International Authority</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-5.png')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Brand Strategy</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box">
                            <div class="overlay"></div>
                            <img src="{{url('assets/img/project-img-6.png')}}" alt="project">
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Conversion Rate</a></h3>
                                <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                <a href="project-details.html" class="project-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        @include('layouts.footer')
</html>
