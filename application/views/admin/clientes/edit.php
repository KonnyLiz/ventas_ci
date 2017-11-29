<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Clientes</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Clientes</h1>
                </div>
<!-- Content Wrapper. Contains page content -->
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Datos</h3>
                                
                            </div>
                            <div class="panel-body">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/clientes/update" method="POST">
                            <input type="hidden" name="id_cliente" value="<?php echo $cliente->id;?>">
                            <div class="form-group">

                            <div class="form-group">
                            <div class="form-group">
                                <label for="codigo">Grupo:</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->grupo?>" id="r1" name="r1"  > 
                            </div> 

                                <label for="codigo">Nombre:</label>
                                <input  type="text" class="form-control" value="<?php echo $cliente->nombres?>" id="r2" name="nom">
                            </div> 
                           
                            <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input  type="text" class="form-control" value="<?php echo $cliente->apellidos?>" id="r2" name="r2">
                            </div> 
                                                        <div class="form-group">
                                <label for="codigo">Telefono</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->telefono?>"  name="r3" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">DUI</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->dui?>"  name="r4" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">NIT</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->nit?>"  name="r5" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Dirección</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->direccion?>"  name="r6" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Registro</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->registro?>"  name="r7" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Empresa</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->empresa?>"  name="r8" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Estado</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->estado?>"  name="r9" >  
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->
