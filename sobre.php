

<!--<script >
	ban = new Array(2);
    ban[0] = "img/destaque-home.png";
    ban[1] = "img/destaque-home-2.png";
    var bannerAtual = 0;
    var timer = 1000;
    function banner(){
		bannerAtual++;
		bannerAtual = bannerAtual%2;
		document.banner.src = ban[bannerAtual];
		setTimeout("banner()", timer);
	}
 </script>-->

<body onLoad="banner()" >
	<?php 
		$cabecalho_title = "Sobre a Mirror Fashion";
		$cabecalho_css = '<link rel = "stylesheet" href= "css/sobre.css">
			
			<link rel = "stylesheet" href= "css/estilos.css">';
		include("cabecalho.php") ?>
	
	<article>
		<h1 id="titulo">A Mirror Fashion</h1>
		<p>
			<strong>A Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
			Fundada há <?php print date("Y")-1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
			participação em 118 deles.
		</p>
		<section class="distribuicao">
			<p>	
				Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">
				Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que 
				distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
			</p>
			<figure id="centro-distribuicao">
				<img src="img/centro-distribuicao.png">
				<figcaption>Centro de distribuição da Mirror Fashion</figcaption>
			</figure>
		</section>
		<section class="historia">
			<h2 id="historia">História</h2>
						
			<section class="familia">
				<figure id="familia-pelho">
					<img src="img/familia-pelho.jpg">
					<figcaption>Família Pelho</figcaption>
				</figure>
			</section>
					
			<p>
				Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em contato 
				se tiver dúvidas. Conheça também nossa  <a href="#historia">história</a> e nossos  <a href="#diferenciais">diferenciais</a>.
			</p>
			<p>
				A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
				família <em>Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
				revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
				administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
				de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.

				O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
				Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
				de usuários diferentes, em bilhões de diferentes pedidos.

				O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
				Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
				Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
				nos escritórios em todo país.

				Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
				homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
				Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
			</p>
		</section>
		<section class="menu-diferenciais">
			<h2 id="diferenciais">Diferenciais</h2>
			<ul>
				<li>Menor preço do varejo, garantido</li>
				<li>Se você achar uma loja mais barata, leva o produto de graça</li>
				....
			</ul>	
		</section>
		
		<div id="rodape">
			<section>
				<img src="img/logo.png">

				&copy; Copyright Mirror Fashion
			</section>
		</div>
			
	</article>
	<?php include("rodape.php"); ?>
</body>



