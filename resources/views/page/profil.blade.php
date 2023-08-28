@extends('template.web')
@section('title', 'Profil Perusahaan')
@section('content')
<div class="jumbotron-page shadow">
    <div id="content" class="text-white d-flex align-items-end">
        <div class="container mb-4">
            <h1 data-aos="slide-right">Profil Perusahaan</h1>
            <p data-aos="slide-up">Sekilas JMTM, Strategi Kami, Komisaris, Direksi, Visi & Misi, Tata Nilai</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="{{route('home')}}" class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                <li class="breadcrumb-item"><strong>Profil Perusahaan</strong></li>
            </ol>
        </nav>
        <h1 data-aos="fade-down" class="text-center mt-4 mb-2"><strong>SEKILAS JMTM</strong></h1>
        <p class="text-center">PT Jasamarga Tollroad Maintenance merupakan anak usaha dari PT Jasa Marga (Persero) Tbk, penyedia jalan bebas hambatan terbesar di Indonesia, di mana sebesar 99,82% kepemilikannya adalah milik Jasa Marga sebagai induk Perusahaan. Dikenal bergerak dalam bidang pemeliharaan jalan tol untuk mendukung lini bisnis utama Jasa Marga terutama dalam hal pemenuhan Standar Pelayanan Minimum (SPM) jalan tol, PT Jasamarga Tollroad Maintenance memiliki kantor pusat di Jakarta.</p>
    </div>
</div>

{{-- TIMELINE --}}
<div class="container mb-5">
    <div class="row mt-4 ">
        <div class="col-md-10 mx-auto">
            <div class="timeline timeline-one">
                <div data-aos="zoom-in" class="timeline-item">
                    <h4 class="my-3 biru">(1988) PT Rezekibhakti Sejahtera</h4>
                    <p>PT Jasamarga Tollroad Maintenance didirikan pada tahun 1988 dengan nama PT Rezekibhakti Sejahtera. Pada saat didirikan, PT Rezekibhakti Sejahtera yang bergerak dalam bidang sewa menyewa kendaraan, perbengkelan, pekerjaan jasa konstruksi dan Jasa umum lainnya</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <h4 class="my-3 biru">(1997) PT Sarana Margabhakti Utama</h4>
                    <p>PT Rezekibhakti Sejahtera berubah menjadi PT Sarana Margabhakti Utama.</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <span class="icon icon-info icon-lg"><img src="{{asset('assets/img/jm.png')}}" width="200px"></span>
                    <h4 class="mb-3 biru">(2010) Akusisi PT Jasa Marga (persero) Tbk.</h4>
                    <p>PT Sarana Margabhakti Utama diakusisl Oleh PT Jasa Marga (Persero) Tbk perusahaan BUMN penyelenggara jasa jalan tol terbesar di Indonesia</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <span class="icon icon-info icon-lg"><img src="{{asset('assets/img/smu.png')}}" width="150px"></span>
                    <h4 class="my-3 biru">(2011) PT Sarana Marga Utama</h4>
                    <p>PT Sarana Margabhakti Utama berganti nama PT Sarana Marga Utama</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <h4 class="my-3 biru">(2013) Produksi Hotmix</h4>
                    <p>PT Sarana Marga Utama mulai mengoperasikan pabrik produksi Hotmix (Asphalt Mixing Plant) dan peralatan berat untuk mendukung pemeliharaan jalan tol khususnya pada ruas jalan tol milik Jasa Marga</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <span class="icon icon-info icon-lg"><img src="{{asset('assets/img/jlp.jpg')}}" width="250px"></span>
                    <h4 class="mb-3 biru">(2014) PT Jasa Layanan Pemeliharaan</h4>
                    <p>PT Sarana Marga Utama berganti nama menjadi PT Jasa Layanan Pemeliharaan, dimana Perseroan lebih memfokuskan bidang usahanya ke bisnis layanan pemeliharaan jalan tol</p>
                </div>
                <div data-aos="zoom-in" class="timeline-item">
                    <span class="icon icon-info icon-lg"><img src="{{asset('assets/img-jmtm/logojmtm.png')}}" width="200px"></span>
                    <h4 class="mb-3 biru">(2014) PT Jasamarga Tollroad Maintenance</h4>
                    <p>Dengan adanya transformasi proses bisnis di PT Jasa Marga (Persero) Tbk selaku induk perusahaan. PT Jasa Layanan Pemeliharaan mengganti nama menjadi PT Jasamarga Tollroad Maintenance. Perubahan nama ini menegaskan eksistensi persereoran sebagai anak usaha PT Jasa Marga (Persero) Tbk, serta semakin mednukung bidang usaha sebagai kontraktor pemeliharaan jalan</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END TIMELINE --}}

<section id="strategi">
    <div class="parallax mt-3">
        <div id="parallax-content" class="text-white  text-center d-flex align-items-center">
            <div class="container my-3">
                <h1 class="my-3" data-aos="slide-down">STRATEGI KAMI</h1>
                <p data-aos="slide-up"><em>"Dengan standar dan kontrol yang kami miliki inilah jaminan kualitas pemeliharaan konstruksi dan jalan tol yang kami kerjakan dapat melampaui Standar Pelayanan Minimum (SPM) dari Jasa Marga sebagai perusahaan induk. Jasamarga Tollroad Maintenance juga menjalin kerja sama dengan mitra bisnis strategis yang memiliki kemampuan dan keahlian di bidangnya. Pun segala kegiatan pemasaran dilaksanakan oleh manajemen yang profesional, handal dan terpercaya. Sehingga seiring berjalannya bisnis, Perusahaan dapat selalu mengedepankan prinsip-prinsip “Good Corporate Governance” dalam proyek atau pekerjaan, baik yang sedang maupun yang akan digarap di masa depan."</em></p>
            </div>
        </div>
    </div>
