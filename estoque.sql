-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2021 às 20:59
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `buys`
--

CREATE TABLE `buys` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_product` varchar(50) NOT NULL DEFAULT '',
  `qtde` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `buys`
--

INSERT INTO `buys` (`id`, `cod_product`, `qtde`) VALUES
(1, '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `quantity` float NOT NULL DEFAULT 0,
  `min_quantity` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `cod`, `name`, `price`, `quantity`, `min_quantity`) VALUES
(1, '1234', 'Produto de teste', 150, 15, 12),
(2, '456', 'Produto 2', 123, 18, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_number` int(11) NOT NULL,
  `user_pass` varchar(32) NOT NULL DEFAULT '',
  `user_token` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user_number`, `user_pass`, `user_token`) VALUES
(1, 123, '698dc19d489c4e4db73e28a713eab07b', '16b67d5200bb1544d0e1efec12f07e0b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `buys`
--
ALTER TABLE `buys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
