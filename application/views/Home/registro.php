 <?php if($this->session->flashdata('Mensaje')!=null){
      echo "<script>
      setTimeout(function() {
        $('#mensaje').fadeOut(1500);
    },3000);</script>";
    }else{
      echo "<script>$('#mensaje').fadeOut();</script>";      
    }?>
 <div id="demo" class="carousel slide" data-ride="carousel">
  <div id="mensaje"><?php echo $this->session->flashdata('Mensaje');?></div>
  <div id="cont-formulario" class="d-flex justify-content-center align-items-center-center col-xl-12 col-lg-12 col-md-12 col-ms-12 col-12">
      <div id="formulario" class="d-flex flex-wrap flex-row  col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 " >
        <div id="contacto" class="d-flex col-xl-12 justify-content-center col-lg-12 col-md-12 col-xs-12 col-12">
        Registro de Usuario
        </div>
        <form action="<?php echo base_url();?>Cregister/register" method="POST" class="col-xl-12" id="registro">
           <div class="form-group">
              <label class="datos" for="Nombre">Nombres *</label>
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" required>
           </div>
           <div class="form-group">
              <label class="datos" for="Apellidos">Apellidos *</label>
              <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" name="Apellidos" required>
           </div>
           <div class="form-group">
              <label class="datos" for="correo">Correo *</label>
              <input type="text" class="form-control" id="Correo" placeholder="Correo Electronico" name="Correo" required onchange="validarCorreo(this.value)">
           </div>
          <div class="form-group">
            <label class="datos" for="Tipo_documento">Tipo de documento *</label>
            <select class="form-control" id="Tipo_documento" placeholder="Tipo de documento" name="TipoDocumento" required>
              <option value="">Seleccione...</option>
              <?php foreach ($tipoDoc as $key) {?>
                <option value="<?php echo $key->idTipoDoc?>"><?php echo $key->Tipo?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
              <label class="datos" for="Numero_documento">Número de documento *</label>
              <input type="text" class="form-control" id="Numero_documento" placeholder="Número de documento" name="NroDocumento" required onkeypress="return validarNumero(event)">
           </div>
           <div class="form-group">
              <label class="datos" for="Numero_documento">Número de Telefono *</label>
              <input type="text" class="form-control" id="Telefono" placeholder="Número de Telefono" name="NroTel" required onkeypress="return validarNumero(event)">
           </div>
           <div class="form-group">
              <label class="datos" for="contrasena">Contraseña *</label>
              <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="password" required>
           </div>
           <div class="form-group">
              <label class="datos" for="repetir contraseña">Repetir Contraseña *</label>
              <input type="password" class="form-control" id="contrasenaRepeat" placeholder="Repetir Contraseña" required>
           </div>
          <div class="form-group">
            <input class="btn btn-primary" type="button" value="Registrarse" onclick="javascript:validarPassword()">
          </div>
        </div>
        </form>
      </div>
     </div>