<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('layouts.header')
    <style>
        .counter-section {
            padding: 40px 20px;
        }
    </style>
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
        <img src="{{ url('assets/img/proloader.gif') }}" alt="preloader-icon">
    </div>
    <!--/.site-preloader-->

    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href="{{ url('/') }}"><img src="{{ url('assets/img/5.png') }}" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-wrap"></div>
        </div>
    </div>
    <!-- /.mobile-side-menu -->
    <div class="mobile-side-menu-overlay"></div>

    <section class="hero-section" data-background="{{ url('assets/img/hero-bg.png') }}">
        <div class="hero-shapes">
            <div class="shape top-shape"></div>
            <div class="shape bottom-shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content md-pb-20">
                        <h1 class="title tracking-in-expand wow fade-in-bottom" data-wow-delay="300ms">
                            <span class="shape-text">Transform Your Online <img class="shape"
                                    src="{{ url('assets/img/hero-text-shape.png') }}" alt="shape"></span>
                            <br>
                            <span class="dynamic-text-container">
                                <span class="dynamic-text gradient-text"></span>
                            </span>
                        </h1>
                        <p class="wow fade-in-bottom" data-wow-delay="500ms">We are a full-service creative agency
                            specializing in innovative campaigns, memorable branding, impactful advertising, effective
                            SEO, and engaging Social Media strategies.</p>
                        <a href="{{ 'pricing' }}" class="pb-primary-btn primary-2 wow fade-in-bottom"
                            data-wow-delay="600ms">Learn More</a>
                        <div class="shapes">
                            <div class="round-shape"><img src="{{ url('assets/img/4.png') }}" alt="shape"></div>
                            <div class="star"><img src="{{ url('assets/img/hero-star.png') }}" alt="shape"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb text-center">
                        <div class="shapes">
                            <div class="shape hero-shape-1"><img src="{{ url('assets/img/hero-shape-1.png') }}"
                                    alt="shape"></div>
                            <div class="shape hero-shape-2"><img src="{{ url('assets/img/hero-img-shape-1.png') }}"
                                    alt="shape"></div>
                            <div class="shape hero-shape-3"><img src="{{ url('assets/img/hero-img-shape-2.png') }}"
                                    alt="shape"></div>
                        </div>
                        <img src="{{ url('assets/img/hero-img-1.png') }}" alt="hero">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ./ hero-section -->

    <div class="client-logos-section" style="padding: 60px 0;">
        <div class="section-heading text-center">
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                We work with global giants and emerging <span>startups</span>
            </h2>
        </div>
        <div class="container">
            <div class="container-carousel">
                <div class="slider">
                    <div class="slides">
                        <div class="slide">
                            <img src="{{ url('assets/img/35.webp') }}" alt="Mahindra Logo">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/38.webp') }}" alt="LG">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/40.webp') }}" alt="Chandragiri Hills">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/2.webp') }}" alt="Skyworth">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/36.webp') }}" alt="TCL">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/37.webp') }}" alt="Godrej">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/29.webp') }}" alt="Crompton">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/30.webp') }}" alt="Hafele">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/31.webp') }}" alt="Faber">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/34.webp') }}" alt="Mero Flight Logo">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/client5.webp') }}" alt="DishHome">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/client7.webp') }}" alt="Action Nepal">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/19.webp') }}" alt="Ashok Leyland">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/6.webp') }}" alt="Intex Logo">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/client10.webp') }}" alt="Everest Equity">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/3.webp') }}" alt="Kiozee">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/4.webp') }}" alt="Delicious">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/7.webp') }}" alt="Care">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/8.webp') }}" alt="Greenlam">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/12.webp') }}" alt="Mayur Ply">
                        </div>
                        <div class="slide">
                            <img src="{{ url('assets/img/client2.webp') }}" alt="IME Automotives">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-carousel-right">
                <div class="slider-right">
                    <div class="slides-right">
                        <div class="slide-right">
                            <img src="{{ url('assets/img/9.webp') }}" alt="Asis">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/10.webp') }}" alt="Cecolin">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/11.webp') }}" alt="Sukam">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/13.webp') }}" alt="Pasupati">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/14.webp') }}" alt="Livpure">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/15.webp') }}" alt="Everest">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/16.webp') }}" alt="LuckyTravel">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/17.webp') }}" alt="LuckyHoliday">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/18.webp') }}" alt="Agni">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/20.webp') }}" alt="Bajeko Sekuwa">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/21.webp') }}" alt="IME Motors">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/22.webp') }}" alt="United Cement">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/23.webp') }}" alt="Radio Kantipur">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/25.webp') }}" alt="Massimo">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/26.webp') }}" alt="Smarten">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/27.webp') }}" alt="Fuji Electric">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/24.webp') }}" alt="KTM Logo">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/client1.webp') }}" alt="Nepal Telecom">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/32.webp') }}" alt="JCB Logo">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/33.webp') }}" alt="Mukthinath Bank">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/client3.webp') }}" alt="Green Ply">
                        </div>
                        <div class="slide-right">
                            <img src="{{ url('assets/img/39.webp') }}" alt="Biotech">
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <section class="about-section pb-120">
        <div class="container">
            <div class="row align-items-center gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="about-img wow fade-in-left" data-wow-delay="400ms">
                        <div class="shape" data-background="{{ url('assets/img/about-shape.png') }}"></div>
                        <img class="img" src="{{ url('assets/img/about-img-1.png') }}" alt="about">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <div class="icon">
                                    <img src="{{ url('assets/img/about-icon.png') }}" alt="icon">
                                </div>
                                <h3 class="title"><span class="odometer" data-count="10">0</span>+</h3>
                            </div>
                            <p>Years Of Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="shape wow fade-in-right" data-wow-delay="400ms"><img
                                src="{{ url('assets/img/about-shape-2.png') }}" alt="shape"></div>
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-right" data-wow-delay="300ms">About Us</h4>
                            <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Empowering Your
                                <span>Business</span> Growth with Innovative Digital Marketing Strategies
                            </h2>
                            <p class="wow fade-in-right" data-wow-delay="500ms">At Mindworks Media and Event Pvt. We
                                propel businesses forward with marketing solutions tailored to your unique needs. With
                                10+ years of Experience in Marketing, we offer customized marketing and creative
                                solutions that help companies thrive in this competitive environment.</p>
                        </div>
                        <ul class="about-list wow fade-in-right" data-wow-delay="600ms">
                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Marketing</li>
                            <li><i class="fa-regular fa-chevrons-right"></i>SEO & SEM</li>
                            <li><i class="fa-regular fa-chevrons-right"></i>Company Branding</li>
                            <li><i class="fa-regular fa-chevrons-right"></i>And Many More</li>
                        </ul>
                        <a href="{{ url('about') }}" class="pb-primary-btn wow fade-in-right"
                            data-wow-delay="700ms">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <section class="skill-section pb-120">
        <div class="container">
            <div class="row skill-wrap gy-lg-0 gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="skill-content">
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-left" data-wow-delay="300ms">How We Do It</h4>
                            <h2 class="section-title wow fade-in-left" data-wow-delay="400ms">Our Process of
                                <span>Crafting</span> Excellence
                            </h2>
                            <p class="wow fade-in-left" data-wow-delay="500ms">We're more than just a digital
                                marketing agency; we're storytellers on a mission. As your creative guides, we navigate
                                your brand's journey with passion and precision, celebrating every milestone along the
                                way. Our team, a dynamic blend of innovative and passionate minds collaborates to shape
                                narratives that breathe life into your brand. We don’t just hit targets, we aim to touch
                                hearts and minds, and craft experiences that resonate deeply with your customers.</p>
                        </div>
                        <div class="skill-list wow fade-in-right" data-wow-delay="600ms">
                            <div><i class="fa-regular fa-chart-network red"></i>Connect</div>
                            <div><i class="fa-regular fa-compass-drafting green"></i>Draft</div>
                            <div><i class="fa-regular fa-ferris-wheel yellow"></i>Build</div>
                            <div><i class="fa-regular fa-person-dolly"></i>Deliver</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-img wow fade-in-right" data-wow-delay="500ms">
                        <img src="{{ url('assets/img/skill-img-1.png') }}" alt="skill">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ skill-section -->

    <section class="project-section pt-120 bg-grey">
        <div class="bg-color"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ url('assets/img/project-shape-1.png') }}" alt="project"></div>
            <div class="shape shape-2"><img src="{{ url('assets/img/project-shape-2.png') }}" alt="project"></div>
        </div>
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Showcasing Our Creative
                    <span>Excellence</span>
                </h2>
            </div>

            <div class="project-filter-home">
                <div class="row filter-items-home justify-content-center gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6 single-item authority content">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/tcl3.webp') }}" alt="project">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item authority">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/ashok-leyland (1).webp') }}" alt="project">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item content">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/care_nepal.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    <section class="pricing-section pb-120 pt-120 overflow-hidden">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Harness the Power of Digital
                    <span>Marketing</span>
                </h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <div class="shape"><img src="{{ url('assets/img/pricing.png') }}" alt="shape"></div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#smm-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Monthly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#smm-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Yearly</button>
                        <a href={{ url('pricing') }}><button class="nav-link" id="nav-profile-tab"
                                type="button">Explore All</button></a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="smm-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan:</span>
                                        <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i> Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>12 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-content">
                                        <span class="sub-title">Advance Plan</span>
                                        <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Including standard query
                                                response*</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>20 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                            <li><i class="fa-solid fa-circle-small"></i>1 Video (up to 15 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Including query response*
                                            </li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Once Detailed Development
                                            </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>25 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>3 GIFs</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 Video (up to 25 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 3 Sizes per grahic
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="smm-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan:</span>
                                        <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>12 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-content">
                                        <span class="sub-title">Advance Plan</span>
                                        <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Including standard query
                                                response*</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>20 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                            <li><i class="fa-solid fa-circle-small"></i>1 Video (up to 15 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                            <li><i class="fa-solid fa-circle-small"></i>Including query response*
                                            </li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Once Detailed Development
                                            </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>25 Graphic Deisgns</li>
                                            <li><i class="fa-solid fa-circle-small"></i>3 GIFs</li>
                                            <li><i class="fa-solid fa-circle-small"></i>2 Video (up to 25 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-solid fa-circle-small"></i>Up to 3 Sizes per grahic
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="counter-section">
                <div class="container">
                    <div class="row counter-wrap wrap-2 gy-lg-0 gy-4">
                        <div class="section-heading text-center m-0">
                            <h2 class="section-title wow fade-in-bottom mb-3" data-wow-delay="400ms"
                                style="max-width: 800px">Want to <span>Customize</span> the plans?</h2>
                            <a href="{{ 'pricing#custom-solutions' }}"
                                class="pb-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Click
                                Here!</a>
                        </div>

                    </div>
                </div>
            </section>
            {{-- custom sections --}}
        </div>
    </section>
    <!-- ./ pricing-section -->



    @include('layouts.footer')


</body>

</html>
