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
                            <li class="breadcrumb-item">UI Venda</li>
                            <li class="breadcrumb-item active">Venda</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Lista dos Produto</h1>
                </div>
                @if(!isset($venda->users_id) && !isset($venda->pagamento_id))
                <form action="{{url('iniciar')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="users_id" hidden value="69b81095-f5f0-42a9-a68b-e6dbbceef0c2" placeholder="12" required="">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                </form>
                @elseif(!isset($venda->valor_total) && isset($venda->pagamento_id))
                <form action="{{url('iniciar')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="users_id" hidden value="69b81095-f5f0-42a9-a68b-e6dbbceef0c2" placeholder="12" required="">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                </form>
                @endif
                <a href="{{url('itemvenda/create')}}" class="btn btn-success ml-3">Adicionar</a>
            </div>
        </div>
        <div class="container-fluid page__container">

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Produto</strong></p>
                        <p class="text-muted">Os Produtos Existentes no sistema são: Hambúrgueres, Racheis, Dose de Batatas e de Frango
                        </p>
                    </div>
                    <div class="col-lg-8 card-form__body card-body">
                            <form method="POST" action="{{url('itemvenda')}}">
                            @csrf
                            <div class="was-validated">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="validationSample01">Nome do Produto</label>
                                        <select name="produto_id" id="produto_id" class="form-control">
                                        <option value="">Seleccione o Produto</option>
                                            @foreach($produto as $p)
                                            <option value="{{$p->id}}">{{$p->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample01">Quantidade</label>
                                        <input type="text" class="form-control" name="quantidade" placeholder="1" value="" required="">
                                        <input type="text" class="form-control" name="venda_id" placeholder="1" value="{{$venda->id}}" hidden required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">@if(isset($produto))Alterar @else Adicionar @endif</button>
                        </form>
                    </div>
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
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Lista das vendas</strong></p>
                        <p class="text-muted">Encontra listada todas vendas existentes na sua loja virtual</p>
                    </div>
                    <div class="col-lg-8 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Search">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th style="width: 200px;">Nome do Produto</th>
                                        <th style="width: 37px;">Quantidade</th>
                                        <th style="width: 20px;">Preço</th>
                                        <th style="width: 24px;">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">

                                    <p></p>
                                    @foreach($item as $i)
                                    <tr>
                                        <td><strong><span class="js-lists-values-employee-name">{{$i->produtos->nome}}</span></strong></td>
                                        <td><span class="js-lists-values-employee-name">{{$i->quantidade}}</span></td>
                                        <td><span class="js-lists-values-employee-name">{{$i->produtos->preco}}</span></td>
                                        <td><span>{{$i->subtotal}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p><strong class="headings-color" style="float: right; color: cadetblue; font-size: 25px; text-align: left;">{{$total}},00</strong></p>
                    </div>
                </div>
            </div>
            @if(isset($venda->users_id) && !isset($venda->pagamento_id))
            <form action="{{url('item')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="users_id" hidden value="69b81095-f5f0-42a9-a68b-e6dbbceef0c2" placeholder="12" required="">
                <input type="text" class="form-control" name="valor_total" value="{{$total}}" placeholder="12" required="">
                <input type="text" class="form-control" name="pagamento_id" value="f9587ab4-c1f1-4c4f-bb73-cad838831a6d" placeholder="12" required="">
                <button class="btn btn-primary" type="submit" style="float: right;">Finalizar</button>
            </form>
            @endif
        </div>

    </div>

    @endsection