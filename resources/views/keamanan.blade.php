@extends('app')
@push('css')
<style>
    .breadcrumb-bg-pl {
        background-image: url('{{ asset('assets/images/banner-infra.jpg') }}');
    }

</style>
@endpush
@section('content')
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg-pl bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Keamanan Data</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ url('/') }}">Beranda</a>
                    <span> / </span>
                    <a href="#" class="active">Keamanan Data</a>
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
                        <img src="{{ asset('assets/images/infra.jpg') }}" alt="business-area">
                    </div>
                    <h4 class="title">Perlindungan cerdas dari
                        Ancaman yang terus menerus berkembang</h4>
                    <p class="disc">
                        Kami menyediakan layanan keamanan data dan jaringan secara perangkat lunak (Software) dan atau
                        perangkat keras (Hardware). Data security merupakan perlindungan terhadap data digital yang
                        bersifat privat untuk mencegah akses yang tidak dinginkan terhadap komputer, database, maupun
                        website, melindungi data dari perusakan data, modifikasi data, serta penyebaran data baik yang
                        disengaja maupun tidak.
                        Berikut hal penting kenapa keamanan data saat ini sangatlah penting: <br>
                        1. Mencegah dan mengurangi resiko penyalah gunaan data <br>
                        2. Memperkecil ruang gerak tindakan kriminal/pencurian data <br>
                        3. Mencegah potensi kerusakan material yang lebih banyak <br>
                    </p>
                </div>
            </div>
            <!--rts blog wizered area -->
            @include('components.category')
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- End service details area -->
@endsection
