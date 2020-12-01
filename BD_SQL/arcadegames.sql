-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Dez-2020 às 10:43
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arcadegames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`) VALUES
(10, 'Teste'),
(11, 'bambino'),
(12, 'Bruno Balboa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_info`
--

DROP TABLE IF EXISTS `cliente_info`;
CREATE TABLE IF NOT EXISTS `cliente_info` (
  `id_cinfo` int(11) NOT NULL AUTO_INCREMENT,
  `id_clien` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cinfo`),
  KEY `FK_CLIENTE` (`id_clien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente_info`
--

INSERT INTO `cliente_info` (`id_cinfo`, `id_clien`, `email`, `senha`) VALUES
(1, 10, 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 11, 'bambino@arcade.com', '698dc19d489c4e4db73e28a713eab07b'),
(3, 12, 'balboa@arcade.com.br', '698dc19d489c4e4db73e28a713eab07b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `descricao_jogo`
--

DROP TABLE IF EXISTS `descricao_jogo`;
CREATE TABLE IF NOT EXISTS `descricao_jogo` (
  `id_prod` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `desconto` float NOT NULL,
  `imagemURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `FK_jogo_descricao` (`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `descricao_jogo`
--

INSERT INTO `descricao_jogo` (`id_prod`, `nome`, `descricao`, `desconto`, `imagemURL`) VALUES
(1, 'GTA - San Andreas', 'Grand Theft Auto 6 will be another installment of the iconic video game series. As we know, the Grand Theft Auto series is based on cities similar to American metropolises. Their names change. Players had already the opportunity to drive the streets of Los Santos (Los Angeles), Vice City (Miami) or Liberty City (New York). We didn’t visit sunny Vice City since 2006. This creates speculation that this is where the action of the upcoming part will take place. In addition, this part number is can be written with the Roman number \"VI\", which can cleverly make up the first two letters of an exotic city. The Best moment to return to Vice City is the golden period for such locations, i.e. the colorful 1980s. century.', 0.2, '/ArcadeGames/images/gta.jpg'),
(2, 'Assassins Creed', 'Assassin\'s Creed é um jogo eletrônico de ação-aventura desenvolvido pela Ubisoft Montreal e publicado pela Ubisoft. É o primeiro jogo da série Assassin\'s Creed.', 0.1, '/ArcadeGames/images/assassinscreed.jpg'),
(3, 'Resident Evil', 'Resident Evil é uma franquia de mídia que pertence à empresa de videogames Capcom. Foi criada por Shinji Mikami como uma série de jogos de survival horror, iniciada em 1996 com Resident Evil para PlayStation.', 0.15, '/ArcadeGames/images/residentevil.jpg'),
(4, 'Sonic Boom', 'Mais veloz do que nunca, Sonic enfrenta Dr. Eggman, que está determinado a dominar o mundo. O ouriço azul conta ainda com a ajuda de seus amigos em suas aventuras e batalhas contra robôs gigantes.', 0.5, '/ArcadeGames/images/sonic.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

DROP TABLE IF EXISTS `jogo`;
CREATE TABLE IF NOT EXISTS `jogo` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_genero1` int(11) NOT NULL,
  `id_genero2` int(11) NOT NULL,
  `quantidade` int(22) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_produto`, `id_genero1`, `id_genero2`, `quantidade`, `preco`) VALUES
(1, 1, 2, 2, 204.9),
(2, 1, 2, 20, 35.9),
(3, 1, 2, 10, 59.9),
(4, 1, 2, 30, 79.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_venda`
--

DROP TABLE IF EXISTS `jogo_venda`;
CREATE TABLE IF NOT EXISTS `jogo_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(6) NOT NULL,
  `idv` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ID_VENDA` (`idv`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `jogo_venda`
--

INSERT INTO `jogo_venda` (`id`, `id_produto`, `quantidade`, `idv`) VALUES
(12, 4, 1, 16),
(13, 2, 2, 16),
(14, 3, 2, 17),
(15, 4, 2, 17),
(16, 1, 1, 17),
(17, 2, 1, 17),
(18, 1, 1, 18),
(19, 3, 1, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `id_venda` int(11) NOT NULL AUTO_INCREMENT,
  `data_venda` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `data_venda`, `id_cliente`) VALUES
(16, '2020-11-26', 10),
(17, '2020-12-01', 10),
(18, '2020-12-01', 10);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente_info`
--
ALTER TABLE `cliente_info`
  ADD CONSTRAINT `FK_CLIENTE` FOREIGN KEY (`id_clien`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `jogo_venda`
--
ALTER TABLE `jogo_venda`
  ADD CONSTRAINT `FK_ID_VENDA` FOREIGN KEY (`idv`) REFERENCES `venda` (`id_venda`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
