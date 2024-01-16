<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="tema/css/font-face.css" rel="stylesheet" media="all">
    <link href="tema/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="tema/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="tema/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="tema/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="tema/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="tema/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="tema/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="imagens/logo_servicemanager.png" width="300" alt="CoolAdmin">
                            </a>
                        </div>                   

                        <div class="login-form">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail" >
                                    @error('email')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Senha" >
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                Esqueceu a Senha ?
                                            </a>
                                        @endif
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Entrar</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        {{-- <button class="au-btn au-btn--block au-btn--blue m-b-20">Entrar com o facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">Entrar com o twitter</button> --}}
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Não tem uma Conta ?
                                    <a href="{{url('register')}}">Crie uma aqui</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="tema/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="tema/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="tema/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="tema/vendor/slick/slick.min.js"></script>
    <script src="tema/vendor/wow/wow.min.js"></script>
    <script src="tema/vendor/animsition/animsition.min.js"></script>
    <script src="tema/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="tema/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="tema/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="tema/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="tema/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="tema/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="tema/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="tema/js/main.js"></script>

</body>

</html>
