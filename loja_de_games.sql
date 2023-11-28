-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2023 às 00:17
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_de_games`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(1) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Sexo` enum('Feminino','Masculino','Outro') NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Cidade` varchar(200) NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `Endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nome`, `Email`, `Telefone`, `Sexo`, `Data_Nascimento`, `Cidade`, `Estado`, `Endereco`) VALUES
(1, 'Arthur ', 'arthur@gmail.com', '12345', 'Masculino', '1998-02-18', 'São Paulo', 'São Paulo', 'Rua Ponte de Moraes'),
(2, 'Arthur ', 'arthur@gmail.com', '12345', 'Masculino', '1998-02-18', 'São Paulo', 'São Paulo', 'Rua Ponte de Moraes'),
(3, 'Pedro ', 'pedro@gmail.com', '87445212', 'Masculino', '2006-09-03', 'Fortaleza', 'Ceará', 'Rua José Neto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `ID_Vendedor` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Sexo` enum('feminino','masculino','outro') NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Cidade` varchar(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `Endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `vendedores`
--

INSERT INTO `vendedores` (`ID_Vendedor`, `Nome`, `Email`, `Telefone`, `Sexo`, `Data_Nascimento`, `Cidade`, `Estado`, `Endereco`) VALUES
(1, 'Gustavo', 'gustavo@gmail.com', '987654', 'masculino', '2012-12-12', 'Parelheiros', 'São Paulo', 'Rua Alberto Coimbra');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Índices de tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`ID_Vendedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `ID_Vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
