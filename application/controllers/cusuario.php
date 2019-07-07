<?php

class Cusuario extends CI_controller
{
	
	function __construct()
	{
		parent::__construct(); 
	}

	public function index(){
		$this-> load->view ('usuario/vusuario');
	}
	public function ingresar (){
		echo "ingreso datos";
	}
}