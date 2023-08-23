@extends('template.web')
@section('title', 'Disclaimer')
@section('content')
    <div class="jumbotron-page shadow">
        <div id="content" class="text-white d-flex align-items-end">
            <div class="container mb-4">
                <h1 data-aos="slide-right">Disclaimer</h1>
                <p data-aos="slide-up">Disclaimer Web</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark"><a href="{{ route('home') }}"
                            class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                    <li class="breadcrumb-item"><strong>Disclaimer</strong></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container" id="pengumuman">
        <div class="row">
            <h4 data-aos="slide-down" class="mt-3 mb-2 biru"><strong>Disclaimer</strong></h4>
            <p class="mt-2">Informasi yang disediakan di situs web ini hanya untuk tujuan informasi umum. Kami tidak membuat pernyataan atau jaminan tentang akurasi, kelengkapan, kehandalan, atau kesesuaian informasi yang terdapat di situs web ini. Setiap keputusan yang Anda ambil berdasarkan informasi tersebut sepenuhnya merupakan risiko Anda sendiri.</p>
        </div>
    </div>
@endsection
