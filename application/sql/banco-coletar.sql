-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Jun-2019 às 02:52
-- Versão do servidor: 5.5.64-MariaDB-1ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `gu1700928`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE IF NOT EXISTS `cadastros` (
  `id_oleo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `oleo` varchar(100) NOT NULL,
  `dia` date NOT NULL,
  `horario` varchar(20) NOT NULL,
  `estado_oleo` int(11) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_oleo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(512) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `complemento` varchar(1000) NOT NULL,
  `meio` varchar(1000) NOT NULL,
  `missao` varchar(400) NOT NULL,
  `visao` varchar(400) NOT NULL,
  `valores` varchar(400) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `titulo`, `subtitulo`, `complemento`, `meio`, `missao`, `visao`, `valores`, `last_modified`) VALUES
(1, 'Nosso Compromisso', 'A empresa coletar está na área de coleta de resíduos de óleo, tendo como principal preocupação a  preservação do nosso meio ambiente.', 'A CETESB (Companhia de Tecnologia e Saneamento Ambiental) criada no dia 24 de Julho de 1968, e a consequente elaboração de uma política ambiental, impondo um rígido controle sobre a emissão de poluentes, originou-se a procura por serviços que auxiliassem as empresas, além de filtrar gases tóxicos, a dar destinação final adequada aos resíduos líquidos e sólidos.', 'Atualmente localizada no bairro de São Paulo, a Coletar tem como estabelecimentos parceiro os restaurantes, comércios e condomínios.', 'Defender o meio ambiente e seus recursos naturais.\n\n', 'Estender os benefícios da reciclagem de óleo de fritura a todos os setores da sociedade.', 'Preservação e respeito ao meio ambiente;\r\nResponsabilidade social;\r\nLegar um planeta mais limpo e saudável aos que o habitarão depois de nós.', '2019-06-11 05:07:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'Todos os usuários cadastrados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(3, '192.168.58.100', 'g@g.com', 1560188548),
(4, '192.168.58.100', 'g@g.com', 1560188558),
(5, '192.168.58.100', 'g@g.com', 1560188565),
(6, '192.168.58.100', 'joaovictor.1212@hotmail.com', 1560208110),
(7, '192.168.58.100', 'joaovictor.1212@hotmail.com', 1560208117),
(8, '192.168.58.100', 'joaovictor.1212@hotmail.com', 1560208126),
(9, '192.168.58.100', 'lucas@gmail.com', 1560220236),
(10, '192.168.58.100', 'g@g.com', 1560230215);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE IF NOT EXISTS `promocao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dados_pessoais` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `btn` varchar(30) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo`, `texto`, `btn`, `last_modified`) VALUES
(1, 'Condomínios', 'Retiramos o descarte de óleo e gordura vegetal de seu condomínio, disponibilizamos embalagens personalizadas.', 'Entenda', '2019-06-11 05:01:36'),
(2, 'PAC  (Ponto de Apoio Coletar)', 'Seja um parceiro Coletar no seu bairro !', 'Entenda', '2019-05-02 02:42:21'),
(3, 'Comércios', 'Retiramos o descarte de óleo e gordura vegetal de seu comércio, disponibilizamos embalagens de 50 litros', 'Entenda', '2019-04-30 19:01:12'),
(4, 'Empresas', 'Retiramos o descarte de óleo e gordura vegetal de sua empresa, disponibilizamos embalagens personalizadas.', 'Entenda', '2019-05-07 16:34:53'),
(5, 'Templos religiosos', 'Retiramos o descarte de óleo e gordura vegetal de seu templo religioso, disponibilizamos embalagens personalizadas.', 'Entenda', '2019-05-10 12:51:32'),
(6, 'Escolas', 'Retiramos o descarte de óleo e gordura vegetal de sua escola\n, disponibilizamos embalagens de 50 litros', 'Entenda', '2019-05-07 16:35:19'),
(7, 'Hoteis', 'Retiramos o descarte de óleo e gordura vegetal de seu hotel, disponibilizamos embalagens de 50 litros', 'Entenda', '2019-05-07 16:35:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `endereco`, `cep`, `cidade`, `estado`, `bairro`, `numero`, `complemento`, `company`, `phone`, `cadastro`) VALUES
(73, '192.168.58.100', 'gabriel@gmail.com', '$2y$12$6LhZyBD7l/k955Tbj6p9f.uDMohKUEOAoNjhyr5kAKMOGU2V.sWSK', 'gabriel@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1560188914, 1560232298, 1, 'Gabriel Moraes', NULL, 'Rua Capitão Américo Duarte', '03813100', 'São Paulo', 'SP', 'mooca', '555', '', NULL, '994010204', '2019-06-11 05:51:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(6, 73, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
