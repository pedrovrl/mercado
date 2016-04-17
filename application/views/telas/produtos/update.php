<div id="produto_update" class="container">
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

	<h1>Cadastro de Produtos:. Alterar</h1>
	<form method="POST" action="<?php echo base_url();?>produtos/update/<?php echo $item['id'];?>">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
			value="<?php echo $item['nome'];?>">
		</div>
		<div class="form-group">
			<label for="desc">Descrição</label>
			<input type="text" class="form-control" id="desc" placeholder="Descrição" name="desc"
			value="<?php echo $item['descricao'];?>">
		</div>
		<div class="form-group">
			<label for="preco">Preço</label>
			<input type="text" class="form-control" id="preco" placeholder="Preço" name="preco"
			value="<?php echo $item['preco'];?>">
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="<?php echo base_url('produtos');?>" class="btn btn-primary btn-block">Voltar</a>
			</div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-block btn-primary btn-default">Enviar</button>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $item['id'];?>">
	</form>
</div>