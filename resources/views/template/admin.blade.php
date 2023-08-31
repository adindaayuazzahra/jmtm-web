<!DOCTYPE html>
<html lang="en">

<head>
    @include('particials.header')
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link
        href="https://cdn.datatables.net/v/bs5/dt-1.13.6/fh-3.4.0/r-2.5.0/datatables.min.css" rel="stylesheet">
    {{-- sweetalert --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top  navbar-light bg-warning">
        <div class="container-fluid px-4">
            <a class="navbar-brand logo" href="{{ route('admin.home') }}">
                <img id="logo-light" src="{{ asset('assets/img-jmtm/logojmtmhitam.png') }}" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered display-6"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.home') ? 'active' : '' }}"
                            href="{{ route('admin.home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.berita') ? 'active' : '' }}"
                            href="{{ route('admin.berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.dirkom') ? 'active' : '' }}"
                            href="{{ route('admin.dirkom') }}">Direksi Komisaris</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Produk & Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">General Contractor</a></li>
                            <li><a class="dropdown-item" href="">Kontrak Manajemen Pemeliharaan</a></li>
                            <li><a class="dropdown-item" href="">Jasa Survey Pemeliharaan</a></li>
                            <li><a class="dropdown-item" href="">Penyewaan Alat Berat</a></li>
                            <li><a class="dropdown-item" href="">Produk JMTM</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li> <a class="btn btn-danger rounded-pill" href="{{ route('logout.do') }}">Logout <i
                                class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <br><br>
    {{-- <footer class="shadow bg-warning p-0">
        <div class="container pt-3 pb-2">
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
    </footer> --}}
    @include('particials.assetJs')
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js" nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht"></script>
    @if (session('message'))
        <script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht">
            Swal.fire({
                timer: 2000,
                icon: '{{ session('icon') }}',
                title: '{{ session('title') }}',
                text: '{{ session('message') }}',
            });
        </script>
    @endif
    <script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht"
        src="https://cdn.datatables.net/v/bs5/dt-1.13.6/fh-3.4.0/r-2.5.0/datatables.min.js"></script>
    @yield('script')
</body>

</html>
