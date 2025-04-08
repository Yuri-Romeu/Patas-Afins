<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Patas e Afins</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
  
<!--------------------------------------------------------COMEÇO-MENU----------------------->

<div class="menu menu-fixo">
    <div class="logo">
    <a href="index.php" style=" all: initial; cursor: pointer;"><img src="imagens/logo_png.png" width="165px"></a>
    </div>
    <div id="cabecalho-menu">
        <a href="index.php">Home</a>
        <a href="#brinquedos">Brinquedos</a>
        <a href="#alimento">Alimentação</a>
        <a href="login.php">Serviços</a>
        <a href="#utensilios">Utensílios</a>
    </div>
    <div class="campo-cadastro">
        <img src="imagens/usuario-do-circulo.png" width="30px"><p>Faça seu Login ou Cadastre-se</p>
    </div>
    <div class="mais-informaçoes">
       <p>pra ver seus pedidos e ter uma experiência personalizada, acesse sua conta :)</p>
        <a href="cadastro.php" id="myButton1">Cadastrar</a><br>
        <a href="login.php" id="myButton2">Logar</a>
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
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_3-100.jpg" width="180px" alt="Produto 2">
      <h2>Brinquedo<br> Macaco para<br> Cães</h2>
      <p class="preco">R$ 19,50</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_4-100.jpg" width="180px" alt="Produto 3">
      <h2>Mordedor<br> Corda<br> Para Cães</h2>
      <p class="preco">R$ 24,99</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_1-100.jpg" width="180px" alt="Produto 4">
      <h2>Bola<br> Tênis para<br>Cães</h2>
      <p class="preco">R$ 6,58</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
   
    <div class="produto" id="alimento">
      <img src="imagens/prancheta_5-100.jpg" width="180px" alt="Produto 5">
      <h2>Ração <br>cachorro<br> Pedigree 1kg</h2>
      <p class="preco">R$ 29,99</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_6-100.jpg" width="180px" alt="Produto 6">
      <h2>Petisco <br>cachorro<br> Pedigree 1kg</h2>
      <p class="preco">R$ 23,10</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_7-100.jpg" width="180px" alt="Produto 7">
      <h2>Ração gato<br> whiskas<br> 900g</h2>
      <p class="preco">R$ 21,30</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_8-100.jpg" width="180px" alt="Produto 8">
      <h2>Ração Úmida<br> Pedigree<br> 100g </h2>
      <p class="preco">R$ 3,19</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>

    <div class="produto" id="utensilios">
      <img src="imagens/prancheta_9-100.jpg" width="180px" alt="Produto 9">
      <h2>Coleira<br> cachorro<br> vermelha</h2>
      <p class="preco">R$ 34,99</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_11-100.jpg" width="180px" alt="Produto 11">
      <h2>Caminha Pet<br>tam. G<br>Rosa</h2>
      <p class="preco">R$ 150,00</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_14-100.jpg" width="180px" alt="Produto 14">
      <h2>vasilha<br> ração<br> e agua</h2>
      <p class="preco">R$ 25,30</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
    <div class="produto">
      <img src="imagens/prancheta_15-100.jpg" width="180px" alt="Produto 15">
      <h2>Bebedouro<br>Suporte<br> e Comedouro</h2>
      <p class="preco">R$ 69,99</p>
      <button class="add-to-cart-false" onclick="alertlog()">Adicionar ao Carrinho</button>
    </div>
  </section>
<script> 
function alertlog() {
  alert("Faça o login antes de adicionar ao carrinho");
}
</script>
</body>
</html>