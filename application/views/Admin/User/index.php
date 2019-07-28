<?php if($this->session->flashdata('Mensaje')!=null){
      echo "<script>
      setTimeout(function() {
        $('#mensaje').fadeOut(1500);
    },3000);</script>";
    }else{
      echo "<script>$('#mensaje').fadeOut();</script>";      
    }?>
<div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                            Usuarios <small>Usuarios Registrados</small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="<?php echo base_url()?>cAdmin/index">Inicio</a></li>
                      <li class="active">Usuarios</li>
                    </ol> 
                                    
        </div>
        
            <div id="page-inner"> 
            <div id="mensaje"><?php echo $this->session->flashdata('Mensaje');?></div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuarios Registrados
                            <ul class="pull-right panel-settings panel-button-tab-right">   
                                <a class="pull-right dropdown-toggle" data-toggle="dropdown" title="Regresar al Inicio" href="<?php echo base_url();?>cAdmin/index">
                                    <em class="fa fa-backward"></em>
                                </a>
                            </ul>
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <a class="pull-right dropdown-toggle" data-toggle="dropdown" title="Registrar Nueva Actividad" href="#">
                                    <em class="fa fa-plus-circle"></em>
                                </a>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="hide">Id Usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Correo Electronio</th>
                                            <th>Telefono</th>
                                            <th class="hide">Tipo Documento</th>
                                            <th class="hide">Documento</th>
                                            <th class="hide">Contraseña</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="hide">Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td>4</td>
                                            <td>X</td>
                                            <td class="hide">Trident</td>
                                            <td class="hide">Internet Explorer 4.0</td>
                                            <td class="hide">Win 95+</td>
                                            <td >4</td>
                                            <td >X</td>
                                            <td ><a class="fa fa-user" href=""></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-user" href=""></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>