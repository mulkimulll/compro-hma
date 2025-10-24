<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Hanatekindo Mulia Abadi</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo.png') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/unicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @stack('css')
</head>

<body class="index-seven hr">
    <!-- start header area -->
    <!-- start header area -->
    @include('components.header')
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ url('/') }}"><img class="logo" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="finbiz_logo" /></a>
            <a class="logo-2" href="{{ url('/') }}"><img class="logo" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="finbiz_logo" /></a>
            <a class="logo-3" href="{{ url('/') }}"><img class="logo" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="finbiz_logo" /></a>
            <a class="logo-4" href="{{ url('/') }}"><img class="logo" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="finbiz_logo" /></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    Merupakan perusahaan yang bergerak di bidang solusi IT, software, hardware, infrastruktur, jaringan, data center, digital solution, keamanan data, distributor alat peraga, Lab. dan Furnitur.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Kontak</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:hanatekindo@gmail.com">
                                    hanatekindo@gmail.com
                                </a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="https://hanatekindo.co.id">
                                    www.hanatekindo.co.id
                                </a>
                        </div>
                        <!-- single ENd -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="menu-item menu-item"><a class="menu-link" href="{{ url('/') }}">Beranda</a></li>
                        <li class="menu-item menu-item">
                            @if (request()->is('/'))
                            <a class="menu-link" href="#tentang">Tentang Kami</a>
                                @else
                            <a class="menu-link" href="{{ url('/#tentang') }}">Tentang Kami</a>
                            @endif
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Layanan</a>
                            <ul class="submenu">
                                <li class="menu-item"><a href="{{ url('/service/software') }}">Perangkat Lunak</a></li>
                                <li class="menu-item"><a href="{{ url('/service/infra') }}">Infrastruktur IT</a></li>
                                <li class="menu-item"><a href="{{ url('/service/alat-peraga') }}">Alat Peraga</a></li>
                                <li class="menu-item"><a href="{{ url('/service/furniture') }}">Furniture</a></li>
                                <li class="menu-item"><a href="{{ url('/service/keamanan-data') }}">Keamanan Data</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <a href="{{ url('contact') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Kontak</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home"></div>
    <!-- ENd Header Area -->

   @yield('content')

    <!-- start footer area -->
    <!-- rts footer area start -->
    @include('components.footer')
    <!-- rts footer area end -->
    <!-- ENd footer Area -->

    <!-- start loader -->
    <!-- <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div> -->
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- progress Back to top End -->

    <!-- scripts start form hear -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jqueryui.js')}}"></script>
    <script src="{{asset('assets/js/waypoint.js')}}"></script>
    <script src="{{asset('assets/js/swiper.js')}}"></script>
    <script src="{{asset('assets/js/counterup.js')}}"></script>
    <script src="{{asset('assets/js/sal.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/waw.js')}}"></script>
    <script src="{{asset('assets/js/contact.form.js')}}"></script>
    <!-- main Js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        document.querySelectorAll('a.scroll-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
            });
        });
        });
    </script>
    <!-- scripts end form hear -->
</body>

</html>
