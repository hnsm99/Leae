<?php
/**
 * 
 */
class Cpersona extends CI_controller
{
	
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('mpersona');
		$this->load->model('musuarios');
	}

	public function index(){
		$this->load->view ('persona/vpersona');
	}
	public function ingresar (){
		//echo "ingreso datos";
		//persona	
		//$param ['idPersona']->$this->input->post('txtidpersona');
		$param ['nombre']=$this->input->post('txtNombre');
	    $param ['apellido']=$this->input->post('txtapellido');
	    $param ['correo']=$this->input->post('txtcorreo');
	    $param ['telefono']=$this->input->post('txttelefono');
	    $param ['tipoDocumento']=$this->input->post('txttipoDocumento');
	    $param ['documento']=$this->input->post('txtdocumento');
	    //usuario
	    //$paramusu ['idusuario']->$this->input->post('txtidusuario');
	    //$paramusu ['idpersona']=$this->input->post('txtidpersona');
	    $paramusu ['usuario']=$this->input->post('txtusuario');
	    $paramusu ['contrasena']=base64_encode($this->input->post('txtcontrasena'));
	    $paramusu ['rol']=$this->input->post('txtrol');
	    $paramusu ['estado']=$this->input->post('txtestado');

	    $lastid=$this->mpersona->guardar($param);	    

	    if ($lastid >0) {
	    	$paramusu ['idpersona']=$lastid;
	    	$this->musuarios->guardarusuario($paramusu);
	    }
	}

	public function actualizar_form(){

	}
	
	public function actualizar(){
		$param ['nombre']=$this->input->post('txtnombre');
	    $param ['apellido']=$this->input->post('txtapellido');
	    $param ['correo']=$this->input->post('txtcorreo');
	    $param ['documento']=$this->input->post('txtdocumento');

	    $this->mpersona->actualizarDatos($param);

	    //$this->load->view ('persona/vpersona');
	    redirect('cpersona/index');
	}
	public function eliminarpersona(){
		$idP=$this->input->post('txtidPersona');
		$resulid=$this->musuarios->buscaridUsuario($idP);
		foreach ($resulid->result() as $key) {
			$resulid=$key->idUsuario;
		}
		$this->musuarios->eliminarusuario($resulid);
		$this->mpersona->eliminarpersona($idP);
	}
	public function buscarid(){
		$idP=$this->input->post('txtidPersona');
		$data = array('consulta' =>$this->musuarios->buscaridUsuario($idP));
		$this->load->view('persona/vtblpersona', $data);
	}
	public function getuser(){
		$data = array('consulta' =>$this->musuarios->buscarUsuarios());
		$this->load->view('persona/vtblpersona', $data);	
	}

}