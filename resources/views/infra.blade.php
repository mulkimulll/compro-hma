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
                <h1 class="title">Infrastruktur IT</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{ url('/') }}">Beranda</a>
                    <span> / </span>
                    <a href="#" class="active">Infrastruktur IT</a>
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
                    <h4 class="title">Perlengkapan TI</h4>
                    <p class="disc">
                        Kami menyediakan pengadaan berbagai jenis perangkat hardware dan software, baik komponen utama
                        maupun komponen penunjang dengan kualitas terbaik dan jaminan garansi sebagai solusi untuk
                        kebutuhan bisnis Anda.
                    </p>
                </div>
                <!-- service details left area end -->
                <div class="service-detials-step-3 mt--70 mt_md--50">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="thumbnail sm-thumb-service">
                                <img src="{{ asset('assets/images/infra1.jpg') }}" alt="Service">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                            <h4 class="title">Data Center (DC dan DRC)</h4>
                            <p class="disc">Data Center adalah fasilitas yang terdiri dari jaringan komputer dan
                                penyimpanan yang digunakan oleh unit bisnis untuk mengatur, memproses, menyimpan, dan
                                menyebarluaskan sejumlah besar data.
                                Kami siap memberikan solusi dalam pembangunan infrastruktur Pusat| Data dari penempatan
                                sistem komputer dan komponen terkait, sistem telekomunikasi dan penyimpanan data,
                                fasilitas daya redundan atau cadangan, koneksi komunikasi data redundan, kontrol suhu
                                lingkungan, pencegahan kebakaran ke perangkat keamanan fisik lainnya.</p>
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
                            <h4 class="title">Infrastruktur Jaringan
                                Kabel(Wired), Tanpa Kabel (Wireless) dan Fiber Optik (FO)</h4>
                            <p class="disc">Infrastruktur jaringan menghubungkan komputer dengan komputer atau komponen
                                lainnya. Dalam jaringan komputer terdapat dua komponen yang terlibat, yaitu server
                                sebagai pengirim atau penyedia data, dan klien sebagai penerima data. Dalam sebuah
                                organisasi atau perusahaan,
                                Sistem Jaringan merupakan komponen yang sangat penting dengan banyak sekali manfaatnya
                                seperti sarana berbagi printer, berbagi media penyimpanan, data terpusat, berbagi
                                internet, dan memudahkan pertukaran informasi. Kami menawarkan solusi terkait instalasi,
                                maintenance, dan optimasi jaringan baik access maupun backbone, wireline (fiber optic)
                                dan wireless (radio, PTP/PTMP).</p>
                            <!-- <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div> -->
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="thumbnail sm-thumb-service">
                                <img src="{{ asset('assets/images/infra2.jpg') }}" alt="Service">
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
<!-- End service details area -->
@endsection
