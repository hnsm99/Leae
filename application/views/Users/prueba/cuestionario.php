    <div id="demo" class="carousel slide" data-ride="carousel"  >
    <div id="mensaje"><?php echo $this->session->flashdata('Mensaje');?></div>
       <!--FORMULARIO-->
    <div id="cont-formulario" class="d-flex justify-content-center align-items-center-center col-xl-12 col-lg-12 col-md-12 col-ms-12 col-12">
      <div id="formulario" class="d-flex flex-wrap flex-row  col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 " >
        <div id="contacto" class="d-flex col-xl-12 justify-content-center col-lg-12 col-md-12 col-xs-12 col-12">
        Cuestionario de Aprendizaje
        </div>
        <form action="<?php echo base_url();?>cPrueba/valideQuestion/<?php echo $Tema?>" method="POST" class="col-xl-12">
	 	<?php foreach ($preguntas as $pregunta) { ?>
	 		<div class="form-group">
              <label class="datos" for="Nombre"><?php echo $pregunta->Pregunta ?> *</label>
              <?php foreach ($Answers as $answer) { ?>
              	<?php foreach ($answer as $ans) { ?>
              		<?php if ($pregunta->idPregunta==$ans->idPregunta) { ?>
              			<br><input type="radio" name="<?php echo $ans->idPregunta ?>" value="<?php echo $ans->idRespuesta?>"> <label><?php echo $ans->respuesta?></label>
              		<?php } ?>
              	<?php } ?>
              <?php } ?>
           </div>
	 	<?php } ?>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-primary" href="<?php echo base_url();?>cPrueba/getopic/MQ==/MQ==">Volver</a>
          </div>
        </div>
        </form>
      </div>
    </div>