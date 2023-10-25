@extends('template.web')
@section('title', 'Beranda')
@section('content')
    <div class="jumbotron" id="home">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('assets/img/vidcomp.mp4') }}" type="video/mp4">
        </video>
        <div id="content" class="text-white d-flex align-items-center">
            <div class="container">
                <h1 data-aos="slide-right">PT Jasamarga Tollroad Maintenance</h1>
                <p data-aos="slide-up">JMTM merupakan anak perusahaan <strong>PT Jasa Marga (Persero) Tbk</strong> <br>
                    dengan komposisi saham <strong>99,9%</strong> milik PT Jasa Marga (Persero) Tbk <br> dan
                    <strong>0,1%</strong> persen milik Induk Koperasi Karyawan Jasa Marga.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container" data-aos="slide-up">
            <div class="row datagrafik p-5">
                <div class="col-md-12">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-sm-center justify-content-md-end">
                                    <i class="fa-solid fa-person-digging display-3"></i>
                                </div>
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <div>
                                        <p>1200 Ton per Hari</p>
                                        <h5><strong>Asphalt</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-sm-center justify-content-md-end">
                                    <i class="fa-solid fa-road display-3"></i>
                                </div>
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <div>
                                        <p>± 1.131,74 km</p>
                                        <h5><strong>Jalan Tol</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-sm-center justify-content-md-end">
                                    <i class="fa-solid fa-bridge display-3"></i>
                                </div>
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <div>
                                        <p>200 kilometer</p>
                                        <h5><strong>Jembatan</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-sm-center justify-content-md-end">
                                    <i class="fa-solid fa-snowplow display-3"></i>
                                </div>
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <div>
                                        <p>108 Buah</p>
                                        <h5><strong>Alat Berat</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="home-profil">
        <div class="container">
            <div class="row mt-4">
                <div data-aos="slide-right" class="col-md-5 d-flex align-items-center">
                    <div>
                        <p class="header mb-1"><mark>INFO PERUSAHAAN</mark></p>
                        <h1 class="biru mb-2">TENTANG KAMI</h1>
                        <p>PT Jasamarga Tollroad Maintenance merupakan anak usaha dari PT Jasa Marga (Persero) Tbk, penyedia
                            jalan bebas hambatan terbesar di Indonesia, di mana sebesar 99,82% kepemilikannya adalah milik
                            Jasa Marga sebagai induk Perusahaan. Dikenal bergerak dalam bidang pemeliharaan jalan tol untuk
                            mendukung lini bisnis utama Jasa Marga terutama dalam hal pemenuhan Standar Pelayanan Minimum
                            (SPM) jalan tol.</p>
                        <a href="{{ route('profil') }}" class="btn btn-outline-dark rounded-pill mt-4"
                            role="button">SELENGKAPNYA <span class="ms-1"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div id="3d" class="col-md-7">
                    <embed nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht" src="{{ route('bobcat') }}" data-aos="slide-up" type="" class="w-100" height="500px"
                        width="100%">
                </div>
            </div>
        </div>
    </section>


    <section id="home-layanan">
        <div class="container">
            <div data-aos="zoom-out" class="row">
                <p class="header mb-1 text-center"><mark>LINI BISNIS PT JMTM</mark></p>
                <h1 class="biru mb-5 text-center">PRODUK & LAYANAN</h1>
            </div>
            <div data-aos="zoom-in" class="row g-3">
                <div class="col-md col-sm-12">
                    <div class="card h-100 shadow justify-content-between">
                        <div class="col">
                            <i class="fa-solid fa-file-contract display-5 mb-3 abu"></i>
                            <h5 class="biru">Kontrak Manajemen Pemeliharaan</h5>
                            <p class="mt-2">Kontrak manajemen pemeliharaans merupakan kegiatan perencanaan dan pelaksanaan
                                pemeliharaan jalan tol.</p>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('layanan.kontrak') }}"
                                class="btn btn-outline-dark btn-sm mt-3 stretched-link rounded-pill" role="button">Lihat
                                Detail <i class="fa-solid fa-circle-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="card h-100 shadow justify-content-between">
                        <div class="col">
                            <i class="fa-solid fa-oil-well display-5 abu mb-3"></i>
                            <h5 class="biru">General Contractor</h5>
                            <p class="mt-2">JMTM dalam bidang proyek konstruksi saat ini telah memperoleh kepercayaan
                                untuk mengerjakan proyek skala besar dari berbagai pihak.</p>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('layanan.general') }}"
                                class="btn btn-outline-dark btn-sm mt-3 stretched-link rounded-pill" role="button">Lihat
                                Detail <i class="fa-solid fa-circle-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="card h-100 shadow justify-content-between">
                        <div class="col">
                            <i class="fa-solid fa-road-bridge display-5 abu mb-3"></i>
                            <h5 class="biru">Jasa Survey Pemeliharaan Jalan dan Jembatan</h5>
                            <p class="mt-2">JMTM menyediakan pekerjaan sipil yang komprehensif untuk layanan survey
                                pemeliharaan Jalan Tol dan Jembatan.</p>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('layanan.survey') }}"
                                class="btn btn-outline-dark btn-sm mt-3 stretched-link rounded-pill" role="button">Lihat
                                Detail <i class="fa-solid fa-circle-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="card h-100 shadow justify-content-between">
                        <div class="col">
                            <i class="fa-solid fa-tractor display-5 abu mb-3"></i>
                            <h5 class="biru">Jasa Penyewaan Alat Berat</h5>
                            <p class="mt-2">JMTM memiliki layanan penyewaan alat berat untuk lingkup internal dan
                                external. </p>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('layanan.sewa.he') }}"
                                class="btn btn-outline-dark btn-sm mt-3 stretched-link rounded-pill" role="button">Lihat
                                Detail <i class="fa-solid fa-circle-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="card h-100 shadow justify-content-between">
                        <div class="col">
                            <i class="fa-solid fa-box-open display-5 abu mb-3"></i>
                            <h5 class="biru">Produk JMTM</h5>
                            <p class="mt-2">JMTM Memproduksi berbagai macam aspal yang sudah memiliki kualitas yang sudah
                                teruji.</p>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('layanan.produk') }}"
                                class="btn btn-outline-dark btn-sm mt-3 stretched-link rounded-pill" role="button">Lihat
                                Detail <i class="fa-solid fa-circle-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="home-berita">
        <div class="container">
            <div data-aos="zoom-out" class="row">
                <p class="header mb-1 text-center"><mark>BERITA DAN PUBLIKASI</mark></p>
                <h1 class="biru mb-5 text-center">KUMPULAN BERITA JMTM</h1>
            </div>
            <div data-aos="zoom-in" class="row grid gap-0 row-gap-3">
                @foreach ($beritas as $berita)
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <img src="{{ Storage::url('images/' . $berita->foto) }}" class="card-img-top"
                                alt="...">
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
        </div>
        <div class="row text-center">
            <div>
                <a href="{{ route('berita') }}" class="btn btn-outline-dark rounded-pill mt-4" role="button">Lihat
                    Berita Lainnya <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
            </div>
        </div>
    </section>
