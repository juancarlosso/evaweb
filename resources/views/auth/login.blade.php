<!DOCTYPE html>
<html lang="es">

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
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 b-center bg-size">
                <img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"
                    style="display: none;">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                    src="../assets/images/logo/logo.png" alt="looginpage"><img
                                    class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="post"  action="{{route('login.custom')}}">
                              @csrf
                                <h4>Acceso al sistema</h4>
                                <p>Por favor captura tus credenciales</p>
                                <p>
                                  @include('layouts.alertas')
                                  </p>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" type="email" name="email" required=""
                                        placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password"
                                            required="" placeholder="*********">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <h4><a href="{{route('forgot-password')}}" class="hover-a">Olvidé mi password</a></h4>
                                    <button class="btn btn-primary btn-block w-100 mt-4" type="submit">Entrar</button>
                                </div>
                            </form>
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
    </div>
</body>

</html>
