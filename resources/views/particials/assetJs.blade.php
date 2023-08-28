<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script src="{{ asset('assets/js/aos.js') }}"></script>
<script>
    window.addEventListener("scroll", function() {
        var navbar = document.getElementById('navbar');

        if (window.pageYOffset > 0) {
            navbar.classList.add("scrolled");

        } else {
            navbar.classList.remove("scrolled");

        }
    });


    AOS.init({
        duration: 900
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
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
