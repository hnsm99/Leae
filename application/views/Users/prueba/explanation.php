    <?php if(isset($tema)){?>
    	<div id="demo" class="carousel slide" data-ride="carousel">
    	<?php foreach ($tema as $topic) {?>
    		<center><iframe width="600" height="300" src="<?php echo $topic->video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div><a class="btn btn-primary" href="<?php echo base_url();?>cTopic/cuestionario">Quiz</a></div><br><?php if(isset($idNivel)){?><div><a class="btn btn-primary" href="<?php echo base_url();?>cPrueba/topicDinamicos/<?php echo base64_encode($idNivel)?>">Volver</a></div><?php } ?></center>
    	<?php } ?>
    </div>
    <?php }else if(isset($subtema)){?>
    	<?php foreach ($subtema as $topic) {?>
    		<center><iframe width="600" height="300" src="<?php echo $topic->video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div><a class="btn btn-primary" href="<?php echo base_url();?>cTopic/cuestionario">Quiz</a></div><br></center>
    	<?php } ?>
    	<div><a href="<?php echo base_url();?>cPrueba/topicDinamicos/<?php echo base64_encode($idNivel)?>" class="btn btn-primary">Volver</a></div>
    <?php } ?>