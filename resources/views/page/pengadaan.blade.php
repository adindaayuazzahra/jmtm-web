@extends('template.web')
@section('title', 'Pengadaan')
@section('content')
<div class="jumbotron-page shadow">
    <div id="content" class="text-white d-flex align-items-end">
        <div class="container mb-4">
            <h1 data-aos="slide-right">Informasi Pengadaan</h1>
            <p data-aos="slide-up">Pengumuman Pengadaan JMTM</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                <li class="breadcrumb-item"><strong>Pengadaan</strong></li>
            </ol>
        </nav>

    </div>
</div>

<div class="container" id="pengumuman">
    <div class="row">
        <h4 data-aos="slide-down" class="mt-3 mb-2 biru"><strong>PENGUMUMAN</strong></h4>
        <p class="mt-2">PT Jasamarga Tollroad Maintenance sebagai perusahaan yang secara konsisten menerapkan Tata Kelola Perusahaan Yang Baik (Good Corporate Governance - GCG) dan menerapkan prinsip-prinsip kompetitif dan terbuka pada Proses Pengadaan Barang/Jasa, menyampaikan hal-hal sebagai berikut :</p>
        <div class="mt-2">
            <ol>
                <li>Seluruh <strong>Tender/Seleksi Pengadaan Barang dan Jasa</strong> di lingkungan PT Jasa Marga Tollroad Maintenance <strong>segera dilaksanakan melalui aplikasi E-Procurement </strong>.</li>
                <li>Kepada seluruh Penyedia Barang/Jasa yang berminat mengikuti Tender/Seleksi Pengadaan Barang/Jasa, wajib mendaftar di aplikasi <a target="_blank" class="link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://eproc.jmtm.co.id/">eproc.jmtm.co.id</a> dengan cara mengisi Identitas Perusahaan dan Dokumen Persyaratan Vendor Management System (VMS) dengan lengkap dan benar hingga selesai dilakukan pembuktian dokumen.</li>
                <li>Jika penyedia Barang/Jasa tidak memenuhi persyaratan sebagaimana butir 2 (dua) di atas, maka <strong>tidak dapat mengikuti proses Tender/Seleksi Pengadaan Barang/Jasa di lingkungan PT Jasamarga Tollroad Maintenance</strong>.</li>
            </ol>
        </div>
        <p class="mt-5">Hormat Kami,</p>
        <p class="mt-5"><strong>Procurement Department</strong></p>
        <p><strong>PT Jasamarga Tollroad Maintenance</strong></p>
        
    </div>
</div>
@endsection
