
<script>
	var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
	var bannerAtual = 0;
	function trocaBanner() {
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
	}
	var timer = setInterval(trocaBanner, 4000);

	var controle = document.querySelector('.pause');
	
</script>

<body onload="trocaBanner()">
	
	<?php 
		$cabecalho_title = "Loja Mirror Fashion";
		$cabecalho_css = '<link rel = "stylesheet" href= "css/estilos.css">
		<link rel = "stylesheet" href= "css/reset.css">';
		include("cabecalho.php"); ?>
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form action="http://www.google.com.br/search" id="form-busca">
				<input type="search" name="q" id="q">
				<input type="image" src="img/busca.png">
			</form>
		</section>
		<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section><!-- fim .menu-departamentos -->
		
		<img src="img/destaque-home.png" alt="Promoção: Big City Night" >
		<a href="" class="pause"></a>

	</div>

	<div class="container paineis ">
		<section class="painel novidades ">
			<h2>Novidades</h2>
			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");
					while ($produto = mysqli_fetch_array($dados)): //transformando dados pegados da tabela em um array
				?>
				<li>
					<a href="produto.php?id=<?= $produto["id"] ?> ">
						<figure>
							<img src="img/produtos/miniatura<?= $produto["id"] ?>.png"
							alt="<?= $produto["nome"] ?> ">
							<figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?> </figcaption>
						</figure>
					</a>
				</li>
				<?php endwhile; ?>
			<!-- coloque vários produtos aqui -->
			</ol>
			<button type="button">Mostra mais</button>
		</section>
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");
					while ($produto = mysqli_fetch_array($dados)): //transformando dados pegados da tabela em um array
				?>
				<li>
					<a href="produto.php?id=<?= $produto["id"] ?> ">
						<figure>
							<img src="img/produtos/miniatura<?= $produto["id"] ?>.png"
							alt="<?= $produto["nome"] ?> ">
							<figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?> </figcaption>
						</figure>
					</a>
				</li>
				<?php endwhile; ?>
			</ol>
			<button type="button">Mostra mais</button>
		</section>
	</div>
	<?php include("rodape.php"); ?>
	<script src="js/jquery.js" type="text/javascript" ></script>
	<script src="js/home.js" type="text/javascript" charset="utf-8"></script>

</body>
