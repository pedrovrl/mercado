<div id="produto_create" class="container">
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

	<h1>Cadastro de Produtos</h1>
	<form method="POST" action="<?php echo base_url();?>produtos/create">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" autofocus="">
		</div>
		<div class="form-group">
			<label for="desc">Descrição</label>
			<input type="text" class="form-control" id="desc" placeholder="Descrição" name="desc">
		</div>
		<div class="form-group">
			<label for="preco">Preço</label>
			<input type="text" class="form-control" id="preco" placeholder="Preço" name="preco">
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="<?php echo base_url('produtos');?>" class="btn btn-primary btn-block">Voltar</a>
			</div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-block btn-primary btn-default">Enviar</button>
			</div>
		</div>
	</form>
</div>