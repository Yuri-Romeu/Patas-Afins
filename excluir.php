<?php
session_start();
include_once("conexao.php");

if (isset($_GET["cod_dep"])) {
    $cod_dep = $_GET["cod_dep"];
    
    $sql_delete = "DELETE FROM dependentes WHERE cod_dep='$cod_dep'";
    
    if ($conn->query($sql_delete) === TRUE) {
        echo "Dependente excluído com sucesso!";
        header("Location: servicos.php");
    } else {
        echo "Erro ao excluir dependente: " . $conn->error;
    }
} else {
    echo "Código de dependente não fornecido.";
}

$conn->close();
?>
