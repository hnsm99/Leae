<?php
/**
 * 
 */
class mPrueba extends CI_Model
{
	
	/*public function ingresar ($p){
          try {
          $prueba=array(
         'prueba'=>$p['prueba'],
         'pruebas_int'=>$p['pruebaint'],
         'estado'=>false
          );
          $this->db->insert('tbl_prueba',$prueba);
          $mensaje="Se realizo con Exito";
          return $mensaje;
          } catch (Exception $e) {
               
          }
	}

     public function actualizar ($p, $id){

          try {
          $prueba=array(
         'prueba'=>$p['prueba'],
         'pruebas_int'=>$p['pruebaint'],
         'estado'=>false
          );
          $this->db->where('idPrueba',$id);
          $this->db->update('tbl_prueba',$prueba);
          $mensaje="Se realizo con Exito";
          return $mensaje;
          } catch (Exception $e) {
               
          }
     }

     public function getPrueba(){
          $query =$this->db->query("select * from TBL_PRUEBA");
          return $query;
}
     public function getPruebaid($id){
          $query =$this->db->query("select * from TBL_PRUEBA where idPrueba=".$id."");
          return $query;
}
     public function remove($id){
          $this->db->where('idPrueba',$id);
          $this->db->delete('tbl_prueba');
}
     public function updateEstado($id,$estado){
          $prueba=array(
         'estado'=>$estado
          );
          $this->db->where('idPrueba',$id);
          $this->db->update('tbl_prueba',$prueba);
}*/

public function getLevels(){
  $query=$this->db->query("select idNivel Nivel from tbl_nivel");
  return $query->result();
}

public function gettemas($id){
  $query=$this->db->query("select * from tbl_tema where idNivel=".$id."");
  return $query->result();
}

public function getema($id){
 $query=$this->db->query("select * from tbl_tema where idTema=1");
  return $query->result();
}

public function getsubTemas($id){
  $query=$this->db->query("select * from tbl_subTema where idTema=".$id."");
  return $query->result();
}
}