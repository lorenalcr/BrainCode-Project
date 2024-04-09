-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Mar-2024 às 19:14
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
-- Estrutura da tabela `tabela_adm`
--

DROP TABLE IF EXISTS `tabela_adm`;
CREATE TABLE IF NOT EXISTS `tabela_adm` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `adm` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `conf` varchar(60) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_adm`
--

INSERT INTO `tabela_adm` (`id`, `adm`, `email`, `senha`, `conf`, `telefone`) VALUES
(1, 'dsfsdf', 'dsfdf@dsfdsf', 'xdfdsf', 'sdfsdf', '122');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_aluno`
--

INSERT INTO `tabela_aluno` (`id`, `nome_aluno`, `email`, `senha`, `nome_mae`) VALUES
(7, 'dsfsdf', 'dsfsdf2@dfdsf', 'dsfsdf', 'dsfdsf'),
(8, 'dsfdsf', 'dsfdsfsdf@fgfg', '123', 'sdfsdfsdf'),
(9, 'dsfdsf', 'sdfsdf@dsfdsf', '1234', 'sdfsdf'),
(10, 'Dieimes', 'dsfdf@dfsdfdsf123', '1234', 'fdgdfg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
