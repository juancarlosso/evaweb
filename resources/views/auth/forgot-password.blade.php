<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="PlataformaIngresos">
    <meta name="keywords" content="PlataformaIngresos">
    <meta name="author" content="PlataformaIngresos">
    <meta name="robots" content="noindex, nofollow">

    <title>{{ config('app.name') }}</title>
    <!-- Favicon -->
    @include('layouts.partials.favicon')


    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body class="light">

    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevrons-up">
            <polyline points="17 11 12 6 7 11"></polyline>
            <polyline points="17 18 12 13 7 18"></polyline>
        </svg></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card login-dark">
                        <div>
                            <div><a class="logo" href="index.html"><img class="img-fluid for-light"
                                        src="../assets/images/logo/logo.png" alt="looginpage"><img
                                        class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png"
                                        alt="looginpage"></a></div>
                            <div class="login-main">
                                <form class="theme-form" method="post" action="{{ route('recover-password') }}">
                                    @csrf
                                    <h4>¿Olvidaste tu password?</h4>
                                    <h5 class="mt-4">Captura la dirección de Email con la que fuiste registrado y
                                        presiona el botón RECUPERAR,
                                        te enviaremos las instrucciones necesarias para recuperar tu password.</h5>
                                    <p>
                                        @include('layouts.alertas')
                                    </p>
                                    <div class="form-group mt-4">
                                        <label class="col-form-label">Email</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="text" name="email" required="">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block w-100"
                                            type="submit">RECUPERAR</button>
                                        <p class="mt-4 mb-0 text-center"><a class="ms-2"
                                                href="{{ route('login') }}">Regresar a login</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/script1.js') }}"></script>

</body>

</html>
