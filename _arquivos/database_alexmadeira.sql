-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2015 at 11:01 AM
-- Server version: 5.5.35-0ubuntu0.12.04.2-log
-- PHP Version: 5.4.27-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_alexmadeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `akkedis_configuracoes`
--

CREATE TABLE IF NOT EXISTS `akkedis_configuracoes` (
`configuracao_id` int(11) NOT NULL,
  `configuracao_nome_site` varchar(255) DEFAULT NULL,
  `configuracao_email` varchar(255) DEFAULT NULL,
  `configuracao_status` tinyint(4) DEFAULT NULL,
  `configuracao_autorizacao_ip` text,
  `configuracao_seo_site_title` varchar(255) DEFAULT NULL,
  `configuracao_seo_keywords` varchar(255) DEFAULT NULL,
  `configuracao_seo_description` text,
  `configuracao_analytics_profile_id` varchar(255) DEFAULT NULL,
  `configuracao_analytics_acompanhamneto_id` varchar(255) DEFAULT NULL,
  `configuracao_analytics_email_analytics` varchar(255) DEFAULT NULL,
  `configuracao_analytics_senha_analytics` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `akkedis_configuracoes`
--

INSERT INTO `akkedis_configuracoes` (`configuracao_id`, `configuracao_nome_site`, `configuracao_email`, `configuracao_status`, `configuracao_autorizacao_ip`, `configuracao_seo_site_title`, `configuracao_seo_keywords`, `configuracao_seo_description`, `configuracao_analytics_profile_id`, `configuracao_analytics_acompanhamneto_id`, `configuracao_analytics_email_analytics`, `configuracao_analytics_senha_analytics`) VALUES
(1, 'akkedis', 'akkedis@admin.com', 2, '192.168.0.3', 'akkedis', 'akkedis, akkedis cms E-commerce, e-commerce admim', 'uma descrição', '8682239', 'UA-4329276-1', 'analytics@adnews.com.br', 'vdvd5070');

-- --------------------------------------------------------

--
-- Table structure for table `trooper_agencias`
--

CREATE TABLE IF NOT EXISTS `trooper_agencias` (
`agencia_id` int(11) NOT NULL,
  `agencia_nome` varchar(255) NOT NULL,
  `agencia_class` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trooper_agencias`
--

INSERT INTO `trooper_agencias` (`agencia_id`, `agencia_nome`, `agencia_class`) VALUES
(1, 'Sta Monica', 'staMonica'),
(2, 'Dainet', 'dainet'),
(3, 'Guia Bolso', 'guisbolso'),
(4, 'UltraHaus', 'ultrahaus'),
(5, 'Garage', 'garage'),
(6, 'Alex Madeira', 'alexMadeira');

-- --------------------------------------------------------

--
-- Table structure for table `trooper_arquivos`
--

CREATE TABLE IF NOT EXISTS `trooper_arquivos` (
`arquivo_id` int(11) NOT NULL,
  `arquivo_nome` varchar(255) NOT NULL,
  `arquivo_tipo` tinyint(1) NOT NULL DEFAULT '1',
  `arquivo_arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=397 ;

--
-- Dumping data for table `trooper_arquivos`
--

INSERT INTO `trooper_arquivos` (`arquivo_id`, `arquivo_nome`, `arquivo_tipo`, `arquivo_arquivo`) VALUES
(320, 'alex madeira adnews background', 1, 'alex-madeira-adnews-background.jpg'),
(321, 'alex madeira Adnews desktop', 1, 'alex-madeira-Adnews-desktop.png'),
(322, 'alex madeira adnews logo', 1, 'alex-madeira-adnews-logo.png'),
(323, 'alex madeira Adnews mobile home', 1, 'alex-madeira-Adnews-mobile-home.png'),
(324, 'alex madeira Adnews mobile noticia', 1, 'alex-madeira-Adnews-mobile-noticia.png'),
(325, 'alex madeira bg adnews', 1, 'alex-madeira-bg-adnews.jpg'),
(326, 'alex madeira adnews preview', 1, 'alex-madeira-adnews-preview.jpg'),
(327, 'alex madeira game 7 logo', 1, 'alex-madeira-game-7-logo.png'),
(328, 'alex madeira game 7 preview', 1, 'alex-madeira-game-7-preview.jpg'),
(329, 'alex madeira game7 desktop', 1, 'alex-madeira-game7-desktop.png'),
(330, 'alex madeira bg game 7 day 7', 1, 'alex-madeira-bg-game-7-day-7.jpg'),
(331, 'alex madeira game7 mobile v2', 1, 'alex-madeira-game7-mobile-v2.png'),
(332, 'alex madeira game7 mobile v1', 1, 'alex-madeira-game7-mobile-v1.png'),
(333, 'alex madeira game7 produto fone', 1, 'alex-madeira-game7-produto-fone.png'),
(334, 'alex madeira HiperVarejo preview', 1, 'alex-madeira-HiperVarejo-preview.jpg'),
(335, 'alex madeira hipervarejo mobile home', 1, 'alex-madeira-hipervarejo-mobile-home.png'),
(336, 'alex madeira hipervarejo desktop', 1, 'alex-madeira-hipervarejo-desktop.png'),
(338, 'alex madeira hipervarejo premium', 1, 'alex-madeira-hipervarejo-premium.png'),
(340, 'alex madeira hipervarejo pneu', 1, 'alex-madeira-hipervarejo-pneu.png'),
(343, 'alex madeira hipervarejo mobile premium', 1, 'alex-madeira-hipervarejo-mobile-premium.png'),
(344, 'alex madeira alan madeira mobile home', 1, 'alex-madeira-alan-madeira-mobile-home.png'),
(345, 'alex madeira bg alan madeira', 1, 'alex-madeira-bg-alan-madeira.jpg'),
(346, 'alex madeira alan madeira desktop', 1, 'alex-madeira-alan-madeira-desktop.png'),
(347, 'alex madeira alan madeira logo', 1, 'alex-madeira-alan-madeira-logo.png'),
(350, 'alex madeira MizunoBR background', 1, 'alex-madeira-MizunoBR-background.jpg'),
(351, 'alex madeira MizunoBR logo', 1, 'alex-madeira-MizunoBR-logo.png'),
(352, 'alex madeira mizunoBR desktop', 1, 'alex-madeira-mizunoBR-desktop.png'),
(353, 'alex madeira mizunoBR mobile home', 1, 'alex-madeira-mizunoBR-mobile-home.png'),
(354, 'alex madeira MizunoBR tenis', 1, 'alex-madeira-MizunoBR-tenis.png'),
(355, 'alex madeira MizunoBR preview', 1, 'alex-madeira-MizunoBR-preview.jpg'),
(357, 'alex madeira bg MizunoBR', 1, 'alex-madeira-bg-MizunoBR.jpg'),
(358, 'alex madeira MizunoBR mobile produto', 1, 'alex-madeira-MizunoBR-mobile-produto.png'),
(359, 'alex madeira alan madeira mobile portifolio', 1, 'alex-madeira-alan-madeira-mobile-portifolio.png'),
(360, 'alex madeira alan madeira preview', 1, 'alex-madeira-alan-madeira-preview.jpg'),
(364, 'alex madeira alan madeira ilustracao', 1, 'alex-madeira-alan-madeira-ilustracao.png'),
(369, 'alex madeira alan madeira background', 1, 'alex-madeira-alan-madeira-background.jpg'),
(370, 'alex madeira game7 background', 1, 'alex-madeira-game7-background.jpg'),
(387, 'alex madeira adnews publicidade', 1, 'alex-madeira-adnews-publicidade.png'),
(388, 'alex madeira hipervarejo background', 1, 'alex-madeira-hipervarejo-background.jpg'),
(389, 'alex madeira hipervarejo mobile home1', 1, 'alex-madeira-hipervarejo-mobile-home1.png'),
(391, 'alex madeira HiperVarejo logo', 1, 'alex-madeira-HiperVarejo-logo.png'),
(394, 'alex madeira drinkfinity logo', 1, 'alex-madeira-drinkfinity-logo.png'),
(395, 'alex madeira drinkfinity background', 1, 'alex-madeira-drinkfinity-background.jpg'),
(396, '2015021209475336246', 1, '2015021209475336246.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trooper_categorias`
--

CREATE TABLE IF NOT EXISTS `trooper_categorias` (
`categoria_id` int(11) NOT NULL,
  `categoria_nome` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trooper_categorias`
--

INSERT INTO `trooper_categorias` (`categoria_id`, `categoria_nome`) VALUES
(1, 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `trooper_projetos`
--

CREATE TABLE IF NOT EXISTS `trooper_projetos` (
`projeto_id` int(11) NOT NULL,
  `projeto_slug` varchar(255) NOT NULL,
  `projeto_logo` int(11) NOT NULL,
  `projeto_background_principal` int(11) NOT NULL,
  `projeto_preview` int(11) NOT NULL,
  `projeto_mobile1` int(11) NOT NULL,
  `projeto_mobile2` int(11) NOT NULL,
  `projeto_produto` int(11) NOT NULL,
  `projeto_background` int(11) NOT NULL,
  `projeto_desktop` int(11) NOT NULL,
  `projeto_nome` varchar(255) NOT NULL,
  `projeto_slogan` varchar(255) NOT NULL,
  `projeto_categoria` int(11) NOT NULL,
  `projeto_tipo` int(11) NOT NULL,
  `projeto_agencia` int(11) NOT NULL,
  `projeto_ano` int(11) NOT NULL,
  `projeto_descricao` text NOT NULL,
  `projeto_ordem` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `trooper_projetos`
--

INSERT INTO `trooper_projetos` (`projeto_id`, `projeto_slug`, `projeto_logo`, `projeto_background_principal`, `projeto_preview`, `projeto_mobile1`, `projeto_mobile2`, `projeto_produto`, `projeto_background`, `projeto_desktop`, `projeto_nome`, `projeto_slogan`, `projeto_categoria`, `projeto_tipo`, `projeto_agencia`, `projeto_ano`, `projeto_descricao`, `projeto_ordem`) VALUES
(10, 'game-7', 327, 370, 328, 332, 331, 333, 330, 329, 'Game 7', 'A sua loja Gamer', 1, 1, 1, 2015, 'Ao longo dos anos, a Game7 estabeleceu-se como a loja dos jogadores que se conecta com todos os jogadores, independentemente da idade, gênero de jogos e console, permanecendo fiel à sua missão, e entregar continuamente o melhor. ', 0),
(11, 'hiper-varejo', 391, 388, 334, 343, 335, 340, 338, 336, 'Hiper Varejo', 'Maior Estoque de Pneus a Pronta Entrega do Brasil ', 1, 1, 1, 2015, 'A Hipervarejo é o canal eletrônico de um grupo que possui mais de 30 anos de mercado, tendo parceria com as principais fabricantes nacionais e internacionais. Localizado em um complexo logístico estruturado para atender a todo Brasil, possui um moderno centro de distribuição com 22 mil m².', 4),
(13, 'adnews', 322, 320, 326, 323, 324, 387, 325, 321, 'Adnews', 'Movido Pela Notícia', 1, 2, 2, 2014, 'Criado em 1999, o Adnews é um portal direcionado ao mercado publicitário e voltado à convergência das mídias. Abordamos e repercutimos notícias relacionadas a diversos assuntos como Mídia, Internet, Publicidade, Tecnologia, Cultura e Negócios.', 3),
(14, 'mizuno-br', 351, 350, 355, 353, 358, 354, 357, 352, 'Mizuno BR', 'Never Settle', 1, 2, 5, 2012, 'A Mizuno tem produtos específicos para cada tipo de atleta. Tecnologias que melhoram o desempenho, que evitam lesões, que estão a favor do corpo e da saúde.\r\nNão é de hoje. Isso está no DNA da marca.', 4),
(15, 'alan-madeira', 347, 369, 360, 344, 359, 364, 345, 346, 'Alan Madeira', 'Direção de arte e Ilustração', 1, 2, 6, 2015, 'Eu estou sempre fazendo aquilo que não sou capaz, numa tentativa de aprender como fazê-lo. <br /> -Pablo Picasso', 2),
(16, 'drinkfinity', 394, 395, 0, 0, 0, 0, 396, 0, 'DrinkFinity', 'Viva com paixão. Beba com propósito.', 1, 1, 1, 2015, 'Com Drinkfinity, você pode personalizar sua hidratação de acordo com as suas necessidades. Os Pods contêm uma mistura de ingredientes líquidos e em pó que adicionam sabor e propósito à sua água. O Vessel é uma garrafa de água conveniente e reutilizável que te ajuda a se manter hidratado.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trooper_tipos`
--

CREATE TABLE IF NOT EXISTS `trooper_tipos` (
`tipo_id` int(11) NOT NULL,
  `tipo_nome` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trooper_tipos`
--

INSERT INTO `trooper_tipos` (`tipo_id`, `tipo_nome`) VALUES
(1, 'e-commerce'),
(2, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `trooper_usuarios`
--

CREATE TABLE IF NOT EXISTS `trooper_usuarios` (
`usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(255) NOT NULL,
  `usuario_email` varchar(255) NOT NULL,
  `usuario_senha` varchar(32) NOT NULL,
  `usuario_salt` varchar(32) NOT NULL,
  `usuario_status` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trooper_usuarios`
--

INSERT INTO `trooper_usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_salt`, `usuario_status`) VALUES
(1, 'Alex Madeira', 'alex.c.madeira@gmail.com', '52bd2720318382fbca5d978713b78363', '8e4f360b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akkedis_configuracoes`
--
ALTER TABLE `akkedis_configuracoes`
 ADD PRIMARY KEY (`configuracao_id`);

--
-- Indexes for table `trooper_agencias`
--
ALTER TABLE `trooper_agencias`
 ADD PRIMARY KEY (`agencia_id`);

--
-- Indexes for table `trooper_arquivos`
--
ALTER TABLE `trooper_arquivos`
 ADD PRIMARY KEY (`arquivo_id`);

--
-- Indexes for table `trooper_categorias`
--
ALTER TABLE `trooper_categorias`
 ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `trooper_projetos`
--
ALTER TABLE `trooper_projetos`
 ADD PRIMARY KEY (`projeto_id`);

--
-- Indexes for table `trooper_tipos`
--
ALTER TABLE `trooper_tipos`
 ADD PRIMARY KEY (`tipo_id`);

--
-- Indexes for table `trooper_usuarios`
--
ALTER TABLE `trooper_usuarios`
 ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akkedis_configuracoes`
--
ALTER TABLE `akkedis_configuracoes`
MODIFY `configuracao_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trooper_agencias`
--
ALTER TABLE `trooper_agencias`
MODIFY `agencia_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trooper_arquivos`
--
ALTER TABLE `trooper_arquivos`
MODIFY `arquivo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=397;
--
-- AUTO_INCREMENT for table `trooper_categorias`
--
ALTER TABLE `trooper_categorias`
MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trooper_projetos`
--
ALTER TABLE `trooper_projetos`
MODIFY `projeto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `trooper_tipos`
--
ALTER TABLE `trooper_tipos`
MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trooper_usuarios`
--
ALTER TABLE `trooper_usuarios`
MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
