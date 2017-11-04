<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>St. Vincent</title>

    <!-- Bootstrap core CSS-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_ENV') == 'local' ? asset('vendor/bootstrap/css/bootstrap.min.css') : secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Custom fonts for this template-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_ENV') == 'local' ? asset('vendor/font-awesome/css/font-awesome.min.css') : secure_asset('vendor/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Page level plugin CSS-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_ENV') == 'local' ? asset('vendor/datatables/dataTables.bootstrap4.css') : secure_asset('vendor/datatables/dataTables.bootstrap4.css') }}" />
    <!-- Custom styles for this template-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_ENV') == 'local' ? asset('css/sb-admin.css') : secure_asset('css/sb-admin.css') }}" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">St. Vincent School Foundation Inc</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Charts</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Example Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                    <li>
                        <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Menu Levels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        
    </div>
</nav>

@yield('content')

<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/jquery/jquery.min.js') : secure_asset('vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/bootstrap/js/bootstrap.bundle.min.js') : secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/jquery-easing/jquery.easing.min.js') : secure_asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/chart.js/Chart.min.js') : secure_asset('vendor/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/datatables/jquery.dataTables.js') : secure_asset('vendor/datatables/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/datatables/dataTables.bootstrap4.js') : secure_asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('js/sb-admin.min.js') : secure_asset('js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('js/sb-admin-datatables.min.js') : secure_asset('js/sb-admin-datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('js/sb-admin-charts.min.js') : secure_asset('js/sb-admin-charts.min.js') }}"></script>

</body>

</html>
