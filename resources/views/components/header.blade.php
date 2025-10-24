<header class="header--sticky header-one">
    <div class="header-main-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="thumbnail">
                        <a href="{{ url('/') }}">
                            <img id="logo1" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="main-header">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li>
                                    <a class="nav-item" href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li>
                                    @if (request()->is('/'))
                                    <a class="nav-item scroll-link" href="#tentang">Tentang Kami</a>
                                    @else
                                    <a class="nav-item" href="{{ url('/#tentang') }}">Tentang Kami</a>
                                    @endif
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Layanan</a>
                                    <ul class="submenu menu-link1">
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ url('/service/software') }}">Perangkat Lunak</a></li>
                                                <li><a href="{{ url('/service/infra') }}">Infrastruktur IT</a></li>
                                                <li><a href="{{ url('/service/alat-peraga') }}">Alat Peraga</a></li>
                                                <li><a href="{{ url('/service/furniture') }}">Furniture</a></li>
                                                <li><a href="{{ url('/service/keamanan-data') }}">Keamanan Data</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li>
                                    <a class="nav-item" href="{{ url('/download') }}">Unduh</a>
                                </li> --}}
                                <li>
                                    <a class="nav-item" href="{{ url('/contact') }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="button-area">
                            {{-- <button id="search" class="rts-btn btn-primary-alta"><i class="far fa-search"></i></button> --}}
                            <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="{{ asset('assets/images/menu.png') }}" alt="Menu-icon">
                                    <img class="menu-light" src="{{ asset('assets/images/menu-light.png') }}" alt="Menu-icon">
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
