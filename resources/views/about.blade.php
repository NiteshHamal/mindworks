
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
                    <h1 class="title">About Us</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="about.html" class="inner-page"> About Us</a></h4>
                </div>
            </div>
        </section> --}}
        <!-- ./ page-header -->

        <div class="about-section-2 pt-120 pb-80">
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
                                <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Empowering Your Business Evolution with Innovative <span>Strategies</span></h2>
                                <p class="wow fade-in-right" data-wow-delay="500ms">
                                    Welcome to Mindworks Media and Events Pvt. Ltd.! We specialize in digital agency services that propel your business forward. As a full-service digital agency for travel brands, we create immersive experiences that drive sustainable growth.<br><br>
                                    Our marketing digital agency and creative digital agency offer tailored solutions to meet your unique needs. Recognized as the best digital marketing agency in Nepal, we excel in social media marketing, content marketing, and SEO. Our SEO agency provides comprehensive services, including local SEO and website SEO.<br><br>
                                    Choose Mindworks Media and Events Pvt. Ltd. for a partnership that transforms your vision into reality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ about-section-2 -->
        <section class="about-section-2 pb-80">
            <div class="container">
                <div class="row">
                    <div class="about-box col-lg-6 mb-4">
                        <h3 class="title"><i class="fa-regular fa-chevrons-right" style="color: var(--pb-color-theme-primary)"></i>Strategic Designs</h3>
                        <p>Our team at Mindworks Media and Events Pvt. Ltd. creates visually stunning designs that captivate your audience and reinforce your brand's identity and messaging.
                            As a leading creative digital agency, we offer comprehensive digital agency services. From sleek logos to detailed brand guidelines, every design element reflects your business's essence, ensuring your brand stands out in the digital landscape.
                            Whether you need the expertise of a marketing digital agency or a content marketing agency, our strategic designs are tailored to elevate your brand.</p>
                    </div>
                    <div class="about-box col-lg-6 mb-4">
                        <h3 class="title"><i class="fa-regular fa-chevrons-right" style="color: var(--pb-color-theme-primary)"></i>Creative Campaigns</h3>
                        <p>At Mindworks Media and Events Pvt. Ltd., we conceptualize and execute engaging campaigns that tell your brand's story in a compelling and authentic way.
                            As a digital marketing agency and content marketing agency, we leverage a mix of storytelling, visual content, and interactive experiences to drive meaningful engagement and inspire action. Our social media marketing agency expertise ensures that your campaigns resonate with your audience and deliver impactful results.</p>
                    </div>
                    <div class="about-box col-lg-6 mb-4">
                        <h3 class="title"><i class="fa-regular fa-chevrons-right" style="color: var(--pb-color-theme-primary)"></i>Effective Solutions</h3>
                        <p>At Mindworks Media and Events Pvt. Ltd., we provide comprehensive and results-driven strategies to address your business challenges and capitalize on opportunities for growth.
                            As a leading digital marketing agency and online marketing agency, we offer meticulous analysis and strategic planning.
                                Our SEO agency and content marketing agency expertise allow us to identify the most effective tactics and implement solutions that yield measurable results, ensuring your business thrives in the digital landscape.</p>
                    </div>
                    <div class="about-box col-lg-6 mb-4">
                        <h3 class="title"><i class="fa-regular fa-chevrons-right" style="color: var(--pb-color-theme-primary)"></i>Innovative Strategies</h3>
                        <p>At Mindworks Media and Events Pvt. Ltd., we stay ahead of the curve by developing innovative strategies that keep your business agile and adaptable in today's rapidly evolving market landscape.
                            As a marketing digital agency and creative digital agency, we harness emerging technologies and explore new channels and opportunities.
                            Our expertise as a digital marketing agency and internet marketing agency ensures we're always exploring new frontiers to drive your business forward.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-section-2 overflow-hidden pt-20">
            <div class="container">
                <div class="section-heading sub-heading-color heading-3 text-center">
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms" style="">
                        Join Us on a Journey to Transform Your Business with Our Leading <span>Digital Agency</span> Services</h2>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        @include('layouts.footer')
    </body>
</html>
