<?php
/**
 * 
 */
class Mlevel extends CI_Model
{
	
	public function index (){
          try {
     $this->db->select('n.idNivel,n.nombreNivel,t.idNivel nivel, t.nombre, t.descripcion');
     $this->db->from('tbl_nivel n');
     $this->db->join('tbl_tema t','n.idNivel=t.idNivel');
     $this->db->where('n.estado',true);
     $this->db->where('t.estado',true);

     $resultado=$this->db->get()->result();
     return $resultado;
               
          } catch (Exception $e) {
               
          }
	}
}