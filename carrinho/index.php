<?php 
  session_start();
  require_once('../php/cart/index.php');

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
    <script src="../js/cep/buscar-cep.js"></script>
    <style type="text/css">
      body {
        font-family: 'Montserrat Alternates', sans-serif;
        background-image: url("../css/fundo157.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }

      .produto {
        word-wrap: break-word;
        height: 500px;
      }

      .table, tr, th, td {
        /* background: #fff; */
        border-color: #fff;
        color: #fff;
      }

      label {
        color: #fff;
      }

      .input-qtd {
        background: rgba(131, 131, 131, 0.342);
        border: none;
        width: 100px;
        text-align: center;
      }

      .input-qtd:focus {
        outline: none
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
            <li ><a href="../area-cliente-pizzas/index.php"  id="nome2"><font color="green">Pizzas</font></a></li>
            <li ><a href="../area-cliente-bebidas/index.php" id="nome2" ><font color="white">Bebidas</font></a></li>
            <li ><a href="./index.php" id="nome2" class="active"><font color="red">Carrinho</font></a></li>
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
        <h1 id="TituloS2"><font color="white">Carrinho</font><h1>
      </div> 

      <form method="post" action="../php/order/index.php">
      
      <div class="col-md-12">
        <h3 class="text-white">Dados da entrega</h3>
      </div>

      <div class="col-md-2">
        <div class="form-cadastro-input">
          <label for="nome">CEP:</label>
          <input type="text" value="" name="cep" id="cep" autocomplete="cep" placeholder="Digite seu cep" onblur="pesquisacep(this.value)">
        </div>
      </div>

      <div class="col-md-8">
        <div class="form-cadastro-input">
          <label for="nome">Rua:</label>
          <input type="text" value="" name="rua" id="rua" autocomplete="rua" placeholder="Digite a rua">
        </div> 
      </div>

      <div class="col-md-2">
        <div class="form-cadastro-input">
          <label for="nome">Número:</label>
          <input type="text" value="" name="numero" id="numero" autocomplete="numero" placeholder="Número">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-cadastro-input">
          <label for="nome">Complemento:</label>
          <input type="text" value="" name="complemento" id="complemento" autocomplete="complemento" placeholder="Digite o complemento">
        </div>
      </div>

      <div class="col-md-2">
        <div class="form-cadastro-input">
          <label for="nome">Bairro:</label><script src="../js/cadastro/salvar-cadastro.js"></script>
          <input type="text" value="" name="bairro" id="bairro" autocomplete="bairro" placeholder="Bairro">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-cadastro-input">
          <label for="nome">Cidade:</label>
          <input type="text" value="" name="cidade" id="cidade" autocomplete="cidade" placeholder="Cidade">
        </div>
      </div>

      <div class="col-md-1">
        <div class="form-cadastro-input"><script src="../js/cadastro/salvar-cadastro.js"></script>
          <label for="nome">Estado:</label>
          <input type="text" value="" name="uf" id="uf" autocomplete="estado" placeholder="Uf">
        </div>
      </div>


        
      <div class="col-md-12">
      <br><br>
        <h3 class="text-white">Dados do Pedido</h3>
      </div>

      <div class="col-md-12 text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th> 
              <th scope="col">id</th>
              <th scope="col">Produto</th>
              <th class="text-center">Qtd.</th>
              <th class="text-center">Preço</th>
              <th class="text-center">Total</th>            
            </tr>
          </thead>
          <tbody>
          <?php foreach ($produtos as $produto) : ?>
            <tr>
              <th scope="col">Remover</th> 
              <th scope="row" name="id_produto"><?php echo($produto['id']); ?></th>
              <th scope="row" ><?php echo($produto['descricao']); ?></th>
              <td class="text-center"><input class="input-qtd" type="number" value="1" min="1" name="quantidade"></td>
              <td class="text-center" name="precos">R$ <?php echo($produto['preco']); ?></td>
              <td class="text-center">R$  <?php echo($produto['preco'] * 1 ); ?></td>
            </tr>
            <?php endforeach; ?> 
          </tbody>
        </table>
      </div>

      <div class="col-md-12">
        <h2 class="text-white text-right" name="total">Total R$  <?php echo(array_sum(array_column($produtos, 'preco'))); ?></h2>
      </div>

       
      <div class="col-md-12">
        <h3 class="text-white">Forma de Pagamento</h3>
      </div>

      <div class="col-md-2">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="pagamento" value="dinheiro">
        <label class="form-check-label" for="exampleRadios1">
       Dinheiro
        </label>
        </div>
        </div>
        <div class="col-md-1">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="pagamento" value="cartao">
        <label class="form-check-label" for="exampleRadios2">
        Cartão 
        </label>
        </div>
      </div>
      <div class="col-9"></div>
  
      <div class="col-md-12">
      <br>
        <button class="btn btn-danger" type="submit">Finalizar Comprar</button>
      </div>

    </div>
    </form>
    <!-- lista de pizza -->

    
	<!-- rodape -->
  <section class="footer">
  <div class="row">
    <div class="col-md-2">
      <div class="link-area">
        <h3><a href="./index.php" id="footertext"><font color="white">Cardápio</a></font></h3>
      </div>
    </div>
    <div class="col-md-2">
      <div class="link-area">
        <!-- <h3><a href="../area-cliente-pizzas/index.php" id="footertext"><font color="white">Cardápio</a></font></h3> -->
      </div>
    </div>
    <div class="col-md-2">
      <div class="link-area">
        <!-- <h3><a href="../login/index.php" id="footertext"><font color="white">Cliente</a></font></h3> -->
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