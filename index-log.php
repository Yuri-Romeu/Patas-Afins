<?php

include('protect.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Patas e Afins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style-log.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!--------------------------------------------------------COMEÇO-MENU----------------------->
<div class="menu menu-fixo">
	<div id="cabecalho-menu">
        <a href="#index-log.php">Home</a>
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
    <div class="cart-pay" onmouseover="showDiv3()" onmouseout="hideDiv3()">
          <img src="imagens/shopping-cart.png" width="30px">
           <span id="cart-count">0</span>
           <div class="mais-info-buy" id="cart">
           <span id="cart-total">Total: R$ 0,00</span>
            </div>
    </div>
    <div class="mais-informaçoes" onmouseover="showDiv2()" onmouseout="hideDiv2()">
       <p>Deseja sair da sua conta?</p>
        <a href="logout.php" id="myButton1">Sair</a><br>
    </div>
  </div>
</div>
<!--------------------------------------------------------FIM-MENU----------------------->
<div class="image-center"> 

</div>
<!--------------------------------------------------------PARTE-PRODUTOS----------------------->
<div class="container-product">
    <h1 id="tit-product">Nossos Produtos</h1>
<section class="products">
    <div class="produto" id="brinquedos">
      <img src="imagens/prancheta_2-100.jpg" width="180px" alt="Produto 1">
      <h2>Galinha<br> Mordedor Para<br> Cães</h2>
      <p class="preco">R$ 12,99</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_3-100.jpg" width="180px" alt="Produto 2">
      <h2>Brinquedo<br> Macaco para<br> Cães</h2>
      <p class="preco">R$ 19,50</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_4-100.jpg" width="180px" alt="Produto 3">
      <h2>Mordedor<br> Corda<br> Para Cães</h2>
      <p class="preco">R$ 24,99</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_1-100.jpg" width="180px" alt="Produto 4">
      <h2>Bola<br> Tênis para<br>Cães</h2>
      <p class="preco">R$ 6,58</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
   
    <div class="produto" id="alimento">
      <img src="imagens/prancheta_5-100.jpg" width="180px" alt="Produto 5">
      <h2>Ração <br>cachorro<br> Pedigree 1kg</h2>
      <p class="preco">R$ 29,99</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_6-100.jpg" width="180px" alt="Produto 6">
      <h2>Petisco <br>cachorro<br> Pedigree 1kg</h2>
      <p class="preco">R$ 23,10</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_7-100.jpg" width="180px" alt="Produto 7">
      <h2>Ração gato<br> whiskas<br> 900g</h2>
      <p class="preco">R$ 21,30</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_8-100.jpg" width="180px" alt="Produto 8">
      <h2>Ração Úmida<br> Pedigree<br> 100g </h2>
      <p class="preco">R$ 3,19</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>

    <div class="produto" id="utensilios">
      <img src="imagens/prancheta_9-100.jpg" width="180px" alt="Produto 9">
      <h2>Coleira<br> cachorro<br> vermelha</h2>
      <p class="preco">R$ 34,99</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_11-100.jpg" width="180px" alt="Produto 11">
      <h2>Caminha Pet<br>tam. G<br>Rosa</h2>
      <p class="preco">R$ 150,00</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_14-100.jpg" width="180px" alt="Produto 14">
      <h2>vasilha<br> ração<br> e agua</h2>
      <p class="preco">R$ 25,30</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_15-100.jpg" width="180px" alt="Produto 15">
      <h2>Bebedouro<br>Suporte<br> e Comedouro</h2>
      <p class="preco">R$ 69,99</p>
      <button class="add-to-cart">Adicionar ao Carrinho</button>
      <button class="remove-from-cart">Remover</button>
    </div>
  </section><br><br>
<!--------------------------------------------------------FIM-PARTE-PRODUTOS----------------------->

<!--------------------------------------------------------FOOTER----------------------->
<footer class="modern-footer">
  <div class="footer-content">
    <div class="footer-logo">
      <img src="imagens/logo-pedro.jpg" alt="Patas e Afins" width="150px">
    </div>
    <div class="footer-links">
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="#brinquedos">Brinquedos</a></li>
        <li><a href="#alimento">Alimentação</a></li>
        <li><a href="##">Serviços</a></li>
        <li><a href="#utensilios">Utensílios</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 Patas e Afins. Todos os direitos reservados.</p>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>