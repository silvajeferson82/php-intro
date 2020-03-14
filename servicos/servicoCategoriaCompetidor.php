<?php  


function defineCategoriaCompetidor(string $nome, string $idade): ?string{

	$categoria = [];
	$categoria[] = "Infantil";
	$categoria[] = "Adolescente";
	$categoria[] = "Senior";
	$categoria[] = "Master";

	if(validaNome($nome) && validaIdade($idade)){
		removerMensagemErro();
		if ($idade >= 6 && $idade <= 12) {
		for ($i=0; $i < count($categoria); $i++) {
			if($categoria[$i] == 'Infantil'){
				setarMensagemSucesso('O Competidor '.$nome.' disputa a categoria '.$categoria[$i].'!');
				return null;
			}
		}
		}else if ($idade >= 13 && $idade <= 18) {
			for ($i=0; $i < count($categoria); $i++) {
				if($categoria[$i] == 'Adolescente') {
					setarMensagemSucesso("O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !");
					return null;
				}
			}
		}else if ($idade >= 19 && $idade <= 30) {
			for ($i=0; $i < count($categoria); $i++) {
				if($categoria[$i] == 'Senior') {
					setarMensagemSucesso("O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !");
					return null;
				}
			}
		}else{
			
			for ($i=0; $i < count($categoria); $i++) {
				if($categoria[$i] == 'Master') {
					setarMensagemSucesso("O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !");
					return null;
				}
			}
		}
	}
	else{
		removerMensagemSucesso();
		return obterMensagemErro();
	}
}

?>