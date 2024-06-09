
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
                    <h1 class="title">Team</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="team.html" class="inner-page"> Team</a></h4>
                </div>
            </div>
        </section> --}}
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

        {{-- <section class="request-section pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="request-content">
                            <div class="section-heading heading-2">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Stand Out in the <span>Digital</span> Crowd Presence</h2>
                                <p class="wow fade-in-bottom" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                            </div>
                            <div class="request-form">
                                <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Sort by popular</span><ul class="list"><li data-value="" class="option selected focus">Sort by popular</li><li data-value="vdt" class="option">Plan One</li><li data-value="can" class="option">Plan Two</li><li data-value="uk" class="option">Plan Three</li></ul></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-btn text-center">
                                        <button id="submit" class="pb-primary-btn" type="submit">Send a messege</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="request-img text-center">
                            <img src="{{url('assets/img/request-img.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ request-section -->

        @include('layouts.footer')
    </body>
</html>
