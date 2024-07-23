
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
                        <img src="{{url('assets/img/meroflightlogo.png')}}" alt="Mero Flight Logo">
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
                                        <img src="{{url('assets/img/saivee.jpg')}}" alt="project">
                                        <div class="project-content">
                                            <h3 class="title"><a href="project-details.html">Saivee</a></h3>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item authority">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/ashok-leyland (1).jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Ashok Leyland</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item content">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/care_nepal.jpg')}}" alt="project">
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
                            <a href={{url('service')}}><button class="nav-link" id="nav-profile-tab" type="button">Explore All</button></a>
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
                                            <span class="sub-title">Basic Plan</span>
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
                                            <span class="sub-title">Advance Plan</span>
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
                                            <span class="sub-title">Premium Plan</span>
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
                                            <span class="sub-title">Basic Plan</span>
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
                                            <span class="sub-title">Advance Plan</span>
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
                                            <span class="sub-title">Premium Plan</span>
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

        @include('layouts.footer')
    </body>
</html>
