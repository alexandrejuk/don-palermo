<?php 
  session_start();

  if(!isset($_SESSION['nome'])) {
    header('Location: ../../403/');
  }

?>

<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
        background-image: url(../css/fundoadm3.jpg);
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
        <a href="../area-administrador/pagina-admin/index.php" class="navbar-brand"><img id="logodp" src="../img/logo.png"></a>
        <a href="../area-administrador/pagina-admin/index.php" class="navbar-brand"><img id="pizza" src="../img/pizzaria.png"></a>
        <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#barra"></button>
      </div>

      <ul id="barra" class="nav navbar-nav navbar-right navbar-collapse">
        <li ><a href=""><font color="Green">Gerenciar Produtos</font></a></li>
        <li ><a href="../gerenciar_pedidos"><font color="white">Gerenciar Pedidos</font></a></li>
        <li ><a href="../clientes"><font color="red">Clientes</font></a></li>
        <li ><a href="../php/loggout/index.php" id="nome2"><font color="red">Sair</font></a></li>
      </ul>
      <p class="text-white"> <font size="1px" color="white">
        <br>
        Area do Administrador
       <strong><?= $_SESSION['nome'] ?></strong>!
      </p>
      </font>
    </nav>
<br><br>

<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

include "../conect/conectar.php";
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
$id  = isset($_POST['id']) ? $_POST['id'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : false;
$imagem  = isset($_POST['imagem']) ? $_POST['imagem'] : '';
$preco  = isset($_POST['preco']) ? $_POST['preco'] : '';
$categoria  = isset($_POST['categoria']) ? $_POST['categoria'] : '';
 
$inserir = mysql_query("INSERT INTO produtos (id,descricao,imagem,preco,categoria) VALUES('$id','$descricao','$imagem','$preco','$categoria')")or die(mysql_error());
}

?>
  <div class="form-login-content">
    <form name="cadastroP" id="2" class="form-login-content" action="" method="POST">
      <div class="form-login">
        Id: <input type="text" name="id" />
      <br />
    </div>
    <div class="form-login">
        descricao: <input type="text" name="descricao" />
      <br />
    </div>
    <div class="form-login">
        Imagem: <input type="text" name="imagem" />
      <br />
    </div>
    <div class="form-login">
        preco: <input type="text" name="preco"/>
      <br />
    </div>
    <div>
        Categoria: Pizza <input type="radio" name="categoria" id="categoria" value="PIZZA" /> Bebidas: <input type="radio" name="categoria" id="categoria" value="BEBIDA" />
      <br />
    </div>
        <div class="form-button text-right">
            <button class="button-new-user" type="submit">
              <img name="" id="btcad" src="../img/bt-confirmar.png">
            </button> 
        </div>
      </form>
    </div>
</html>