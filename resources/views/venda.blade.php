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
                    <h1 class="m-0">Lista das Vendas</h1>
                </div>
                @if(!isset($venda->users_id) && !isset($venda->valor_total))
                <form action="{{url('iniciar')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id  }}" placeholder="12" required="">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                </form>
                @elseif(!isset($venda->valor_total) && isset($venda->valor_total))
                <form action="{{url('iniciar')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="users_id" hidden value="{{ Auth::user()->id  }}" placeholder="12" required="">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                </form>
                @endif
                <h3 class="m-0" style="font-weight: bold; color: cadetblue;">{{$venda->created_at->format('d-m-y')}}</h3>
                <!-- <button class="btn btn-primary" type="submit">{{$venda->created_at->format('d-m-y')}}</button> -->
                <a href="{{url('categoriaproduto')}}" class="btn btn-success ml-3">Adicionar</a>
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
                                <button class="btn" type="button"><i class="material-icons">Procurar</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th style="width: 150px;">Nome do Produto</th>
                                        <th style="width: 20px;">Quantidade</th>
                                        <th style="width: 20px;">Preço</th>
                                        <th style="width: 20px;">Subtotal</th>
                                        <th style="width: 5px;">Cancelar</th>
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
                                        <td><a href="{{url("itemvenda/$i->id/edit")}}" class="btn btn-sm btn-primary"><i class="material-icons">delete</i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p><strong class="headings-color" style="float: right; color: cadetblue; font-size: 25px; text-align: left;">{{$total}},00</strong></p>
                    </div>
                </div>
            </div>
            @if(isset($venda->users_id) && !isset($venda->valor_total))
            <form action="{{url('item')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="users_id" value="{{ Auth::user()->id  }}" placeholder="12" required="" hidden>
                <input type="text" class="form-control" name="valor_total" value="{{$total}}" placeholder="12" required="" hidden>
                <button class="btn btn-primary" type="submit" style="float: right;">Finalizar</button>
            </form>
            @endif
        </div>

    </div>

    @endsection