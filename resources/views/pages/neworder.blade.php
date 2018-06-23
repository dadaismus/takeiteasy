@extends('layouts.admin.master')

@section('adminContent')
    <div class="wrapper">
        @include('layouts.admin.asidemenu')
        <section class="main">
            <div class="breadcrumb">Dashboard <span class="breadcrumb-devider">/</span> Órdenes</div>
            <div class="content">
                <div class="panel">
                    <div class="content-header no-mg-top">
                        <i class="fa fa-newspaper-o"></i>
                        <div class="content-header-title">Nueva órden</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box">
                                <div class="content-box-header">
                                    <div class="box-description">Recuerde ingresar todos los datos necesarios para generar su órden, una vez creada la órden le será confirmada.</div></a></div>
                                </div>
                                <form id="form-validate">
                                    <div class="form-group">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Nombre(s)</label>
                                                <input class="form-control" data-minlength="6" required="required" type="text">
                                                <div class="help-block form-text text-muted form-control-feedback">Recuerde que es necesario para generar la órden.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Apellido(s)</label>
                                                <input class="form-control" placeholder="" required="required" type="text">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Dirección de envío</label>
                                                <input class="form-control" data-minlength="6" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Código postal</label>
                                                <input class="form-control" placeholder="" required="required" type="text">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Tienda</label>
                                        <select class="form-control">
                                            <option selected="true">Seleccione un convenio</option>
                                            <option>Chemao</option>
                                            <option>Blatt Salat</option>
                                            <option>Tacos el pata</option>
                                            <option>Asturiano</option>
                                        </select>
                                    </div>
                                    <div class="form-section">
                                        <span>Detalles de la órden</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Repartidor(res) encargado(s)</label>
                                                <select class="form-control">
                                                    <option selected="true">Seleccione un repartidor</option>
                                                    <option>Juan Manuel Basaldua</option>
                                                    <option>Antonio Maloso</option>
                                                    <option>Carlos Martinez</option>
                                                    <option>Luis Manuel Velazquez</option>
                                                </select>
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Nota adicional:</label>
                                                <input class="form-control" data-error="¿Existe alguna petición adicional del cliente?" placeholder="¿Existe alguna petición adicional del cliente?"
                                                       type="text">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for=""> Seleccione Fecha (Solo si el pedido es programado)</label>
                                                <input class="single-daterange form-control" placeholder="Date of birth" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">@</div>
                                                    <input class="form-control" placeholder="Email" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Detalles y productos de la órden</label>
                                        <textarea class="form-control" rows="10" height="10px"></textarea>
                                    </div>
                                    <div class="content-box-footer">
                                        <button class="btn btn-primary">Crear órden</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection