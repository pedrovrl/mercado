<?php 

class Usuarios_model extends CI_Model{
	public function salva($usuario){
		return $this->db->insert("usuarios",$usuario);
	}

	public function buscaPorEmailESenha($email, $senha){
		$sql = "SELECT id,
		    nome,
		    email
		FROM usuarios
		WHERE email = ?
		AND senha = ?;";

		$cond = array(
            $email,
            $senha
        );

		return $this->db->query($sql,$cond);
	}
}