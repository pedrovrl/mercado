<?php 

class Produtos_model extends CI_Model{
	public function get_byid($id){
		return $this->db->get_where("produtos", array("id"=>$id));
	}

	public function do_update($dados = NULL, $condicao = NULL) {
		$this->db->update ('produtos',$dados,$condicao);
	}

	public function do_delete($condicao=NULL){
		$this->db->delete('produtos', $condicao);
	}

	public function buscaTodos(){
		return $this->db->get("produtos")->result_array();
	}

	public function salva($produto){
		return $this->db->insert("produtos",$produto);
	}
}