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



    {{-- <div class="feature-section bg-dark-1">
            <div class="container">
                <div class="section-heading heading-4">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Services</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Dominate the <span>Digital</span> Landscape</h2>
                </div>
                <div class="feature-items">
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-1.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Social Media Marketing</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Boost your online presence with targeted campaigns across various social media platforms.</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="500ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-2.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Search Engine Optimization</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-3.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Company Branding</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="col-md-6">
                            <div class="feature-left">
                                <div class="icon">
                                    <img src="{{url('assets/img/feature-4.png')}}" alt="icon">
                                </div>
                                <h3 class="title">Web Development</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet rcus nunc. Duis egestas ac ante sed tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ feature-section --> --}}


        {{-- <div class="feature-section bg-dark-1">
            <div class="container">
                <div class="section-heading heading-4">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Services</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Dominate the <span>Digital</span>
                        Landscape</h2>
                </div>
                <div class="feature-items">
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="400ms"
                        data-feature="1">
                        <div class="col-md-6 feature-left">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-1.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Social Media Marketing</h3>
                        </div>
                        <div class="col-md-6 feature-right">
                            <p class="feature-text">In this digital world, we understand that social media plays a crucial role in communicating the brand's story, creating connections, and driving real engagement. Here at Mindworks we specialize in leveraging the power of social media to help businesses thrive and stay ahead of the competition with a detailed and data-driven approach to social media marketing.</p>
                            <ul>
                                <li>Platform Specific Marketing Strategy</li>
                                <li>Creative Campaign Strategy</li>
                                <li>Paid Advertising</li>
                                <li>In-depth Reporting</li>
                            </ul>
                            <p class="feature-text">Want to Start Your Social Media Marketing Journey?</p>
                            <div class="cta-button">Contact Us</div>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="500ms"
                        data-feature="2">
                        <div class="col-md-6 feature-left">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-2.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Search Engine Optimization</h3>
                        </div>
                        <div class="col-md-6 feature-right">
                            <p class="feature-text">Improve your website's visibility on search engines with our SEO
                                services.</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms"
                        data-feature="3">
                        <div class="col-md-6 feature-left">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-3.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Company Branding</h3>
                        </div>
                        <div class="col-md-6 feature-right">
                            <p class="feature-text">Establish a strong brand identity with our comprehensive branding
                                services.</p>
                        </div>
                    </div>
                    <div class="feature-item row align-items-center wow fade-in-bottom" data-wow-delay="600ms"
                        data-feature="4">
                        <div class="col-md-6 feature-left">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-4.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Web Development</h3>
                        </div>
                        <div class="col-md-6 feature-right">
                            <p class="feature-text">Get a fully functional, modern website with our web development
                                services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="feature-section bg-dark-1">
            <div class="container">
                <div class="section-heading heading-4">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Services</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Dominate the <span>Digital</span> Landscape</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Left Section: Titles with Icons -->
                    <div class="col-md-6 feature-list">
                        <div class="feature-item" data-feature="1">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-1.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Social Media Marketing</h3>
                        </div>
                        <div class="feature-item" data-feature="2">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-2.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Search Engine Optimization</h3>
                        </div>
                        <div class="feature-item" data-feature="3">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-3.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Company Branding</h3>
                        </div>
                        <div class="feature-item" data-feature="4">
                            <div class="icon">
                                <img src="{{ url('assets/img/feature-4.png') }}" alt="icon">
                            </div>
                            <h3 class="title">Web Development</h3>
                        </div>
                    </div>

                    <!-- Right Section: Content -->
                    <div class="col-md-6 feature-content">
                        <div class="feature-content-item" data-feature="1">
                            <h4>Social Media Marketing</h4>
                            <p>In this digital world, we understand that social media plays a crucial role in communicating the brand's story, creating connections, and driving real engagement.
                                Here at Mindworks we specialize in leveraging the power of social media to help businesses thrive and stay ahead of the competition with a detailed and data-driven approach to social media marketing.</p>
                            <ul>
                                <li>Platform Specific Marketing Strategy</li>
                                <li>Creative Campaign Strategy</li>
                                <li>Paid Advertising</li>
                                <li>In-depth Reporting</li>
                            </ul>
                            <p>Want to Start Your Social Media Marketing Journey?</p>
                            <div class="cta-button">Contact Us</div>
                        </div>
                        <div class="feature-content-item" data-feature="2">
                            <h4>Search Engine Optimization</h4>
                            <p>SEO is crucial for businesses that want to establish a strong online presence and here at Mindworks we help businesses unlock their full potential online ensuring your brand appears where it matters – at the top of search results.
                            </p>
                            <ul>
                                <li>SEO Audit</li>
                                <li>Keyword Strategies</li>
                                <li>On-Page & Off Page Optimization</li>
                                <li>Technical SEO</li>
                                <li>Local SEO</li>
                            </ul>
                            <p>Start Your SEO Journey NOW</p>
                            <div class="cta-button">Contact Us</div>
                            <!-- More content... -->
                        </div>
                        <div class="feature-content-item" data-feature="3">
                            <h4>Company Branding</h4>
                            <p>Standing out in this competitive world is very necessary and to do this you need a strong brand identity. At Mindworks, we specialize in company branding that is authentic, memorable, and resonates with the customers creating a lasting impression.
                            </p>
                            <ul>
                                <li>Brand Strategy</li>
                                <li>Brand Auditing</li>
                                <li>Visual Identity</li>
                                <li>Brand Guidelines</li>
                            </ul>
                            <p>Start Your Branding Journey NOW</p>
                            <div class="cta-button">Contact Us</div>
                            <!-- More content... -->
                        </div>
                        <div class="feature-content-item" data-feature="4">
                            <h4>Web Development</h4>
                            <p>At Mindworks we specialize in web development that not only looks beautiful but is seamless and engaging. We build fast, responsible, and optimized websites for your business which can turn visitors into customers.
                            </p>
                            <ul>
                                <li>Tailor Made Websites</li>
                                <li>Responsive Web Design</li>
                                <li>SEO Optimized</li>
                                <li>Performance Focused</li>
                            </ul>
                            <p>Start Website Development for Your Business Now</p>
                            <div class="cta-button">Contact Us</div>
                            <!-- More content... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>






    {{-- <section class="service-section service-page pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-1.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Social Media Marketing</a></h3>
                                <p>Boost your online presence with targeted campaigns across various social media platforms.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-2.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Search Engine Optimization </a></h3>
                                <p>Improve your website's visibility and attract organic traffic with our comprehensive SEO strategies.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-3.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Company Branding</a></h3>
                                <p>Create a strong and memorable brand identity that deeply resonates with your target audience.</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-icon">
                                <img src="{{url('assets/img/service-icon-6.png')}}" alt="service">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('pricing')}}">Web Development</a></h3>
                                <p>Build a Robust Online Platform with Our Custom Web Development Solutions</p>
                            </div>
                            <div class="service-btn">
                                <a href="{{url('pricing')}}"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section --> --}}

    @include('layouts.footer')

    <script>
        // document.querySelectorAll('.feature-item .title').forEach(item => {
        //     item.addEventListener('click', function() {
        //         // Remove active class from all items
        //         document.querySelectorAll('.feature-item').forEach(el => el.classList.remove('active'));

        //         // Add active class to the clicked item
        //         this.closest('.feature-item').classList.add('active');
        //     });
        // });

