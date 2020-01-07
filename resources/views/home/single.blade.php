<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Koin News</title>

    <!-- Bootstrap -->
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container">
      <!-- Header -->
        <header>
            <nav style="background-color:rgb(243, 197, 45);" class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                      Koin News
                    </a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" class="glyphicon glyphicon-map-marker"></a></li>
                      <li><a href="#" class="glyphicon glyphicon-search"></a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
    </header>
    <!-- Body Content -->
    <div class="content">
        <nav style="background-color:rgb(243, 197, 45);" class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                      <li><a href="{{ url('/') }}" class="glyphicon">Home /</a></li>
                      <li><a href="#" class="glyphicon">{{ $row->news_ads_name }}</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div>
                <img src="{{ asset('front/img/tes.jpg')}}" class="img-responsive img-rounded" alt="Responsive image">
            </nav>
            <div class="caption" style="text-align: justify; background-color:white;">
                    <h3>{{ $row->news_ads_name }}</h3>
                      <p>{{ $row->description }}</p>
                  </div>
            <footer class="twelve columns fullscreen">
        <a href="#" style="text-align: center; background-color:rgb(243, 197, 45);" class="list-group-item">
            Copyright &copy; 2020 - PT. RITEL GLOBAL SOLUSI 
        </a>
        </footer>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
  </body>
</html>