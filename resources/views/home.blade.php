@extends('layouts.admin.master')

@section('adminContent')
    <div class="wrapper">
        @include('layouts.admin.asidemenu')
        <section class="main">
            <div class="top-banner">
                <div class="top-banner-title">Dashboard</div>
                <div class="top-banner-subtitle">Bienvenido de nuevo, {{ Auth::user()->name }} a <stong>Take It Eaasy</stong></div>
            </div>
            <div class="content no-top-banner">
                <div class="content-header no-mg-top">
                    <i class="fa fa-newspaper-o"></i>
                    <div class="content-header-title">Pedidos en TakeItEasy</div>
                    <select class="select-rounded pull-right">
                        <option>Hoy</option>
                        <option>Por hora</option>
                        <option>Por día</option>
                        <option>Por Mes</option>
                    </select>
                </div>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-6 card-wrapper">
                            <div class="card">
                                <i class="fa fa-newspaper-o"></i>
                                <div class="clear">
                                    <div class="card-title">
                                        <span class="timer" data-from="0" data-to="1121">1,121</span>
                                    </div>
                                    <div class="card-subtitle">PEDIDOS REALIZADOS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 card-wrapper">
                            <div class="card">
                                <i class="fa fa-signal"></i>
                                <div class="clear">
                                    <div class="card-title">
                                        <span class="timer" data-from="0" data-to="72">72</span>%
                                    </div>
                                    <div class="card-subtitle">PEDIDOS PENDIENTES</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content-header">
                                <i class="fa fa-signal"></i>
                                <div class="content-header-title">Pedidos en el mes</div>
                            </div>
                            <div class="content-box">
                                <div class="content-box-header">
                                    <div class="header-menu active">Realizados (532)</div>
                                    <div class="header-menu">Cancelados</div>
                                    <select class="select-rounded pull-right">
                                        <option>Hoy</option>
                                        <option>Por hora</option>
                                        <option>Por día</option>
                                        <option>Por Mes</option>
                                    </select>
                                </div>
                                <div class="line-chart-wrapper">
                                    <div class="line-chart-label">Últimos pedidos</div>
                                    <div class="line-chart-value">
                                        <span class="timer" data-from="0" data-to="532">532</span>
                                    </div>
                                    <canvas id="line-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content-header">
                                <i class="fa fa-suitcase"></i>
                                <div class="content-header-title">Pedidos Hoy</div>
                                <select class="select-rounded pull-right">
                                    <option>Hoy</option>
                                    <option>Por hora</option>
                                    <option>Por día</option>
                                    <option>Por Mes</option>
                                </select>
                            </div>
                            <div class="content-box slide-item">
                                <div class="product-list">
                                    <img class="pull-left" src="/admin/clients/chemao.jpg">
                                    <div class="clear">
                                        <div class="product-list-title">Tacos Chemao</div>
                                        <div class="product-list-category">ID: 7273</div>
                                    </div>
                                    <div class="product-list-price">$300</div>
                                </div>
                                <div class="product-list">
                                    <img class="pull-left" src="/admin/clients/sindelantal.png">
                                    <div class="clear">
                                        <div class="product-list-title">Sin Delantal</div>
                                        <div class="product-list-category">ID: 3882</div>
                                    </div>
                                    <div class="product-list-price">$150</div>
                                </div>
                                <div class="product-list">
                                    <img class="pull-left" src="/admin/clients/merengue.png">
                                    <div class="clear">
                                        <div class="product-list-title">Merengue Merengue</div>
                                        <div class="product-list-category">ID: 3949</div>
                                    </div>
                                    <div class="product-list-price">$924</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection