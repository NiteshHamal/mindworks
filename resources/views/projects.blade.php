
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
                    <a href="index.html"><img src="{{url('assets/img/5.png')}}" alt="logo"></a>
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
                    <h1 class="title">Project</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span></span><a href="project.html " class="inner-page"> Project</a></h4>
                </div>
            </div>
        </section> --}}
        <!-- ./ page-header -->

        <section class="project-section project-page pb-120" style="padding-top: 50px;">
            <div class="container">
                <div class="gallary-top">
                    <div class="section-heading sub-heading-color heading-3">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Gallery</h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Showcasing Our Creative<span>Excellence</span></h2>
                    </div>
                    <div class="gallary-right">
                        <p class="mb-0">Explore our diverse portfolio, where creativity meets innovation. Discover how we transform ideas into impactful visual experiences across various projects.</p>
                    </div>
                </div>
                <div class="project-filter">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-filter-list text-center">
                                <div class="filter-item" data-filter=".design">Creative Designs</div>
                                <div class="filter-item" data-filter=".vfx">3D & VFX</div>
                                <div class="filter-item" data-filter=".event">Event Management</div>
                            </div>
                        </div>
                    </div>
                    <div class="row filter-items justify-content-center gy-lg-4 gy-4">
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/ashok-leyland.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Ashok Leyland</a></h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/muktinath-bikash-bank.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Muktinath Biksash Bank</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/pillsburry1.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Pillsburry</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/pillsburry2.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Pillsburry</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/oak-barrel.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Oak Barrel</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/himalayan-danphe.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Himalayan Danphe</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/pure-sunflower-oil.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Pure Sunflower Oil</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/saivee.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Saivee</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/catmandu.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Catmandu</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/ashok-leyland (1).jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Ashok Leyland</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/asis.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Asis</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/delight-cookies.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Delight Cookies</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/escorts.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Escorts</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/green-ply.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Green Ply</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/livepure.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Livpure</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/mayur_ply.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Mayur Ply</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/pillsbury3.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Pillsburry</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/um.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Um</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/care_nepal.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Care Nepal</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/chandragiri-hills.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Chandragiri Hills</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/radio_on_wheels1.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Radio on Wheels</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/radio_on_wheels2.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Radio on Wheels</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/radio_on_wheels3.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Radio on Wheels</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/radio_on_wheels4.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">Radio on Wheels</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="{{url('assets/img/united_cement.jpg')}}" alt="project"></a>
                                    <div class="project-content">
                                        <h3 class="title"><a href="project-details.html">United Cement</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        @include('layouts.footer')
</html>
