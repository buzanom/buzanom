/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.38-MariaDB : Database - u934804553_bzn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u934804553_bzn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `u934804553_bzn`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `about` text NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`password`,`created_at`,`updated_at`,`deleted_at`,`name`,`first_name`,`last_name`,`username`,`mobile`,`address`,`city`,`country`,`postal`,`about`,`profile_pic`,`position`) values 
(1,'admin@admin.com','admin','2019-02-14 19:28:00',NULL,NULL,'admin','admin','buzanom','buzanom','07948402450','416,Sumel-6,Dudheswar Road','Ahmedabad','india','380004','IT Company','admin.jpg','ADMINISTRATOR');

/*Table structure for table `career_contacts` */

DROP TABLE IF EXISTS `career_contacts`;

CREATE TABLE `career_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `objective` text NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `employeement` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `career_contacts` */

insert  into `career_contacts`(`id`,`name`,`email`,`phone`,`address`,`objective`,`qualification`,`grade`,`position`,`employeement`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'snehal','snehalgajjar12@gmail.com','7046828181','new ranip, ahmedabad, gujarat-382480','test','b.e.','72.5','fullstack developer','php developer at virtual height',0,'2019-02-08 14:32:06',NULL,NULL),
(2,'snehal','snehalgajjar12@gmail.com','7046828181','new ranip, ahmedabad, gujarat-382480','test','b.e.','72.5','fullstack developer','php developer at virtual height',0,'2019-02-08 14:32:43',NULL,NULL),
(3,'snehal','snehalgajjar12@gmail.com','7046828181','new ranip, ahmedabad, gujarat-382480','test','b.e.','72.5','fullstack developer','php developer at virtual height',0,'2019-02-08 14:35:36',NULL,NULL),
(4,'snehal','snehalgajjar12@gmail.com','7046828181','new ranip, ahmedabad, gujarat-382480','test','b.e.','72.5','fullstack developer','php developer at virtual height',0,'2019-02-08 14:43:47',NULL,NULL),
(5,'snehal','snehalgajjar12@gmail.com','7046828181','new ranip, ahmedabad, gujarat-382480','test','b.e.','72.5','fullstack developer',NULL,0,'2019-02-08 14:43:54',NULL,NULL),
(6,'Gaurav','khokhani19@gmail.com','9409325680','Ahmedabad','fuhysdiufhgk','BE CE','first clas','PHP developer','NA',0,'2019-02-11 05:39:41',NULL,NULL);

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`name`,`email`,`subject`,`message`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:05:59',NULL,NULL),
(2,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:06:13',NULL,NULL),
(3,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:06:27',NULL,NULL),
(4,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:07:19',NULL,NULL),
(5,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:07:42',NULL,NULL),
(6,'snehal','gajjarsnehalkumar@gmail.com','new ranip','Test','2019-02-08 02:08:45',NULL,NULL),
(7,'test','test@test.com','test','tetst','2019-02-08 14:43:03',NULL,NULL),
(8,'avsdhgfa','a@ab.com','aaaadsfd','jfhkjlgwdf','2019-02-11 05:37:34',NULL,NULL),
(9,'Gaurav','khokhani19@gmail.com','Ahmedabad','jgfdsjhgfjisd','2019-02-11 18:07:20',NULL,NULL);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(20) NOT NULL,
  `parent_department_id` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`id`,`department`,`parent_department_id`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'front_end','3',1,'2019-03-08 18:39:51',NULL,NULL),
(2,'back_end','3',1,'2019-03-08 18:39:51',NULL,NULL),
(3,'technical','0',1,'2019-03-08 18:39:39',NULL,NULL),
(4,'non_trechnical','0',1,'2019-03-08 18:39:39',NULL,NULL),
(5,'php','2',1,'2019-03-08 18:40:06',NULL,NULL),
(6,'javascript','2',1,'2019-03-08 18:40:07',NULL,NULL),
(7,'angularjs','7',1,'2019-03-08 18:41:23',NULL,NULL),
(8,'reactjs','7',1,'2019-03-08 18:41:24',NULL,NULL),
(9,'react_native','7',1,'2019-03-08 18:41:25',NULL,NULL),
(10,'adobe&corel','1',1,'2019-03-08 18:40:17',NULL,NULL),
(11,'.net','2',1,'2019-03-08 18:40:18',NULL,NULL),
(12,'haskell','11',1,'2019-03-08 18:41:17',NULL,NULL),
(13,'android','15',1,'2019-03-08 18:41:15',NULL,NULL),
(14,'kotlin','7',1,'2019-03-08 18:41:27',NULL,NULL),
(15,'java','2',1,'2019-03-08 18:40:20',NULL,NULL),
(16,'html&css&sass&less','1',1,'2019-03-08 18:40:33',NULL,NULL),
(17,'laravel','5',1,'2019-03-08 18:41:00',NULL,NULL),
(18,'codeigniter','5',1,'2019-03-08 18:41:00',NULL,NULL),
(19,'full_stack','3',1,'2019-03-08 18:42:34',NULL,NULL),
(20,'min_stack','2',1,'2019-03-08 18:42:39',NULL,NULL);

/*Table structure for table `emp_salary` */

DROP TABLE IF EXISTS `emp_salary`;

CREATE TABLE `emp_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `days` varchar(20) NOT NULL,
  `final_salary` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `emp_salary` */

