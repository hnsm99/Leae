<?php
/**
 * 
 */
class cHome extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Home/index');
		$this->load->view ('Users/layout/footer');
	}

	public function LogOut(){
		$res=$this->session->sess_destroy();	
		if(is_null($res)){
			redirect(base_url()."cHome/index");
		}
	}
}