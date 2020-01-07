
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('act/assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{ asset('act/assets/styles/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('act/assets/styles/vendor/datatables.min.css')}}">
    @yield('css')
</head>

<body>
    <div class="app-admin-wrap">
        <div class="main-header">
            <div class="logo">
                <img src="https://siamonsi.files.wordpress.com/2014/04/cms-image.jpg" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="https://static.thenounproject.com/png/17241-200.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> {{ Auth::user()->name }}
                            </div>
                            <a onclick="document.getElementById('logout').submit()" class="dropdown-item" href="#">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top menu end -->

        <div class="side-content-wrap">
            <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('/dashboard') }}">
                            <i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="berita">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">News</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="ads">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">Ads</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ route('news.index') }}">
                            <i class="nav-icon i-File-Horizontal-Text"></i>
                            <span class="nav-text">List Ads & News</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>

            <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
                <!-- Submenu Dashboards -->
                <ul class="childNav" data-parent="dashboard">
                    <li class="nav-item">
                        <a href="dashboard.v1.html">
                            <i class="nav-icon i-Clock-3"></i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="berita">
                    <li class="nav-item">
                        <a href="{{ route('news.create') }}?type=News">
                            <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                            <span class="item-name">Create News</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="ads">
                    <li class="nav-item">
                        <a href="{{ route('news.create') }}?type=Ads">
                            <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                            <span class="item-name">Create Ads</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!--=============== Left side End ================-->

        @yield('content')

          </div>

        


    <form id="logout" action="{{route('logout')}}" method="POST">
        @csrf
    </form>

    <!--=============== End app-admin-wrap ================-->


    <script src="{{ asset('act/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/es5/script.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/vendor/datatables.min.js')}}"></script>
     <!-- page custom js -->
    <script src="{{ asset('act/assets/js/datatables.script.js')}}"></script>
    @yield('js')
</body>

</html>