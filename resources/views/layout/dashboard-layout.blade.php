<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark py-3">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex gap-4 align-items-center">
                <p class="text-white">Hello, {{ Auth::user()->name }}!!</p>
                <button class="btn bg-danger text-white" type="button">
                    <a class="text-decoration-none text-white" href="/signout">Sign Out</a>
                </button>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="bg-primary vh-100" style="width: 15%">
            <div class="mt-5 d-flex flex-column gap-5 align-items-center">
                <a class="text-white" href="/dashboard">Overview</a>
                @can('manage-users')
                    <a class="text-white" href="/dashboard/user">User</a>
                @endcan
                <a class="text-white" href="/dashboard/client">Client</a>
                <a class="text-white" href="/dashboard/project">Project</a>
                <a class="text-white" href="/dashboard/service">Service</a>
                <a class="text-white" href="/dashboard/testimonial">Testimonial</a>
            </div>
        </div>

        <div class="p-5 " style="width: 75%">
            <div class="">@yield('content')</div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('logoPreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = "#";
                preview.style.display = 'none';
            }
        }
    </script>
</body>

</html>
