<?php

$this->load->view('includes/header');

if ($tela!=null) {
	$this->load->view('telas/'.$tela);
} else {
	$this->load->view('telas/body');
}

$this->load->view('includes/footer');