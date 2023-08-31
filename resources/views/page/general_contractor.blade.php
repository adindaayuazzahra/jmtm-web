@extends('template.web')
@section('title', 'General Contractor')
@section('content')
    <div class="jumbotron-page shadow">
        <div id="content" class="text-white d-flex align-items-end">
            <div class="container mb-4">
                <h1 data-aos="slide-right">Produk Layanan</h1>
                <p data-aos="slide-up">JMTM Sebagai General Contractor</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark"><a href="{{ route('home') }}"
                            class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                    <li class="breadcrumb-item">Produk & Layanan</li>
                    <li class="breadcrumb-item"><strong>General Contractor</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <div data-aos="slide-right" class="col-md-6">
                <h2 class="text-md-start text-center mb-4"><strong>Layanan General Contractor</strong></h2>
                <p class="text-md-start text-center">Posisi PT Jasamarga Tollroad Maintenance dalam bidang proyek konstruksi
                    saat ini telah berkembang pesat dengan memperoleh kepercayaan untuk mengerjakan proyek skala besar dari
                    para pengguna jasa, seperti Badan Usaha Milik Negara, Pemerintah Daerah, Kementerian Pekerjaan Umum dan
                    Perumahan Rakyat, Kawasan Industri, serta pihak swasta lainnya.</p>
            </div>
            <div data-aos="slide-left" class="col-md-5">
                <img src="{{ asset('assets/img/general_contractor.jpg') }}" class="h-100 w-100 rounded" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="lingkup">
        <div class="row g-3">
            <h2 data-aos="zoom-in" class="text-center"><strong>Lingkup Pekerjaan</strong></h2>
            <p class="text-center mb-2">Lingkup pekerjaan yang dilakukan oleh PT Jasamarga Tollroad Maintenance sebagai
                kontraktor antara lain:</p>
            <div data-aos="fade-right" class="col-md-4">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Pekerjaan sipil jalan dan jembatan</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p>meliputi pemeliharaan periodik
                            jalan, rekonstruksi
                            jalan, penambahan lajur jalan, pelebaran bahu akses serta pembangunan jembatan/overpass.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-4">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Pekerjaan sipil sarana & pelengkap jalan tol</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p class="">meliputi pembuatan dan
                            pemasangan median concrete barrier, pembuatan dan pemasangan pagar panel, pemasangan sound
                            barrier, pembuatan dan pemasangan rambu, pengecatan marka jalan, serta pembuatan
                            saluran/drainase.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-md-4">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Pekerjaan sipil bangunan gedung</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p>meliputi peningkatan kapasitas gerbang,
                            pembangunan gedung
                            kantor, serta renovasi gerbang tol dan plaza tol.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="lingkup">
        <div class="row">
            <h2 data-aos="zoom-in" class="text-center""><strong>Pengguna Layanan Kami</strong></h2>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row" data-aos="zoom-out">
            <div class="owl-carousel owl-theme owl-stage text-center">
                <div><img src="{{ asset('assets/img/hk.png') }}" alt="Partner 1">
                </div>
                <div><img src="{{ asset('assets/img/csc.png') }}" alt="Partner 2">
                </div>
                <div><img src="{{ asset('assets/img/adhi.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/ctp.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/broine.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/wika.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/jk.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/wp.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/pp.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/kendal.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/waskita.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/pupr.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/aoset.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/astra-infra.png') }}" alt="Partner 3">
                </div>
                <div><img src="{{ asset('assets/img/hms.png') }}" alt="Partner 3">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht">
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                // items: 4,
                loop: true,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    960: {
                        items: 5
                    },
                    1200: {
                        items: 5
                    }
                }
            });
        });
    </script>
@endsection
