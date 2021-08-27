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
                            <li class="breadcrumb-item">UI Categorias</li>
                            <li class="breadcrumb-item active">Produto</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Lista dos Produto</h1>
                </div>
                <a href="{{url('produto/create')}}" class="btn btn-success ml-3">Adicionar</a>
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
                    <div class="col-lg-3 card-body">
                        <p><strong class="headings-color">Lista de Todas Categorias</strong></p>
                        <p class="text-muted">Encontra listada todas categorias existentes na sua loja virtual</p>
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
                                        <th style="width: 37px;">Preço</th>
                                        <th style="width: 20px;">icon</th>
                                        <th style="width: 24px;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach($categoria as $c)
                                    <p></p>
                                    <tr>
                                        <td>
                                        <strong><span class="js-lists-values-employee-name">{{$c->nome}}</span></strong>
                                        @foreach($c->produtos as $p)
                                        <tr>
                                        <td><span class="js-lists-values-employee-name">{{$p->nome}}</span></td>
                                        <td><span class="js-lists-values-employee-name">{{$p->preco}}</span></td>
                                        <td><img src="assets/images/produtos/{{$p->icon}}" style="width: 40px; height: 40px;"></span></td>
                                        <td class="text-right"><a href="{{url("produto/$p->id/edit")}}" class="btn btn-sm btn-primary"><i class="material-icons">edit</i></a></td>
                                        </tr>
                                        @endforeach
                                        </td>
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