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
                            <li class="breadcrumb-item">UI Perfil</li>
                            <li class="breadcrumb-item active">Meu Perfil</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Meu Perfil</h1>
                </div>
                @if(isset($user->perfils->id))
                <a href="{{url("perfil/$user->id/edit")}}" class="btn btn-primary ml-3">Alterar</a>
                @else        
                <a href="{{url('perfil/create')}}" class="btn btn-success ml-3">Adicionar</a>
                @endif
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
                        @if(isset($user->perfils->foto))
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="avatar avatar-xl">
                                    <img src="assets/images/perfil/{{$user->perfils->foto}}" alt="avatar" class="avatar-img rounded" style="border: 2px solid white;">
                                </div>
                                <h1 class="h4 mb-1" style="font-size: 15px;">Olá, {{$user->name}}</h1>
                                <p class="text-muted">E-mail: {{$user->email}}</p>
                                Contacto: <p class="text-muted">{{$user->perfils->contacto}}</p>
                                <div class="text-muted d-flex align-items-center">
                                    <i class="material-icons mr-1">location_on</i>
                                    <div class="flex">{{$user->perfils->endereco}}</div>
                                </div>
                                <div class="text-muted d-flex align-items-center">
                                    <i class="material-icons mr-1">link</i>
                                    <div class="flex"><a href="http://firsteducation.edu.mz/">firsteducation.edu.mz</a></div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="activity">

                                        <div class="card">
                                            <div class="px-4 py-3">
                                                <div class="d-flex mb-1">
                                                    <div class="avatar avatar-sm mr-3">
                                                        <img src="assets/images/perfil/{{$user->perfils->foto}}" alt="Avatar" class="avatar-img rounded-circle" style="width: 50px; height: 50px;">
                                                    </div>
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <strong class="text-15pt">{{$user->name}}</strong>
                                                            <small class="ml-2 text-muted">{{$user->created_at}}</small>
                                                        </div>
                                                        <div>
                                                            <p>Agradecemos pela preferência de dos nossos serviços <a href="#">http://firsteducation.edu.mz/...</a> 🔥</p>
                                                            <!-- <p><a href="#">#themeforest</a> <a href="#">#EnvatoMarket</a></p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection