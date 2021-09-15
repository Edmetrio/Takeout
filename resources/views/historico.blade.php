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
                            <li class="breadcrumb-item active">Lista do Histórico</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Lista do Histórico</h1>
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
                    <div class="col-lg-3 card-body">
                        <p><strong class="headings-color">Lista de Todo Histórico</strong></p>
                        <p class="text-muted">Encontra listada todo histórcio existente na sua loja virtual</p>
                    </div>
                    <div class="col-lg-9 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Search">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <form method="POST" action="{{url('historico')}}">
                                @csrf
                                <div class="col-md-4">
                                    <label for="validationSample01">Data Início</label>
                                    <input type="date" class="form-control" name="inicio" placeholder="12" required="">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationSample01">Data Início</label>
                                    <input type="date" class="form-control" name="fim" placeholder="12" required="">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-info ml-4">Pesquisar</button>
                                </div>


                            </form>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th style="width: 200px;">Nome do produto</th>
                                        <th style="width: 100px;">Quantidade</th>
                                        <th style="width: 30px;">Preco</th>
                                        <th style="width: 10px;">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach($categoria as $c)
                                    <tr>
                                        <td>
                                        <strong><span class="js-lists-values-employee-name">{{$c->produtos->nome}}</span></strong>
                                        <td><span class="js-lists-values-employee-name">{{$c->quantidade}}</span><br></td>
                                        <td>
                                        <span class="js-lists-values-employee-name">{{$c->produtos->preco}}</span><br/>
                                        </td>
                                        <td>
                                        <span class="js-lists-values-employee-name">{{$c->subtotal}}</span><br/>
                                        </td>
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