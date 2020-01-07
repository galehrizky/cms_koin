<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{asset('front/img/error.jpg')}}" alt="...">
  
        </div>
        <div class="item">
          <img src="{{ asset('front/img/error.jpg')}}" alt="...">
        </div>
        <br>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="More" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="More" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="content">

      <div class="row row-no-gutters">
        @foreach($news as $row)
        <div class="col-xs-6 col-sm-3">
          <div class="thumbnail" style="box-shadow: 10px 10px 10px grey;">
            <img src="{{ url('storage/image/'.$row->image)}}" alt="...">
            <div class="caption" style="text-align: justify;">
              <h3>{{ $row->news_ads_name }}</h3>
              <p><a href="{{ route('details', $row->id) }}" class="btn btn-warning btn-xs" role="More">More</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <footer class="twelve columns fullscreen">
        <a href="#" style="text-align: center; background-color: rgb(243, 197, 45);" class="list-group-item">
          Copyright &copy; 2020 - KOIN TOKO INDONESIA
        </a>
      </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
  </body>
  </html>