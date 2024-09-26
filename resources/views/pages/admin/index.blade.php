<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPLG SMKN 1 KARAWANG</title>
    <link rel="icon" href="{{ asset('baseadmin/img/logos/Logo_PPLG.png') }}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link
        href={{ asset('baseadmin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset('baseadmin/css/sb-admin-2.min.css') }} rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="{{ asset('baseadmin/img/logos/Perisai_PPLG.png') }}" width="50px" alt="">
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pages.admin.dashboard.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

             <!-- Nav Item - configuration -->
             <li class="nav-item {{ Request::is('konfig*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pages.admin.konfig.index')}}">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                    <span>Configuration</span></a>
            </li>

            <!-- Nav Item - Staff -->
            <li class="nav-item {{ Request::is('staff*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.staff.index')}}">
                    <i class="fa-solid fa-users"></i>
                    <span>Staff</span></a>
            </li>

            <!-- Nav Item - Alumni -->
            <li class="nav-item {{ Request::is('alumni*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.alumni.index')}}">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Alumni</span></a>
            </li>

            <!-- Nav Item - Subject -->
            <li class="nav-item {{ Request::is('subject*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pages.admin.subject.index')}}">
                    <i class="fa-solid fa-book"></i>
                    <span>Subject</span></a>
            </li>

            <!-- Nav Item - Project -->
            <li class="nav-item {{ Request::is('peoject*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.projek.index')}}">
                    <i class="fa-solid fa-diagram-project"></i>
                    <span>Project</span></a>
            </li>

            <!-- Nav Item - Achievement -->
            <li class="nav-item {{ Request::is('achievement*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.achievement.index')}}">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Achievement</span></a>
            </li>

            <!-- Nav Item - News -->
            <li class="nav-item {{ Request::is('news*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.news.index')}}">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>News</span></a>
            </li>

            <!-- Nav Item - Comments -->
            <li class="nav-item {{ Request::is('comment*') ? 'active' : '' }}">
                <a class="nav-link"  href="{{ route('pages.admin.comment.index')}}">
                    <i class="fa-solid fa-comments"></i>
                    <span>Comment</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Admin</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>

                    </div>
                        @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PPLG SMKN 1 KARAWANG 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('baseadmin/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('baseadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('baseadmin/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('baseadmin/js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('baseadmin/vendor/chart.js/Chart.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('baseadmin/js/demo/chart-area-demo.js') }}></script>
    <script src={{ asset('baseadmin/js/demo/chart-pie-demo.js') }}></script>

</body>

</html>
