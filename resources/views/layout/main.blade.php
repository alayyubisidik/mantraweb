<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="overflow-x-hidden">

    <nav class="navbar bg-primary py-3">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Navbar</a>
            @auth
                @if (auth()->user()->role === 'team' || auth()->user()->role === 'admin')
                    <button class="btn bg-warning text-white" type="button">
                        <a class="text-decoration-none text-white" href="/dashboard">Dashboard</a>
                    </button>
                @endif
            @endauth
        </div>
    </nav>

    <div class="">@yield('content')</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
