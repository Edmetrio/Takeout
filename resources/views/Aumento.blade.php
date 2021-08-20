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
                            <li class="breadcrumb-item active">Histórico de Compras</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Lista das Compras</h1>
                </div>
                <a href="{{url('aumenta/create')}}" class="btn btn-success ml-3">Adicionar</a>
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
                        <p><strong class="headings-color">Lista de Todos Históricos</strong></p>
                        <p class="text-muted">Encontra listada todos históricos de compra existentes na sua loja virtual</p>
                    </div>
                    <div class="col-lg-8 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Procurar">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;">Nome do Artigo</th>
                                        <th style="width: 37px;">quantidade</th>
                                        <th style="width: 120px;">preço de Compra</th>
                                        <th style="width: 120px;">Utilizador</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">

                                    @foreach($aumento as $a)
                                    <tr>
                                        <td><span class="js-lists-values-employee-name">{{$a->artigos->nome}}</span></td>
                                        <td><span class="js-lists-values-employee-name">{{$a->quantidade}}</span></td>
                                        <td><span class="js-lists-values-employee-name">{{$a->preco_compra}}</span></td>
                                        <td><span class="js-lists-values-employee-name">{{$a->users->name}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection