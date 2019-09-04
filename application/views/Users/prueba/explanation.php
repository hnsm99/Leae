    <?php if(isset($tema)){?>
        <div id="demo" class="carousel slide" data-ride="carousel">
        <?php foreach ($tema as $topic) {?>
        	
             <center><iframe type="text/html" width="600" height="300" src="<?php echo $topic->video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div><a target="_blank" class="btn btn-primary" href="<?php echo $topic->urlJuego?>">Game</a></div><br>
             	<a class="btn btn-primary" href="<?php echo base_url();?>cPrueba/getCuestionario/<?php echo base64_encode($topic->idTema)?>">Cuestionario</a></div><br>
             	<?php if(isset($idNivel)){?><div><a class="btn btn-primary"  href="<?php echo base_url();?>cPrueba/topicDinamicos/<?php echo base64_encode($idNivel)?>">Return</a></div><?php } ?></center>
        <?php } ?>
    <?php } ?>
    </div>