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
    <div class="header" >
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">

                    </div>

                    <ul class="navbar-nav header-right">

                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-unstyled">
                                    @foreach ($msg as $item)
                                            @if ($item->status == '0')
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-user"></i></span>

                                                <div class="media-body">



                                                    <p>New messages,check <strong>inbox</strong>

                                                    </p>


                                                </div>
                                                <span class="notify-time">{{ $item->created_at }}</span>
                                    </li>
                                    @endif
                                    @endforeach


                                </ul>

                            </div>
                        </li>

                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a href="{{ url('/profile') }}" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">{{ $prf->nom }} {{ $prf->prenom }} </span>
                                </a>
                                <a href="{{ url('/market') }}" class="dropdown-item">
                                    <i class="icon icon-app-store"></i>
                                    <span class="ml-2">Market </span>
                                </a>
                                <a href="{{ url('/logout') }}" class="dropdown-item">
                                    <i class="icon-logout"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
