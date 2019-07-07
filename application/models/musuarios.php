<?php
/**
 * 
 */
class Musuarios extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarusuario($paramusu){
		$campo= array(
			//'idusuario'=>$param['idusuario']
			'idPersona'=>$paramusu['idpersona'],
			'usuario'=>$paramusu['usuario'],
			'contrasena'=>$paramusu['contrasena'],
			'rol'=>$paramusu['rol'],
			'estado'=>$paramusu['estado']
		);
		$this->db->insert('tbl_usuario',$campo);
	}

	public function eliminarusuario($idP){
	        $this->db->where('idPersona',$idP);
     		$this->db->delete('tbl_usuario');
}

	public function buscaridUsuario($idP){	
		$res="";
		$query =$this->db->query("select P.idPersona,P.nombre,P.apellido,P.correo,P.telefono,TD.Tipo as Tdoc,P.documento,U.idUsuario,U.usuario,R.Rol,E.Tipo as Estado from tbl_persona P inner join tbl_usuario U on P.idPersona=U.idPersona inner join tbl_rol R on U.rol=R.idRol inner join tbl_estado E on U.estado=E.idEstado inner join tbl_tipodoc TD on TD.idTipoDoc=P.TipoDocumento where P.idPersona=".$idP."");
		//$this->db->select('*');
		//$this->db->where('idPersona', $idP);
		//$query = $this->db->get('tbl_usuario');
		return $query;
}

		public function buscarUsuarios(){
		$query =$this->db->query("select P.idPersona,P.nombre,P.apellido,P.correo,P.telefono,TD.Tipo as Tdoc,P.documento,U.usuario,R.Rol,E.Tipo as Estado from tbl_persona P inner join tbl_usuario U on P.idPersona=U.idPersona inner join tbl_rol R on U.rol=R.idRol inner join tbl_estado E on U.estado=E.idEstado inner join tbl_tipodoc TD on TD.idTipoDoc=P.TipoDocumento");
		//$this->db->select('*');
		//$this->db->where('idPersona', $idP);
		//$query = $this->db->get('tbl_usuario');
		return $query;
}
}