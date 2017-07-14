$('.novidades').addClass('painel-compacto');

$('.novidades button').click(function() {
	$('.novidades').removeClass('painel-compacto');
});
$('.mais-vendidos').addClass('painel-compacto');

$('.mais-vendidos button').click(function() {
	$('.mais-vendidos').removeClass('painel-compacto');
});
document.querySelector('#form-busca').onsubmit = function() {
	if(document.querySelector('#q').value == ''){
		document.querySelector('#form-busca').style.background = 'red';
		return false;
	}
	
}
controle.onclick = function() {
	if (controle.className == 'pause') {
		clearInterval(timer);
		controle.className = 'play';
	} else {
		timer = setInterval(trocaBanner, 4000);
		controle.className = 'pause';
	}
	return false;
}

