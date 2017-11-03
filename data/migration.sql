-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2017 a las 18:23:52
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `application-base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1508252547),
('m010101_100001_init_comment', 1508252550),
('m140506_102106_rbac_init', 1508252552),
('m150105_172247_create_cron_schedule_tbl', 1508252553),
('m150212_182851_init_cms', 1508252553),
('m150227_114524_init', 1508252553),
('m150828_085134_init_user_tables', 1508252554),
('m160516_095943_init', 1508261690),
('m160629_121330_add_relatedTo_column_to_comment', 1508252555),
('m160804_101551_drop_dateSheduled_and_dateExecuted_columns', 1508252558),
('m161109_092304_rename_comment_table', 1508252558),
('m161109_104201_rename_setting_table', 1508252558),
('m161109_105445_rename_cms_table', 1508252558),
('m161109_111305_rename_cron_schedule_table', 1508252558),
('m161109_112016_rename_user_table', 1508252558),
('m161109_121736_create_session_table', 1508252916),
('m161109_124936_rename_cart_table', 1508261691),
('m161114_094902_add_url_column_to_comment_table', 1508252559),
('m161119_153348_alter_cart_data', 1508261691),
('m170323_102933_add_description_column_to_setting_table', 1508252560),
('m170413_125133_rename_date_columns', 1508252560),
('m170416_182141_rename_fields', 1508252560),
('m170416_182830_add_markdown_content_column_to_cms_table', 1508252561),
('m170419_224001_create_attachment_table', 1508252561),
('m170608_141511_rename_columns', 1508252562),
('m171023_174816_create_category_table', 1508782096),
('m171023_180739_create_product_table', 1508782097),
('m171024_205416_gallery_ext', 1508878565),
('m171025_201117_slider_table', 1508962794),
('m171025_201721_slider_gallery', 1508962794),
('m171026_182207_subscriber_table', 1509042383),
('m171031_213208_table_option_group', 1509490757),
('m171031_213250_table_option', 1509490758),
('m171031_213308_table_product_option', 1509490763),
('m171101_153241_create_order_table', 1509654883),
('m171101_162621_add_color_column_to_product_table', 1509654884),
('m171102_181155_table_detail_cart', 1509661515);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
