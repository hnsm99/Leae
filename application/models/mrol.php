<?php
class mrol extends CI_Model
{

    function guardarRol($param){
        $campo=array(
            'Rol'=>$param['rol'],
           );
           $this->db->insert('tbl_rol',$campo);
    }
    function rolid($rol){
        $query=$this->db->query("Select * from tbl_rol where idRol=".$rol."");
        return $query;

    }
    function getRoles(){
        $query =$this->db->query("select * from tbl_rol");
        return $query;
    }
}
