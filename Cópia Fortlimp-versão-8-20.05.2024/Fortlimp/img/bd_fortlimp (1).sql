-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/03/2024 às 05:37
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_fortlimp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade_fort`
--

CREATE TABLE `cidade_fort` (
  `cod_bairro_fort` int(5) NOT NULL,
  `nome_bairro_fort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cidade_fort`
--

INSERT INTO `cidade_fort` (`cod_bairro_fort`, `nome_bairro_fort`) VALUES
(1, 'Democrito Rocha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `coleta_horario_fort`
--

CREATE TABLE `coleta_horario_fort` (
  `cod_hora_rua` int(5) NOT NULL,
  `nome_rua_bairro_fort` varchar(100) NOT NULL,
  `hora_coleta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `coleta_horario_fort`
--

INSERT INTO `coleta_horario_fort` (`cod_hora_rua`, `nome_rua_bairro_fort`, `hora_coleta`) VALUES
(1, 'Travessa Júlio Ribeiro/Demócrito Rocha', '18:30 - 20:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_user` int(5) NOT NULL,
  `nome_user` varchar(100) NOT NULL,
  `senha_user` int(10) NOT NULL,
  `dat_nasc_user` varchar(11) NOT NULL,
  `endereco_user` varchar(100) NOT NULL,
  `rua_user` varchar(50) NOT NULL,
  `num_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `nome_user`, `senha_user`, `dat_nasc_user`, `endereco_user`, `rua_user`, `num_user`) VALUES
(1, 'Kayo Fernando', 12345, '03/08/06', 'Demócrito Rocha', 'Travessa Júlio Ribeiro', 33),
(2, 'João Guilherme', 23456, '12/01/06', 'Demócrito Rocha', 'Travessa Júlio Ribeiro', 36),
(3, 'Ana Luiza', 34567, '03/02/06', 'Demócrito Rocha', 'Travessa Júlio Ribeiro', 38),
(4, 'Jorge Aragão', 45678, '22/10/06', 'Demócrito Rocha', 'Travessa Júlio Ribeiro', 40);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cidade_fort`
--
ALTER TABLE `cidade_fort`
  ADD PRIMARY KEY (`cod_bairro_fort`);

--
-- Índices de tabela `coleta_horario_fort`
--
ALTER TABLE `coleta_horario_fort`
  ADD PRIMARY KEY (`cod_hora_rua`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidade_fort`
--
ALTER TABLE `cidade_fort`
  MODIFY `cod_bairro_fort` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `coleta_horario_fort`
--
ALTER TABLE `coleta_horario_fort`
  MODIFY `cod_hora_rua` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
