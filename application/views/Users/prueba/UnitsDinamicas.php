    <div id="demo" class="carousel slide" data-ride="carousel">
      <div style="float: left;" ><a href="<?php echo base_url()?>cPrueba/UnitsDinamica" class="btn btn-primary">Volver</a></div>
      <div class="container">
    <?php $i=0; foreach ($Levels as $level) { $i++;?>
        <div class="box">
        <div class="icon">0<?php echo $i?></div>
        <div class="content">
          <h1>Unit 0<?php echo $i?></h1>
      <?php foreach ($Temas as $Tema) {?>
        <?php foreach ($Tema as $t) {?>
          <?php if ($level->Nivel==$t->idNivel) {?>
          <h4><?php echo $t->nombre?><?php if ($t->descripcion!=null) {echo '('.$t->descripcion.')';}?></h4>
          <?php  foreach ($subTemas as $subtema) {?>
            <?php foreach ($subtema as $st) {?>
              <?php if ($t->idTema==$st->idTema) {?>
                <?php if ($st->subtema!=null) {?>
                  <li><?php echo $st->subtema?></li>
                <?php } ?>
              <?php } ?>
            <?php } ?>
            <?php } ?>
            <br>
          <?php } ?>
        <?php } ?>
        <?php } ?>
              <a class="b" href="<?php echo base_url(); ?>cPrueba/topicDinamicos/<?php echo base64_encode($level->Nivel)?>">Empezar</a>
        </div>
      </div>
      <?php } ?>
      </div>
      </div>