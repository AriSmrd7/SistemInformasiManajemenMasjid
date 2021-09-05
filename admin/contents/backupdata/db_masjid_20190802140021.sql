

CREATE TABLE `tbl_admin` (
  `id_admin` char(6) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nohp_admin` varchar(13) DEFAULT NULL,
  `alamat_admin` text,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_admin VALUES("AD-001","Ari Smrd","085863727216","Bebas","admin","*4ACFE3202A5FF5CF467898FC58AAB1D615029441");



CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` char(6) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `id_petugas` (`id_petugas`),
  KEY `id_petugas_2` (`id_petugas`),
  KEY `id_petugas_3` (`id_petugas`),
  KEY `id_petugas_4` (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tbl_agenda VALUES("1","","Tabligh Akbar","17:00:00","18:00:00","2019-07-25","2019-07-25","Tidak ada deskripsi");
INSERT INTO tbl_agenda VALUES("2","","Maulid Nabi","12:00:00","13:00:00","2019-07-26","2019-07-27","Dihadiri oleh Ust. Dimas");
INSERT INTO tbl_agenda VALUES("3","PT-001","Ceramah ","14:00:00","15:05:00","2019-07-19","2019-07-19","akan dihadiri Aa Gym");
INSERT INTO tbl_agenda VALUES("4","PT-001","Testing","00:00:00","00:00:00","2019-07-21","2019-07-21","Percobaan");
INSERT INTO tbl_agenda VALUES("5","PT-001","Testing 2","00:00:00","00:00:00","0000-00-00","0000-00-00","");
INSERT INTO tbl_agenda VALUES("6","PT-001","Testing 3","06:00:00","13:00:00","2019-07-21","2019-07-21","Percobaan Awal");



CREATE TABLE `tbl_album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` char(6) NOT NULL,
  `file_name` varchar(90) NOT NULL,
  `tgl_upload` date NOT NULL,
  PRIMARY KEY (`id_album`),
  KEY `id_petugas` (`id_petugas`),
  CONSTRAINT `tbl_album_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_petugas` (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tbl_album VALUES("7","PT-001","8.jpg","2019-07-19");



CREATE TABLE `tbl_dana` (
  `id_dana` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori` char(10) NOT NULL,
  `total` bigint(15) NOT NULL,
  PRIMARY KEY (`id_dana`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tbl_dana_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_dana VALUES("1","KT01","509002");
INSERT INTO tbl_dana VALUES("2","KT02","78000");
INSERT INTO tbl_dana VALUES("3","KT03","458000");
INSERT INTO tbl_dana VALUES("4","KT04","160000");
INSERT INTO tbl_dana VALUES("5","KT05","510000");



CREATE TABLE `tbl_detailpemasukan` (
  `id_pemasukan` char(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  KEY `id_pemasukan` (`id_pemasukan`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tbl_detailpemasukan_ibfk_1` FOREIGN KEY (`id_pemasukan`) REFERENCES `tbl_pemasukan` (`id_pemasukan`),
  CONSTRAINT `tbl_detailpemasukan_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","10000");



CREATE TABLE `tbl_detailtransfer` (
  `id_transfer` varchar(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  KEY `2` (`id_kategori`),
  KEY `1` (`id_transfer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT01","2000");
INSERT INTO tbl_detailtransfer VALUES("PM-001","KT02","10000");
INSERT INTO tbl_detailtransfer VALUES("PM-002","KT02","60000");



CREATE TABLE `tbl_kategori` (
  `id_kategori` char(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_kategori VALUES("KT01","Donasi");
INSERT INTO tbl_kategori VALUES("KT02","Kegiatan");
INSERT INTO tbl_kategori VALUES("KT03","Infaq");
INSERT INTO tbl_kategori VALUES("KT04","Zakat Penghasilan");
INSERT INTO tbl_kategori VALUES("KT05","Sumbangan Bencana");
INSERT INTO tbl_kategori VALUES("KT06","Testing");



CREATE TABLE `tbl_pemasukan` (
  `id_pemasukan` char(10) NOT NULL,
  `id_user` char(10) NOT NULL,
  `id_petugas` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_pemasukan` varchar(15) NOT NULL,
  `totalbayar` bigint(13) NOT NULL,
  PRIMARY KEY (`id_pemasukan`),
  KEY `id_petugas` (`id_petugas`),
  KEY `id_petugas_2` (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_pemasukan VALUES("PM-001","001","PT-001","Ari Sumardi","2019-08-01","12000");



CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` char(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `id_petugas` char(10) NOT NULL,
  `tgl_pengeluaran` datetime NOT NULL,
  `nominal` int(12) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_pengeluaran`),
  KEY `id_petugas` (`id_petugas`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_petugas_2` (`id_petugas`),
  CONSTRAINT `tbl_pengeluaran_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_pengeluaran VALUES("PG-001","KT02","","2019-07-19 00:00:00","60000","		Tidak ada														");
INSERT INTO tbl_pengeluaran VALUES("PG-002","KT02","PT-001","2019-07-26 00:00:00","1000","		Gakada														");
INSERT INTO tbl_pengeluaran VALUES("PG-003","KT03","PT-001","2019-07-19 00:00:00","2000","		hjjjjjjjjjjjjj														");
INSERT INTO tbl_pengeluaran VALUES("PG-004","KT01","PT-001","2019-07-20 00:00:00","1000","		10000														");
INSERT INTO tbl_pengeluaran VALUES("PG-005","KT02","PT-001","2019-07-20 00:00:00","1000","		10000														");



CREATE TABLE `tbl_petugas` (
  `id_petugas` char(6) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_petugas VALUES("PT-001","2147483647","Ari Sumardi","","0","petugas","*07D0E7C01E50966CC67C6597EB8C5CCB7854392D");
INSERT INTO tbl_petugas VALUES("PT-002","2147483647","Dimas Arestu","Bandung","2147483647","dimas","dimas");



CREATE TABLE `tbl_sementara` (
  `id_pemasukan` char(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_sementaratrf` (
  `id_transfer` varchar(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_transfer` (
  `id_transfer` varchar(10) NOT NULL,
  `id_user` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `jumlah` bigint(15) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` enum('tertunda','sukses') NOT NULL,
  PRIMARY KEY (`id_transfer`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tbl_transfer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_transfer VALUES("PM-001","001","Ari Sumardi","05396058","BNI","12000","2019-08-01","provis.jpg","sukses");
INSERT INTO tbl_transfer VALUES("PM-002","001","Ari Sumardi","05396058","BNI","60000","2019-08-01","Save Energy3.png","tertunda");



CREATE TABLE `tbl_user` (
  `id_user` char(6) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nohp_user` varchar(13) NOT NULL,
  `alamat_user` text NOT NULL,
  `bank_user` varchar(30) NOT NULL,
  `rekening_user` varchar(35) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("001","Ari Sumardi","085863727216","Sumedang","BNI","05396058","arismrd","user");
INSERT INTO tbl_user VALUES("002","Muhammad Farhaan","081220875262","Bandung","BNI","05396059","adoysuaan","user");

