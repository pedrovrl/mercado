<div id="produtos" class="container">

<?php if($this->session->flashdata("success")) :?>
	<p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
<?php endif ?>
<?php if($this->session->flashdata("danger")) :?>
	<p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
<?php endif ?>
	
	<h1>Produtos</h1>
	<div class="row">
  		<div class="col-md-8">
  		</div>
  		<div class="col-md-4">
  			<a href="<?php echo base_url('produtos/create');?>" class="btn btn-block btn-primary">Novo</a>
  		</div>
	</div>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th style="width:10%;">ID</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th style="width:100px;">Ação</th>
			</tr>
		</thead>
		<?php foreach ($produtos as $produto) : ?>
		<tbody>
			<tr>
				<td><?php echo $produto['id'];?></td>
				<td><?= anchor("produtos/{$produto['id']}",$produto['nome'])?></td>
				<td><?= character_limiter($produto['descricao'], 10)?></td>
				<td><?= numeroEmReais($produto['preco'])?></td>
				<td>
					<div class="btn-group" role="group">
						<a href="<?php echo base_url('produtos/update/'.$produto['id']);?>" type="button" class="btn btn-primary btn-default">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a href="<?php echo base_url('produtos/delete/'.$produto['id']);?>" type="button" class="btn btn-danger btn-default">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</div>
				</td>
			</tr>
		</tbody>
		<?php endforeach ?>
	</table>
</div>