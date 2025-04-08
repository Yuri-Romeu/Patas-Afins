<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Patas e Afins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style-cadastro.css'>
    <script src='script.js'></script>
</head>
<body>
    <div class="menu">
        <div class="logo">
            <a href="index.php"><img src="imagens/logo_png.png" width="165px"></a>
        </div>
    </div>
    <div class="container">
       <h1>Cadastre-se</h1>
       <form method="POST" action="processa.php">
        <label for="apelido">Digite seu primeiro nome</label>
        <input type="text" placeholder="Ex: Luiz" id="apelido" name="apelido"><br>
        <label for="nome">Digite seu nome completo</label>
        <input type="text" placeholder="Ex: Luiz Gomes da Cruz" id="nome" name="nome"><br>
        <label for="email">Digite seu email</label>
        <input type="text" placeholder="Ex: Luizgomes@gmail.com" id="email" name="email"><br>
        <label for="senha">Crie uma senha</label><br>
        <input type="password" placeholder="Ex: Luiz@826921" id="senha" name="senha">
        <input type="submit" class="submit" value="Cadastrar-se">
        </form>
        <p class="termos">Ao continuar, você concorda com as <span class="azul">Condições de Uso</span> do
             Patas e Afins. Por favor verifique a <span class="azul">Notificação de Privacidade</span>,
             <span class="azul">Notificação de Cookies</span> e a <span class="azul">Notificação de Anúncios Baseados em Interesse</span>.</p>
      </div>
</body>
</html>