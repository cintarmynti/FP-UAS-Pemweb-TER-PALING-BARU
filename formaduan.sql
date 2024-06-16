/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - formaduan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`formaduan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `formaduan`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username_admin` char(15) NOT NULL,
  `password_admin` char(8) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username_admin`,`password_admin`) values 
(5,'Maula','admin005'),
(111,'Nanda','admin111'),
(222,'Rhimba','admin222'),
(333,'Raihan','admin333'),
(444,'Habib','admin444');

/*Table structure for table `anonim` */

DROP TABLE IF EXISTS `anonim`;

CREATE TABLE `anonim` (
  `idaduan_anonim` int(5) NOT NULL,
  `judul_anonim` varchar(50) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `lokasi_anonim` varchar(25) NOT NULL,
  `alamat_anonim` varchar(70) NOT NULL,
  `kategori_anonim` char(20) NOT NULL,
  `aduan_anonim` varchar(1000) NOT NULL,
  PRIMARY KEY (`idaduan_anonim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `anonim` */

insert  into `anonim`(`idaduan_anonim`,`judul_anonim`,`tanggal`,`lokasi_anonim`,`alamat_anonim`,`kategori_anonim`,`aduan_anonim`) values 
(0,'','0000-00-00','','','','');

/*Table structure for table `non_anonim` */

DROP TABLE IF EXISTS `non_anonim`;

CREATE TABLE `non_anonim` (
  `id_aduan` int(5) NOT NULL,
  `judul_aduan` varchar(50) NOT NULL,
  `nama` char(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_aduan` date NOT NULL,
  `lokasi_aduan` char(25) NOT NULL,
  `alamat_aduan` varchar(50) NOT NULL,
  `kategori_aduan` char(15) NOT NULL,
  `aduan` varchar(500) NOT NULL,
  PRIMARY KEY (`id_aduan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `non_anonim` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
