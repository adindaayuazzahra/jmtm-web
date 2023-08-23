@extends('template.web')
@section('title', 'Jasa Sewa Alat Berat')
@section('content')
    <div class="jumbotron-page shadow">
        <div id="content" class="text-white d-flex align-items-end">
            <div class="container mb-4">
                <h1 data-aos="slide-right">Produk & Layanan</h1>
                <p data-aos="slide-up">Jasa Penyewaan Alat Berat</p>
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
                    <li class="breadcrumb-item"><strong>Penyewaan Alat berat</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <div data-aos="slide-right" class="col-md-6">
                <h2 class="text-md-start text-center mb-4"><strong>Layanan Jasa Penyewaan Alat Berat</strong></h2>
                <p class="text-md-start text-center">PT Jasamarga Tollroad Maintenance juga melayani penyewaan alat berat dengan memiliki 6  (enam) fleet alat berat pengaspalan, di mana 1 (satu) fleet terdiri atas cold miling, asphalt finisher, tandem roller, tire roller, asphalt sprayer, dan power broom.</p>
            </div>
            <div data-aos="slide-left" class="col-md-4">
                <img src="{{ asset('assets/img/alat_berat.jpeg') }}" class="h-100 w-100 rounded" alt="">
            </div>
        </div>
    </div>
    <div data-aos="zoom-in" class="container mt-5">
        <div class="row g-2 d-flex justify-content-between align-items-center">
           <img src="{{asset('assets/img/alat_berat2.png')}}" alt="">
        </div>
    </div>
@endsection
