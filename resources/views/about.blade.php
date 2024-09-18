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

    <div class="about-section-2 pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img-wrap wow slide-in-left" data-wow-delay="300ms">
                        <div class="about-img-item">
                            <div class="shape"><img src="{{ url('assets/img/about-item-shape.png') }}" alt="about">
                            </div>
                            <div class="about-counter">
                                <div class="icon"><img src="{{ url('assets/img/about-icon-2.png') }}" alt="icon">
                                </div>
                                <div class="counter-content">
                                    <h3 class="title"><span class="odometer" data-count="4">0</span>K+</h3>
                                    <p>Happy Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-img-item">
                            <div class="item-img">
                                <div class="bg-shape top"></div>
                                <img src="{{ url('assets/img/about-item-img-1.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="about-img-item">
                            <div class="item-img">
                                <div class="bg-shape bottom"></div>
                                <img src="{{ url('assets/img/about-item-img-2.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="about-img-item chart">
                            <div class="item-chart-wrap">
                                <div class="item-chart">
                                    <div class="piechart" data-bar-color="#FE9D51" data-percent="65"><span>65</span>%
                                    </div>
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
                            <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Empowering Your Business
                                Growth with Innovative <span>Digital Strategies</span></h2>
                            <p class="wow fade-in-right" data-wow-delay="500ms">
                                At Mindworks Media and Event Pvt. We propel businesses forward with marketing solutions
                                tailored to your unique needs. With 10+ years of Experience in Marketing, we offer
                                customized marketing and creative solutions that help companies thrive in this
                                competitive environment.<br><br>
                                As Nepal’s leading digital marketing agency, Mindworks excels in social media marketing,
                                content marketing, SEO, advertising, and all marketing-related services.<br><br>
                                Partner with Mindworks and transform your vision into reality.
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
                    <h3 class="title"><i class="fa-regular fa-chevrons-right"
                            style="color: var(--pb-color-theme-primary)"></i>Strategic Designs</h3>
                    <p>Our team at Mindworks Media and Events Pvt. Ltd. Crafts visually captivating designs that
                        reinforce the brand's identity and messaging.
                        From sleek logos to comprehensive brand guidelines, every design element reflects your
                        business's essence, ensuring your brand shines in the digital landscape.
                        Our strategic designs are tailored to elevate your brand through our strategic marketing
                        approach and content expertise.</p>
                </div>
                <div class="about-box col-lg-6 mb-4">
                    <h3 class="title"><i class="fa-regular fa-chevrons-right"
                            style="color: var(--pb-color-theme-primary)"></i>Creative Campaigns</h3>
                    <p>At Mindworks Media and Events Pvt. Ltd., we craft campaigns that tell your brand's story that
                        drive engagement and inspire action.
                        By blending storytelling, visual content, and interactive experiences, we ensure your campaigns
                        resonate deeply with your audience while delivering impactful results across all marketing
                        channels.</p>
                </div>
                <div class="about-box col-lg-6 mb-4">
                    <h3 class="title"><i class="fa-regular fa-chevrons-right"
                            style="color: var(--pb-color-theme-primary)"></i>Effective Solutions</h3>
                    <p>At Mindworks Media and Events Pvt. Ltd., we deliver results-driven strategies to tackle your
                        business challenges and seize growth opportunities.
                        Through detailed analysis and strategic planning, we implement effective solutions that yield
                        measurable results, ensuring your business thrives in the digital landscape.</p>
                </div>
                <div class="about-box col-lg-6 mb-4">
                    <h3 class="title"><i class="fa-regular fa-chevrons-right"
                            style="color: var(--pb-color-theme-primary)"></i>Innovative Strategies</h3>
                    <p>At Mindworks Media and Events Pvt. Ltd., we keep your business agile and adaptable by developing
                        innovative strategies that stay ahead of market trends.
                        By leveraging emerging technologies and exploring new opportunities, we consistently drive your
                        business forward ensuring you remain ahead of the competition in an evolving landscape. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section-2 overflow-hidden pt-20">
        <div class="container">
            <div class="section-heading sub-heading-color heading-3 text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms" style="">
                    Join Us on a Journey to Transform Your Business with Our Leading <span>Digital Agency</span>
                    Services</h2>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    @include('layouts.footer')
</body>

</html>
