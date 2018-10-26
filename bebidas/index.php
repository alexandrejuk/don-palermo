<?php
  require_once('../php/products/bebida.php');
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
        <li ><a href="../index.html" id="nome1"><font color="green">Home</font></a></li>
        <li ><a href="../pizzas/index.php" id="nome2"><font color="green">Pizzas</font></a></li>
        <li ><a href="../bebidas/index.php" id="nome2" class="active"><font color="green">Bebidas</font></a></li>
        <li ><a href="../login/index.php" id="nome2"><font color="red">Área do Cliente</font></a></li>
        <li ><a href="../sobre/index.html" id="nome2"><font color="red">Sobre</font></a></li>
      </ul>
    </nav>
    <!-- barra de navegação -->

    <!-- lista de bebidas -->
    <div class="row">
      <div class="col-12">
        <h1 id="TituloS2"><font color="white">Bebidas</font><h1>
      </div>
      
        <?php foreach ($produtos as $produto) : ?>
          <form method="post" action="./index.php?action=add&id=<?php echo($produto['id']); ?>">
           <div class="col-md-4 text-center produto">
             <img class="produto-img" src="<?php echo('../img/bebidas/'.$produto['imagem']); ?>" />
               <h1><?php echo($produto['descricao']); ?></h1>
            <p class="preco">R$ <?php echo($produto['preco']); ?></p>
             <a href="../login/index.php"><img src="../img/bt-comprar.png"></a>
         </div> 
         </form>
        <?php endforeach; ?>   
</div>
<br><br>
    <!-- lista de bebidas -->

    
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
						<h3><a href="../login/index.php" id="footertext"><font color="white">Cliente</a></font></h3>
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