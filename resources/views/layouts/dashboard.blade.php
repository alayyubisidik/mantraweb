<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Jasa Web Design dan Pemrograman" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}" />

    <!-- App css -->
    <link href="{{ asset('dashboard/libs/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/mobius1-selectr/selectr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/starability/starability-css/starability-all.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset("assets/dist/js/tinymce/tinymce.min.js") }}"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            height: 500,
            license_key: 'gpl'
        });
    </script>

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container-fluid">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0"
                                placeholder="Search here..." />
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    {{-- <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="iconoir-half-moon dark-mode"></i>
                            <i class="iconoir-sun-light light-mode"></i>
                        </a>
                    </li> --}}
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="{{ asset('landing/img/avatar/avatar-default.png') }}" alt=""
                                class="thumb-md rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0" style="min-width: 250px;">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('landing/img/avatar/avatar-default.png') }}" alt=""
                                        class="thumb-md rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">
                                        {{ auth()->user()->name }}
                                    </h6>
                                    <small class="text-muted mb-0">{{ ucwords(auth()->user()->role) }}</small>
                                </div>
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <small class="text-muted px-2 pb-1 d-block">Account</small>
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                    class="las la-tachometer-alt fs-18 me-1 align-text-bottom"></i>
                                Dashboard</a>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                    class="las la-power-off fs-18 me-1 align-text-bottom"></i>
                                Logout</a>
                            <div class="dropdown-divider mb-0"></div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Sidebar Start -->
    <div class="startbar d-print-none">

        <!-- Brand Section Start-->
        <div class="brand">
            <a href="{{ route('dashboard') }}" class="logo">
                <span>
                    <img src="{{ asset('dashboard/images/logo-dark.png') }}" alt="logo-small" class="logo-sm" />
                </span>
                <span class="">
                    <img src="{{ asset('dashboard/images/logo.png') }}" alt="logo-large" class="logo-lg logo-dark" />
                </span>
            </a>
        </div>
        <!-- Brand Section End-->

        <!--Navigation Section Start-->
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Main</span>
                        </li>

                        <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-label mt-2">
                            <small class="label-border">
                                <div class="border_left hidden-xs"></div>
                                <div class="border_right"></div>
                            </small>
                            <span>Management</span>
                        </li>

                        @unless (Auth::user()->role === 'team')
                            <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                                <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}"
                                    href="{{ route('users.index') }}">
                                    <i class="iconoir-user-badge-check menu-icon"></i>
                                    <span>User</span>
                                </a>
                            </li>
                        @endunless

                        <li class="nav-item {{ request()->routeIs('teams.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('teams.*') ? 'active' : '' }}"
                                href="{{ route('teams.index') }}">
                                <i class="iconoir-learning menu-icon"></i>
                                <span>Team</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
                                href="{{ route('categories.index') }}">
                                <i class="iconoir-laptop-dev-mode menu-icon"></i>
                                <span>Category</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('features.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('features.*') ? 'active' : '' }}"
                                href="{{ route('features.index') }}">
                                <i class="iconoir-laptop-dev-mode menu-icon"></i>
                                <span>Product Feature</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('sections.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('sections.*') ? 'active' : '' }}"
                                href="{{ route('sections.index') }}">
                                <i class="iconoir-laptop-dev-mode menu-icon"></i>
                                <span>Product Section</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('products.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                                href="{{ route('products.index') }}">
                                <i class="iconoir-laptop-dev-mode menu-icon"></i>
                                <span>Product</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('clients.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('clients.*') ? 'active' : '' }}"
                                href="{{ route('clients.index') }}">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Client</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}"
                                href="{{ route('projects.index') }}">
                                <i class="iconoir-presentation menu-icon"></i>
                                <span>Project</span>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('testimonials.*') ? 'active' : '' }}">
                            <a class="nav-link {{ request()->routeIs('testimonials.*') ? 'active' : '' }}"
                                href="{{ route('testimonials.index') }}">
                                <i class="iconoir-chat-lines menu-icon"></i>
                                <span>Testimonial</span>
                            </a>
                        </li>
                    </ul>

                    <div class="update-msg text-center">
                        <div
                            class="d-flex justify-content-center align-items-center thumb-lg update-icon-box rounded-circle mx-auto">
                            <i class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i>
                        </div>
                        <h5 class="mt-3">Mantraweb Dashboard</h5>
                        <p class="mb-3 text-muted">
                            Semua sistem berjalan normal.
                        </p>
                        <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">hehehe</a>
                    </div>
                </div>
            </div>
            <!--end startbar-collapse-->
        </div>
        <!--Navigation Section End-->

    </div>
    <!--Sidebar End-->

    <div class="startbar-overlay d-print-none"></div>

    <!-- Page Wrapper Start-->
    <div class="page-wrapper">

        <div class="page-content">

            <!-- Content Section Start-->
            @yield('content')
            <!-- Content Section Start-->

            <!-- Footer Start-->
            <footer class="footer text-center text-sm-start d-print-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0 rounded-bottom-0">
                                <div class="card-body">
                                    <p class="text-muted mb-0">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        Mantraweb
                                        <span class="text-muted d-none d-sm-inline-block float-end">
                                            Design with
                                            <i class="iconoir-heart-solid text-danger align-middle"></i>
                                            by Perapal Mantra</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Start-->

        </div>
    </div>
    <!-- Page Wrapper End -->


    <!-- Javascript  -->
    <script src="{{ asset('dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>
    <script src="{{ asset('dashboard/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/index.init.js') }}"></script>
    <script src="{{ asset('dashboard/js/DynamicSelect.js') }}"></script>
    <script src="{{ asset('dashboard/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/datatable.init.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/form-validation.js') }}"></script>
    <script src="{{ asset('dashboard/libs/mobius1-selectr/selectr.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/forms-advanced.js') }}"></script>
    <script src="{{ asset('dashboard/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/sweet-alert.init.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (document.querySelector("#clientId")) new Selectr("#clientId");
            if (document.querySelector("#status")) new Selectr("#status");
            if (document.querySelector("#rating")) new Selectr("#rating");
            if (document.querySelector("#multiSelect")) {
                new Selectr("#multiSelect", {
                    multiple: true,
                    placeholder: "Select one or more categories",
                    searchable: true
                });
            }
        });
    </script>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('logoPreview');
            const oldLogo = input.closest('.col-sm-9').querySelector(
                'img.img-thumbnail:not(#logoPreview)'); // ambil logo lama

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                    preview.classList.add('d-block');
                };
                reader.readAsDataURL(input.files[0]);

                // sembunyikan logo lama (kalau ada)
                if (oldLogo) {
                    oldLogo.classList.add('d-none');
                }
            }
        }
    </script>


    <script>
        document.querySelectorAll('input[name="rating"]').forEach((radio) => {
            radio.addEventListener('change', () => {
                const selected = parseInt(radio.value);
                document.querySelectorAll('label[for^="star"]').forEach((label, index) => {
                    label.classList.toggle('text-warning', 5 - index <= selected);
                    label.classList.toggle('text-muted', 5 - index > selected);
                });
            });
        });
    </script>

    <script>
        @if (session('message-success'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

            Toast.fire({
                icon: 'success',
                title: '{{ session('message-success') }}'
            });
        @endif

            @if (session('message-error'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    background: '#f8d7da',
                    color: '#842029',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });

                Toast.fire({
                    icon: 'error',
                    title: '{{ session('message-error') }}'
                });
            @endif
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();

                    const form = this.closest('form'); // ambil form terdekat
                    const data = this.getAttribute('data-name');

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: `Data "${data}" akan dihapus secara permanen.`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // submit form jika dikonfirmasi
                        }
                    });
                });
            });
        });
    </script>


</body>

</html>
