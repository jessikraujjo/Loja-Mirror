function validaBusca() {
	if(document.querySelector('#q').value == ''){
		alert('Não podia ter dixado em branco!');
		return false;
	}
	
}
document.querySelector('#form-busca').onsubmit = validaBusca;
