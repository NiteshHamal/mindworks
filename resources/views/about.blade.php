
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

        {{-- <section class="page-header" data-background="{{url('assets/img/page-header-bg.jpg')}}">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">About Us</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="about.html" class="inner-page"> About Us</a></h4>
                </div>
            </div>
        </section> --}}
        <!-- ./ page-header -->

        <div class="about-section-2 pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img-wrap wow slide-in-left" data-wow-delay="300ms">
                            <div class="about-img-item">
                                <div class="shape"><img src="{{url('assets/img/about-item-shape.png')}}" alt="about"></div>
                                <div class="about-counter">
                                    <div class="icon"><img src="{{url('assets/img/about-icon-2.png')}}" alt="icon"></div>
                                    <div class="counter-content">
                                        <h3 class="title"><span class="odometer" data-count="4">0</span>K+</h3>
                                        <p>Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-img-item">
                                <div class="item-img">
                                    <div class="bg-shape top"></div>
                                    <img src="{{url('assets/img/about-item-img-1.jpg')}}" alt="img">
                                </div>
                            </div>
                            <div class="about-img-item">
                                <div class="item-img">
                                    <div class="bg-shape bottom"></div>
                                    <img src="{{url('assets/img/about-item-img-2.jpg')}}" alt="img">
                                </div>
                            </div>
                            <div class="about-img-item chart">
                                <div class="item-chart-wrap">
                                    <div class="item-chart">
                                        <div class="piechart" data-bar-color="#FE9D51" data-percent="65"><span>65</span>%</div>
                                        <div class="item-content">
                                            <h3 class="title">Daily Activity</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-2">
                            <div class="section-heading heading-3">
                                <h4 class="sub-heading wow fade-in-right" data-wow-delay="300ms">About Us</h4>
                                <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Enhance Your Brand's the Online <span>Performance</span></h2>
                                <p class="wow fade-in-right" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                            </div>
                            <div class="about-box-wrap wow fade-in-right" data-wow-delay="600ms">
                                <div class="about-box">
                                    <h3 class="title"><i class="fa-regular fa-chevrons-right"></i>Influencer Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nun</p>
                                </div>
                                <div class="about-box">
                                    <h3 class="title"><i class="fa-regular fa-chevrons-right"></i>Lead Generation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nun</p>
                                </div>
                            </div>
                            <a href="about.html" class="pb-primary-btn primary-3 wow fade-in-right" data-wow-delay="700ms">Read More <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ about-section-2 -->

        <section class="pricing-section pb-120 overflow-hidden">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Harness the Power of Digital <span>Marketing</span></h2>
                </div>
                <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="shape"><img src="{{url('assets/img/pricing.png')}}" alt="shape"></div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Yearly</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Monthly</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row gy-lg-0 gy-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-1.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Starter Plan</span>
                                            <h3 class="title">$19 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item active">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-2.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Platinum Plan</span>
                                            <h3 class="title">$39 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-3.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Gold Plan</span>
                                            <h3 class="title">$69 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row gy-lg-0 gy-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-1.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Starter Plan</span>
                                            <h3 class="title">$29 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item active">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-2.png')}}"alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Platinum Plan</span>
                                            <h3 class="title">$49 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-3.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Gold Plan</span>
                                            <h3 class="title">$89 <span>/mo</span></h3>
                                            <p>Lorem Ipsum is simply dummy.</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Mistakes To Avoid</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Your Startup</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Knew About Fonts</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Winning Metric Startup</li>
                                            </ul>
                                            <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ pricings-section -->

        <section class="counter-section">
            <div class="bg-color"></div>
            <div class="container">
                <div class="row counter-wrap wrap-2 gy-lg-0 gy-4">
                    <div class="gradient-border"></div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="200">0</span><span class="text">+</span></h3>
                                <p>Team member</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item" style="--pb-color-theme-primary: #57D288">
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="30">0</span><span class="text">k+</span></h3>
                                <p>Winning award</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item" style="--pb-color-theme-primary: #FE9D51">
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="20">0</span><span class="text">+</span></h3>
                                <p>Complete project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item" style="--pb-color-theme-primary: #657EFF">
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="300">0</span><span class="text">+</span></h3>
                                <p>Client review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ counter-section -->

        <section class="project-section-2 bg-grey overflow-hidden pt-120 pb-120">
            <div class="container">
                <div class="section-heading sub-heading-color heading-3 text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Seize the Digital Opportunity <span>Online Strategy</span></h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="project-img-wrap">
                            <img src="{{url('assets/img/project-img-1.png')}}" alt="project">
                            <div class="project-counter">
                                <h3 class="title"><span class="odometer" data-count="10">0</span><span class="text">+</span></h3>
                                <p>years of experiences</p>
                            </div>
                            <div class="project-counter-2">
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title"><span class="odometer" data-count="5000">0</span><span class="text">+</span></h3>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-list-wrap">
                            <div class="shape"><img src="{{url('assets/img/project-item-shape.png')}}" alt="shape"></div>
                            <ul class="project-list">
                                <li>
                                    <div class="list-icon"><img src="{{url('assets/img/project-1.png')}}" alt="icon"></div>
                                    <h3 class="title"><a href="project-details.html">Brand Strategy design</a></h3>
                                </li>
                                <li>
                                    <div class="list-icon"><img src="{{url('assets/img/project-2.png')}}" alt="icon"></div>
                                    <h3 class="title"><a href="project-details.html">Conversion Rate </a></h3>
                                </li>
                                <li>
                                    <div class="list-icon"><img src="{{url('assets/img/project-3.png')}}" alt="icon"></div>
                                    <h3 class="title"><a href="project-details.html">International Authority</a></h3>
                                </li>
                                <li>
                                    <div class="list-icon"><img src="{{url('assets/img/project-4.png')}}" alt="icon"></div>
                                    <h3 class="title"><a href="project-details.html">Mobile Marketing</a></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        <section class="testimonial-section pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testi-info md-pb-40">
                            <div class="section-heading heading-2">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Cients</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Grow Your Business with Strategic <span>SEO</span></h2>
                                <p class="wow fade-in-bottom" data-wow-delay="500ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
                            </div>
                            <img class="wow fade-in-bottom" data-wow-delay="600ms" src="{{url('assets/img/testi-img.png')}}" alt="testi">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-items">
                            <div class="testi-item wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="client-thumb">
                                    <img src="{{url('assets/img/testi-client-1.png')}}" alt="testi">
                                </div>
                                <img class="quote" src="{{url('assets/img/quote.png')}}" alt="quote">
                                <div class="testi-content">
                                    <h3 class="name">Robert Fox <span>Nursing Assistant</span></h3>
                                    <ul class="review">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Financial planners help people to knowledge in about how to invest and save their moneye the most efficient way in to eve.planners Financial planners help people to my destin knowledge in about how to invest</p>
                                </div>
                            </div>
                            <div class="testi-item wow fade-in-bottom" data-wow-delay="500ms">
                                <div class="client-thumb">
                                    <img src="{{url('assets/img/testi-client-2.png')}}" alt="testi">
                                </div>
                                <img class="quote" src="{{url('assets/img/quote.png')}}" alt="quote">
                                <div class="testi-content">
                                    <h3 class="name">Leslie Alexander <span>Nursing Assistant</span></h3>
                                    <ul class="review">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Financial planners help people to knowledge in about how to invest and save their moneye the most efficient way in to eve.planners Financial planners help people to my destin knowledge in about how to invest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        @include('layouts.footer')
    </body>
</html>
