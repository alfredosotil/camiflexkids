-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2017 a las 17:36:01
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camiflexkids`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `id` int(11) NOT NULL,
  `file_extension` varchar(255) DEFAULT NULL,
  `file_version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1511988534);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, '', NULL, NULL, 1511988499, 1511988499),
('admin', 1, 'Admin has all available permissions.', NULL, NULL, 1511988499, 1511988499),
('fullAdministrator', 2, 'Full Administrator', NULL, NULL, 1511988499, 1511988499),
('user', 1, 'Authenticated user.', 'user', NULL, 1511988499, 1511988499);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('fullAdministrator', '/admin/*'),
('admin', 'fullAdministrator');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_migration`
--

CREATE TABLE IF NOT EXISTS `auth_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auth_migration`
--

INSERT INTO `auth_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1511988486),
('m160722_085418_init', 1511988499);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('user', 0x4f3a32373a22796969326d6f645c726261635c72756c65735c5573657252756c65223a333a7b733a343a226e616d65223b733a343a2275736572223b733a393a22637265617465644174223b693a313531313938383439393b733a393a22757064617465644174223b693a313531313938383439393b7d, 1511988499, 1511988499);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `sessionId` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cartData` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `active`) VALUES
(1, 'Pisos de goma', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `markdown_content` text COLLATE utf8_unicode_ci,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `comment_available` smallint(6) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `entity` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `entityId` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `level` smallint(6) NOT NULL DEFAULT '1',
  `createdBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `relatedTo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `createdAt` int(11) NOT NULL,
  `updatedAt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cron_schedule`
--

CREATE TABLE IF NOT EXISTS `cron_schedule` (
  `id` int(11) NOT NULL,
  `jobCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `messages` text COLLATE utf8_unicode_ci,
  `dateCreated` timestamp NULL DEFAULT NULL,
  `dateFinished` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detailorder`
--

CREATE TABLE IF NOT EXISTS `detailorder` (
  `id` int(11) NOT NULL,
  `detailorderuniqueid` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price_per_unit` double NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `vat` double NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery_image`
--

CREATE TABLE IF NOT EXISTS `gallery_image` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `ownerId` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `type`, `ownerId`, `rank`, `name`, `description`) VALUES
(1, 'product', '1', 1, '', ''),
(2, 'product', '2', 2, '', ''),
(3, 'product', '3', 3, '', ''),
(4, 'product', '4', 4, '', ''),
(5, 'product', '5', 5, '', ''),
(6, 'product', '6', 6, '', ''),
(7, 'product', '7', 7, '', ''),
(8, 'product', '8', 8, '', ''),
(9, 'product', '9', 9, '', ''),
(10, 'product', '10', 10, '', ''),
(11, 'product', '11', 11, '', ''),
(12, 'product', '12', 12, '', ''),
(13, 'product', '13', 13, '', ''),
(14, 'product', '14', 14, '', ''),
(15, 'product', '15', 15, '', '');

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
('m000000_000000_base', 1511988378),
('m010101_100001_init_comment', 1511988382),
('m140506_102106_rbac_init', 1511988382),
('m150105_172247_create_cron_schedule_tbl', 1511988383),
('m150212_182851_init_cms', 1511988383),
('m150227_114524_init', 1511988383),
('m150828_085134_init_user_tables', 1511988383),
('m160516_095943_init', 1511988383),
('m160629_121330_add_relatedTo_column_to_comment', 1511988383),
('m160804_101551_drop_dateSheduled_and_dateExecuted_columns', 1511988384),
('m161109_092304_rename_comment_table', 1511988384),
('m161109_104201_rename_setting_table', 1511988384),
('m161109_105445_rename_cms_table', 1511988384),
('m161109_111305_rename_cron_schedule_table', 1511988385),
('m161109_112016_rename_user_table', 1511988385),
('m161109_121736_create_session_table', 1511988385),
('m161109_124936_rename_cart_table', 1511988385),
('m161114_094902_add_url_column_to_comment_table', 1511988385),
('m161119_153348_alter_cart_data', 1511988386),
('m170323_102933_add_description_column_to_setting_table', 1511988386),
('m170413_125133_rename_date_columns', 1511988386),
('m170416_182141_rename_fields', 1511988387),
('m170416_182830_add_markdown_content_column_to_cms_table', 1511988387),
('m170419_224001_create_attachment_table', 1511988387),
('m170608_141511_rename_columns', 1511988387),
('m171023_174816_create_category_table', 1511988388),
('m171023_180739_create_product_table', 1511988388),
('m171024_205416_gallery_ext', 1511988388),
('m171025_201117_slider_table', 1511988389),
('m171025_201721_slider_gallery', 1511988390),
('m171026_182207_subscriber_table', 1511988390),
('m171031_213208_table_option_group', 1511988390),
('m171031_213250_table_option', 1511988391),
('m171031_213308_table_product_option', 1511988393),
('m171101_153241_create_order_table', 1511988393),
('m171102_181155_table_detail_order', 1511988394),
('m171110_153805_add_detailorderuniqueid_column_to_detailorder_table', 1511988395),
('m171127_153641_create_ubigeoperu_table', 1511988400),
('m171127_191256_add_notes_column_to_order_table', 1511988400),
('m171128_164632_add_paymenttype_column_to_order_table', 1511988400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `option`
--

CREATE TABLE IF NOT EXISTS `option` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `optiongroup_id` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `optiongroup`
--

CREATE TABLE IF NOT EXISTS `optiongroup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `departament` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `shipping` double NOT NULL,
  `tax` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `shipped` smallint(6) NOT NULL DEFAULT '0',
  `tracking_number` varchar(255) NOT NULL,
  `typepayment` varchar(20) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `weight` double DEFAULT NULL,
  `cart_desc` varchar(32) NOT NULL,
  `short_desc` varchar(100) DEFAULT NULL,
  `long_desc` varchar(250) NOT NULL,
  `thumb` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `stock` float NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `sku`, `color`, `price`, `weight`, `cart_desc`, `short_desc`, `long_desc`, `thumb`, `image`, `category_id`, `created_at`, `updated_at`, `stock`, `active`) VALUES
