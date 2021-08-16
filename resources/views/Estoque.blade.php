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
                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item active">Estoque</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Estoque</h1>
                            </div>
                            <a href="{{url('estoque/create')}}" class="btn btn-success ml-3">Adicionar</a>
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                            <div class="card">

                                <div class="table-responsive">

                                    <div class="m-3">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <select name="#"
                                                        class="form-control">
                                                    <option value="-1">All</option>
                                                    <option value="1">Hats</option>
                                                    <option value="2">Coats</option>
                                                    <option value="3">Jeans</option>
                                                    <option value="4">T-Shirt</option>
                                                    <option value="5">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="search-form search-form--light">
                                                    <input type="text"
                                                           class="form-control search"
                                                           placeholder="Search">
                                                    <button class="btn"
                                                            type="button"
                                                            role="button"><i class="material-icons">search</i></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table mb-0 thead-border-top-0 table-striped">
                                        <thead>
                                            <tr>

                                                <th style="width: 18px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               class="custom-control-input js-toggle-check-all"
                                                               data-target="#products"
                                                               id="customCheckAll">
                                                        <label class="custom-control-label"
                                                               for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                    </div>
                                                </th>

                                                <th style="width: 30px;"
                                                    class="text-center">#ID</th>
                                                <th>Product</th>
                                                <th class="text-center">Stock</th>
                                                <th class="">Category</th>
                                                <th class="text-right">Price</th>
                                                <th style="width: 100px; text-align: right;">
                                                    <div class="dropdown pull-right">
                                                        <a href="#"
                                                           data-toggle="dropdown"
                                                           class="dropdown-toggle">Bulk</a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="javascript:void(0)"
                                                               class="dropdown-item"><i class="material-icons icon-18pt mr-1">work</i> Set Price</a>
                                                            <a href="javascript:void(0)"
                                                               class="dropdown-item"><i class="material-icons icon-18pt mr-1">archive</i> Archive</a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list"
                                               id="products">

                                            <tr>

                                                <td class="text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               class="custom-control-input js-check-selected-row"
                                                               id="customCheck1_1">
                                                        <label class="custom-control-label"
                                                               for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                    </div>
                                                </td>
                                                @foreach($estoque as $e)
                                                <td>
                                                    <div class="badge badge-soft-dark">{{$e->users->name}}</div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/Amora.jpg"
                                                         alt="product"
                                                         style="width:35px"
                                                         class="rounded mr-2">
                                                    <a href="#">{{$e->artigos->nome}}</a>
                                                </td>
                                                <td style="width: 120px;"
                                                    class="text-center">
                                                    {{$e->quantidade}} itens</td>
                                                <td style="width:200px">

                                                    <i class="material-icons icon-18pt text-muted mr-1">list</i> <a href="#">Coats</a>

                                                </td>

                                                <td class="text-right">{{$e->preco_compra}}</td>
                                                <td class="text-right"><a href="#"
                                                       class="btn btn-sm btn-primary">EDIT</td>
                                            </tr>
                                             @endforeach       
                                            <tr>

                                                <td class="text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               class="custom-control-input js-check-selected-row"
                                                               id="customCheck1_2">
                                                        <label class="custom-control-label"
                                                               for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge badge-soft-dark">#102</div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/avatars/lobostudio-hamburg-64728.jpg"
                                                         alt="product"
                                                         style="width:35px"
                                                         class="rounded mr-2">
                                                    <a href="#">Navy Hat with Stripes</a>
                                                </td>
                                                <td style="width: 120px;"
                                                    class="text-center">
                                                    10 items</td>
                                                <td style="width:200px">

                                                    <i class="material-icons icon-18pt text-muted mr-1">list</i> <a href="#">Hats</a>

                                                </td>

                                                <td class="text-right">$54</td>
                                                <td class="text-right"><a href="#"
                                                       class="btn btn-sm btn-primary">EDIT</td>
                                            </tr>

                                            <tr>

                                                <td class="text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               class="custom-control-input js-check-selected-row"
                                                               id="customCheck1_3">
                                                        <label class="custom-control-label"
                                                               for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="badge badge-soft-dark">#103</div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/avatars/nina-strehl-140734.jpg"
                                                         alt="product"
                                                         style="width:35px"
                                                         class="rounded mr-2">
                                                    <a href="#">Bleu Snow Coat</a>
                                                </td>
                                                <td style="width: 120px;"
                                                    class="text-center">
                                                    4 items</td>
                                                <td style="width:200px">

                                                    <i class="material-icons icon-18pt text-muted mr-1">list</i> <a href="#">Coats</a>

                                                </td>

                                                <td class="text-right">$22</td>
                                                <td class="text-right"><a href="#"
                                                       class="btn btn-sm btn-primary">EDIT</td>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-body text-right">
                                    15 <span class="text-muted">of 25</span> <a href="#"
                                       class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
                                </div>

                            </div>
                        </div>
                </div>
            </div>

        </div>

    </div>

    @endsection