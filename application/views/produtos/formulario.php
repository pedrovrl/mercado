<<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?> ">

</head>
<body>

<div class="container">
<h1>Cadastro de Produto</h1>
			<?php 
				echo form_open("produtos/novo");
				
				echo form_label("Nome", "nome");
				echo form_input(array(
					"name" => "nome",
					"id"=> "nome",
					"class"=> "form-control",
					"maxlenght"=> "255"
				));
					echo form_label("Preco", "preco");
				echo form_input(array(
					"name" => "preco",
					"id"=> "preco",
					"class"=> "form-control",
					"maxlenght"=> "255",
					"type" => "number"

				));
				echo form_label("Descricao", "descricao");
				echo form_textarea(array(
					"name" => "descricao",
					"id"=> "descricao",
					"class"=> "form-control",
					"maxlenght"=> "255"
				));
			

				echo form_button(array(
					"class" => "btn btn-primary",
					"content" => "Cadastrar",
					"type" => "submit"
				));
				echo form_close();
			?>
</div>
</body>
</html>