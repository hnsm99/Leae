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
 $query=$this->db->query("select * from tbl_tema where idTema=".$id."");
  return $query->result();
}

public function getsubTemas($id){
  $query=$this->db->query("select * from tbl_subTema where idTema=".$id."");
  return $query->result();
}

public function getPreguntaTema($id){
$query=$this->db->query("select * from tbl_tema_pregunta where idTema=".$id."");
  return $query->result();
}
public function getPregunta($id){
 $query=$this->db->query("select tblp.pregunta as Pregunta, tbltmp.idTema, tblp.idPregunta idPregunta, tblp.puntaje FROM tbl_pregunta tblp INNER JOIN tbl_tema_pregunta tbltmp ON tblp.idPregunta=tbltmp.idPregunta WHERE tbltmp.idTema=".$id." ANd tblp.estado=1");
  return $query->result(); 
}
public function getanswers($id){
 $query=$this->db->query("select * from tbl_respuesta where idPregunta=".$id."");
  return $query->result(); 
}
public function correct($id){
 $query=$this->db->query("SELECt tbl_respuesta.idRespuesta FROM tbl_respuesta WHERE tbl_respuesta.idPregunta=".$id." AND tbl_respuesta.correcta=1");
  return $query->result();  
}
public function guardarpuntaje($id,$puntaje,$idusuario){
  $campo=array(
         'idTema'=>$id,
         'idUsuario'=>$idusuario,
         'puntajeObtenido'=>$puntaje
    );
    $this->db->insert('tbl_tema_usuario_pregunta',$campo);

    return $this->db->insert_id();
}
public function valTemas($idtema, $idUsuario){
  $query=$this->db->query("SELECt * FROM tbl_tema_usuario_pregunta WHERE tbl_tema_usuario_pregunta.idTema=".$idtema." and tbl_tema_usuario_pregunta.idUsuario=".$idUsuario."");
  return $query->num_rows();  
}
}