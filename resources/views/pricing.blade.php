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
    <!-- ./ page-header -->



    <section class="project-section pb-120" style="padding-top: 50px;">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Projects</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Optimizing Brands for Online
                    <span>Success</span>
                </h2>
            </div>
            <div class="project-filter">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-list text-center">
                            <div class="filter-item active" data-filter=".social-media-marketing">Social Media Marketing
                            </div>
                            <div class="filter-item" data-filter=".search-engine-optimization">Search Engine
                                Optimization</div>
                            <div class="filter-item" data-filter=".company-branding">Company Branding</div>
                            <div class="filter-item" data-filter=".webdevelopment">Web Development</div>
                        </div>
                    </div>
                </div>
                <div class="row filter-items justify-content-center gy-lg-0 gy-4">
                    <div class="single-item social-media-marketing ">
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
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan:</span>
                                                    <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>12 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing" data-type="Basic Plan"
                                                        data-plan="NPR.35,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.65,000<span>/mo</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Including
                                                            standard query
                                                            response*</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>20 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1 Video (up to
                                                            15 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing"
                                                        data-type="Standard Plan" data-plan="NPR.65,000/mo"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.125,000<span>/mo</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Including query
                                                            response*
                                                        </li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Detailed
                                                            Development
                                                        </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>25 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>3 GIFs</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 Video (up to
                                                            25 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 3 Sizes
                                                            per graphic
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing" data-type="Premium Plan"
                                                        data-plan="NPR.125,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan
                                                    </a>
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
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan:</span>
                                                    <h3 class="title">NPR.370,000<span>/yr</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>12 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing" data-type="Basic Plan"
                                                        data-plan="NPR.370,000/yr" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.730,000<span>/yr</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Including
                                                            standard query
                                                            response*</li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Basic
                                                            Development</li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>20 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 GIFs</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1 Video (up to
                                                            15 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 10 Sizes
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing"
                                                        data-type="Standard Plan" data-plan="NPR.730,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,450,000<span>/yr</span></h3>
                                                    <p>Social Media Handling:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Facebook</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Instagram</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Youtube</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Including query
                                                            response*
                                                        </li>
                                                    </ul>
                                                    <p>Promotional Campagin Development:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Once Detailed
                                                            Development
                                                        </li>
                                                    </ul>
                                                    <p>Content Deliverables:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>25 Graphic
                                                            Deisgns</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>3 GIFs</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 Video (up to
                                                            25 sec.)
                                                        </li>
                                                    </ul>
                                                    <p>Adaptations:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Up to 3 Sizes
                                                            per graphic
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Social Media Marketing" data-type="Premium Plan"
                                                        data-plan="NPR.1,450,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
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
                                        data-bs-target="#seo-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#seo-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="seo-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.35,000<span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 15
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>URL and Image
                                                            Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 Blog Article
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Few Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Site
                                                            Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Link
                                                            Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Basic Plan" data-plan="NPR.35,000/mo"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.55,000<span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 30
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Meta Tag, URL,
                                                            and Image Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>4 Blog Articles
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site and Page
                                                            Speed Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>High Authority
                                                            Link Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Standard Plan" data-plan="NPR.55,000/mo"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.80,000<span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 60
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis and Backlink Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Meta Tag, URL,
                                                            and Image Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>8 Blog Articles
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Full Technical
                                                            SEO Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>High Authority
                                                            Link Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Premium Plan" data-plan="NPR.80,000/mo"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="seo-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.240,000<span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 15
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>URL and Image
                                                            Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>2 Blog Article
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Few Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Site
                                                            Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Link
                                                            Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Basic Plan" data-plan="NPR.240,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.480,000<span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 30
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Meta Tag, URL,
                                                            and Image Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>4 Blog Articles
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site and Page
                                                            Speed Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>High Authority
                                                            Link Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Standard Plan" data-plan="NPR.480,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.780,000<span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Ranking Upto 60
                                                            Keywords</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Site Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Competitor
                                                            Analysis and Backlink Analysis</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Meta Tag, URL,
                                                            and Image Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>8 Blog Articles
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Existing
                                                            Content Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Full Technical
                                                            SEO Optimization</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>High Authority
                                                            Link Building</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Search Engine Optimization"
                                                        data-type="Premium Plan" data-plan="NPR.780,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
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
                                        data-bs-target="#branding-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Monthly</button>
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
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Discovery
                                                            Session</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Brand
                                                            Audit</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (2
                                                            concepts, 2
                                                            revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Color Palette
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Typography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Style
                                                            Guide (logo
                                                            usage, colors, typography)</li>
                                                    </ul>
                                                    <p>Stationary Design:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Business card,
                                                            Letterhead,
                                                            Envelope</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Kit (2
                                                            platforms)</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Basic Plan"
                                                        data-plan="NPR.50,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.70,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Comprehensive
                                                            Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brand
                                                            Positioning Statement
                                                        </li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (3
                                                            concepts, 3
                                                            revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Expanded Color
                                                            Palette and
                                                            Typography</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Iconography
                                                        </li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Comprehensive
                                                            Style Guide
                                                            (logo, colors, typography, visuals)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Business card
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Letterhead</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Envelope</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brochure or
                                                            Flyer</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Kit (3
                                                            platforms)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Website
                                                            Branding Elements
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Standard Plan"
                                                        data-plan="NPR.70,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.100,000<span>/mo</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>In-depth Audit
                                                            and strategy
                                                            development</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brand
                                                            positioning and
                                                            messaging framework</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Customer
                                                            Personas
                                                            development</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (5
                                                            concepts,
                                                            Unlimited revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Complete Visual
                                                            Language
                                                            (color paletts, typography, iconography, imagery)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom
                                                            illustrations or
                                                            graphics</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Extensive Style
                                                            Guide
                                                            (voice, tone, visual style, application examples)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Complete suite
                                                            of business
                                                            stationery</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Multiple
                                                            marketing
                                                            collateral pieces (brochures, flyers, posters)</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Premium Plan"
                                                        data-plan="NPR.100,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
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
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Discovery
                                                            Session</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Brand
                                                            Audit</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (2
                                                            concepts, 2
                                                            revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Color Palette
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Typography</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Style
                                                            Guide (logo
                                                            usage, colors, typography)</li>
                                                    </ul>
                                                    <p>Stationary Design:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Business card,
                                                            Letterhead,
                                                            Envelope</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Kit (2
                                                            platforms)</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Basic Plan"
                                                        data-plan="NPR.550,000/yr" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.790,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Comprehensive
                                                            Audit</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brand
                                                            Positioning Statement
                                                        </li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (3
                                                            concepts, 3
                                                            revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Expanded Color
                                                            Palette and
                                                            Typography</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Iconography
                                                        </li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Comprehensive
                                                            Style Guide
                                                            (logo, colors, typography, visuals)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Business card
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Letterhead</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Envelope</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brochure or
                                                            Flyer</li>
                                                    </ul>
                                                    <p>Digital Presence:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Kit (3
                                                            platforms)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Website
                                                            Branding Elements
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Standard Plan"
                                                        data-plan="NPR.790,000/yr" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,150,000<span>/yr</span></h3>
                                                    <p>Brand Strategy:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>In-depth Audit
                                                            and strategy
                                                            development</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Brand
                                                            positioning and
                                                            messaging framework</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Customer
                                                            Personas
                                                            development</li>
                                                    </ul>
                                                    <p>Visual Identity:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Logo Design (5
                                                            concepts,
                                                            Unlimited revisions)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Complete Visual
                                                            Language
                                                            (color paletts, typography, iconography, imagery)</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom
                                                            illustrations or
                                                            graphics</li>
                                                    </ul>
                                                    <p>Brand Guidelines:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Extensive Style
                                                            Guide
                                                            (voice, tone, visual style, application examples)</li>
                                                    </ul>
                                                    <p>Stationary and Collateral:</p>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Complete suite
                                                            of business
                                                            stationery</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Multiple
                                                            marketing
                                                            collateral pieces (brochures, flyers, posters)</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Company Branding" data-type="Premium Plan"
                                                        data-plan="NPR.1,150,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
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
                                        data-bs-target="#other-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Montly</button>
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
                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.50,000<span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Responsive
                                                            Design</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Domain
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Contact From
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Integration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Google Maps
                                                            Intergration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Analytics
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Content
                                                            Management System
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Blog
                                                            Setup</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic
                                                            Accessibility
                                                            Features</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-month Basic
                                                            Hosting Plan
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>SSL Certificate
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Basic Plan"
                                                        data-plan="NPR.50,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.100,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Everything in
                                                            the Basic
                                                            Package</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>CMS Integration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Analytics Setup
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Blog Setup</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>E-commerce
                                                            Capability</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Enhanced
                                                            Security</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Newsletter
                                                            Integration</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Forms
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Training
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Testimonials
                                                            and Reviews
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Portfolio
                                                            Showcase</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-month
                                                            Standard Hosting
                                                            plan</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Standard Plan"
                                                        data-plan="NPR.100,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.150,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Everything in
                                                            the Standard
                                                            Package</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Design
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced
                                                            E-commerce</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Multi-language
                                                            Support</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced
                                                            Analytics</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Third-party
                                                            Integrations
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Content
                                                            Creation</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-month Premium
                                                            Hosting
                                                            Plan</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced Custom
                                                            Fonts</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Video Gallery
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>API Development
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Performance
                                                            Optimization
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Backup and
                                                            Recovery</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Premium Plan"
                                                        data-plan="NPR.150,000/mo" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="other-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row gy-lg-0 gy-4 justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">

                                                <div class="pricing-content">
                                                    <span class="sub-title">Basic Plan</span>
                                                    <h3 class="title">NPR.550,000<span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Responsive
                                                            Design</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Domain
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Contact From
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Social Media
                                                            Integration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Google Maps
                                                            Intergration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Analytics
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Content
                                                            Management System
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Blog
                                                            Setup</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic
                                                            Accessibility
                                                            Features</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-year Basic
                                                            Hosting Plan
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>SSL Certificate
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Basic Plan"
                                                        data-plan="NPR.550,000/yr" onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item active">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Standard Plan</span>
                                                    <h3 class="title">NPR.1,150,000 <span>/yr</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Everything in
                                                            the Basic
                                                            Package</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>CMS Integration
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Analytics Setup
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Blog Setup</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>E-commerce
                                                            Capability</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Enhanced
                                                            Security</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Newsletter
                                                            Integration</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Forms
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Basic Training
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Testimonials
                                                            and Reviews
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Portfolio
                                                            Showcase</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-year Standard
                                                            Hosting
                                                            plan</li>
                                                    </ul>

                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Standard Plan"
                                                        data-plan="NPR.1,150,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="pricing-item">
                                                <div class="pricing-content">
                                                    <span class="sub-title">Premium Plan</span>
                                                    <h3 class="title">NPR.1,700,000 <span>/mo</span></h3>
                                                    <ul class="pricing-list">
                                                        <li><i class="fa-solid fa-circle-small"></i>Everything in
                                                            the Standard
                                                            Package</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Custom Design
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced
                                                            E-commerce</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Multi-language
                                                            Support</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced
                                                            Analytics</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Third-party
                                                            Integrations
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Content
                                                            Creation</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>1-month Premium
                                                            Hosting
                                                            Plan</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Advanced Custom
                                                            Fonts</li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Video Gallery
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>API Development
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Performance
                                                            Optimization
                                                        </li>
                                                        <li><i class="fa-solid fa-circle-small"></i>Backup and
                                                            Recovery</li>
                                                    </ul>
                                                    <a href="{{ url('form') }}" class="pricing-btn"
                                                        data-service="Web Development" data-type="Premium Plan"
                                                        data-plan="NPR.1,700,000/yr"
                                                        onclick="storePlanData(this)">Take
                                                        My Plan</a>
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
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var selectedFilter = localStorage.getItem('isotopeFilter') || '.social-media-marketing';

        // Remove 'active' class from all filter items
        $(".project-filter-list .filter-item").removeClass("active");

        // Add 'active' class to the item matching the selected filter
        $(".project-filter-list .filter-item[data-filter='" + selectedFilter + "']").addClass("active");

        var $grid = $(".filter-items").imagesLoaded(function() {
            // Initialize Isotope with the stored filter or default
            $grid.isotope({
                itemSelector: ".single-item",
                percentPosition: true,
                filter: selectedFilter,
            });

            // Handle filter item clicks
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

            // Optionally, clear the local storage after applying the filter
            localStorage.removeItem('isotopeFilter');
        });
    });
</script>

<script>
    function storePlanData(button) {
        const service = button.getAttribute('data-service');
        const type = button.getAttribute('data-type');
        const plan = button.getAttribute('data-plan');

        const formData = {
            service: service,
            type: type,
            plan: plan
        };

        // Store data in sessionStorage
        sessionStorage.setItem('formData', JSON.stringify(formData));
    }
</script>

</body>

</html>