</section>

{{-- komisaris --}}
<section id="komisaris">
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-down" class="text-center mb-5" ><strong>DEWAN KOMISARIS</strong></h1>
            {{-- @foreach ($tb_dirkom as $item) --}}
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div data-aos="slide-up" class="card h-100 text-center p-4 rounded-4 shadow">
                    <img src="{{ Storage::url('images/' . $kom2->foto) }}">
                    <h4 class="mb-2">{{$kom2->nama}}</h4>
                    <p class="lh-sm fs-5">{{$kom2->jabatan}}</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div data-aos="slide-up" class="card h-100 text-center p-4 rounded-4 shadow">
                    <img src="{{ Storage::url('images/' . $komut->foto) }}">
                    <h4 class="mb-2">{{$komut->nama}}</h4>
                    <p class="lh-sm fs-5">{{$komut->jabatan}}</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div data-aos="slide-up" class="card h-100 text-center p-4 rounded-4 shadow">
                    <img src="{{ Storage::url('images/' . $kom3->foto) }}">
                    <h4 class="mb-2">{{$kom3->nama}}</h4>
                    <p class="lh-sm fs-5">{{$kom3->jabatan}}</p>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
{{-- edn komisaris --}}


{{-- direksi --}}
<section id="direksi">
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-down" class="text-center mb-5"><strong>DIREKSI</strong></h1>
            @foreach ($tb_dirkom as $item)
            <div class="col-md-3 mb-4 d-flex justify-content-center" >
                <div data-aos="slide-up" class="card h-100 text-center p-4 rounded-4 shadow">
                    <img src="{{ Storage::url('images/' . $item->foto) }}">
                    {{-- <div class="card-body"> --}}
                    <h4 class="mb-2"> {{$item->nama}}</h4>
                    <p class="lh-sm">{{$item->jabatan}}</p>
                    {{-- </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- visi misi --}}
<section id="visimisi">
    <div class="container ">
        <div class="row">
            <h1 data-aos="fade-down" class="text-center mb-5"><strong>VISI & MISI</strong></h1>
            <div class="col-md-6 m-0 mb-2 " data-aos="slide-left">
                <div class="card shadow visi h-100">

                    <h2 class="text-center">Visi</h2>
                    <p class="text-center">Menjadi kontraktor pemeliharaan jalan tol yang profesional, terpercaya, dan terkemuka</p>
                </div>
            </div>
            <div class="col m-0 mb-2 " data-aos="slide-right">
                <div class="card shadow misi">
                    <h2 class="text-center">Misi</h2>
                    <ol class="mt-2 lh-sm">
                        <li>
                            Konsisten mewujudkan proyek yang tepat mutu, tepat waktu, tepat biaya dan peduli keselamatan kerja dan lingkungan
                        </li>
                        <li>
                            Menjaga perusahaan tetap sehat dan menciptakan laba yang memadai untuk kelangsungan hidup dan pertumbuhan perusahaan
                        </li>
                        <li>Mengembangkan profesionalisme (SDM dan Organisasi) serta memberikan iklim kerja yang nyaman dan menghargai kontribusi</li>
                        <li> Membangun sistem manajemen pemeliharaan jalan tol untuk efektifitas pencapaian SPM jalan tol perusahaan induk.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end visi misi --}}


{{-- Tata NIlai --}}
<section id="tata-nilai">
    <div class="container">
        <div class="row g-2">
            <h1 data-aos="fade-down" class="text-center mb-2"><strong>TATA NILAI</strong></h1>
            <p class="text-center mb-5">
                Tata nilai yang dimiliki oleh PT Jasamarga Tollroad Maintenance adalah Tata Nilai AKHLAK, Tata Nilai ini merupakan perwujudan dari sikap dan perilaku seluruh karyawan Jasamarga Tollroad Maintenance yang dilaksanakan untuk mendukung pencapaian tujuan perusahaan secara baik dan benar.
            </p>
            <div data-aos="slide-right" class="col-md-6">
                <img src="{{asset('assets/img/akhlak.jpeg')}}" width="100%" alt="">
            </div>
            <div data-aos="slide-left" class="col-md-6" id="akhlak">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">A</h1>
                            </div>
                            <div class="col-10">
                                <h5>AMANAH</h5>
                                <p>Memegang teguh kepercayaan yang diberikan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">K</h1>
                            </div>
                            <div class="col-10">
                                <h5>KOMPETEN</h5>
                                <p>Terus belajar dan mengembangkan kapabilitas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">H</h1>
                            </div>
                            <div class="col-10">
                                <h5>HARMONIS</h5>
                                <p>Saling peduli dan menghargai perbedaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">L</h1>
                            </div>
                            <div class="col-10">
                                <h5>LOYAL</h5>
                                <p>Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">A</h1>
                            </div>
                            <div class="col-10">
                                <h5>ADAPIF</h5>
                                <p>Terus berinovasi dan antusias dalam menggerakan ataupun menghadapi perubahan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end">
                                <h1 class="biru">K</h1>
                            </div>
                            <div class="col-10">
                                <h5>KOLABORATIF</h5>
                                <p>Membangun kerja sama yang sinergis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end  tata nilai --}}
@endsection
