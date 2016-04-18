<?php 
if ( !defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library ( 'form_validation' );
		$this->load->model("usuarios_model",'model');
	}
	
	public function index(){
		$conf = array(
			'tela'=>'login/body'
		);

		$this->load->view('index.php',$conf);
	}
	public function create(){
		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('nome','Nome','trim|required');

 		$this->form_validation->set_message ('required','%s é Obrigatório');
 		$this->form_validation->set_rules('email','Email','trim|required');

 		$this->form_validation->set_message ('required','O campo %s é Obrigatório!');
 		$this->form_validation->set_rules('pass','Senha','trim|required');

 		$this->form_validation->set_message ('matches','O campo %s está diferente do campo %s');
		$this->form_validation->set_rules ('pass2','Confirmar Senha','trim|required|matches[pass]');

 		if ($this->form_validation->run()){
			$usuario = array(
				"nome" =>$this->input->post("nome"),
				"email"=>$this->input->post("email"),
				"senha"=>md5($this->input->post("pass"))
			);
			$this->session->set_flashdata("success" ,"Usuário salvo com sucesso!");
			$this->model->salva($usuario);
		}
		$conf = array(
			'tela'=>'login/create'
		);
		$this->load->view('index.php',$conf);
	}
	public function enter(){

		$email = $this->input->post("email");
		$senha = md5($this->input->post("pass"));

		$usuario = $this->model->buscaPorEmailESenha($email, $senha);

		if($usuario){
			$usuario = $usuario->row_array();

			$this->session->set_userdata("user_nome",$usuario['nome']);
			$this->session->set_userdata("user_id",$usuario['id']);
			$this->session->set_userdata("user",$usuario);
			redirect(base_url());
		}else{
			$this->session->set_flashdata("danger" ,"Email ou senha inválida!");
			redirect(base_url('login'));
		}
	}
	public function logout(){
		$this->session->unset_userdata("user");
		$this->session->set_flashdata("success" ,"Deslogado com sucesso!");
		redirect(base_url('login'));
	}
}