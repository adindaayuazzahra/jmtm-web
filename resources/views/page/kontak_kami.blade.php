@extends('template.web')
@section('title', 'Kontak Kami')
@section('content')
<div class="jumbotron-page shadow" id="profil">
    <div id="content" class="text-white d-flex align-items-end">
        <div class="container mb-4">
            <h1 data-aos="slide-right">Kontak Kami</h1>
            <p data-aos="slide-up">Menghubungi Lebih lanjut</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="{{route('home')}}" class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                <li class="breadcrumb-item"><strong>Kontak Kami</strong></li>
            </ol>
        </nav>
    </div>
</div>

<section class="mt-4" id="maps">
    <div class="container">
        <div class="row justify-content-between">
            <div data-aos="slide-up" class="col-md-4">
                <h5 class="mt-4 biru">PT. Jasamarga Tollroad Maintenance</h5>
                <p class="mt-4"><strong>Kantor Pusat</strong><br>Gedung C Graha Service Provider, Lantai 1 Kantor Pusat PT Jasa Marga (Persero) Tbk. Plaza Tol Taman Mini Indonesia Indah Jakarta 13550.</p>
                <p><strong>Telepon</strong> : (021) 2983 5858
                    <br> <strong>Fax</strong> : (021) 2281 9474
                    <br><strong>E-mail</strong> : <a href="mailto: cs@jmtm.co.id" class="text-dark link-underline link-underline-opacity-0 link-underline-opacity-75-hover link-offset-2-hover">cs@jmtm.co.id</a></p>
            </div>
            <div data-aos="slide-down" class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7789496258183!2d106.87699677595937!3d-6.292756361592819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a94de100ef%3A0xf0357925831c89fd!2sPT%20Jasamarga%20Tollroad%20Maintenance!5e0!3m2!1sen!2sid!4v1691504020701!5m2!1sen!2sid" class="w-100 shadow" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
