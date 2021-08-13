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
                        <li class="breadcrumb-item active" aria-current="page">Tables</li>
                    </ol>
                </nav>

                <h1 class="m-0">Lista dos produtos</h1>
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

                                        <th style="width: 120px;">Nome da Categoria</th>

                                        <th style="width: 37px;">Estado</th>
                                        <th style="width: 120px;">icon</th>
                                        <th style="width: 24px;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">

                                    @foreach($categoria as $c)
                                    <tr>
                                        <td>
                                            <span class="js-lists-values-employee-name">{{$c->nome}}</span>
                                        </td>
                                        <td><span class="badge badge-warning">{{$c->estado}}</span></td>
                                        <td>{{$c->icon}}</td>
                                        <td class="text-right"><a href="{{url("categotria/$c->id/edit")}}" class="btn btn-sm btn-primary"><i class="material-icons">edit</i></a></td>
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