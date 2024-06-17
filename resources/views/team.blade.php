
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
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>
        <!-- ./ page-header -->

        <div class="client-logos-section">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Meet the <span>Minds</span> Behind Mindworks<span></span></h2>
            </div>
        </div>
        <!-- ./ sponsor-section -->


        <section class="team-section team-page pb-120">
            <div class="container">
                <div class="row team-wrap gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-1.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Ronald Richards</a></h3>
                                <span>President of Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-2.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Jacob Jones</a></h3>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-3.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Courtney Henry</a></h3>
                                <span>Nursing Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-4.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Bessie Cooper</a></h3>
                                <span>Medical Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-5.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Savannah Nguyen</a></h3>
                                <span>President of Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-6.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Jacob Jones</a></h3>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-7.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Theresa Webb</a></h3>
                                <span>Nursing Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center">
                            <div class="team-thumb">
                                <img src="{{url('assets/img/team-8.png')}}" alt="team">
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Esther Howard</a></h3>
                                <span>Medical Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ team-section -->

        @include('layouts.footer')
    </body>
</html>
