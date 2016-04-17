<div id="produto_delete" class="container">
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
	<h1>Cadastro de Produtos:. Deletar</h1>
	<form method="POST" action="<?php echo base_url();?>produtos/delete/<?php echo $item['id'];?>">
		<div class="form-group">
			<label for="nome">Nome</label>
			<p class="form-control-static"><?php echo $item['nome'];?></p>
		</div>
		<div class="form-group">
			<label for="desc">Descrição</label>
			<p class="form-control-static"><?php echo $item['descricao'];?></p>
		</div>
		<div class="form-group">
			<label for="preco">Preço</label>
			<p class="form-control-static"><?php echo $item['preco'];?></p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="<?php echo base_url('produtos');?>" class="btn btn-primary btn-block">Voltar</a>
			</div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-block btn-danger btn-default">Deletar</button>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $item['id'];?>">
	</form>
</div>