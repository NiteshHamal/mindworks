
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
                                <div class="filter-item" data-filter=".webdesign">Web Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="row filter-items justify-content-center gy-lg-4 gy-4">
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/bigmaster1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Bigmaster</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/bigmaster.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">BigMaster</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/rara2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Rara</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/rara1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Rara</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/rara.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Rara</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/tcl3.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">TCL</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/tcl2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">TCL</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/mahindra.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Mahindra</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/agni1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Agni</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/agni.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Agni</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/bio-vodka1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Bio Tech Spirits</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/bio-whiskey.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Bio Tech Spirits</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/chandragiri_hills.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Chandragiri Hills</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/chandragiri_hills1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Chandragiri Hills</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/chandragiri_hills2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Chandragiri Hills</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/delight-cookie.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Delight Cookie</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/electrolux.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Electrolux</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/godrej.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Godrej</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/hetauda-dairy.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Hetauda Dairy</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/lg.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">LG</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/lg1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">LG</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/muktinath_bikash_bank.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Muktinath Bikash Bank</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/muktinath_bikash_bank1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Muktinath Bikash Bank</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/muktinath_bikash_bank2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Muktinath Bikash Bank</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/radio_kantipur.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Radio Kantipur</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/skyworth.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Skyworth</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/tcl.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">TCL</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/tcl1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">TCL</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/top_biscuit.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Pashupati Biscuits</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/ashok-leyland.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Ashok Leyland</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    {{-- < a href="project-details.html" keep image inside> --}}
                                    <img src="{{url('assets/img/bio-vodka.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Bio Tech Spirits</h3>
                                        {{-- <p>Customer satisfaction is crucial for a des amohlodi business as it leads</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/muktinath-bikash-bank.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Muktinath Biksash Bank</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/pillsburry1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Pillsburry</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/pillsburry2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Pillsburry</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/oak-barrel.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Oak Barrel</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/himalayan-danphe.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Himalayan Danphe</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/pure-sunflower-oil.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Pure Sunflower Oil</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/saivee.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Saivee</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item design">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/catmandu.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Catmandu</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/ashok-leyland (1).jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Ashok Leyland</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/asis.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Asis</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/delight-cookies.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Delight Cookies</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/escorts.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Escorts</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/green-ply.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Green Ply</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/livepure.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Livpure</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/mayur_ply.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Mayur Ply</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/pillsbury3.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Pillsburry</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item vfx">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/um.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Um</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/care_nepal.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Care Nepal</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/chandragiri-hills.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Chandragiri Hills</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/radio_on_wheels1.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Radio on Wheels</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/radio_on_wheels2.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Radio on Wheels</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/radio_on_wheels3.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Radio on Wheels</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/radio_on_wheels4.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">Radio on Wheels</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item event">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{url('assets/img/united_cement.jpg')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title">United Cement</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item webdesign">
                            <div class="project-item">
                                <div class="project-thumb">
                                <a href="https://gamalaghar.com/" target="_blank">
                                    <img src="{{url('assets/img/gamalaghar.png')}}" alt="project">
                                    <div class="project-content">
                                        <h3 class="title"><a href="https://gamalaghar.com/" target="_blank">Gamalaghar</a></h3>
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
</html>
