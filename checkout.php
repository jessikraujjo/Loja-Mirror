<?php
	
	$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
		<link rel = "stylesheet" href= "css/produto.css">
		<style> 
			.navbar {
			margin: 0;
			}
		</style><!-- retira a margem entre o topo e o texto-->
	</head>
	<body>
	<div class="container" >
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span><img src="img/logo.png" ></a>
				<button class="navbar-toggle" type="button"
					data-target=".navbar-collapse" data-toggle="collapse">
					<span class="glyphicon glyphicon-align-justify"></span>
				</button><!-- para ativar os itens do nav-->
			</div>
			<ul class="nav navbar-nav collapse navbar-collapse"> <!-- COllap.. faz desaparecer intens do menu -->
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda<span class="glyphicon glyphicon-question-sign"></span></a></li>
				<li><a href="#">Perguntas frequentes<span class="glyphicon glyphicon-list-alt"></span></a></li>
				<li><a href="#">Entre em contato<span class="glyphicon glyphicon-bullhorn"></span></a></li>
			</ul>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">		
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
						<div class="panel-body">
							 <!--class img-responsive,faz a foto ficar flexivel sem estourar, a thumbnail centraliza com uma borda de destaque-->
							<img src="img/produtos/foto<?= $produto["id"] ?>-<?= $_GET["cor"] ?>.png"
									class="img-thumbnail img-responsive">
							<dl>
								<dt>ID</dt>
								<dd><?= $produto["id"] ?> </dd>

								<dt>Produto</dt>
								<dd><?= $produto["nome"] ?> </dd>

								<dt>Preço</dt>
								<dd><?= $produto["preco"] ?> </dd>

								<dt>Cor</dt>
								<dd><?= $_GET["cor"] ?> </dd>

								<dt>Tamanho</dt>
								<dd><?= $_GET["tamanho"] ?> </dd>
							</dl>
						</div>
					</div>
				</div>
				<form class="col-sm-8 ">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados pessoais</legend>
							<div class="form-group">
								<label for="nome">Nome completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
								</div>
							</div>
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" data-mask="999.999.999-99" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
							</div>
							<div class="checkbox">
								<label>
								<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fieldset>
						<fieldset class="col-md-6">
							<legend>Cartão de crédito</legend>
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" data-mask="9999 9999 9999 9999 - 999" class="form-control" id="numero-cartao" name="numero-cartao">
							</div>
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao"	class="form-control">
								<option value="master">MasterCard</option>
								<option value="visa">VISA</option>
								<option value="amex">American Express</option>
								</select>
							</div>
							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
							</div>
						</fieldset>
					</div>
					<button type="submit" class="btn btn-lg btn-primary pull-right">
						<span class="glyphicon glyphicon-thumbs-up " ></span>
						Confirmar Pedido
					</button>
				</form>
			</div>
		</div>
		
		
	</div>
	<script>
		document.querySelector('input[type=email]').oninvalid = function() {
		// remove mensagens de erro antigas
				this.setCustomValidity("");
				// reexecuta validação
				if (!this.validity.valid) {
				// se inválido, coloca mensagem de erro
				this.setCustomValidity("Email inválido");
				}
		};
	</script>
	<!-- para ativar o menu da nav-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>
</body>
</html>