$("#loginSubmit").click(function(){
	var correo=$("#correo").val();
	var password=$("#pass").val();
	if(password!=''){
		if(correo!=''){
			emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			if (emailRegex.test(correo)){
				return true;
  			}else{
  				alert("La dirección Email es incorrecta");
				$("#correo").select();
				return false;
  			}
			
		}
		return false;
	}
	return false;
})