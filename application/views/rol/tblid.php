<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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