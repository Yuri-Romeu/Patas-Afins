<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
$porte = filter_input(INPUT_POST, 'porte', FILTER_SANITIZE_STRING);
$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_STRING);



//echo "Apelido: $apelido <br>";
//echo "Nome: $nome <br>";
//echo "email: $email <br>";
//echo "senha: $senha <br>";
$cod_user = $_SESSION['id'];

$sql_insert_dependente = "INSERT INTO dependentes (cod_user, nome, raca, porte, peso) VALUES ('$cod_user', '$nome', '$raca', '$porte', '$peso')";
$resultado_dep = mysqli_query($conn, $sql_insert_dependente);

if(mysqli_insert_id($conn)) {

    header("Location: servicos.php?cadastro_efetuado=1");

}else {

    header("Location: servicos.php");

}

?>