@extends('template')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="material-icons icon-20pt">home</i></a></li>
                            <li class="breadcrumb-item">UI Meu Sistema</li>
                            <li class="breadcrumb-item active">Takeout</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Meu Sistema - TakeOut</h1>
                </div>
                <a href="{{ route('login')}}" class="btn btn-primary ml-3">Entrar</i></a>
                <a href="{{ route('register')}}" class="btn btn-info ml-3">Registrar</i></a>
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
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Meu Sistema</strong></p>
                        <p class="text-muted">Olá, Seja bem-vindo à Take Out</p>
                    </div>
                    <div class="col-lg-8 card-form__body">
                        <div class="col-lg-3 col-md-12 card-group-row__col">
                            <div class="card card-group-row__card">
                                <div class="p-2 d-flex flex-row align-items-center">
                                    <div class="avatar avatar-xs mr-2">
                                        <span class="avatar-title rounded-circle text-center bg-blue">
                                            <i class="material-icons text-white icon-18pt">shop</i>
                                        </span>
                                    </div>
                                    <a href="#" class="text-dark">
                                        <strong>Products</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection