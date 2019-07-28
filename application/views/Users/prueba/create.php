<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
<div>
	<form method="POST" action="<?php echo base_url();?>cPrueba/CreatePost">
		<div class="formControl">
		<label>Prueba</label>
		<input type="text" name="txtPrueba">	
		</div>
		<div class="formControl">
		<label>Prueba int</label>
		<input type="text" name="txtPruebaInt">	
		</div>
		<input type="submit" value="Crear">
	</form>
</div>
</body>
</html>