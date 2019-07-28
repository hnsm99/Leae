<?php
/**
 * 
 */
class Cregister extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mRegister');
	}

	public function index(){
		$data = array('tipoDoc'=>$this->mRegister->lstTipoDoc());
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Home/registro', $data);
		$this->load->view ('Users/layout/footer');
	}

	public function register(){
		try {
			//Persona
		$people ['nombre']=$this->input->post('Nombre');
	    $people ['apellido']=$this->input->post('Apellidos');
	    $people ['correo']=$this->input->post('Correo');
	    $people ['telefono']=$this->input->post('NroTel');
	    $people ['tipoDocumento']=$this->input->post('TipoDocumento');
	    $people ['documento']=$this->input->post('NroDocumento');

	    //Usuario
	    $user ['contrasena']=base64_encode($this->input->post('password'));
	    if($this->session->set_userdata('s_rol')===1){
	    	$user ['rol']=$this->input->post('rol');
	    	$user ['estado']=true;
	    }else{
	    	$user ['rol']=2;
	    	$user ['estado']=true;
	    }
	    $idPeople=$this->mRegister->SavePeople($people);

	    if (is_numeric($idPeople)) {
	    	if($idPeople>0){
	    		$user ['idpersona']=$idPeople;
	    	$result=$this->mRegister->SaveUser($user);
	    	if($result){
	    		$this->session->set_flashdata('Mensaje', 'El registro se realizo con éxito');
	    		redirect(base_url()."Clogin/index");
	    	}else{
	    	$this->session->set_flashdata('Mensaje', 'No fue posible realizar el registro');
	    	redirect(base_url()."cHome/index");	
	    	}
	    }else{
	    	$this->session->set_flashdata('Mensaje', 'No fue posible realizar el registro');
	    	redirect(base_url()."cRegister/index");
	    }
	    	}else{
	    	$this->session->set_flashdata('Mensaje', $idPeople);
	    	redirect(base_url()."cRegister/index");
	    	}
	    	
		} catch (Exception $e) {
			return null;
		}
		
	}	
}