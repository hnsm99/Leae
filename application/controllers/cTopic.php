<?php
/**
 * 
 */
class cTopic extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	#region Nivel1
	public function L1topic1(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level1/index');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}

	public function L1topic2(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level1/index2');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function L1topic3(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level1/index3');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function L1topic4(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level1/index4');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}

	public function cuestionario(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level1/quizz');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
#endRegion
#region Nivel2
	public function L2topic1(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level2/index');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function L2topic2(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level2/index1');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function L2topic3(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level2/index2');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function L2topic4(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level2/index3');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}public function topic5(){
		if($this->session->userdata('s_usuario')!=null){
			$this->load->view ('Users/layout/header');
			$this->load->view ('Users/layout/menu');
			$this->load->view ('Users/Topics/Level2/index4');
			$this->load->view ('Users/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
#endRegion
}