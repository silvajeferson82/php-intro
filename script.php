<?php  

session_start();

include "servicos/servicoMensagemSessao.php";
include "servicos/servicosValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');


?>