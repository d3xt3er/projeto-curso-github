-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 12-Jun-2019 às 16:08
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendado`
--

CREATE TABLE IF NOT EXISTS `agendado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_professor` varchar(80) COLLATE utf8_bin NOT NULL,
  `laboratorio` varchar(80) COLLATE utf8_bin NOT NULL,
  `equipamento` varchar(80) COLLATE utf8_bin NOT NULL,
  `auditorio` varchar(80) COLLATE utf8_bin NOT NULL,
  `dia` varchar(80) COLLATE utf8_bin NOT NULL,
  `periodo` varchar(80) COLLATE utf8_bin NOT NULL,
  `hora` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `agendado`
--

INSERT INTO `agendado` (`id`, `nm_professor`, `laboratorio`, `equipamento`, `auditorio`, `dia`, `periodo`, `hora`) VALUES
(4, '', 'LAB1', 'Notebook', 'Nenhum', 'Quarta-Feira', 'Tarde', '16:00 - 18:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(80) COLLATE utf8_bin NOT NULL,
  `senha` int(11) NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `senha`) VALUES
(1, 'Maikel', 4321);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
