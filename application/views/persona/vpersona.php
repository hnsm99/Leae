<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>cargo persona</h1>
    <form action="<?php echo base_url(); ?>Cpersona/ingresar" method="POST">
        <table>
            <!--<tr>
                <td><label>idPersona</label></td>
                <td><input type="text" name="txtidpersona"></td>
            </tr>-->
    		<tr>
    			<td><label>Nombre</label></td>
    			<td><input type="text" name="txtNombre"></td>
    		</tr>
    		<tr>
    			<td><label>apellido</label></td>
    			<td><input type="text" name="txtapellido"></td>
    		</tr>
    		<tr>
    			<td><label>correo</label></td>
    			<td><input type="email" name="txtcorreo"></td>
    		</tr>
    		<tr>
    			<td><label>telefono</label></td>
    			<td><input type="text" name="txttelefono"></td>
    		</tr>
    		<tr>
    			<td><label>tipoDocumento</label></td>
    			<td><select name="txttipoDocumento">
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                </select></td>
    		</tr>
    		<tr>
    			<td><label>documento</label></td>
    			<td><input type="text" name="txtdocumento"></td>
    		</tr>
        </table>
        <TABLE>
            <h1>usuario</h1>
            <!--<tr>
                <td><label>idusuario</label></td>
                <td><input type="text" name="txtidusuario"></td>
            </tr>-->
            <!--<tr>
                <td><label>idpersona</label></td>
                <td><input type="text" name="txtidpersona"></td>
            </tr>-->
            <tr>
                <td><label>usuario</label></td>
                <td><input type="text" name="txtusuario"></td>
            </tr>
            <tr>
                <td><label>contrasena</label></td>
                <td><input type="password" name="txtcontrasena"></td>
            </tr>
            <tr>
                <td><label>rol</label></td>
                <td><input type="text" name="txtrol"></td>
            </tr>
            <tr>
                <td><label>estado</label></td> 
                <td><input type="text" name="txtestado"></td>
            </tr>
    		<tr>
    			<td colspan="2"><input type="submit" value="ingresar"></td>
    		</tr>
    	</table>
    </form>
    <a href="<?php echo base_url();?>Clogin">loguearse</a>
    <br>
    <a href="<?php echo base_url();?>Cpersona/getuser">Listar usuarios</a>
</body>
</html>