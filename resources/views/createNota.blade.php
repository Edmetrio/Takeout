@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Notas</li>
                        <li class="breadcrumb-item active" aria-current="page">Formulário</li>
                    </ol>
                </nav>

                <h1 class="m-0">Notas</h1>
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
                        <p><strong class="headings-color">Notas</strong></p>
                        <p class="text-muted">Notas: são registradas todas informações úteis para relatório no final do dia. Ex: dívida do Sarmento
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
                        @if(isset($nota))
                        <form method="post" action="{{url("nota/$nota->id")}}">
                            @method('PUT')
                            @else
                            <form method="post" action="{{url('nota')}}">
                                @endif
                                @csrf
                                <div class="was-validated">
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="validationSample01">Nota da nota</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Artur Simbine" required="" value="{{$nota->nome ?? ''}}">
                                            <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id }}" required="">
                                        </div>
                                        <div class="col-12 col-md-12 mb-3">
                                            <label for="validationSample01">Descrição</label>
                                            <input type="text" class="form-control" name="descricao" placeholder="Dívida do Artur Simbine" required="" value="{{$nota->descricao ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">@if(isset($nota))Alterar @else Submeter @endif</button>
                            </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection