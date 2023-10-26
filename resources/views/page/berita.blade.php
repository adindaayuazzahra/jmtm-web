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
    <div class="container mt-5" id="home-berita">
        <div data-aos="zoom-in" class="row grid gap-0 row-gap-4">
            @foreach ($beritas as $berita)
                <div class="col-md-3">
                    <div class="card shadow-lg">
                        <img src="{{ Storage::url('images/' . $berita->foto) }}" class="card-img-top" alt="...">
                        <div class="card-body p-4 d-flex justify-content-between flex-column">
                            <div>
                                <p class="card-text mb-1"><small
                                        class="text-muted">{{ Carbon::parse($berita->created_at)->format('d/m/Y - H:i') }}</small>
                                </p>
                                <div class="multi-line-ellipsis">
                                    <h6 class="biru card-title mb-3">{{ $berita->judul }}</h6>
                                </div>
                            </div>
                            <a href="{{ route('berita.detail', ['id' => $berita->id]) }}"
                                class="stretched-link link-offset-3-hover link-underline link-dark link-underline-opacity-0">Selengkapnya
                                <i class="fa-solid fa-circle-chevron-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-5">
            <div>{!! $beritas->links('pagination::bootstrap-5') !!}</div>
        </div>
    </div>
@endsection
