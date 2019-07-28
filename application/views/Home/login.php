    <?php if($this->session->flashdata('Mensaje')!=null){
      echo "<script>
      setTimeout(function() {
        $('#mensaje').fadeOut(1500);
    },3000);</script>";
    }else{
      echo "<script>$('#mensaje').fadeOut();</script>";      
    }?>
    <div id="demo" class="carousel slide" data-ride="carousel"  >
    <div id="mensaje"><?php echo $this->session->flashdata('Mensaje');?></div>
       <!--FORMULARIO-->
    <div id="cont-formulario" class="d-flex justify-content-center align-items-center-center col-xl-12 col-lg-12 col-md-12 col-ms-12 col-12">
      <div id="formulario" class="d-flex flex-wrap flex-row  col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 " >
        <div id="contacto" class="d-flex col-xl-12 justify-content-center col-lg-12 col-md-12 col-xs-12 col-12">
        Inicio de Sesión
        </div>
        <form method="POST" action="<?php echo base_url();?>clogin/ingresar" class="col-xl-12">
          <div class="form-group">
            <label class="datos" for="usuario">Correo Electronico:</label>
            <input type="text" class="form-control" id="correo" placeholder="Correo Electronico" name="correo" required>
          </div>
          <div class="form-group">
              <label class="datos" for="pass">Contraseña:</label>
              <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="password" required>
           </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Iniciar Sesión" id="loginSubmit">
          </div>
        </div>
        </form>
      </div>
    </div>





