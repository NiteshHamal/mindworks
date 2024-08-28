<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    <!-- header-area-start -->
    @include('layouts.nav')
    <!-- /.Main Header -->


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

    <section class="contact-section bg-grey pt-120 pb-120">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <h2 class="title">Get In Touch</h2>
                        <p>Real estate is a lucrative industry that involves the buying selling and renting properties
                            It encompasses residential commercial and help industrial properties. Real estate agentsial
                        </p>
                        <div class="contact-box">
                            <ul class="contact-list">
                                <li><i class="fa-solid fa-phone"></i><a href="tel:+9779851014752">(+977) 9851014752</a>
                                </li>
                                <li><i class="fa-solid fa-envelope"></i><a
                                        href="mailto:info@mindworksme.com">info@mindworksme.com</a></li>
                                <li><i class="fa-solid fa-clock"></i><span>Mon-Fri : 9AM-6PM</span></li>
                                <li><i class="fa-solid fa-location-dot"></i><span>Kupondole, Lalitpur, Nepal</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="request-form">
                            <form action="{{ url('contactus') }}" method="post" id="ajax_contact"
                                class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="fullname" name="fullname" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Add the multiple class here -->
                                        <div class="nice-select select-control form-control country multiple"
                                            tabindex="0">
                                            <span class="current">Select the Services..</span>
                                            <ul class="list">
                                                <li class="option">Social Media Marketing</li>
                                                <li class="option">Search Engine Optimization</li>
                                                <li class="option">Company Branding</li>
                                                <li class="option">Web Development</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Hidden input to store the selected services -->
                                    <input type="hidden" id="services" name="services">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="contact_message" cols="30" rows="5" class="form-control address"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn text-center">
                                    <button id="submit" class="pb-primary-btn" type="submit">Send a
                                        messege</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d524.0412785830342!2d85.31957026335881!3d27.68654705507272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1997bcf1739f%3A0x841ecf584e7cff8d!2sMindworks%20-%20Branding%20%7C%20Advertising%20%7C%20Digital%20%7C%20Ad%20films%20%7C%20Creative%20agency!5e0!3m2!1sen!2snp!4v1723785500504!5m2!1sen!2snp"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    @include('layouts.footer')

</body>

</html>
