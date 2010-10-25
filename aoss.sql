# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.1.41
# Server OS:                    Win32
# HeidiSQL version:             5.1.0.3562
# Date/time:                    2010-10-20 23:50:54
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping structure for table aoss.ask_answer
CREATE TABLE IF NOT EXISTS `ask_answer` (
  `id_answer` int(10) NOT NULL AUTO_INCREMENT,
  `id_parent` int(10) NOT NULL COMMENT 'referent to id_question or id_answer',
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `post_by` int(10) NOT NULL COMMENT 'id_member',
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_answer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.ask_answer: 0 rows
/*!40000 ALTER TABLE `ask_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `ask_answer` ENABLE KEYS */;


# Dumping structure for table aoss.ask_question
CREATE TABLE IF NOT EXISTS `ask_question` (
  `id_question` int(10) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci,
  `post_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'id_member',
  `total_view` int(9) DEFAULT NULL COMMENT 'total view',
  `total_answer` int(5) DEFAULT NULL COMMENT 'total answer',
  `date_add` datetime DEFAULT NULL,
  `date_edit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.ask_question: 0 rows
/*!40000 ALTER TABLE `ask_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ask_question` ENABLE KEYS */;


# Dumping structure for table aoss.ask_question_tag
CREATE TABLE IF NOT EXISTS `ask_question_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_question` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_question`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.ask_question_tag: 0 rows
/*!40000 ALTER TABLE `ask_question_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `ask_question_tag` ENABLE KEYS */;


# Dumping structure for table aoss.backoffice_theme
CREATE TABLE IF NOT EXISTS `backoffice_theme` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `head_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_bg_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_text1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_text2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_text_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `head_text_size` tinyint(2) unsigned DEFAULT NULL,
  `foot_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_bg_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_text_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `foot_text_size` tinyint(2) unsigned DEFAULT NULL,
  `table_head_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_bg_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_rollover_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `table_head_text_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `table_head_text_size` tinyint(2) unsigned DEFAULT NULL,
  `table_line_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `table_row_bg_color1` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_bg_color2` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_rollover_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_text_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `table_text_size` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.backoffice_theme: 0 rows
/*!40000 ALTER TABLE `backoffice_theme` DISABLE KEYS */;
/*!40000 ALTER TABLE `backoffice_theme` ENABLE KEYS */;


# Dumping structure for table aoss.catalog
CREATE TABLE IF NOT EXISTS `catalog` (
  `id_category` int(10) NOT NULL DEFAULT '0',
  `id_product` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_category`,`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.catalog: 0 rows
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;


# Dumping structure for table aoss.catalog_category
CREATE TABLE IF NOT EXISTS `catalog_category` (
  `id_categoty` int(10) NOT NULL AUTO_INCREMENT,
  `id_parent` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=disable, 1=enable',
  PRIMARY KEY (`id_categoty`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.catalog_category: 0 rows
/*!40000 ALTER TABLE `catalog_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog_category` ENABLE KEYS */;


# Dumping structure for table aoss.content_company
CREATE TABLE IF NOT EXISTS `content_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_company: 0 rows
/*!40000 ALTER TABLE `content_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_company` ENABLE KEYS */;


# Dumping structure for table aoss.content_interface
CREATE TABLE IF NOT EXISTS `content_interface` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) DEFAULT NULL,
  `text` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_interface: 0 rows
/*!40000 ALTER TABLE `content_interface` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_interface` ENABLE KEYS */;


# Dumping structure for table aoss.content_motto
CREATE TABLE IF NOT EXISTS `content_motto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '0',
  `motto` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `date_edit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_motto: 0 rows
/*!40000 ALTER TABLE `content_motto` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_motto` ENABLE KEYS */;


# Dumping structure for table aoss.content_product
CREATE TABLE IF NOT EXISTS `content_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_product: 0 rows
/*!40000 ALTER TABLE `content_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_product` ENABLE KEYS */;


# Dumping structure for table aoss.content_slideshow
CREATE TABLE IF NOT EXISTS `content_slideshow` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '0',
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_slideshow: 0 rows
/*!40000 ALTER TABLE `content_slideshow` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_slideshow` ENABLE KEYS */;


# Dumping structure for table aoss.content_testimonial
CREATE TABLE IF NOT EXISTS `content_testimonial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '0',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `job` int(10) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_product` int(10) DEFAULT NULL COMMENT 'for multiple id use comma (,) to separate',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_testimonial: 0 rows
/*!40000 ALTER TABLE `content_testimonial` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_testimonial` ENABLE KEYS */;


# Dumping structure for table aoss.content_theme
CREATE TABLE IF NOT EXISTS `content_theme` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_theme: 6 rows
/*!40000 ALTER TABLE `content_theme` DISABLE KEYS */;
INSERT INTO `content_theme` (`id`, `name`, `icon`) VALUES
	(1, 'summer', NULL),
	(2, 'luxury', NULL),
	(3, 'goodtime', NULL),
	(4, 'adrenaline', NULL),
	(5, 'deep_emotion', NULL),
	(6, 'leader_light', NULL);
/*!40000 ALTER TABLE `content_theme` ENABLE KEYS */;


# Dumping structure for table aoss.event
CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(10) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.event: 0 rows
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;


# Dumping structure for table aoss.event_tag
CREATE TABLE IF NOT EXISTS `event_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_event` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.event_tag: 0 rows
/*!40000 ALTER TABLE `event_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_tag` ENABLE KEYS */;


# Dumping structure for table aoss.language
CREATE TABLE IF NOT EXISTS `language` (
  `id_language` int(10) DEFAULT NULL,
  `language_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.language: 0 rows
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
/*!40000 ALTER TABLE `language` ENABLE KEYS */;


# Dumping structure for table aoss.member
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(7) unsigned NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` tinyint(1) unsigned DEFAULT NULL COMMENT '0=male, 1=female',
  `birthday` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) unsigned NOT NULL DEFAULT '2' COMMENT '0=admin, 1=staff, 2=silver (3 month), 3=Gold (1 year)',
  `status` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '0=disable, 1=enable',
  `date_register` date NOT NULL,
  `date_expire` date NOT NULL,
  `owner` tinyint(4) unsigned NOT NULL COMMENT '0=boat, 1=P''ple, 2=P''mickey, P''tod',
  `id_theme` tinyint(4) unsigned NOT NULL COMMENT 'id of theme in table  content_theme',
  `theme_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'black, blue, green, orange, purple, red',
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.member: 5 rows
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id_member`, `password`, `first_name`, `last_name`, `sex`, `birthday`, `email`, `detail`, `domain`, `type`, `status`, `date_register`, `date_expire`, `owner`, `id_theme`, `theme_color`) VALUES
	(0, 'agelNextGen', 'Administrator', 'IIC', 0, NULL, NULL, NULL, '', 0, 1, '0000-00-00', '0000-00-00', 0, 0, '0'),
	(448098, '123456', 'ชาคริญา', 'บุญทรัพย์', 1, NULL, NULL, NULL, 'agelcyber.com', 3, 1, '2010-10-01', '2011-10-04', 0, 4, 'red'),
	(450851, '123456', 'ศรชัย', 'คณะพล', 0, '0000-00-00', NULL, NULL, 'agelfootballclub.com', 3, 1, '2010-10-04', '2011-10-04', 0, 2, '0'),
	(244848, '123456', 'ภัคณัฎฐ์', 'ภิรมณ์พรธนากูล ', 1, NULL, NULL, NULL, 'agelmickey.com', 3, 1, '2010-10-04', '2011-10-04', 0, 5, 'green'),
	(595401, '123456', 'วราวุธ', 'มีสุภา', 0, '1988-06-15', 'warawut@startagel.com', NULL, 'startagel.com', 3, 1, '2010-10-01', '2011-10-01', 0, 1, '0');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;


# Dumping structure for table aoss.member_media
CREATE TABLE IF NOT EXISTS `member_media` (
  `id_member` int(10) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '0=image, 1=vdo',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `date_add` date NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `id_member` (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.member_media: 0 rows
/*!40000 ALTER TABLE `member_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_media` ENABLE KEYS */;


# Dumping structure for table aoss.news
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0=news, 1=promotion',
  `topic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `add_date` datetime DEFAULT NULL,
  `edit_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.news: 0 rows
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


# Dumping structure for table aoss.news_tag
CREATE TABLE IF NOT EXISTS `news_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_news` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.news_tag: 0 rows
/*!40000 ALTER TABLE `news_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_tag` ENABLE KEYS */;


# Dumping structure for table aoss.product
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '0=document, 1=sound, 2=vdo',
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_download_file` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_download_summary_doc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_view_online` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'link to vdo or mp3 file to view/listen online',
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.product: 0 rows
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


# Dumping structure for table aoss.product_stat
CREATE TABLE IF NOT EXISTS `product_stat` (
  `id_product` int(10) NOT NULL DEFAULT '0',
  `page_view` int(10) DEFAULT NULL,
  `view_online` int(10) DEFAULT NULL,
  `download_file` int(10) DEFAULT NULL,
  `download_summary_doc` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.product_stat: 0 rows
/*!40000 ALTER TABLE `product_stat` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_stat` ENABLE KEYS */;


# Dumping structure for table aoss.product_tag
CREATE TABLE IF NOT EXISTS `product_tag` (
  `id_tag` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  PRIMARY KEY (`id_tag`,`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.product_tag: 0 rows
/*!40000 ALTER TABLE `product_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_tag` ENABLE KEYS */;


# Dumping structure for table aoss.tag
CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `date_edit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.tag: 0 rows
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
