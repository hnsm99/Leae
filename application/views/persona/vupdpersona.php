<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url();?>Cpersona/actualizar" method="POST">
     
     <?php echo"usuario :". $this->session->userdata('s_usuario');?>

     <h3>Actualiza tus datos </h3>

     <input type="text" name="txtnombre" placeholder="nombre"></input><br><br>
     <input type="text" name="txtapellido"placeholder="apellido"></input><br><br>
     <input type="text" name="txtcorreo"placeholder="correo"></input><br><br>
     <input type="text" name="txtdocumento"placeholder="documento"></input><br>
     <input type="submit" name="Actualizar"></input>

</form>
<form action="<?php echo base_url();?>Cpersona/eliminarpersona" method="POST">
     

     <h3>Eliminar por id</h3>

     <input type="text" name="txtidPersona" placeholder="ID"></input><br><br>
     <input type="submit" name="Eliminar"></input>

</form>
<form action="<?php echo base_url();?>Cpersona/buscarid" method="POST">
     

     <h3>Consultar por id</h3>

     <input type="text" name="txtidPersona" placeholder="ID"></input><br><br>
     <input type="submit" name="Eliminar"></input>

</form>


</body>
</html>