<?php 
  session_start();

  if(!isset($_SESSION['nome'])) {
    header('Location: ../403/');
  }

?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" id="palermoicon" href="../img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <style type="text/css">
      body {
        font-family: 'Montserrat Alternates', sans-serif;
        background-image: url("../css/fundo157.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
    <title>Don Palermo</title>
  </head>

<body>

	<div class="container">

    <!-- barra de navegação -->
		<nav id="navbar1" class="navbar navbar-default">
      <div class="navbar-header">
        <a href="../index.html" class="navbar-brand"><img id="logodp" src="../img/logo.png"></a>
        <a href="../index.html" class="navbar-brand"><img id="pizza" src="../img/pizzaria.png"></a>
        <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#barra"></button>
      </div>

      <ul id="barra" class="nav navbar-nav navbar-right navbar-collapse">
        <li ><a href="../index.html" id="nome1"><font color="Green">Home</font></a></li>
        <li ><a href="../pizzas/index.html"  class="active" id="nome2"><font color="green">Pizzas</font></a></li>
        <li ><a href="../bebidas/index.html" id="nome2"><font color="white">Bebidas</font></a></li>
        <li ><a href="../sobre/index.html" id="nome2"><font color="red">Sobre</font></a></li>
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

      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/pepperoni.png" />
        <h1>PEPPERONI</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
      
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/mussarela.png" />
        <h1>MUSSARELA</h1>
        <p class="preco">R$19,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
        
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/calabresa.png" />
        <h1>CALABRESA</h1>
        <p class="preco">R$19,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>

      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/portuguesa.png" />
        <h1>PORTUGUESA</h1>
        <p class="preco">R$24,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
      
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/quatro-queijo.png" />
        <h1>4 QUEIJOS</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
          
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/toscana.png" />
        <h1>TOSCANA</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>

      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/margherita.png" />
        <h1>MARGHERITA</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
          
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/corn-bacon.png" />
        <h1>CORN & BACON</h1>
        <p class="preco">R$34,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
            
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/frango-cheddar.png" />
        <h1>FRANGO C CHEDDAR</h1>
        <p class="preco">R$34,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>

      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/bacon.png" />
        <h1>BACON</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
            
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/carne-seca.png" />
        <h1>CARNE SECA</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
        
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/palmito.png" />
        <h1>PALMITO</h1>
        <p class="preco">R$24,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>

      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/vegana.png" />
        <h1>VEGANA</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
              
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/frango-catupiry.png" />
        <h1>FRANGO C CATUPIRY</h1>
        <p class="preco">R$34,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>
        
      <div class="col-md-4 text-center produto">
        <img class="produto-img" src="../img/pizzas/atum.png" />
        <h1>ATUM</h1>
        <p class="preco">R$29,99</p>
        <a href="../comprar/index.html"><img src="../img/bt-comprar.png"></a>
      </div>

    </div>
    <!-- lista de pizza -->

    
	<!-- rodape -->
		<section class="footer">
			<div class="row">
				<div class="col-md-2">
					<div class="link-area">
						<h3><a href="../sobre/index.html" id="footertext"><font color="white">Pizzaria</a></font></h3>
					</div>
				</div>
				<div class="col-md-2">
					<div class="link-area">
						<h3><a href="../pizzas/index.html" id="footertext"><font color="white">Cardápio</a></font></h3>
					</div>
				</div>
				<div class="col-md-2">
					<div class="link-area">
						<h3><a href="../login/index.html" id="footertext"><font color="white">Cliente</a></font></h3>
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