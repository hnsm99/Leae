<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
      <form action="<?php echo base_url();?>clogin/ingresar" method="POST">
      	<table>
      		<tr>
      			<td><label>usuario</label></td>
      			<td><input type="text" name="txtusuario"></input></td>
      		</tr>
      		<tr>
      			<td><label>contraseña</label></td>
      			<td><input type="password" name="txtcontraseña"></input></td>
      		</tr>
      		<tr>
      			<td><input type="submit" value="ingresar"></input></td>
      		</tr>
      	</table>
      </form>
</body>
</html>