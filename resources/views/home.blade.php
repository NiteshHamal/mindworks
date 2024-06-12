
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
                                <span class="shape-text">Unlock Your Online <img class="shape" src="{{url('assets/img/hero-text-shape.png')}}" alt="shape"></span>
                                <br>
                                <span class="dynamic-text-container">
                                    <span class="dynamic-text gradient-text"></span>
                                </span>
                            </h1>
                            <p class="wow fade-in-bottom" data-wow-delay="500ms">Your Full-Service Creative and Digital Marketing Agency in Nepal – Specializing in Branding, Advertising, SEO, and Social Media for Brands</p>
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

        {{-- <section class="service-section pt-120">
            <div class="container">
                <div class="row justify-content-center gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-1.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Digital Advertising</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-2.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Search Engine </a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-3.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="service-details.html">Social Media Management</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            </div>
                            <div class="service-btn">
                                <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section --> --}}

        {{-- <div class="sponsor-section" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="container">
                <div class="sponsor-carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{url('assets/img/JCB-Logo.webp')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{url('assets/img/Mahindra-Logo.webp')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{url('assets/img/Mero-Flight-logo.webp')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{url('assets/img/Vector_Smart_Object1-01-1-1.webp')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{url('assets/img/KTM-Logo.webp')}}" alt="sponsor"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="client-logos-section" style="padding: 50px 0;">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">We work with global giants and emerging <span>startups</span></h2>
            </div>
            <div class="container">
                <div class="client-logos-table">
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/JCB-Logo.webp')}}" alt="JCB Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/Mahindra-Logo.webp')}}" alt="Mahindra Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/Mero-Flight-Logo.webp')}}" alt="Mero Flight Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/Vector_Smart_Object1-01-1-1.webp')}}" alt="Vector Smart Object Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/KTM-Logo.webp')}}" alt="Nepal Telecom Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client1.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client2.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client3.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client4.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client5.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client6.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client7.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client8.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client9.jpg')}}" alt="KTM Logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="{{url('assets/img/client10.jpg')}}" alt="KTM Logo">
                    </div>
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
                                <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Fueling Your <span>Business's</span> Evolution</h2>
                                <p class="wow fade-in-right" data-wow-delay="500ms">We're dedicated to advancing your business through innovative branding, captivating advertising, powerful SEO, and engaging social media, creating experiences that truly resonate and drive your growth..</p>
                            </div>
                            <ul class="about-list wow fade-in-right" data-wow-delay="600ms">
                                <li><i class="fa-regular fa-chevrons-right"></i>Strategic Designs</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>Creative Campaigns</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>Effective Solutions</li>
                                <li><i class="fa-regular fa-chevrons-right"></i>Innovative Strategies</li>
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
                                <p class="wow fade-in-left" data-wow-delay="500ms">We're more than just a digital agency; we're storytellers on a mission. Imagine us as your creative guides, charting the course while cherishing every milestone. Our team, a vibrant blend of passionate minds, collaborates to shape narratives that breathe life into your brand. We're not just about hitting targets; we aim to touch hearts and minds, crafting experiences that resonate deeply. From branding to SEO, we're here to fuel your growth and amplify your voice in the digital landscape. Join us on this journey, where every idea, every strategy, is infused with the human touch.</p>
                            </div>
                            <ul class="skill-list wow fade-in-right" data-wow-delay="600ms">
                                <li><i class="fa-regular fa-chart-network"></i>Connect :- We engage with our clients to understand their vision and goals.</li>
                                <li><i class="fa-regular fa-compass-drafting"></i>Draft :- We brainstorm and draft creative ideas that align with the client's brand.</li>
                                <li><i class="fa-regular fa-ferris-wheel"></i>Build :- We develop and refine these ideas into cohesive, compelling stories.</li>
                                <li><i class="fa-regular fa-person-dolly"></i>Deliver :- We ensure the final product resonates with the audience</li>
                            </ul>
                            {{-- <div class="skills-items">
                                <div class="skills-item wow fade-in-left" data-wow-delay="600ms">
                                    <div class="item-content">
                                        <h4 class="title">International Authority</h4>
                                        <span>$4000</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%;">
                                            <span data-background="{{url('assets/img/skill-shape.png')}}">80%</span>
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-item wow fade-in-left" data-wow-delay="700ms">
                                    <div class="item-content">
                                        <h4 class="title">Real Authority Method</h4>
                                        <span>12 Month</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 70%;">
                                            <span data-background="{{url('assets/img/skill-shape.png')}}">70%</span>
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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

        {{-- <section class="counter-section">
            <div class="bg-color"></div>
            <div class="container">
                <div class="row counter-wrap gy-lg-0 gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{url('assets/img/counter-1.png')}}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="200">0</span><span class="text">+</span></h3>
                                <p>Team member</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{url('assets/img/counter-2.png')}}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="30">0</span><span class="text">k+</span></h3>
                                <p>Winning award</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{url('assets/img/promo-1.png')}}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="20">0</span><span class="text">+</span></h3>
                                <p>Complete project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="counter-icon">
                                <img src="{{url('assets/img/counter-4.png')}}" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="odometer" data-count="300">0</span><span class="text">+</span></h3>
                                <p>Client review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ counter-section -->

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
                                        <a href="project-details.html"><img src="{{url('assets/img/saivee.jpg')}}" alt="project"></a>
                                        <div class="project-content">
                                            <h3 class="title"><a href="project-details.html">Saivee</a></h3>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item authority">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/ashok-leyland (1).jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Ashok Leyland</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item content">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/care_nepal.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Care Nepal</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row filter-items justify-content-center gy-lg-0 gy-4 mt-4">
                        <div class="col-lg-4 col-md-6 single-item authority content">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/project-img-4.png')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">International Authority</a></h3>
                                        <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item authority">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/project-img-5.png')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Brand Strategy</a></h3>
                                        <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item content">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/project-img-6.png')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Conversion Rate</a></h3>
                                        <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        {{-- <section class="testimonial-section pt-120 pb-120">
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
        </section> --}}
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
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Yearly</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Monthly</button>
                            <a href={{url('pricing')}}><button class="nav-link" id="nav-profile-tab" type="button">More</button></a>
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
                                            <img src="{{url('assets/img/pricing-2.png')}}" alt="icon">
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
        <!-- ./ pricing-section -->

        {{-- <section class="request-section bg-grey pt-120">
            <div class="bg-color"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="request-content wow fade-in-left" data-wow-delay="400ms">
                            <div class="shape"><img src="{{url('assets/img/request-shape.png')}}" alt="shape"></div>
                            <div class="section-heading heading-2">
                                <h4 class="sub-heading">Contact Us</h4>
                                <h2 class="section-title">Stand Out in the <span>Digital</span> Crowd Presence</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.</p>
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
                        <div class="request-img text-center wow fade-in-right" data-wow-delay="300ms">
                            <img src="{{url('assets/img/request-img.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ request-section -->

        {{-- <section class="blog-section pt-120 pb-120">
            <div class="container">
                <div class="section-heading heading-2">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Blogs</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Drive Results with <span>Effective</span> Online Marketing</h2>
                </div>
                <div class="row gy-lg-0 gy-4 justify-content-center">
                    <div class="col-md-6">
                        <div class="post-card wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="post-thumb">
                                <img src="{{url('assets/img/post-1.jpg')}}" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <ul class="post-meta">
                                    <li>By admin</li>
                                    <li>Comments (05)</li>
                                    <li>October 19, 2023</li>
                                </ul>
                                <div class="post-content">
                                    <h3 class="title"><a href="blog-details.html">Reach New Heights with Digital the Search Engine Results </a></h3>
                                    <p>Medical is a field that deals with the study, diagnosis, and treatment diseases Medical is a field that deals with the </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post-card wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="post-thumb">
                                <img src="{{url('assets/img/post-2.jpg')}}" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <ul class="post-meta">
                                    <li>By admin</li>
                                    <li>Comments (05)</li>
                                    <li>October 19, 2023</li>
                                </ul>
                                <div class="post-content">
                                    <h3 class="title"><a href="blog-details.html">Propel Your Business to Success with SEO Boost Your Online Presence </a></h3>
                                    <p>Medical is a field that deals with the study, diagnosis, and treatment diseases Medical is a field that deals with the </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ blog-section -->



        @include('layouts.footer')
    </body>
</html>
