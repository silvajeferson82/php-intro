<?php  

function validaNome(string $nome) : bool{

	if(empty($nome)){
		setarMensagemErro('Preencha os dados(nome e idade) para poder continuar!');
		return false;
	}
	else if(strlen($nome) <= 3){
		setarMensagemErro('O nome deve ter mais de 3 caracteres!');
		return false;
	}
	else if(strlen($nome) >= 20){
		setarMensagemErro('Limite de até 20 caracteres execedido!');
		return false;
	}	
	return true;
}


function validaIdade(string $idade) : bool{
	if(!is_numeric($idade)){
		setarMensagemErro('Informe um número para idade!');
		return false;
	}
	return true;
}





?>