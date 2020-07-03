/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.4.6-MariaDB : Database - arm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`arm` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `arm`;

/*Table structure for table `tb_1item` */

DROP TABLE IF EXISTS `tb_1item`;

CREATE TABLE `tb_1item` (
  `item` varchar(25) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `support` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_1item` */

/*Table structure for table `tb_2item` */

DROP TABLE IF EXISTS `tb_2item`;

CREATE TABLE `tb_2item` (
  `item1` varchar(25) DEFAULT NULL,
  `item2` varchar(25) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `support` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_2item` */

/*Table structure for table `tb_3item` */

DROP TABLE IF EXISTS `tb_3item`;

CREATE TABLE `tb_3item` (
  `item1` varchar(25) DEFAULT NULL,
  `item2` varchar(25) DEFAULT NULL,
  `item3` varchar(25) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `support` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_3item` */

/*Table structure for table `tb_confidence` */

DROP TABLE IF EXISTS `tb_confidence`;

CREATE TABLE `tb_confidence` (
  `item1` varchar(25) DEFAULT NULL,
  `item2` varchar(25) DEFAULT NULL,
  `total_item1` int(11) DEFAULT NULL,
  `total_item2` int(11) DEFAULT NULL,
  `total_item12` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_confidence` */

/*Table structure for table `tb_processlog` */

DROP TABLE IF EXISTS `tb_processlog`;

CREATE TABLE `tb_processlog` (
  `id_process` varchar(7) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `min_support` int(11) DEFAULT NULL,
  `min_confidence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_processlog` */

/*Table structure for table `tb_transaction` */

DROP TABLE IF EXISTS `tb_transaction`;

CREATE TABLE `tb_transaction` (
  `id_td` varchar(5) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `items` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_transaction` */

insert  into `tb_transaction`(`id_td`,`transaction_date`,`items`) values ('00001','2017-01-01','orange juice, pink guava juice, mango juice'),('00002','2017-01-01','strawberry juice, pink guava juice, mango juice'),('00003','2017-01-01','strawberry frozen, apple juice, pinkguava juice, orange juice, mango juice, simple syrup'),('00004','2017-01-01','strawberry juice, orange juice, pinkguava juice, mango juice, soursop juice, lemon juice\r\n'),('00005','2017-01-01','mango juice, strawberry juice, pinkguava juice, lychee juice'),('00006','2017-01-01','pinkguava juice, orange juice, pineapple juice'),('00007','2017-01-01','strawberry juice, orange juice, pinkguava juice, mango juice, soursop juice\r\n'),('00008','2017-01-01','mango juice, strawberry juice, pinkguava juice, lychee juice\r\n'),('00009','2017-01-01','orange juice, pinapple juice, pinkguava juice, mango juice\r\n'),('00010','2017-01-01','strawberry juice, orange juice, pinkguava juice, mango juice, apple juice\r\n'),('00000','2017-01-01','orange juice, pinkguava juice, soursop juice, apple juice');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `level` enum('factory','purchasing') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`username`,`password`,`fullname`,`address`,`phone_no`,`level`) values ('USR01','admin','admin','Admin','Batujajar','0821','factory');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
