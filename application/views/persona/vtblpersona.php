<!DOCTYPE html>
<html>
<head>
	<title>Información de usuarios</title>
</head>
<body>
	<table>
		<tr>
    		<th>IdPersona</th> 
    		<th>Nombre</th>
    		<th>Apellido</th>
    		<th>Correo</th>
    		<th>Telefono</th>
    		<th>TD</th>
    		<th>Documento</th>
    		<th>Usuario</th>
    		<th>Rol</th>
    		<th>Estado</th>
  		</tr>
  	<?php foreach ($consulta->result() as $table) { ?>
  		<tr>
    		<td><?php echo $table->idPersona?></td>
    		<td><?php echo $table->nombre?></td>
    		<td><?php echo $table->apellido?></td>
    		<td><?php echo $table->correo?></td>
    		<td><?php echo $table->telefono?></td>
    		<td><?php echo $table->Tdoc?></td>
    		<td><?php echo $table->documento?></td>
    		<td><?php echo $table->usuario?></td>
    		<td><?php echo $table->Rol?></td>
    		<td><?php echo $table->Estado?></td>
  		</tr>
  	<?php } ?>
	</table>
</body>
</html>