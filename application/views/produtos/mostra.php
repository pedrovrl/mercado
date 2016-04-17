<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?> ">
	<title></title>
</head>
	<body>
	<div class="container">
		<h1><?= $produto['nome']?><br></h1>
		<?= $produto['preco']?><br>
		<?= auto_typography(html_escape($produto['descricao']))?>
	</div>
	</body>
</html>