-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2017 a las 17:27:22
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
-- Estructura de tabla para la tabla `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `id` int(11) NOT NULL,
  `file_extension` varchar(255) DEFAULT NULL,
  `file_version` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `attachment`
--

INSERT INTO `attachment` (`id`, `file_extension`, `file_version`) VALUES
(1, 'jpg', 1),
(2, 'jpg', 1),
(3, 'jpg', 1),
(4, 'jpg', 1);

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
('admin', '1', 1508260275),
('fullAdministrator', '1', 1508344754);

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
('/admin/*', 2, '', NULL, NULL, 1508252936, 1508252936),
('admin', 1, 'Admin has all available permissions.', NULL, NULL, 1508252936, 1508252936),
('fullAdministrator', 2, 'Full Administrator', NULL, NULL, 1508252936, 1508252936),
('user', 1, 'Authenticated user.', 'user', NULL, 1508252936, 1508252936);

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
('m000000_000000_base', 1508252934),
('m160722_085418_init', 1508252936);

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
('user', 0x4f3a32373a22796969326d6f645c726261635c72756c65735c5573657252756c65223a333a7b733a343a226e616d65223b733a343a2275736572223b733a393a22637265617465644174223b693a313530383235323933363b733a393a22757064617465644174223b693a313530383235323933363b7d, 1508252936, 1508252936);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `sessionId` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cartData` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`sessionId`, `cartData`) VALUES
('303u6l13s5qcmr5a0iep9ib7m6', 'a:1:{s:0:"";O:22:"app\\models\\Detailorder":8:{s:36:"\0yii\\db\\BaseActiveRecord\0_attributes";a:5:{s:4:"name";s:11:"test detail";s:3:"qty";i:3;s:14:"price_per_unit";d:100;s:5:"price";d:300;s:10:"product_id";i:1;}s:39:"\0yii\\db\\BaseActiveRecord\0_oldAttributes";N;s:33:"\0yii\\db\\BaseActiveRecord\0_related";a:0:{}s:23:"\0yii\\base\\Model\0_errors";N;s:27:"\0yii\\base\\Model\0_validators";N;s:25:"\0yii\\base\\Model\0_scenario";s:7:"default";s:27:"\0yii\\base\\Component\0_events";a:2:{s:12:"beforeInsert";a:1:{i:0;a:2:{i:0;a:2:{i:0;O:31:"yii\\behaviors\\TimestampBehavior":6:{s:18:"createdAtAttribute";s:10:"created_at";s:18:"updatedAtAttribute";s:10:"updated_at";s:5:"value";N;s:10:"attributes";a:2:{s:12:"beforeInsert";a:2:{i:0;s:10:"created_at";i:1;s:10:"updated_at";}s:12:"beforeUpdate";s:10:"updated_at";}s:17:"skipUpdateOnClean";b:1;s:5:"owner";r:2;}i:1;s:18:"evaluateAttributes";}i:1;N;}}s:12:"beforeUpdate";a:1:{i:0;a:2:{i:0;a:2:{i:0;r:18;i:1;s:18:"evaluateAttributes";}i:1;N;}}}s:30:"\0yii\\base\\Component\0_behaviors";a:1:{i:0;r:18;}}}');

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
(1, 'Categoria de prueba', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cms`
--

INSERT INTO `cms` (`id`, `url`, `title`, `content`, `markdown_content`, `status`, `comment_available`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'blog-teste', 'test', '<p><br></p><p>sdfasdfad</p><table style="width: 100%;"><tbody><tr><td style="width: 20.0000%;"><br></td><td style="width: 20.0000%;">zcz</td><td style="width: 20.0000%;"><br></td><td style="width: 20.0000%;">a</td><td style="width: 20.0000%;">adasa</td></tr><tr><td style="width: 20.0000%;"><span class="fr-img-caption fr-fic fr-draggable fr-dii" contenteditable="false" draggable="false"><span class="fr-img-wrap" style="width: 197px;"><img src="/files/attachment/0/2/2%5C2_origin_1.jpg" style="width: 197px;" class="fr-rounded fr-fil fr-dib"><span class="fr-inner" contenteditable="true">dadfasdfqwe</span></span></span><br></td><td style="width: 20.0000%;"><br></td><td style="width: 20.0000%;">asdfasd<img src="/files/attachment/0/1/1%5C1_origin_1.jpg" style="width: 300px;" class="fr-fic fr-dib"></td><td style="width: 20.0000%;">adsfasd</td><td style="width: 20.0000%;"><br></td></tr></tbody></table>', '', 1, 0, 'test', 'testt', 'test, pruebas', 1508277188, 1508344278);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cron_schedule`
--

INSERT INTO `cron_schedule` (`id`, `jobCode`, `status`, `messages`, `dateCreated`, `dateFinished`) VALUES
(1, 'app/generate-sitemap', 1, 'exception ''yii\\base\\InvalidConfigException'' with message ''Please configure UrlManager::scriptUrl correctly as you are running a console application.'' in C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\web\\UrlManager.php:562\nStack trace:\n#0 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\web\\UrlManager.php(363): yii\\web\\UrlManager->getScriptUrl()\n#1 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\web\\UrlManager.php(504): yii\\web\\UrlManager->createUrl(Array)\n#2 C:\\xampp\\htdocs\\application-base\\vendor\\yii2tech\\sitemap\\File.php(95): yii\\web\\UrlManager->createAbsoluteUrl(Array)\n#3 C:\\xampp\\htdocs\\application-base\\commands\\AppController.php(30): yii2tech\\sitemap\\File->writeUrl(Array, Array)\n#4 [internal function]: app\\commands\\AppController->actionGenerateSitemap()\n#5 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\base\\InlineAction.php(57): call_user_func_array(Array, Array)\n#6 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\base\\Controller.php(156): yii\\base\\InlineAction->runWithParams(Array)\n#7 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\console\\Controller.php(128): yii\\base\\Controller->runAction(''generate-sitema...'', Array)\n#8 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\base\\Module.php(523): yii\\console\\Controller->runAction(''generate-sitema...'', Array)\n#9 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\console\\Application.php(180): yii\\base\\Module->runAction(''app/generate-si...'', Array)\n#10 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\console\\Application.php(147): yii\\console\\Application->runAction(''app/generate-si...'', Array)\n#11 C:\\xampp\\htdocs\\application-base\\vendor\\yiisoft\\yii2\\base\\Application.php(380): yii\\console\\Application->handleRequest(Object(yii\\console\\Request))\n#12 C:\\xampp\\htdocs\\application-base\\yii(25): yii\\base\\Application->run()\n#13 {main}', '2017-10-18 15:20:04', '2017-10-18 15:20:08'),
(2, 'app/generate-sitemap', 0, NULL, '2017-10-18 16:02:59', '2017-10-18 16:03:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detailorder`
--

CREATE TABLE IF NOT EXISTS `detailorder` (
  `id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `type`, `ownerId`, `rank`, `name`, `description`) VALUES
(1, 'product', '1', 1, '', ''),
(2, 'product', '1', 2, '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `optiongroup`
--

INSERT INTO `optiongroup` (`id`, `name`, `active`) VALUES
(1, 'color', 1),
(2, 'size', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `shipping` double NOT NULL,
  `tax` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `shipped` smallint(6) NOT NULL DEFAULT '0',
  `tracking_number` varchar(255) NOT NULL,
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
  `price` double NOT NULL,
  `weight` double DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `sku`, `price`, `weight`, `color`, `cart_desc`, `short_desc`, `long_desc`, `thumb`, `image`, `category_id`, `created_at`, `updated_at`, `stock`, `active`) VALUES
(1, 'test', 'testsku', 100, 10, '#073763', 'test long test testtest long tes', 'test long test testtest long test testtest long test testtest long test testtest long test testtest ', 'test long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtest long test testtes', 'test/test/test.jpg', 'test/test/test.jpg', 1, 1508880251, 1509999756, 20, 1);

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
('5iokg6ik3s32brc5sa0nfupul0', 1510004608, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('h4ursfqjtivvlfks5vi0uue4r0', 1509405514, 0x5f5f666c6173687c613a303a7b7d),
('il5c2ak9i0g8b4p5skj7f840q0', 1509404486, 0x5f5f666c6173687c613a303a7b7d),
('k24o3bsg6c3ojlvq1o3d43n7c6', 1509406411, 0x5f5f666c6173687c613a303a7b7d),
('tskgmq84s1gkvc8kvsv89k7bi2', 1509985934, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b5f5f61646d696e52657475726e416374696f6e7c733a31363a2261646d696e2f757365722f696e646578223b);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `name`, `short_desc`, `long_desc`, `created_at`, `updated_at`, `active`) VALUES
(1, 'about-slider', 'aboutslider', 'about slider with images', 1508965527, 1508968592, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider_gallery`
--

INSERT INTO `slider_gallery` (`id`, `type`, `ownerId`, `rank`, `name`, `description`) VALUES
(15, 'slider', '1', 15, '', ''),
(16, 'slider', '1', 16, '', ''),
(17, 'slider', '1', 17, '', ''),
(18, 'slider', '1', 18, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'asotilp', 'rjXvSgg05BBGbAinkjwifQMUEWauXrjJ', '$2y$13$fioueTmWkZvbmJXaAJNxCOn3oNWXOTM7Bsf06qgMvtgIDHQn4Hkuu', 'ryQm0_DJK5UbFRBADztJA7ffW42YP_Yl_1508259069', 'alfredosotil@gmail.com', 1, 1508259052, 1508259069, 1510003167);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cron_schedule`
--
ALTER TABLE `cron_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `optiongroup`
--
ALTER TABLE `optiongroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `slider_gallery`
--
ALTER TABLE `slider_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
