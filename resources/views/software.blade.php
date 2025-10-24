@extends('app')
@push('css')
    <style>
        .breadcrumb-bg-pl {
            background-image: url('{{ asset('assets/images/banner-software.jpg') }}');
        }
    </style>
@endpush
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg-pl bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Perangkat Lunak</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Beranda</a>
                        <span> / </span>
                        <a href="#" class="active">Perangkat Lunak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/01.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Kami Membangun Aplikasi Sesuai Alur Bisnis Anda</h4>
                        <p class="disc">
                            Aplikasi yang Kami bangun berdasar pada hasil analisa flow bisnis Anda, kemudian Kami rancang struktur dan programnya. Sehingga semua aplikasi yang Kami kembangkan akan mengikuti bisnis proses yang ada, agar program menjadi tepat guna, bermanfaat, efektif, efisien dan saat implementasi user mudah beradaptasi dengan aplikasi baru tersebut.

                        </p>
                    </div>
                    <!-- service details left area end -->
                    <div class="service-detials-step-3 mt--70 mt_md--50">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="thumbnail sm-thumb-service">
                                    <img src="{{ asset('assets/images/software2.jpeg') }}" alt="Service">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                <h4 class="title">Aplikasi Multi Platform</h4>
                                <p class="disc">Aplikasi yang Kami bangun merupakan apliksai lintas platform yang. dapat diakses melalui web base (browser), Android, IOS dan Desktop, sehingga sangat mumudahkan Anda dalam Input, mengelola, menganalisa laporan dan mengintegrasikan aplikasi Kami dengan. aplikasi yang sudah ada.</p>
                                <!-- <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="service-detials-step-3 mt--70 mt_md--50">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                <h4 class="title">Aplikasi Terpadu Lintas Divisi</h4>
                                <p class="disc">Kami mengembangkan aplikasi bisnis terpadu lintas divisi yang dapat. diintegrasikan dengan program yang sudah ada. Seperti aplikasi untuk:
Visitor Management, Pengelolaan Asrama, Asset, Administrasi, Surat Menyurat, Keuangan, Arsip Dokumen, E-Learning, Kesehatan, Kepegawaian, Payroll, Keuangan, Pemantauan Proses Perkara,
Keamanan Data dan Jaringan.</p>
                                <!-- <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div> -->
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="thumbnail sm-thumb-service">
                                    <img src="{{ asset('assets/images/software1.jpg') }}" alt="Service">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--rts blog wizered area -->
                @include('components.category')
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
@endsection