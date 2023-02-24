<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link google fons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sans+Pro:300,400,400i,700&display=fallback"
    />

    <!-- link css -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css" />
    <title>PWPB | LOGIN</title>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1">PWPB</a>
        </div>
        <div class="card-body">
            <form action="{{ url('/login/auth') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" placeholder="Username" class="form-control" name="email" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-3">
                    <button class="btn btn-primary btn-block mt-3">Login</button>
                </div>
                <hr>
                <p class="mb-2 text-center">
                    <a href="">forgot password?</a>
                </p>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
