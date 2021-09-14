@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Quebra</li>
                        <li class="breadcrumb-item active" aria-current="page">Formulário</li>
                    </ol>
                </nav>

                <h1 class="m-0">Diminuir Estoque</h1>
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
                        <p><strong class="headings-color">Quebra de Estoque</strong></p>
                        <p class="text-muted">Quebras do Estoque: são artigos que diminui o estoque. Ex: ovo, hambúrguer, entre outros
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
                        <form method="POST" action="{{url('quebra')}}">
                            @csrf
                            <div class="was-validated">
                                <div class="form-row">
                                <div class="col-md-6">
                                        <label for="validationSample01">Nome do Artigo</label>
                                        <select name="artigo_id" id="artigo_id" class="form-control">
                                        <option value="{{$quebra->artigo->id ?? ''}}">{{$quebra->artigo->nome ?? 'Seleccione o Artigo'}}</option>
                                            @foreach($artigo as $a)
                                            <option value="{{$a->id}}">{{$a->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample01">Quantidade</label>
                                        <input type="text" class="form-control" name="quantidade" placeholder="1" required="">
                                        <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id }}" placeholder="12" required="">
                                    </div>
                                    <div class="col-12 col-md-12 mb-3">
                                        <label for="validationSample01">Descrição</label>
                                        <input type="text" class="form-control" name="descricao" placeholder="apodrecimento de hambúrguer" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">@if(isset($quebra))Alterar @else Submeter @endif</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection