<?php 
  session_start();
  require_once('../php/products/pizza.php');

  if(!isset($_SESSION['nome'])) {
    header('Location: ../403/');
  }

    
  $produto_id = isset($_GET['id']) ? $_GET['id'] : null;

  if(isset($_SESSION['shopping_cart'])) {

    if(count($_SESSION['shopping_cart']) === 0) {

      array_push($_SESSION['shopping_cart'], $id = $produto_id);

    }else {

      $filterById = array_filter( $_SESSION['shopping_cart'], function($data) {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return $data === $id;
      });

      if(!$filterById) {
        array_push($_SESSION['shopping_cart'], $produto_id);
      }
    }

  }else {
    $_SESSION['shopping_cart'] = array();   
    array_push($_SESSION['shopping_cart'], $produto_id);
  }    

?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" id="palermoicon" href="../img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <style type="text/css">
      body {
        font-family: 'Exo', sans-serif;
        background-image: url("../css/fundo157.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }

      .produto {
        word-wrap: break-word;
        height: 500px;
      }
    </style>
    <title>Don Palermo</title>
  </head>

<body>

	<div class="container">

 
      <!-- barra de navegação -->
      <nav id="navbar1" class="navbar navbar-default">
          <div class="navbar-header">
            <a href="../area-cliente/index.php" class="navbar-brand"><img id="logodp" src="../img/logo.png"></a>
            <a href="../area-cliente/index.php" class="navbar-brand"><img id="pizza" src="../img/pizzaria.png"></a>
            <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#barra"></button>
          </div>
    
          <ul id="barra" class="nav navbar-nav navbar-right navbar-collapse">
            <li ><a href="./index.php"  id="nome2" class="active"><font color="green">Pizzas</font></a></li>
            <li ><a href="../area-cliente-bebidas/index.php" id="nome2" ><font color="white">Bebidas</font></a></li>
            <li ><a href="../carrinho/index.php" id="nome2" ><font color="red">Carrinho</font></a></li>
            <li ><a href="../php/loggout/index.php" id="nome2"><font color="red">Sair</font></a></li>
          </ul>
          <p class="text-white">
            Bem vindo!
           <br>
           <strong><?= $_SESSION['nome'] ?></strong>
          </p>
        </nav>
        <!-- barra de navegação -->

    <!-- lista de pizza -->
    <div class="row">
      <div class="col-12">
        <h1 id="TituloS2"><font color="white">Pizzas</font><h1>
      </div> 

    <?php foreach ($produtos as $produto) : ?>
    <form  method="post" action="./index.php?action=add&id=<?php echo($produto['id']); ?>">
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="<?php echo('../img/pizzas/'.$produto['imagem']); ?>" />
        <h1><?php echo($produto['descricao']); ?></h1>
        <p class="preco">R$ <?php echo($produto['preco']); ?></p>
        <button class="button-new-user" type="submit"> <img src="../img/bt-comprar.png"></button>
      </div> 
    </form>
    <?php endforeach; ?>   

    </div>
    <!-- lista de pizza -->

    
	<!-- rodape -->
  <section class="footer">
  <div class="row">
    <div class="col-md-2">
      <div class="link-area">
      <h3><a href="../area-cliente-pizzas/index.php" id="footertext"><font color="white">Pizzas</a></font></h3>
      </div>
    </div>
    <div class="col-md-2">
      <div class="link-area">
        <h3><a href="../area-cliente-bebidas/index.php" id="footertext"><font color="white">Bebidas</a></font></h3>
      </div>
    </div>
    <div class="col-md-2">
      <div class="link-area">
        <h3><a href="../pedidos/index.php" id="footertext"><font color="white">Pedidos</a></font></h3>
      </div>
    </div>
    <div class="col-md-6">
      <div id="link-area1">
        <h5><font color="white">Av. Pereira Barreto, 400 - Baeta Neves, SBC, 09751-000</font></h5>
        <h5><font color="white">(11) 4002-8922 </font></h5>
      </div>
    </div>
    <div class="row index-social-link text-center">
      <p class="copy-c">Pizzaria © Don Palermo</p>
    </div>
  </div>
</section> 
<!-- rodape -->
  
	</div>
</body>
</html>