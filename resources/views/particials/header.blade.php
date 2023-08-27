 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description"
     content="PT Jasamarga Tollroad Maintenance merupakan anak usaha dari PT Jasa Marga (Persero) Tbk, penyedia jalan bebas hambatan terbesar di Indonesia, di mana sebesar 99,82% kepemilikannya adalah milik Jasa Marga sebagai induk Perusahaan. Dikenal bergerak dalam bidang pemeliharaan jalan tol untuk mendukung lini bisnis utama Jasa Marga terutama dalam hal pemenuhan Standar Pelayanan Minimum (SPM) jalan tol, PT Jasamarga Tollroad Maintenance memiliki kantor pusat di Jakarta.">
 <meta name="keywords"
     content="jmtm, pt jmtm, maintenance jalan, perbaikan jalan, jalan dan jembatan, teknik sipil, aspal, cold mix, hot mix, konstruksi, pelebaran jalan, patching, maintenance tol, pemeliharaan jalan tol, PT Jasamarga Tollroad Maintenance, alat berat">
 <title>PT Jasamarga Tollroad Maintenance | @yield('title') </title>
 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img-jmtm/logojmtm.ico') }}">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />

 <script src="
 https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
 "></script>

 @if (session('message'))
     <script>
         Swal.fire({
             timer: 2000,
             icon: '{{ session('icon') }}',
             title: '{{ session('title') }}',
             text: '{{ session('message') }}',
         });
     </script>
 @endif
