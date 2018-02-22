-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 13/11/2017 às 11:28
-- Versão do servidor: 5.5.54-0+deb8u1
-- Versão do PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `1234_carros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
`id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(1, 'Ford'),
(2, 'Chevrolet'),
(3, 'Fiat'),
(4, 'Volks');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE IF NOT EXISTS `veiculo` (
`id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `modelo`, `marca_id`, `valor`, `imagem`) VALUES
(1, 'ECOSPORT TITANIUM 2.0 16V FLEX 5P AUT. 2013/2014', 1, 53000, 'eco.jpg'),
(2, 'PASSAT 2.0 FSI TIPTRONIC 2013/2014', 4, 74000, 'passat.jpg'),
(3, 'CORSA HATCHBACK 1.8 MPFI 8V 102CV 5P 2003/2003', 2, 15000, 'corsa.jpg'),
(4, 'VECTRA GL 2.2/2.0 MPFI 1997/1997', 2, 16000, 'vectra.jpg'),
(5, 'FOCUS SEDAN GLX 2.0 16V AT 147CV 4P (GG) COMPLETO 2010/2011', 1, 35000, 'focus.jpg'),
(6, 'BRAVO ESSENCE DUALOGIC 1.8 FLEX 16V 5P 2016/2016', 3, 55000, 'bravo.jpg'),
(7, 'PALIO 1.0/TROFEO 1.0 FIRE/FIRE FLEX 4P 2015/2016', 3, 30000, 'palio.jpg');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `marca`
--
ALTER TABLE `marca`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
 ADD PRIMARY KEY (`id`), ADD KEY `marca_id` (`marca_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `veiculo`
--
ALTER TABLE `veiculo`
ADD CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
