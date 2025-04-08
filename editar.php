<?php
session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cod_dep = $_POST["cod_dep"];
    $nome = $_POST["nome"];
    $raca = $_POST["raca"];
    $porte = $_POST["porte"];
    $peso = $_POST["peso"];
    
    $sql_update = "UPDATE dependentes SET nome='$nome', raca='$raca', porte='$porte', peso='$peso' WHERE cod_dep='$cod_dep'";
    
    if ($conn->query($sql_update) === TRUE) {
        echo "Dados atualizados com sucesso!";
        header("Location: servicos.php");
    } else {
        echo "Erro ao atualizar dados: " . $conn->error;
    }
}

$cod_dep = $_GET["cod_dep"];
$sql_select = "SELECT * FROM dependentes WHERE cod_dep='$cod_dep'";
$result_select = $conn->query($sql_select);

if ($result_select->num_rows > 0) {
    $row = $result_select->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Dependente</title>
</head>
<body>

<h2>Editar Dependente</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="hidden" name="cod_dep" value="<?php echo $cod_dep; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $row["nome"]; ?>"><br>
    Raça: <input type="text" name="raca" value="<?php echo $row["raca"]; ?>"><br>
    Porte: <input type="text" name="porte" value="<?php echo $row["porte"]; ?>"><br>
    Peso: <input type="text" name="peso" value="<?php echo $row["peso"]; ?>"><br>
    <input type="submit" value="Salvar">
</form>

</body>
</html>

<?php
} else {
    echo "Dependente não encontrado.";
}

$conn->close();
?>
