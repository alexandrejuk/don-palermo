-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 09:06 PM
-- Server version: 8.0.11
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');


CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `endereco` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pagamento` varchar(32) NOT NULL,
  `criado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `imagem`, `preco`, `categoria`) VALUES
(1, 'PEPPERONI', 'pepperoni.png', 29.99, 'PIZZA'),
(2, 'MUSSARELA', 'mussarela.png', 19.99, 'PIZZA'),
(3, 'CALABRESA', 'calabresa.png', 19.99, 'PIZZA'),
(4, 'PORTUGUESA', 'portuguesa.png', 24.99, 'PIZZA'),
(5, '4 QUEIJOS', 'quatro-queijo.png', 29.99, 'PIZZA'),
(6, 'TOSCANA', 'toscana.png', 29.99, 'PIZZA'),
(7, 'MARGHERITA', 'margherita.png', 29.99, 'PIZZA'),
(8, 'CORN & BACON', 'corn-bacon.png', 34.99, 'PIZZA'),
(9, 'FRANGO C CHEDDAR', 'frango-cheddar.png', 34.99, 'PIZZA'),
(10, 'BACON', 'bacon.png', 29.99, 'PIZZA'),
(11, 'CARNE SECA', 'carne-seca.png', 29.99, 'PIZZA'),
(12, 'PALMITO', 'palmito.png', 24.99, 'PIZZA'),
(13, 'VEGANA', 'vegana.png', 29.99, 'PIZZA'),
(14, 'FRANGO C CATUPIRY', 'frango-catupiry.png', 34.99, 'PIZZA'),
(15, 'ATUM', 'atum.png', 29.99, 'PIZZA'),
(16, 'COCA COLA 2L', 'coca-cola.png', 11.99, 'BEBIDA'),
(17, 'SPRITE 2L', 'sprite.png', 9.99, 'BEBIDA'),
(18, 'GUARANÁ 2L', 'guarana-antarctica.png', 11.99, 'BEBIDA'),
(19, 'PEPSI 2L', 'pepsi.png', 10.99, 'BEBIDA'),
(20, 'FANTA LARANJA 2L', 'fanta-laranja.png', 9.99, 'BEBIDA'),
(21, 'FANTA UVA 2L', 'fanta-uva.png', 9.99, 'BEBIDA'),
(22, 'ITUBAÍNA 2L', 'itubaina.png', 8.99, 'BEBIDA'),
(23, 'DOLLY LIMÃO 2L', 'dolly-limao.png', 7.99, 'BEBIDA'),
(24, 'DOLLY COLA 2L', 'dolly-cola.png', 7.99, 'BEBIDA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
