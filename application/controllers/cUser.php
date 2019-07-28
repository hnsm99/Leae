<?php
/**
 * 
 */
class cUser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mlevel");
	}

	public function index(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/index');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}

	public function unit1(){
		if($this->session->userdata('s_usuario')!=null){	
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/Units/unit1');
		$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
	public function unit2(){
		if($this->session->userdata('s_usuario')!=null){	
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/Units/unit2');
		$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
	public function unit3(){
		if($this->session->userdata('s_usuario')!=null){	
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/Units/unit3');
		$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
	public function unit4(){
		if($this->session->userdata('s_usuario')!=null){	
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/Units/unit4');
		$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
}