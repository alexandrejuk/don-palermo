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
        <li ><a href="../gerenciar_produtos"><font color="Green">Gerenciar Produtos</font></a></li>
        <li ><a href="../gerenciar_pedidos"><font color="white">Gerenciar Pedidos</font></a></li>
        <li ><a href="../clientes/index.php"><font color="red">Clientes</font></a></li>
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

$db   = "db_pizza";
$con =  mysql_connect('localhost', 'root', ''); 

mysql_select_db($db, $con);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
$query = sprintf("SELECT id_cliente, endereco, pagamento, criado FROM pedidos");
$dados = mysql_query($query, $con) or die(mysql_error());
$linha = mysql_fetch_assoc($dados);
$total = mysql_num_rows($dados);
?>
 
<html>
    <head>
        <meta charset="utf-8">
    <title>Pedidos</title>
</head>
<body>
<?php
    header('Content-Type: text/html; charset=utf-8');
    if($total > 0) {
        do {
?> 
        <div class="col-md-12 text-center">
            <table class="table" style="color: white;">
              <tr>
                <th>ID</th>
                <th>Endereço</th>
                <th>Forma de Pagamento</th>
                <th>Criado</th>
                <th></th>
               </tr>
               <tr> 
                <td><?=$linha['id_cliente']?></td>
                <td><?=$linha['endereco']?></td>  
                <td><?=$linha['pagamento']?></td> 
                <td><?=$linha['criado']?></td>
                <td><a href=""><font color="#90ee90">Exibir</font></a></td>
              </tr>
            </table>
          </div>

<?php
        }while($linha = mysql_fetch_assoc($dados));
    }
?>
</body>
</html>

<?php
mysql_free_result($dados);
?>
</html>