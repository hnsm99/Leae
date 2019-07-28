<?php
/**
 * 
 */
class Mlogin extends CI_Model
{
	
	public function ingresar ($correo,$pass){
     $this->db->select('tbl_u.idusuario,tbl_u.idpersona,tbl_p.nombre,tbl_p.apellido,tbl_p.correo,tbl_u.rol');
     $this->db->from('tbl_usuario tbl_u');
     $this->db->join('tbl_persona tbl_p','tbl_p.idpersona=tbl_u.idpersona');
     $this->db->where('tbl_p.correo',$correo);
     $this->db->where('tbl_u.contrasena',$pass);
     $this->db->where('tbl_u.estado',1);

     $resultado=$this->db->get();
     if($resultado->num_rows()>0){
          $r=$resultado->row();
          $rol=$r->rol;
          $s_usuario=array(
               's_idpersona'=>$r->idpersona,
               's_idusuario'=>$r->idusuario,
               's_usuario'=>$r->nombre." ".$r->apellido,
               's_rol'=>$rol
          );
          $this->session->set_userdata($s_usuario);
          if($rol==1){
               return 1;
          }else{
               return 2;
          }
     }else{
          return 0;
     }
	}
}