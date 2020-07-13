
<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="4kLFxsa3OFSr19LnazjZp8y5DBhQTR5g5torSpj1">
    <title>Profile Kita | Login</title>
    <link rel="stylesheet" href="{{ asset("/vendor/icheck-bootstrap/icheck-bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/vendor/fontawesome-free/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/vendor/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/vendor/adminlte/dist/css/adminlte.min.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="login-page" >
    <div class="login-box">        
        <div class="login-logo">
            <a href="http://127.0.0.1:8000/dashboard">
                <b>Profile</b>Kita
            </a>
        </div>        
        <div class="card card-outline card-primary">            
            <div class="card-header ">
                <h3 class="card-title float-none text-center">Sign in to start</h3>
            </div>
            <div class="card-body login-card-body ">
                <form action="http://127.0.0.1:8000/login" method="post">
                    {{ @csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" value="" placeholder="Email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope "></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock "></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type=submit class="btn btn-block btn-flat btn-primary">
                                <span class="fas fa-sign-in-alt"></span>
                                Sign In
                            </button>
                        </div>
                    </div>

                </form>
            </div>            
        </div>
    </div>

<script src="{{ asset("/vendor/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<script src="{{ asset("/vendor/adminlte/dist/js/adminlte.min.js") }}"></script>
</body>
</html>