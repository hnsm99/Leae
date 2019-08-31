    <div id="demo" class="carousel slide" data-ride="carousel">
      <div style="float: left;" ><a href="<?php echo base_url()?>cPrueba/UnitsDinamica" class="btn btn-primary">Volver</a></div>
      <div class="container">
    <?php $i=0; foreach ($Juegos as $Games) { $i++;?>
        <div class="box">
        <div class="icon">0<?php echo $i?></div>
        <div class="content">
          <h1>Game 0<?php echo $i?></h1>
     
          <h4><?php echo $Games->nombre?></h4>
          
            <br>
      
              <a class="b" href="<?php $Games->urlJuego ?>">Empezar</a>
        </div>
      </div>
      <?php } ?>
      </div>
      </div>