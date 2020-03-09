<?php  

$categoria = [];
$categoria[] = "Infantil";
$categoria[] = "Adolescente";
$categoria[] = "Senior";
$categoria[] = "Master";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if(empty($nome)){
	echo "O campo nome não pode ser vazio!";
	return;
}

if(strlen($nome) <= 3){
	echo "O nome deve ter mais de 3 caracteres!";
	return;
}

if(strlen($nome) >= 20){
	echo "Limite de até 20 caracteres execedido!";
	return;
}

if(!is_numeric($idade)){
	echo "Informe um número para idade!";
	return;
}

if ($idade >= 6 && $idade <= 12) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Infantil') 
		echo "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
	}
}else if ($idade >= 13 && $idade <= 18) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Adolescente') {
		echo "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
		}
	}
}else if ($idade >= 19 && $idade <= 30) {
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Senior') 
		echo "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
	}
}else{
	
	for ($i=0; $i < count($categoria); $i++) {
		if($categoria[$i] == 'Master') 
		echo "O Competidor ".$nome." disputa a categoria ".$categoria[$i]." !";
	}
}


?>