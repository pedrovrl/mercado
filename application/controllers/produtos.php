<?php 
if ( !defined('BASEPATH')) exit('No direct script access allowed');
class Produtos extends CI_Controller {

	public function index(){

		//$this->output->enable_profiler(TRUE);
		
		$this->load->model('produtos_model');
		$produtos = $this->produtos_model->buscaTodos();

		$dados = array("produtos" => $produtos);
		//$this->load->helper("url");
		//$this->load->helper("currency");//Ele já sabe que é um helper e entende o _helper presente no nome do arquivo
		//$this->load->helper("form");
		$this->load->helper(array("currency"));
		$this->load->view("produtos/index.php", $dados);


		
	}


	public function formulario(){
		$this->load->view("produtos/formulario");
	}

	public function novo(){
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$produto = array(
				"nome" =>$this->input->post("nome"),
				"descricao"=>$this->input->post("descricao"),
				"preco"=>$this->input->post("preco"),
				"usuario_id"=>$usuarioLogado["id"]
			);

		$this->load->model("produtos_model");
		$this->produtos_model->salva($produto);
		$this->session->set_flashdata("success" ,"Produto cadastrado com sucesso!");
		redirect('/');
	}
}