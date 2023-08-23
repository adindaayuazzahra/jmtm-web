@extends('template.web')
@section('title', 'Produk JMTM')
@section('content')
<div class="jumbotron-page shadow">
    <div id="content" class="text-white d-flex align-items-end">
        <div class="container mb-4">
            <h1 data-aos="slide-right">Produk JMTM</h1>
            <p data-aos="slide-up">Produksi Berbagai Macam Aspal</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="{{route('home')}}" class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                <li class="breadcrumb-item">Produk & Layanan</li>
                <li class="breadcrumb-item"><strong>Produk JMTM</strong></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container mt-5">
    <div class="row g-2 d-flex justify-content-between align-items-center">
        <div data-aos="slide-right" class="col-md-6">
            <h2 class="text-md-start text-center mb-4"><strong>Produk JMTM</strong></h2>
            <p class="text-md-start text-center">PT Jasamarga Tollroad Maintenance memiliki Asphalt Mixing Plant (AMP) di Karawang, Jawa Barat yang menghasilkan berbagai jenis produk aspal yang sudah banyak digunakan pada kawasan industri, jalan tol, jalan nasional, hingga perumahan. AMP yang dimiliki juga telah memperoleh sertifikat kelaikan operasi yang dikeluarkan oleh Balai Besar Pelaksanaan Jalan Nasional DKI Jakarta & Jawa Barat dan produk yang dihasilkan telah lolos uji mutu dari hasil uji laboratorium Pemerintah Daerah DKI Jakarta dan Pusat Penelitian dan Pengembangan Jalan dan Jembatan (Pusjatan).</p>
        </div>
        <div data-aos="slide-left" class="col-md-5">
            <img src="{{ asset('assets/img/amp.jpg') }}" class="h-100 w-100 rounded" alt="">
        </div>
    </div>
</div>
<div class="container mb-3" data-aos="fade-up"  id="lingkup">
    <div class="row g-2 d-flex justify-content-between align-items-center">
        <h2 data-aos="zoom-in" class="text-center mb-5"><strong>Jenis - Jenis Aspal Produksi JMTM</strong></h2>
    </div>
</div>
<div class="container">
    <div class="row g-5">
        <div data-aos="fade-up" class="col-md-5 d-flex align-items-center">
            <img src="{{ asset('assets/img/cold-mix.jpeg') }}" class="w-100 shadow-lg rounded" alt="">
        </div>
        <div data-aos="fade-up" class="col-md-7 d-flex flex-column justify-content-center" id="produk">
            <h2 class="text-md-start text-center mb-4 biru"><strong>Super Cold Mix Asphalt SCMA-1</strong></h2>
            <p class="text-md-start text-center mb-3">Super Cold Mix Asphalt SCMA-1 adalah bahan penambal lubang pada permukaan jalan (patching) yang praktis, berkualitas, diaplikasikan tanpa pemanasan, dengan peralatan sederhana dalam waktu singkat dan hasilnya tahan lama.</p>
            <p class="text-md-start text-center"><mark>KEUNGGULAN</mark></p>
            <div class="row gap-2 mt-3 justify-content-center">
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Untuk jenis cold mix kualitas sangat bagus, berdasar hasil laboratorium Pusjatan PUPR dan uji lapangan.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Setiap saat ada 1 (satu) lubang di Jalan bisa langsung ditambal dengan SCMA-1, bahkan oleh 1 (satu) orang dengan alat sederhana dengan hasil yang baik.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Jlka material SCMA-1 mengeras, masih bisa dipakai dengan cara dijemur diterik matahari, maka SCMA-1 akan segera gembur kembali dan siap diaplikasikan.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11 d-flex align-items-center">
                        <p>Harga bersaing untuk mutu yang setara.</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" class="col-md-5 d-flex align-items-center">
            <img src="{{ asset('assets/img/coldpatch.jpeg') }}" class="w-100 shadow-lg rounded" alt="">
        </div>
        <div data-aos="fade-up" class="col-md-7 d-flex flex-column justify-content-center" id="produk">
            <h2 class="text-md-start text-center mb-4 biru"><strong>Cold Patch JMTM-31</strong></h2>
            <p class="text-md-start text-center mb-3">Cold Patch JMTM-31 adalah bahan penambal lubang pada permukaan jalan (patching) yang didesain khusus untuk menambal lubang pada jalan tol dengan latu tintas sangat padat. Cold Patch JMTM-31 merupakan pengembangan dari SCMA-I oleh JMTM bersama Pusjatan dan telah diuji mutu di laboratorium.</p>
            <p class="text-md-start text-center"><mark>KEUNGGULAN</mark></p>
            <div class="row gap-2 mt-3 justify-content-center">
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Dirancang khusus untuk menambal tubang di jalan tol dengan latu lintas padat dan kecepatan tinggi, sehingga tidak perlu: <strong>
                            1) Menutup lajur.
                            2) Lubang di cutting.
                            3) Lubang diberi tack coat.
                            4) Dipadatkan dengan alat.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Setiap saat ada 1 (satu) lubang di Jalan bisa langsung ditambal dengan Cold Patch JMTM-31, bahkan oleh 1 (satu) orang dengan alat sederhana dengan hasil yang baik.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11">
                        <p>Jlka material Cold Patch JMTM-31 mengeras, masih bisa dipakai dengan cara dijemur diterik matahari, maka Cold Patch JMTM-31 akan segera gembur kembali dan siap diaplikasikan.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-start align-items-md-center">
                        <i class="fa-solid fa-circle-check kuning display-6"></i>
                    </div>
                    <div class="col-11 d-flex align-items-center">
                        <p>Harga bersaing untuk mutu yang setara.</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" class="col-md-5 d-flex align-items-center">
            <img src="{{ asset('assets/img/hotmix.jpg') }}" class="w-100 shadow-lg rounded" alt="">
        </div>
        <div data-aos="fade-up" class="col-md-7 d-flex flex-column justify-content-center" id="produk">
            <h2 class="text-md-start text-center mb-4 biru"><strong>Aspal Hotmix</strong></h2>
            <p class="text-md-start text-center mb-3">Aspal Hot Mix atau Hot Mix Asphalt (HMA) adalah kombinasi dari sekitar 95% batu, pasir, atau kerikil yang dicampur dan disatukan oleh semen aspal yang merupakan produk minyak mentah. Aspal Hot mix harus melewati tahap pengecekan untuk dapat diaplikasikan. Kegiatan Pengecekan tersebut bernama Final Check Control Hotmix Asphalt. Kegiatan tersebut merupakan pemeriksaan apakah aspal hotmix sudah memenuhi kriteria untuk didistribusikan. Dalam final check control terdapat kegiatan pengukuran suhu aspal maksimal di angka 165 derajat celcius dan pemeriksaan kesempurnaan campuran aspal. Kegiatan ini bermanfaat sebagai quality control produk hotmix aspal JMTM sehingga aspal Hotmix JMTM yang didistribusikan mempunyai kualitas, durabilitas dan stabilitas yang baik. Apabila kriteria tersebut sudah terpenuhi maka aspal hotmix akan mendapatkan surat jalan dan siap diangkut ke tempat tujuan. </p>
        </div>
    </div>
</div>
@endsection