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

                <h1 class="m-0">Cadastro da Categoria</h1>
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
                        <p><strong class="headings-color">Categoria</strong></p>
                        <p class="text-muted">As Categorias Existentes no sistema são: Hambúrgueres, Racheis, Dose de Batatas e de Frango
                        </p>
                    </div>
                    <div class="col-lg-8 card-form__body card-body">
                        <form method="POST" action="{{url('categoria')}}">
                            @csrf
                            <div class="was-validated">
                                <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample01">Nome</label>
                                        <input type="text" class="form-control" name="nome" placeholder="Nome" value="" required="">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="validationSample02">Icon</label>
                                        <input type="file" class="form-control" name="icon" required="">
                                    </div>
                                </div>
                                <div class="col-lg-8 card-form__body card-body d-flex align-items-center">
                                    <div class="flex">
                                        <label for="subscribe">Visibilidade</label><br>
                                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                            <input checked="" type="checkbox" id="subscribe" name="estado" class="custom-control-input">
                                            <label class="custom-control-label" for="subscribe">Yes</label>
                                        </div>
                                        <label for="subscribe" class="mb-0">Yes</label>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @endsection