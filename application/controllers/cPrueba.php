<?php
/**
 * 
 */
class cPrueba extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mPrueba');
	}

	/*public function index(){
		$data = array('consulta' =>$this->mPrueba->getPrueba());
		$this->load->view ('layout/header');
		$this->load->view ('layout/menu');
		$this->load->view ('prueba/index',$data);
		$this->load->view ('layout/footer');
	}
	public function getid($id){
		$data = array('consulta' =>$this->mPrueba->getPruebaid($id));
		$this->load->view('prueba/index', $data);
	}
	public function CreateForm(){
		$this->load->view ('prueba/create');
	}
	public function CreatePost(){
		$p['prueba']=$this->input->post('txtPrueba');
		$p ['pruebaint']=$this->input->post('txtPruebaInt');
		$res=$this->mPrueba->ingresar($p);		
		echo $res;
		redirect("cPrueba/index");
	}
	public function updateform($id){
		$data = array('consulta' =>$this->mPrueba->getPruebaid($id));
		$this->load->view ('prueba/update',$data);
	}
	public function UpdatePost(){
		$id=$this->input->post('txtid');
		$p['prueba']=$this->input->post('txtPrueba');
		$p ['pruebaint']=$this->input->post('txtPruebaInt');
		$res=$this->mPrueba->actualizar($p,$id);		
		echo $res;
		redirect("cPrueba/index");
	}
	public function delete($id){
		$res=$this->mPrueba->remove($id);		
		redirect("cPrueba/index");
	}

	public function estado($id,$estado){
		if($estado=='Activo'){
			$estado=false;
		}else{
			$estado=true;
		}
		$res=$this->mPrueba->updateEstado($id,$estado);		
		redirect("cPrueba/index");
	}*/

	public function UnitsDinamica(){
		$niveles = array('Levels' =>$this->mPrueba->getLevels());
		//var_dump($data['consulta'][0]->Nivel);
		$Temas=[];
		$SubTemas=[];
		for ($i=0; $i <count($niveles['Levels']) ; $i++) { 
			array_push($Temas,$this->mPrueba->gettemas($niveles['Levels'][$i]->Nivel));
		}
		foreach ($Temas as $tema) {
			foreach ($tema as $t) {
				$result=$this->mPrueba->getsubTemas($t->idTema);
				if (count($result)>0) {
					array_push($SubTemas,$result);
				}
			}
		}
		$temas = array('Temas' =>$Temas);
		$subtemas = array('subTemas' =>$SubTemas);
		$array_resultante=array_merge($niveles,$temas,$subtemas);
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/prueba/UnitsDinamicas',$array_resultante);
		$this->load->view ('Users/layout/footer');
	}

	public function topicDinamicos($id){
		$subTemas=[];
		$id=$this->desencriptarid($id);
		$Temas = array('Topics' =>$this->mPrueba->gettemas($id));
		foreach ($Temas["Topics"] as $tema) {
			array_push($subTemas,$this->mPrueba->getsubTemas($tema->idTema));
		}
		$subtemas = array('subTemas' =>$subTemas,'idNivel'=>$id);
		$array_resultante=array_merge($Temas,$subtemas);
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/prueba/topicDinamicos', $array_resultante);
		$this->load->view ('Users/layout/footer');
	}

	public function getopic($idnivel,$idtema){
		$idNivel=$this->desencriptarid($idnivel);
		$idTema=$this->desencriptarid($idtema);
		$Temas = array('tema' =>$this->mPrueba->getema($idTema),'idNivel'=>$idNivel);
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Users/prueba/explanation', $Temas);
		$this->load->view ('Users/layout/footer');
	}
	public function desencriptarid($id){
		return $id=base64_decode($id);
	}
}