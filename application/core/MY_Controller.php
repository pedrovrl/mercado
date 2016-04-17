<?php

class MY_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$usuario = $this->session->userdata('user');

		if (!$usuario) {
			redirect(base_url('login'));
		}
	}
}