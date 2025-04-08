<?php

include_once("conexao.php");

$nome_completo = filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);


//echo "Apelido: $apelido <br>";
//echo "Nome: $nome <br>";
//echo "email: $email <br>";
//echo "senha: $senha <br>";

$result_empreendedores = "INSERT INTO empreendedores (nome_completo, email, senha, data_nascimento, sexo, cpf, telefone, cep, estado, rua, bairro, numero_casa) VALUES ('$nome_completo', '$email', '$senha', '$data_nascimento', '$sexo', '$cpf', '$telefone', '$cep', '$estado', '$rua', '$bairro', '$numero_casa')";
$resultado_empreendedores = mysqli_query($conn, $result_empreendedores);

if(mysqli_insert_id($conn)) {

    header("Location: login.php?cadastro_efetuado=1");

}else {

    header("Location: login.php");

}

?>
