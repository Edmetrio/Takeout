<!DOCTYPE html>
<html lang="pt_pt" dir="ltr">


<!-- Mirrored from demo.frontted.com/flowdash/120/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 15:31:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TakeOut</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script -->>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="{{url('/')}}">
                            <td><img src="{{asset('assets/images/logo.png')}}"></span></td>
                        </a>

                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifica????o</span>
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">
                                            @foreach($estoque as $e)
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div><small class="text-muted">Mp: </small>{{$e->artigos->nome}}<br>
                                                        <small class="text-muted">Quantidade: </small>{{$e->quantidade}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="mr-1 d-flex-inline">

                                    </span>
                                    <!-- <img src="{{asset('assets/images/avatar/demi.png')}}" class="rounded-circle" width="32" alt="Frontted"> -->
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">

                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/')}}"><i class="material-icons">dvr</i>
                                        In??cio</a>
                                    <a class="dropdown-item" href="{{url('perfil')}}"><i class="material-icons">account_circle</i>Meu Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="material-icons">edit</i>
                                        Alterar Conta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="material-icons">exit_to_app</i>
                                        Sair</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            @yield('content')

            <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
                        <div class="sidebar-heading">Menu</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                    <span class="sidebar-menu-text">Dashboards</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="dashboards_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('/')}}">
                                            <span class="sidebar-menu-text">In??cio</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            


                        </ul>
                        <div class="sidebar-heading">Perfil</div>

                        <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                            <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                                <span class="avatar avatar-sm mr-2">
                                    <!-- <img src="{{asset('assets/images/avatar/demi.png')}}" alt="avatar" class="avatar-img rounded-circle"> -->
                                </span>
                                <span class="flex d-flex flex-column" style="font-size: 12px;">

                                </span>
                            </a>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">

                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/')}}"><i class="material-icons" style="width: 15px; margin-right: 15px;">dvr</i>In??cio</a>
                                    <a class="dropdown-item" href="{{url('perfil')}}"><i class="material-icons" style="width: 10px; margin-right: 20px;">account_circle</i>Meu Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="material-icons" style="width: 15px; margin-right: 15px;">edit</i>Alterar Conta</a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <button class="dropdown-item">Sair</button>
                                        </a>
                                    </form>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-p-a">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ion-android-lock" style="padding: 10px;"></i>
                                    <button class="btn btn-sm btn-primary" style="width: 80%; height: 50%;">Sair</button>
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- // END drawer-layout -->

    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'ui-tables.html',
      'fixed': 'fixed-ui-tables.html',
      'fluid': 'fluid-ui-tables.html',
      'mini': 'mini-ui-tables.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>

    <!-- DOM Factory -->
    <script src="{{asset('assets/vendor/dom-factory.js')}}"></script>

    <!-- MDK -->
    <script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>

    <!-- App -->
    <script src="{{asset('assets/js/toggle-check-all.js')}}"></script>
    <script src="{{asset('assets/js/check-selected-row.js')}}"></script>
    <script src="{{asset('assets/js/dropdown.js')}}"></script>
    <script src="{{asset('assets/js/sidebar-mini.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{asset('assets/js/app-settings.js')}}"></script>

    <!-- List.js -->
    <script src="{{asset('assets/vendor/list.min.js')}}"></script>
    <script src="{{asset('assets/js/list.js')}}"></script>

</body>


<!-- Mirrored from demo.frontted.com/flowdash/120/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 15:31:46 GMT -->

</html>