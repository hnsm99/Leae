<?php
/**
 * 
 */
class Mlogin extends CI_Model
{
	
	public function ingresar ($usu,$pass){
     $this->db->select('tbl_u.idusuario,tbl_u.idpersona,tbl_p.nombre,tbl_p.apellido,tbl_p.documento');
     $this->db->from('tbl_usuario tbl_u');
     $this->db->join('tbl_persona tbl_p','tbl_p.idpersona=tbl_u.idpersona');
     $this->db->where('tbl_u.usuario',$usu);
     $this->db->where('tbl_u.contrasena',$pass);

     $resultado=$this->db->get();
     if ($resultado->num_rows()==1) {
     	$r=$resultado->row();

     	$s_usuario=array(
     		's_idpersona'=>$r->idpersona,
     		's_idusuario'=>$r->idusuario,
     		's_usuario'=>$r->nombre.",".$r->apellido
     	);
     	$this->session->set_userdata($s_usuario);
     	return 1;
     }else{
     	return 0;
     }
	}
}