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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/home')}}">St. Vincent School Foundation Inc</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Student">
                <a class="nav-link" href="{{url('student')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Student</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add New Student">
                <a class="nav-link" href="{{url('student/create')}}">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Add New Student</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Personality Type Indicator">
                <a id="personality-type" class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Personality Type Indicator</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{url('/energy')}}">Energy</a>
                    </li>
                    <li>
                        <a href="{{url('/information')}}">Information</a>
                    </li>
                    <li>
                        <a href="{{url('/decisionmaking')}}">Decision Making</a>
                    </li>
                    <li>
                        <a href="{{url('/learningstyle')}}">Learning Style</a>
                    </li>
                    <li>
                        <a href="{{url('/combination')}}">Combinations</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Results">
                <a class="nav-link" href="{{url('/results')}}">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Results</span>
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

        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a class="nav-link">
                        Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-sign-out"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endauth
        </ul>
        
    </div>
</nav>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('vendor/jquery/jquery.min.js') : secure_asset('vendor/jquery/jquery.min.js') }}"></script>
@yield('content')

<!-- Bootstrap core JavaScript-->

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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{ env('APP_ENV') == 'local' ? asset('js/stvincentadmin.js') : secure_asset('js/stvincentadmin.js') }}"></script>
</body>

</html>
