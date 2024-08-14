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
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Optimizing Brands for Online
                    <span>Success</span></h2>
            </div>
            <div class="project-filter">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-list text-center">
                            <div class="filter-item active" data-filter=".social-media-marketing">Social Media Marketing</div>
                            <div class="filter-item" data-filter=".search-engine-optimization ">Search Engine Optimization</div>
                            <div class="filter-item" data-filter=".company-branding">Company Branding</div>
                            <div class="filter-item" data-filter=".webdevelopment">Web Development</div>
                        </div>
                    </div>
                </div>
                <div class="row filter-items justify-content-center gy-lg-0 gy-4">
                    <div class="single-item social-media-marketing " >
                            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#smm-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">Monthly</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#smm-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="smm-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row gy-lg-0 gy-4 justify-content-center">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Basic Plan:</span>
                                                        <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                                        <p>Social Media Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                                Development</li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item active">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Advance Plan</span>
                                                        <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                                        <p>Social Meida Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>including
                                                                standard query
                                                                response*</li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                                Development</li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to
                                                                15 sec.)
                                                            </li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Premium Plan</span>
                                                        <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                                        <p>Social Meida Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>including query
                                                                response*
                                                            </li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed
                                                                Development
                                                            </li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to
                                                                25 sec.)
                                                            </li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes
                                                                per grahic
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smm-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row gy-lg-0 gy-4 justify-content-center">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Basic Plan:</span>
                                                        <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                                        <p>Social Media Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                                Development</li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item active">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Advance Plan</span>
                                                        <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                                        <p>Social Meida Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>including
                                                                standard query
                                                                response*</li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                                Development</li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to
                                                                15 sec.)
                                                            </li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="pricing-item">
                                                    <div class="pricing-icon">
                                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                    </div>
                                                    <div class="pricing-content">
                                                        <span class="sub-title">Premium Plan</span>
                                                        <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                                        <p>Social Meida Handling:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>including query
                                                                response*
                                                            </li>
                                                        </ul>
                                                        <p>Promotional Campagin Development:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed
                                                                Development
                                                            </li>
                                                        </ul>
                                                        <p>Content Deliverables:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic
                                                                Deisgns</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                            <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to
                                                                25 sec.)
                                                            </li>
                                                        </ul>
                                                        <p>Adaptations:</p>
                                                        <ul class="pricing-list">
                                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes
                                                                per grahic
                                                            </li>
                                                        </ul>
                                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="single-item search-engine-optimization ">
                        <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#seo-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#seo-profile" type="button" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="seo-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.45,000<span>/mo</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                            analysis (up to 15 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            15 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                            recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                            optimization</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                            analysis (up to 15 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            15 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                            recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                            optimization</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.75,000<span>/mo</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                            research and analysis (up to 25 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            20 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advance Technical SEO audit
                                                            and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content gap analysis and
                                                            suggestions</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Off-page SEO </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>SEO to improve online
                                                            presence </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>8 SEO-optimization blog
                                                            posts/articles (up to 1500 words each)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>20 meta link and
                                                            description optimizations</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.150,000<span>/mo</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                            research and analysis (up to 40 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>On-Page Optimization (up to
                                                            40 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Technical SEO
                                                            audit and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content strategy
                                                            development and implementation</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Off-page SEO </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Conversion Rate
                                                            Optimization </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>12 SEO-optimization blog
                                                            posts/articles (up to 1800 words each)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>300 meta link and
                                                            description optimizations</li>
                                                    </ul>
                                                    <p>Monthly Reporting:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Detailed performance report
                                                            with actionable insights and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Competitor analysis and
                                                            adjustments</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced analytics setup
                                                            and reporting</li>
                                                    </ul>
                                                    <p>Additional Features:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Rank optimization for 15+
                                                            primary keywords</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Monthly strategy sessions
                                                            with an SEO expert</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="seo-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.490,000<span>/yr</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                            analysis (up to 15 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            15 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                            recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                            optimization</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                            analysis (up to 15 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            15 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                            recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                            optimization</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.850,000<span>/yr</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                            research and analysis (up to 25 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                            20 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advance Technical SEO audit
                                                            and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content gap analysis and
                                                            suggestions</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Off-page SEO </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>SEO to improve online
                                                            presence </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>8 SEO-optimization blog
                                                            posts/articles (up to 1500 words each)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>20 meta link and
                                                            description optimizations</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,750,000<span>/yr</span></h3>
                                                    <p>SEO Services:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                            research and analysis (up to 40 keywords)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>On-Page Optimization (up to
                                                            40 pages)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Technical SEO
                                                            audit and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content strategy
                                                            development and implementation</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Off-page SEO </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Conversion Rate
                                                            Optimization </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>12 SEO-optimization blog
                                                            posts/articles (up to 1800 words each)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>300 meta link and
                                                            description optimizations</li>
                                                    </ul>
                                                    <p>Monthly Reporting:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Detailed performance report
                                                            with actionable insights and recommendations</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Competitor analysis and
                                                            adjustments</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced analytics setup
                                                            and reporting</li>
                                                    </ul>
                                                    <p>Additional Features:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Rank optimization for 15+
                                                            primary keywords</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Monthly strategy sessions
                                                            with an SEO expert</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item company-branding">
                        <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#branding-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#branding-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="branding-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Discovery Session</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Brand Audit</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (2 concepts, 2
                                                            revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Color Palette</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Typography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Style Guide (logo
                                                            usage, colors, typography)</li>
                                                    </ul>
                                                    <p>Stationary Design:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Business card, Letterhead,
                                                            Envelope</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (2
                                                            platforms)</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.70,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Audit</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brand Positioning Statement
                                                        </li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (3 concepts, 3
                                                            revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Expanded Color Palette and
                                                            Typography</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Iconography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Style Guide
                                                            (logo, colors, typography, visuals)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Business card</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Letterhead</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Envelope</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brochure or Flyer</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (3
                                                            platforms)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Website Branding Elements
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.100,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>In-depth Audit and strategy
                                                            development</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brand positioning and
                                                            messaging framework</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Customer Personas
                                                            development</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (5 concepts,
                                                            Unlimited revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Complete Visual Language
                                                            (color paletts, typography, iconography, imagery)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom illustrations or
                                                            graphics</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Extensive Style Guide
                                                            (voice, tone, visual style, application examples)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Complete suite of business
                                                            stationery</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Multiple marketing
                                                            collateral pieces (brochures, flyers, posters)</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="branding-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Discovery Session</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Brand Audit</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (2 concepts, 2
                                                            revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Color Palette</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Typography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Style Guide (logo
                                                            usage, colors, typography)</li>
                                                    </ul>
                                                    <p>Stationary Design:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Business card, Letterhead,
                                                            Envelope</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (2
                                                            platforms)</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.790,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Audit</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brand Positioning Statement
                                                        </li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (3 concepts, 3
                                                            revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Expanded Color Palette and
                                                            Typography</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Iconography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Style Guide
                                                            (logo, colors, typography, visuals)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Business card</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Letterhead</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Envelope</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brochure or Flyer</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (3
                                                            platforms)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Website Branding Elements
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,150,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>In-depth Audit and strategy
                                                            development</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Brand positioning and
                                                            messaging framework</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Customer Personas
                                                            development</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (5 concepts,
                                                            Unlimited revisions)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Complete Visual Language
                                                            (color paletts, typography, iconography, imagery)</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom illustrations or
                                                            graphics</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Extensive Style Guide
                                                            (voice, tone, visual style, application examples)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Complete suite of business
                                                            stationery</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Multiple marketing
                                                            collateral pieces (brochures, flyers, posters)</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item webdevelopment">
                        <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#other-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Montly</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#other-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="other-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Responsive Design</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Domain</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Contact From</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Integration
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Google Maps Intergration
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Analytics</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content Management System
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Blog Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Accessibility
                                                            Features</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-month Basic Hosting Plan
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>SSL Certificate</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.100,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Basic
                                                            Package</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>CMS Integration</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Analytics Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Blog Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>E-commerce Capability</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Enhanced Security</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Newsletter Integration</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Forms</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Training</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Testimonials and Reviews
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Portfolio Showcase</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-month Standard Hosting
                                                            plan</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.150,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Standard
                                                            Package</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Design</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced E-commerce</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Multi-language Support</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Analytics</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Third-party Integrations
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content Creation</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-month Premium Hosting
                                                            Plan</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Custom Fonts</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Video Gallery</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>API Development</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Performance Optimization
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Backup and Recovery</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="other-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Responsive Design</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Domain</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Contact From</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Social Media Integration
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Google Maps Intergration
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Analytics</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content Management System
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Blog Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Accessibility
                                                            Features</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-year Basic Hosting Plan
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>SSL Certificate</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.1,150,000 <span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Basic
                                                            Package</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>CMS Integration</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Analytics Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Blog Setup</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>E-commerce Capability</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Enhanced Security</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Newsletter Integration</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Forms</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Basic Training</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Testimonials and Reviews
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Portfolio Showcase</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-year Standard Hosting
                                                            plan</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,700,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Standard
                                                            Package</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Custom Design</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced E-commerce</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Multi-language Support</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Analytics</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Third-party Integrations
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Content Creation</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1-month Premium Hosting
                                                            Plan</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Advanced Custom Fonts</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Video Gallery</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>API Development</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Performance Optimization
                                                        </li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Backup and Recovery</li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->





    {{-- <section class="project-section project-page pb-120" style="padding-top: 50px;">
        <div class="container">
            <div class="gallary-top">
                <div class="section-heading sub-heading-color heading-3">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Tailored Solutions, Transparent
                        <span>Pricing</span>
                    </h2>
                </div>
                <div class="gallary-right">
                    <p class="mb-0">Choose from our carefully crafted packages, designed to meet your needs and
                        budget. Experience quality, reliability, and value with every plan we offer.</p>
                </div>
            </div>
            <div class="project-filter">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-list text-center">
                            <div class="filter-item" data-filter=".marketing">Social Media Marketing</div>
                            <div class="filter-item" data-filter=".seo">Search Engine Optimization</div>
                            <div class="filter-item" data-filter=".branding">Company Branding</div>
                            <div class="filter-item" data-filter=".webdevelopment">Web Development</div>
                        </div>
                    </div>
                </div>

                <div class="row filter-items justify-content-center gy-lg-4 gy-4">
                    <div class="single-item marketing">
                        <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#smm-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#smm-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="smm-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan:</span>
                                                    <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Advance Plan</span>
                                                    <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                                    <p>Social Meida Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>including
                                                            standard query
                                                            response*</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to
                                                            15 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                                    <p>Social Meida Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>including query
                                                            response*
                                                        </li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed
                                                            Development
                                                        </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to
                                                            25 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes
                                                            per grahic
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="smm-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan:</span>
                                                    <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Advance Plan</span>
                                                    <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                                    <p>Social Meida Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>including
                                                            standard query
                                                            response*</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to
                                                            15 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-icon">
                                                    <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                                </div>
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                                    <p>Social Meida Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>including query
                                                            response*
                                                        </li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed
                                                            Development
                                                        </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                                        <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to
                                                            25 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes
                                                            per grahic
                                                        </li>
                                                    </ul>
                                                    <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="pricing-section pb-50 pt-50 overflow-hidden" id="social-media-marketing">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Social Media <span>Marketing</span>
                </h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#smm-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Monthly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#smm-profile"
                            type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Yearly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="smm-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan:</span>
                                        <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Advance Plan</span>
                                        <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                        <p>Social Meida Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>including standard query
                                                response*</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to 15 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                        <p>Social Meida Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>including query response*
                                            </li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed Development
                                            </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to 25 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes per grahic
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="smm-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan:</span>
                                        <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                        <p>Social Media Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>12 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Advance Plan</span>
                                        <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                        <p>Social Meida Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>including standard query
                                                response*</li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Basic Development</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>20 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 GIFs</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1 Video (up to 15 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 10 Sizes</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                        <p>Social Meida Handling:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Facebook</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Instagram</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Youtube</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>including query response*
                                            </li>
                                        </ul>
                                        <p>Promotional Campagin Development:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Once Detailed Development
                                            </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>25 Graphic Deisgns</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>3 GIFs</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>2 Video (up to 25 sec.)
                                            </li>
                                        </ul>
                                        <p>Adaptations:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Up to 3 Sizes per grahic
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ social media marketing pricing-section -->

    <section class="pricing-section pb-50 pt-120 overflow-hidden" id="search-engine-optimization">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Search Engine
                    <span>Optimization</span>
                </h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#seo-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Monthly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#seo-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Yearly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="seo-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.45,000<span>/mo</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                analysis (up to 15 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                15 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                optimization</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                analysis (up to 15 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                15 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                optimization</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.75,000<span>/mo</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                research and analysis (up to 25 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                20 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advance Technical SEO audit
                                                and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content gap analysis and
                                                suggestions</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Off-page SEO </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>SEO to improve online
                                                presence </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>8 SEO-optimization blog
                                                posts/articles (up to 1500 words each)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>20 meta link and
                                                description optimizations</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.150,000<span>/mo</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                research and analysis (up to 40 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>On-Page Optimization (up to
                                                40 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Technical SEO
                                                audit and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content strategy
                                                development and implementation</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Off-page SEO </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Conversion Rate
                                                Optimization </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>12 SEO-optimization blog
                                                posts/articles (up to 1800 words each)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>300 meta link and
                                                description optimizations</li>
                                        </ul>
                                        <p>Monthly Reporting:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Detailed performance report
                                                with actionable insights and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Competitor analysis and
                                                adjustments</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced analytics setup
                                                and reporting</li>
                                        </ul>
                                        <p>Additional Features:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Rank optimization for 15+
                                                primary keywords</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Monthly strategy sessions
                                                with an SEO expert</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="seo-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.490,000<span>/yr</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                analysis (up to 15 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                15 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                optimization</li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Keyword research and
                                                analysis (up to 15 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                15 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic SEO audit and
                                                recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic local SEO
                                                optimization</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.850,000<span>/yr</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                research and analysis (up to 25 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>on-Page Optimization (up to
                                                20 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advance Technical SEO audit
                                                and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content gap analysis and
                                                suggestions</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Off-page SEO </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>SEO to improve online
                                                presence </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>8 SEO-optimization blog
                                                posts/articles (up to 1500 words each)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>20 meta link and
                                                description optimizations</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.1,750,000<span>/yr</span></h3>
                                        <p>SEO Services:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Keyword
                                                research and analysis (up to 40 keywords)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>On-Page Optimization (up to
                                                40 pages)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Technical SEO
                                                audit and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content strategy
                                                development and implementation</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Off-page SEO </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Conversion Rate
                                                Optimization </li>
                                        </ul>
                                        <p>Content Deliverables:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>12 SEO-optimization blog
                                                posts/articles (up to 1800 words each)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>300 meta link and
                                                description optimizations</li>
                                        </ul>
                                        <p>Monthly Reporting:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Detailed performance report
                                                with actionable insights and recommendations</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Competitor analysis and
                                                adjustments</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced analytics setup
                                                and reporting</li>
                                        </ul>
                                        <p>Additional Features:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Rank optimization for 15+
                                                primary keywords</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Monthly strategy sessions
                                                with an SEO expert</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ search engine optimization pricing-section -->

    <section class="pricing-section pb-50 pt-120 overflow-hidden" id="company-branding">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Company <span>Branding</span></h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#branding-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Monthly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#branding-profile" type="button" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Yearly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="branding-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Discovery Session</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Brand Audit</li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (2 concepts, 2
                                                revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Color Palette</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Typography</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Style Guide (logo
                                                usage, colors, typography)</li>
                                        </ul>
                                        <p>Stationary Design:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Business card, Letterhead,
                                                Envelope</li>
                                        </ul>
                                        <p>Digital Presence:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (2
                                                platforms)</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.70,000<span>/mo</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Audit</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brand Positioning Statement
                                            </li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (3 concepts, 3
                                                revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Expanded Color Palette and
                                                Typography</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Iconography</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Style Guide
                                                (logo, colors, typography, visuals)</li>
                                        </ul>
                                        <p>Stationary and Collateral:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Business card</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Letterhead</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Envelope</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brochure or Flyer</li>
                                        </ul>
                                        <p>Digital Presence:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (3
                                                platforms)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Website Branding Elements
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.100,000<span>/mo</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>In-depth Audit and strategy
                                                development</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brand positioning and
                                                messaging framework</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Customer Personas
                                                development</li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (5 concepts,
                                                Unlimited revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Complete Visual Language
                                                (color paletts, typography, iconography, imagery)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom illustrations or
                                                graphics</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Extensive Style Guide
                                                (voice, tone, visual style, application examples)</li>
                                        </ul>
                                        <p>Stationary and Collateral:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Complete suite of business
                                                stationery</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Multiple marketing
                                                collateral pieces (brochures, flyers, posters)</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="branding-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Discovery Session</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Brand Audit</li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (2 concepts, 2
                                                revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Color Palette</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Typography</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Style Guide (logo
                                                usage, colors, typography)</li>
                                        </ul>
                                        <p>Stationary Design:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Business card, Letterhead,
                                                Envelope</li>
                                        </ul>
                                        <p>Digital Presence:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (2
                                                platforms)</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.790,000<span>/yr</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Audit</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brand Positioning Statement
                                            </li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (3 concepts, 3
                                                revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Expanded Color Palette and
                                                Typography</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Iconography</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Comprehensive Style Guide
                                                (logo, colors, typography, visuals)</li>
                                        </ul>
                                        <p>Stationary and Collateral:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Business card</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Letterhead</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Envelope</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brochure or Flyer</li>
                                        </ul>
                                        <p>Digital Presence:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Kit (3
                                                platforms)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Website Branding Elements
                                            </li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.1,150,000<span>/yr</span></h3>
                                        <p>Brand Strategy:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>In-depth Audit and strategy
                                                development</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Brand positioning and
                                                messaging framework</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Customer Personas
                                                development</li>
                                        </ul>
                                        <p>Visual Identity:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Logo Design (5 concepts,
                                                Unlimited revisions)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Complete Visual Language
                                                (color paletts, typography, iconography, imagery)</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom illustrations or
                                                graphics</li>
                                        </ul>
                                        <p>Brand Guidelines:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Extensive Style Guide
                                                (voice, tone, visual style, application examples)</li>
                                        </ul>
                                        <p>Stationary and Collateral:</p>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Complete suite of business
                                                stationery</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Multiple marketing
                                                collateral pieces (brochures, flyers, posters)</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ company branding pricing-section -->

    <section class="pricing-section pb-50 pt-120 overflow-hidden" id="webdevelopment">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Web <span>Development</span></h2>
            </div>
            <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#other-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Montly</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#other-profile" type="button" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Yearly</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="other-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Responsive Design</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Domain</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Contact From</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Integration
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Google Maps Intergration
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Analytics</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content Management System
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Blog Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Accessibility
                                                Features</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-month Basic Hosting Plan
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>SSL Certificate</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.100,000 <span>/mo</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Basic
                                                Package</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>CMS Integration</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Analytics Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Blog Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>E-commerce Capability</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Enhanced Security</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Newsletter Integration</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Forms</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Training</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Testimonials and Reviews
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Portfolio Showcase</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-month Standard Hosting
                                                plan</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.150,000 <span>/mo</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Standard
                                                Package</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Design</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced E-commerce</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Multi-language Support</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Analytics</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Third-party Integrations
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content Creation</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-month Premium Hosting
                                                Plan</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Custom Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Video Gallery</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>API Development</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Performance Optimization
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Backup and Recovery</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="other-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-1.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Basic Plan</span>
                                        <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Responsive Design</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Domain</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Contact From</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Social Media Integration
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Google Maps Intergration
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Analytics</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content Management System
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Blog Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Accessibility
                                                Features</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-year Basic Hosting Plan
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>SSL Certificate</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-2.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Standard Plan</span>
                                        <h3 class="title">NPR.1,150,000 <span>/yr</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Basic
                                                Package</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>CMS Integration</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Analytics Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Blog Setup</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>E-commerce Capability</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Enhanced Security</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Newsletter Integration</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Forms</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Basic Training</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Testimonials and Reviews
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Portfolio Showcase</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-year Standard Hosting
                                                plan</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <img src="{{ url('assets/img/pricing-3.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-content">
                                        <span class="sub-title">Premium Plan</span>
                                        <h3 class="title">NPR.1,700,000 <span>/mo</span></h3>
                                        <ul class="pricing-list">
                                            <li><i class="fa-regular fa-chevrons-right"></i>Everything in the Standard
                                                Package</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Custom Design</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced E-commerce</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Multi-language Support</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Analytics</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Third-party Integrations
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Content Creation</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>1-month Premium Hosting
                                                Plan</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Advanced Custom Fonts</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Video Gallery</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>API Development</li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Performance Optimization
                                            </li>
                                            <li><i class="fa-regular fa-chevrons-right"></i>Backup and Recovery</li>
                                        </ul>
                                        <a href="pricing.html" class="pricing-btn">Take My Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Web Development services pricing-section -->

    <section class="request-section pb-120 pt-120" id="custom-solutions">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="request-content">
                        <div class="section-heading heading-2">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Pricing</h4>
                            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Crast your ideal Plan
                                with <span>Custom</span> Solutions</h2>
                            <p class="wow fade-in-bottom" data-wow-delay="500ms">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt.
                            </p>
                        </div>
                        <div class="request-form">
                            <form action="{{ url('custom-pricing') }}" method="post" id="ajax_contact"
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
                                                <li class="option">Graphic Designing</li>
                                                <li class="option">Content Writing</li>
                                                <li class="option">Web Development</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Hidden input to store the selected services -->
                                    <input type="hidden" id="services" name="services">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address"
                                            placeholder="Message" required=""></textarea>
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
                <div class="col-lg-6">
                    <div class="request-img text-center">
                        <img src="{{ url('assets/img/request-img.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ request-section -->

    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
        // Isotope
        $(".filter-items").imagesLoaded(function() {
            // Initialize Isotope with the initial filter
            var $grid = $(".filter-items").isotope({
                itemSelector: ".single-item",
                percentPosition: true,
                filter: '.project', // Set the initial filter to the first category
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
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Isotope
        var $grid = $(".filter-items").imagesLoaded(function () {
            // Initialize Isotope with the initial filter
            $grid.isotope({
                itemSelector: ".single-item",
                percentPosition: true,
                filter: ".social-media-marketing", // Set the initial filter to the first category
            });

            // Add isotope click function
            $(".project-filter-list .filter-item").on("click", function () {
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

    @include('layouts.footer')
</body>

</html>
