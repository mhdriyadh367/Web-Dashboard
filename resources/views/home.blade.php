<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DMS Dashboard</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboardFile/images/favicon.png') }}">
    <!-- Pignose Calender -->
    
    <link href="{{ asset('dashboardFile/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <span class="logobc">
                        <img src="{{ asset('dashboardFile/images/logo/logodriving.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset('dashboardFile/images/user/mancartoon.png') }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li>
                                            <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="icon-key">
                                            {{ __('Logout') }}
                                                </i> 
                                                {{-- <span>Logout</span> --}}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li>
                        <a href="/home">
                            <i class="fa fa-tachometer" aria-hidden="true"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="/query">
                            <i class="fa-solid fa-database"></i><span class="nav-text">Query</span>
                        </a>
                       
                    </li>
                    
                        
                   
                </ul>
                
                
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
         
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Truck</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">133</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa-solid fa-truck"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <iframe width="100%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1712701/charts/1?color=%2301ff0a&dynamic=true&results=60&title=Grafik+Sensor+Pulse&type=step"></iframe>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <iframe width="100%" height="260" style=" font: 20px; border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1712701/widgets/449424"></iframe>
                            </div>
                        </div>
                    </div>
                   
                </div>
            <!-- #/ container -->
        </div>
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    {{-- <script src="plugins/common/common.min.js"></script> --}}
    <script src="{{ asset('dashboardFile/plugins/common/common.min.js') }}"></script>
    {{-- <script src="js/custom.min.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/custom.min.js') }}"></script>
    {{-- <script src="js/settings.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/settings.js') }}"></script>
    {{-- <script src="js/gleek.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/gleek.js')}}"></script>
    {{-- <script src="js/styleSwitcher.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    {{-- <script src="./js/dashboard/dashboard-1.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>