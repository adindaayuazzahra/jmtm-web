@extends('template.web')
@section('title', 'Jasa Survey Pemeliharaan')
@section('content')
    <div class="jumbotron-page shadow">
        <div id="content" class="text-white d-flex align-items-end">
            <div class="container mb-4">
                <h1 data-aos="slide-right">Produk & Layanan</h1>
                <p data-aos="slide-up">Jasa Survey Pemeliharaan Jalan Tol dan Jembatan</p>
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
                    <li class="breadcrumb-item"><strong>Jasa Survey Pemeliharaan</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <div data-aos="slide-right" class="col-md-6">
                <h2 class="text-md-start text-center mb-4"><strong>Layanan Jasa Survey Pemeliharaan Jalan Tol dan Jembatan</strong></h2>
                <p class="text-md-start text-center">PT Jasamarga Tollroad Maintenance memiliki layanan survei dan pengukuran yang meliputi <strong>assessment elemen jembatan</strong> serta <strong>assessment ketidakrataan dan kekesatan jalan</strong>. Dengan memanfaatkan perkembangan teknologi, Perseroan memiliki teknologi <strong>Hawkeye 2000</strong> dan <strong>Mobile Bridge Inspection Truck</strong> untuk mendukung layanan tersebut agar data yang dihasilkan semakin akurat dengan pelaksanaan kegiatan survey semakin efektif dan efisien.</p>
            </div>
            <div data-aos="slide-left" class="col-md-5">
                <img src="{{ asset('assets/img/survey.jpg') }}" class="h-100 w-100 rounded" alt="">
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up"  id="lingkup">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <h2 data-aos="zoom-in" class="text-center mb-5"><strong>Teknologi Pendukung</strong></h2>
            <div class="col-md-5">
                <img src="{{ asset('assets/img/hawkeye.jpg') }}" class="h-100 w-100 rounded" alt="">
            </div>
            <div  class="col-md-6">
                <h2 class="text-md-start text-center mb-4 biru"><strong>Teknologi Hawkeye 2000</strong></h2>
                <p class="text-md-start text-center">Hawkeye 2000 merupakan kendaraan survei yang mengintegrasikan beberapa peralatan sensor yang spesifik untuk mendapatkan data karakteristik jalan sekaligus dalam tingkatan jaringan jalan. Hawkeye 2000 dapat menghasilkan nilai indeks ketidakrataan atau international roughness index (IRI) dan nilai kerusakan permukaan atau surface distress index (SDI) yang digunakan untuk menentukan program pemeliharaan jalan yang optimal dan tepat. Hawkeye 2000 dilengkapi dengan berbagai macam sensor, diantarnya adalah Digital Laser Profiler, Automatic Crack Detection (ACD) dan Distance Measurement Instrument (DMI).</p>
            </div>
        </div>
    </div>


    <div class="container mt-5" data-aos="fade-up">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <div  class="col-md-6">
                <h2 class="text-md-start text-center mb-4 biru"><strong>Teknologi Mobile Bridge Inspection Truck</strong></h2>
                <p class="text-md-start text-center">Mobile Bridge Inspection Truck, Merupakan salah satu alat berat milik PT Jasamarga Tollroad Maintenance yang digunakan untuk memeriksa keadaan dibawah jembatan menggunakan boom (lalai) yang dapat bergerak vertical maupun horizontal, sehingga memudahkan inspector untuk menjangkau posisi yang sulit. Kendaraan ini juga berfungsi untuk meminimalisir kecelakaan kerja pada proses pengecekan jembatan, memonitoring kondisi kerusakan dan bawah jembatan, serta meningkatkan efektifitas dalam pengecekan jembatan.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/img/bi.jpg') }}" class="h-100 w-100 rounded" alt="">
            </div>
        </div>
    </div>
@endsection