//         document.querySelectorAll('.feature-item').forEach(item => {
//     item.addEventListener('click', function() {
//         // Get the feature number
//         const feature = this.getAttribute('data-feature');

//         // Hide all content items
//         document.querySelectorAll('.feature-content-item').forEach(content => {
//             content.classList.remove('active');
//         });

//         // Show the selected content
//         document.querySelector(`.feature-content-item[data-feature="${feature}"]`).classList.add('active');
//     });
// });


// document.querySelectorAll('.feature-item').forEach(item => {
//     item.addEventListener('click', function() {
//         const feature = this.getAttribute('data-feature');

//         // Hide all content items
//         document.querySelectorAll('.feature-content-item').forEach(content => {
//             content.classList.remove('active');
//         });

//         // Hide the right section initially
//         document.querySelector('.feature-content').style.opacity = '0';
//         document.querySelector('.feature-content').style.visibility = 'hidden';

//         // Show the selected content
//         const selectedContent = document.querySelector(`.feature-content-item[data-feature="${feature}"]`);
//         selectedContent.classList.add('active');

//         // Show the right section
//         document.querySelector('.feature-content').style.opacity = '1';
//         document.querySelector('.feature-content').style.visibility = 'visible';
//     });
// });


// document.addEventListener('DOMContentLoaded', function() {
//     // Show the default content (Social Media Marketing) on page load
//     const defaultFeature = '1'; // Default feature ID for Social Media Marketing
//     const defaultContent = document.querySelector(`.feature-content-item[data-feature="${defaultFeature}"]`);

