function validarCorreo(email){
	emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if(!emailRegex.test(email)){
		alert("Direccion Email no es valida");
		$("#Correo").select();
		return false;
	}else{
		return true;
	}
}

function validarNumero(e){
var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}

function validarPassword(){debugger
	var pw1=$("#contrasena").val();
	var pw2=$("#contrasenaRepeat").val();
	var td=$("#Tipo_documento").val();
	if(pw1===pw2){
		if(td!=""){
			var correo=validarCorreo($("#Correo").val());
			if(correo){
				document.getElementById("registro").submit();
			}	
		}else{
		alert("Seleccione un Tipo de Documento Valido");
		return false;			
		}
	}else{
		alert("Las Contraseñas No Coinciden");
		return false;
	}
}