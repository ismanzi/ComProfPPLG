<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="">
    <title>PPLG SMKN 1 KARAWANG</title>
    <link rel="icon" href="{{ asset('baseadmin/img/logos/Logo_PPLG.png') }}" type="image/x-icon">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('baseadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        @error('notif')
                            <p class="Login-box-msg error invalid-feedback" style="display: inline">{{ $message }}</p>
                        @enderror
                        @if (session('failed'))
                            <div class="alert alert-danger">
                                {{ session('failed') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="{{ asset('baseadmin/img/logos/Logo_Horizontal_Black.png') }}"
                                            width="60%" alt="">
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="{{ route('auth.authenticate') }}" method="POST">
                                        @csrf

                                        <form class="user">
                                            <div class="form-group">
                                                <input name="username" type="text"
                                                    class="form-control form-control-user  @error('username') {{ 'is-invalid' }} @enderror"
                                                    id="username" aria-describedby="emailHelp"
                                                    placeholder="Enter username">
                                                @error('username')
                                                    <span class="error invalid-feedback"
                                                        style="display: inline;">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <input name="password" type="password"
                                                    class="form-control form-control-user @error('password') {{ 'is-invalid' }} @enderror"
                                                    id="password" placeholder="Password">
                                                @error('password')
                                                    <span class="error invalid-feedback"
                                                        style="display: inline;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <input type="submit" value="Login" class="btn btn-primary w-100">
                                            <div class="text-center">
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('baseadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('baseadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('baseadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('baseadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('baseadmin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('baseadmin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('baseadmin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
