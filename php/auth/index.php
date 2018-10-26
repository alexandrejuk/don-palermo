<?php

session_start();
require_once('../../config/db.config.php');

$usuario  = $_POST['usuario'];
$password = MD5($_POST['senha']);

$dbConnection = new ConfigDb();
$link = $dbConnection->connectDb();

$sql = " select id, nome, email from clientes where usuario = '$usuario' and senha = '$password' ";

$resultMysql = mysqli_query($link, $sql);

if($resultMysql) {

  $result = mysqli_fetch_array($resultMysql);
  
  if(isset($result['nome'])) {
    
    $_SESSION['id'] = $result['id'];
    $_SESSION['nome'] = $result['nome'];
    $_SESSION['email'] = $result['email'];

    header('Location: ../../area-cliente');
    
  }else {
    echo('usuario ou senha invalidos!');
    header('Location: ../../login');
  }

}else {

  echo('Erro na execucao do login!');

}

?>