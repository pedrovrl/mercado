<?php 
if ( !defined('BASEPATH')) exit('No direct script access allowed');
class Produtos extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library ( 'form_validation' );
		$this->load->model('Produtos_model','model');
	}

	public function index(){
		$produtos = $this->model->buscaTodos();
		$this->load->helper(array("currency"));

		$dados = array(
			'tela' => 'produtos/body',
			"produtos" => $produtos
		);
		
		$this->load->view("index", $dados);
	}

	public function create(){
		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('nome','Nome','trim|required');

 		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('desc','Descrição','trim|required');

 		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('preco','Preço','trim|required');

 		if ($this->form_validation->run()){
 			$produto = array(
				"nome" =>$this->input->post("nome"),
				"descricao"=>$this->input->post("desc"),
				"preco"=>$this->input->post("preco"),
				"usuario_id"=>$this->session->userdata("user_id")
			);
			$this->model->salva($produto);
			$this->session->set_flashdata("success" ,"Produto cadastrado com sucesso!");
 		}
 		$dados = array(
			'tela' => 'produtos/create'
		);
		$this->load->view("index", $dados);
	}

	public function update($id){

		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('nome','Nome','trim|required');

 		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('desc','Descrição','trim|required');

 		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('preco','Preço','trim|required');

 		if ($this->form_validation->run()){
 			$produto = array(
				"nome" =>$this->input->post("nome"),
				"descricao"=>$this->input->post("desc"),
				"preco"=>$this->input->post("preco")
			);
			
			$this->model->do_update(
				$produto,
				array('id' => $this->input->post('id'))
            );

			$this->session->set_flashdata("success" ,"Produto alterado com sucesso!");
 		}

		if ($id == NULL)
			redirect('produtos');
        
        $result = $this->model->get_byid($id)->row_array();
        
        if($result==null)
            redirect('produtos');
        
 		$dados = array(
			'tela' => 'produtos/update',
			'item' => $result
		);
		$this->load->view("index", $dados);
	}
	public function delete($id){
		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('id','ID','trim|required');

 		if ($this->form_validation->run()){
 			$produto = array(
				"nome" =>$this->input->post("nome"),
				"descricao"=>$this->input->post("desc"),
				"preco"=>$this->input->post("preco")
			);
			
			$this->model->do_delete(
				array('id' => $this->input->post('id'))
            );

			$this->session->set_flashdata("success" ,"Produto deletado com sucesso!");
			redirect('produtos');
 		}

		if ($id == NULL)
			redirect('produtos');
        
        $result = $this->model->get_byid($id)->row_array();
        
        if($result==null)
            redirect('produtos');
        
 		$dados = array(
			'tela' => 'produtos/delete',
			'item' => $result
		);
		$this->load->view("index", $dados);
	}

	public function mostra($id){
		$this->load->model('produtos_model');
		$produto=$this->produtos_model->busca($id);
		$dados = array("produto"=>$produto);
		$this->load->helper("typography");
		$this->load->view("produtos/mostra", $dados);
	}
}