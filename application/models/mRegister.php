<?php
/**
 * 
 */
class mRegister extends CI_Model
{
     
     function __construct()
     {
          parent::__construct();
     }

     public function lstTipoDoc(){
      $query =$this->db->query("select * from TBL_TIPODOC");
          return $query->result();
     }

     public function SavePeople($people){
          try {
            $this->db->select('*');
            $this->db->from('tbl_persona tbl_p');
            $this->db->like('tbl_p.correo',$people['correo']);
            $resultado=$this->db->get();
            if($resultado->num_rows()>0){
              return "Ya existe usuario con el correo escrito";
            }else{
              $arrPeople=array(
         'nombre'=>$people['nombre'],
         'apellido'=>$people['apellido'],
         'correo'=>$people['correo'],
         'telefono'=>$people['telefono'],
         'tipoDocumento'=>$people['tipoDocumento'],
         'documento'=>$people['documento']
          );
          $this->db->insert('tbl_persona',$arrPeople);

          return $this->db->insert_id();
            }       
          } catch (Exception $e) {
               $array['Mensaje']="No fue posible crear la entidad".$e;
               $array['status']=false;
               return $array;
          }
     }

     public function SaveUser($user){
      try {
        $campo= array(
      //'idusuario'=>$param['idusuario']
      'idPersona'=>$user['idpersona'],
      'contrasena'=>$user['contrasena'],
      'rol'=>$user['rol'],
      'estado'=>$user['estado']
    );
    $this->db->insert('tbl_usuario',$campo);
    return true;
      } catch (Exception $e) {
        $array['Mensaje']="No fue posible crear la entidad".$e;
        $array['status']=false;
        return $array;
      }
     }
}