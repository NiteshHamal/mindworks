
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

        <section class="hero-section" data-background="{{url('assets/img/hero-bg.png')}}">
            <div class="hero-shapes">
                <div class="shape top-shape"></div>
                <div class="shape bottom-shape"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content md-pb-20">
                            <h1 class="title tracking-in-expand wow fade-in-bottom" data-wow-delay="300ms">
                                <span class="shape-text">Transform Your Online <img class="shape" src="{{url('assets/img/hero-text-shape.png')}}" alt="shape"></span>
                                <br>
                                <span class="dynamic-text-container">
                                    <span class="dynamic-text gradient-text"></span>
                                </span>
                            </h1>
                            <p class="wow fade-in-bottom" data-wow-delay="500ms">We are a full-service creative agency specializing in innovative campaigns, memorable branding, impactful advertising, effective SEO, and engaging Social Media strategies.</p>
                            <a href="{{'pricing'}}" class="pb-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Learn More</a>
                            <div class="shapes">
                                <div class="round-shape"><img src="{{url('assets/img/4.png')}}" alt="shape"></div>
                                <div class="star"><img src="{{url('assets/img/hero-star.png')}}" alt="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-thumb text-center">
                            <div class="shapes">
                                <div class="shape hero-shape-1"><img src="{{url('assets/img/hero-shape-1.png')}}" alt="shape"></div>
                                <div class="shape hero-shape-2"><img src="{{url('assets/img/hero-img-shape-1.png')}}" alt="shape"></div>
                                <div class="shape hero-shape-3"><img src="{{url('assets/img/hero-img-shape-2.png')}}" alt="shape"></div>
                            </div>
                            <img src="{{url('assets/img/hero-img-1.png')}}" alt="hero">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ./ hero-section -->

        <div class="client-logos-section" style="padding: 50px 0;">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                    We work with global giants and emerging <span>startups</span>
                </h2>
            </div>
            <div class="container">
                <div class="client-logos-grid">
                    <!-- Add logos with pagination controls -->
                    <div class="client-logos-page" id="page1">
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/35.jpg')}}" alt="Mahindra Logo">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/38.jpg')}}" alt="LG">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/40.jpg')}}" alt="Chandragiri Hills">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/2.jpg')}}" alt="Skyworth">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/36.jpg')}}" alt="TCL">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/37.jpg')}}" alt="Godrej">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/29.jpg')}}" alt="Crompton">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/30.jpg')}}" alt="Hafele">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/31.jpg')}}" alt="Faber">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/34.jpg')}}" alt="Mero Flight Logo">
                        </div>
                    </div>
                    <div class="client-logos-page" id="page2" style="display: none;">
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client5.jpg')}}" alt="DishHome">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client7.jpg')}}" alt="Action Nepal">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/19.jpg')}}" alt="Ashok Leyland">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/6.jpg')}}" alt="Intex Logo">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client10.jpg')}}" alt="Everest Equity">
                        </div>

                        <div class="client-logo-item">
                            <img src="{{url('assets/img/3.jpg')}}" alt="Kiozee">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/4.jpg')}}" alt="Delicious">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/7.jpg')}}" alt="Care">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/8.jpg')}}" alt="Greenlam">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/12.jpg')}}" alt="Mayur Ply">
                        </div>
                    </div>
                    <div class="client-logos-page" id="page3" style="display: none;">
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/9.jpg')}}" alt="Asis">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/10.jpg')}}" alt="Cecolin">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/11.jpg')}}" alt="Sukam">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/13.jpg')}}" alt="Pasupati">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/14.jpg')}}" alt="Livpure">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/15.jpg')}}" alt="Everest">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/16.jpg')}}" alt="LuckyTravel">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/17.jpg')}}" alt="LuckyHoliday">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/18.jpg')}}" alt="Agni">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/20.jpg')}}" alt="Bajeko Sekuwa">
                        </div>
                    </div>
                    <div class="client-logos-page" id="page4" style="display: none;">
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/21.jpg')}}" alt="IME Motors">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/22.jpg')}}" alt="United Cement">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/23.jpg')}}" alt="Radio Kantipur">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/25.jpg')}}" alt="Massimo">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/26.jpg')}}" alt="Smarten">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/27.jpg')}}" alt="Fuji Electric">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/24.jpg')}}" alt="KTM Logo">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client1.jpg')}}" alt="Nepal Telecom">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/32.jpg')}}" alt="JCB Logo">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/33.jpg')}}" alt="Mukthinath Bank">
                        </div>
                    </div>
                    <div class="client-logos-page" id="page5" style="display: none;">
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client2.jpg')}}" alt="IME Automotives">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/client3.jpg')}}" alt="Green Ply">
                        </div>
                        <div class="client-logo-item">
                            <img src="{{url('assets/img/39.jpg')}}" alt="Biotech">
                        </div>
                    </div>
                    <!-- Add more pages as needed -->
                </div>

            </div>
        </div>

        <!-- ./ sponsor-section -->
        <section class="about-section pb-120">
            <div class="container">
                <div class="row align-items-center gy-lg-0 gy-4">
                    <div class="col-lg-6">
                        <div class="about-img wow fade-in-left" data-wow-delay="400ms">
                            <div class="shape" data-background="{{url('assets/img/about-shape.png')}}"></div>
                            <img class="img" src="{{url('assets/img/about-img-1.png')}}" alt="about">
                            <div class="about-counter">
                                <div class="counter-icon">
                                    <div class="icon">
                                        <img src="{{url('assets/img/about-icon.png')}}" alt="icon">
                                    </div>
                                    <h3 class="title"><span class="odometer" data-count="10">0</span>+</h3>
                                </div>
                                <p>Years Of Experiences</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="shape wow fade-in-right" data-wow-delay="400ms"><img src="{{url('assets/img/about-shape-2.png')}}" alt="shape"></div>
                            <div class="section-heading heading-2">
                                <h4 class="sub-heading wow fade-in-right" data-wow-delay="300ms">About Us</h4>
                                <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Empowering Your <span>Business</span> Growth with Innovative Digital Marketing Strategies</h2>
                                <p class="wow fade-in-right" data-wow-delay="500ms">At Mindworks Media and Event Pvt. We propel businesses forward with marketing solutions tailored to your unique needs.  With 10+ years of Experience in Marketing, we offer customized marketing and creative solutions that help companies thrive in this competitive environment.</p>
                            </div>
                            <ul class="about-list wow fade-in-right" data-wow-delay="600ms">
                                <li><i class="fa-regular fa-chevrons-right"></i>Social Media Marketing</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>SEO & SEM</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>Company Branding</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>And Many More</li>
                            </ul>
                            <a href="{{url('about')}}" class="pb-primary-btn wow fade-in-right" data-wow-delay="700ms">Read More</a>
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
                                <h2 class="section-title wow fade-in-left" data-wow-delay="400ms">Our Process of <span>Crafting</span> Excellence</h2>
                                <p class="wow fade-in-left" data-wow-delay="500ms">We're more than just a digital marketing agency; we're storytellers on a mission. As your creative guides, we navigate your brand's journey with passion and precision, celebrating every milestone along the way. Our team, a dynamic blend of innovative and passionate minds collaborates to shape narratives that breathe life into your brand. We don’t just hit targets, we aim to touch hearts and minds, and craft experiences that resonate deeply with your customers.</p>
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
                            <img src="{{url('assets/img/skill-img-1.png')}}" alt="skill">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ skill-section -->

        <section class="project-section pt-120 bg-grey">
            <div class="bg-color"></div>
            <div class="shapes">
                <div class="shape shape-1"><img src="{{url('assets/img/project-shape-1.png')}}" alt="project"></div>
                <div class="shape shape-2"><img src="{{url('assets/img/project-shape-2.png')}}" alt="project"></div>
            </div>
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Showcasing Our Creative <span>Excellence</span></h2>
                </div>

                <div class="project-filter-home">
                    <div class="row filter-items-home justify-content-center gy-lg-0 gy-4">
                        <div class="col-lg-4 col-md-6 single-item authority content">
                                <div class="project-item">
                                    <div class="project-thumb">
                                        {{-- < a href="project-details.html" keep image inside> --}}
                                        <img src="{{url('assets/img/tcl3.jpg')}}" alt="project">
                                        <div class="project-content">
                                            <h3 class="title">TCL</h3>
                                            {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item authority">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/ashok-leyland (1).jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Ashok Leyland</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item content">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/care_nepal.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Care Nepal</h3>
                                    </div>
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
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Harness the Power of Digital <span>Marketing</span></h2>
                </div>
                <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="shape"><img src="{{url('assets/img/pricing.png')}}" alt="shape"></div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#smm-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Monthly</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#smm-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Yearly</button>
                            <a href={{url('pricing')}}><button class="nav-link" id="nav-profile-tab" type="button">Explore All</button></a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="smm-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row gy-lg-0 gy-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-1.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Basic Plan:</span>
                                            <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                            <p>Social Media Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                            </ul>
                                            <p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
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
                                            <span class="sub-title">Advance Plan</span>
                                            <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                            <p>Social Meida Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>including standard query response*</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                            </ul><p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to 15 sec.)</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
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
                                            <span class="sub-title">Premium Plan</span>
                                            <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                            <p>Social Meida Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>including query response*</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed Development</li>
                                            </ul><p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to 25 sec.)</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes per grahic</li>
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
                                        <div class="pricing-icon">
                                            <img src="{{url('assets/img/pricing-1.png')}}" alt="icon">
                                        </div>
                                        <div class="pricing-content">
                                            <span class="sub-title">Basic Plan:</span>
                                            <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                            <p>Social Media Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                            </ul>
                                            <p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
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
                                            <span class="sub-title">Advance Plan</span>
                                            <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                            <p>Social Meida Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>including standard query response*</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                            </ul><p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to 15 sec.)</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
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
                                            <span class="sub-title">Premium Plan</span>
                                            <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                            <p>Social Meida Handling:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>including query response*</li>
                                            </ul>
                                            <p>Promotional Campagin Development:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed Development</li>
                                            </ul><p>Content Deliverables:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic Deisgns</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to 25 sec.)</li>
                                            </ul>
                                            <p>Adaptations:</p>
                                            <ul class="pricing-list">
                                                <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes per grahic</li>
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
                                <h2 class="section-title wow fade-in-bottom mb-3" data-wow-delay="400ms" style="max-width: 800px">Want to <span>Customize</span> the plans?</h2>
                                <a href="{{'pricing#custom-solutions'}}" class="pb-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Click Here!</a>
                            </div>

                        </div>
                    </div>
                </section>
                {{-- custom sections --}}
            </div>
        </section>
        <!-- ./ pricing-section -->



        @include('layouts.footer')
        <script>
            let currentPage = 1;
            const totalPages = document.querySelectorAll('.client-logos-page').length;
            const delay = 3000; // Change delay to 5000 for 5 seconds

            function showPage(page) {
                document.querySelectorAll('.client-logos-page').forEach(function(pageElement) {
                    pageElement.style.display = 'none';
                });
                document.getElementById('page' + page).style.display = 'flex';
            }

            function nextPage() {
                currentPage++;
                if (currentPage > totalPages) {
                    currentPage = 1; // Loop back to the first page
                }
                showPage(currentPage);
            }

            // Show the first page initially
            document.addEventListener('DOMContentLoaded', function() {
                showPage(currentPage);
                setInterval(nextPage, delay);
            });
        </script>

    </body>
</html>
