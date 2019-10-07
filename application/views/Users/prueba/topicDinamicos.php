    <div id="demo" class="carousel slide" data-ride="carousel">
      <div style="float: left;" ><a href="<?php echo base_url()?>cPrueba/UnitsDinamica" class="btn btn-primary">Volver</a></div>
      <div class="container">
        <?php $i=0; foreach ($Topics as $topic) { $i++;?>
        <div class="box">
          <div class="icon"><?php echo $i?></div>
          <div class="content">
          <h1>Topic <?php echo $i?></h1>
          <h2></h2>
          <br>
          <strong><h1><?php echo $topic->nombre?></h1><h3><?php if ($topic->descripcion!=null) {echo '('.$topic->descripcion.')';}?></h3></strong>
          <?php foreach ($subTemas as $subtema) {?>
            <?php foreach ($subtema as $st) {?>
              <?php if ($topic->idTema==$st->idTema) {?>
                <li><?php echo $st->subtema?></li>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          <br>
          <br>
          <br>
          <a class="b" href="<?php echo base_url(); ?>cPrueba/getopic/<?php echo base64_encode($idNivel)?>/<?php echo base64_encode($topic->idTema)?>">Start</a>
          
        </div>
        </div>
        <?php } ?>
      </div>
    </div>