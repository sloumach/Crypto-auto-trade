@extends('layouts.app')

@section('content')
    <link rel="icon" type="image/png" sizes="16x16" href="dshb/images/favicon.png">
    <link rel="stylesheet" href="dshb/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dshb/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="dshb/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="dshb/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
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
                <a href="dshb/index.html" class="brand-logo">
                    <img class="logo-abbr" src="dshb/images/logo.png" alt="">
                    <img class="logo-compact" src="dshb/images/logo-text.png" alt="">
                    <img class="brand-title" src="dshb/images/logo-text.png" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="search_bar dropdown">
                                    <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                        <i class="mdi mdi-magnify"></i>
                                    </span>
                                    <div class="dropdown-menu p-0 m-0">
                                        <form>
                                            <input class="form-control" type="search" placeholder="Search"
                                                aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-bell"></i>
                                        <div class="pulse-css"></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="list-unstyled">
                                            <li class="media dropdown-item">
                                                <span class="success"><i class="ti-user"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                            Successfully
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="primary"><i class="ti-shopping-cart"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="danger"><i class="ti-bookmark"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                            unsolved.
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="primary"><i class="ti-heart"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="media dropdown-item">
                                                <span class="success"><i class="ti-image"></i></span>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <p><strong> James.</strong> has added a<strong>customer</strong>
                                                            Successfully
                                                        </p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                        </ul>
                                        <a class="all-notification" href="#">See all notifications <i
                                                class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a href="dshb/app-profile.html" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">{{ Auth::user()->nom }} {{ Auth::user()->prenom }} </span>
                                        </a>
                                        <a href="dshb/email-inbox.html" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2">Inbox </span>
                                        </a>
                                        <a href="dshb/page-login.html" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            @include('navbar')
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Account status: </div>
                                        @if (Auth::User()->status == '0')
                                            <span class="badge bg-danger text-white">Not verified</span>
                                        @else
                                            <span class="badge bg-success text-white">verified</span>
                                        @endif
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Last income:</div>
                                        <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary w-75" role="progressbar"
                                            aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Daily trades:</div>
                                        <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning w-50" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Total:</div>
                                        <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger w-65" role="progressbar"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Table Hover</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="table-responsive ">
                                        <table class="text-dark table table-hover table-bordered  table-responsive-sm">
                                            <thead>
                                                <tr class="border-dark text-center">
                                                    <th class="border-dark">Trade ID</th>
                                                    <th class="border-dark">Trade info</th>
                                                    <th class="border-dark">Trade status</th>
                                                    <th class="border-dark">Trade date</th>
                                                    <th class="border-dark">Trade time entry</th>
                                                    <th class="border-dark">Trade time closure</th>
                                                    <th class="border-dark">Trade profit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center ">
                                                    <th>000831</th>
                                                    <td>USDT - BTC</td>
                                                    <td class="text-center "><span
                                                            class=" alert alert-success text-center m-1 text-dark ">Done</span>
                                                    </td>
                                                    <td>22- January -2023</td>
                                                    <td class="color-primary">21.03 (GMT+2)</td>
                                                    <td class="color-primary">21.05 (GMT+2)</td>
                                                    <td class="color-primary">3.11% </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>




                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->

            <!--**********************************
               Support ticket button start
            ***********************************-->

            <!--**********************************
               Support ticket button end
            ***********************************-->


        </div>
    </body>
    <script src="dshb/vendor/global/global.min.js"></script>
    <script src="dshb/js/quixnav-init.js"></script>
    <script src="dshb/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="dshb/vendor/raphael/raphael.min.js"></script>
    <script src="dshb/vendor/morris/morris.min.js"></script>


    <script src="dshb/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dshb/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="dshb/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="dshb/vendor/flot/jquery.flot.js"></script>
    <script src="dshb/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="dshb/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="dshb/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="dshb/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="dshb/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="dshb/js/dashboard/dashboard-1.js"></script>
    <!--**********************************
            Main wrapper end
@endsection
