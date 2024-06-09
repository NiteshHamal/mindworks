
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
                    <h1 class="title">Pricing</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="pricing.html" class="inner-page"> Pricing</a></h4>
                </div>
            </div>
        </section> --}}
        <!-- ./ page-header -->

        <section class="project-section-2 overflow-hidden" style="padding-top: 50px; padding-bottom:50px;">
            <div class="container">
                <div class="section-heading sub-heading-color heading-3 text-center">
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms" style=""><span>Personalized</span> Pricing Just for You</h2>
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
