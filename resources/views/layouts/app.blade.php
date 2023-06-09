<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo-black.svg')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('welcome/css/style.css')}}"/>
    <title>Login</title>
    <style>
        .btn-primary {
            background-color: #073547 !important;
        }


    </style>
</head>
<body>
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('welcome')}}">
            <span>
        IITU Library
            </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

        </nav>
    </div>
</header>
<section style="margin-top: 50px; display: flex; align-items: center">
    <div class="container-fluid h-custom">
        <h2 class="text-center mb-5"> Welcome to IITU Library</h2>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="	d-none d-sm-block col-md-9 col-lg-6 col-xl-5 sm-hidden">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @yield('content')
            </div>
        </div>
    </div>
</section>
</body>
</html>
