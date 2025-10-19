<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <title>Login | Mantraweb</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}" />

    <!-- App css -->
    <link
      href="{{ asset('dashboard/css/bootstrap.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />
  </head>

  <!-- Top Bar Start -->
  <body>
    <div class="container-xxl">
      <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4 mx-auto">
                <div class="card">
                  <div
                    class="card-body p-0 bg-black auth-header-box rounded-top"
                  >
                    <div class="text-center p-3">
                      <a href="index.html" class="logo logo-admin">
                        <img
                          src="assets/images/logo-sm.png"
                          height="50"
                          alt="logo"
                          class="auth-logo"
                        />
                      </a>
                      <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">
                        Let's Get Started Approx
                      </h4>
                      <p class="text-muted fw-medium mb-0">
                        Sign in to continue to Approx.
                      </p>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <form class="my-4" action="/signin" method="post">
                        @csrf
                      <div class="form-group mb-2">
                        <label class="form-label" for="email"
                          >Email</label
                        >
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Enter email"
                          value="{{ old('email') }}"
                        />
                      </div>
                      <!--end form-group-->

                      <div class="form-group">
                        <label class="form-label" for="password"
                          >Password</label
                        >
                        <input
                          type="password"
                          class="form-control"
                          name="password"
                          id="password"
                          placeholder="Enter password"
                        />
                      </div>
                      <!--end form-group-->

                      <div class="form-group row mt-3">
                        <div class="col-sm-6">
                          <div
                            class="form-check form-switch form-switch-success"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="customSwitchSuccess"
                            />
                            <label
                              class="form-check-label"
                              for="customSwitchSuccess"
                              >Remember me</label
                            >
                          </div>
                        </div>
                        <!--end col-->
                        <div class="col-sm-6 text-end">
                          <a
                            href="auth-recover-pw.html"
                            class="text-muted font-13"
                            ><i class="dripicons-lock"></i> Forgot password?</a
                          >
                        </div>
                        <!--end col-->
                      </div>
                      <!--end form-group-->

                      <div class="form-group mb-0 row">
                        <div class="col-12">
                          <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">
                              Log In <i class="fas fa-sign-in-alt ms-1"></i>
                            </button>
                          </div>
                        </div>
                        <!--end col-->
                      </div>
                      <!--end form-group-->
                    </form>
                    <!--end form-->
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
            </div>
            <!--end row-->
          </div>
          <!--end card-body-->
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!-- container -->
  </body>
  <!--end body-->
</html>


{{-- <!doctype html>
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

</html> --}}
