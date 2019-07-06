<?php
class rolController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("mrol");
    }

    function Index(){
    	$data = array('consulta' =>$this->mrol->getRoles());
        $this->load->view("rol/vrol",$data);
    }
    function IngresarRol(){
    	$param ['rol']=$this->input->post('Roltxt');
    	$this->mrol->guardarRol($param);
    	redirect('rolController/Index');
    }
    function buscarrol(){ 
    	$rol=$this->input->post('Roltxt');
    	$data = array('consulta' =>$this->mrol->rolid($rol));
    	$this->load->view("rol/tblid",$data);
    }

}