//     // Show the default content
//     if (defaultContent) {
//         defaultContent.classList.add('active');
//         document.querySelector('.feature-content').style.opacity = '1';
//         document.querySelector('.feature-content').style.visibility = 'visible';
//     }
// });

// document.querySelectorAll('.feature-item').forEach(item => {
//     item.addEventListener('click', function() {
//         const feature = this.getAttribute('data-feature');

//         // Hide all content items
//         document.querySelectorAll('.feature-content-item').forEach(content => {
//             content.classList.remove('active');
//         });

//         // Hide the right section initially
//         document.querySelector('.feature-content').style.opacity = '0';
//         document.querySelector('.feature-content').style.visibility = 'hidden';

//         // Show the selected content
//         const selectedContent = document.querySelector(`.feature-content-item[data-feature="${feature}"]`);
//         selectedContent.classList.add('active');

//         // Show the right section
//         document.querySelector('.feature-content').style.opacity = '1';
//         document.querySelector('.feature-content').style.visibility = 'visible';
//     });
// });


document.addEventListener('DOMContentLoaded', function() {
    const defaultFeature = '1'; // Default feature ID for Social Media Marketing

    // Activate the default feature item
    const defaultFeatureItem = document.querySelector(`.feature-item[data-feature="${defaultFeature}"]`);
    if (defaultFeatureItem) {
        defaultFeatureItem.classList.add('active');
    }

    // Show the default content
    const defaultContent = document.querySelector(`.feature-content-item[data-feature="${defaultFeature}"]`);
    if (defaultContent) {
        defaultContent.classList.add('active');
        document.querySelector('.feature-content').style.opacity = '1';
        document.querySelector('.feature-content').style.visibility = 'visible';
    }
});

document.querySelectorAll('.feature-item').forEach(item => {
    item.addEventListener('click', function() {
        const feature = this.getAttribute('data-feature');

        // Remove active class from all feature items
        document.querySelectorAll('.feature-item').forEach(item => {
            item.classList.remove('active');
        });

        // Hide all content items
        document.querySelectorAll('.feature-content-item').forEach(content => {
            content.classList.remove('active');
        });

        // Hide the right section initially
        document.querySelector('.feature-content').style.opacity = '0';
        document.querySelector('.feature-content').style.visibility = 'hidden';

        // Activate the clicked feature item
        this.classList.add('active');

        // Show the selected content
        const selectedContent = document.querySelector(`.feature-content-item[data-feature="${feature}"]`);
        selectedContent.classList.add('active');

        // Show the right section
        document.querySelector('.feature-content').style.opacity = '1';
        document.querySelector('.feature-content').style.visibility = 'visible';
    });
});




    </script>
</body>

</html>
