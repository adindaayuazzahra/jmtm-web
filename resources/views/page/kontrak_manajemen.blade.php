@extends('template.web')
@section('title', 'Kontrak Manajemen')
@section('content')
    <div class="jumbotron-page shadow">
        <div id="content" class="text-white d-flex align-items-end">
            <div class="container mb-4">
                <h1 data-aos="slide-right">Produk & Layanan</h1>
                <p data-aos="slide-up">Kontrak Manajemen Pemeliharaan Jalan Tol</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark"><a href="{{ route('home') }}"
                            class="text-dark link-underline link-underline-opacity-0">Beranda</a></li>
                    <li class="breadcrumb-item">Produk & Layanan</li>
                    <li class="breadcrumb-item"><strong>Kontrak Manajemen Pemeliharaan</strong></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-2 d-flex justify-content-between align-items-center">
            <div data-aos="slide-right" class="col-md-6">
                <h2 class="text-md-start text-center mb-4"><strong>Layanan Kontrak Manajemen Pemeliharaan</strong></h2>
                <p class="text-md-start text-center">Kontrak manajemen pemeliharaan merupakan kegiatan perencanaan dan
                    pelaksanaan pemeliharaan, peningkatan kapasitas, dan pemeliharaan rutin jalan tol dalam rangka pemenuhan
                    Standar Pelayanan Minimal (SPM) jalan tol pada ruas-ruas jalan tol yang dioperasikan oleh PT Jasa Marga
                    (Persero) Tbk. dan kelompok usahanya, dimana pemenuhan SPM dilaksanakan berdasarkan <strong>Peraturan
                        Menteri Pekerjaan Umum dan Perumahan Rakyat Nomor 16/PRT/M/2014 Tahun 2014</strong> tentang Standar
                    Pelayanan Minimal Jalan Tol.</p>
            </div>
            <div data-aos="slide-left" class="col-md-5">
                <img src="{{ asset('assets/img/kontrak_manajemen.jpg') }}" class=" w-100 rounded" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="lingkup">
        <div class="row g-4">
            <h2 data-aos="zoom-in" class="text-center"><strong>Lingkup Pekerjaan</strong></h2>
            <p class="text-center mb-2">Lingkup pekerjaan yang dilakukan oleh PT Jasamarga Tollroad Maintenance pada kontrak
                manajemen pemeliharaan jalan tol antara lain:</p>
            <div data-aos="fade-right" class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Pekerjaan pemeliharaan periodik</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p>meliputi pekerjaan Scrapping Filling Overlay (SFO), pekerjaan rekonstruksi, pekerjaan penambahan
                            lajur jalan, pekerjaan peningkatan kapasitas gerbang, pekerjaan renovasi gerbang tol, penanganan
                            longsoran, perbaikan jembatan, pekerjaan lanskap, pekerjaan beautifikasi, pekerjaan pemasangan
                            dan/atau penggantian lampu PJU, serta pekerjaan pengecatan marka jalan.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Pemeliharaan Rutin</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p class="">meliputi pemeliharaan patching & surface dressing
                            jalan tol, pemeliharaan saluran jalan dan jembatan tol, pemeliharaan sarana PJU, pemeliharaan
                            jembatan pada jalan tol, pembabatan rumput di luar area gerbang tol dan kantor cabang,
                            pembersihan jalan tol dan sekitar jalan tol, pertamanan di wilayah jalan tol, pekerjaan
                            pemeliharaan mekanikal & elektrikal di luar area gerbang tol dan kantor cabang, serta pekerjaan
                            pemeliharaan rambu, guard rail, dan marka jalan.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Penanggulangan keadaan darurat</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p>Penanggulangan keadaan darurat pada wilayah jalan tol di luar area gerbang tol dan kantor cabang.
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header d-flex justify-content-center align-items-center text-center border-0">
                        <h5 class="text-white">Penyusunan Program Pemeliharaan</h5>
                    </div>
                    <div class="card-body flex-column d-flex justify-content-center text-center">
                        <p>meliputi pekerjaan supervisi, pekerjaan perencanaan, dan pekerjaan pengembangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="lingkup">
        <h2 data-aos="zoom-in" class="text-center mb-5"><strong>Pangsa Pasar JMTM Dalam Lini Kontrak Manajemen</strong>
        </h2>
        <div  class="row g-3 mt-4">
            <div data-aos="fade-right" class="col-md-6 d-flex justify-content-center">
                <img src="{{asset('assets/img/infografis_kontrak2.png')}}" class="w-100" alt="">
            </div>
            <div data-aos="fade-left" class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                <h3 class="text-center mb-2 abu"><strong>Total Panjang Jalan Tol <br>Jasa Marga Group </strong> </h3>
                <h1 class="text-center mb-5 biru">1.603 km </h1>
                <h3 class="text-center mb-2 abu"><strong>Total Panjang Jalan Tol Kontrak Manajemen Bidang Pemeliharaan oleh JMTM
                </strong> </h3>
                <h1 class="text-center mb-5 biru">± 1.131,74 km</h1>
            </div>  
        </div>
    </div>

    <div class="container" id="lingkup">
        <div class="row g-3">
            <div data-aos="slide-right" class="col-md-6 d-flex flex-column jusitfy-content-center">
                <h3 data-aos="zoom-in" class="text-center mb-5"><strong>Manajemen Kontrak <br>Pada Lingkup Jasa Marga Group</strong>
                </h3>
                <img class="w-100" src="{{ asset('assets/img/peta.jpg') }}">
            </div>
            <div data-aos="slide-left" class="col-md-6">
                {{-- <div id="chartdiv" style="width: 100%; height: 500px;"></div> --}}
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <div class="d-flex d-inline-block align-text-top">
                                    REGIONAL NUSANTARA TOLLROAD <img height="20px"
                                        src="{{ asset('assets/img/rnt.png') }}" class="ms-2" alt="">
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kontrak Manajemen JMTM</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        <tr>
                                            <th scope="row">{{ $i }}</th>@php $i++; @endphp
                                            <td>Belawan-Medan-Tj.Morawa</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>PT Jasamarga Kualanamu Tol</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>PT Jasamarga Bali Tol</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>PT Jasamarga Balikpapan Samarinda</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>PT Jasamarga Manado Bitung</td>
                                            <td>APJT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="d-flex d-inline-block align-text-top">
                                    REGIONAL TRANSJAWA TOLLROAD <img height="20px" src="{{ asset('assets/img/rtt.png') }}"
                                        class="ms-2" alt="">
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kontrak Manajemen JMTM</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        <tr>
                                            <th scope="row">{{ $i }}</th>@php $i++; @endphp
                                            <td>Jakarta-Cikampek</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>PT Jasamarga Jalanlayang Cikampek</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Palimanan-Kanci</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>PT Jasamarga Semarang Batang</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Semarang A, B, C</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>PT Jasamarga Solo Ngawi</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>PT Jasamarga Ngawi Kertosono</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>PT Jasamarga Surabaya Mojokerto</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Surabaya Gempol</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>PT Jasamarga Gempol Pasuruan</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>PT Jasamarga Pandaan Malang</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td>PT Jasamarga Pandaan Tol</td>
                                            <td>APJT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="d-flex d-inline-block align-text-top">
                                    REGIONAL METROPOLITAN TOLLROAD <img height="20px"
                                        src="{{ asset('assets/img/rmt.png') }}" class="ms-2" alt="">
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kontrak Manajemen JMTM</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        <tr>
                                            <th scope="row">{{ $i }}</th>@php $i++; @endphp
                                            <td>Jakarta-Tangerang-Cengkareng</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jakarta-Bogor-Ciawi</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jalantol Lingkar Jakarta</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>PT Marga Lingkar Jakarta</td>
                                            <td>APJT</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Purbaleunyi</td>
                                            <td>Cabang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>PT Jasamarga Kunciran Cengkareng</td>
                                            <td>APJT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    {{-- <script>
        am5.ready(function() {

            // Create root element
            var root = am5.Root.new("chartdiv");

            // Set themes
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            // Create chart
            var chart = root.container.children.push(am5percent.PieChart.new(root, {
                layout: root.verticalLayout,
                innerRadius: am5.percent(50),
            }));
            // Create series
            var series = chart.series.push(am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category",
                alignLabels: false
            }));


            series.labels.template.setAll({
                textType: "circular",
                centerX: 0,
                centerY: 0,
            });
            series.labels.template.set("forceHidden", true);
            series.ticks.template.set("visible", false);
            // Set data

            series.data.setAll([{
                    value: 51,
                    category: "PT Jasa Marga Persero Tbk."
                },
                {
                    value: 10,
                    category: "PT Astra Tol Nusantara"
                },
                {
                    value: 2,
                    category: "PT Citra Manggala Nusantara Persada"
                },
                {
                    value: 11,
                    category: "PT Waskita Karya"
                },
                {
                    value: 23,
                    category: "PT Hutama Karya"
                },
                {
                    value: 2,
                    category: "PT Nusantara Infrastruktur"
                },
                {
                    value: 1,
                    category: "Lain-lain"
                },
            ]);

            // Create legend
            var legend = chart.children.push(am5.Legend.new(root, {
                centerX: am5.percent(50),
                x: am5.percent(50),
                marginTop: 15,
                marginBottom: 15,
            }));

            legend.data.setAll(series.dataItems);
            // Add custom funcitonality to legend
            legend.itemContainers.each(function(itemContainer) {
                itemContainer.events.removeType("click");
                itemContainer.events.on("click", function(event) {
                    var target = event.target;
                    var dataItem = target.dataItem;
                    if (dataItem) {
                        var seriesDataItem = dataItem.dataContext;
                        if (seriesDataItem) {
                            var slice = seriesDataItem.get("slice");
                            if (slice && slice.set) {
                                if (slice.get("active")) {
                                    slice.set("active", false);
                                } else {
                                    slice.set("active", true);
                                }
                            }
                        }
                    }
                })
            })
            // Play initial series animation
            series.appear(1000, 100);

        }); // end am5.ready()
    </script> --}}


    <!-- HTML -->




    {{-- <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/geodata/indonesiaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script> --}}
    {{-- <script>
        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);

            let map = am4core.create("chartdiv", am4maps.MapChart);
            map.geodata = am4geodata_indonesiaLow; // Gunakan geodata yang sesuai
            map.projection = new am4maps.projections.Miller();

            let polygonSeries = new am4maps.MapPolygonSeries();
            map.series.push(polygonSeries);
            polygonSeries.useGeodata = true;

            // Konfigurasi tampilan polygon (provinsi)
            let polygonTemplate = polygonSeries.mapPolygons.template;
            polygonTemplate.tooltipText = "{name}"; // Tampilkan nama provinsi ketika di-hover
            polygonTemplate.fill = am4core.color("#7c91a9");

            // Konfigurasi efek hover
            // let hs = polygonTemplate.states.create("hover");
            // hs.properties.fill = am4core.color("#367B25");
        });
    </script> --}}
    {{-- <script>
        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);

            let map = am4core.create("chartdiv", am4maps.MapChart);
            map.geodata = am4geodata_indonesiaLow;
            map.projection = new am4maps.projections.Miller();

            let polygonSeries = new am4maps.MapPolygonSeries();
            map.series.push(polygonSeries);
            polygonSeries.useGeodata = true;

            // Data khusus untuk beberapa provinsi
            polygonSeries.data = [{
                "id": "ID-JK",
                "name": "Jakarta",
                "people": ["Budi", "Susi", "Joko"],
                "color": am4core.color("#4A90E2")
            }, {
                "id": "ID-JB",
                "name": "Jawa Barat",
                "people": ["Asep", "Dewi", "Rina"],
                "color": am4core.color("#FF5733")
            }];

            let polygonTemplate = polygonSeries.mapPolygons.template;

            // Default: nonaktifkan interaksi untuk semua provinsi
            polygonTemplate.interactive = false;

            // Aktifkan interaksi hanya untuk provinsi dengan data
            polygonTemplate.adapter.add("interactive", function(interactive, target) {
                if (target.dataItem && target.dataItem.dataContext && target.dataItem.dataContext.people) {
                    return true;
                }
                return false;
            });

            // Mengatur tooltip dan warna berdasarkan data
            polygonTemplate.tooltipText = "{name}: {people}";
            polygonTemplate.propertyFields.fill = "color";

            // Jika tidak ada data khusus, gunakan warna default
            if (!polygonTemplate.fill) {
                polygonTemplate.fill = am4core.color("#7c91a9");
            }
        });
    </script> --}}


    {{-- <script>
        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);

            let map = am4core.create("chartdiv", am4maps.MapChart);
            map.geodata = am4geodata_indonesiaLow;
            map.projection = new am4maps.projections.Miller();

            let polygonSeries = map.series.push(new am4maps.MapPolygonSeries());
            polygonSeries.useGeodata = true;

            polygonSeries.data = [{
                "id": "ID-JK",
                "name": "Jakarta",
                "people": ["Budi", "Susi", "Joko"],
                "color": am4core.color("#4A90E2")
            }, {
                "id": "ID-JB",
                "name": "Jawa Barat",
                "people": ["Asep", "Dewi", "Rina"],
                "color": am4core.color("#FF5733")
            }];

            let polygonTemplate = polygonSeries.mapPolygons.template;
            polygonTemplate.propertyFields.fill = "color";

            polygonTemplate.adapter.add("tooltipText", function(text, target) {
                if (target.dataItem && target.dataItem.dataContext && target.dataItem.dataContext.people) {
                    return target.dataItem.dataContext.name + ": " + target.dataItem.dataContext.people
                        .join(", ");
                }
                return text;
            });

            polygonTemplate.events.on("hit", function(ev) {
                if (ev.target.dataItem && ev.target.dataItem.dataContext && ev.target.dataItem.dataContext
                    .people) {
                    ev.event.preventDefault();
                }
            });
        });
    </script> --}}
@endsection
