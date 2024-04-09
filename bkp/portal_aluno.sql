-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Mar-2024 às 00:19
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portal_aluno`
--
CREATE DATABASE IF NOT EXISTS `portal_aluno` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portal_aluno`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_professor`
--

DROP TABLE IF EXISTS `cadastro_professor`;
CREATE TABLE IF NOT EXISTS `cadastro_professor` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `nome_professor` varchar(300) NOT NULL,
  `diciplina` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_professor`
--

INSERT INTO `cadastro_professor` (`id`, `nome_professor`, `diciplina`, `email`, `endereco`, `telefone`, `senha`) VALUES
(1, 'blabla', 'ba', '', 'bi', 'bo', 'bu'),
(2, 'dieimes', 'programacao', 'dieimes@dieimes', 'av jabuticaba', '40028922', '1234'),
(3, 'dieimes2', 'programacao2', 'dieimes@dieimes2', 'av jabuticaba2', '400289222', '54321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_adm`
--

DROP TABLE IF EXISTS `tabela_adm`;
CREATE TABLE IF NOT EXISTS `tabela_adm` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `adm` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_adm`
--

INSERT INTO `tabela_adm` (`id`, `adm`, `email`, `senha`, `telefone`) VALUES
(1, 'dsfsdf3333', 'dsfdf@dsfdsf', 'xdfdsf', '122'),
(2, 'Laura', 'laura@laura', '121212', '43996785432'),
(3, 'lucas claudio', 'lucas@lucas', '232323', '43996785432'),
(4, 'luana dididi', 'luana@luana', '454545', '43996785432'),
(5, 'lolo', 'lolo@lolo', '565656', '43996785432'),
(6, 'Laura', 'laura@laura', '121212', '43996785432'),
(7, 'Laura', 'rodrig2809@gmail.com', '121212', '43996785432');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_aluno`
--

DROP TABLE IF EXISTS `tabela_aluno`;
CREATE TABLE IF NOT EXISTS `tabela_aluno` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `nome_mae` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_aluno`
--

INSERT INTO `tabela_aluno` (`id`, `nome_aluno`, `email`, `senha`, `nome_mae`) VALUES
(13, 'Luis alves', 'luis@luis', '121212', '3244567665'),
(11, 'Luan Claudio de Oliveira', 'luan@luan', '232323', '4355678776');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_recado`
--

DROP TABLE IF EXISTS `tabela_recado`;
CREATE TABLE IF NOT EXISTS `tabela_recado` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `recados` varchar(300) NOT NULL,
  `professor` varchar(150) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `mensagem` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
