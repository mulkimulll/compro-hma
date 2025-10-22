@extends('app')
@push('css')
    <style>
        .breadcrumb-bg-pl {
            background-image: url('{{ asset('assets/images/banner-dtl.jpg') }}');
        }
    </style>
@endpush
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg-pl bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Furniture</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Beranda</a>
                        <span> / </span>
                        <a href="#" class="active">Furniture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start service details area -->
    <section class="portfolio-area style-5 pt--120 pb--120 pt_xs--60 pt_xs--60">
        <div class="container">
            <div class="row">
                <h4 class="title">Distributor Produk Furnitur</h4>
                        <p class="disc">
                            Kami distributor produk-produk furnitur untuk kebutuhan sekolah, laboratorium, balai pendidikan dan pelatihan, perkantoran, hotel dan apartemen dengan mengedepankan standarisasi dan kualitas terbaik.
                        </p>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/img/1.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>Furniture</span>
                            </div>
                            <a class="pf-btn" href="#"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/img/2.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>Furniture</span>
                            </div>
                            <a class="pf-btn" href="#"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/img/3.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>Furniture</span>
                            </div>
                            <a class="pf-btn" href="#"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service details area -->
@endsection