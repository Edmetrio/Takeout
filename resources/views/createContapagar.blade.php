@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                    </ol>
                </nav>

                <h1 class="m-0">Cadastro de Conta a Paga</h1>
            </div>
        </div>
        <div class="container-fluid page__container">

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Conta a Pagar</strong></p>
                        <p class="text-muted">Contas a pagar Existentes no sistema são: Energia, Gás, Óleo, Guardanapos, entre outros
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
                        <form method="POST" action="{{url('contapagar')}}">
                            @csrf
                            <div class="was-validated">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="validationSample01">Tipo</label>
                                        <select name="tipo_id" id="tipo_id" class="form-control">
                                            @foreach($tipo as $t)
                                            <option value="{{$t->id}}">{{$t->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample01">Valor</label>
                                        <input type="number" class="form-control" name="valor" placeholder="12" required="">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationSample01">Descrição</label>
                                        <input type="text" class="form-control" name="descricao" placeholder="compra de Gás" required="">
                                        <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id }}" placeholder="12" required="">
                                        <input type="text" class="form-control" name="estado_id" hidden value="5b04868d-5dcf-400c-aee8-3b17693de11f" placeholder="12" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">@if(isset($contapagar))Alterar @else Submeter @endif</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection