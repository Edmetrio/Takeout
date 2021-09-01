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

                        <form class="search-form d-none d-sm-flex flex" action="https://demo.frontted.com/flowdash/120/index.html">
                            <button class="btn" type="submit"><i class="material-icons">procurar</i></button>
                            <input type="text" class="form-control" placeholder="Search">
                        </form>

                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="{{asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">A.Demian</a> left a comment on <a href="#">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="mr-1 d-flex-inline">
                                        <span class="text-light">{{ Auth::user()->name }}</span>
                                    </span>
                                    <img src="{{asset('assets/images/avatar/demi.png')}}" class="rounded-circle" width="32" alt="Frontted">
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>{{ Auth::user()->name }}</strong></div>
                                        <div class="text-muted">{{ Auth::user()->email }}</div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/')}}"><i class="material-icons">dvr</i>
                                        Início</a>
                                    <a class="dropdown-item" href="profile.html"><i class="material-icons">account_circle</i>Meu Perfil</a>
                                    <a class="dropdown-item" href="edit-account.html"><i class="material-icons">edit</i>
                                        Alterar Conta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html"><i class="material-icons">exit_to_app</i>
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
                                            <span class="sidebar-menu-text">Início</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                    <span class="sidebar-menu-text">Categoria</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="apps_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('categoria')}}">
                                            <span class="sidebar-menu-text">Listar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Produtos</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="pages_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('produto')}}">
                                            <span class="sidebar-menu-text">Listar os Produtos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                    <span class="sidebar-menu-text">Estoque</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="layouts_menu">
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button" href="{{url('estoque')}}">
                                            <span class="sidebar-menu-text">Lista de Estoques</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('aumenta')}}">
                                            <span class="sidebar-menu-text">Entrada de Estoque</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('artigo')}}">
                                            <span class="sidebar-menu-text">lista do artigo</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#processo">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Processo</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="processo">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('processo')}}">
                                            <span class="sidebar-menu-text">Listar o Porcesso</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#venda">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Vendas</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="venda">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('venda')}}">
                                            <span class="sidebar-menu-text">Venda</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#tipo">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Tipo</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="tipo">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('tipo')}}">
                                            <span class="sidebar-menu-text">Listar o Tipo</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#despesa">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Despesas</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="despesa">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('contapagar')}}">
                                            <span class="sidebar-menu-text">Lista das Despesas</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#historico">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Histórico</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="historico">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('historico')}}">
                                            <span class="sidebar-menu-text">Lista do Histórico</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#historico">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                    <span class="sidebar-menu-text">Histórico</span>
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse" id="historico">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="{{url('historico')}}">
                                            <span class="sidebar-menu-text">Lista do Histórico</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="sidebar-heading">Perfil</div>

                        <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                            <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                                <span class="avatar avatar-sm mr-2">
                                    <img src="{{asset('assets/images/avatar/demi.png')}}" alt="avatar" class="avatar-img rounded-circle">
                                </span>
                                <span class="flex d-flex flex-column" style="font-size: 12px;">
                                    <strong>{{ Auth::user()->name }}</strong>
                                </span>
                            </a>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div style="font-size: 10px;"><strong>{{ Auth::user()->name }}</strong></div>
                                        <div style="font-size: 10px;">{{ Auth::user()->email }}</div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/')}}"><i class="material-icons" style="width: 15px; margin-right: 15px;">dvr</i>Início</a>
                                    <a class="dropdown-item" href="{{url('perfil')}}"><i class="material-icons" style="width: 10px; margin-right: 20px;">account_circle</i>Meu Perfil</a>
                                    <a class="dropdown-item" href="{{url('#')}}"><i class="material-icons" style="width: 15px; margin-right: 15px;">edit</i>Alterar Conta</a>
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