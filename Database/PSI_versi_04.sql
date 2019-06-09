/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.35-MariaDB : Database - database_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`database_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `database_project`;

/*Table structure for table `anggaran_dana` */

DROP TABLE IF EXISTS `anggaran_dana`;

CREATE TABLE `anggaran_dana` (
  `Id_Anggaran_Dana` int(11) NOT NULL AUTO_INCREMENT,
  `unit` int(24) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Total_Anggaran` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Anggaran_Dana`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `anggaran_dana` */

insert  into `anggaran_dana`(`Id_Anggaran_Dana`,`unit`,`Tahun`,`Total_Anggaran`) values (1,0,2020,'Rp. 145.000.000'),(2,0,2020,'95000000'),(3,0,2020,'130000000'),(4,0,2020,'88000000'),(5,0,2020,'125000000'),(6,0,2020,'150000000'),(7,0,2020,'145000000'),(8,0,2020,'127000000');

/*Table structure for table `dana_bulanan` */

DROP TABLE IF EXISTS `dana_bulanan`;

CREATE TABLE `dana_bulanan` (
  `Id_Dana_Bulanan` int(11) NOT NULL AUTO_INCREMENT,
  `Bulan` varchar(20) NOT NULL,
  `Total_Dana_Dibutuhkan` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Id_Dana_Bulanan`),
  KEY `FK_dana_bulanan` (`Status`),
  CONSTRAINT `FK_dana_bulanan` FOREIGN KEY (`Status`) REFERENCES `status` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dana_bulanan` */

insert  into `dana_bulanan`(`Id_Dana_Bulanan`,`Bulan`,`Total_Dana_Dibutuhkan`,`Status`) values (5,'Mei','Rp. 4.235.235',1),(6,'September','Rp. 2.400.000',1),(7,'November','Rp. 9.000.000',1);

/*Table structure for table `detail_penggunaan_dana` */

DROP TABLE IF EXISTS `detail_penggunaan_dana`;

CREATE TABLE `detail_penggunaan_dana` (
  `Id_Laporan_Dana` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(40) NOT NULL,
  `Satuan` varchar(11) NOT NULL,
  `Harga_Persatuan` varchar(20) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Total_Harga_Item` varchar(20) NOT NULL,
  `File` varchar(120) NOT NULL,
  PRIMARY KEY (`Id_Laporan_Dana`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `detail_penggunaan_dana` */

insert  into `detail_penggunaan_dana`(`Id_Laporan_Dana`,`Item`,`Satuan`,`Harga_Persatuan`,`Jumlah`,`Total_Harga_Item`,`File`) values (1,'223421','3523','Rp. 34.343',21,'3234234','12S16049 - ROSA DELIMA MENDROFA.pdf'),(2,'safas','sadas','Rp. 442.341',32,'1241451','12S16049 - ROSA DELIMA MENDROFA.pdf'),(3,'minyak wangi','botol','Rp. 12.000',1,'12000','16.04.1036_jurnal_eproc(1).pdf');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `Id_Kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `Sequence` varchar(4) NOT NULL,
  `deskripsi` varchar(120) NOT NULL,
  `PIC` varchar(40) NOT NULL,
  `dana_terpakai` int(11) NOT NULL,
  `rencana_waktu_pelaksanaan` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`Id_Kegiatan`,`Sequence`,`deskripsi`,`PIC`,`dana_terpakai`,`rencana_waktu_pelaksanaan`) values (1,'','sadas','asdas',12000000,'2019-05-29');

/*Table structure for table `penggunaan_anggaran` */

DROP TABLE IF EXISTS `penggunaan_anggaran`;

CREATE TABLE `penggunaan_anggaran` (
  `Id_Penggunaan_Anggaran` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `total_diajukan` varchar(20) NOT NULL,
  `snoozed_WR2` varchar(40) NOT NULL,
  `WR2` varchar(40) NOT NULL,
  `tanggal_persetujuan_WR2` date NOT NULL,
  `batas_tanggal_persetujuan_WR2` date NOT NULL,
  `snoozed_controller` varchar(40) NOT NULL,
  `batas_tanggal_persetujuan_controller` date NOT NULL,
  `tanggal_persetujuan_controller` date NOT NULL,
  `controller` varchar(40) NOT NULL,
  `snoozed_keuangan` varchar(40) NOT NULL,
  `batas_tanggal_persetujuan_keuangan` date NOT NULL,
  `taggal_persetujuan_keuangan` date NOT NULL,
  `keuangan` varchar(40) NOT NULL,
  `snoozed_atasan` varchar(40) NOT NULL,
  `batas_tanggal_persetujuan_atasan` date NOT NULL,
  `tanggal_persetujuan_atasan` date NOT NULL,
  `atasan` varchar(40) NOT NULL,
  `verifikasi` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Penggunaan_Anggaran`),
  CONSTRAINT `FK_penggunaan_anggaran` FOREIGN KEY (`Id_Penggunaan_Anggaran`) REFERENCES `kegiatan` (`Id_Kegiatan`),
  CONSTRAINT `FK_penggunaan_anggaran_02` FOREIGN KEY (`Id_Penggunaan_Anggaran`) REFERENCES `anggaran_dana` (`Id_Anggaran_Dana`),
  CONSTRAINT `FK_penggunaan_anggaran_03` FOREIGN KEY (`Id_Penggunaan_Anggaran`) REFERENCES `detail_penggunaan_dana` (`Id_Laporan_Dana`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penggunaan_anggaran` */

/*Table structure for table `permintaan_dana` */

DROP TABLE IF EXISTS `permintaan_dana`;

CREATE TABLE `permintaan_dana` (
  `Nama_Kegiatan` varchar(120) NOT NULL,
  `deskripsi` varchar(120) NOT NULL,
  `Rencana_Waktu_Pelaksanaan` date NOT NULL,
  `Jumlah_Dana` varchar(20) NOT NULL,
  PRIMARY KEY (`Nama_Kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `permintaan_dana` */

insert  into `permintaan_dana`(`Nama_Kegiatan`,`deskripsi`,`Rencana_Waktu_Pelaksanaan`,`Jumlah_Dana`) values ('asas','dfsdf','2019-06-13','Rp. 2.312.412.421'),('Bebras','Kompetisi Bebras antar SMA','2019-06-12','Rp. 15.000.000'),('Kopi Sore','Mengajak Anggota Himpunan untuk lebih Dekat satu sama lain','2019-05-16','Rp. 1.500.000'),('Refreshing','Meningkatkan rasa solidaritas Himpunan dengan berbagai kegiatan','2019-05-01','Rp. 2.500.000'),('Refreshing asfasf','qwrqwrqw','2019-06-20','Rp. 3.235.235'),('REFRESING','silaturahmi','2019-05-30','Rp. 89.000'),('zsrr','bdygsyu','2019-05-30','Rp. 433.535');

/*Table structure for table `rka` */

DROP TABLE IF EXISTS `rka`;

CREATE TABLE `rka` (
  `Id_Rka` int(11) NOT NULL AUTO_INCREMENT,
  `Tahun` int(11) NOT NULL,
  `Deskripsi` varchar(120) NOT NULL,
  `Total_Anggaran` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id_Rka`),
  KEY `FK_rka` (`status`),
  CONSTRAINT `FK_rka` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `rka` */

insert  into `rka`(`Id_Rka`,`Tahun`,`Deskripsi`,`Total_Anggaran`,`status`) values (7,2021,'ada','Rp. 34.343',1),(8,2024,'tahun depan','Rp. 560.000',1),(9,2023,'TAHUN DEPAN','Rp. 600.000',1);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status`) values (1,'Pending'),(2,'Accepted'),(3,'Rejected');

/*Table structure for table `unit` */

DROP TABLE IF EXISTS `unit`;

CREATE TABLE `unit` (
  `Id_Unit` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(40) NOT NULL,
  `nama` varchar(8) NOT NULL,
  `deskripsi` varchar(120) NOT NULL,
  PRIMARY KEY (`Id_Unit`),
  CONSTRAINT `FK_unit` FOREIGN KEY (`Id_Unit`) REFERENCES `rka` (`Id_Rka`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `unit` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `program_studi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`role`,`status`,`created_at`,`updated_at`,`program_studi`,`jabatan`) values (11,'admin','vpnmGId3mPT_VsPNGXR3BhffcP4L81Nk','$2y$13$FaMKNs13H4pqOe8OpuE5YunHuhgz1jekvDJarmyFR2m.YJoDzBSk2',NULL,'admin@gmail.com',30,10,1510644852,1510644852,NULL,'Keuangan'),(12,'iss16017','Zs71RMwtNbKxvCRP_sMuB6cd1l3wx9og','$2y$13$mAJ0svbYVzbOSsd2UlJCguASFh6FBboPGsFM0vyvGfD0CAhzKwpbi',NULL,'iss16017@gmail.com',20,10,1558117740,1558117740,NULL,'PIC'),(13,'Simaremare','6kdUThSUWV1-nBVdEpcR0-zXR33US5u_','$2y$13$N5x6VT85MHEbT0I5QVq3n.dk/scY.XgwIJ/hxuU0mbZtXPi9l4Xl.',NULL,'mario@gmail.com',10,9,1560073484,1560073484,NULL,'Kaprodi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
