<footer class="footer-section bg-grey">
    <div class="footer-bg" data-background="{{ url('assets/img/footer-bg.png') }}"></div>
    <div class="container">
        <div class="row footer-wrap pt-120 pb-120">
            <div class="col-lg-5 col-md-6">
                <div class="footer-widget">
                    <div class="site-logo">
                        <a href="{{ url('/') }}">
                            <img class="footer-logo" src="{{ url('assets/img/mindworks-logo-white.webp') }}"
                                alt="logo" loading="lazy">
                        </a>
                    </div>
                    <div class="section-heading heading-2">
                        <h2 class="section-title">Let Us Drive Your Growth With Effective <span>Digital Marketing</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="widget-title">Get In Touch</h3>
                    <p class="desc">
                        Email: info@mindworksme.com<br>
                        Phone: 9851014752<br>
                        Address: Kupondole, Lalitpur, Nepal<br><br>
                        Mon-Fri: 9AM-6PM<br>
                        Sat-Sun: Closed
                    </p>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/mindworksme" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/mindworksnepal/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/mindworks-media-&-events-pvt-ltd/"
                                target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul class="footer-list">
                        @foreach ([
        'About' => 'about',
        'Services' => 'service',
        'Projects' => 'projects',
        'FAQ' => 'faq',
    ] as $label => $url)
                            <li><a href="{{ url($url) }}"><i
                                        class="fa-sharp fa-regular fa-chevron-right"></i>{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <p>&copy; Mindworks 2024 | <span>info@mindworksme.com</span>, All Rights Reserved.</p>
                <ul class="copy-list">
                    <li><a href="{{ url('/terms_and_condition') }}">Terms & Condition</a></li>
                    <li><a href="{{ url('/privacy_policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ./ footer-section -->

<div id="scrollup">
    <button id="scroll-top" class="scroll-to-top"><i class="fa-regular fa-arrow-up-long"></i></button>
</div>
<!--scrollup-->

<!-- JS here -->
<script src="{{ url('assets/js/jquary-3.6.0.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap-bundle.js') }}"></script>
<script src="{{ url('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ url('assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('assets/js/venobox.min.js') }}"></script>
<script src="{{ url('assets/js/odometer.min.js') }}"></script>
<script src="{{ url('assets/js/meanmenu.js') }}"></script>
<script src="{{ url('assets/js/jquery.isotope.js') }}"></script>
<script src="{{ url('assets/js/nice-select.js') }}"></script>
<script src="{{ url('assets/js/easypiechart.min.js') }}"></script>
<script src="{{ url('assets/js/wow.min.js') }}"></script>
<script src="{{ url('assets/js/swiper.min.js') }}"></script>
<script src="{{ url('assets/js/smooth-scroll.js') }}"></script>
<script src="{{ url('assets/js/ajax-form.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>


<!-- Ensure the preloader hides after a slight delay -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.opacity = '0';
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500); // Adjust the delay as needed (500ms here)
            }
        }, 500); // Adjust the delay before hiding (1000ms = 1 second here)
    });
</script>
