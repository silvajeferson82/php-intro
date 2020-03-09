<?php  

session_start();

$categoria = [];
$categoria[] = "Infantil";
$categoria[] = "Adolescente";
$categoria[] = "Senior";
$categoria[] = "Master";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
	$_SESSION['mensagem de erro'] = "Preencha os dados(nome e idade) para poder continuar!";
	header('Location: index.php');
	return;
}

else if(strlen($nome) <= 3){
	$_SESSION['mensagem de erro'] = "O nome deve ter mais de 3 caracteres!";
	header('Location: index.php');
	return;
}

else if(strlen($nome) >= 20){
	$_SESSION['mensagem de erro'] = "Limite de até 20 caracteres execedido!";
	header('Location: index.php');
	return;
}

else if(!is_numeric($idade)){
	$_SESSION['mensagem de erro'] = "Informe um número para idade!";
	header('Location: index.php');
	return;
}

if ($idade >= 6 && $idade <= 12) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Infantil'){
			$_SESSION['mensagem de sucesso'] = "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
			header('Location: index.php');
			return;
		}
	}
}else if ($idade >= 13 && $idade <= 18) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Adolescente') {
			$_SESSION['mensagem de sucesso'] = "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
			header('Location: index.php');
			return;
		}
	}
}else if ($idade >= 19 && $idade <= 30) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Senior') {
			$_SESSION['mensagem de sucesso'] = "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
			header('Location: index.php');
			return;
		}
	}
}else{
	
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Master') {
			$_SESSION['mensagem de sucesso'] = "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
			header('Location: index.php');
			return;
		}
	}
}


?>