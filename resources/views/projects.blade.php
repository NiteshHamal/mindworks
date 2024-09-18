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

    <section class="project-section project-page pb-120" style="padding-top: 50px;">
        <div class="container">
            <div class="gallary-top">
                <div class="section-heading sub-heading-color heading-3">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Gallery</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Showcasing Our Creative
                        <span>Excellence</span></h2>
                </div>
                <div class="gallary-right">
                    <p class="mb-0">Explore our diverse portfolio, where creativity meets innovation. Discover how we
                        transform ideas into impactful visual experiences across various projects.</p>
                </div>
            </div>
            <div class="project-filter">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-list text-center">
                            <div class="filter-item" data-filter=".design">Creative Designs</div>
                            <div class="filter-item" data-filter=".vfx">3D & VFX</div>
                            <div class="filter-item" data-filter=".event">Event Management</div>
                            <div class="filter-item" data-filter=".webdesign">Web Design</div>
                        </div>
                    </div>
                </div>
                <div class="row filter-items justify-content-center gy-lg-4 gy-4">
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/godrej.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/tcl3.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/tcl2.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/mahindra.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/agni1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/agni.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/lg.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/lg1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/skyworth.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/tcl.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/tcl1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/bigmaster1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/bigmaster.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/rara2.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/rara1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/rara.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/bio-vodka1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/bio-whiskey.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/chandragiri_hills.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/chandragiri_hills1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/chandragiri_hills2.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/delight-cookie.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/electrolux.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/hetauda-dairy.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/muktinath_bikash_bank.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/muktinath_bikash_bank1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/muktinath_bikash_bank2.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/radio_kantipur.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/top_biscuit.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/ashok-leyland.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/bio-vodka.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/muktinath-bikash-bank.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/pillsburry1.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/pillsburry2.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/oak-barrel.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/himalayan-danphe.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/pure-sunflower-oil.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/saivee.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/catmandu.webp') }}" alt="project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/ashok-leyland (1).webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/asis.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/delight-cookies.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/escorts.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/green-ply.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/livepure.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/mayur_ply.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/pillsbury3.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item vfx">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/um.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/care_nepal.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/chandragiri-hills.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/radio_on_wheels1.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/radio_on_wheels2.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/radio_on_wheels3.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/radio_on_wheels4.webp') }}" alt="project"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item event">
                        <div class="project-item">
                            <div class="project-thumb">
                                <img src="{{ url('assets/img/united_cement.webp') }}" alt="project" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item webdesign">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="https://gamalaghar.com/" target="_blank">
                                    <img src="{{ url('assets/img/gamalaghar.webp') }}" alt="project"
                                        loading="lazy">
                                    <div class="project-content">
                                        <h3 class="title"><a href="https://gamalaghar.com/"
                                                target="_blank">Gamalaghar</a></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Isotope
            var $grid = $(".filter-items").imagesLoaded(function() {
                // Initialize Isotope with the initial filter
                $grid.isotope({
                    itemSelector: ".single-item",
                    percentPosition: true,
                    filter: ".design", // Set the initial filter to the first category
                });

                // Add isotope click function
                $(".project-filter-list .filter-item").on("click", function() {
                    $(".project-filter-list .filter-item").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $grid.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: "linear",
                            queue: false,
                        },
                    });
                    return false;
                });

                // Set the initial active class on the first filter item
                $(".project-filter-list .filter-item").first().addClass("active");
            });
        });
    </script>
</body>

</html>
