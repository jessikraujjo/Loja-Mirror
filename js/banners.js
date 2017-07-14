var banners = ["/img/destaque-jeh.jpg", "/img/destaque-jeh-2.jpg"];
var bannerAtual = 0;
function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}
setInterval(trocaBanner, 4000);