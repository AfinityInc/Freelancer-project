-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.33-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for freelancing_website
DROP DATABASE IF EXISTS `freelancing_website`;
CREATE DATABASE IF NOT EXISTS `freelancing_website` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `freelancing_website`;


-- Dumping structure for table freelancing_website.tbl_admin
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ADMIN_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(250) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_buyer
DROP TABLE IF EXISTS `tbl_buyer`;
CREATE TABLE IF NOT EXISTS `tbl_buyer` (
  `BUYER_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `BUYER_NAME` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_SKILLS` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_DESCRIPTION` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_IMAGE` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_ADDRESS` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_STATUS` varchar(250) NOT NULL DEFAULT 'offline',
  PRIMARY KEY (`BUYER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_buyer: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_buyer` DISABLE KEYS */;
REPLACE INTO `tbl_buyer` (`BUYER_ID`, `BUYER_NAME`, `BUYER_SKILLS`, `BUYER_DESCRIPTION`, `BUYER_IMAGE`, `BUYER_ADDRESS`, `BUYER_STATUS`) VALUES
	(1, 'malik', 'ytdufy', 'rstydy', '21192039_829177647245170_2373096897927751996_n.jpg', 'China,Chunking street', 'offline'),
	(2, 'sam', 'hs', 'hha', '10389692_1531141963804287_1745868577496834563_n.jpg', 'rdthf', 'offline');
/*!40000 ALTER TABLE `tbl_buyer` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_chat
DROP TABLE IF EXISTS `tbl_chat`;
CREATE TABLE IF NOT EXISTS `tbl_chat` (
  `MESSAGE_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `USER_FROM` varchar(250) NOT NULL,
  `USER_TO` varchar(250) NOT NULL,
  `MESSAGE` varchar(250) NOT NULL,
  `MESSAGE_DATE` date NOT NULL,
  `MESSAGE_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MESSAGE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_chat: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_chat` DISABLE KEYS */;
REPLACE INTO `tbl_chat` (`MESSAGE_ID`, `USER_FROM`, `USER_TO`, `MESSAGE`, `MESSAGE_DATE`, `MESSAGE_TIME`) VALUES
	(4, 'arslan', 'sam', 'g', '0000-00-00', '2018-10-12 10:33:42'),
	(9, 'arslan', 'malik', 'h', '0000-00-00', '2018-10-12 10:45:46'),
	(11, 'sam', 'arslan', 'ahu', '0000-00-00', '2018-10-12 12:20:37'),
	(12, 'malik', 'arslan', 'ggggggggggggggg', '0000-00-00', '2018-10-12 12:22:41'),
	(17, 'malik', 'arslan', 'ok', '0000-00-00', '2018-10-12 16:29:17'),
	(18, 'arslan', 'malik', 'heloooooooooooooooooooooooooooooooooooooooooooooooooooooooo', '0000-00-00', '2018-10-12 16:36:35');
/*!40000 ALTER TABLE `tbl_chat` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_gig
DROP TABLE IF EXISTS `tbl_gig`;
CREATE TABLE IF NOT EXISTS `tbl_gig` (
  `GIG_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `BUYER_ID` int(11) unsigned NOT NULL DEFAULT '0',
  `BUER_NAME` varchar(250) NOT NULL DEFAULT '0',
  `BUYER_IMAGE` varchar(250) NOT NULL DEFAULT '0',
  `GIG_DESCRIPTION` varchar(250) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`GIG_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_gig: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_gig` DISABLE KEYS */;
REPLACE INTO `tbl_gig` (`GIG_ID`, `BUYER_ID`, `BUER_NAME`, `BUYER_IMAGE`, `GIG_DESCRIPTION`, `TIME`) VALUES
	(1, 1, 'uyfigu', 'i.jpg', 'ty', '2018-10-10 12:29:33'),
	(2, 2, 'fhgj', 'j.jpg', 'ii', '2018-10-10 12:30:06');
/*!40000 ALTER TABLE `tbl_gig` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_invoice
DROP TABLE IF EXISTS `tbl_invoice`;
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `INVOICE_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `BUYER_ID` int(11) unsigned NOT NULL DEFAULT '0',
  `AMOUNT` float NOT NULL,
  `QUANTITY` varchar(250) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `DUE_DATE` date NOT NULL,
  `STATUS` int(11) unsigned NOT NULL,
  `INVOICE_NUMBER` int(11) unsigned NOT NULL,
  PRIMARY KEY (`INVOICE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_invoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
REPLACE INTO `tbl_invoice` (`INVOICE_ID`, `BUYER_ID`, `AMOUNT`, `QUANTITY`, `DESCRIPTION`, `ISSUE_DATE`, `DUE_DATE`, `STATUS`, `INVOICE_NUMBER`) VALUES
	(1, 1, 15, '2', 'dhfgkj', '0000-00-00', '0000-00-00', 1, 13);
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_project
DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE IF NOT EXISTS `tbl_project` (
  `PROJECT_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `PROJECT_NAME` varchar(250) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `SkillsRequired` varchar(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  PRIMARY KEY (`PROJECT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_project: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_project` DISABLE KEYS */;
REPLACE INTO `tbl_project` (`PROJECT_ID`, `PROJECT_NAME`, `START_DATE`, `END_DATE`, `DESCRIPTION`, `SkillsRequired`, `Price`) VALUES
	(1, 'fdgdfg', '2018-10-10', '2018-10-10', 'ldnxvldmv', 'KLNBXKV', 'L;MXLCV'),
	(2, 'ghfh', '0000-00-00', '0000-00-00', 'drcyv', 'srdtyfy', '85');
/*!40000 ALTER TABLE `tbl_project` ENABLE KEYS */;


-- Dumping structure for table freelancing_website.tbl_seller
DROP TABLE IF EXISTS `tbl_seller`;
CREATE TABLE IF NOT EXISTS `tbl_seller` (
  `SELLER_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `SELLER_NAME` varchar(250) NOT NULL,
  `SELLER_EMAIL` varchar(250) NOT NULL,
  `SELLER_PASSWORD` varchar(250) NOT NULL,
  `GENDER` varchar(250) NOT NULL,
  `SKILLS` varchar(250) NOT NULL,
  `QUALIFICATION` varchar(250) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `ADDRESS` varchar(250) NOT NULL,
  `IMAGE` varchar(250) NOT NULL,
  PRIMARY KEY (`SELLER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table freelancing_website.tbl_seller: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_seller` DISABLE KEYS */;
REPLACE INTO `tbl_seller` (`SELLER_ID`, `SELLER_NAME`, `SELLER_EMAIL`, `SELLER_PASSWORD`, `GENDER`, `SKILLS`, `QUALIFICATION`, `DESCRIPTION`, `ADDRESS`, `IMAGE`) VALUES
	(1, 'arslan', 'atos@gmail.com', 'myheart', 'Male', 'WEbsite,IT and Software', 'Bachelor', 'I am a web developer.', 'PSKT01', '14390636_1775089202742894_3342321862837730535_n.jpg'),
	(3, 'ihtesham', 'atoE@gmail.com', 'hmm', 'Male', 'Mobile phone and computing', 'Intermediate', 'rtdtfyg', 'cghvjb', '558881_1391610641090754_1796681701_n.jpg');
/*!40000 ALTER TABLE `tbl_seller` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
