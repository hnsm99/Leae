<?php
/**
 * 
 */
class cAdmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("mAdmin");
	}

	/*public function validaradmin($id){
		echo $id;
	}*/

	public function index(){
		if($this->session->userdata('s_usuario')!=null){
			/*if($this.validaradmin($this->session->userdata('s_idusuario'))){*/
			$data = $this->mAdmin->count();		
			$this->load->view ('Admin/layout/header');
			$this->load->view ('Admin/layout/menu');
			$this->load->view ('Admin/index', $data);
			$this->load->view ('Admin/layout/footer');
			/*}else{

			}*/
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}

	public function user(){
		if($this->session->userdata('s_usuario')!=null){	
		$this->load->view ('Admin/layout/header');
		$this->load->view ('Admin/layout/menu');
		$this->load->view ('Admin/User/index');
		$this->load->view ('Admin/layout/footer');
		}else{
			$this->session->set_flashdata('Mensaje', 'Debe Iniciar Sesión');
			redirect(base_url()."clogin/index");
		}
	}
}