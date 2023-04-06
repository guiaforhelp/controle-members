-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Tempo de geração: 06/04/2023 às 23:39
-- Versão do servidor: 5.7.41
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crpm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `control_members`
--

CREATE TABLE `control_members` (
  `ID` int(11) NOT NULL,
  `nome` varchar(11) COLLATE latin2_bin NOT NULL,
  `rg` varchar(16) COLLATE latin2_bin NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado_civil` varchar(11) COLLATE latin2_bin NOT NULL,
  `naturalidade` varchar(11) COLLATE latin2_bin NOT NULL,
  `endereco` varchar(15) COLLATE latin2_bin NOT NULL,
  `n_endereco` int(5) NOT NULL,
  `cep` varchar(8) COLLATE latin2_bin NOT NULL,
  `cidade` varchar(15) COLLATE latin2_bin NOT NULL,
  `data_batismo` date NOT NULL,
  `validade_carteirinha` date NOT NULL,
  `situacao_membro` varchar(11) COLLATE latin2_bin NOT NULL,
  `cargo` varchar(11) COLLATE latin2_bin NOT NULL,
  `obs` text COLLATE latin2_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

--
-- Despejando dados para a tabela `control_members`
--

INSERT INTO `control_members` (`ID`, `nome`, `rg`, `data_nascimento`, `estado_civil`, `naturalidade`, `endereco`, `n_endereco`, `cep`, `cidade`, `data_batismo`, `validade_carteirinha`, `situacao_membro`, `cargo`, `obs`) VALUES
(2, 'miqueias', '123.456.456-78', '0001-01-01', '', '', '', 0, '', '', '0001-01-01', '2023-03-28', 'Ativo', 'Levita', ''),
(3, 'stephany', '123.456.456-78', '0001-01-01', '', '', '', 0, '', '', '0001-01-01', '2023-03-14', 'Ativo', 'Levita', ''),
(4, 'rafael', '', '0001-01-01', '', '', '', 0, '', '', '0001-01-01', '2023-03-16', 'Ativo', 'Levita', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `control_members`
--
ALTER TABLE `control_members`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `control_members`
--
ALTER TABLE `control_members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
