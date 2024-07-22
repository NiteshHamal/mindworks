
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
        <!-- ./ page-header -->

        <section class="project-section-2 overflow-hidden" style="padding-top: 50px; padding-bottom:10px;">
            <div class="container">
                <div class="section-heading sub-heading-color heading-3 text-center">
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms" style=""><span>Personalized</span> Pricing</h2>
                </div>
            </div>
        </section>

        <section class="pricing-section">
            <div class="container">
                <div class="row gy-4">
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
                                <img src="{{url('assets/img/pricing-2.png')}}"alt="icon">
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
        </section>
        <!-- ./ pricing-section -->

        <div class="container-pricingform">
            <div class="headerpricing">
                <div class="section-heading text-center">
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Craft Your Ideal Plan with <span>Custom</span> Solutions!</h2>
                </div>
            </div>
            <div class="main-content">
                <div class="form-content">
                    <div class="form-title">
                        <h2>Customize Your Plan</h2>
                    </div>
                    <form>
                        <div class="checkbox-group">
                            <!-- Checkbox options here -->
                            <label>
                                <input type="checkbox" value="Social Media Marketing">
                                Social Media Marketing
                            </label>
                            <label>
                                <input type="checkbox" value="Company Branding">
                                Company Branding
                            </label>
                            <label>
                                <input type="checkbox" value="Content Writing">
                                Content Writing
                            </label>
                            <label>
                                <input type="checkbox" value="Search Engine Optimization">
                                Search Engine Optimization
                            </label>
                            <label>
                                <input type="checkbox" value="Graphic Designing">
                                Graphic Designing
                            </label>
                            <label>
                                <input type="checkbox" value="Other Digital Services">
                                Other Digital Services
                            </label>
                        </div>
                        <textarea placeholder="If other please specify...."></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="form-image">
                    <img src="{{url('assets/img/request-img.png') }}" alt="Request Image">
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>
