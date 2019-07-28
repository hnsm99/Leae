<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<div>
	<form method="POST" action="<?php echo base_url();?>cPrueba/UpdatePost">
		<?php foreach ($consulta->result() as $table) {?>
		<input type="hidden" name="txtid" value="<?php echo $table->idPrueba ?>">
		<div class="formControl">
		<label>Prueba</label>
		<input type="text" name="txtPrueba" value="<?php echo $table->prueba?>">	
		</div>
		<div class="formControl">
		<label>Prueba int</label>
		<input type="text" name="txtPruebaInt" value="<?php echo $table->pruebas_int?>">	
		</div>
		<input type="submit" value="Actualizar">
		<?php } ?>
	</form>
</div>
</body>
</html>