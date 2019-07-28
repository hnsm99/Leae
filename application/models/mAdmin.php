<?php
/**
 * 
 */
class mAdmin extends CI_Model
{
	
	public function count (){
     $this->db->select('count(*)');
     $this->db->from('tbl_usuario');
     $usuarios=$this->db->get()->num_rows();

     $this->db->select('count(*)');
     $this->db->from('tbl_nivel');
     $nivel=$this->db->get()->num_rows();     

     $this->db->select('count(*)');
     $this->db->from('tbl_tema');
     $tema=$this->db->get()->num_rows();     

     $param ['usuario']=$usuarios;
     $param ['nivel']=$nivel;
     $param ['tema']=$tema;
     return $param;
	}
}