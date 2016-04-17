<?php
$user = $this->session->userdata('user');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="Hege Refsnes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Mercado</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url("css/main.css") ?>">
	</head>
	<body>

	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url();?>">Mercado</a>
			</div>
		<?php
		if ($user) {
		?>
				<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo base_url();?>produtos">
							Produtos
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Ajuda</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $this->session->userdata('user_nome');?>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Configurações</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo base_url('login/logout');?>">Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
		<?php
		} else {
		?>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>login">Login</a></li>
					<li><a href="<?php echo base_url();?>login/create">Cadastre-se</a></li>
				</ul>
			</div>
		<?php
		}
		?>	
		</div>
	</nav>