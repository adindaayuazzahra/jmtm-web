<!DOCTYPE html>
<html lang="en">

<head>
    @include('particials.header')
    <link rel="preload" href="{{asset('assets/bobcat2.glb')}}" as="fetch" type="model/gltf-binary">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">
</head>

<body>
    
    {{-- <div class="container"> --}}
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="navbar">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('home') }}">
                <img id="logo-light" src="{{ asset('assets/img-jmtm/logojmtmputih.png') }}" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered display-6"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('profil') ? 'active' : '' }}"
                            href="{{ route('profil') }}">Profil Perusahaan</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle {{ Route::is('layanan.general') || Route::is('layanan.kontrak') || Route::is('layanan.sewa.he') || Route::is('layanan.survey') || Route::is('layanan.produk') ? 'active' : '' }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk & Layanan<i
                                class=" ms-2 fas fa-angle-down ml-2"></i>
                        </a>
                        <ul class="dropdown-menu p-3 text-center text-md-start shadow">
                            <li><a class="dropdown-item" href="{{ route('layanan.general') }}">General Contractor</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('layanan.kontrak') }}">Kontrak Manajemen
                                    Pemeliharaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('layanan.survey') }}">Jasa Survey
                                    Pemeliharaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('layanan.sewa.he') }}">Penyewaan Alat Berat</a>
                            </li><br>
                            <li><a class="dropdown-item" href="{{ route('layanan.produk') }}">Produk JMTM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('pengadaan') ? 'active' : '' }}"
                            href="{{ route('pengadaan') }}">Pengadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('berita') ? 'active' : '' }}"
                            href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('kontak') ? 'active' : '' }}"
                            href="{{ route('kontak') }}">Kontak kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Aplikasi <i class=" ms-2 fas fa-angle-down ml-2"></i>
                        </a>
                        <ul class="dropdown-menu p-3 text-center text-md-start shadow">
                            <li><a class="dropdown-item" target="_blank"
                                    href="https://hris.jmtm.co.id/jmtm_karyawan/">HRIS</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://eproc.jmtm.co.id/">e-Procurement
                                    JMTM</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://ecatalog.jmtm.co.id/">e-Catalog
                                    JMTM</a></li>
                        </ul>
                    </li>
                    <div class="border-end border-light ms-1 me-2"></div>
                    <div class="d-flex justify-content-center p-0 m-0">
                        {{-- <li> --}}
                        <a class="nav-link me-2" target="_blank"
                            href="https://www.tiktok.com/@ptjmtm?_t=8eKoo8L1hVS&_r=1"><i
                                class="fa-brands fa-tiktok"></i></a>

                        <a class="nav-link" target="_blank" href="https://www.instagram.com/jmtm.official/"><i
                                class="fa-brands fa-instagram"></i></a>
                        {{-- </li> --}}
                    </div>
                </ul>

            </div>
        </div>
    </nav>
    {{-- </div> --}}

    @yield('content')

    <footer class="shadow-lg sticky-bottom">
        <div class="container py-5">
            <div class="row g-3 p-0">
                <div class="col-md-3 d-flex justify-content-center justify-content-md-start">
                    <img src="{{ asset('assets/img-jmtm/logojmtm.png') }}" height="60px" alt="">
                </div>
                <div class="col-md-3">
                    <p class="mb-2"><mark>TENTANG KAMI</mark></p>
                    <a href="{{ route('profil') }}"
                        class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Profil
                        Perushaan</a><br>
                    <a href="{{ route('disclaimer') }}"
                        class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Disclaimer</a>
                </div>
                <div class="col-md-3">
                    <p class="mb-2 "><mark>BISNIS KAMI</mark></p>
                    <a class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('layanan.general') }}">General Contractor</a><br>
                    <a class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('layanan.kontrak') }}">Kontrak Manajemen Pemeliharaan</a><br>
                    <a class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('layanan.survey') }}">Jasa Survey Pemeliharaan</a><br>
                    <a class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('layanan.sewa.he') }}">Penyewaan Alat Berat</a><br>
                    <a class="text-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('layanan.produk') }}">Produk JMTM</a>
                </div>

                <div class="col-md-3">
                    <p class="mb-2 "><mark>ALAMAT</mark></p>
                    <p>Gedung C Graha Service Provider, Lantai 1 Kantor Pusat PT Jasa Marga (Persero) Tbk. Plaza Tol
                        Taman Mini Indonesia Indah Jakarta 13550.</p>
                </div>
            </div>
        </div>
        <div class="container border-top border-dark py-4">
            <div class="row g-1">
                <div class="col-md-6">
                    <p class="text-center text-md-start">&copy; 2023 PT Jasamarga Tollroad Maintenance.</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                    <a class="me-3 fs-5 text-dark" target="_blank"
                        href="https://www.youtube.com/@jasamargatollroadmaintenan7051"><i
                            class="fa-brands fa-youtube"></i></a>

                    <a class="me-3 fs-5 text-dark" target="_blank"
                        href="https://www.tiktok.com/@ptjmtm?_t=8eKoo8L1hVS&_r=1"><i
                            class="fa-brands fa-tiktok"></i></a>

                    <a class="fs-5 text-dark" target="_blank" href="https://www.instagram.com/jmtm.official/"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    @include('particials.assetJs')
    @yield('script')

</body>

</html>