@endsection
{{-- @section('script')
    <script>
        $(document).ready(function() {


            // Sembunyikan loader setelah 1 menit
            setTimeout(function() {
                $("#page-loader").addClass("d-none");
            }, 30000); // 60000 milidetik = 1 menit
        });
    </script>
@endsection --}}
{{-- @section('script')
<script type="importmap">
    {
				"imports": {
					"three": "./three/build/three.module.js",
					"three/addons/": "./three/jsm/"
				}
			}
	</script>

<script type="module">

    import * as THREE from 'three';

        import Stats from 'three/addons/libs/stats.module.js';

        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';

        import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        import { DRACOLoader } from 'three/addons/loaders/DRACOLoader.js';

        let mixer;

        const clock = new THREE.Clock();
        const container = document.getElementById('3d');

        const stats = new Stats();
        container.appendChild(stats.dom);
        stats.dom.style.display = 'none';

        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        container.appendChild(renderer.domElement);

        const pmremGenerator = new THREE.PMREMGenerator(renderer);

        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0xffffff);
        scene.environment = pmremGenerator.fromScene(new RoomEnvironment(renderer), 0.04).texture;

        const camera = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 1, 100);
        camera.position.set(5, 1, 8);

        const controls = new OrbitControls(camera, renderer.domElement);
        controls.target.set(0, 0.5, 0);
        controls.update();
        controls.enablePan = false;
        controls.enableDamping = true;

        const dracoLoader = new DRACOLoader();
        dracoLoader.setDecoderPath('./three/jsm/libs/draco/gltf/');

        const loader = new GLTFLoader();
        loader.setDRACOLoader(dracoLoader);
        loader.load('./assets/bobcat2.glb', function (gltf) {

            const model = gltf.scene;
            model.position.set(0, 0.5, -2);
            model.scale.set(0.0015, 0.0015, 0.0015);
            scene.add(model);

            mixer = new THREE.AnimationMixer(model);
            // mixer.clipAction( gltf.animations[ 0 ] ).play();

            animate();

        }, undefined, function (e) {

            console.error(e);

        });


        window.onresize = function () {

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize(window.innerWidth, window.innerHeight);

        };


        function animate() {

            requestAnimationFrame(animate);

            const delta = clock.getDelta();

            mixer.update(delta);

            controls.update();

            stats.update();

            renderer.render(scene, camera);

        }


    </script>
@endsection --}}
