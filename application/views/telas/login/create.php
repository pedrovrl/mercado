<div id="login_create" class="container">
	<?php if($this->session->flashdata("success")) :?>
	    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
	<?php endif ?>
	<?php if($this->session->flashdata("danger")) :?>
	    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
	<?php endif ?>

	<?php 
	echo validation_errors(
		'<div class="alert alert-danger">','</div>'
	);
	?>

	<h1>Cadastro de Usuário</h1>
	<form method="POST" action="<?php echo base_url();?>login/create">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" autofocus="">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pass">Senha</label>
			<input type="password" class="form-control" id="pass" placeholder="Senha" name="pass">
		</div>
		<div class="form-group">
			<label for="pass2">Confirmar Senha</label>
			<input type="password" class="form-control" id="pass2" placeholder="Senha" name="pass2">
		</div>
		<button type="submit" class="btn btn-block btn-primary btn-default">Enviar</button>
	</form>
</div>