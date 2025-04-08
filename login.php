<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Patas e Afins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style-login.css'>
    <script src='script.js'></script>
</head>
<body>
<?php
    if (isset($_GET['cadastro_efetuado']) && $_GET['cadastro_efetuado'] == '1') {
        echo '<script>alert("Cadastro efetuado com sucesso!");</script>';
    }

    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {
    
        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
    
            $email = $conn->real_escape_string($_POST['email']);
            $senha = $conn->real_escape_string($_POST['senha']);
    
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
    
            $quantidade = $sql_query->num_rows;
    
            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();
    
                if(!isset($_SESSION)) {
                    session_start();
                }
    
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['apelido'] = $usuario['apelido'];
    
                header("Location: index-log.php");
    
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
    
        }
    
    }
?>

 <div class="container">
    <div class="conteudo-esquerda">
    
    </div>
    <div class="conteudo-direita">
        <h1 id="Titulo-login">Login</h1>
        <form method="POST" action="">
            <div>
                <input type="text" name="email" id="email" placeholder="Digite seu e-mail:" class="email">
            </div>
            <div>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" class="senha">
            </div>
            <div>
                <input type="submit" value="Logar" class="submit">
            </div>
        </form>
        <p id="cadastrar"><a href="cadastro.php" class="cadastrar-a">não possui cadastro? Cadastre-se de graça!</a></p>
    </div>
 </div>

</body>
</html>