@extends('app')

@section('content')
     <!-- rts banner area start -->
    <div class="rts-banner-area banner-human-bg rts-section-gap">
        <div class="shape">
            <img src="{{ asset('assets/images/h7-banner.png') }}" alt="shape" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner area inner six -->
                    <div class="banner-inner-six">
                        <h1 class="title mb--30">
                            <span class="pre">Selamat Datang,</span> <br />
                            <span class="primary">PT. Hanatekindo Mulia Abadi</span>
                        </h1>
                        <a href="{{ url('/contact') }}" class="rts-btn btn-primary-5 style-six rounded-2 seven">Kontak Kami</a>
                    </div>
                    <!-- banner area inner six end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <div class="bg-shape-wrapper-main">
        <!-- rts about area start -->
        <div class="rts-about-area-start rts-section-gapBottom">
            <div id="tentang" class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                        <div class="title-area-style-six text-start">
                            <div class="pre-title">
                                <img src="{{ asset('assets/images/pre-title.png') }}" alt="pre-title" />
                                <span class="pre">Tentang Kami</span>
                                <img class="two" src="{{ asset('assets/images/pre-title.png') }}" alt="pre-title" />
                            </div>
                            <h2 class="title">
                                PT. Hanatekindo Mulia Abadi
                            </h2>
                        </div>
                        <div class="about-content-inner-style-six">
                            <p class="disc">
                                merupakan perusahaan yang bergerak di bidang solusi IT, software, hardware,
                                infrastruktur, jaringan,
                                data center, digital solution, keamanan data, distributor alat peraga, Lab. dan
                                Furnitur. <br> <br>
                                Perusahaan Kami berbasis di Jakarta. Produk dan layanan kami dihasilkan dari inovasi
                                yang dikembangkan
                                secara terus menerus berdasarkan kebutuhan pelanggan dalam setiap bisnis prosesnya.
                                <br> <br>
                                Kami memberikan solusi integrasi yang menyeluruh terhadap segala kebutuhan pelanggan
                                swasta maupun
                                pemerintah dengan selalu menerapkan teknologi produk terkini dengan layanan terbaik.
                            </p>
                            <div class="item-check-inner">
                                <div class="single-col">
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        Perangkat Lunak
                                    </div>
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        Infrastruktur IT
                                    </div>
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        Keamanan Data
                                    </div>
                                </div>
                                <div class="single-col">
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        Alat Peraga
                                    </div>
                                    <div class="single-check">
                                        <i class="fas fa-check-circle"></i>
                                        Distributor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail-about-six">
                            <img src="{{ asset('assets/images/img/PT.png') }}" alt="about-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about area end -->

        <!-- working process start -->
        <div class="rts-working-process rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-style-six text-center">
                            <h2 class="title">Layanan Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--20">
                    <div class="col-xl-4 col-md-4">
                        <!-- single-service area start -->
                        <div class="rts-single-service-style-process text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/img/1.svg') }}" alt="" />
                            </div>
                            <h5 class="title">Web & Mobile Application</h5>
                            <p class="disc">
                                Kami telah berpengalaman dalam
                                membangun aplikasi berbasis web dan
                                mobile untuk organisasi publik dan
                                swasta. Kami menggunakan teknologi terbaru dalam memberikan solusi terbaik untuk Anda.
                            </p>
                            <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <!-- single-service area end -->
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <!-- single-service area start -->
                        <div class="rts-single-service-style-process text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/img/2.svg') }}" alt="" />
                            </div>
                            <h5 class="title">Sistem Integrasi</h5>
                            <p class="disc">
                                Kami siap membangun dan
                                mengintegrasikan sistem IT Anda, dari
                                perangkat lunak, keras, keamanan dan
                                jaringan Anda sendiri dengan metode dan
                                sistem ter-Update untuk menjadikan sistem Anda lebih efektif dan efisien.
                            </p>
                            <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <!-- single-service area end -->
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <!-- single-service area start -->
                        <div class="rts-single-service-style-process text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/img/3.svg') }}" alt="" />
                            </div>
                            <h5 class="title">Alat Peraga</h5>
                            <p class="disc">
                                Kami memiliki SDM yang telah lama berkecimpung dibidang alat peraga pendidikan dengan
                                pengalaman
                                dibidangnya dan menjadi distributor
                                pabrikan alat peraga pendidikan
                                terkemuka di Indonesia.
                            </p>
                            <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <!-- single-service area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- working process end -->
    </div>

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h5 class="title">
                                "Our success has really been based on partnerships from the very beginning." - Bill
                                Gates
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Kontak Kami
                            </p>
                            <h2 class="title">Hubungi kami segera</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="#">
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Nama Anda" required="">
                                    <input type="email" name="email" placeholder="Email Anda" required="">
                                </div>
                                <input type="text" name="subject" placeholder="Subyek">
                                <textarea placeholder="Pesan" name="Pesan"></textarea>
                                <button type="button" class="rts-btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection