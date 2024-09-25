<header class="header sticky-active">
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo d-lg-block">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('assets/img/mindworks-logo-white.webp') }}" alt="Logo" loading="lazy">
                    </a>
                </div>
                <div class="header-menu-wrap">
                    <div class="mobile-menu-items">
                        <ul>
                            @foreach ([
        'Home' => '/',
        'About Us' => 'about',
        'Services' => 'services',
        'Projects' => 'projects',
        // 'Team' => 'team',
        'Pricing' => 'pricing',
        'FAQ' => 'faq',
    ] as $label => $url)
                                <li>
                                    <a href="{{ url($url) }}">{{ $label }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /.header-menu-wrap -->
                <div class="header-right">
                    <a href="{{ url('pricing#custom-solutions') }}" class="pb-primary-btn header-btn">Contact Us</a>
                    <div class="header-right-item">
                        <a href="javascript:void(0)" class="mobile-side-menu-toggle d-lg-none">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </a>
                    </div>
                </div>
                <!-- /.header-right -->
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
    <!-- /.primary-header -->
</header>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB69WGKH" height="0" width="0"
        style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
