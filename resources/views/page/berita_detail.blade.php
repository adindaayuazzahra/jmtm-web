@extends('template.web')
@section('title', 'berita')
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
                    <li class="breadcrumb-item text-dark"><a href="{{ route('berita') }}"
                            class="text-dark link-underline link-underline-opacity-0"><strong>Berita</strong></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container" id="berita">
        <div data-aos="zoom-in">
            <h2 class="biru">{{ $berita->judul }}</h2>
            <p class="text-muted mt-2">jmtm.co.id - {{ Carbon::parse($berita->created_at)->format('d/m/Y, H:i') }}</p>
            <img src="{{ Storage::url('berita/' . $berita->foto) }}" class="mt-3 w-100">
            <div class="fs-5 mt-4 deskripsi">
                {!! trim($berita->deskripsi, '{}') !!}
            </div>
        </div>
    </div>
@endsection

