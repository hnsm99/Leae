<?php
/**
 * 
 */
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campo=array(
         //'idpersona'->$param['idpersona'],
         'nombre'=>$param['nombre'],
         'apellido'=>$param['apellido'],
         'correo'=>$param['correo'],
         'telefono'=>$param['telefono'],
         'tipoDocumento'=>$param['tipoDocumento'],
         'documento'=>$param['documento']
		);
		$this->db->insert('tbl_persona',$campo);

		return $this->db->insert_id();
	}
	public function actualizarDatos($param){
	$campo=array(
         //'idpersona'->$param['idpersona'],
         'nombre'=>$param['nombre'],
         'apellido'=>$param['apellido'],
         'correo'=>$param['correo'],
         'documento'=>$param['documento']
		);

	$this->db->update('tbl_persona',$campo);
	$this->db->where('idperosna',$this->session->userdata('s_idPersona'));

	return 1;
     }

     	public function eliminarpersona($idP){
     		//$cmapo => array(
     			//'idPersona'=>$idP

     		//);

     		//$this->dn->delete('tbl_usuario',$campo);

     		$this->db->where('idPersona',$idP);
     		$this->db->delete('tbl_persona');
     	}

}