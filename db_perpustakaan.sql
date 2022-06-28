/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpustakaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `perpustakaan`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` varchar(13) NOT NULL,
  `nama_buku` varchar(20) NOT NULL,
  `penulis` varchar(15) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `tahun_terbit` int(8) NOT NULL,
  `id_operator` varchar(13) NOT NULL,
  `status` varchar(15) NOT NULL,
  `gambar` varchar(254) NOT NULL,
  PRIMARY KEY (`id_buku`),
  KEY `id_operator` (`id_operator`),
  CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`id_buku`,`nama_buku`,`penulis`,`penerbit`,`tahun_terbit`,`id_operator`,`status`,`gambar`) values 
('B-001','arduino','aziz','erlangga',2019,'O-001','ada','IMG_20181205_141546_2_scaled.jpg'),
('B-002','arduino','joko','erlangga',2019,'O-001','terpinjam','merah_putih-wallpaper-1366x768.jpg'),
('B-003','qq','www','ewee',0,'O-001','terpinjam','garuda_by_firnadi-d824aaw-1.jpg'),
('B-004','mega','joko','erlangga',2019,'O-001','ada','img-20180916-wa0032-5b9e4347c112fe55802c1142.jpg');

/*Table structure for table `data_diri` */

DROP TABLE IF EXISTS `data_diri`;

CREATE TABLE `data_diri` (
  `id_data_diri` varchar(13) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `id_siswa` varchar(13) NOT NULL,
  PRIMARY KEY (`id_data_diri`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `data_diri_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_diri` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id_akun` varchar(13) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_pengguna` varchar(13) NOT NULL,
  PRIMARY KEY (`id_akun`),
  KEY `id_siswa` (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`id_akun`,`username`,`password`,`email`,`id_pengguna`) values 
('A-001','abdul aziz','202cb962ac59075b964b07152d234b70','sattaraziz05@gmail.com','S-001'),
('U-001','rikza','202cb962ac59075b964b07152d234b70','rikza123@gmail.com','S-002'),
('U-002','wildan','202cb962ac59075b964b07152d234b70','wildan123@gmail.com','S-003'),
('U-003','rofiq bangka','202cb962ac59075b964b07152d234b70','rofiq111@gmail.com','S-004'),
('U-004','admin','202cb962ac59075b964b07152d234b70','wildan123@gmail.com','S-005'),
('U-005','rofiq bangka','202cb962ac59075b964b07152d234b70','rofiq111@gmail.com','S-006'),
('U-006','rofiq bangka','202cb962ac59075b964b07152d234b70','rofiq111@gmail.com','S-007'),
('U-007','paijo','202cb962ac59075b964b07152d234b70','rofiq111@gmail.com','S-008'),
('U-008','dul_aziz','202cb962ac59075b964b07152d234b70','aziz123@gmail.com','S-009'),
('U-009','paijo','698d51a19d8a121ce581499d7b701668','rofiq111@gmail.com','S-010');

/*Table structure for table `operator` */

DROP TABLE IF EXISTS `operator`;

CREATE TABLE `operator` (
  `id_operator` varchar(13) NOT NULL,
  `nama_operator` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `operator` */

insert  into `operator`(`id_operator`,`nama_operator`,`tempat_lahir`,`alamat`) values 
('O-001','abdul aziz','Cirebon','ds kedung bunder kec gempol kab cirebon'),
('O-002','ahmad aziz','cirebon jawa barat','indonesia');

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(15) NOT NULL AUTO_INCREMENT,
  `id_siswa` varchar(13) NOT NULL,
  `id_buku` varchar(13) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `id_operator` varchar(13) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_siswa` (`id_siswa`),
  KEY `id_operator` (`id_operator`),
  KEY `id_buku` (`id_buku`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`),
  CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman` */

insert  into `peminjaman`(`id_peminjaman`,`id_siswa`,`id_buku`,`tgl_peminjaman`,`tgl_pengembalian`,`id_operator`,`status`) values 
(17,'S-001','B-001','2022-03-26','2022-03-29','O-001','ada'),
(18,'S-003','B-002','2022-03-11','2022-03-15','O-001','terpinjam'),
(19,'S-003','B-003','2022-03-18','2022-03-29','O-001','terpinjam'),
(20,'S-003','B-001','2022-03-17','2022-03-19','O-001','ada');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `id_siswa` varchar(13) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `siswa` */

insert  into `siswa`(`id_siswa`,`nama`,`alamat`,`kelas`) values 
('S-001','abdul aziz','cirebon','XII TKJ B'),
('S-002','rikza','tulungagung','XII TKJ B'),
('S-003','wildan','papua','XII TKJ C'),
('S-004','rofiq khasuba','indonesia','XII TKJ B'),
('S-005','aziz','cirebon','XII TKJ B'),
('S-006','rofiq khasuba','cirebon','XII TKJ B'),
('S-007','rofiq khasuba','indonesia','XII TKJ B'),
('S-008','rofiq khasuba','indonesia','XII TKJ B'),
('S-009','abdul aziz','cirebon','XII TKJ B'),
('S-010','abdul aziz','cirebon','XII TKJ B');

/*Table structure for table `data_buku` */

DROP TABLE IF EXISTS `data_buku`;

/*!50001 DROP VIEW IF EXISTS `data_buku` */;
/*!50001 DROP TABLE IF EXISTS `data_buku` */;

/*!50001 CREATE TABLE  `data_buku`(
 `id_buku` varchar(13) ,
 `nama_buku` varchar(20) ,
 `penulis` varchar(15) ,
 `penerbit` varchar(15) ,
 `tahun_terbit` int(8) ,
 `id_operator` varchar(13) 
)*/;

/*Table structure for table `data_peminjaman` */

DROP TABLE IF EXISTS `data_peminjaman`;

/*!50001 DROP VIEW IF EXISTS `data_peminjaman` */;
/*!50001 DROP TABLE IF EXISTS `data_peminjaman` */;

/*!50001 CREATE TABLE  `data_peminjaman`(
 `id_peminjaman` int(15) ,
 `id_siswa` varchar(13) ,
 `id_buku` varchar(13) ,
 `tgl_peminjaman` date ,
 `tgl_pengembalian` date ,
 `id_operator` varchar(13) ,
 `status` varchar(10) ,
 `gambar` varchar(254) 
)*/;

/*Table structure for table `laporan_peminjaman` */

DROP TABLE IF EXISTS `laporan_peminjaman`;

/*!50001 DROP VIEW IF EXISTS `laporan_peminjaman` */;
/*!50001 DROP TABLE IF EXISTS `laporan_peminjaman` */;

/*!50001 CREATE TABLE  `laporan_peminjaman`(
 `id_peminjaman` int(15) ,
 `id_siswa` varchar(13) ,
 `id_buku` varchar(13) ,
 `tgl_peminjaman` date ,
 `tgl_pengembalian` date ,
 `nama` varchar(15) ,
 `nama_buku` varchar(20) ,
 `status` varchar(10) 
)*/;

/*View structure for view data_buku */

/*!50001 DROP TABLE IF EXISTS `data_buku` */;
/*!50001 DROP VIEW IF EXISTS `data_buku` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_buku` AS (select `buku`.`id_buku` AS `id_buku`,`buku`.`nama_buku` AS `nama_buku`,`buku`.`penulis` AS `penulis`,`buku`.`penerbit` AS `penerbit`,`buku`.`tahun_terbit` AS `tahun_terbit`,`buku`.`id_operator` AS `id_operator` from `buku`) */;

/*View structure for view data_peminjaman */

/*!50001 DROP TABLE IF EXISTS `data_peminjaman` */;
/*!50001 DROP VIEW IF EXISTS `data_peminjaman` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_peminjaman` AS (select `peminjaman`.`id_peminjaman` AS `id_peminjaman`,`peminjaman`.`id_siswa` AS `id_siswa`,`peminjaman`.`id_buku` AS `id_buku`,`peminjaman`.`tgl_peminjaman` AS `tgl_peminjaman`,`peminjaman`.`tgl_pengembalian` AS `tgl_pengembalian`,`peminjaman`.`id_operator` AS `id_operator`,`peminjaman`.`status` AS `status`,`buku`.`gambar` AS `gambar` from (`peminjaman` join `buku`) where `buku`.`id_buku` = `peminjaman`.`id_buku`) */;

/*View structure for view laporan_peminjaman */

/*!50001 DROP TABLE IF EXISTS `laporan_peminjaman` */;
/*!50001 DROP VIEW IF EXISTS `laporan_peminjaman` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_peminjaman` AS (select `peminjaman`.`id_peminjaman` AS `id_peminjaman`,`peminjaman`.`id_siswa` AS `id_siswa`,`buku`.`id_buku` AS `id_buku`,`peminjaman`.`tgl_peminjaman` AS `tgl_peminjaman`,`peminjaman`.`tgl_pengembalian` AS `tgl_pengembalian`,`siswa`.`nama` AS `nama`,`buku`.`nama_buku` AS `nama_buku`,`peminjaman`.`status` AS `status` from ((`buku` join `siswa`) join `peminjaman`) where `buku`.`id_buku` = `peminjaman`.`id_buku` and `siswa`.`id_siswa` = `peminjaman`.`id_siswa`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
