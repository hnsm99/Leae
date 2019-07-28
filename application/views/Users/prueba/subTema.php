    <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="container">
        <?php $i=0; foreach ($subtemas as $subt) { $i++;?>
        <div class="box">
          <div class="icon"><?php echo $i?></div>
          <div class="content">
          <h1>SubTopic <?php echo $i?></h1>
          <h2></h2>
          <br>
          <strong><h1><?php echo $subt->subtema?></h1><h3><?php if ($subt->descripcion!=null) {echo '('.$subt->descripcion.')';}?></h3></strong>
          <br>
          <br>
          <br>
          <a class="b" href="<?php echo base_url(); ?>cPrueba/getExplanation/<?php echo base64_encode($subt->idTema)?>/false/<?php echo base64_encode($IdNivel)?>">Empezar</a><br>
          <a class="b" href="<?php echo base_url();?>cPrueba/topicDinamicos/<?php echo base64_encode($IdNivel)?>">Volver</a>
          <!--<a class="b" href="<?php //echo $subt->juego?>" target="_blank">Empezar Juego(Opcional)</a>-->
        </div>
        </div>
        <?php } ?>
      </div>
    </div>