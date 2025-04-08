<?php  
session_start();
if (isset($_GET['cadastro_efetuado']) && $_GET['cadastro_efetuado'] == '1') {
    echo '<script>alert("Cadastro efetuado com sucesso!");</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Patas e Afins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style-serv.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!--------------------------------------------------------COMEÇO-MENU----------------------->
<div class="menu menu-fixo">
	<div id="cabecalho-menu">
        <a href="index-log.php">Home</a>
        <a href="#brinquedos">Brinquedos</a>
        <a href="#alimento">Alimentação</a>
        <a href="servicos.php">Serviços</a>
        <a href="#utensilios">Utensílios</a>
    </div>
    <div class="logo">
    <a href="index-log.php" style=" all: initial; cursor: pointer;"><img src="imagens/logo_png.png" width="165px"></a>
    </div>
    <div class="campo-cadastro" onmouseover="showDiv2()" onmouseout="hideDiv2()">
        <img src="imagens/usuario-do-circulo.png" width="30px"><p>Bem-vindo(a), <?php echo $_SESSION['apelido']; ?></p>
    </div>
     <div class="cart-pay">
        <button class="button-pata" id="toggleButton">
          <img src="imagens/pata_branca.png" width="30px">
        </button>
    </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------FIM-MENU----------------------->

<!-------------------------------------------------------- CADASTRO-PET-INICIO -->
<br><br><br><br>
<div class="part-dep" id="myDiv">
    <?php
include('conexao.php');

        $cod_user = $_SESSION['id'];
        $sql_dependentes = "SELECT * FROM dependentes WHERE cod_user = '$cod_user'";
        $result_dependentes = $conn->query($sql_dependentes);

        if ($result_dependentes->num_rows > 0) {
            echo "<h1>Cachorros Dependentes</h1>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Raça</th><th>Porte</th><th>Peso</th></tr>";

            while ($row_dependente = $result_dependentes->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row_dependente["cod_dep"]."</td>";
                echo "<td>".$row_dependente["nome"]."</td>";
                echo "<td>".$row_dependente["raca"]."</td>";
                echo "<td>".$row_dependente["porte"]."</td>";
                echo "<td>".$row_dependente["peso"]."</td>";
                echo "<td>
                        <a id='editar-'" . $row_dependente["cod_dep"] . "' href='editar.php?cod_dep=" . $row_dependente["cod_dep"] . "'>Editar</a>
                        <a id='excluir-'" . $row_dependente["cod_dep"] . "' href='excluir.php?cod_dep=" . $row_dependente["cod_dep"] . "' onclick=\"return confirm('Tem certeza que deseja excluir este dependente?')\">Excluir</a>
                    </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "O usuário não possui dependentes.";
        }
$conn->close();
?>
</div>
<div class="cadastro-pet">
<h1>Cadastre seu pet</h1>
<form method="POST" action="dep.php">
    <label for="nome">Nome:</label><br>
    <input type="text" placeholder="Digite o nome do seu pet" class="input-cad-pet" id="nome" name="nome" required><br>
    <label for="raca">Raça:</label><br>
    <input type="text" placeholder="Digite a raça do seu pet" class="input-cad-pet" id="raca" name="raca" required><br>
    <label for="porte">Porte do animal:</label><br>
    <input type="text" placeholder="Ex: Grande, médio ou pequeno" class="input-cad-pet" id="porte" name="porte" required><br>
    <label for="peso">Peso:</label><br>
    <input type="text" placeholder="Digite o peso do seu pet" class="input-cad-pet" id="peso" name="peso" required><br><br><br>
    <input type="submit" value="CADASTRAR" id="input-cad">
</form>
</div>
<!-------------------------------------------------------- CADASTRO-PET-FIM -->
<!-------------------------------------------------------- NOSSOS-SERVIÇOS-INICIO -->
<div class="nossos-serv">
<h1>Nossos serviços</h1>
<p>Consulte nossos horários</p>
<div class="container-serv">
        <div class="servicos">
            <h3>Banho + Tosa</h3>
            <p>Realizamos o<br> banho e a tosa<br> do seu pet</p>
            <img src="imagens/shampoo-pet (1).png" width="70px"><p id="sinal-soma">+</p>
            <img src="imagens/pet-grooming.png" width="70px">
            <b><p class="p-oferta">DE <span class="oferta">R$ 54,90</span> POR</p></b>
            <h1 class="preco">R$ 45,90</h1>
            <p class="agendar">AGENDAR</p>
        </div>
        <div class="servicos">
            <h3>Banho</h3>
            <p>Realizamos<br> somente o banho<br> do seu pet</p>
            <img src="imagens/shampoo-pet (1).png" width="70px">
            <b><p class="p-oferta">DE <span class="oferta">R$ 34,90</span> POR</p></b>
            <h1 class="preco">R$ 29,00</h1>
            <p class="agendar">AGENDAR</p>
        </div>
        <div class="servicos">
            <h3>Tosa</h3>
            <p>Realizamos<br> somente a tosa<br> do seu pet</p>
            <img src="imagens/pet-grooming.png" width="70px">
            <b><p class="p-oferta">DE <span class="oferta">R$ 22,90</span> POR</p></b>
            <h1 class="preco">R$ 19,90</h1>
            <p class="agendar">AGENDAR</p>
        </div>
</div>
</div>
<script src="script.js"></script>
</body>
</html>