<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | MYSI </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('log.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="{{route ('login')}}" class="auth-logo">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('backend/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                        <div class="p-3">
    <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
            @csrf

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="name" name="name" required="" id="name"
                 placeholder="Name">
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="username" name="username" required="" id="username"
                 placeholder="Username" >
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="email" required="" id="email"
                 placeholder="Email" name="email">
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" id="password"
                 placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" id="password_confirmation"
                 placeholder="Password Confirmation" name="password_confirmation" >
            </div>
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <div class="custom-control custom-checkbox">
                </div>
            </div>
        </div>

        <div class="form-group text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
            </div>
        </div>

        <div class="form-group mt-2 mb-0 row">
            <div class="col-12 mt-3 text-center">
                <a href="{{route('login')}}" class="text-muted">Already have account?</a>
            </div>
        </div>
    </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->


        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{ asset('backend/assets/js/app.js')}}"></script>

    </body>
</html>
