<!DOCTYPE html>
<html>
<head>
	<title>Rol</title>
</head>
<body>
    <div>
        <form action="<?php echo base_url(); ?>rolController/IngresarRol" method="POST">
        <label>Rol</label>
        <input type="text" name="Roltxt">
        <input type="submit" value="Enviar">
    </form>
    </div>
     <div>
        <form action="<?php echo base_url(); ?>rolController/buscarrol" method="POST">
        <label>Rol</label>
        <input type="text" name="Roltxt">
        <input type="submit" value="buscar">
    </form>
    </div>
    <div>
    	<table>
    		<tr>
    			<td>IdRol</td>
    			<td>Rol</td>
    		</tr>
    		<?php foreach($consulta->result() as $data){?>
    			<tr>
    			<td><?php echo $data->idRol?></td>
    			<td><?php echo $data->Rol?></td>
    			</tr>
    			<?php } ?>
    	</table>
    </div>
</body>
</html>