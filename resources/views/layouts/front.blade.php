<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Koin Toko indonesia</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('ui/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/vendors/popup/magnific-popup.css')}}">
    @yield('css')
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('ui/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('ui/css/responsive.css')}}">
</head>
<body>

    <!-- Start header Menu Area -->
    <header id="header" class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('') }}">Home</a></li> 
                            <li class="nav-item {{ request()->is('archive-news') ? 'active' : '' }}"><a class="nav-link" href="{{ route('type', 'news') }}">News & Ads</a></li> 
                            <li class="nav-item {{ request()->is('archive-travel') ? 'active' : '' }}"><a class="nav-link" href="{{ route('type', 'travel') }}">Travel Umroh</a></li>       
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header MEnu Area -->  


@yield('content')


@yield('js')
<script src="{{ asset('ui/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('ui/js/popper.js')}}"></script>
<script src="{{ asset('ui/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('ui/js/stellar.js')}}"></script>
<script src="{{ asset('ui/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('ui/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('ui/js/waypoints.min.js')}}"></script>
<script src="{{ asset('ui/js/mail-script.js')}}"></script>
<script src="{{ asset('ui/js/contact.js')}}"></script>
<script src="{{ asset('ui/js/jquery.form.js')}}"></script>
<script src="{{ asset('ui/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('ui/js/mail-script.js')}}"></script>
<script src="{{ asset('js/theme.js')}}"></script>
</body>
</html>