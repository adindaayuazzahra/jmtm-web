@extends('template.web')
@section('title', 'Berita')
@section('content')
<div class="jumbotron-page shadow">
    <div id="content" class="text-white d-flex align-items-end">
        <div class="container mb-4">
            <h1 data-aos="slide-right">Berita</h1>
            <p data-aos="slide-up">Kumpulan Berita Terbaru JMTM</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="{{ route('home') }}"
                        class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                <li class="breadcrumb-item"><strong>Berita</strong></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container mt-5">
        <div class="row grid gap-0 row-gap-3">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="{{asset('assets/img/alat berat 2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                        <div>
                            <p class="card-text mb-1"><small class="text-muted">Published at 01-01-2023</small></p>
                            <h6 class="biru card-title mb-3">PT Jasamarga Tollroad Maintenance menggelar Rapat Umum Pemegang Saham Tahunan (RUPST)</h6>
                        </div>
                        <a href="#" class="stretched-link link-offset-3-hover link-underline link-dark link-underline-opacity-0">Selengkapnya <i class="fa-solid fa-circle-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="{{asset('assets/img/alat berat 2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                        <div>
                            <p class="card-text mb-1"><small class="text-muted">Published at 01-01-2023</small></p>
                            <h6 class="biru card-title mb-3">PT Jasamarga Tollroad Maintenance menggelar Rapat Umum Pemegang Saham Tahunan (RUPST)</h6>
                        </div>
                        <a href="#" class="stretched-link link-offset-3-hover link-underline link-dark link-underline-opacity-0">Selengkapnya <i class="fa-solid fa-circle-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="{{asset('assets/img/alat berat 2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                        <div>
                            <p class="card-text mb-1"><small class="text-muted">Published at 01-01-2023</small></p>
                            <h6 class="biru card-title mb-3">PT Jasamarga Tollroad Maintenance menggelar Rapat Umum Pemegang Saham Tahunan (RUPST)</h6>
                        </div>
                        <a href="#" class="stretched-link link-offset-3-hover link-underline link-dark link-underline-opacity-0">Selengkapnya <i class="fa-solid fa-circle-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="{{asset('assets/img/alat berat 2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                        <div>
                            <p class="card-text mb-1"><small class="text-muted">Published at 01-01-2023</small></p>
                            <h6 class="biru card-title mb-3">PT Jasamarga Tollroad Maintenance menggelar Rapat Umum Pemegang Saham Tahunan (RUPST)</h6>
                        </div>
                        <a href="#" class="stretched-link link-offset-3-hover link-underline link-dark link-underline-opacity-0">Selengkapnya <i class="fa-solid fa-circle-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
</div>
@endsection
