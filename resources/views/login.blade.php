
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Area</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('act/assets/styles/css/themes/lite-purple.min.css')}}">
    <style type="text/css">
        .auth {
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url(https://lillyfieldsolutions.com/wp-content/uploads/2016/11/background.jpg)">
        <div class="auth">
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="https://siamonsi.files.wordpress.com/2014/04/cms-image.jpg" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Log In</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" name="email" placeholder="Masukan Email" class="form-control form-control-rounded" type="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" placeholder="Masukan Password" name="password" class="form-control form-control-rounded" type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('act/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('act/assets/js/es5/script.min.js')}}"></script>
</body>

</html>