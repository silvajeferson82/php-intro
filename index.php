<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Inscrição</title>
	<meta name="autor" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

	<FORM action="script.php" method="POST">
		<?php
			$mensagem_Sucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
			if(!empty($mensagem_Sucesso)){
				echo $mensagem_Sucesso;
			}

			$mensagem_Erro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
			if(!empty($mensagem_Erro)){
				echo $mensagem_Erro;
			}
		?>
		<p>Seu Nome: <input type="text" name="nome"/></p>
		<p>Sua Idade: <input type="text" name="idade"/></p>
		<p><input type="submit" value="Enviar Dados" /></p>
	</FORM>

</body>
</html>
