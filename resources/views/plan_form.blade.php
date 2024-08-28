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
    <!-- ./ page-header -->



    <section class="project-section pb-120" style="padding-top: 50px;">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Are Your
                    <span>Sure?</span>
                </h2><br>
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Fill Your Name Email and Phone Number
                    and Press <strong>TAKE THIS PLAN!!</strong></h4>

            </div>
                <div class="request-form">
                    <form action="{{ url('plan-and-price') }}" method="POST" id="ajax_contact" class="form-horizontal">
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
                                <input type="text" id="service" name="service" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" id="type" name="type" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="plan" name="plan" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="submit-btn text-center">
                            <button id="submit" class="pb-primary-btn" type="submit">Take This Plan</button>
                        </div>
                    </form>
                </div>
                <!-- ./ request-section -->

    </section>

    @include('layouts.footer')


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Check if the page is reloaded
            if (performance.getEntriesByType('navigation')[0].type === 'reload') {
                // Redirect to the pricing page
                window.location.href = "{{ url('pricing') }}";
            }

            const formData = JSON.parse(sessionStorage.getItem('formData'));

            if (formData) {
                document.querySelector('input[name="service"]').value = formData.service || '';
                document.querySelector('input[name="type"]').value = formData.type || '';
                document.querySelector('input[name="plan"]').value = formData.plan || '';

                // Optionally clear the data after use
                sessionStorage.removeItem('formData');

            }
        });
    </script>

</body>

</html>
