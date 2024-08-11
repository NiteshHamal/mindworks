
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

        <section class="contact-section bg-grey pt-120 pb-120">
            <div class="container">
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <h2 class="title">Get In Touch</h2>
                            <p>Real estate is a lucrative industry that involves the buying selling and renting properties It encompasses residential commercial and help industrial properties. Real estate agentsial</p>
                            <div class="contact-box">
                                <ul class="contact-list">
                                    <li><i class="fa-solid fa-phone"></i><a href="tel:+9779851014752">(+977) 9851014752</a></li>
                                    <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@mindworksme.com">info@mindworksme.com</a></li>
                                    <li><i class="fa-solid fa-clock"></i><span>Mon-Fri : 9AM-6PM</span></li>
                                    <li><i class="fa-solid fa-location-dot"></i><span>Kupondole, Lalitpur, Nepal</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="request-form">
                                {{-- <form action="{{url('contact-us')}}" method="post" id="ajax_contact" class="form-horizontal">
                                    @csrf
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
                                            <!-- Add the multiple class here -->
                                            <div class="nice-select select-control form-control country multiple" tabindex="0">
                                                <span class="current">Select the Services..</span>
                                                <ul class="list">
                                                    <li class="option">Social Media Marketing</li>
                                                    <li class="option">Search Engine Optimization</li>
                                                    <li class="option">Company Branding</li>
                                                    <li class="option">Graphic Designing</li>
                                                    <li class="option">Content Writing</li>
                                                    <li class="option">Web Development</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-btn text-center">
                                        <button id="submit" class="pb-primary-btn" type="submit">Send a message</button>
                                    </div>
                                </form> --}}
                                <form action="{{url('contact-us')}}" method="post" id="ajax_contact" class="form-horizontal">
                                    @csrf
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
                                            <!-- Add a hidden input to hold the selected services -->
                                            <input type="hidden" id="selected_services" name="selected_services">
                                            <div class="nice-select select-control form-control country multiple" tabindex="0">
                                                <span class="current">Select the Services..</span>
                                                <select name="services[]" id="services" multiple style="width: 200px;">
                                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                                    <option value="Company Branding">Company Branding</option>
                                                    <option value="Graphic Designing">Graphic Designing</option>
                                                    <option value="Content Writing">Content Writing</option>
                                                    <option value="Web Development">Web Development</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea id="message" name="contact_message" cols="30" rows="5" class="form-control address" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-btn text-center">
                                        <button id="submit" class="pb-primary-btn" type="submit">Send a message</button>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        @include('layouts.footer')


        {{-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                const currentElement = document.querySelector('.nice-select .current');

                let isDown = false;
                let startX;
                let scrollLeft;

                currentElement.addEventListener('mousedown', (e) => {
                    isDown = true;
                    currentElement.classList.add('active');
                    startX = e.pageX - currentElement.offsetLeft;
                    scrollLeft = currentElement.scrollLeft;
                });

                currentElement.addEventListener('mouseleave', () => {
                    isDown = false;
                    currentElement.classList.remove('active');
                });

                currentElement.addEventListener('mouseup', () => {
                    isDown = false;
                    currentElement.classList.remove('active');
                });

                currentElement.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - currentElement.offsetLeft;
                    const walk = (x - startX) * 3; //scroll-fast
                    currentElement.scrollLeft = scrollLeft - walk;
                });
            });

        </script> --}}
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const selectedOptions = Array.from(document.getElementById('services').selectedOptions)
        .map(option => option.value);

    console.log('Selected Services:', selectedOptions);

    // Proceed with form submission or AJAX request
});

</script>


    </body>
</html>
