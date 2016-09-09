<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Clientes
                    
                </div>
                <div class="text-right">
                        <button class="btn btn-default" id="new_customer" data-toggle="modal" data-target="#new_customer_modal"><span class="glyphicon glyphicon-plus"></span>Nuevo Cliente</button>
                    </div>
                <table class="table" id="customersT">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Encargado</th>
                        <th>Prestamo</th>
                        <th>Acciones</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>

<div class="modal fade" tabindex="-1" role="dialog" id="new_customer_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Cliente</h4>
      </div>
      <div class="modal-body">
        <form action="api/customer" method="POST">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="first_name">Apellido Paterno</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Apellido Materno</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="form-group">
                <label for="address">Domicilio</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="zip_code">Codigo Postal</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code">
            </div>
            <div class="form-group">
                <label for="city">Ciudad</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="suburb">Colonia</label>
                <select class="form-control" id="suburb" name="suburb">
                    <option value="0">Selecciona una colonia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">Estado</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
            <div class="form-group">
                <label for="phone">Telefono</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="cel_phone">Celular</label>
                <input type="text" class="form-control" id="cel_phone" name="cel_phone">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<div id="modal-cst-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Vista Datos de Cliente</h3>
                    </div>
                    <!-- Block Tabs -->
                    <div class="block full">
                        <!-- Block Tabs Title -->
                        <div class="block-title">
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#tab-personal-data">Datos Personales</a></li>
                                <li><a href="#tab-contact-data">Contacto</a></li>
                                <li><a href="#tab-acount-data">Cuenta</a></li>
                                <li><a href="#tab-endorsment-data">Aval</a></li>
                            </ul>
                        </div>
                        <!-- END Block Tabs Title -->

                        <!-- Tabs Content -->
                        <div class="tab-content">
                            <!-- Tab Personal Data -->
                            <div class="tab-pane active" id="tab-personal-data">
                                <form class="form-horizontal form-bordered" onsubmit="return false;"
                                      enctype="multipart/form-data" method="post" action="page_forms_general.html">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-name">Nombre</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-name" name="info-cst-name"
                                                   class="form-control" placeholder="Nombre" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-first">Ap. Paterno</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-first" name="info-cst-first"
                                                   class="form-control" placeholder="Apellido Paterno" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-last">Ap. Materno</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-last" name="info-cst-last"
                                                   class="form-control" placeholder="Apellido Materno" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Tab Personal Data -->

                            <!-- Tab Contact Data -->
                            <div class="tab-pane" id="tab-contact-data">
                                <form class="form-horizontal form-bordered" onsubmit="return false;"
                                      enctype="multipart/form-data" method="post" action="page_forms_general.html">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-address">Dirreción</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-address" name="info-cst-address"
                                                   class="form-control" placeholder="Dirección" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-postal">Codigo
                                            Postal</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-postal" name="info-cst-postal"
                                                   class="form-control" placeholder="Codigo Postal" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-suburb">Colonia</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-suburb" name="info-cst-suburb"
                                                   class="form-control" placeholder="Municipio" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-city">Municipio</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-city" name="info-cst-city"
                                                   class="form-control" placeholder="Municipio" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-state">Estado</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-state" name="info-cst-state"
                                                   class="form-control" placeholder="Estado" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-lada">Lada</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-lada" name="info-cst-lada"
                                                   class="form-control" placeholder="Telefono" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-phone">Telefono</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-phone" name="info-cst-phone"
                                                   class="form-control" placeholder="Telefono" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-cellphone">Celular</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-cellphone" name="info-cst-cellphone"
                                                   class="form-control" placeholder="Celular" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Tab Contact Data -->

                            <!-- Tab Acount Data -->
                            <div class="tab-pane" id="tab-acount-data">
                                <form class="form-horizontal form-bordered" onsubmit="return false;"
                                      enctype="multipart/form-data" method="post" action="page_forms_general.html">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-id">N° Cliente</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-id" name="info-cst-id" class="form-control"
                                                   placeholder="N° Cliente" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-amount">Saldo Actual</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-amount" name="info-cst-amount"
                                                   class="form-control" placeholder="Saldo Actual" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-promotor">Promotor</label>

                                        <div class="col-md-9">
                                            <select id="info-cst-promotor" name="info-cst-promotor" class="form-control" size="1" disabled>

                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-status">Status de la
                                            Cuenta</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-cst-status" name="info-cst-status"
                                                   class="form-control" placeholder="Status" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Tab Data -->
                            <!-- Tab Endorsment Data -->
                            <div class="tab-pane active" id="tab-endorsment-data">
                                <form class="form-horizontal form-bordered" onsubmit="return false;"
                                      enctype="multipart/form-data" method="post" action="page_forms_general.html">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-cst-name">Nombre</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-name" name="info-endorsment-name"
                                                   class="form-control" placeholder="Nombre" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-endorsment-first">Ap. Paterno</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-first" name="info-endorsment-first"
                                                   class="form-control" placeholder="Apellido Paterno" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-endorsment-last">Ap. Materno</label>

                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-last" name="info-endorsment-last"
                                                   class="form-control" placeholder="Apellido Materno" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-endorsment-address">Dirección</label>
                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-address" name="info-endorsment-address"
                                                   class="form-control" placeholder="Domicilio" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-endorsment-phone">Telefono Fijo</label>
                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-phone" name="info-endorsment-phone"
                                                   class="form-control" placeholder="Telefono" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="info-endorsment-phone">Celular</label>
                                        <div class="col-md-9">
                                            <input type="text" id="info-endorsment-cellphone" name="info-endorsment-cellphone"
                                                   class="form-control" placeholder="Telefono" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Tab Edorsament Data -->

                        </div>
                        <!-- END Tabs Content -->
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" id="cte-info-edit">Editar Info</button>
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                    <!-- END Modal Footer -->
                    <!-- END Block Tabs -->
                </div>
            </div>
        </div>

     <!-- Nuevo Deposito -->
        <div id="modal-cst-pay" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Ingrese Cantidad a Abonar</h3>
                    </div>
                    <div class="modal-body">
                        <form action="api/deposit" method="post" class="form-horizontal form-bordered"
                              id="form-make-pay">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="temp" id="temp">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="info-cst-lada">Cantidad</label>

                                <div class="col-md-9">
                                    <input type="text" id="amount"  class="form-control"
                                           placeholder="Cantidad" name="amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="make-pay-note">Nota</label>

                                <div class="col-md-9">
                                    <textarea placeholder="Nota" class="form-control" rows="9"  id="note" name="note"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar
                                </button>
                                <button type="submit" class="btn btn-sm btn-primary" id="btn-new-bill">Guardar Pago
                                </button>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>

        <div id="modal-cst-newbill" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Nuevo Prestamo</h3>
                    </div>
                    <div class="modal-body">
                        <form action="api/bill" class="form-horizontal form-bordered" method="post">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="amount">Cantidad</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="amount" name="amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="note">Nota</label>

                                <div class="col-md-9">
                                    <textarea placeholder="Nota" class="form-control" rows="9" name="note"
                                              id="note"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar
                                </button>
                                <button type="submit" class="btn btn-sm btn-primary" id="btn-new-bill">Guardar Pago
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id='modal-historial' tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">Historial de Pagos</h3>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="tabId">
                            <thead>
                                <th>#</th>
                                <th>Pago</th>
                                <th>Fecha</th>
                                <th>Nota</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="js/customer.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>