/*Table structure for table `emp_track` */

DROP TABLE IF EXISTS `emp_track`;

CREATE TABLE `emp_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `faceloop` varchar(200) DEFAULT NULL,
  `timeleft` time DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `emp_track` */

insert  into `emp_track`(`id`,`emp_id`,`date`,`starttime`,`endtime`,`faceloop`,`timeleft`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'1','2019-02-26','08:23:52','00:20:19',NULL,'07:59:33','P','2019-02-26 15:26:35','2019-02-26 09:56:35',NULL);

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `department_id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `career_id` varchar(20) DEFAULT NULL,
  `offer_id` varchar(20) NOT NULL,
  `joining_id` varchar(20) NOT NULL,
  `profile_id` varchar(20) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '1' COMMENT '0 = Trainee, 1 = fresher, 2 = basic, 3 = intermediate, 4 = expert',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`id`,`name`,`email`,`password`,`username`,`mobile`,`department_id`,`post_id`,`type`,`career_id`,`offer_id`,`joining_id`,`profile_id`,`level`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'snehal','snehal@buzanom.com','snehal@12345','snehal12','7046828181','3','1','1','1','1','1','1',1,1,'2019-03-08 18:43:19',NULL,NULL);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `parent_menu_id` varchar(20) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

/*Table structure for table `site_settings` */

DROP TABLE IF EXISTS `site_settings`;

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) NOT NULL,
  `tagline` varchar(250) NOT NULL,
  `address1` text NOT NULL,
  `address2` text,
  `support_email` varchar(50) NOT NULL,
  `info_email` varchar(50) NOT NULL,
  `hr_email` varchar(50) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `contact2` varchar(20) DEFAULT NULL,
  `facebook_link` text,
  `linkedin_link` text,
  `pinterest_link` text,
  `twitter_link` text,
  `googleplus_link` text,
  `skype_link` text,
  `github_link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `site_settings` */

insert  into `site_settings`(`id`,`logo`,`tagline`,`address1`,`address2`,`support_email`,`info_email`,`hr_email`,`lat`,`lang`,`contact1`,`contact2`,`facebook_link`,`linkedin_link`,`pinterest_link`,`twitter_link`,`googleplus_link`,`skype_link`,`github_link`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'logo.png','Simply Coded Unique Designs','416, Sumel-6,Dudheswar Road, Ahmedabad, Gujarat-380004',NULL,'support.buzanom@zoho.com','info.buzanom@zoho.com','hr.buzanom@zoho.com','23.045893','432.584390','079-48402450',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-03-08 14:53:13','2019-03-08 09:23:13',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
