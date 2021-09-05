

CREATE TABLE `data_log` (
  `aktivitas` varchar(255) NOT NULL,
  `pelaku_aktivitas` varchar(255) NOT NULL,
  `tanggal_aktivitas` datetime NOT NULL,
  `detail_aktivitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_admin` (
  `id_admin` char(6) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nohp_admin` varchar(13) DEFAULT NULL,
  `alamat_admin` text DEFAULT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_admin VALUES("AD-001","Dimas","082385767675","Bebas","admin","*4ACFE3202A5FF5CF467898FC58AAB1D615029441");



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

INSERT INTO tbl_dana VALUES("1","KT01","297000");
INSERT INTO tbl_dana VALUES("2","KT02","8000");
INSERT INTO tbl_dana VALUES("3","KT03","198000");
INSERT INTO tbl_dana VALUES("4","KT04","150000");
INSERT INTO tbl_dana VALUES("5","KT05","10000");



CREATE TABLE `tbl_detailpemasukan` (
  `id_pemasukan` char(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  KEY `id_pemasukan` (`id_pemasukan`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tbl_detailpemasukan_ibfk_1` FOREIGN KEY (`id_pemasukan`) REFERENCES `tbl_pemasukan` (`id_pemasukan`),
  CONSTRAINT `tbl_detailpemasukan_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT03","20000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT02","20000");
INSERT INTO tbl_detailpemasukan VALUES("PM-001","KT03","60000");
INSERT INTO tbl_detailpemasukan VALUES("PM-002","KT02","20000");
INSERT INTO tbl_detailpemasukan VALUES("PM-002","KT04","5000");
INSERT INTO tbl_detailpemasukan VALUES("PM-003","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-003","KT01","60000");
INSERT INTO tbl_detailpemasukan VALUES("PM-003","KT05","20000");
INSERT INTO tbl_detailpemasukan VALUES("PM-003","KT03","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-004","KT02","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-004","KT01","1000");
INSERT INTO tbl_detailpemasukan VALUES("PM-005","KT04","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-005","KT01","2000");
INSERT INTO tbl_detailpemasukan VALUES("PM-006","KT05","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-006","KT04","10000");
INSERT INTO tbl_detailpemasukan VALUES("PM-007","KT01","100000");
INSERT INTO tbl_detailpemasukan VALUES("PM-007","KT03","200000");



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

INSERT INTO tbl_pemasukan VALUES("PM-001","","","Ari Sumardi","2019-07-18","100000");
INSERT INTO tbl_pemasukan VALUES("PM-002","","","Farhan","2019-07-18","25000");
INSERT INTO tbl_pemasukan VALUES("PM-003","","","Ferawati","2019-07-19","100000");
INSERT INTO tbl_pemasukan VALUES("PM-004","","","Dimas","2019-07-19","11000");
INSERT INTO tbl_pemasukan VALUES("PM-005","","","Umar","2019-07-19","12000");
INSERT INTO tbl_pemasukan VALUES("PM-006","","PT-001","Pedro","2019-07-19","20000");
INSERT INTO tbl_pemasukan VALUES("PM-007","","PT-001","Muhammad Farhaanx","2019-07-21","300000");
INSERT INTO tbl_pemasukan VALUES("PM-008","1012","","Muhammad Farhaan","2019-07-21","1000000");
INSERT INTO tbl_pemasukan VALUES("PM-009","1012","","Muhammad Farhaan","2019-07-21","1");
INSERT INTO tbl_pemasukan VALUES("PM-010","1012","","Muhammad Farhaan","2019-07-21","1");



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



CREATE TABLE `tbl_sementara` (
  `id_pemasukan` char(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_transfer` (
  `id_transfer` varchar(10) NOT NULL,
  `id_user` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `jumlah` bigint(15) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_transfer`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tbl_transfer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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