(1, 'BLANCO', '25108947', '#FFFFFF', 25, NULL, 'Piso BLANCO', '', 'Piso BLANCO - #FFFFFF', 'nofile', 'nofile', 1, 1511988388, 1511988986, 1000, 1),
(2, 'HUMO', '86250610', '#C4C4C4', 25, NULL, 'Piso HUMO', '', 'Piso HUMO - #C4C4C4', 'nofile', 'nofile', 1, 1511988388, 1511989029, 1000, 1),
(3, 'CREMA', '27410583', '#F5E091', 25, NULL, 'Piso CREMA', '', 'Piso CREMA - #F5E091', 'nofile', 'nofile', 1, 1511988388, 1511989052, 1000, 1),
(4, 'ARENA', '36191406', '#CFB79D', 25, NULL, 'Piso ARENA', '', 'Piso ARENA - #CFB79D', 'nofile', 'nofile', 1, 1511988388, 1511989083, 1000, 1),
(5, 'DARK SHADOW', '18769836', '#383842', 25, NULL, 'Piso DARK SHADOW', '', 'Piso DARK SHADOW - #383842', 'nofile', 'nofile', 1, 1511988388, 1511989103, 1000, 1),
(6, 'AMARILLO', '75912475', '#F3EA2D', 25, NULL, 'Piso AMARILLO', '', 'Piso AMARILLO - #F3EA2D', 'nofile', 'nofile', 1, 1511988388, 1511989124, 1000, 1),
(7, 'NARANJA', '98678894', '#F68634', 25, NULL, 'Piso NARANJA', '', 'Piso NARANJA - #F68634', 'nofile', 'nofile', 1, 1511988388, 1511989143, 1000, 1),
(8, 'ROSADO BEBE', '70062255', '#ED90A3', 25, NULL, 'Piso ROSADO BEBE', '', 'Piso ROSADO BEBE - #ED90A3', 'nofile', 'nofile', 1, 1511988388, 1511989162, 1000, 1),
(9, 'ROJO NAVIDAD', '93817443', '#DB232B', 25, NULL, 'Piso ROJO NAVIDAD', '', 'Piso ROJO NAVIDAD - #DB232B', 'nofile', 'nofile', 1, 1511988388, 1511989189, 1000, 1),
(10, 'LILA LAVANDA', '26726684', '#9654AC', 25, NULL, 'Piso LILA LAVANDA', '', 'Piso LILA LAVANDA - #9654AC', 'nofile', 'nofile', 1, 1511988388, 1511989209, 1000, 1),
(11, 'CELESTE BEBE', '75552673', '#7DB0DB', 25, NULL, 'Piso CELESTE BEBE', '', 'Piso CELESTE BEBE - #7DB0DB', 'nofile', 'nofile', 1, 1511988388, 1511989230, 1000, 1),
(12, 'AZULINO', '74929199', '#1C67C4', 25, NULL, 'Piso AZULINO', '', 'Piso AZULINO - #1C67C4', 'nofile', 'nofile', 1, 1511988388, 1511989249, 1000, 1),
(13, 'VERDE AGUA', '67439270', '#82CBC0', 25, NULL, 'Piso VERDE AGUA', '', 'Piso VERDE AGUA - #82CBC0', 'nofile', 'nofile', 1, 1511988388, 1511989266, 1000, 1),
(14, 'VERDE LIMA', '82130737', '#6DB23D', 25, NULL, 'Piso VERDE LIMA', '', 'Piso VERDE LIMA - #6DB23D', 'nofile', 'nofile', 1, 1511988388, 1511989290, 1000, 1),
(15, 'VERDE BOSQUE', '22719421', '#2F7E3D', 25, NULL, 'Piso VERDE BOSQUE', '', 'Piso VERDE BOSQUE - #2F7E3D', 'nofile', 'nofile', 1, 1511988388, 1511989321, 1000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoption`
--

CREATE TABLE IF NOT EXISTS `productoption` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `priceincrement` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `optiongroup_id` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `session`
--

INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('2ku5cd164ggunpmv56jomeu863', 1511996372, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('5oarn4o2ifvnsqmp405scv4ir2', 1511992200, 0x5f5f666c6173687c613a303a7b7d),
('ugr6jcba609lgbc75fs3v72g55', 1511993097, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b5f5f61646d696e52657475726e416374696f6e7c733a31363a2261646d696e2f757365722f696e646578223b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_desc` varchar(100) DEFAULT NULL,
  `long_desc` varchar(250) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_gallery`
--

CREATE TABLE IF NOT EXISTS `slider_gallery` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `ownerId` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `phone`, `created_at`, `updated_at`, `active`) VALUES
(1, 'alfredosotil@gmail.com', '', 1511988616, 1511988616, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubigeoperu`
--

CREATE TABLE IF NOT EXISTS `ubigeoperu` (
  `id` int(11) NOT NULL,
  `departamento` varchar(32) NOT NULL,
  `provincia` varchar(32) NOT NULL,
  `distrito` varchar(32) NOT NULL,
  `nombre` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2089 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubigeoperu`
--

INSERT INTO `ubigeoperu` (`id`, `departamento`, `provincia`, `distrito`, `nombre`) VALUES
(1, '01', '00', '00', 'Amazonas'),
(2, '01', '01', '00', 'Chachapoyas'),
(3, '01', '01', '01', 'Chachapoyas'),
(4, '01', '01', '02', 'Asunción'),
(5, '01', '01', '03', 'Balsas'),
(6, '01', '01', '04', 'Cheto'),
(7, '01', '01', '05', 'Chiliquin'),
(8, '01', '01', '06', 'Chuquibamba'),
(9, '01', '01', '07', 'Granada'),
(10, '01', '01', '08', 'Huancas'),
(11, '01', '01', '09', 'La Jalca'),
(12, '01', '01', '10', 'Leimebamba'),
(13, '01', '01', '11', 'Levanto'),
(14, '01', '01', '12', 'Magdalena'),
(15, '01', '01', '13', 'Mariscal Castilla'),
(16, '01', '01', '14', 'Molinopampa'),
(17, '01', '01', '15', 'Montevideo'),
(18, '01', '01', '16', 'Olleros'),
(19, '01', '01', '17', 'Quinjalca'),
(20, '01', '01', '18', 'San Francisco de Daguas'),
(21, '01', '01', '19', 'San Isidro de Maino'),
(22, '01', '01', '20', 'Soloco'),
(23, '01', '01', '21', 'Sonche'),
(24, '01', '02', '00', 'Bagua'),
(25, '01', '02', '01', 'Bagua'),
(26, '01', '02', '02', 'Aramango'),
(27, '01', '02', '03', 'Copallin'),
(28, '01', '02', '04', 'El Parco'),
(29, '01', '02', '05', 'Imaza'),
(30, '01', '02', '06', 'La Peca'),
(31, '01', '03', '00', 'Bongará'),
(32, '01', '03', '01', 'Jumbilla'),
(33, '01', '03', '02', 'Chisquilla'),
(34, '01', '03', '03', 'Churuja'),
(35, '01', '03', '04', 'Corosha'),
(36, '01', '03', '05', 'Cuispes'),
(37, '01', '03', '06', 'Florida'),
(38, '01', '03', '07', 'Jazan'),
(39, '01', '03', '08', 'Recta'),
(40, '01', '03', '09', 'San Carlos'),
(41, '01', '03', '10', 'Shipasbamba'),
(42, '01', '03', '11', 'Valera'),
(43, '01', '03', '12', 'Yambrasbamba'),
(44, '01', '04', '00', 'Condorcanqui'),
(45, '01', '04', '01', 'Nieva'),
(46, '01', '04', '02', 'El Cenepa'),
(47, '01', '04', '03', 'Río Santiago'),
(48, '01', '05', '00', 'Luya'),
(49, '01', '05', '01', 'Lamud'),
(50, '01', '05', '02', 'Camporredondo'),
(51, '01', '05', '03', 'Cocabamba'),
(52, '01', '05', '04', 'Colcamar'),
(53, '01', '05', '05', 'Conila'),
(54, '01', '05', '06', 'Inguilpata'),
(55, '01', '05', '07', 'Longuita'),
(56, '01', '05', '08', 'Lonya Chico'),
(57, '01', '05', '09', 'Luya'),
(58, '01', '05', '10', 'Luya Viejo'),
(59, '01', '05', '11', 'María'),
(60, '01', '05', '12', 'Ocalli'),
(61, '01', '05', '13', 'Ocumal'),
(62, '01', '05', '14', 'Pisuquia'),
(63, '01', '05', '15', 'Providencia'),
(64, '01', '05', '16', 'San Cristóbal'),
(65, '01', '05', '17', 'San Francisco de Yeso'),
(66, '01', '05', '18', 'San Jerónimo'),
(67, '01', '05', '19', 'San Juan de Lopecancha'),
(68, '01', '05', '20', 'Santa Catalina'),
(69, '01', '05', '21', 'Santo Tomas'),
(70, '01', '05', '22', 'Tingo'),
(71, '01', '05', '23', 'Trita'),
(72, '01', '06', '00', 'Rodríguez de Mendoza'),
(73, '01', '06', '01', 'San Nicolás'),
(74, '01', '06', '02', 'Chirimoto'),
(75, '01', '06', '03', 'Cochamal'),
(76, '01', '06', '04', 'Huambo'),
(77, '01', '06', '05', 'Limabamba'),
(78, '01', '06', '06', 'Longar'),
(79, '01', '06', '07', 'Mariscal Benavides'),
(80, '01', '06', '08', 'Milpuc'),
(81, '01', '06', '09', 'Omia'),
(82, '01', '06', '10', 'Santa Rosa'),
(83, '01', '06', '11', 'Totora'),
(84, '01', '06', '12', 'Vista Alegre'),
(85, '01', '07', '00', 'Utcubamba'),
(86, '01', '07', '01', 'Bagua Grande'),
(87, '01', '07', '02', 'Cajaruro'),
(88, '01', '07', '03', 'Cumba'),
(89, '01', '07', '04', 'El Milagro'),
(90, '01', '07', '05', 'Jamalca'),
(91, '01', '07', '06', 'Lonya Grande'),
(92, '01', '07', '07', 'Yamon'),
(93, '02', '00', '00', 'Áncash'),
(94, '02', '01', '00', 'Huaraz'),
(95, '02', '01', '01', 'Huaraz'),
(96, '02', '01', '02', 'Cochabamba'),
(97, '02', '01', '03', 'Colcabamba'),
(98, '02', '01', '04', 'Huanchay'),
(99, '02', '01', '05', 'Independencia'),
(100, '02', '01', '06', 'Jangas'),
(101, '02', '01', '07', 'La Libertad'),
(102, '02', '01', '08', 'Olleros'),
(103, '02', '01', '09', 'Pampas Grande'),
(104, '02', '01', '10', 'Pariacoto'),
(105, '02', '01', '11', 'Pira'),
(106, '02', '01', '12', 'Tarica'),
(107, '02', '02', '00', 'Aija'),
(108, '02', '02', '01', 'Aija'),
(109, '02', '02', '02', 'Coris'),
(110, '02', '02', '03', 'Huacllan'),
(111, '02', '02', '04', 'La Merced'),
(112, '02', '02', '05', 'Succha'),
(113, '02', '03', '00', 'Antonio Raymondi'),
(114, '02', '03', '01', 'Llamellin'),
(115, '02', '03', '02', 'Aczo'),
(116, '02', '03', '03', 'Chaccho'),
(117, '02', '03', '04', 'Chingas'),
(118, '02', '03', '05', 'Mirgas'),
(119, '02', '03', '06', 'San Juan de Rontoy'),
(120, '02', '04', '00', 'Asunción'),
(121, '02', '04', '01', 'Chacas'),
(122, '02', '04', '02', 'Acochaca'),
(123, '02', '05', '00', 'Bolognesi'),
(124, '02', '05', '01', 'Chiquian'),
(125, '02', '05', '02', 'Abelardo Pardo Lezameta'),
(126, '02', '05', '03', 'Antonio Raymondi'),
(127, '02', '05', '04', 'Aquia'),
(128, '02', '05', '05', 'Cajacay'),
(129, '02', '05', '06', 'Canis'),
(130, '02', '05', '07', 'Colquioc'),
(131, '02', '05', '08', 'Huallanca'),
(132, '02', '05', '09', 'Huasta'),
(133, '02', '05', '10', 'Huayllacayan'),
(134, '02', '05', '11', 'La Primavera'),
(135, '02', '05', '12', 'Mangas'),
(136, '02', '05', '13', 'Pacllon'),
(137, '02', '05', '14', 'San Miguel de Corpanqui'),
(138, '02', '05', '15', 'Ticllos'),
(139, '02', '06', '00', 'Carhuaz'),
(140, '02', '06', '01', 'Carhuaz'),
(141, '02', '06', '02', 'Acopampa'),
(142, '02', '06', '03', 'Amashca'),
(143, '02', '06', '04', 'Anta'),
(144, '02', '06', '05', 'Ataquero'),
(145, '02', '06', '06', 'Marcara'),
(146, '02', '06', '07', 'Pariahuanca'),
(147, '02', '06', '08', 'San Miguel de Aco'),
(148, '02', '06', '09', 'Shilla'),
(149, '02', '06', '10', 'Tinco'),
(150, '02', '06', '11', 'Yungar'),
(151, '02', '07', '00', 'Carlos Fermín Fitzcarrald'),
(152, '02', '07', '01', 'San Luis'),
(153, '02', '07', '02', 'San Nicolás'),
(154, '02', '07', '03', 'Yauya'),
(155, '02', '08', '00', 'Casma'),
(156, '02', '08', '01', 'Casma'),
(157, '02', '08', '02', 'Buena Vista Alta'),
(158, '02', '08', '03', 'Comandante Noel'),
(159, '02', '08', '04', 'Yautan'),
(160, '02', '09', '00', 'Corongo'),
(161, '02', '09', '01', 'Corongo'),
(162, '02', '09', '02', 'Aco'),
(163, '02', '09', '03', 'Bambas'),
(164, '02', '09', '04', 'Cusca'),
(165, '02', '09', '05', 'La Pampa'),
(166, '02', '09', '06', 'Yanac'),
(167, '02', '09', '07', 'Yupan'),
(168, '02', '10', '00', 'Huari'),
(169, '02', '10', '01', 'Huari'),
(170, '02', '10', '02', 'Anra'),
(171, '02', '10', '03', 'Cajay'),
(172, '02', '10', '04', 'Chavin de Huantar'),
(173, '02', '10', '05', 'Huacachi'),
(174, '02', '10', '06', 'Huacchis'),
(175, '02', '10', '07', 'Huachis'),
(176, '02', '10', '08', 'Huantar'),
(177, '02', '10', '09', 'Masin'),
(178, '02', '10', '10', 'Paucas'),
(179, '02', '10', '11', 'Ponto'),
(180, '02', '10', '12', 'Rahuapampa'),
(181, '02', '10', '13', 'Rapayan'),
(182, '02', '10', '14', 'San Marcos'),
(183, '02', '10', '15', 'San Pedro de Chana'),
(184, '02', '10', '16', 'Uco'),
(185, '02', '11', '00', 'Huarmey'),
(186, '02', '11', '01', 'Huarmey'),
(187, '02', '11', '02', 'Cochapeti'),
(188, '02', '11', '03', 'Culebras'),
(189, '02', '11', '04', 'Huayan'),
(190, '02', '11', '05', 'Malvas'),
(191, '02', '12', '00', 'Huaylas'),
(192, '02', '12', '01', 'Caraz'),
(193, '02', '12', '02', 'Huallanca'),
(194, '02', '12', '03', 'Huata'),
(195, '02', '12', '04', 'Huaylas'),
(196, '02', '12', '05', 'Mato'),
(197, '02', '12', '06', 'Pamparomas'),
(198, '02', '12', '07', 'Pueblo Libre'),
(199, '02', '12', '08', 'Santa Cruz'),
(200, '02', '12', '09', 'Santo Toribio'),
(201, '02', '12', '10', 'Yuracmarca'),
(202, '02', '13', '00', 'Mariscal Luzuriaga'),
(203, '02', '13', '01', 'Piscobamba'),
(204, '02', '13', '02', 'Casca'),
(205, '02', '13', '03', 'Eleazar Guzmán Barron'),
(206, '02', '13', '04', 'Fidel Olivas Escudero'),
(207, '02', '13', '05', 'Llama'),
(208, '02', '13', '06', 'Llumpa'),
(209, '02', '13', '07', 'Lucma'),
(210, '02', '13', '08', 'Musga'),
(211, '02', '14', '00', 'Ocros'),
(212, '02', '14', '01', 'Ocros'),
(213, '02', '14', '02', 'Acas'),
(214, '02', '14', '03', 'Cajamarquilla'),
(215, '02', '14', '04', 'Carhuapampa'),
(216, '02', '14', '05', 'Cochas'),
(217, '02', '14', '06', 'Congas'),
(218, '02', '14', '07', 'Llipa'),
(219, '02', '14', '08', 'San Cristóbal de Rajan'),
(220, '02', '14', '09', 'San Pedro'),
(221, '02', '14', '10', 'Santiago de Chilcas'),
(222, '02', '15', '00', 'Pallasca'),
(223, '02', '15', '01', 'Cabana'),
(224, '02', '15', '02', 'Bolognesi'),
(225, '02', '15', '03', 'Conchucos'),
(226, '02', '15', '04', 'Huacaschuque'),
(227, '02', '15', '05', 'Huandoval'),
(228, '02', '15', '06', 'Lacabamba'),
(229, '02', '15', '07', 'Llapo'),
(230, '02', '15', '08', 'Pallasca'),
(231, '02', '15', '09', 'Pampas'),
(232, '02', '15', '10', 'Santa Rosa'),
(233, '02', '15', '11', 'Tauca'),
(234, '02', '16', '00', 'Pomabamba'),
(235, '02', '16', '01', 'Pomabamba'),
(236, '02', '16', '02', 'Huayllan'),
(237, '02', '16', '03', 'Parobamba'),
(238, '02', '16', '04', 'Quinuabamba'),
(239, '02', '17', '00', 'Recuay'),
(240, '02', '17', '01', 'Recuay'),
(241, '02', '17', '02', 'Catac'),
(242, '02', '17', '03', 'Cotaparaco'),
(243, '02', '17', '04', 'Huayllapampa'),
(244, '02', '17', '05', 'Llacllin'),
(245, '02', '17', '06', 'Marca'),
(246, '02', '17', '07', 'Pampas Chico'),
(247, '02', '17', '08', 'Pararin'),
(248, '02', '17', '09', 'Tapacocha'),
(249, '02', '17', '10', 'Ticapampa'),
(250, '02', '18', '00', 'Santa'),
(251, '02', '18', '01', 'Chimbote'),
(252, '02', '18', '02', 'Cáceres del Perú'),
(253, '02', '18', '03', 'Coishco'),
(254, '02', '18', '04', 'Macate'),
(255, '02', '18', '05', 'Moro'),
(256, '02', '18', '06', 'Nepeña'),
(257, '02', '18', '07', 'Samanco'),
(258, '02', '18', '08', 'Santa'),
(259, '02', '18', '09', 'Nuevo Chimbote'),
(260, '02', '19', '00', 'Sihuas'),
(261, '02', '19', '01', 'Sihuas'),
(262, '02', '19', '02', 'Acobamba'),
(263, '02', '19', '03', 'Alfonso Ugarte'),
(264, '02', '19', '04', 'Cashapampa'),
(265, '02', '19', '05', 'Chingalpo'),
(266, '02', '19', '06', 'Huayllabamba'),
(267, '02', '19', '07', 'Quiches'),
(268, '02', '19', '08', 'Ragash'),
(269, '02', '19', '09', 'San Juan'),
(270, '02', '19', '10', 'Sicsibamba'),
(271, '02', '20', '00', 'Yungay'),
(272, '02', '20', '01', 'Yungay'),
(273, '02', '20', '02', 'Cascapara'),
(274, '02', '20', '03', 'Mancos'),
(275, '02', '20', '04', 'Matacoto'),
(276, '02', '20', '05', 'Quillo'),
(277, '02', '20', '06', 'Ranrahirca'),
(278, '02', '20', '07', 'Shupluy'),
(279, '02', '20', '08', 'Yanama'),
(280, '03', '00', '00', 'Apurímac'),
(281, '03', '01', '00', 'Abancay'),
(282, '03', '01', '01', 'Abancay'),
(283, '03', '01', '02', 'Chacoche'),
(284, '03', '01', '03', 'Circa'),
(285, '03', '01', '04', 'Curahuasi'),
(286, '03', '01', '05', 'Huanipaca'),
(287, '03', '01', '06', 'Lambrama'),
(288, '03', '01', '07', 'Pichirhua'),
(289, '03', '01', '08', 'San Pedro de Cachora'),
(290, '03', '01', '09', 'Tamburco'),
(291, '03', '02', '00', 'Andahuaylas'),
(292, '03', '02', '01', 'Andahuaylas'),
(293, '03', '02', '02', 'Andarapa'),
(294, '03', '02', '03', 'Chiara'),
(295, '03', '02', '04', 'Huancarama'),
(296, '03', '02', '05', 'Huancaray'),
(297, '03', '02', '06', 'Huayana'),
(298, '03', '02', '07', 'Kishuara'),
(299, '03', '02', '08', 'Pacobamba'),
(300, '03', '02', '09', 'Pacucha'),
(301, '03', '02', '10', 'Pampachiri'),
(302, '03', '02', '11', 'Pomacocha'),
(303, '03', '02', '12', 'San Antonio de Cachi'),
(304, '03', '02', '13', 'San Jerónimo'),
(305, '03', '02', '14', 'San Miguel de Chaccrampa'),
(306, '03', '02', '15', 'Santa María de Chicmo'),
(307, '03', '02', '16', 'Talavera'),
(308, '03', '02', '17', 'Tumay Huaraca'),
(309, '03', '02', '18', 'Turpo'),
(310, '03', '02', '19', 'Kaquiabamba'),
(311, '03', '02', '20', 'José María Arguedas'),
(312, '03', '03', '00', 'Antabamba'),
(313, '03', '03', '01', 'Antabamba'),
(314, '03', '03', '02', 'El Oro'),
(315, '03', '03', '03', 'Huaquirca'),
(316, '03', '03', '04', 'Juan Espinoza Medrano'),
(317, '03', '03', '05', 'Oropesa'),
(318, '03', '03', '06', 'Pachaconas'),
(319, '03', '03', '07', 'Sabaino'),
(320, '03', '04', '00', 'Aymaraes'),
(321, '03', '04', '01', 'Chalhuanca'),
(322, '03', '04', '02', 'Capaya'),
(323, '03', '04', '03', 'Caraybamba'),
(324, '03', '04', '04', 'Chapimarca'),
(325, '03', '04', '05', 'Colcabamba'),
(326, '03', '04', '06', 'Cotaruse'),
(327, '03', '04', '07', 'Huayllo'),
(328, '03', '04', '08', 'Justo Apu Sahuaraura'),
(329, '03', '04', '09', 'Lucre'),
(330, '03', '04', '10', 'Pocohuanca'),
(331, '03', '04', '11', 'San Juan de Chacña'),
(332, '03', '04', '12', 'Sañayca'),
(333, '03', '04', '13', 'Soraya'),
(334, '03', '04', '14', 'Tapairihua'),
(335, '03', '04', '15', 'Tintay'),
(336, '03', '04', '16', 'Toraya'),
(337, '03', '04', '17', 'Yanaca'),
(338, '03', '05', '00', 'Cotabambas'),
(339, '03', '05', '01', 'Tambobamba'),
(340, '03', '05', '02', 'Cotabambas'),
(341, '03', '05', '03', 'Coyllurqui'),
(342, '03', '05', '04', 'Haquira'),
(343, '03', '05', '05', 'Mara'),
(344, '03', '05', '06', 'Challhuahuacho'),
(345, '03', '06', '00', 'Chincheros'),
(346, '03', '06', '01', 'Chincheros'),
(347, '03', '06', '02', 'Anco_Huallo'),
(348, '03', '06', '03', 'Cocharcas'),
(349, '03', '06', '04', 'Huaccana'),
(350, '03', '06', '05', 'Ocobamba'),
(351, '03', '06', '06', 'Ongoy'),
(352, '03', '06', '07', 'Uranmarca'),
(353, '03', '06', '08', 'Ranracancha'),
(354, '03', '06', '09', 'Rocchacc'),
(355, '03', '06', '10', 'El Porvenir'),
(356, '03', '07', '00', 'Grau'),
(357, '03', '07', '01', 'Chuquibambilla'),
(358, '03', '07', '02', 'Curpahuasi'),
(359, '03', '07', '03', 'Gamarra'),
(360, '03', '07', '04', 'Huayllati'),
(361, '03', '07', '05', 'Mamara'),
(362, '03', '07', '06', 'Micaela Bastidas'),
(363, '03', '07', '07', 'Pataypampa'),
(364, '03', '07', '08', 'Progreso'),
(365, '03', '07', '09', 'San Antonio'),
(366, '03', '07', '10', 'Santa Rosa'),
(367, '03', '07', '11', 'Turpay'),
(368, '03', '07', '12', 'Vilcabamba'),
(369, '03', '07', '13', 'Virundo'),
(370, '03', '07', '14', 'Curasco'),
(371, '04', '00', '00', 'Arequipa'),
(372, '04', '01', '00', 'Arequipa'),
(373, '04', '01', '01', 'Arequipa'),
(374, '04', '01', '02', 'Alto Selva Alegre'),
(375, '04', '01', '03', 'Cayma'),
(376, '04', '01', '04', 'Cerro Colorado'),
(377, '04', '01', '05', 'Characato'),
(378, '04', '01', '06', 'Chiguata'),
(379, '04', '01', '07', 'Jacobo Hunter'),
(380, '04', '01', '08', 'La Joya'),
(381, '04', '01', '09', 'Mariano Melgar'),
(382, '04', '01', '10', 'Miraflores'),
(383, '04', '01', '11', 'Mollebaya'),
(384, '04', '01', '12', 'Paucarpata'),
(385, '04', '01', '13', 'Pocsi'),
(386, '04', '01', '14', 'Polobaya'),
(387, '04', '01', '15', 'Quequeña'),
(388, '04', '01', '16', 'Sabandia'),
(389, '04', '01', '17', 'Sachaca'),
(390, '04', '01', '18', 'San Juan de Siguas'),
(391, '04', '01', '19', 'San Juan de Tarucani'),
(392, '04', '01', '20', 'Santa Isabel de Siguas'),
(393, '04', '01', '21', 'Santa Rita de Siguas'),
(394, '04', '01', '22', 'Socabaya'),
(395, '04', '01', '23', 'Tiabaya'),
(396, '04', '01', '24', 'Uchumayo'),
(397, '04', '01', '25', 'Vitor'),
(398, '04', '01', '26', 'Yanahuara'),
(399, '04', '01', '27', 'Yarabamba'),
(400, '04', '01', '28', 'Yura'),
(401, '04', '01', '29', 'José Luis Bustamante Y Rivero'),
(402, '04', '02', '00', 'Camaná'),
(403, '04', '02', '01', 'Camaná'),
(404, '04', '02', '02', 'José María Quimper'),
(405, '04', '02', '03', 'Mariano Nicolás Valcárcel'),
(406, '04', '02', '04', 'Mariscal Cáceres'),
(407, '04', '02', '05', 'Nicolás de Pierola'),
(408, '04', '02', '06', 'Ocoña'),
(409, '04', '02', '07', 'Quilca'),
(410, '04', '02', '08', 'Samuel Pastor'),
(411, '04', '03', '00', 'Caravelí'),
(412, '04', '03', '01', 'Caravelí'),
(413, '04', '03', '02', 'Acarí'),
(414, '04', '03', '03', 'Atico'),
(415, '04', '03', '04', 'Atiquipa'),
(416, '04', '03', '05', 'Bella Unión'),
(417, '04', '03', '06', 'Cahuacho'),
(418, '04', '03', '07', 'Chala'),
(419, '04', '03', '08', 'Chaparra'),
(420, '04', '03', '09', 'Huanuhuanu'),
(421, '04', '03', '10', 'Jaqui'),
(422, '04', '03', '11', 'Lomas'),
(423, '04', '03', '12', 'Quicacha'),
(424, '04', '03', '13', 'Yauca'),
(425, '04', '04', '00', 'Castilla'),
(426, '04', '04', '01', 'Aplao'),
(427, '04', '04', '02', 'Andagua'),
(428, '04', '04', '03', 'Ayo'),
(429, '04', '04', '04', 'Chachas'),
(430, '04', '04', '05', 'Chilcaymarca'),
(431, '04', '04', '06', 'Choco'),
(432, '04', '04', '07', 'Huancarqui'),
(433, '04', '04', '08', 'Machaguay'),
(434, '04', '04', '09', 'Orcopampa'),
(435, '04', '04', '10', 'Pampacolca'),
(436, '04', '04', '11', 'Tipan'),
(437, '04', '04', '12', 'Uñon'),
(438, '04', '04', '13', 'Uraca'),
(439, '04', '04', '14', 'Viraco'),
(440, '04', '05', '00', 'Caylloma'),
(441, '04', '05', '01', 'Chivay'),
(442, '04', '05', '02', 'Achoma'),
(443, '04', '05', '03', 'Cabanaconde'),
(444, '04', '05', '04', 'Callalli'),
(445, '04', '05', '05', 'Caylloma'),
(446, '04', '05', '06', 'Coporaque'),
(447, '04', '05', '07', 'Huambo'),
(448, '04', '05', '08', 'Huanca'),
(449, '04', '05', '09', 'Ichupampa'),
(450, '04', '05', '10', 'Lari'),
(451, '04', '05', '11', 'Lluta'),
(452, '04', '05', '12', 'Maca'),
(453, '04', '05', '13', 'Madrigal'),
(454, '04', '05', '14', 'San Antonio de Chuca'),
(455, '04', '05', '15', 'Sibayo'),
(456, '04', '05', '16', 'Tapay'),
(457, '04', '05', '17', 'Tisco'),
(458, '04', '05', '18', 'Tuti'),
(459, '04', '05', '19', 'Yanque'),
(460, '04', '05', '20', 'Majes'),
(461, '04', '06', '00', 'Condesuyos'),
(462, '04', '06', '01', 'Chuquibamba'),
(463, '04', '06', '02', 'Andaray'),
(464, '04', '06', '03', 'Cayarani'),
(465, '04', '06', '04', 'Chichas'),
(466, '04', '06', '05', 'Iray'),
(467, '04', '06', '06', 'Río Grande'),
(468, '04', '06', '07', 'Salamanca'),
(469, '04', '06', '08', 'Yanaquihua'),
(470, '04', '07', '00', 'Islay'),
(471, '04', '07', '01', 'Mollendo'),
(472, '04', '07', '02', 'Cocachacra'),
(473, '04', '07', '03', 'Dean Valdivia'),
(474, '04', '07', '04', 'Islay'),
(475, '04', '07', '05', 'Mejia'),
(476, '04', '07', '06', 'Punta de Bombón'),
(477, '04', '08', '00', 'La Uniòn'),
(478, '04', '08', '01', 'Cotahuasi'),
(479, '04', '08', '02', 'Alca'),
(480, '04', '08', '03', 'Charcana'),
(481, '04', '08', '04', 'Huaynacotas'),
(482, '04', '08', '05', 'Pampamarca'),
(483, '04', '08', '06', 'Puyca'),
(484, '04', '08', '07', 'Quechualla'),
(485, '04', '08', '08', 'Sayla'),
(486, '04', '08', '09', 'Tauria'),
(487, '04', '08', '10', 'Tomepampa'),
(488, '04', '08', '11', 'Toro'),
(489, '05', '00', '00', 'Ayacucho'),
(490, '05', '01', '00', 'Huamanga'),
(491, '05', '01', '01', 'Ayacucho'),
(492, '05', '01', '02', 'Acocro'),
(493, '05', '01', '03', 'Acos Vinchos'),
(494, '05', '01', '04', 'Carmen Alto'),
(495, '05', '01', '05', 'Chiara'),
(496, '05', '01', '06', 'Ocros'),
(497, '05', '01', '07', 'Pacaycasa'),
(498, '05', '01', '08', 'Quinua'),
(499, '05', '01', '09', 'San José de Ticllas'),
(500, '05', '01', '10', 'San Juan Bautista'),
(501, '05', '01', '11', 'Santiago de Pischa'),
(502, '05', '01', '12', 'Socos'),
(503, '05', '01', '13', 'Tambillo'),
(504, '05', '01', '14', 'Vinchos'),
(505, '05', '01', '15', 'Jesús Nazareno'),
(506, '05', '01', '16', 'Andrés Avelino Cáceres Dorregara'),
(507, '05', '02', '00', 'Cangallo'),
(508, '05', '02', '01', 'Cangallo'),
(509, '05', '02', '02', 'Chuschi'),
(510, '05', '02', '03', 'Los Morochucos'),
(511, '05', '02', '04', 'María Parado de Bellido'),
(512, '05', '02', '05', 'Paras'),
(513, '05', '02', '06', 'Totos'),
(514, '05', '03', '00', 'Huanca Sancos'),
(515, '05', '03', '01', 'Sancos'),
(516, '05', '03', '02', 'Carapo'),
(517, '05', '03', '03', 'Sacsamarca'),
(518, '05', '03', '04', 'Santiago de Lucanamarca'),
(519, '05', '04', '00', 'Huanta'),
(520, '05', '04', '01', 'Huanta'),
(521, '05', '04', '02', 'Ayahuanco'),
(522, '05', '04', '03', 'Huamanguilla'),
(523, '05', '04', '04', 'Iguain'),
(524, '05', '04', '05', 'Luricocha'),
(525, '05', '04', '06', 'Santillana'),
(526, '05', '04', '07', 'Sivia'),
(527, '05', '04', '08', 'Llochegua'),
(528, '05', '04', '09', 'Canayre'),
(529, '05', '04', '10', 'Uchuraccay'),
(530, '05', '04', '11', 'Pucacolpa'),
(531, '05', '04', '12', 'Chaca'),
(532, '05', '05', '00', 'La Mar'),
(533, '05', '05', '01', 'San Miguel'),
(534, '05', '05', '02', 'Anco'),
(535, '05', '05', '03', 'Ayna'),
(536, '05', '05', '04', 'Chilcas'),
(537, '05', '05', '05', 'Chungui'),
(538, '05', '05', '06', 'Luis Carranza'),
(539, '05', '05', '07', 'Santa Rosa'),
(540, '05', '05', '08', 'Tambo'),
(541, '05', '05', '09', 'Samugari'),
(542, '05', '05', '10', 'Anchihuay'),
(543, '05', '06', '00', 'Lucanas'),
(544, '05', '06', '01', 'Puquio'),
(545, '05', '06', '02', 'Aucara'),
(546, '05', '06', '03', 'Cabana'),
(547, '05', '06', '04', 'Carmen Salcedo'),
(548, '05', '06', '05', 'Chaviña'),
(549, '05', '06', '06', 'Chipao'),
(550, '05', '06', '07', 'Huac-Huas'),
(551, '05', '06', '08', 'Laramate'),
(552, '05', '06', '09', 'Leoncio Prado'),
(553, '05', '06', '10', 'Llauta'),
(554, '05', '06', '11', 'Lucanas'),
(555, '05', '06', '12', 'Ocaña'),
(556, '05', '06', '13', 'Otoca'),
(557, '05', '06', '14', 'Saisa'),
(558, '05', '06', '15', 'San Cristóbal'),
(559, '05', '06', '16', 'San Juan'),
(560, '05', '06', '17', 'San Pedro'),
(561, '05', '06', '18', 'San Pedro de Palco'),
(562, '05', '06', '19', 'Sancos'),
(563, '05', '06', '20', 'Santa Ana de Huaycahuacho'),
(564, '05', '06', '21', 'Santa Lucia'),
(565, '05', '07', '00', 'Parinacochas'),
(566, '05', '07', '01', 'Coracora'),
(567, '05', '07', '02', 'Chumpi'),
(568, '05', '07', '03', 'Coronel Castañeda'),
(569, '05', '07', '04', 'Pacapausa'),
(570, '05', '07', '05', 'Pullo'),
(571, '05', '07', '06', 'Puyusca'),
(572, '05', '07', '07', 'San Francisco de Ravacayco'),
(573, '05', '07', '08', 'Upahuacho'),
(574, '05', '08', '00', 'Pàucar del Sara Sara'),
(575, '05', '08', '01', 'Pausa'),
(576, '05', '08', '02', 'Colta'),
(577, '05', '08', '03', 'Corculla'),
(578, '05', '08', '04', 'Lampa'),
(579, '05', '08', '05', 'Marcabamba'),
(580, '05', '08', '06', 'Oyolo'),
(581, '05', '08', '07', 'Pararca'),
(582, '05', '08', '08', 'San Javier de Alpabamba'),
(583, '05', '08', '09', 'San José de Ushua'),
(584, '05', '08', '10', 'Sara Sara'),
(585, '05', '09', '00', 'Sucre'),
(586, '05', '09', '01', 'Querobamba'),
(587, '05', '09', '02', 'Belén'),
(588, '05', '09', '03', 'Chalcos'),
(589, '05', '09', '04', 'Chilcayoc'),
(590, '05', '09', '05', 'Huacaña'),
(591, '05', '09', '06', 'Morcolla'),
(592, '05', '09', '07', 'Paico'),
(593, '05', '09', '08', 'San Pedro de Larcay'),
(594, '05', '09', '09', 'San Salvador de Quije'),
(595, '05', '09', '10', 'Santiago de Paucaray'),
(596, '05', '09', '11', 'Soras'),
(597, '05', '10', '00', 'Víctor Fajardo'),
(598, '05', '10', '01', 'Huancapi'),
(599, '05', '10', '02', 'Alcamenca'),
(600, '05', '10', '03', 'Apongo'),
(601, '05', '10', '04', 'Asquipata'),
(602, '05', '10', '05', 'Canaria'),
(603, '05', '10', '06', 'Cayara'),
(604, '05', '10', '07', 'Colca'),
(605, '05', '10', '08', 'Huamanquiquia'),
(606, '05', '10', '09', 'Huancaraylla'),
(607, '05', '10', '10', 'Huaya'),
(608, '05', '10', '11', 'Sarhua'),
(609, '05', '10', '12', 'Vilcanchos'),
(610, '05', '11', '00', 'Vilcas Huamán'),
(611, '05', '11', '01', 'Vilcas Huaman'),
(612, '05', '11', '02', 'Accomarca'),
(613, '05', '11', '03', 'Carhuanca'),
(614, '05', '11', '04', 'Concepción'),
(615, '05', '11', '05', 'Huambalpa'),
(616, '05', '11', '06', 'Independencia'),
(617, '05', '11', '07', 'Saurama'),
(618, '05', '11', '08', 'Vischongo'),
(619, '06', '00', '00', 'Cajamarca'),
(620, '06', '01', '00', 'Cajamarca'),
(621, '06', '01', '01', 'Cajamarca'),
(622, '06', '01', '02', 'Asunción'),
(623, '06', '01', '03', 'Chetilla'),
(624, '06', '01', '04', 'Cospan'),
(625, '06', '01', '05', 'Encañada'),
(626, '06', '01', '06', 'Jesús'),
(627, '06', '01', '07', 'Llacanora'),
(628, '06', '01', '08', 'Los Baños del Inca'),
(629, '06', '01', '09', 'Magdalena'),
(630, '06', '01', '10', 'Matara'),
(631, '06', '01', '11', 'Namora'),
(632, '06', '01', '12', 'San Juan'),
(633, '06', '02', '00', 'Cajabamba'),
(634, '06', '02', '01', 'Cajabamba'),
(635, '06', '02', '02', 'Cachachi'),
(636, '06', '02', '03', 'Condebamba'),
(637, '06', '02', '04', 'Sitacocha'),
(638, '06', '03', '00', 'Celendín'),
(639, '06', '03', '01', 'Celendín'),
(640, '06', '03', '02', 'Chumuch'),
(641, '06', '03', '03', 'Cortegana'),
(642, '06', '03', '04', 'Huasmin'),
(643, '06', '03', '05', 'Jorge Chávez'),
(644, '06', '03', '06', 'José Gálvez'),
(645, '06', '03', '07', 'Miguel Iglesias'),
(646, '06', '03', '08', 'Oxamarca'),
(647, '06', '03', '09', 'Sorochuco'),
(648, '06', '03', '10', 'Sucre'),
(649, '06', '03', '11', 'Utco'),
(650, '06', '03', '12', 'La Libertad de Pallan'),
(651, '06', '04', '00', 'Chota'),
(652, '06', '04', '01', 'Chota'),
(653, '06', '04', '02', 'Anguia'),
(654, '06', '04', '03', 'Chadin'),
(655, '06', '04', '04', 'Chiguirip'),
(656, '06', '04', '05', 'Chimban'),
(657, '06', '04', '06', 'Choropampa'),
(658, '06', '04', '07', 'Cochabamba'),
(659, '06', '04', '08', 'Conchan'),
(660, '06', '04', '09', 'Huambos'),
(661, '06', '04', '10', 'Lajas'),
(662, '06', '04', '11', 'Llama'),
(663, '06', '04', '12', 'Miracosta'),
(664, '06', '04', '13', 'Paccha'),
(665, '06', '04', '14', 'Pion'),
(666, '06', '04', '15', 'Querocoto'),
(667, '06', '04', '16', 'San Juan de Licupis'),
(668, '06', '04', '17', 'Tacabamba'),
(669, '06', '04', '18', 'Tocmoche'),
(670, '06', '04', '19', 'Chalamarca'),
(671, '06', '05', '00', 'Contumazá'),
(672, '06', '05', '01', 'Contumaza'),
(673, '06', '05', '02', 'Chilete'),
(674, '06', '05', '03', 'Cupisnique'),
(675, '06', '05', '04', 'Guzmango'),
(676, '06', '05', '05', 'San Benito'),
(677, '06', '05', '06', 'Santa Cruz de Toledo'),
(678, '06', '05', '07', 'Tantarica'),
(679, '06', '05', '08', 'Yonan'),
(680, '06', '06', '00', 'Cutervo'),
(681, '06', '06', '01', 'Cutervo'),
(682, '06', '06', '02', 'Callayuc'),
(683, '06', '06', '03', 'Choros'),
(684, '06', '06', '04', 'Cujillo'),
(685, '06', '06', '05', 'La Ramada'),
(686, '06', '06', '06', 'Pimpingos'),
(687, '06', '06', '07', 'Querocotillo'),
(688, '06', '06', '08', 'San Andrés de Cutervo'),
(689, '06', '06', '09', 'San Juan de Cutervo'),
(690, '06', '06', '10', 'San Luis de Lucma'),
(691, '06', '06', '11', 'Santa Cruz'),
(692, '06', '06', '12', 'Santo Domingo de la Capilla'),
(693, '06', '06', '13', 'Santo Tomas'),
(694, '06', '06', '14', 'Socota'),
(695, '06', '06', '15', 'Toribio Casanova'),
(696, '06', '07', '00', 'Hualgayoc'),
(697, '06', '07', '01', 'Bambamarca'),
(698, '06', '07', '02', 'Chugur'),
(699, '06', '07', '03', 'Hualgayoc'),
(700, '06', '08', '00', 'Jaén'),
(701, '06', '08', '01', 'Jaén'),
(702, '06', '08', '02', 'Bellavista'),
(703, '06', '08', '03', 'Chontali'),
(704, '06', '08', '04', 'Colasay'),
(705, '06', '08', '05', 'Huabal'),
(706, '06', '08', '06', 'Las Pirias'),
(707, '06', '08', '07', 'Pomahuaca'),
(708, '06', '08', '08', 'Pucara'),
(709, '06', '08', '09', 'Sallique'),
(710, '06', '08', '10', 'San Felipe'),
(711, '06', '08', '11', 'San José del Alto'),
(712, '06', '08', '12', 'Santa Rosa'),
(713, '06', '09', '00', 'San Ignacio'),
(714, '06', '09', '01', 'San Ignacio'),
(715, '06', '09', '02', 'Chirinos'),
(716, '06', '09', '03', 'Huarango'),
(717, '06', '09', '04', 'La Coipa'),
(718, '06', '09', '05', 'Namballe'),
(719, '06', '09', '06', 'San José de Lourdes'),
(720, '06', '09', '07', 'Tabaconas'),
(721, '06', '10', '00', 'San Marcos'),
(722, '06', '10', '01', 'Pedro Gálvez'),
(723, '06', '10', '02', 'Chancay'),
(724, '06', '10', '03', 'Eduardo Villanueva'),
(725, '06', '10', '04', 'Gregorio Pita'),
(726, '06', '10', '05', 'Ichocan'),
(727, '06', '10', '06', 'José Manuel Quiroz'),
(728, '06', '10', '07', 'José Sabogal'),
(729, '06', '11', '00', 'San Miguel'),
(730, '06', '11', '01', 'San Miguel'),
(731, '06', '11', '02', 'Bolívar'),
(732, '06', '11', '03', 'Calquis'),
(733, '06', '11', '04', 'Catilluc'),
(734, '06', '11', '05', 'El Prado'),
(735, '06', '11', '06', 'La Florida'),
(736, '06', '11', '07', 'Llapa'),
(737, '06', '11', '08', 'Nanchoc'),
(738, '06', '11', '09', 'Niepos'),
(739, '06', '11', '10', 'San Gregorio'),
(740, '06', '11', '11', 'San Silvestre de Cochan'),
(741, '06', '11', '12', 'Tongod'),
(742, '06', '11', '13', 'Unión Agua Blanca'),
(743, '06', '12', '00', 'San Pablo'),
(744, '06', '12', '01', 'San Pablo'),
(745, '06', '12', '02', 'San Bernardino'),
(746, '06', '12', '03', 'San Luis'),
(747, '06', '12', '04', 'Tumbaden'),
(748, '06', '13', '00', 'Santa Cruz'),
(749, '06', '13', '01', 'Santa Cruz'),
(750, '06', '13', '02', 'Andabamba'),
(751, '06', '13', '03', 'Catache'),
(752, '06', '13', '04', 'Chancaybaños'),
(753, '06', '13', '05', 'La Esperanza'),
(754, '06', '13', '06', 'Ninabamba'),
(755, '06', '13', '07', 'Pulan'),
(756, '06', '13', '08', 'Saucepampa'),
(757, '06', '13', '09', 'Sexi'),
(758, '06', '13', '10', 'Uticyacu'),
(759, '06', '13', '11', 'Yauyucan'),
(760, '07', '00', '00', 'Callao'),
(761, '07', '01', '00', 'Prov. Const. del Callao'),
(762, '07', '01', '01', 'Callao'),
(763, '07', '01', '02', 'Bellavista'),
(764, '07', '01', '03', 'Carmen de la Legua Reynoso'),
(765, '07', '01', '04', 'La Perla'),
(766, '07', '01', '05', 'La Punta'),
(767, '07', '01', '06', 'Ventanilla'),
(768, '07', '01', '07', 'Mi Perú'),
(769, '08', '00', '00', 'Cusco'),
(770, '08', '01', '00', 'Cusco'),
(771, '08', '01', '01', 'Cusco'),
(772, '08', '01', '02', 'Ccorca'),
(773, '08', '01', '03', 'Poroy'),
(774, '08', '01', '04', 'San Jerónimo'),
(775, '08', '01', '05', 'San Sebastian'),
(776, '08', '01', '06', 'Santiago'),
(777, '08', '01', '07', 'Saylla'),
(778, '08', '01', '08', 'Wanchaq'),
(779, '08', '02', '00', 'Acomayo'),
(780, '08', '02', '01', 'Acomayo'),
(781, '08', '02', '02', 'Acopia'),
(782, '08', '02', '03', 'Acos'),
(783, '08', '02', '04', 'Mosoc Llacta'),
(784, '08', '02', '05', 'Pomacanchi'),
(785, '08', '02', '06', 'Rondocan'),
(786, '08', '02', '07', 'Sangarara'),
(787, '08', '03', '00', 'Anta'),
(788, '08', '03', '01', 'Anta'),
(789, '08', '03', '02', 'Ancahuasi'),
(790, '08', '03', '03', 'Cachimayo'),
(791, '08', '03', '04', 'Chinchaypujio'),
(792, '08', '03', '05', 'Huarocondo'),
(793, '08', '03', '06', 'Limatambo'),
(794, '08', '03', '07', 'Mollepata'),
(795, '08', '03', '08', 'Pucyura'),
(796, '08', '03', '09', 'Zurite'),
(797, '08', '04', '00', 'Calca'),
(798, '08', '04', '01', 'Calca'),
(799, '08', '04', '02', 'Coya'),
(800, '08', '04', '03', 'Lamay'),
(801, '08', '04', '04', 'Lares'),
(802, '08', '04', '05', 'Pisac'),
(803, '08', '04', '06', 'San Salvador'),
(804, '08', '04', '07', 'Taray'),
(805, '08', '04', '08', 'Yanatile'),
(806, '08', '05', '00', 'Canas'),
(807, '08', '05', '01', 'Yanaoca'),
(808, '08', '05', '02', 'Checca'),
(809, '08', '05', '03', 'Kunturkanki'),
(810, '08', '05', '04', 'Langui'),
(811, '08', '05', '05', 'Layo'),
(812, '08', '05', '06', 'Pampamarca'),
(813, '08', '05', '07', 'Quehue'),
(814, '08', '05', '08', 'Tupac Amaru'),
(815, '08', '06', '00', 'Canchis'),
(816, '08', '06', '01', 'Sicuani'),
(817, '08', '06', '02', 'Checacupe'),
(818, '08', '06', '03', 'Combapata'),
(819, '08', '06', '04', 'Marangani'),
(820, '08', '06', '05', 'Pitumarca'),
(821, '08', '06', '06', 'San Pablo'),
(822, '08', '06', '07', 'San Pedro'),
(823, '08', '06', '08', 'Tinta'),
(824, '08', '07', '00', 'Chumbivilcas'),
(825, '08', '07', '01', 'Santo Tomas'),
(826, '08', '07', '02', 'Capacmarca'),
(827, '08', '07', '03', 'Chamaca'),
(828, '08', '07', '04', 'Colquemarca'),
(829, '08', '07', '05', 'Livitaca'),
(830, '08', '07', '06', 'Llusco'),
(831, '08', '07', '07', 'Quiñota'),
(832, '08', '07', '08', 'Velille'),
(833, '08', '08', '00', 'Espinar'),
(834, '08', '08', '01', 'Espinar'),
(835, '08', '08', '02', 'Condoroma'),
(836, '08', '08', '03', 'Coporaque'),
(837, '08', '08', '04', 'Ocoruro'),
(838, '08', '08', '05', 'Pallpata'),
(839, '08', '08', '06', 'Pichigua'),
(840, '08', '08', '07', 'Suyckutambo'),
(841, '08', '08', '08', 'Alto Pichigua'),
(842, '08', '09', '00', 'La Convención'),
(843, '08', '09', '01', 'Santa Ana'),
(844, '08', '09', '02', 'Echarate'),
(845, '08', '09', '03', 'Huayopata'),
(846, '08', '09', '04', 'Maranura'),
(847, '08', '09', '05', 'Ocobamba'),
(848, '08', '09', '06', 'Quellouno'),
(849, '08', '09', '07', 'Kimbiri'),
(850, '08', '09', '08', 'Santa Teresa'),
(851, '08', '09', '09', 'Vilcabamba'),
(852, '08', '09', '10', 'Pichari'),
(853, '08', '09', '11', 'Inkawasi'),
(854, '08', '09', '12', 'Villa Virgen'),
(855, '08', '09', '13', 'Villa Kintiarina'),
(856, '08', '10', '00', 'Paruro'),
(857, '08', '10', '01', 'Paruro'),
(858, '08', '10', '02', 'Accha'),
(859, '08', '10', '03', 'Ccapi'),
(860, '08', '10', '04', 'Colcha'),
(861, '08', '10', '05', 'Huanoquite'),
(862, '08', '10', '06', 'Omacha'),
(863, '08', '10', '07', 'Paccaritambo'),
(864, '08', '10', '08', 'Pillpinto'),
(865, '08', '10', '09', 'Yaurisque'),
(866, '08', '11', '00', 'Paucartambo'),
(867, '08', '11', '01', 'Paucartambo'),
(868, '08', '11', '02', 'Caicay'),
(869, '08', '11', '03', 'Challabamba'),
(870, '08', '11', '04', 'Colquepata'),
(871, '08', '11', '05', 'Huancarani'),
(872, '08', '11', '06', 'Kosñipata'),
(873, '08', '12', '00', 'Quispicanchi'),
(874, '08', '12', '01', 'Urcos'),
(875, '08', '12', '02', 'Andahuaylillas'),
(876, '08', '12', '03', 'Camanti'),
(877, '08', '12', '04', 'Ccarhuayo'),
(878, '08', '12', '05', 'Ccatca'),
(879, '08', '12', '06', 'Cusipata'),
(880, '08', '12', '07', 'Huaro'),
(881, '08', '12', '08', 'Lucre'),
(882, '08', '12', '09', 'Marcapata'),
(883, '08', '12', '10', 'Ocongate'),
(884, '08', '12', '11', 'Oropesa'),
(885, '08', '12', '12', 'Quiquijana'),
(886, '08', '13', '00', 'Urubamba'),
(887, '08', '13', '01', 'Urubamba'),
(888, '08', '13', '02', 'Chinchero'),
(889, '08', '13', '03', 'Huayllabamba'),
(890, '08', '13', '04', 'Machupicchu'),
(891, '08', '13', '05', 'Maras'),
(892, '08', '13', '06', 'Ollantaytambo'),
(893, '08', '13', '07', 'Yucay'),
(894, '09', '00', '00', 'Huancavelica'),
(895, '09', '01', '00', 'Huancavelica'),
(896, '09', '01', '01', 'Huancavelica'),
(897, '09', '01', '02', 'Acobambilla'),
(898, '09', '01', '03', 'Acoria'),
(899, '09', '01', '04', 'Conayca'),
(900, '09', '01', '05', 'Cuenca'),
(901, '09', '01', '06', 'Huachocolpa'),
(902, '09', '01', '07', 'Huayllahuara'),
(903, '09', '01', '08', 'Izcuchaca'),
(904, '09', '01', '09', 'Laria'),
(905, '09', '01', '10', 'Manta'),
(906, '09', '01', '11', 'Mariscal Cáceres'),
(907, '09', '01', '12', 'Moya'),
(908, '09', '01', '13', 'Nuevo Occoro'),
(909, '09', '01', '14', 'Palca'),
(910, '09', '01', '15', 'Pilchaca'),
(911, '09', '01', '16', 'Vilca'),
(912, '09', '01', '17', 'Yauli'),
(913, '09', '01', '18', 'Ascensión'),
(914, '09', '01', '19', 'Huando'),
(915, '09', '02', '00', 'Acobamba'),
(916, '09', '02', '01', 'Acobamba'),
(917, '09', '02', '02', 'Andabamba'),
(918, '09', '02', '03', 'Anta'),
(919, '09', '02', '04', 'Caja'),
(920, '09', '02', '05', 'Marcas'),
(921, '09', '02', '06', 'Paucara'),
(922, '09', '02', '07', 'Pomacocha'),
(923, '09', '02', '08', 'Rosario'),
(924, '09', '03', '00', 'Angaraes'),
(925, '09', '03', '01', 'Lircay'),
(926, '09', '03', '02', 'Anchonga'),
(927, '09', '03', '03', 'Callanmarca'),
(928, '09', '03', '04', 'Ccochaccasa'),
(929, '09', '03', '05', 'Chincho'),
(930, '09', '03', '06', 'Congalla'),
(931, '09', '03', '07', 'Huanca-Huanca'),
(932, '09', '03', '08', 'Huayllay Grande'),
(933, '09', '03', '09', 'Julcamarca'),
(934, '09', '03', '10', 'San Antonio de Antaparco'),
(935, '09', '03', '11', 'Santo Tomas de Pata'),
(936, '09', '03', '12', 'Secclla'),
(937, '09', '04', '00', 'Castrovirreyna'),
(938, '09', '04', '01', 'Castrovirreyna'),
(939, '09', '04', '02', 'Arma'),
(940, '09', '04', '03', 'Aurahua'),
(941, '09', '04', '04', 'Capillas'),
(942, '09', '04', '05', 'Chupamarca'),
(943, '09', '04', '06', 'Cocas'),
(944, '09', '04', '07', 'Huachos'),
(945, '09', '04', '08', 'Huamatambo'),
(946, '09', '04', '09', 'Mollepampa'),
(947, '09', '04', '10', 'San Juan'),
(948, '09', '04', '11', 'Santa Ana'),
(949, '09', '04', '12', 'Tantara'),
(950, '09', '04', '13', 'Ticrapo'),
(951, '09', '05', '00', 'Churcampa'),
(952, '09', '05', '01', 'Churcampa'),
(953, '09', '05', '02', 'Anco'),
(954, '09', '05', '03', 'Chinchihuasi'),
(955, '09', '05', '04', 'El Carmen'),
(956, '09', '05', '05', 'La Merced'),
(957, '09', '05', '06', 'Locroja'),
(958, '09', '05', '07', 'Paucarbamba'),
(959, '09', '05', '08', 'San Miguel de Mayocc'),
(960, '09', '05', '09', 'San Pedro de Coris'),
(961, '09', '05', '10', 'Pachamarca'),
(962, '09', '05', '11', 'Cosme'),
(963, '09', '06', '00', 'Huaytará'),
(964, '09', '06', '01', 'Huaytara'),
(965, '09', '06', '02', 'Ayavi'),
(966, '09', '06', '03', 'Córdova'),
(967, '09', '06', '04', 'Huayacundo Arma'),
(968, '09', '06', '05', 'Laramarca'),
(969, '09', '06', '06', 'Ocoyo'),
(970, '09', '06', '07', 'Pilpichaca'),
(971, '09', '06', '08', 'Querco'),
(972, '09', '06', '09', 'Quito-Arma'),
(973, '09', '06', '10', 'San Antonio de Cusicancha'),
(974, '09', '06', '11', 'San Francisco de Sangayaico'),
(975, '09', '06', '12', 'San Isidro'),
(976, '09', '06', '13', 'Santiago de Chocorvos'),
(977, '09', '06', '14', 'Santiago de Quirahuara'),
(978, '09', '06', '15', 'Santo Domingo de Capillas'),
(979, '09', '06', '16', 'Tambo'),
(980, '09', '07', '00', 'Tayacaja'),
(981, '09', '07', '01', 'Pampas'),
(982, '09', '07', '02', 'Acostambo'),
(983, '09', '07', '03', 'Acraquia'),
(984, '09', '07', '04', 'Ahuaycha'),
(985, '09', '07', '05', 'Colcabamba'),
(986, '09', '07', '06', 'Daniel Hernández'),
(987, '09', '07', '07', 'Huachocolpa'),
(988, '09', '07', '09', 'Huaribamba'),
(989, '09', '07', '10', 'Ñahuimpuquio'),
(990, '09', '07', '11', 'Pazos'),
(991, '09', '07', '13', 'Quishuar'),
(992, '09', '07', '14', 'Salcabamba'),
(993, '09', '07', '15', 'Salcahuasi'),
(994, '09', '07', '16', 'San Marcos de Rocchac'),
(995, '09', '07', '17', 'Surcubamba'),
(996, '09', '07', '18', 'Tintay Puncu'),
(997, '09', '07', '19', 'Quichuas'),
(998, '09', '07', '20', 'Andaymarca'),
(999, '09', '07', '21', 'Roble'),
(1000, '09', '07', '22', 'Pichos'),
(1001, '10', '00', '00', 'Huánuco'),
(1002, '10', '01', '00', 'Huánuco'),
(1003, '10', '01', '01', 'Huanuco'),
(1004, '10', '01', '02', 'Amarilis'),
(1005, '10', '01', '03', 'Chinchao'),
(1006, '10', '01', '04', 'Churubamba'),
(1007, '10', '01', '05', 'Margos'),
(1008, '10', '01', '06', 'Quisqui (Kichki)'),
(1009, '10', '01', '07', 'San Francisco de Cayran'),
(1010, '10', '01', '08', 'San Pedro de Chaulan'),
(1011, '10', '01', '09', 'Santa María del Valle'),
(1012, '10', '01', '10', 'Yarumayo'),
(1013, '10', '01', '11', 'Pillco Marca'),
(1014, '10', '01', '12', 'Yacus'),
(1015, '10', '01', '13', 'San Pablo de Pillao'),
(1016, '10', '02', '00', 'Ambo'),
(1017, '10', '02', '01', 'Ambo'),
(1018, '10', '02', '02', 'Cayna'),
(1019, '10', '02', '03', 'Colpas'),
(1020, '10', '02', '04', 'Conchamarca'),
(1021, '10', '02', '05', 'Huacar'),
(1022, '10', '02', '06', 'San Francisco'),
(1023, '10', '02', '07', 'San Rafael'),
(1024, '10', '02', '08', 'Tomay Kichwa'),
(1025, '10', '03', '00', 'Dos de Mayo'),
(1026, '10', '03', '01', 'La Unión'),
(1027, '10', '03', '07', 'Chuquis'),
(1028, '10', '03', '11', 'Marías'),
(1029, '10', '03', '13', 'Pachas'),
(1030, '10', '03', '16', 'Quivilla'),
(1031, '10', '03', '17', 'Ripan'),
(1032, '10', '03', '21', 'Shunqui'),
(1033, '10', '03', '22', 'Sillapata'),
(1034, '10', '03', '23', 'Yanas'),
(1035, '10', '04', '00', 'Huacaybamba'),
(1036, '10', '04', '01', 'Huacaybamba'),
(1037, '10', '04', '02', 'Canchabamba'),
(1038, '10', '04', '03', 'Cochabamba'),
(1039, '10', '04', '04', 'Pinra'),
(1040, '10', '05', '00', 'Huamalíes'),
(1041, '10', '05', '01', 'Llata'),
(1042, '10', '05', '02', 'Arancay'),
(1043, '10', '05', '03', 'Chavín de Pariarca'),
(1044, '10', '05', '04', 'Jacas Grande'),
(1045, '10', '05', '05', 'Jircan'),
(1046, '10', '05', '06', 'Miraflores'),
(1047, '10', '05', '07', 'Monzón'),
(1048, '10', '05', '08', 'Punchao'),
(1049, '10', '05', '09', 'Puños'),
(1050, '10', '05', '10', 'Singa'),
(1051, '10', '05', '11', 'Tantamayo'),
(1052, '10', '06', '00', 'Leoncio Prado'),
(1053, '10', '06', '01', 'Rupa-Rupa'),
(1054, '10', '06', '02', 'Daniel Alomía Robles'),
(1055, '10', '06', '03', 'Hermílio Valdizan'),
(1056, '10', '06', '04', 'José Crespo y Castillo'),
(1057, '10', '06', '05', 'Luyando'),
(1058, '10', '06', '06', 'Mariano Damaso Beraun'),
(1059, '10', '06', '07', 'Pucayacu'),
(1060, '10', '06', '08', 'Castillo Grande'),
(1061, '10', '07', '00', 'Marañón'),
(1062, '10', '07', '01', 'Huacrachuco'),
(1063, '10', '07', '02', 'Cholon'),
(1064, '10', '07', '03', 'San Buenaventura'),
(1065, '10', '07', '04', 'La Morada'),
(1066, '10', '07', '05', 'Santa Rosa de Alto Yanajanca'),
(1067, '10', '08', '00', 'Pachitea'),
(1068, '10', '08', '01', 'Panao'),
(1069, '10', '08', '02', 'Chaglla'),
(1070, '10', '08', '03', 'Molino'),
(1071, '10', '08', '04', 'Umari'),
(1072, '10', '09', '00', 'Puerto Inca'),
(1073, '10', '09', '01', 'Puerto Inca'),
(1074, '10', '09', '02', 'Codo del Pozuzo'),
(1075, '10', '09', '03', 'Honoria'),
(1076, '10', '09', '04', 'Tournavista'),
(1077, '10', '09', '05', 'Yuyapichis'),
(1078, '10', '10', '00', 'Lauricocha'),
(1079, '10', '10', '01', 'Jesús'),
(1080, '10', '10', '02', 'Baños'),
(1081, '10', '10', '03', 'Jivia'),
(1082, '10', '10', '04', 'Queropalca'),
(1083, '10', '10', '05', 'Rondos'),
(1084, '10', '10', '06', 'San Francisco de Asís'),
(1085, '10', '10', '07', 'San Miguel de Cauri'),
(1086, '10', '11', '00', 'Yarowilca'),
(1087, '10', '11', '01', 'Chavinillo'),
(1088, '10', '11', '02', 'Cahuac'),
(1089, '10', '11', '03', 'Chacabamba'),
(1090, '10', '11', '04', 'Aparicio Pomares'),
(1091, '10', '11', '05', 'Jacas Chico'),
(1092, '10', '11', '06', 'Obas'),
(1093, '10', '11', '07', 'Pampamarca'),
(1094, '10', '11', '08', 'Choras'),
(1095, '11', '00', '00', 'Ica'),
(1096, '11', '01', '00', 'Ica'),
(1097, '11', '01', '01', 'Ica'),
(1098, '11', '01', '02', 'La Tinguiña'),
(1099, '11', '01', '03', 'Los Aquijes'),
(1100, '11', '01', '04', 'Ocucaje'),
(1101, '11', '01', '05', 'Pachacutec'),
(1102, '11', '01', '06', 'Parcona'),
(1103, '11', '01', '07', 'Pueblo Nuevo'),
(1104, '11', '01', '08', 'Salas'),
(1105, '11', '01', '09', 'San José de Los Molinos'),
(1106, '11', '01', '10', 'San Juan Bautista'),
(1107, '11', '01', '11', 'Santiago'),
(1108, '11', '01', '12', 'Subtanjalla'),
(1109, '11', '01', '13', 'Tate'),
(1110, '11', '01', '14', 'Yauca del Rosario'),
(1111, '11', '02', '00', 'Chincha'),
(1112, '11', '02', '01', 'Chincha Alta'),
(1113, '11', '02', '02', 'Alto Laran'),
(1114, '11', '02', '03', 'Chavin'),
(1115, '11', '02', '04', 'Chincha Baja'),
(1116, '11', '02', '05', 'El Carmen'),
(1117, '11', '02', '06', 'Grocio Prado'),
(1118, '11', '02', '07', 'Pueblo Nuevo'),
(1119, '11', '02', '08', 'San Juan de Yanac'),
(1120, '11', '02', '09', 'San Pedro de Huacarpana'),
(1121, '11', '02', '10', 'Sunampe'),
(1122, '11', '02', '11', 'Tambo de Mora'),
(1123, '11', '03', '00', 'Nazca'),
(1124, '11', '03', '01', 'Nasca'),
(1125, '11', '03', '02', 'Changuillo'),
(1126, '11', '03', '03', 'El Ingenio'),
(1127, '11', '03', '04', 'Marcona'),
(1128, '11', '03', '05', 'Vista Alegre'),
(1129, '11', '04', '00', 'Palpa'),
(1130, '11', '04', '01', 'Palpa'),
(1131, '11', '04', '02', 'Llipata'),
(1132, '11', '04', '03', 'Río Grande'),
(1133, '11', '04', '04', 'Santa Cruz'),
(1134, '11', '04', '05', 'Tibillo'),
(1135, '11', '05', '00', 'Pisco'),
(1136, '11', '05', '01', 'Pisco'),
(1137, '11', '05', '02', 'Huancano'),
(1138, '11', '05', '03', 'Humay'),
(1139, '11', '05', '04', 'Independencia'),
(1140, '11', '05', '05', 'Paracas'),
(1141, '11', '05', '06', 'San Andrés'),
(1142, '11', '05', '07', 'San Clemente'),
(1143, '11', '05', '08', 'Tupac Amaru Inca'),
(1144, '12', '00', '00', 'Junín'),
(1145, '12', '01', '00', 'Huancayo'),
(1146, '12', '01', '01', 'Huancayo'),
(1147, '12', '01', '04', 'Carhuacallanga'),
(1148, '12', '01', '05', 'Chacapampa'),
(1149, '12', '01', '06', 'Chicche'),
(1150, '12', '01', '07', 'Chilca'),
(1151, '12', '01', '08', 'Chongos Alto'),
(1152, '12', '01', '11', 'Chupuro'),
(1153, '12', '01', '12', 'Colca'),
(1154, '12', '01', '13', 'Cullhuas'),
(1155, '12', '01', '14', 'El Tambo'),
(1156, '12', '01', '16', 'Huacrapuquio'),
(1157, '12', '01', '17', 'Hualhuas'),
(1158, '12', '01', '19', 'Huancan'),
(1159, '12', '01', '20', 'Huasicancha'),
(1160, '12', '01', '21', 'Huayucachi'),
(1161, '12', '01', '22', 'Ingenio'),
(1162, '12', '01', '24', 'Pariahuanca'),
(1163, '12', '01', '25', 'Pilcomayo'),
(1164, '12', '01', '26', 'Pucara'),
(1165, '12', '01', '27', 'Quichuay'),
(1166, '12', '01', '28', 'Quilcas'),
(1167, '12', '01', '29', 'San Agustín'),
(1168, '12', '01', '30', 'San Jerónimo de Tunan'),
(1169, '12', '01', '32', 'Saño'),
(1170, '12', '01', '33', 'Sapallanga'),
(1171, '12', '01', '34', 'Sicaya'),
(1172, '12', '01', '35', 'Santo Domingo de Acobamba'),
(1173, '12', '01', '36', 'Viques'),
(1174, '12', '02', '00', 'Concepción'),
(1175, '12', '02', '01', 'Concepción'),
(1176, '12', '02', '02', 'Aco'),
(1177, '12', '02', '03', 'Andamarca'),
(1178, '12', '02', '04', 'Chambara'),
(1179, '12', '02', '05', 'Cochas'),
(1180, '12', '02', '06', 'Comas'),
(1181, '12', '02', '07', 'Heroínas Toledo'),
(1182, '12', '02', '08', 'Manzanares'),
(1183, '12', '02', '09', 'Mariscal Castilla'),
(1184, '12', '02', '10', 'Matahuasi'),
(1185, '12', '02', '11', 'Mito'),
(1186, '12', '02', '12', 'Nueve de Julio'),
(1187, '12', '02', '13', 'Orcotuna'),
(1188, '12', '02', '14', 'San José de Quero'),
(1189, '12', '02', '15', 'Santa Rosa de Ocopa'),
(1190, '12', '03', '00', 'Chanchamayo'),
(1191, '12', '03', '01', 'Chanchamayo'),
(1192, '12', '03', '02', 'Perene'),
(1193, '12', '03', '03', 'Pichanaqui'),
(1194, '12', '03', '04', 'San Luis de Shuaro'),
(1195, '12', '03', '05', 'San Ramón'),
(1196, '12', '03', '06', 'Vitoc'),
(1197, '12', '04', '00', 'Jauja'),
(1198, '12', '04', '01', 'Jauja'),
(1199, '12', '04', '02', 'Acolla'),
(1200, '12', '04', '03', 'Apata'),
(1201, '12', '04', '04', 'Ataura'),
(1202, '12', '04', '05', 'Canchayllo'),
(1203, '12', '04', '06', 'Curicaca'),
(1204, '12', '04', '07', 'El Mantaro'),
(1205, '12', '04', '08', 'Huamali'),
(1206, '12', '04', '09', 'Huaripampa'),
(1207, '12', '04', '10', 'Huertas'),
(1208, '12', '04', '11', 'Janjaillo'),
(1209, '12', '04', '12', 'Julcán'),
(1210, '12', '04', '13', 'Leonor Ordóñez'),
(1211, '12', '04', '14', 'Llocllapampa'),
(1212, '12', '04', '15', 'Marco'),
(1213, '12', '04', '16', 'Masma'),
(1214, '12', '04', '17', 'Masma Chicche'),
(1215, '12', '04', '18', 'Molinos'),
(1216, '12', '04', '19', 'Monobamba'),
(1217, '12', '04', '20', 'Muqui'),
(1218, '12', '04', '21', 'Muquiyauyo'),
(1219, '12', '04', '22', 'Paca'),
(1220, '12', '04', '23', 'Paccha'),
(1221, '12', '04', '24', 'Pancan'),
(1222, '12', '04', '25', 'Parco'),
(1223, '12', '04', '26', 'Pomacancha'),
(1224, '12', '04', '27', 'Ricran'),
(1225, '12', '04', '28', 'San Lorenzo'),
(1226, '12', '04', '29', 'San Pedro de Chunan'),
(1227, '12', '04', '30', 'Sausa'),
(1228, '12', '04', '31', 'Sincos'),
(1229, '12', '04', '32', 'Tunan Marca'),
(1230, '12', '04', '33', 'Yauli'),
(1231, '12', '04', '34', 'Yauyos'),
(1232, '12', '05', '00', 'Junín'),
(1233, '12', '05', '01', 'Junin'),
(1234, '12', '05', '02', 'Carhuamayo'),
(1235, '12', '05', '03', 'Ondores'),
(1236, '12', '05', '04', 'Ulcumayo'),
(1237, '12', '06', '00', 'Satipo'),
(1238, '12', '06', '01', 'Satipo'),
(1239, '12', '06', '02', 'Coviriali'),
(1240, '12', '06', '03', 'Llaylla'),
(1241, '12', '06', '04', 'Mazamari'),
(1242, '12', '06', '05', 'Pampa Hermosa'),
(1243, '12', '06', '06', 'Pangoa'),
(1244, '12', '06', '07', 'Río Negro'),
(1245, '12', '06', '08', 'Río Tambo'),
(1246, '12', '06', '09', 'Vizcatan del Ene'),
(1247, '12', '07', '00', 'Tarma'),
(1248, '12', '07', '01', 'Tarma'),
(1249, '12', '07', '02', 'Acobamba'),
(1250, '12', '07', '03', 'Huaricolca'),
(1251, '12', '07', '04', 'Huasahuasi'),
(1252, '12', '07', '05', 'La Unión'),
(1253, '12', '07', '06', 'Palca'),
(1254, '12', '07', '07', 'Palcamayo'),
(1255, '12', '07', '08', 'San Pedro de Cajas'),
(1256, '12', '07', '09', 'Tapo'),
(1257, '12', '08', '00', 'Yauli'),
(1258, '12', '08', '01', 'La Oroya'),
(1259, '12', '08', '02', 'Chacapalpa'),
(1260, '12', '08', '03', 'Huay-Huay'),
(1261, '12', '08', '04', 'Marcapomacocha'),
(1262, '12', '08', '05', 'Morococha'),
(1263, '12', '08', '06', 'Paccha'),
(1264, '12', '08', '07', 'Santa Bárbara de Carhuacayan'),
(1265, '12', '08', '08', 'Santa Rosa de Sacco'),
(1266, '12', '08', '09', 'Suitucancha'),
(1267, '12', '08', '10', 'Yauli'),
(1268, '12', '09', '00', 'Chupaca'),
(1269, '12', '09', '01', 'Chupaca'),
(1270, '12', '09', '02', 'Ahuac'),
(1271, '12', '09', '03', 'Chongos Bajo'),
(1272, '12', '09', '04', 'Huachac'),
(1273, '12', '09', '05', 'Huamancaca Chico'),
(1274, '12', '09', '06', 'San Juan de Iscos'),
(1275, '12', '09', '07', 'San Juan de Jarpa'),
(1276, '12', '09', '08', 'Tres de Diciembre'),
(1277, '12', '09', '09', 'Yanacancha'),
(1278, '13', '00', '00', 'La Libertad'),
(1279, '13', '01', '00', 'Trujillo'),
(1280, '13', '01', '01', 'Trujillo'),
(1281, '13', '01', '02', 'El Porvenir'),
(1282, '13', '01', '03', 'Florencia de Mora'),
(1283, '13', '01', '04', 'Huanchaco'),
(1284, '13', '01', '05', 'La Esperanza'),
(1285, '13', '01', '06', 'Laredo'),
(1286, '13', '01', '07', 'Moche'),
(1287, '13', '01', '08', 'Poroto'),
(1288, '13', '01', '09', 'Salaverry'),
(1289, '13', '01', '10', 'Simbal'),
(1290, '13', '01', '11', 'Victor Larco Herrera'),
(1291, '13', '02', '00', 'Ascope'),
(1292, '13', '02', '01', 'Ascope'),
(1293, '13', '02', '02', 'Chicama'),
(1294, '13', '02', '03', 'Chocope'),
(1295, '13', '02', '04', 'Magdalena de Cao'),
(1296, '13', '02', '05', 'Paijan'),
(1297, '13', '02', '06', 'Rázuri'),
(1298, '13', '02', '07', 'Santiago de Cao'),
(1299, '13', '02', '08', 'Casa Grande'),
(1300, '13', '03', '00', 'Bolívar'),
(1301, '13', '03', '01', 'Bolívar'),
(1302, '13', '03', '02', 'Bambamarca'),
(1303, '13', '03', '03', 'Condormarca'),
(1304, '13', '03', '04', 'Longotea'),
(1305, '13', '03', '05', 'Uchumarca'),
(1306, '13', '03', '06', 'Ucuncha'),
(1307, '13', '04', '00', 'Chepén'),
(1308, '13', '04', '01', 'Chepen'),
(1309, '13', '04', '02', 'Pacanga'),
(1310, '13', '04', '03', 'Pueblo Nuevo'),
(1311, '13', '05', '00', 'Julcán'),
(1312, '13', '05', '01', 'Julcan'),
(1313, '13', '05', '02', 'Calamarca'),
(1314, '13', '05', '03', 'Carabamba'),
(1315, '13', '05', '04', 'Huaso'),
(1316, '13', '06', '00', 'Otuzco'),
(1317, '13', '06', '01', 'Otuzco'),
(1318, '13', '06', '02', 'Agallpampa'),
(1319, '13', '06', '04', 'Charat'),
(1320, '13', '06', '05', 'Huaranchal'),
(1321, '13', '06', '06', 'La Cuesta'),
(1322, '13', '06', '08', 'Mache'),
(1323, '13', '06', '10', 'Paranday'),
(1324, '13', '06', '11', 'Salpo'),
(1325, '13', '06', '13', 'Sinsicap'),
(1326, '13', '06', '14', 'Usquil'),
(1327, '13', '07', '00', 'Pacasmayo'),
(1328, '13', '07', '01', 'San Pedro de Lloc'),
(1329, '13', '07', '02', 'Guadalupe'),
(1330, '13', '07', '03', 'Jequetepeque'),
(1331, '13', '07', '04', 'Pacasmayo'),
(1332, '13', '07', '05', 'San José'),
(1333, '13', '08', '00', 'Pataz'),
(1334, '13', '08', '01', 'Tayabamba'),
(1335, '13', '08', '02', 'Buldibuyo'),
(1336, '13', '08', '03', 'Chillia'),
(1337, '13', '08', '04', 'Huancaspata'),
(1338, '13', '08', '05', 'Huaylillas'),
(1339, '13', '08', '06', 'Huayo'),
(1340, '13', '08', '07', 'Ongon'),
(1341, '13', '08', '08', 'Parcoy'),
(1342, '13', '08', '09', 'Pataz'),
(1343, '13', '08', '10', 'Pias'),
(1344, '13', '08', '11', 'Santiago de Challas'),
(1345, '13', '08', '12', 'Taurija'),
(1346, '13', '08', '13', 'Urpay'),
(1347, '13', '09', '00', 'Sánchez Carrión'),
(1348, '13', '09', '01', 'Huamachuco'),
(1349, '13', '09', '02', 'Chugay'),
(1350, '13', '09', '03', 'Cochorco'),
(1351, '13', '09', '04', 'Curgos'),
(1352, '13', '09', '05', 'Marcabal'),
(1353, '13', '09', '06', 'Sanagoran'),
(1354, '13', '09', '07', 'Sarin'),
(1355, '13', '09', '08', 'Sartimbamba'),
(1356, '13', '10', '00', 'Santiago de Chuco'),
(1357, '13', '10', '01', 'Santiago de Chuco'),
(1358, '13', '10', '02', 'Angasmarca'),
(1359, '13', '10', '03', 'Cachicadan'),
(1360, '13', '10', '04', 'Mollebamba'),
(1361, '13', '10', '05', 'Mollepata'),
(1362, '13', '10', '06', 'Quiruvilca'),
(1363, '13', '10', '07', 'Santa Cruz de Chuca'),
(1364, '13', '10', '08', 'Sitabamba'),
(1365, '13', '11', '00', 'Gran Chimú'),
(1366, '13', '11', '01', 'Cascas'),
(1367, '13', '11', '02', 'Lucma'),
(1368, '13', '11', '03', 'Marmot'),
(1369, '13', '11', '04', 'Sayapullo'),
(1370, '13', '12', '00', 'Virú'),
(1371, '13', '12', '01', 'Viru'),
(1372, '13', '12', '02', 'Chao'),
(1373, '13', '12', '03', 'Guadalupito'),
(1374, '14', '00', '00', 'Lambayeque');
INSERT INTO `ubigeoperu` (`id`, `departamento`, `provincia`, `distrito`, `nombre`) VALUES
(1375, '14', '01', '00', 'Chiclayo'),
(1376, '14', '01', '01', 'Chiclayo'),
(1377, '14', '01', '02', 'Chongoyape'),
(1378, '14', '01', '03', 'Eten'),
(1379, '14', '01', '04', 'Eten Puerto'),
(1380, '14', '01', '05', 'José Leonardo Ortiz'),
(1381, '14', '01', '06', 'La Victoria'),
(1382, '14', '01', '07', 'Lagunas'),
(1383, '14', '01', '08', 'Monsefu'),
(1384, '14', '01', '09', 'Nueva Arica'),
(1385, '14', '01', '10', 'Oyotun'),
(1386, '14', '01', '11', 'Picsi'),
(1387, '14', '01', '12', 'Pimentel'),
(1388, '14', '01', '13', 'Reque'),
(1389, '14', '01', '14', 'Santa Rosa'),
(1390, '14', '01', '15', 'Saña'),
(1391, '14', '01', '16', 'Cayalti'),
(1392, '14', '01', '17', 'Patapo'),
(1393, '14', '01', '18', 'Pomalca'),
(1394, '14', '01', '19', 'Pucala'),
(1395, '14', '01', '20', 'Tuman'),
(1396, '14', '02', '00', 'Ferreñafe'),
(1397, '14', '02', '01', 'Ferreñafe'),
(1398, '14', '02', '02', 'Cañaris'),
(1399, '14', '02', '03', 'Incahuasi'),
(1400, '14', '02', '04', 'Manuel Antonio Mesones Muro'),
(1401, '14', '02', '05', 'Pitipo'),
(1402, '14', '02', '06', 'Pueblo Nuevo'),
(1403, '14', '03', '00', 'Lambayeque'),
(1404, '14', '03', '01', 'Lambayeque'),
(1405, '14', '03', '02', 'Chochope'),
(1406, '14', '03', '03', 'Illimo'),
(1407, '14', '03', '04', 'Jayanca'),
(1408, '14', '03', '05', 'Mochumi'),
(1409, '14', '03', '06', 'Morrope'),
(1410, '14', '03', '07', 'Motupe'),
(1411, '14', '03', '08', 'Olmos'),
(1412, '14', '03', '09', 'Pacora'),
(1413, '14', '03', '10', 'Salas'),
(1414, '14', '03', '11', 'San José'),
(1415, '14', '03', '12', 'Tucume'),
(1416, '15', '00', '00', 'Lima'),
(1417, '15', '01', '00', 'Lima'),
(1418, '15', '01', '01', 'Lima'),
(1419, '15', '01', '02', 'Ancón'),
(1420, '15', '01', '03', 'Ate'),
(1421, '15', '01', '04', 'Barranco'),
(1422, '15', '01', '05', 'Breña'),
(1423, '15', '01', '06', 'Carabayllo'),
(1424, '15', '01', '07', 'Chaclacayo'),
(1425, '15', '01', '08', 'Chorrillos'),
(1426, '15', '01', '09', 'Cieneguilla'),
(1427, '15', '01', '10', 'Comas'),
(1428, '15', '01', '11', 'El Agustino'),
(1429, '15', '01', '12', 'Independencia'),
(1430, '15', '01', '13', 'Jesús María'),
(1431, '15', '01', '14', 'La Molina'),
(1432, '15', '01', '15', 'La Victoria'),
(1433, '15', '01', '16', 'Lince'),
(1434, '15', '01', '17', 'Los Olivos'),
(1435, '15', '01', '18', 'Lurigancho'),
(1436, '15', '01', '19', 'Lurin'),
(1437, '15', '01', '20', 'Magdalena del Mar'),
(1438, '15', '01', '21', 'Pueblo Libre'),
(1439, '15', '01', '22', 'Miraflores'),
(1440, '15', '01', '23', 'Pachacamac'),
(1441, '15', '01', '24', 'Pucusana'),
(1442, '15', '01', '25', 'Puente Piedra'),
(1443, '15', '01', '26', 'Punta Hermosa'),
(1444, '15', '01', '27', 'Punta Negra'),
(1445, '15', '01', '28', 'Rímac'),
(1446, '15', '01', '29', 'San Bartolo'),
(1447, '15', '01', '30', 'San Borja'),
(1448, '15', '01', '31', 'San Isidro'),
(1449, '15', '01', '32', 'San Juan de Lurigancho'),
(1450, '15', '01', '33', 'San Juan de Miraflores'),
(1451, '15', '01', '34', 'San Luis'),
(1452, '15', '01', '35', 'San Martín de Porres'),
(1453, '15', '01', '36', 'San Miguel'),
(1454, '15', '01', '37', 'Santa Anita'),
(1455, '15', '01', '38', 'Santa María del Mar'),
(1456, '15', '01', '39', 'Santa Rosa'),
(1457, '15', '01', '40', 'Santiago de Surco'),
(1458, '15', '01', '41', 'Surquillo'),
(1459, '15', '01', '42', 'Villa El Salvador'),
(1460, '15', '01', '43', 'Villa María del Triunfo'),
(1461, '15', '02', '00', 'Barranca'),
(1462, '15', '02', '01', 'Barranca'),
(1463, '15', '02', '02', 'Paramonga'),
(1464, '15', '02', '03', 'Pativilca'),
(1465, '15', '02', '04', 'Supe'),
(1466, '15', '02', '05', 'Supe Puerto'),
(1467, '15', '03', '00', 'Cajatambo'),
(1468, '15', '03', '01', 'Cajatambo'),
(1469, '15', '03', '02', 'Copa'),
(1470, '15', '03', '03', 'Gorgor'),
(1471, '15', '03', '04', 'Huancapon'),
(1472, '15', '03', '05', 'Manas'),
(1473, '15', '04', '00', 'Canta'),
(1474, '15', '04', '01', 'Canta'),
(1475, '15', '04', '02', 'Arahuay'),
(1476, '15', '04', '03', 'Huamantanga'),
(1477, '15', '04', '04', 'Huaros'),
(1478, '15', '04', '05', 'Lachaqui'),
(1479, '15', '04', '06', 'San Buenaventura'),
(1480, '15', '04', '07', 'Santa Rosa de Quives'),
(1481, '15', '05', '00', 'Cañete'),
(1482, '15', '05', '01', 'San Vicente de Cañete'),
(1483, '15', '05', '02', 'Asia'),
(1484, '15', '05', '03', 'Calango'),
(1485, '15', '05', '04', 'Cerro Azul'),
(1486, '15', '05', '05', 'Chilca'),
(1487, '15', '05', '06', 'Coayllo'),
(1488, '15', '05', '07', 'Imperial'),
(1489, '15', '05', '08', 'Lunahuana'),
(1490, '15', '05', '09', 'Mala'),
(1491, '15', '05', '10', 'Nuevo Imperial'),
(1492, '15', '05', '11', 'Pacaran'),
(1493, '15', '05', '12', 'Quilmana'),
(1494, '15', '05', '13', 'San Antonio'),
(1495, '15', '05', '14', 'San Luis'),
(1496, '15', '05', '15', 'Santa Cruz de Flores'),
(1497, '15', '05', '16', 'Zúñiga'),
(1498, '15', '06', '00', 'Huaral'),
(1499, '15', '06', '01', 'Huaral'),
(1500, '15', '06', '02', 'Atavillos Alto'),
(1501, '15', '06', '03', 'Atavillos Bajo'),
(1502, '15', '06', '04', 'Aucallama'),
(1503, '15', '06', '05', 'Chancay'),
(1504, '15', '06', '06', 'Ihuari'),
(1505, '15', '06', '07', 'Lampian'),
(1506, '15', '06', '08', 'Pacaraos'),
(1507, '15', '06', '09', 'San Miguel de Acos'),
(1508, '15', '06', '10', 'Santa Cruz de Andamarca'),
(1509, '15', '06', '11', 'Sumbilca'),
(1510, '15', '06', '12', 'Veintisiete de Noviembre'),
(1511, '15', '07', '00', 'Huarochirí'),
(1512, '15', '07', '01', 'Matucana'),
(1513, '15', '07', '02', 'Antioquia'),
(1514, '15', '07', '03', 'Callahuanca'),
(1515, '15', '07', '04', 'Carampoma'),
(1516, '15', '07', '05', 'Chicla'),
(1517, '15', '07', '06', 'Cuenca'),
(1518, '15', '07', '07', 'Huachupampa'),
(1519, '15', '07', '08', 'Huanza'),
(1520, '15', '07', '09', 'Huarochiri'),
(1521, '15', '07', '10', 'Lahuaytambo'),
(1522, '15', '07', '11', 'Langa'),
(1523, '15', '07', '12', 'Laraos'),
(1524, '15', '07', '13', 'Mariatana'),
(1525, '15', '07', '14', 'Ricardo Palma'),
(1526, '15', '07', '15', 'San Andrés de Tupicocha'),
(1527, '15', '07', '16', 'San Antonio'),
(1528, '15', '07', '17', 'San Bartolomé'),
(1529, '15', '07', '18', 'San Damian'),
(1530, '15', '07', '19', 'San Juan de Iris'),
(1531, '15', '07', '20', 'San Juan de Tantaranche'),
(1532, '15', '07', '21', 'San Lorenzo de Quinti'),
(1533, '15', '07', '22', 'San Mateo'),
(1534, '15', '07', '23', 'San Mateo de Otao'),
(1535, '15', '07', '24', 'San Pedro de Casta'),
(1536, '15', '07', '25', 'San Pedro de Huancayre'),
(1537, '15', '07', '26', 'Sangallaya'),
(1538, '15', '07', '27', 'Santa Cruz de Cocachacra'),
(1539, '15', '07', '28', 'Santa Eulalia'),
(1540, '15', '07', '29', 'Santiago de Anchucaya'),
(1541, '15', '07', '30', 'Santiago de Tuna'),
(1542, '15', '07', '31', 'Santo Domingo de Los Olleros'),
(1543, '15', '07', '32', 'Surco'),
(1544, '15', '08', '00', 'Huaura'),
(1545, '15', '08', '01', 'Huacho'),
(1546, '15', '08', '02', 'Ambar'),
(1547, '15', '08', '03', 'Caleta de Carquin'),
(1548, '15', '08', '04', 'Checras'),
(1549, '15', '08', '05', 'Hualmay'),
(1550, '15', '08', '06', 'Huaura'),
(1551, '15', '08', '07', 'Leoncio Prado'),
(1552, '15', '08', '08', 'Paccho'),
(1553, '15', '08', '09', 'Santa Leonor'),
(1554, '15', '08', '10', 'Santa María'),
(1555, '15', '08', '11', 'Sayan'),
(1556, '15', '08', '12', 'Vegueta'),
(1557, '15', '09', '00', 'Oyón'),
(1558, '15', '09', '01', 'Oyon'),
(1559, '15', '09', '02', 'Andajes'),
(1560, '15', '09', '03', 'Caujul'),
(1561, '15', '09', '04', 'Cochamarca'),
(1562, '15', '09', '05', 'Navan'),
(1563, '15', '09', '06', 'Pachangara'),
(1564, '15', '10', '00', 'Yauyos'),
(1565, '15', '10', '01', 'Yauyos'),
(1566, '15', '10', '02', 'Alis'),
(1567, '15', '10', '03', 'Allauca'),
(1568, '15', '10', '04', 'Ayaviri'),
(1569, '15', '10', '05', 'Azángaro'),
(1570, '15', '10', '06', 'Cacra'),
(1571, '15', '10', '07', 'Carania'),
(1572, '15', '10', '08', 'Catahuasi'),
(1573, '15', '10', '09', 'Chocos'),
(1574, '15', '10', '10', 'Cochas'),
(1575, '15', '10', '11', 'Colonia'),
(1576, '15', '10', '12', 'Hongos'),
(1577, '15', '10', '13', 'Huampara'),
(1578, '15', '10', '14', 'Huancaya'),
(1579, '15', '10', '15', 'Huangascar'),
(1580, '15', '10', '16', 'Huantan'),
(1581, '15', '10', '17', 'Huañec'),
(1582, '15', '10', '18', 'Laraos'),
(1583, '15', '10', '19', 'Lincha'),
(1584, '15', '10', '20', 'Madean'),
(1585, '15', '10', '21', 'Miraflores'),
(1586, '15', '10', '22', 'Omas'),
(1587, '15', '10', '23', 'Putinza'),
(1588, '15', '10', '24', 'Quinches'),
(1589, '15', '10', '25', 'Quinocay'),
(1590, '15', '10', '26', 'San Joaquín'),
(1591, '15', '10', '27', 'San Pedro de Pilas'),
(1592, '15', '10', '28', 'Tanta'),
(1593, '15', '10', '29', 'Tauripampa'),
(1594, '15', '10', '30', 'Tomas'),
(1595, '15', '10', '31', 'Tupe'),
(1596, '15', '10', '32', 'Viñac'),
(1597, '15', '10', '33', 'Vitis'),
(1598, '16', '00', '00', 'Loreto'),
(1599, '16', '01', '00', 'Maynas'),
(1600, '16', '01', '01', 'Iquitos'),
(1601, '16', '01', '02', 'Alto Nanay'),
(1602, '16', '01', '03', 'Fernando Lores'),
(1603, '16', '01', '04', 'Indiana'),
(1604, '16', '01', '05', 'Las Amazonas'),
(1605, '16', '01', '06', 'Mazan'),
(1606, '16', '01', '07', 'Napo'),
(1607, '16', '01', '08', 'Punchana'),
(1608, '16', '01', '10', 'Torres Causana'),
(1609, '16', '01', '12', 'Belén'),
(1610, '16', '01', '13', 'San Juan Bautista'),
(1611, '16', '02', '00', 'Alto Amazonas'),
(1612, '16', '02', '01', 'Yurimaguas'),
(1613, '16', '02', '02', 'Balsapuerto'),
(1614, '16', '02', '05', 'Jeberos'),
(1615, '16', '02', '06', 'Lagunas'),
(1616, '16', '02', '10', 'Santa Cruz'),
(1617, '16', '02', '11', 'Teniente Cesar López Rojas'),
(1618, '16', '03', '00', 'Loreto'),
(1619, '16', '03', '01', 'Nauta'),
(1620, '16', '03', '02', 'Parinari'),
(1621, '16', '03', '03', 'Tigre'),
(1622, '16', '03', '04', 'Trompeteros'),
(1623, '16', '03', '05', 'Urarinas'),
(1624, '16', '04', '00', 'Mariscal Ramón Castilla'),
(1625, '16', '04', '01', 'Ramón Castilla'),
(1626, '16', '04', '02', 'Pebas'),
(1627, '16', '04', '03', 'Yavari'),
(1628, '16', '04', '04', 'San Pablo'),
(1629, '16', '05', '00', 'Requena'),
(1630, '16', '05', '01', 'Requena'),
(1631, '16', '05', '02', 'Alto Tapiche'),
(1632, '16', '05', '03', 'Capelo'),
(1633, '16', '05', '04', 'Emilio San Martín'),
(1634, '16', '05', '05', 'Maquia'),
(1635, '16', '05', '06', 'Puinahua'),
(1636, '16', '05', '07', 'Saquena'),
(1637, '16', '05', '08', 'Soplin'),
(1638, '16', '05', '09', 'Tapiche'),
(1639, '16', '05', '10', 'Jenaro Herrera'),
(1640, '16', '05', '11', 'Yaquerana'),
(1641, '16', '06', '00', 'Ucayali'),
(1642, '16', '06', '01', 'Contamana'),
(1643, '16', '06', '02', 'Inahuaya'),
(1644, '16', '06', '03', 'Padre Márquez'),
(1645, '16', '06', '04', 'Pampa Hermosa'),
(1646, '16', '06', '05', 'Sarayacu'),
(1647, '16', '06', '06', 'Vargas Guerra'),
(1648, '16', '07', '00', 'Datem del Marañón'),
(1649, '16', '07', '01', 'Barranca'),
(1650, '16', '07', '02', 'Cahuapanas'),
(1651, '16', '07', '03', 'Manseriche'),
(1652, '16', '07', '04', 'Morona'),
(1653, '16', '07', '05', 'Pastaza'),
(1654, '16', '07', '06', 'Andoas'),
(1655, '16', '08', '00', 'Putumayo'),
(1656, '16', '08', '01', 'Putumayo'),
(1657, '16', '08', '02', 'Rosa Panduro'),
(1658, '16', '08', '03', 'Teniente Manuel Clavero'),
(1659, '16', '08', '04', 'Yaguas'),
(1660, '17', '00', '00', 'Madre de Dios'),
(1661, '17', '01', '00', 'Tambopata'),
(1662, '17', '01', '01', 'Tambopata'),
(1663, '17', '01', '02', 'Inambari'),
(1664, '17', '01', '03', 'Las Piedras'),
(1665, '17', '01', '04', 'Laberinto'),
(1666, '17', '02', '00', 'Manu'),
(1667, '17', '02', '01', 'Manu'),
(1668, '17', '02', '02', 'Fitzcarrald'),
(1669, '17', '02', '03', 'Madre de Dios'),
(1670, '17', '02', '04', 'Huepetuhe'),
(1671, '17', '03', '00', 'Tahuamanu'),
(1672, '17', '03', '01', 'Iñapari'),
(1673, '17', '03', '02', 'Iberia'),
(1674, '17', '03', '03', 'Tahuamanu'),
(1675, '18', '00', '00', 'Moquegua'),
(1676, '18', '01', '00', 'Mariscal Nieto'),
(1677, '18', '01', '01', 'Moquegua'),
(1678, '18', '01', '02', 'Carumas'),
(1679, '18', '01', '03', 'Cuchumbaya'),
(1680, '18', '01', '04', 'Samegua'),
(1681, '18', '01', '05', 'San Cristóbal'),
(1682, '18', '01', '06', 'Torata'),
(1683, '18', '02', '00', 'General Sánchez Cerro'),
(1684, '18', '02', '01', 'Omate'),
(1685, '18', '02', '02', 'Chojata'),
(1686, '18', '02', '03', 'Coalaque'),
(1687, '18', '02', '04', 'Ichuña'),
(1688, '18', '02', '05', 'La Capilla'),
(1689, '18', '02', '06', 'Lloque'),
(1690, '18', '02', '07', 'Matalaque'),
(1691, '18', '02', '08', 'Puquina'),
(1692, '18', '02', '09', 'Quinistaquillas'),
(1693, '18', '02', '10', 'Ubinas'),
(1694, '18', '02', '11', 'Yunga'),
(1695, '18', '03', '00', 'Ilo'),
(1696, '18', '03', '01', 'Ilo'),
(1697, '18', '03', '02', 'El Algarrobal'),
(1698, '18', '03', '03', 'Pacocha'),
(1699, '19', '00', '00', 'Pasco'),
(1700, '19', '01', '00', 'Pasco'),
(1701, '19', '01', '01', 'Chaupimarca'),
(1702, '19', '01', '02', 'Huachon'),
(1703, '19', '01', '03', 'Huariaca'),
(1704, '19', '01', '04', 'Huayllay'),
(1705, '19', '01', '05', 'Ninacaca'),
(1706, '19', '01', '06', 'Pallanchacra'),
(1707, '19', '01', '07', 'Paucartambo'),
(1708, '19', '01', '08', 'San Francisco de Asís de Yarusya'),
(1709, '19', '01', '09', 'Simon Bolívar'),
(1710, '19', '01', '10', 'Ticlacayan'),
(1711, '19', '01', '11', 'Tinyahuarco'),
(1712, '19', '01', '12', 'Vicco'),
(1713, '19', '01', '13', 'Yanacancha'),
(1714, '19', '02', '00', 'Daniel Alcides Carrión'),
(1715, '19', '02', '01', 'Yanahuanca'),
(1716, '19', '02', '02', 'Chacayan'),
(1717, '19', '02', '03', 'Goyllarisquizga'),
(1718, '19', '02', '04', 'Paucar'),
(1719, '19', '02', '05', 'San Pedro de Pillao'),
(1720, '19', '02', '06', 'Santa Ana de Tusi'),
(1721, '19', '02', '07', 'Tapuc'),
(1722, '19', '02', '08', 'Vilcabamba'),
(1723, '19', '03', '00', 'Oxapampa'),
(1724, '19', '03', '01', 'Oxapampa'),
(1725, '19', '03', '02', 'Chontabamba'),
(1726, '19', '03', '03', 'Huancabamba'),
(1727, '19', '03', '04', 'Palcazu'),
(1728, '19', '03', '05', 'Pozuzo'),
(1729, '19', '03', '06', 'Puerto Bermúdez'),
(1730, '19', '03', '07', 'Villa Rica'),
(1731, '19', '03', '08', 'Constitución'),
(1732, '20', '00', '00', 'Piura'),
(1733, '20', '01', '00', 'Piura'),
(1734, '20', '01', '01', 'Piura'),
(1735, '20', '01', '04', 'Castilla'),
(1736, '20', '01', '05', 'Atacaos'),
(1737, '20', '01', '07', 'Cura Mori'),
(1738, '20', '01', '08', 'El Tallan'),
(1739, '20', '01', '09', 'La Arena'),
(1740, '20', '01', '10', 'La Unión'),
(1741, '20', '01', '11', 'Las Lomas'),
(1742, '20', '01', '14', 'Tambo Grande'),
(1743, '20', '01', '15', 'Veintiseis de Octubre'),
(1744, '20', '02', '00', 'Ayabaca'),
(1745, '20', '02', '01', 'Ayabaca'),
(1746, '20', '02', '02', 'Frias'),
(1747, '20', '02', '03', 'Jilili'),
(1748, '20', '02', '04', 'Lagunas'),
(1749, '20', '02', '05', 'Montero'),
(1750, '20', '02', '06', 'Pacaipampa'),
(1751, '20', '02', '07', 'Paimas'),
(1752, '20', '02', '08', 'Sapillica'),
(1753, '20', '02', '09', 'Sicchez'),
(1754, '20', '02', '10', 'Suyo'),
(1755, '20', '03', '00', 'Huancabamba'),
(1756, '20', '03', '01', 'Huancabamba'),
(1757, '20', '03', '02', 'Canchaque'),
(1758, '20', '03', '03', 'El Carmen de la Frontera'),
(1759, '20', '03', '04', 'Huarmaca'),
(1760, '20', '03', '05', 'Lalaquiz'),
(1761, '20', '03', '06', 'San Miguel de El Faique'),
(1762, '20', '03', '07', 'Sondor'),
(1763, '20', '03', '08', 'Sondorillo'),
(1764, '20', '04', '00', 'Morropón'),
(1765, '20', '04', '01', 'Chulucanas'),
(1766, '20', '04', '02', 'Buenos Aires'),
(1767, '20', '04', '03', 'Chalaco'),
(1768, '20', '04', '04', 'La Matanza'),
(1769, '20', '04', '05', 'Morropon'),
(1770, '20', '04', '06', 'Salitral'),
(1771, '20', '04', '07', 'San Juan de Bigote'),
(1772, '20', '04', '08', 'Santa Catalina de Mossa'),
(1773, '20', '04', '09', 'Santo Domingo'),
(1774, '20', '04', '10', 'Yamango'),
(1775, '20', '05', '00', 'Paita'),
(1776, '20', '05', '01', 'Paita'),
(1777, '20', '05', '02', 'Amotape'),
(1778, '20', '05', '03', 'Arenal'),
(1779, '20', '05', '04', 'Colan'),
(1780, '20', '05', '05', 'La Huaca'),
(1781, '20', '05', '06', 'Tamarindo'),
(1782, '20', '05', '07', 'Vichayal'),
(1783, '20', '06', '00', 'Sullana'),
(1784, '20', '06', '01', 'Sullana'),
(1785, '20', '06', '02', 'Bellavista'),
(1786, '20', '06', '03', 'Ignacio Escudero'),
(1787, '20', '06', '04', 'Lancones'),
(1788, '20', '06', '05', 'Marcavelica'),
(1789, '20', '06', '06', 'Miguel Checa'),
(1790, '20', '06', '07', 'Querecotillo'),
(1791, '20', '06', '08', 'Salitral'),
(1792, '20', '07', '00', 'Talara'),
(1793, '20', '07', '01', 'Pariñas'),
(1794, '20', '07', '02', 'El Alto'),
(1795, '20', '07', '03', 'La Brea'),
(1796, '20', '07', '04', 'Lobitos'),
(1797, '20', '07', '05', 'Los Organos'),
(1798, '20', '07', '06', 'Mancora'),
(1799, '20', '08', '00', 'Sechura'),
(1800, '20', '08', '01', 'Sechura'),
(1801, '20', '08', '02', 'Bellavista de la Unión'),
(1802, '20', '08', '03', 'Bernal'),
(1803, '20', '08', '04', 'Cristo Nos Valga'),
(1804, '20', '08', '05', 'Vice'),
(1805, '20', '08', '06', 'Rinconada Llicuar'),
(1806, '21', '00', '00', 'Puno'),
(1807, '21', '01', '00', 'Puno'),
(1808, '21', '01', '01', 'Puno'),
(1809, '21', '01', '02', 'Acora'),
(1810, '21', '01', '03', 'Amantani'),
(1811, '21', '01', '04', 'Atuncolla'),
(1812, '21', '01', '05', 'Capachica'),
(1813, '21', '01', '06', 'Chucuito'),
(1814, '21', '01', '07', 'Coata'),
(1815, '21', '01', '08', 'Huata'),
(1816, '21', '01', '09', 'Mañazo'),
(1817, '21', '01', '10', 'Paucarcolla'),
(1818, '21', '01', '11', 'Pichacani'),
(1819, '21', '01', '12', 'Plateria'),
(1820, '21', '01', '13', 'San Antonio'),
(1821, '21', '01', '14', 'Tiquillaca'),
(1822, '21', '01', '15', 'Vilque'),
(1823, '21', '02', '00', 'Azángaro'),
(1824, '21', '02', '01', 'Azángaro'),
(1825, '21', '02', '02', 'Achaya'),
(1826, '21', '02', '03', 'Arapa'),
(1827, '21', '02', '04', 'Asillo'),
(1828, '21', '02', '05', 'Caminaca'),
(1829, '21', '02', '06', 'Chupa'),
(1830, '21', '02', '07', 'José Domingo Choquehuanca'),
(1831, '21', '02', '08', 'Muñani'),
(1832, '21', '02', '09', 'Potoni'),
(1833, '21', '02', '10', 'Saman'),
(1834, '21', '02', '11', 'San Anton'),
(1835, '21', '02', '12', 'San José'),
(1836, '21', '02', '13', 'San Juan de Salinas'),
(1837, '21', '02', '14', 'Santiago de Pupuja'),
(1838, '21', '02', '15', 'Tirapata'),
(1839, '21', '03', '00', 'Carabaya'),
(1840, '21', '03', '01', 'Macusani'),
(1841, '21', '03', '02', 'Ajoyani'),
(1842, '21', '03', '03', 'Ayapata'),
(1843, '21', '03', '04', 'Coasa'),
(1844, '21', '03', '05', 'Corani'),
(1845, '21', '03', '06', 'Crucero'),
(1846, '21', '03', '07', 'Ituata'),
(1847, '21', '03', '08', 'Ollachea'),
(1848, '21', '03', '09', 'San Gaban'),
(1849, '21', '03', '10', 'Usicayos'),
(1850, '21', '04', '00', 'Chucuito'),
(1851, '21', '04', '01', 'Juli'),
(1852, '21', '04', '02', 'Desaguadero'),
(1853, '21', '04', '03', 'Huacullani'),
(1854, '21', '04', '04', 'Kelluyo'),
(1855, '21', '04', '05', 'Pisacoma'),
(1856, '21', '04', '06', 'Pomata'),
(1857, '21', '04', '07', 'Zepita'),
(1858, '21', '05', '00', 'El Collao'),
(1859, '21', '05', '01', 'Ilave'),
(1860, '21', '05', '02', 'Capazo'),
(1861, '21', '05', '03', 'Pilcuyo'),
(1862, '21', '05', '04', 'Santa Rosa'),
(1863, '21', '05', '05', 'Conduriri'),
(1864, '21', '06', '00', 'Huancané'),
(1865, '21', '06', '01', 'Huancane'),
(1866, '21', '06', '02', 'Cojata'),
(1867, '21', '06', '03', 'Huatasani'),
(1868, '21', '06', '04', 'Inchupalla'),
(1869, '21', '06', '05', 'Pusi'),
(1870, '21', '06', '06', 'Rosaspata'),
(1871, '21', '06', '07', 'Taraco'),
(1872, '21', '06', '08', 'Vilque Chico'),
(1873, '21', '07', '00', 'Lampa'),
(1874, '21', '07', '01', 'Lampa'),
(1875, '21', '07', '02', 'Cabanilla'),
(1876, '21', '07', '03', 'Calapuja'),
(1877, '21', '07', '04', 'Nicasio'),
(1878, '21', '07', '05', 'Ocuviri'),
(1879, '21', '07', '06', 'Palca'),
(1880, '21', '07', '07', 'Paratia'),
(1881, '21', '07', '08', 'Pucara'),
(1882, '21', '07', '09', 'Santa Lucia'),
(1883, '21', '07', '10', 'Vilavila'),
(1884, '21', '08', '00', 'Melgar'),
(1885, '21', '08', '01', 'Ayaviri'),
(1886, '21', '08', '02', 'Antauta'),
(1887, '21', '08', '03', 'Cupi'),
(1888, '21', '08', '04', 'Llalli'),
(1889, '21', '08', '05', 'Macari'),
(1890, '21', '08', '06', 'Nuñoa'),
(1891, '21', '08', '07', 'Orurillo'),
(1892, '21', '08', '08', 'Santa Rosa'),
(1893, '21', '08', '09', 'Umachiri'),
(1894, '21', '09', '00', 'Moho'),
(1895, '21', '09', '01', 'Moho'),
(1896, '21', '09', '02', 'Conima'),
(1897, '21', '09', '03', 'Huayrapata'),
(1898, '21', '09', '04', 'Tilali'),
(1899, '21', '10', '00', 'San Antonio de Putina'),
(1900, '21', '10', '01', 'Putina'),
(1901, '21', '10', '02', 'Ananea'),
(1902, '21', '10', '03', 'Pedro Vilca Apaza'),
(1903, '21', '10', '04', 'Quilcapuncu'),
(1904, '21', '10', '05', 'Sina'),
(1905, '21', '11', '00', 'San Román'),
(1906, '21', '11', '01', 'Juliaca'),
(1907, '21', '11', '02', 'Cabana'),
(1908, '21', '11', '03', 'Cabanillas'),
(1909, '21', '11', '04', 'Caracoto'),
(1910, '21', '12', '00', 'Sandia'),
(1911, '21', '12', '01', 'Sandia'),
(1912, '21', '12', '02', 'Cuyocuyo'),
(1913, '21', '12', '03', 'Limbani'),
(1914, '21', '12', '04', 'Patambuco'),
(1915, '21', '12', '05', 'Phara'),
(1916, '21', '12', '06', 'Quiaca'),
(1917, '21', '12', '07', 'San Juan del Oro'),
(1918, '21', '12', '08', 'Yanahuaya'),
(1919, '21', '12', '09', 'Alto Inambari'),
(1920, '21', '12', '10', 'San Pedro de Putina Punco'),
(1921, '21', '13', '00', 'Yunguyo'),
(1922, '21', '13', '01', 'Yunguyo'),
(1923, '21', '13', '02', 'Anapia'),
(1924, '21', '13', '03', 'Copani'),
(1925, '21', '13', '04', 'Cuturapi'),
(1926, '21', '13', '05', 'Ollaraya'),
(1927, '21', '13', '06', 'Tinicachi'),
(1928, '21', '13', '07', 'Unicachi'),
(1929, '22', '00', '00', 'San Martín'),
(1930, '22', '01', '00', 'Moyobamba'),
(1931, '22', '01', '01', 'Moyobamba'),
(1932, '22', '01', '02', 'Calzada'),
(1933, '22', '01', '03', 'Habana'),
(1934, '22', '01', '04', 'Jepelacio'),
(1935, '22', '01', '05', 'Soritor'),
(1936, '22', '01', '06', 'Yantalo'),
(1937, '22', '02', '00', 'Bellavista'),
(1938, '22', '02', '01', 'Bellavista'),
(1939, '22', '02', '02', 'Alto Biavo'),
(1940, '22', '02', '03', 'Bajo Biavo'),
(1941, '22', '02', '04', 'Huallaga'),
(1942, '22', '02', '05', 'San Pablo'),
(1943, '22', '02', '06', 'San Rafael'),
(1944, '22', '03', '00', 'El Dorado'),
(1945, '22', '03', '01', 'San José de Sisa'),
(1946, '22', '03', '02', 'Agua Blanca'),
(1947, '22', '03', '03', 'San Martín'),
(1948, '22', '03', '04', 'Santa Rosa'),
(1949, '22', '03', '05', 'Shatoja'),
(1950, '22', '04', '00', 'Huallaga'),
(1951, '22', '04', '01', 'Saposoa'),
(1952, '22', '04', '02', 'Alto Saposoa'),
(1953, '22', '04', '03', 'El Eslabón'),
(1954, '22', '04', '04', 'Piscoyacu'),
(1955, '22', '04', '05', 'Sacanche'),
(1956, '22', '04', '06', 'Tingo de Saposoa'),
(1957, '22', '05', '00', 'Lamas'),
(1958, '22', '05', '01', 'Lamas'),
(1959, '22', '05', '02', 'Alonso de Alvarado'),
(1960, '22', '05', '03', 'Barranquita'),
(1961, '22', '05', '04', 'Caynarachi'),
(1962, '22', '05', '05', 'Cuñumbuqui'),
(1963, '22', '05', '06', 'Pinto Recodo'),
(1964, '22', '05', '07', 'Rumisapa'),
(1965, '22', '05', '08', 'San Roque de Cumbaza'),
(1966, '22', '05', '09', 'Shanao'),
(1967, '22', '05', '10', 'Tabalosos'),
(1968, '22', '05', '11', 'Zapatero'),
(1969, '22', '06', '00', 'Mariscal Cáceres'),
(1970, '22', '06', '01', 'Juanjuí'),
(1971, '22', '06', '02', 'Campanilla'),
(1972, '22', '06', '03', 'Huicungo'),
(1973, '22', '06', '04', 'Pachiza'),
(1974, '22', '06', '05', 'Pajarillo'),
(1975, '22', '07', '00', 'Picota'),
(1976, '22', '07', '01', 'Picota'),
(1977, '22', '07', '02', 'Buenos Aires'),
(1978, '22', '07', '03', 'Caspisapa'),
(1979, '22', '07', '04', 'Pilluana'),
(1980, '22', '07', '05', 'Pucacaca'),
(1981, '22', '07', '06', 'San Cristóbal'),
(1982, '22', '07', '07', 'San Hilarión'),
(1983, '22', '07', '08', 'Shamboyacu'),
(1984, '22', '07', '09', 'Tingo de Ponasa'),
(1985, '22', '07', '10', 'Tres Unidos'),
(1986, '22', '08', '00', 'Rioja'),
(1987, '22', '08', '01', 'Rioja'),
(1988, '22', '08', '02', 'Awajun'),
(1989, '22', '08', '03', 'Elías Soplin Vargas'),
(1990, '22', '08', '04', 'Nueva Cajamarca'),
(1991, '22', '08', '05', 'Pardo Miguel'),
(1992, '22', '08', '06', 'Posic'),
(1993, '22', '08', '07', 'San Fernando'),
(1994, '22', '08', '08', 'Yorongos'),
(1995, '22', '08', '09', 'Yuracyacu'),
(1996, '22', '09', '00', 'San Martín'),
(1997, '22', '09', '01', 'Tarapoto'),
(1998, '22', '09', '02', 'Alberto Leveau'),
(1999, '22', '09', '03', 'Cacatachi'),
(2000, '22', '09', '04', 'Chazuta'),
(2001, '22', '09', '05', 'Chipurana'),
(2002, '22', '09', '06', 'El Porvenir'),
(2003, '22', '09', '07', 'Huimbayoc'),
(2004, '22', '09', '08', 'Juan Guerra'),
(2005, '22', '09', '09', 'La Banda de Shilcayo'),
(2006, '22', '09', '10', 'Morales'),
(2007, '22', '09', '11', 'Papaplaya'),
(2008, '22', '09', '12', 'San Antonio'),
(2009, '22', '09', '13', 'Sauce'),
(2010, '22', '09', '14', 'Shapaja'),
(2011, '22', '10', '00', 'Tocache'),
(2012, '22', '10', '01', 'Tocache'),
(2013, '22', '10', '02', 'Nuevo Progreso'),
(2014, '22', '10', '03', 'Polvora'),
(2015, '22', '10', '04', 'Shunte'),
(2016, '22', '10', '05', 'Uchiza'),
(2017, '23', '00', '00', 'Tacna'),
(2018, '23', '01', '00', 'Tacna'),
(2019, '23', '01', '01', 'Tacna'),
(2020, '23', '01', '02', 'Alto de la Alianza'),
(2021, '23', '01', '03', 'Calana'),
(2022, '23', '01', '04', 'Ciudad Nueva'),
(2023, '23', '01', '05', 'Inclan'),
(2024, '23', '01', '06', 'Pachia'),
(2025, '23', '01', '07', 'Palca'),
(2026, '23', '01', '08', 'Pocollay'),
(2027, '23', '01', '09', 'Sama'),
(2028, '23', '01', '10', 'Coronel Gregorio Albarracín Lanc'),
(2029, '23', '01', '11', 'La Yarada los Palos'),
(2030, '23', '02', '00', 'Candarave'),
(2031, '23', '02', '01', 'Candarave'),
(2032, '23', '02', '02', 'Cairani'),
(2033, '23', '02', '03', 'Camilaca'),
(2034, '23', '02', '04', 'Curibaya'),
(2035, '23', '02', '05', 'Huanuara'),
(2036, '23', '02', '06', 'Quilahuani'),
(2037, '23', '03', '00', 'Jorge Basadre'),
(2038, '23', '03', '01', 'Locumba'),
(2039, '23', '03', '02', 'Ilabaya'),
(2040, '23', '03', '03', 'Ite'),
(2041, '23', '04', '00', 'Tarata'),
(2042, '23', '04', '01', 'Tarata'),
(2043, '23', '04', '02', 'Héroes Albarracín'),
(2044, '23', '04', '03', 'Estique'),
(2045, '23', '04', '04', 'Estique-Pampa'),
(2046, '23', '04', '05', 'Sitajara'),
(2047, '23', '04', '06', 'Susapaya'),
(2048, '23', '04', '07', 'Tarucachi'),
(2049, '23', '04', '08', 'Ticaco'),
(2050, '24', '00', '00', 'Tumbes'),
(2051, '24', '01', '00', 'Tumbes'),
(2052, '24', '01', '01', 'Tumbes'),
(2053, '24', '01', '02', 'Corrales'),
(2054, '24', '01', '03', 'La Cruz'),
(2055, '24', '01', '04', 'Pampas de Hospital'),
(2056, '24', '01', '05', 'San Jacinto'),
(2057, '24', '01', '06', 'San Juan de la Virgen'),
(2058, '24', '02', '00', 'Contralmirante Villar'),
(2059, '24', '02', '01', 'Zorritos'),
(2060, '24', '02', '02', 'Casitas'),
(2061, '24', '02', '03', 'Canoas de Punta Sal'),
(2062, '24', '03', '00', 'Zarumilla'),
(2063, '24', '03', '01', 'Zarumilla'),
(2064, '24', '03', '02', 'Aguas Verdes'),
(2065, '24', '03', '03', 'Matapalo'),
(2066, '24', '03', '04', 'Papayal'),
(2067, '25', '00', '00', 'Ucayali'),
(2068, '25', '01', '00', 'Coronel Portillo'),
(2069, '25', '01', '01', 'Calleria'),
(2070, '25', '01', '02', 'Campoverde'),
(2071, '25', '01', '03', 'Iparia'),
(2072, '25', '01', '04', 'Masisea'),
(2073, '25', '01', '05', 'Yarinacocha'),
(2074, '25', '01', '06', 'Nueva Requena'),
(2075, '25', '01', '07', 'Manantay'),
(2076, '25', '02', '00', 'Atalaya'),
(2077, '25', '02', '01', 'Raymondi'),
(2078, '25', '02', '02', 'Sepahua'),
(2079, '25', '02', '03', 'Tahuania'),
(2080, '25', '02', '04', 'Yurua'),
(2081, '25', '03', '00', 'Padre Abad'),
(2082, '25', '03', '01', 'Padre Abad'),
(2083, '25', '03', '02', 'Irazola'),
(2084, '25', '03', '03', 'Curimana'),
(2085, '25', '03', '04', 'Neshuya'),
(2086, '25', '03', '05', 'Alexander Von Humboldt'),
(2087, '25', '04', '00', 'Purús'),
(2088, '25', '04', '01', 'Purus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `last_login` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 'asotip', 'rUMD2Vek2QSCUE1oqBUWzpJRaobe_kGi', '$2y$13$1f8HhGDR.DPnTduKWHDXAOYGbWQ7E9pLXhoqf8jmMdT7L078wlCTe', NULL, 'alfredosotil@gmail.com', 1, 1511988524, 1511988524, 1511991674);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_migration`
--
ALTER TABLE `auth_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sessionId`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-Comment-entity` (`entity`),
  ADD KEY `idx-Comment-status` (`status`);

--
-- Indices de la tabla `cron_schedule`
--
ALTER TABLE `cron_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-CronSchedule-jobCode` (`jobCode`),
  ADD KEY `idx-CronSchedule-status` (`status`);

--
-- Indices de la tabla `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-detailorder-order-id` (`order_id`),
  ADD KEY `idx-detailorder-product-id` (`product_id`);

--
-- Indices de la tabla `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `idx-option-optiongroup-id` (`optiongroup_id`);

--
-- Indices de la tabla `optiongroup`
--
ALTER TABLE `optiongroup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD UNIQUE KEY `color` (`color`),
  ADD KEY `idx-product-category-id` (`category_id`);

--
-- Indices de la tabla `productoption`
--
ALTER TABLE `productoption`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `idx-productoption-product-id` (`product_id`),
  ADD KEY `idx-productoption-option-id` (`option_id`),
  ADD KEY `idx-productoption-optiongroup-id` (`optiongroup_id`);

--
-- Indices de la tabla `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `slider_gallery`
--
ALTER TABLE `slider_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `ubigeoperu`
--
ALTER TABLE `ubigeoperu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `passwordResetToken` (`password_reset_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cron_schedule`
--
ALTER TABLE `cron_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `optiongroup`
--
ALTER TABLE `optiongroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `productoption`
--
ALTER TABLE `productoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `slider_gallery`
--
ALTER TABLE `slider_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ubigeoperu`
--
ALTER TABLE `ubigeoperu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2089;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detailorder`
--
ALTER TABLE `detailorder`
  ADD CONSTRAINT `fk-detailorder-order-id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-detailorder-product-id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `fk-option-optiongroup-id` FOREIGN KEY (`optiongroup_id`) REFERENCES `optiongroup` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category-id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productoption`
--
ALTER TABLE `productoption`
  ADD CONSTRAINT `fk-productoption-option-id` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-productoption-optiongroup-id` FOREIGN KEY (`optiongroup_id`) REFERENCES `optiongroup` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-productoption-product-id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;