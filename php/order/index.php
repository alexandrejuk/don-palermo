<?php
session_start();
require_once('../../config/db.config.php');
$id_cliente = $_SESSION['id'];
$endereco = ($_POST['rua'].', '.$_POST['numero'].', '.$_POST['bairro'].' - '.$_POST['complemento'].' - '.$_POST['cidade'].' - '.$_POST['cep']);
$pagamento = $_POST['pagamento'];
$total = $_POST['total'];

$dbConnection = new ConfigDb();
$link = $dbConnection->connectDb();

$sql = " insert into pedidos(id_cliente, endereco, pagamento) values ('$id_cliente', '$endereco', '$pagamento')";

if(mysqli_query($link, $sql)) {
  echo( $last_id = $link->insert_id);
}else {
  echo('error ao salvar');
};

unset($_SESSION['shopping_cart']);

?>