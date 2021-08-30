@extends('templates')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                        <li class="breadcrumb-item">UI Processo</li>
                        <li class="breadcrumb-item active" aria-current="page">Formulário</li>
                    </ol>
                </nav>

                <h1 class="m-0">@if(isset($processo))Alterar @else Cadastro @endif do Processo</h1>
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
                        <p><strong class="headings-color">Processo</strong></p>
                        <p class="text-muted">As Categorias Existentes no sistema são: Hambúrgueres, Racheis, Dose de Batatas e de Frango
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
                        <form method="POST" action="{{url('processo')}}">
                            @csrf
                            <div class="was-validated">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="validationSample01">Nome do Produto</label>
                                        <select name="produto_id" id="produto_id" class="form-control">
                                            @foreach($produto as $p)
                                            <option value="{{$p->id}}">{{$p->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationSample01">Nome do Artigo</label>
                                        <select name="artigo_id" id="artigo_id" class="form-control">
                                            @foreach($artigo as $a)
                                            <option value="{{$a->id}}">{{$a->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample01">Quantidade</label>
                                        <input type="numeric" class="form-control" name="quantidade" placeholder="12" required="">
                                        <input type="text" class="form-control" name="users_id" hidden value="69b81095-f5f0-42a9-a68b-e6dbbceef0c2" placeholder="12" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">@if(isset($processo))Alterar @else Submeter @endif</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection