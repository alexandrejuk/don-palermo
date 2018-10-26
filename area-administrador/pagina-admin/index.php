<?php 
  session_start();

  if(!isset($_SESSION['nome'])) {
    header('Location: ../../403/');
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
    <link rel="stylesheet" href="../../css/styles.css">
    <style type="text/css">
      body {
        font-family: 'Exo', sans-serif;
        background-image: url("../../css/fundoadm2.jpg");
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
        <a href="./index.php" class="navbar-brand"><img id="logodp" src="../../img/logo.png"></a>
        <a href="./index.php" class="navbar-brand"><img id="pizza" src="../../img/pizzaria.png"></a>
        <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#barra"></button>
      </div>

      <ul id="barra" class="nav navbar-nav navbar-right navbar-collapse">
        <li ><a href="../../gerenciar_produtos"><font color="Green">Gerenciar Produtos</font></a></li>
        <li ><a href="../../gerenciar_pedidos"><font color="white">Gerenciar Pedidos</font></a></li>
        <li ><a href="../../clientes"><font color="red">Clientes</font></a></li>
        <li ><a href="../../php/loggout/index.php" id="nome2"><font color="red">Sair</font></a></li>
      </ul>
      <p class="text-white"> <font size="1px" color="white">
        <br>
        Area do Administrador
       <strong><?= $_SESSION['nome'] ?></strong>!
      </p>
      </font>
    </nav>
