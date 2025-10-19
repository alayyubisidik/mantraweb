<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Mantraweb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
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
                    <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="iconoir-half-moon dark-mode"></i>
                            <i class="iconoir-sun-light light-mode"></i>
                        </a>
                    </li>
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="{{ asset('dashboard/images/users/avatar-1.jpg') }}" alt=""
                                class="thumb-md rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('dashboard/images/users/avatar-1.jpg') }}" alt=""
                                        class="thumb-md rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">
                                        William Martin
                                    </h6>
                                    <small class="text-muted mb-0">Front End Developer</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <small class="text-muted px-2 pb-1 d-block">Account</small>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="las la-user fs-18 me-1 align-text-bottom"></i>
                                Profile</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item text-danger" href="{{ route('signout') }}"><i
                                    class="las la-power-off fs-18 me-1 align-text-bottom"></i>
                                Logout</a>
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
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('dashboard/images/logo-sm.png') }}" alt="logo-small" class="logo-sm" />
                </span>
                <span class="">
                    <img src="{{ asset('dashboard/images/logo-light.png') }}" alt="logo-large"
                        class="logo-lg logo-light" />
                    <img src="{{ asset('dashboard/images/logo-dark.png') }}" alt="logo-large"
                        class="logo-lg logo-dark" />
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                                <span class="badge text-bg-info ms-auto">New</span>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    <i class="iconoir-user-badge-check menu-icon"></i>
                                    <span>User</span>
                                </a>
                            </li>
                        @endunless

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service.index') }}">
                                <i class="iconoir-laptop-dev-mode menu-icon"></i>
                                <span>Service</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('client.index') }}">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Client</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('project.index') }}">
                                <i class="iconoir-presentation menu-icon"></i>
                                <span>Project</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('testimonial.index') }}">
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
                        <h5 class="mt-3">Mannat Themes</h5>
                        <p class="mb-3 text-muted">
                            Approx is a high quality web applications.
                        </p>
                        <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">Upgrade your
                            plan</a>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (document.querySelector("#clientId")) new Selectr("#clientId");
            if (document.querySelector("#status")) new Selectr("#status");
            if (document.querySelector("#rating")) new Selectr("#rating");
            if (document.querySelector("#multiSelect")) {
                new Selectr("#multiSelect", {
                    multiple: true,
                    placeholder: "Select one or more services",
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
                reader.onload = function(e) {
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

</body>

</html>
