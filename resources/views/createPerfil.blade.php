@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Perfil</li>
                        <li class="breadcrumb-item active" aria-current="page">Formuário</li>
                    </ol>
                </nav>

                <h1 class="m-0">@if(isset($user))Alterar @else Adicionar @endif Perfil</h1>
            </div>
        </div>
        <div class="container-fluid page__container">

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Meu Perfil</strong></p>
                        <p class="text-muted">Minha Conta: Dados específico do Utilizador do sistema
                        </p>
                    </div>
                    <div>
                        @if(session('status'))
                        <div class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
                            <p class="status">{{session('status')}}</p>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-8 card-form__body card-body">
                    @if(isset($user))
                        <form method="POST" enctype="multipart/form-data" action="{{url("perfil/$user->id")}}">
                            @method('PUT')
                        <form method="POST" action="{{url('perfil')}}" enctype="multipart/form-data">
                        @endif   
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Nome</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Edmétrio Cossa" required value="{{$user->name ?? ''}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Contacto</label>
                                        <input type="text" name="contacto" class="form-control" placeholder="84 000 0000" required value="{{$user->perfils->contacto ?? ''}}">
                                        <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id }}" placeholder="12" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Endereço</label>
                                        <input type="text" name="endereco" class="form-control" placeholder="Chamanculo D, nº 162" value="{{$user->perfils->endereco ?? ''}}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="validationSample02">Icon</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">@if(isset($user))Alterar @else Adicionar @endif</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection