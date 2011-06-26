# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.1.41
# Server OS:                    Win32
# HeidiSQL version:             5.1.0.3562
# Date/time:                    2010-11-05 12:12:06
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for aoss
CREATE DATABASE IF NOT EXISTS `aoss` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `aoss`;


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
DELETE FROM `ask_answer`;
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
DELETE FROM `ask_question`;
/*!40000 ALTER TABLE `ask_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ask_question` ENABLE KEYS */;


# Dumping structure for table aoss.ask_question_tag
CREATE TABLE IF NOT EXISTS `ask_question_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_question` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_question`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.ask_question_tag: 0 rows
DELETE FROM `ask_question_tag`;
/*!40000 ALTER TABLE `ask_question_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `ask_question_tag` ENABLE KEYS */;


# Dumping structure for table aoss.backoffice_theme
CREATE TABLE IF NOT EXISTS `backoffice_theme` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `head_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_bg_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_text_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head_text_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `table_row_bg_color_1` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_bg_color_2` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_rollover_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_selected_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_text_color` char(7) CHARACTER SET utf8 DEFAULT NULL,
  `table_text_size` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.backoffice_theme: 0 rows
DELETE FROM `backoffice_theme`;
/*!40000 ALTER TABLE `backoffice_theme` DISABLE KEYS */;
/*!40000 ALTER TABLE `backoffice_theme` ENABLE KEYS */;


# Dumping structure for table aoss.catalog
CREATE TABLE IF NOT EXISTS `catalog` (
  `id_category` int(10) NOT NULL DEFAULT '0',
  `id_product` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_category`,`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.catalog: 0 rows
DELETE FROM `catalog`;
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
DELETE FROM `catalog_category`;
/*!40000 ALTER TABLE `catalog_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog_category` ENABLE KEYS */;


# Dumping structure for table aoss.content_company
CREATE TABLE IF NOT EXISTS `content_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` tinyint(3) NOT NULL DEFAULT '1',
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`id_language`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_company: 6 rows
DELETE FROM `content_company`;
/*!40000 ALTER TABLE `content_company` DISABLE KEYS */;
INSERT INTO `content_company` (`id`, `id_language`, `topic`, `description`, `date_add`, `date_edit`) VALUES
	(1, 1, 'หนทางสู่ความสำเร็จ', '...ขั้นตอนง่ายๆ ที่สามารถทำตามเอเจลคือบริษัทที่ทำสิ่งที่เป็นไปไม่ได้ ให้เป็นไปได้ เรามีนวัตกรรมแบบเจล ที่เป็นเอกลักษณ์และโดดเด่นจากผลิตภัณฑ์เสริมอาหารประเภทอื่น ซึ่งมีจุดมุ่งหมายเพื่อสร้างและสนับสนุนความร่วมมือต่างๆ ทุกๆ 10 ปีจะมีบริษัทที่เป็นสัญลักษณ์ของอุตสาหกรรมเครือข่าย ซึ่งบริษัททั้งหลายเหล่านี้จะมีบางสิ่งที่เหมือนกันคือผลิตภัณฑ์ที่ไม่สามารถลอกเลียนแบบได้ ซึ่งเป็นสิ่งสำคัญอันดับแรก และต้องมีการบริหารจัดการที่ดีเยี่ยม มีแผนตอบแทนที่จะให้สมาชิกได้รับผลกำไรมากที่สุด และความมั่นคงทางการเงิน รวมถึงผู้นำที่มีประสบการณ์ในที่แห่งนั้น เมื่อเรามองประวัติศาสตร์ของอุตสาหกรรมเครือข่าย คุณจะเห็นว่ามีน้อยมากที่จะประสบความสำเร็จเหมือนกับเอเจล เรารู้ว่าเราดีกว่าและยิ่งใหญ่มากกว่าบริษัทต่างๆที่ผ่านมา ขอเชิญท่านมาร่วมทีมกับเรา “ทำเพื่อชีวิต”', '0000-00-00 00:00:00', '2010-10-25 17:13:13'),
	(2, 1, 'พลังแห่งปัญญา	', 'ในช่วงปลายปี พ.ศ. 2547 เกลน เจนเซนเสนอแนวคิดที่เรียกว่า “ช่วงเวลาแห่งแรงบันดาลใจ”เกลนเป็นบุคคลที่มีวิสัยทัศน์ ประสบการณ์มากกว่า 18 ปีในอุตสาหกรรมการตลาดแบบเครือข่าย ด้วยการพัฒนาของเขาจากเจ้าหน้าที่บริการลูกค้ามาเป็นการจำหน่ายสินค้า ระหว่างประเทศ เกลนตระหนักว่า อะไรคือสิ่งที่ผู้คนปรารถนา และผู้คนเหล่านั้นจะได้สิ่งที่ตนปรารถนามาครอบครองได้อย่างไร เขาเปลี่ยนแปลงแนวคิดและกลยุทธ์ใหม่ ๆ อยู่เสมอ พยายามหาแนวทางที่ดีกว่าในการบรรลุสิ่งที่เขาประสงค์ และแน่นอนว่า ในปี พ.ศ. 2547 ช่วงเดือนพฤศจิกายน เขาก็ได้กลับมาพร้อมนวัตกรรมใหม่ ... เจล', '0000-00-00 00:00:00', '2010-10-25 17:07:27'),
	(3, 1, 'ผลิตภัณฑ์ใหม่', 'ในโลกของการตลาดแบบเครือข่ายนั้น การสร้างแนวคิดใหม่ ๆ ให้เกิดขึ้นนั้นเป็นไปได้ยาก ทุกๆ 1-2 ทศวรรษบริษัทมักจะคิดผลิตภัณฑ์หรือวิธีการดำเนินธุรกิจใหม่ๆ ออกมา ซึ่งผลิตภัณฑ์ชนิดใหม่ที่ออกสู่ตลาดนั้น ก็จะกลายเป็นไอคอนของอุตสาหกรรมในเวลาต่อมา แม้ว่าจะมีผู้ลอกเลียนแบบผลิตภัณฑ์ดังกล่าวก็ตาม แต่ผลิตภัณฑ์ลอกเลียนแบบเหล่านั้นมักมีสถานะที่ด้อยกว่าผลิตภัณฑ์ไอคอนที่มี อยู่ในตลาด Agel สร้างเทคโนโลยีสำหรับผลิตภัณฑ์ชนิดใหม่ในรูปแบบเจลขึ้นและยังคงเป็นผู้นำ ตลาดสำหรับผลิตภัณฑ์ชนิดนี้ แต่ Agel ต้องการมากกว่านั้น กล่าวคือ ผลิตภัณฑ์แบบเทคโนโลยีย่อมต้องการให้บริษัทเทคโนโลยีดำเนินการด้านการตลาด ให้ แน่นอนว่า Agel จะดำเนินการอย่างดีที่สุดในการดำเนินการพัฒนาการผลิต และการทำให้เทคโนโลยีแบบเจล และโอกาสในการมีอิสระทางการเงินในรูปแบบใหม่นี้เข้าถึงทุกคนได้อย่างมี ประสิทธิผลระบบการจัดการสินค้าคงเหลือแบบอัตโนมัติ การกระจายวัตถุดิบทางการตลาดด้วยระบบเสมือนจริง แรงสนับสนุนจากเครือข่ายทั่วโลก ..... สิ่งเหล่านี้เป็นส่วนหนึ่งของระบบชั้นนำที่ Agel นำมาใช้เพื่อการก้าวไปสู่บริษัทแห่งแรกที่นำเทคโนโลยีมาใช้ในการขับเคลื่อน อุตสาหกรรมการตลาดแบบเครือข่าย', '0000-00-00 00:00:00', '2010-10-25 17:07:50'),
	(4, 1, 'พลังอำนาจแห่งเทคโนโลยี', 'แน่นอนว่า พวกเราส่วนใหญ่ย่อมตระหนักดีว่า เทคโนโลยีนั้นมีพลังอำนาจเพียงใดในการที่จะช่วยเพิ่มพูนผลิตภาพจากการผลิต และบรรลุเป้าหมายความต้องการส่วนบุคคล', '0000-00-00 00:00:00', '2010-10-25 17:08:09'),
	(5, 1, 'ทำไมต้องเป็นเวลานี้?', 'นวัตกรรมและเทคโนโลยีเป็นกลจักรสำคัญทางเศรษฐกิจใน การขับเคลื่อนให้เกิดความเจริญรุ่งเรืองไปทั่วโลก บริษัทชั้นนำในด้านเทคโนโลยีและความคิดสร้างสรรค์มีส่วนสำคัญในการยกระดับ มาตรฐานการดำรงชีวิตของผู้คนตั้งแต่ใน  Silicon Valley ไปจนถึงเมืองเซี่ยงไฮ้ และแน่นอนว่า Agel ซึ่งนำเทคโนโลยีชั้นนำในการติดต่อสื่อสารมาใช้จะทำให้เกิดความเจริญเติบโตไป ทั่วโลกได้เช่นกัน', '0000-00-00 00:00:00', '2010-10-25 17:08:37'),
	(6, 1, 'พันธกิจองค์กร	', 'หน้าที่ของเราคือการมอบความมีสุขภาพที่ดี มีอิสรภาพทางการเงินและเวลา และช่วยเหลือผู้อื่นให้ได้รับสิ่งนี้เช่นกัน', '0000-00-00 00:00:00', '2010-10-25 17:08:53');
/*!40000 ALTER TABLE `content_company` ENABLE KEYS */;


# Dumping structure for table aoss.content_interface
CREATE TABLE IF NOT EXISTS `content_interface` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) DEFAULT NULL,
  `text` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_interface: 0 rows
DELETE FROM `content_interface`;
/*!40000 ALTER TABLE `content_interface` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_interface` ENABLE KEYS */;


# Dumping structure for table aoss.content_language
CREATE TABLE IF NOT EXISTS `content_language` (
  `id_language` int(10) DEFAULT NULL,
  `language_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_language: 2 rows
DELETE FROM `content_language`;
/*!40000 ALTER TABLE `content_language` DISABLE KEYS */;
INSERT INTO `content_language` (`id_language`, `language_name`) VALUES
	(1, 'thai'),
	(2, 'english');
/*!40000 ALTER TABLE `content_language` ENABLE KEYS */;


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
DELETE FROM `content_motto`;
/*!40000 ALTER TABLE `content_motto` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_motto` ENABLE KEYS */;


# Dumping structure for table aoss.content_product
CREATE TABLE IF NOT EXISTS `content_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` tinyint(3) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Gelceuticals, Gel Strips, Gel Care, Topical Gels',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`id_language`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_product: 19 rows
DELETE FROM `content_product`;
/*!40000 ALTER TABLE `content_product` DISABLE KEYS */;
INSERT INTO `content_product` (`id`, `id_language`, `group`, `name`, `description`, `image`, `icon`, `vdo`, `date_add`, `date_edit`) VALUES
	(1, 1, 'Gelceuticals', 'EXO', 'สกัดจากผลไม้คุณภาพสูงทั่วโลก 17 ชนิด และมีสารต้านอนุมูลอิสระมากกว่า 200 ชนิด\r\n\r\nกระตุ้นภูมิต้านทาน ฟื้นฟูเซลล์ผิวให้แข็งแรง\r\nช่วยชะล้างทำความสะอาดเซลล์\r\nช่วยให้รู้สึกกระปรี้กระเปร่า สดชื่น กระฉับกระเฉง\r\nเพิ่มภูมิต้านทานของร่างกาย ลดอาการภูมิแพ้\r\nช่วยขจัดล้างสารพิษในร่างกาย (อนุมูลอิสระ) ทำงานได้ในระดับเซลล์\r\nช่วยในระบบไหลเวียนโลหิต ระบบความจำและสายตา\r\nช่วยชะลอความชรา ทำให้ผิวพรรณดูผ่องใส เต่งตึงขึ้น\r\nช่วยลดรอยด่างดำ และลดการอักเสบของสิว\r\nช่วยปรับระดับน้ำตาลในเลือด\r\nช่วยปรับระดับความดันให้เป็นปกติ\r\nช่วยลดไขมันในเส้นเลือด\r\nช่วยให้ระบบขับถ่ายดีขึ้น\r\nช่วยลดอาการอักเสบต่างๆ\r\nช่วยลดภาวะเสี่ยงของเส้นเลือดหัวใจตีบ\r\nลดอัตราเสี่ยงการเกิดมะเร็ง\r\nมีกรดอะมิโน มิวโครโพลีซัคคาร์ไรด์ และโพลีซัคคาร์ไรด์ที่จำเป็นต่อระบบการเผาผลาญพลังงาน\r\nอุดมไปด้วยวิตามิน, เกลือแร่, กรดอะมิโน, เบต้าแคโรทีน, วิตามิน E และ C', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:33'),
	(2, 1, 'Gelceuticals', 'UMI', 'สารต้านอนุมูลอิสระของฟูคอยแดน (Fucoidan) ทำให้นักวิทยาศาสตร์และนักค้นคว้าทั้งหลาย หันมาให้ความสำคัญและสนใจ เนื่องจากฟูคอยแดนเป็นหนึ่งในสมบัติอันล้ำค่าอจากท้องทะเลลึก ที่ให้คุณประโยชน์ต่อร่างกายมนุษย์มากที่สุด\r\n\r\nมีฤทธิ์ป้องกันการแข็งตัวเกล็ดเลือด\r\nกระตุ้นโปรตีน และเอนไซม์ปกติให้กลายเป็นภูมิต้านทาน\r\nสามารถกระตุ้นเซลล์ต้นกำเนิด (Stem Cell) ให้ออกมาจากไขกระดูกได้\r\nต้านการเกิดเนื้องอก และการเจริญเติบโตของเซลล์มะเร็ง\r\nต้านการสร้างหลอดเลือดในก้อนมะเร็ง\r\nลดอัตราเสี่ยงการเกิดมะเร็งเต้านม\r\nต้านเชื้อไวรัส และเชื้อแบคทีเรีย\r\nกระตุ้นเซลล์ภูมิต้านทาน\r\nต้านการเกิดภูมิแพ้\r\nปกป้องการทำงานของตับ\r\nทำลายอนุมูลอิสระ\r\nลดอัตราเสี่ยงโรคหัวใจ ระบบทางเดินหายใจ และเบาหวาน\r\nช่วยในภาวะข้ออักเสบ\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:34'),
	(3, 1, 'Gelceuticals', 'MIN', 'ประกอบด้วยวิตามินและเกลือแร่ที่เหมาะสมและเพียงพอในการบำรุงร่างกายในแต่ละวัน สารสำคัญต่างๆ ที่ผลิตจากธรรมชาติในรูปของเจล สามารถดูดซึมเข้าสู่ร่างกายได้อย่างรวดเร็วกว่าการย่อยผ่านระบบกระเพาะอาหาร และลำไส้\r\n\r\nเสริมสร้างภูมิคุ้มกันของร่างกาย\r\nบำรุงสายตา, เหงือก, ฟัน และไขข้อ\r\nเสริมการดูดซึมธาตุเหล็ก และแคลเซียม\r\nช่วยในการต่อต้านอนุมูลอิสระ\r\nบำรุงเม็ดเลือดแดง\r\nส่งเสริมระบบประสาท\r\nบำรุงผิว, ผม, เล็บ\r\nลดน้ำตาลในกระแสเลือด\r\nช่วยให้เลือดแข็งตัวเมื่อเกิดแผล\r\nลดอัตราเสี่ยงการเกิดมะเร็งเต้านม\r\nมีเอนไซม์ช่วยในการแบ่งตัวของเซลล์\r\nลดอาการปวดเกร็งของกล้ามเนื้อ\r\nลดอัตราเสี่ยงของการเป็นหมัน\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:36'),
	(4, 1, 'Gelceuticals', 'SLM', 'เพื่อรูปร่างดี และช่วยควบคุมน้ำหนักอย่างมีประสิทธิภาพสูงสุด ส่วนประกอบสำคัญ คือ Garcinia cambogia (ส้มแขก) ช่วยในการยับยั้งการเปลี่ยนแป้งไม่ให้เป็นไขมันสะสม เป็นตัวสร้าง Serotonin ยับยั้งการอยากอาหาร ทำให้ไม่หิว เพิ่มการสันดาปไขมัน(เก่า) ช่วยลด cholesterol ทำให้รูปร่างสมส่วน มีทรวดทรงสวยงาม\r\n\r\nลดน้ำหนักและกระชับสัดส่วน\r\nลดความอยากอาหารโดยไม่กระทบระบบประสาทส่วนกลาง\r\nลดการสะสมไขมันใหม่\r\nเผาผลาญไขมันส่วนเกิน\r\nไม่มีผลข้างเคียง\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:37'),
	(5, 1, 'Gelceuticals', 'OHM', 'เป็นการผสมผสานระหว่างวิตามิน แร่ธาตุและสมุนไพรที่มีส่วนผสมของโคเอนไซม์ ซึ่งช่วยในการเร่งกระบวนการขอคาร์โบไฮเดรต ให้เป็นพลังงานอย่างเร่งด่วน นอกจากนี้ ยังมีแพเนคจินเซ่ง (โสม) ของ Agel OHM ที่สามารถเพิ่มความต้านทานในการคลายเครียด อีกทั้งยังช่วยเพิ่มประสิทธิภาพทางร่างกายและจิตใจให้แก่ผู้ใช้ โดยให้รับประทานควบคู่กับอาหารดี และมีประโยชน์ และออกกำลังกายในขณะเดียวกัน เพื่อประโยชน์สูงสุด\r\n\r\nเพิ่มพลังงานให้กับร่างกายอย่างเร่งด่วน\r\nมีสมาธิในการทำงานดีขึ้น\r\nช่วยให้กระปรี้กระเปร่า ไม่รู้สึกอ่อนเพลียระหว่างวัน\r\nสำหรับนักกีฬาหรือผู้ที่สูญเสียเหงื่อ ใช้ทดแทนได้เป็นอย่างดี\r\nช่วยให้ระบบขับถ่ายดีขึ้น\r\nช่วยให้สดชื่น กระฉับกระเฉงอย่างรวดเร็ว\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:39'),
	(6, 1, 'Gelceuticals', 'FLX', 'มีส่วนประกอบสำคัญที่ได้จากธรรมชาติทั้งหมด 4 ชนิด ซึ่งช่วยในระบบการเคลื่อนไหวของร่างกาย ระบบการหล่อลื่น และบำบัดเมื่อข้อต่อเกิดอาการผิดปกติ พร้อมด้วยเทคโนโลยีของเจล นิวตริชั่นนอลทำให้การทำงานของส่วนประกอบทั้ง 4 นั้น ให้ผลที่รวดเร็ว โดยไม่มีผลข้างเคียงใดๆ ต่อระบบอวัยวะอื่นๆ ในร่างกาย เพื่อสุขภาพที่ดีที่สุดของกระดูกและข้อต่อ\r\n\r\nCeladrin เป็นสารสกัดจากธรรมชาติทั้งหมด ที่ช่วยพัฒนากระบวนการเสริมสร้างและซ่อมแซมกระบวนการหล่อลื่นของข้อต่อ\r\nGlucosamine & Chondroitin ช่วยเสริมสร้าง ซ่อมแซม บำรุงกระดูกอ่อนให้กลับมามีสุขภาพดีและแข็แรงเหมือนเดิม\r\nMethysulfonylmethane เป็นกรดอะมิโนซึ่งได้มีการทดลองทางการแพทย์พบว่า ช่วยในการลดอาการอักเสบได้จริง\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:41'),
	(7, 1, 'Gelceuticals', 'HRT', 'เจลบำบัดที่ผ่านการวิจัย และใช้เทคโนโลยีขั้นสูงในการผลิต เพื่อปกป้องหัวใจของคุณ ให้พลังงานกับกล้ามเนื้อหัวใจและรักษาดุลยภาพของคอเสเตอรอล เพื่อปกป้องที่ดีที่สุดของหัวใจคุณ มีส่วนผสมของสารต้านอนุมูลอิสระและสารอาหารบำบัด อันทรงคุณประโยชน์ เพื่อให้พลังงาน และปกป้องหัวใจของคุณ ได้แก่\r\n\r\nTaurine สามารถลดความเสียหายที่เกิดกับหัวใจ\r\nCarnitine ช่วยเพิ่มพลังงานใกล้ามเนื้อหัวใจ\r\nCo Q10 เป็นสารต้านอนุมูลอิสระอันทรงพลัง ช่วยเป็นเชื้อเพลิงให้กับ Mitochondria และป้องกันภาวะหัวใจล้มเหลว\r\n', '', '', '', '0000-00-00 00:00:00', '2010-10-25 01:00:24'),
	(8, 1, 'Gel Care', 'Daily Cleansing Gel  ', 'กำจัดสิ่งสกปรกด้วยเจลโฟมบริสุทธิ์ ใช้ล้างเครื่องสำอาง ช่วยขจัดเซลล์ตาย สารตกค้างจากสิ่งแวดล้อม', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:52'),
	(9, 1, 'Gel Care', 'Revitalizing Gel Scrub', 'ขัดผิวให้สดใสด้วยความนุ่มนวล จึงสามารถขัดผิวได้ 4-5 ครั้งต่อสัปดาห์', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:53'),
	(10, 1, 'Gel Care', 'Anti-oxidant Misting Gel ', 'ปรับความตึงตัวและสมดุลให้ผิวพรรณด้วยละอองเจล ใช้หลงจากล้างหน้าทุกครั้ง', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:54'),
	(11, 1, 'Gel Care', 'Age- defying EYE Gel ', 'สร้างความสดใสให้กับรอบดวงตา ลดริ้วรอย เพิ่มความยืดหยุ่นรอบดวงตา ใช้วัละ / ครั้ง เช้าและก่อนนอน', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:56'),
	(12, 1, 'Gel Care', 'Anti-aging Gel Serum', 'ช่วยให้ผิวอ่อนเยาว์ขึ้นด้วยวิตามิน และสารต้านอนุมูลอิสระ ใช้วันละ 1 ครั้งหลังจากใช้ Anti-oxidant Misting Gel  ', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:57'),
	(13, 1, 'Gel Care', 'Daily Moisturizing Gel', 'ปกป้องอุมูลอิสระที่มาทำลายผิวและช่วยทำให้ผิวชุ่มชื้น ใช้วันละ 1 ครั้ง ตอนเช้า', '', '', '', '0000-00-00 00:00:00', '2010-10-25 00:59:59'),
	(14, 1, 'Gel Care', 'Nourishing Night Gel', 'เร่งการสร้างเซลล์ใหม่ขณะนอนหลับ ใช้ก่อนนอน', '', '', '', '0000-00-00 00:00:00', '2010-10-25 01:00:00'),
	(15, 1, 'Gel Care', 'AgeLess', '', '', '', '', '0000-00-00 00:00:00', '2010-10-29 09:10:05'),
	(16, 1, '', 'CAL', '', '', '', '', '0000-00-00 00:00:00', '2010-11-04 20:08:35'),
	(17, 1, '', 'HIS', '', '', '', '', '0000-00-00 00:00:00', '2010-11-04 20:08:45'),
	(18, 1, '', 'REM', '', '', '', '', '0000-00-00 00:00:00', '2010-11-04 20:08:51'),
	(19, 1, '', 'FLXRUB', '', '', '', '', '0000-00-00 00:00:00', '2010-11-04 20:09:14');
/*!40000 ALTER TABLE `content_product` ENABLE KEYS */;


# Dumping structure for table aoss.content_slideshow
CREATE TABLE IF NOT EXISTS `content_slideshow` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '1',
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_slideshow: 3 rows
DELETE FROM `content_slideshow`;
/*!40000 ALTER TABLE `content_slideshow` DISABLE KEYS */;
INSERT INTO `content_slideshow` (`id`, `id_language`, `topic`, `description`, `image`, `date_add`, `date_edit`) VALUES
	(1, 1, 'Topic 1', 'description 1', 'slideshow/1.jpg', '0000-00-00 00:00:00', '2010-11-04 19:09:56'),
	(2, 1, 'Topic 2', 'description 2', 'slideshow/2.jpg', '0000-00-00 00:00:00', '2010-11-04 19:09:54'),
	(3, 1, 'Topic 3', 'description 3', 'slideshow/3.jpg', '0000-00-00 00:00:00', '2010-11-04 19:09:51');
/*!40000 ALTER TABLE `content_slideshow` ENABLE KEYS */;


# Dumping structure for table aoss.content_testimonial
CREATE TABLE IF NOT EXISTS `content_testimonial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` int(10) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'for multiple id use comma (,) to separate',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_testimonial: 25 rows
DELETE FROM `content_testimonial`;
/*!40000 ALTER TABLE `content_testimonial` DISABLE KEYS */;
INSERT INTO `content_testimonial` (`id`, `id_language`, `name`, `job`, `description`, `image`, `id_product`) VALUES
	(1, 1, 'คุณภิญญา ชัยสงคราม ', 'โปรแกรมเมอร์', 'รับประทาน Agel EXO และใช้ AGELess skin care ติดต่อกันเป็นเวลา 4 อาทิตย์ และ เป็นคนไม่ค่อยแข็งแรงค่ะ นอนดึกเป็นหวัด ตากฝนเป็นไข้ ป่วยเกือบทุกเดือน ป่วยทีนึง 2-3 สัปดาห์ แต่หลังจากได้ทาน EXO เป็นประจำ ก็ทำให้ร่างกายแข็งแรงขึ้นมาก', NULL, '1'),
	(2, 1, 'คุณปูชิตา สุขีวัฒนา', 'ประกอบธุรกิจส่วนตัว', 'เมื่อก่อนเป็นโรคภูมิแพ้หนักมาก ทุกครั้งที่นอนดึก พอตื่นเช้าขึ้นมา จะมีอาการคล้ายเป็นหวัด คัดจมูก จามมีน้ำตาไหลออกมาตลอดและมีสีหน้าที่ซีดเซียว เหมือนคนไม่สบาย ตั้งแต่ทาน EXO เป็นประจำ ประมาณ 3 สัปดาห์ อาการคล้ายจะเป็นหวัด คัดจมูกก็หายไป ทกๆวัน สดชื่นขึ้นมากค่ะ', NULL, '1'),
	(3, 1, ' คุณไมยสิทธิ์ สว่างธรรมรัตน์', 'ประกอบธุรกิจส่วนตัว', 'แต่ก่อนผมเป็นคนหน้ามัน มีสิวอักสบมาก หาหมอรักษาสิวและทานยาเป็นประจำ แต่พอได้เริ่มทาน EXO เป็นประจำทุกวัน ตลอดระยะเวลา 3 เดือน ทำให้สิวอักเสบและความมันบนใบหน้าของผมเริ่มลดน้อยลง สภาพผวหน้าดีขึ้นมากครับ', NULL, '1'),
	(4, 1, 'คุณณัฏฐ์เดช ชัยปกรณ์วงศ์ ', 'ประสานงานธุรกิจต่างประเทศ', 'ปกติเป็นคนหน้ามันมาก และมีสิวหัวช้างเป็นหัวหนองเกิดขึ้นบ่อยๆ ผุดๆ หายๆ ตามบริเวณ T-Zone เวลานอนดึก แต่พอได้ทาน EXO เป็นประจำทุกวัน เพียงแค่ 1 เดือน นอนดึกหรืออดนอน สิวแทบจะไม่ขึ้นเลย หน้าผ่องใสขึ้น จนมีคนรอบข้างทักเยอะมากว่าไปทำอะไรกับหน้ามา ส่วน UMI ทานตอนไม่ค่อยสบาย เพราะเป็นคนเลือดจาง ป่วยง่าย เหนื่อยง่าย ก็ทำให้ร่างกายฟื้นตัวภายในชั่วข้ามคืน', NULL, '1'),
	(5, 1, 'คุณริณรณัชย์ วรรัฐศุภการย์ ', 'นักเคมี', 'เคยทานอาหารเสริมควบคุมน้ำหนักมาหลายๆ แบรนด์มากค่ะ ทุกครั้งที่ทานต้องมีความตั้งใจสูงมาก แต่อดทนได้แค่ 2 อาทิตย์ก็เลิกทานแล้วเพราะไม่อร่อยและขั้นตอนในการทานที่ยุ่งยากตั้งแต่การเตรียมจนถึงการล้างอุปกรณ์ ทำให้เสียเวลาในชีวิตมาก แต่เมื่อได้ลองทาน SLM ชอบมากๆเลยค่ะ รสชาดอร่อย เพียงเด็ดแล้วดูดเท่านั้น', NULL, '4'),
	(6, 1, 'คุณนพรัตน์  ทองศักดิ์', 'วิศวกร', 'ก่อนนี้ตื่นมาตอนเช้าจะมีน้ำมูกใสๆ เวลาเข้าห้องประชุมจะไอและจาม อากาศเปลี่ยนแปลงนิดหน่อย จะเป็นหวัดได้ง่าย ทำให้ไม่ค่อยมีความสุขทุกครั้งที่มีลมเย็นๆ หรืออากาศเปลี่ยน พอได้ EXO และ UMI ไม่ทันได้สังเกตอาการก็ดีขึ้น ไม่ชอบการอักเสบครับ', NULL, '1'),
	(7, 1, 'นพ.สาโรจน์ คินธร', 'แพทย์ประจำห้องฉุกเฉิน รพ.เอกชน กรุงเทพฯ', 'ในเรื่องอาหารเสริม ผมเป็นคนหนึ่งที่ไม่เคยเชื่อมาก่อนว่ามันจะได้ผลจริง แต่ด้วยความที่ผมเป็นนักวิทยาศาสตร์ ผมก็พิสูจน์ด้วยตัวเอง อ่านข้อมูล ผมได้ลองใช้ SLM ในเวลาเพียงแค่ 2 เดือน น้ำหนักผมลดไป 8 กิโลกรัม หลังจากนั้นผมลองหยุดทาน ดูว่ามันจะเกิดอาการโยโย้เอฟเฟคไหม ผมหยุดมาตอนนี้ 6 เดือนแล้วครับ น้ำหนักก็ไม่ขึ้นครับ จึงทำให้ผมประทับใจใน SLM ', NULL, '4'),
	(8, 1, 'ภญ.ณัฏฐนิช นิลพงษ์', 'เจ้าของร้านยาและอุปกรณ์การแพทย์ 2 แห่ง', 'อาชีพเราจ่ายยาให้กับคนป่วยหลังจากที่เค้าป่วยไปแล้ว แต่อาหารเสริมเป็นการป้องกันก่อนที่จะป่วย และเสริมสร้างสุขภาพของตัวเองให้แข็งแรงขึ้นหลังจากที่ได้รู้จักกับ Agel และได้ใช้ผลิตภัณฑ์พบว่าตัวเองป่วย น้อยลงมากและเปลี่ยน จากวิตามินแบบเม็ดมาเป็น MIN แทน เพราะดูดซึมได้ดีกว่า .....ขอขอบคุณ Agel ที่ช่วยให้เราแข็งแรง', NULL, '3'),
	(9, 1, 'คุณนพดล สมเจริญศิลป์', 'ธุรกิจส่วนตัว จ.สุพรรณบุรี', 'ผลิตภัณฑ์ที่ประทับใจคือ EXO ในตอนแรกผมมีปัญหาเกี่ยวกับเรื่องผิวพรรณ ปกติถ้าเป็นหน้าหนาว ผิวก็จะแห้งมาก หลังจากที่ผมใช้ EXO ได้ประมาณ 15 ซอง ผมรู้สึกว่าผิวดีขึ้น กระจ่างใสขึ้น เริ่มมีคนทัก ผมต้องขอขอบคุณ EXO ด้วยครับ', NULL, '1'),
	(10, 1, 'คุณศิวภัสร์ ไพศาลสิรินกุล', 'ธุรกิจนำเข้ารถยนต์', 'เมื่อก่อนร่างกายผมจะมีอาการโรคเหน็บชาบ่อยมากที่แขนและขา หลังจากผมได้ทาน MIN ไปแล้ว เป็นระยะเวลาประมาณ 1 เดือน อาการชาก็หายไป ในตัว MIN จะมีวิตามินที่ร่างกายสามารถรับได้ 100% และมีแร่ธาตุ 75% หลังจากที่ผมได้ทานแล้ว อาการทุกอย่างผมก็หายไป ', NULL, '3'),
	(11, 1, 'คุณฐิตารีย์ พรหมสุวรรณ', 'อดีตเจ้าของธุรกิจส่วนตัว', 'ผลิตภัณฑ์ที่ประทับใจคือ MIN ค่ะ เพราะเมื่อก่อนจะมีปัญหาเรื่องสุขภาพ นอนกลางคืน เวลาเปิดแอร์แล้วมือจะชา พอทาน MIN ไปสักประมาณ 1 เดือน อาการเหล่านี้ก็จะหายไป ขอบคุณ MIN ค่ะ', NULL, '3'),
	(12, 1, 'คุณคณภัทร แพงพงา', 'ประกอบธุรกิจส่วนตัว', 'ประทับใจที่สุดคือตัว FLX ครับ ผมเองมีปัญหาเรื่องเข่ามานานแล้ว ตอนเป็นวัยรุ่น เตะบอลแล้วก็ไปผ่าเข่ามา ทำให้น้ำเลี้ยงข้อเข่าไม่ค่อยดี 10 กว่าปีที่ผมตีแบดมา แล้วก็มีปัญหาเรื่องเข่ามาตลอด วันนี้ได้ทาน FLX ทำให้ผมมีเข่าที่แข็งแรง แล้วก็กลับไปตีแบดได้อย่างไม่มีปัญหาเลยครับ ขอบคุณ FLX ครับ', NULL, '6'),
	(13, 1, ' คุณกวินพัฒน์ อัศวกิตติโสภณ', 'ติวเตอร์', 'ผลิตภัณฑ์ที่ประทับใจ คือ UMI เพราะเมื่อก่อนตอนที่ผมเป็นติวเตอร์ใหม่ๆ ผมสอนอย่างหนักมาก แล้วทุกครั้งทีผมสอนผมก็จะใช้ปากกาหมึกเคมี แล้วก็สูดมันเข้าไปทุกวัน ปรากฏว่าคอผมเลยอักเสบมาก แล้วผมจึงไปตรวจที่โรงพยาบาลพบว่าคอผมแดงหมดเลย ทำให้ผมมาทดลอง UMI ครับ มันสามารถช่วยให้อาการอักเสบหายไปได้ ขอบคุณ UMI มากครับ', NULL, '2'),
	(14, 1, 'คุณชญาณ์นันท์', 'พนักงานไอที กรุงเทพฯ', 'ก่อนหน้านี้ดาวได้ทดลองลดน้ำหนัก ทั้งทางที่ดีและไท่ดีมาแล้ว ปรากฏว่าเกิดอาการโยโย่เอฟเฟค น้ำหนักขึ้นมาประมาณ 15 - 20 กิโลกรัม แต่ว่าพอลองทาน SLM ได้ 3 เดือน น้ำหนักก็ลดได้ถึง 10 กิโลกรัม ต้องขอขอบคุณ SLM มากๆ คะ', NULL, '4'),
	(15, 1, 'คุณไกรฤกษ์ ทิมอ่อน', 'พนักงานประจำบริษัทเอกชน', 'ตัวที่ประทับใจคือ ชุด Ageless Skin Care คุณอาจจะแปลกใจว่าทำไมผู้ชายใช้ชุด Ageless จะบอกว่าปัจจุบันนี้ผู้ชายที่ดูแลตัวเอง ก็สามารถใช้เครื่องสำอางได้ครับ ที่ประทับใจเพราะตัวเองเป็นคนที่มีริ้วรอยบนใบหน้าเยอะ หลังจากที่ใช้ชุด Ageless ได้ 2 วัน ก็รู้สึกว่าหน้าตึงขึ้นและริ้วรอยก็จางลง ต้องขอขอบคุณ Ageless ครับ', NULL, '15'),
	(16, 1, 'คุณสวัสดิ์ ศรีสาคร', 'อดีตรับราชการทหารเรือ', 'ผลิตภัณฑ์สารอาหารแบเจล ผมชอบทุกตัวครับ เพราะรสชาติอร่อย มีสีสันหลากหลาย จดจำได้ง่าย ที่ผมใช้อย่างต่อเนื่องก็จะเป็นตัว EXO กับ UMI โดยปกติช่วงอากาศเปลี่ยนแปลงผมจะเป็นหวัด ปีละ 2-3 ครั้ง แต่หลังจากที่ผมใช้ EXO กับ UMI มา ใน 1 ปีผมก็ไม่เป็นหวัดหรือเจ็บป่วยอีกเลยครับ ขอบคุณครับ', NULL, '1, 2'),
	(17, 1, 'คุณจักรกฤษณ์ วงศ์ศักดา', 'ประกอบธุรกิจส่วนตัว', 'ผลิตภัณฑ์ที่ประทับใจคือ ตัว HRT วันหนึ่งผมเข้าไปฉีดยากันยุงในห้องลูก แล้วปรากฏว่าหายใจผิดจังหวะ พอได้ทาน HRT ไปหนึ่งซองเท่านั้น ประมาณ 10 นาที จากที่หายใจแล้ว แปร๊บ แบบรุนแรง พอหายใจอีกทีมันก็ดีขึ้น ผมรู้สึกว่า HRT ทำให้ผมประทับใจมากครับ', NULL, '7'),
	(18, 1, 'คุณกิตติพัฒน์', 'เจ้าของบริษัทออกแบบเว็บไซต์', 'สินค้าที่ประทับใจมากคือ UMI เพราะว่าก่อนหน้านี้ผมมีปัญหาเรื่องของทอนซิลอักเสบ พอมาใช้ UMI 1 ซองก็ทำให้อาการดีขึ้น จากที่เคยต้องให้เวลารักษาประมาณ 3-4 วัน ขอบคุณครับ', NULL, '2'),
	(19, 1, 'คุณอคิรณัฐ สุทธิพงษ์เกษตร', 'ประกอบธุรกิจส่วนตัว', 'ผมเป็นวัยรุ่นชอบนอนดึก แล้วก็จะมีแผลร้อนในปากค่อนข้างเยอะ แต่พอได้รู้จักกับตัว MIN ก็ทาน MIN มาประมาณ 1 เดือน นอนดึกเหมือนเดิม แต่แผลร้อนในหายไปหมดเลยครับ ตอนนี้ก็เลยประทับใจในตัว MIN มากๆ ขอบคุณครับ', NULL, '3'),
	(20, 1, 'คุณพิราวรรณ์ เปรมศรีโรจน์', 'แม่บ้าน จ.ภูเก็ต', 'ประทับใจตัว  EXO ค่ะ ก่อนหน้านี้มีอาการปวดประจำเดือน เวลามีประจำเดือนจะต้องกินยาต่อเนื่องกันถึง 3 วัน วันละ 3 มื้อ เพื่อบรรเทาอาการปวด แต่หลังจากได้ลองทาน EXO เพียงแค่เดือนแรกเท่านั้น ก็ทำให้รู้สึกว่าอาการปวดน้อยลง ยาก็ทาเพียงแค่เม็ดเดียว พอทานต่อเนื่องมาเดือนที่ 2 ก็ไม่ต้องทานยาแก้ปวดอีกเลย ขอบคุณ EXO ค่ะ ', NULL, '1'),
	(21, 1, 'คุณภัชชภร พิบูลศุภธนา', 'ประกอบธุรกิจส่วนตัว', 'ผลิตภัณฑ์ที่ประทับใจคือ EXO ค่ะ เพราะเมื่อก่อนเป็น Call Center จะเจอกับคอมพิวเตอร์และโทรศัพท์เยอะมาก ทำให้เป็นไมเกรน แต่พอทาน EXO ได้ประมาณ 2 เดือน ไมเกรนก้หายไปเลยค่ะ ขอบคุณ EXO', NULL, '1'),
	(22, 1, 'คุณกาญต์ เตชะบูรณเทพาภรณ์', 'อดีต Call Certer', 'ผมได้ให้คุณแม่ผมทาน SLM ก่อนหน้านี้แม่ผมมีปัญหาเกี่ยวกับเรื่องของตัวไตรกลีเซอไรด์ที่สูงเกินไปถึง 120 กว่าๆ หลังจากที่ทาน SLM ไปแค่เดือนเดียวเท่านั้น ไตรกลีเซอไรด์ก็ลดลงเหลือแค่ 170 กว่าๆ สิ่งนี้พิสูจน์ได้ว่า ตัว SLM นี่ได้ผลจริงๆครับ ขอบคุณครับ', NULL, '4'),
	(23, 1, 'คุณวรรทนา อัศกรกิ่ง', 'อดีตเซลอุปกรณ์การแพทย์ และเจ้าหน้าที่ห้องแล็บ', 'ก่อนหน้านี้มีปัญหาเรื่องปลายประสาทอักเสบ ชาซีกขวาก็มาทาน EXO กับ HRT คู่กัน ช่วงเวลาแค่เดือนสองเดือน อาการดีขึ้เกือบ 100% ตอนนี้ก็ทานมา 1 ปีแล้ว อาการดีขึ้นมาก ขอบคุณค่ะ', NULL, '1, 7'),
	(24, 1, 'คุณศรัญญา คำหล้า', 'นักศึกษา', 'ผลิตภัณฑ์ที่ประทับใจคือ EXO โดยตัวเองแล้วเป็นคนที่แอนตี้อาหารเสริมทุกชนิด เพราะว่าอยู่ในรูปแบบเม็ดบ้าง ผงบ้าง ทานลำบากแต่พอมาเจอตัวนี้ก็ง่ายค่ะ สะดวกในการพกพา ปัจจุบันมีปัญหาเรื่องสิว ก็ช่วยให้สิวยุบลง รักษาหน้าให้ดีขึ้น ขอบคุณ EXOค่ะ', NULL, '1'),
	(25, 1, 'คุณนภัสศรันย์ ชยาภรณ์ โปห์', 'อดีตผู้ช่วยผู้บริหารโรงแรม กรุงเทพฯ', 'ชื่นชอบในผลิตภัณฑ์ EXO ค่ะ ลูกชายของดิฉันเองที่ทานเพียง 1 อาทิตย์ สามารถหายจากโรคเหงือก ภูมิแพ้ ตรงนี้ทำให้ประทับใจมากๆค่ะ', NULL, '1');
/*!40000 ALTER TABLE `content_testimonial` ENABLE KEYS */;


# Dumping structure for table aoss.content_theme
CREATE TABLE IF NOT EXISTS `content_theme` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_theme: 6 rows
DELETE FROM `content_theme`;
/*!40000 ALTER TABLE `content_theme` DISABLE KEYS */;
INSERT INTO `content_theme` (`id`, `name`, `icon`) VALUES
	(1, 'summer', NULL),
	(2, 'luxury', NULL),
	(3, 'goodtime', NULL),
	(4, 'adrenaline', NULL),
	(5, 'deep_emotion', NULL),
	(6, 'leader_light', NULL);
/*!40000 ALTER TABLE `content_theme` ENABLE KEYS */;


# Dumping structure for table aoss.content_vdo
CREATE TABLE IF NOT EXISTS `content_vdo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_language` tinyint(3) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`id_language`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.content_vdo: 4 rows
DELETE FROM `content_vdo`;
/*!40000 ALTER TABLE `content_vdo` DISABLE KEYS */;
INSERT INTO `content_vdo` (`id`, `id_language`, `title`, `description`, `url`) VALUES
	(2, 1, 'ประสบการณ์ผู้ใช้ Agel', NULL, 'http://www.youtube.com/watch?v=5d_zt0paqIk'),
	(4, 1, 'ธุรกิจ Agel', NULL, 'http://www.youtube.com/watch?v=ZU2NdismEI4'),
	(1, 1, 'Agel Overview', NULL, 'http://www.youtube.com/watch?v=mVZ98uA2wx8'),
	(3, 1, 'บุคลากรทางการแพทย์', NULL, 'http://www.youtube.com/watch?v=QmSUQOeztwA');
/*!40000 ALTER TABLE `content_vdo` ENABLE KEYS */;


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
DELETE FROM `event`;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;


# Dumping structure for table aoss.event_tag
CREATE TABLE IF NOT EXISTS `event_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_event` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.event_tag: 0 rows
DELETE FROM `event_tag`;
/*!40000 ALTER TABLE `event_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_tag` ENABLE KEYS */;


# Dumping structure for table aoss.hotnews
CREATE TABLE IF NOT EXISTS `hotnews` (
  `id` int(10) DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `date_add` date DEFAULT NULL,
  `date_edit` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.hotnews: 0 rows
DELETE FROM `hotnews`;
/*!40000 ALTER TABLE `hotnews` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotnews` ENABLE KEYS */;


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
DELETE FROM `member`;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id_member`, `password`, `first_name`, `last_name`, `sex`, `birthday`, `email`, `detail`, `domain`, `type`, `status`, `date_register`, `date_expire`, `owner`, `id_theme`, `theme_color`) VALUES
	(0, 'agelNextGen', 'Administrator', 'IIC', 0, NULL, NULL, NULL, '', 0, 1, '0000-00-00', '0000-00-00', 0, 0, '0'),
	(448098, '123456', 'ชาคริญา', 'บุญทรัพย์', 1, NULL, NULL, NULL, 'agelcyber.com', 3, 1, '2010-10-01', '2011-10-04', 0, 4, 'red'),
	(450851, '123456', 'ศรชัย', 'คณะพล', 0, '0000-00-00', NULL, NULL, 'agelfootballclub.com', 3, 1, '2010-10-04', '2011-10-04', 0, 2, '0'),
	(244848, '123456', 'ภัคณัฎฐ์', 'ภิรมณ์พรธนากูล ', 1, NULL, NULL, NULL, 'agelmickey.com', 3, 1, '2010-10-04', '2011-10-04', 0, 5, 'green'),
	(595401, '123456', 'วราวุธ', 'มีสุภา', 0, '1988-06-15', 'warawut@startagel.com', NULL, 'startagel.com', 3, 1, '2010-10-01', '2011-10-01', 0, 5, 'green');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;


# Dumping structure for table aoss.member_contact_message
CREATE TABLE IF NOT EXISTS `member_contact_message` (
  `id_message` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_member` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `date_add` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_message`),
  KEY `Index` (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.member_contact_message: 0 rows
DELETE FROM `member_contact_message`;
/*!40000 ALTER TABLE `member_contact_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_contact_message` ENABLE KEYS */;


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
DELETE FROM `member_media`;
/*!40000 ALTER TABLE `member_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_media` ENABLE KEYS */;


# Dumping structure for table aoss.news
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0=news, 1=promotion',
  `topic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `date_add` datetime DEFAULT NULL,
  `date_edit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.news: 5 rows
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id_news`, `type`, `topic`, `detail`, `date_add`, `date_edit`) VALUES
	(1, 0, 'asdf', 'dasdfasdf', '2010-11-04 12:42:57', NULL),
	(2, 0, 'asdfffff', 'fffff', '2010-11-04 12:57:26', NULL),
	(3, 0, 'qweqwe', '12312321', '2010-11-04 14:28:15', NULL),
	(4, 0, 'qweqwe', '12312321', '2010-11-04 14:28:16', NULL),
	(5, 0, 'asdasd', 'qwreqeqweqweqwe', '2010-11-04 14:28:23', NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


# Dumping structure for table aoss.news_tag
CREATE TABLE IF NOT EXISTS `news_tag` (
  `id_tag` int(10) NOT NULL DEFAULT '0',
  `id_news` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`,`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.news_tag: 0 rows
DELETE FROM `news_tag`;
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
DELETE FROM `product`;
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
DELETE FROM `product_stat`;
/*!40000 ALTER TABLE `product_stat` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_stat` ENABLE KEYS */;


# Dumping structure for table aoss.product_tag
CREATE TABLE IF NOT EXISTS `product_tag` (
  `id_tag` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  PRIMARY KEY (`id_tag`,`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dumping data for table aoss.product_tag: 0 rows
DELETE FROM `product_tag`;
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
DELETE FROM `tag`;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
