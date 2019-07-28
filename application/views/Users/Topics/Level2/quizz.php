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
        Cuestionario de Aprendizaje
        </div>
        <form action="<?php echo base_url();?>Cregister/register" method="POST" class="col-xl-12" id="registro">
          <div class="form-group">
             <br>1.________ are the most interesting books I have read.</br>
				<input type = "radio" NAME = "colombia" value = "colombia">These<br>
				<input type = "radio" NAME = "colombia" value = "chule">This<br>
          </div>
          <div class="form-group">
              <br>2.___________are the most interesting books I have read</br>
				<input type = "radio" NAME = "alemania" value = "japon">THIS<br>
				<input type = "radio" NAME = "alemania" value = "alemania">These<br>
          </div>
          <div class="form-group">
             <br>3.Did you know that _____ is the hottest month of the year?</br>
				<input type = "radio" NAME = "brittany" value = "brittany">This<br>
				<input type = "radio" NAME = "brittany" value = "japon">THESE<br>
          </div>
          <div class="form-group">
             <br>4.Claire _______ is Kevin. He comes from Montevideo.</br>
<input type = "radio" NAME = "mexican" value = "mexican">This<br>
<input type = "radio" NAME = "mexican" value = "colombian">THESE<br>
          </div>
          <div class="form-group">
             <br>5._________is my favorite ice-cream.</br>

<input type = "radio" NAME = "francia" value = "francia">THIS<br>
<input type = "radio" NAME = "francia" value = "brazil">THESE<br>
          </div>
          <div class="form-group">
             <br>6.____ is the restaurant I told you about.</br>
<input type = "radio" NAME = "brazil" value = "brazil">This<br>
<input type = "radio" NAME = "brazil" value = "argentina">these<br>
          </div>
          <div class="form-group">
             <br>7.______ dishes are ready </br>
<input type = "radio" NAME = "chile" value = "chile">These<br>
<input type = "radio" NAME = "chile" value = "brazil">This<br>
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="button" value="Registrarse" onclick="javascript:validarPassword()">
          </div>
        </div>
        </form>
      </div>
     </div>