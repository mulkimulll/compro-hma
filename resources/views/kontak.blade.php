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
                    <h1 class="title">Kontak kami</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ url('/') }}">Beranda</a>
                        <span> / </span>
                        <a href="#" class="active">Kontak kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/01.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Email</span>
                                <a href="mailto:hanatekindo@gmail.com">
                                    <h5>hanatekindo@gmail.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/02.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Info</span>
                                <a href="mailto:info@hanatekindo.co.id">
                                    <h5>info@hanatekindo.co.id</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/03.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Web</span>
                                <a href="https://hanatekindo.co.id">
                                    <h5>www.hanatekindo.co.id</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>

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