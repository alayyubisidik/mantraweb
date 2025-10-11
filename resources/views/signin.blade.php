<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>


    <div class="d-flex flex-column justify-content-center align-items-center vh-100 text-dark">

        <h1 class="mb-4">Sign In</h1>

        @if (session("message-error"))
            <p class="text-danger fs-6">{{ session("message-error") }}</p>
        @endif

        <form action="/signin" method="post" class="bg-white p-4 rounded shadow" style="width: 400px;">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                @error('email')
                    <p class="text-danger fs-6">{{ $message }}</p>
                @enderror
                <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com"
                    value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                @error('password')
                    <p class="text-danger fs-6">{{ $message }}</p>
                @enderror
                <input name="password" type="password" class="form-control" id="password" placeholder="........">
            </div>

            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
