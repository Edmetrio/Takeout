@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

    <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Histórico</li>
                            <li class="breadcrumb-item active">Lista do Histórico</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Lista do Histórico</h1>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
            <p class="status">{{session('status')}}</p>
        </div>
        @endif
        <div class="container-fluid page__container">


            <div class="card card-form">
                <div class="row no-gutters">
                    
                     <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-3">
                                <div class="avatar avatar-xl">
                                        <img src="assets/images/avatar/demi.png"
                                             alt="avatar"
                                             class="avatar-img rounded"
                                             style="border: 2px solid white;">
                                    </div>
                                    <h1 class="h4 mb-1">Adrian Demian</h1>
                                    <p class="text-muted">@AdrianDemian</p>
                                    <p>Bootstrap 4 Admin Dashboard Themes</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="material-icons mr-1">location_on</i>
                                        <div class="flex">Dracula's Castle, Transilvania</div>
                                    </div>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="material-icons mr-1">link</i>
                                        <div class="flex"><a href="https://www.frontted.com/">frontted.com</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div class="tab-pane active"
                                             id="activity">

                                            <div class="card">
                                                <div class="px-4 py-3">
                                                    <div class="d-flex mb-1">
                                                        <div class="avatar avatar-sm mr-3">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                        <div class="flex">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <strong class="text-15pt">Sherri J. Cardenas</strong>
                                                                <small class="ml-2 text-muted">3 days ago</small>
                                                            </div>
                                                            <div>
                                                                <p>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme <a href="#">https://www.frontted.com/themes/admin-vision...</a> 🔥</p>
                                                                <p><a href="#">#themeforest</a> <a href="#">#EnvatoMarket</a></p>
                                                            </div>

                                                            <div class="d-flex align-items-center">
                                                                <a href="#"
                                                                   class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1"
                                                                       style="font-size: inherit;">favorite_border</i> 38</a>
                                                                <a href="#"
                                                                   class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1"
                                                                       style="font-size: inherit;">thumb_up</i> 71</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection