@extends('app')
@push('css')
<style>
    .breadcrumb-bg-pl {
            background-image: url('{{ asset('assets/images/alat1.jpg') }}');
        }
</style>
@endpush
@section('content')
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg-pl bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Alat peraga</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ url('/') }}">Beranda</a>
                    <span> / </span>
                    <a href="#" class="active">Alat peraga</a>
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
                        <img src="{{ asset('assets/images/alat.jpg') }}" alt="business-area">
                    </div>
                    <h4 class="title">Distributor Alat Peraga Pendidikan &
                        Laboratorium</h4>
                    <p class="disc">
                        Kami distributor alat peraga dan laboratorium pendidikan untuk sekolah tingkat dasar dan
                        menengah dengan produk sebagai berikut:
                    </p>
                    <p class="disc">
                        <strong>Alat Peraga Pendidikan SD dan sederajat</strong> <br>
                        - KIT IPA. KIT matematika, KIT IPS. KIT bahasa Indonesia <br>
                        <strong>Alat Peraga Pendidikan SMP dan sederajat</strong> <br>
                        -Alat peraga matematika, alat peraga IPS, alat laboratorium IPA <br>
                        <strong>Alat Laboratorium IPA SMA dan sederajat</strong> <br>
                        -Alat laboratorium Kimia, Fisika, dan Biologi <br>
                        <strong>Alat Laboratorium IPA SMK dan sederajat</strong> <br>
                        -Alat laboratorium IPA, kimia, fisika, dan biologi <br>
                        <strong>Alat Peraga Multimedia Pendidikan</strong> <br>
                        -Alat Multimedia Interaktif Matematika 3C SD, Alat Multimedia Interaktif <br>
                        -Budaya Nusantara SD, Alat Multimedia Interaktif Sejarah untuk SMP, Alat <br>
                        -Multimedia Interaktif Geografi SMA, Alat Laboratorium Pendidikan <br>
                        -Berbasis Digital SMP dan SMA, Alat Pembelajaran Berbasis Multimedia
                        SMP dan SMA <br>
                    </p>

                    <p class="disc">
                        Wilayah pemasaran kami meliputi seluruh wilayah di Indonesia, adapun 10 terbesar wilayah
                        pemasaran PT. Hanatekindo Mulia Abadi adalah sebagai berikut : <br>
                        1. Provinsi Jawa Barat <br>
                        2. Provinsi Sumatera Utara <br>
                        3. Provinsi Sumatera Selatan <br>
                        4. Provinsi Riau <br>
                        5. Provinsi Lampung <br>
                        6. Provinsi Jawa Barat <br>
                        7. Provinsi DKI Jakarta <br>
                        8. Provinsi Nusa Tenggara Timur <br>
                        9. Provinsi Sulawesi Utara <br>
                        10. Provinsi Banten <br>
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
