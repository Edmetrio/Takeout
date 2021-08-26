@extends('tema')

@section('content')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">

                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Acesso Rápido</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Acesso Rádido</h1>
                            </div>
                            <a href="{{ route('login')}}" class="btn btn-success ml-3">Entrar <i class="material-icons">add</i></a>
                            <a href="{{ route('register')}}" class="btn btn-success ml-3">Registrar <i class="material-icons">add</i></a>
                        </div>
                    </div>

                    <div class="container-fluid page__container">
                        <div class="row card-group-row">
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                <i class="material-icons text-white icon-18pt">business</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Companies</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center">
                                                <i class="material-icons text-white icon-18pt">person_add</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Create New User</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-success">
                                                <i class="material-icons text-white icon-18pt">receipt</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Manage Invoices</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-info">
                                                <i class="material-icons text-white icon-18pt">monetization_on</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Earnings</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-blue">
                                                <i class="material-icons text-white icon-18pt">shop</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Products</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-warning">
                                                <i class="material-icons text-white icon-18pt">account_balance</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Account Balance</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                <i class="material-icons text-white icon-18pt">assignment</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Assignments</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-danger">
                                                <i class="material-icons text-white icon-18pt">phone</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Calls</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection