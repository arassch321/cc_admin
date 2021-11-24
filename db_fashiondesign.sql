
DROP TABLE IF EXISTS `baju_man`;

CREATE TABLE `baju_man` (
  `id_baju_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_man`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `baju_man` */
INSERT INTO `baju_man` (`id_baju_man`, `nama`, `harga`, `gambar`, `link`) VALUES
(1, 'Polo shirt Kaos Kerah lengan panjang Ua Golf', 150000, 'bm_1.jpg', 'https://tokopedia.link/TUDYQoAU4kb'),
(2, 'KAOS POLO / KERAH / GOLF PRIA CUTI LAKOS ORIGINAL PIER ONE RETAIL 700K - S, Putih', 99000, 'bm_2.jpg', 'https://tokopedia.link/q9rYZawU4kb'),
(3, 'Kaos Someone Gold Koi 172D Glow In The Dark - S', 75000, 'bm_3.jpg', 'https://tokopedia.link/zbescSEU4kb'),
(4, 'Kith X MLB New York Yankees NY Embroidery T-Shirt Navy - M', 189070, 'bm_4.jpg', 'https://tokopedia.link/qA9i3NMU4kb'),
(5, 'Human Made 2026 T-Shirt Black - M', 179280, 'bm_5.jpg', 'https://tokopedia.link/37BWfqPU4kb'),
(34, 'Roughneck H012 Black Sig Black Bold Hoodie ', 139000, 'bd245f7f698ed8033da8ce9feb362753-0.jfif', 'https://shopee.co.id/Roughneck-H012-Black-Sig-Black-Bold-Hoodie-i.32427818.7343066165?sp_atk=2a3a4d5a-2e40-4910-bba5-962cb3e4505a'),
(35, 'Morwick Tshirt    ', 79000, '1fda6bf1e32a22098ef548e323b1300f-f4.jpg', 'https://tokopedia.link/i3Bd4vcLrlb'),
(36, 'KENETH HOODIE  ', 50000, '0ee9ca616703b78a43eb89ab17e3ff57-81.jpg', 'https://tokopedia.link/WkqzC3yLrlb');
/*Table structure for table `baju_woman` */

DROP TABLE IF EXISTS `baju_woman`;

CREATE TABLE `baju_woman` (
  `id_baju_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*Data for the table `baju_woman` */
INSERT INTO `baju_woman` (`id_baju_woman`, `nama`, `harga`, `gambar`, `link`) VALUES
(41, 'Tumblr T-Shirt Bare Bears', 35000, 'cde655ed65dd44c254b6fb0692fa152d-bf.jpg', 'https://tokopedia.link/1yBntO5Lrlb'),
(42, 'CARDINAL GIRL ROMPI 3', 215920, 'ec47f4bc80d517d5da46d1d33dcca443-22.jpg', 'https://tokopedia.link/ITwqDRoMrlb'),
(43, 'Kemeja Korea Oversized', 65000, 'f74def7e943499c618385b494d9acd43-71.jpg', 'https://tokopedia.link/auO08IDMrlb'),
(44, 'Kardigan Rajut Vintage Cheetah', 102900, 'd72b5f84769e4df271428e26f328cf85-b0.jpg', 'https://www.lazada.co.id/products/premium-cardigan-kardigan-rajut-vintage-cheetah-i5773006329-s11228420482.html?spm=a2o4j.searchlistcategory.list.151.80e21f2fvpAMgz&search=1&freeshipping=1'),
(45, 'EIGER GAIA SWEATER HOODIE NONZIP', 339000, '07842e6ad552cc71444ffc8d047d1347-47.jpg', 'https://www.lazada.co.id/products/eiger-gaia-sweater-hoodie-nonzip-i4587942146-s7955398341.html?spm=a2o4j.searchlistcategory.list.31.4a331f2fECr37w&search=1&freeshipping=1');
/*Table structure for table `celana_man` */

DROP TABLE IF EXISTS `celana_man`;

CREATE TABLE `celana_man` (
  `id_celana_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_man`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `celana_man` */

insert  into `celana_man`(`id_celana_man`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Motz Chino Washing Basic Reguler Cream - XL',492750,'cm_1.jpg','https://tokopedia.link/pDHh8I6U4kb'),
(2,'https://tokopedia.link/CKfE9D2U4kb',179280,'cm_2.jpg','https://tokopedia.link/CKfE9D2U4kb'),
(3,'UNQ Slim Fit Chino Pants Olive - 33/85',179,'cm_3.jpg','https://tokopedia.link/tb2bi80U4kb');

/*Table structure for table `celana_woman` */

DROP TABLE IF EXISTS `celana_woman`;

CREATE TABLE `celana_woman` (
  `id_celana_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_woman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `celana_woman` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `pakaian_woman_id_pakaian_woman` varchar(255) NOT NULL,
  `pakaian_man_id_pakaian_man` varchar(255) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `kategori_pakaian_man_fk` (`pakaian_man_id_pakaian_man`),
  KEY `kategori_pakaian_woman_fk` (`pakaian_woman_id_pakaian_woman`),
  KEY `kategori_user_fk` (`user_id_user`),
  CONSTRAINT `kategori_pakaian_man_fk` FOREIGN KEY (`pakaian_man_id_pakaian_man`) REFERENCES `pakaian_man` (`id_pakaian_man`),
  CONSTRAINT `kategori_pakaian_woman_fk` FOREIGN KEY (`pakaian_woman_id_pakaian_woman`) REFERENCES `pakaian_woman` (`id_pakaian_woman`),
  CONSTRAINT `kategori_user_fk` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

/*Table structure for table `pakaian_man` */

DROP TABLE IF EXISTS `pakaian_man`;

CREATE TABLE `pakaian_man` (
  `id_pakaian_man` varchar(255) NOT NULL,
  `baju_man_id_baju_man` int(11) NOT NULL,
  `celana_man_id_celana_man` int(11) NOT NULL,
  `sepatu_man_id_sepatu` int(11) NOT NULL,
  PRIMARY KEY (`id_pakaian_man`),
  KEY `pakaian_man_baju_man_fk` (`baju_man_id_baju_man`),
  KEY `pakaian_man_celana_man_fk` (`celana_man_id_celana_man`),
  KEY `pakaian_man_sepatu_man_fk` (`sepatu_man_id_sepatu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pakaian_man` */

/*Table structure for table `pakaian_woman` */

DROP TABLE IF EXISTS `pakaian_woman`;

CREATE TABLE `pakaian_woman` (
  `id_pakaian_woman` varchar(255) NOT NULL,
  `baju_woman_id_baju_woman` int(11) NOT NULL,
  `celana_woman_id_celana_woman` int(11) NOT NULL,
  `sepatu_woman_id_sepatu_woman` int(11) NOT NULL,
  PRIMARY KEY (`id_pakaian_woman`),
  KEY `pakaian_woman_baju_woman_fk` (`baju_woman_id_baju_woman`),
  KEY `pakaian_woman_celana_woman_fk` (`celana_woman_id_celana_woman`),
  KEY `pakaian_woman_sepatu_woman_fk` (`sepatu_woman_id_sepatu_woman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pakaian_woman` */

/*Table structure for table `sepatu_man` */

DROP TABLE IF EXISTS `sepatu_man`;

DROP TABLE IF EXISTS `sepatu_man`;

CREATE TABLE `sepatu_man` (
  `id_sepatu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sepatu_man` */

insert  into `sepatu_man`(`id_sepatu`,`nama`,`harga`,`gambar`,`link`) values 
(1,'BRODO - Sneakers Pria Active Zeal Beast Olive Orange IS - 41',530,'sm_1.jpg','https://tokopedia.link/8lmpaTtV4kb'),
(2,'Sneakers Pria BRODO Base Lite All White GS - 41',299000,'sm_2.jpg','https://tokopedia.link/5HtOl8rV4kb'),
(5,'Geoff Max Official Sandal Pria - Wordler Black',75000,'ac5d3d6944f40823775753388e6babe6-1.jfif','https://shopee.co.id/Geoff-Max-Official-Wordler-Black-Slippers-Sandal-Pria-i.33697514.5016612387?sp_atk=aacc2522-1802-42ff-8ca6-824bed5a0638'),
(6,'Sneakers Unisex BRODO Active Pacer Full Black',295000,'c0d9ad9a3cfe263d65651b7db9ddf756- 2.jpg','https://www.tokopedia.com/brodo/sneakers-unisex-brodo-active-pacer-full-black-40'),
(7,'BRODO - Sneakers Active Pacer Navy LGS',295000,'6d3480aa0b4be3abfe1a4a8120d50e1c- 3.jpg','https://www.tokopedia.com/brodo/brodo-sneakers-active-pacer-navy-lgs-36');

/*Table structure for table `sepatu_woman` */

DROP TABLE IF EXISTS `sepatu_woman`;

CREATE TABLE `sepatu_woman` (
  `id_sepatu_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sepatu_woman` */

insert  into `sepatu_woman`(`id_sepatu_woman`,`nama`,`harga`,`gambar`,`link`) values 
(3,'PVN Kara Sepatu Sneakers Wanita Sport Shoes Candy Pink White 372',144900,'c67512506367d269068646212b4ca853-1.jfif','https://shopee.co.id/PVN-Kara-Sepatu-Sneakers-Wanita-Sport-Shoes-Candy-Pink-White-372-i.39910038.1941634390?sp_atk=bfb89ef7-8fca-44be-936d-8216f864b9ab'),
(4,'PVN Suga Sepatu Sneakers Wanita Putih Pink Shoes 004',144900,'a2e6102ee8a575eb304ba59567476359-2.jfif','https://shopee.co.id/PVN-Suga-Sepatu-Sneakers-Wanita-Putih-Pink-Shoes-004-i.39910038.1690548995'),
(5,'https://shopee.co.id/PVN-Suga-Sepatu-Sneakers-Wanita-Putih-Pink-Shoes-004-i.39910038.1690548995',200000,'3453cff077456d79f0e970c1281ebc55-3.jfif','https://shopee.co.id/COD-SEPATU-WANITA-TBS06-GEORGIA-BALLET-FLAT-EXTENDED-WIDTH-PREMIUM-IMPORT-i.32286491.3075159830?sp_atk=7ae5db87-40a8-4a18-b458-a239aa759f95'),
(6,'SANDAL WANITA | CNK CKS139',195000,'d9b9c7cd24c151a7cfa2ffa119e70780-4.jfif','https://shopee.co.id/COD-SANDAL-WANITA-CNK-CKS139-ORI-PREMIUM-IMPORT-i.32286491.3234356039?sp_atk=e2488802-b49e-4658-91f8-447579cf0a3f'),
(7,'CK-226',210000,'25e00cc374335d799d3de756dbf24d4d-5.jfif','https://shopee.co.id/-FREE-PAPERBAG-FREE-BUBBLEWRAP-CK-226-i.68618598.2756874653');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `level` int(11) DEFAULT 1,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`gender`,`level`) values 
(10,'User','user','user','laki-laki',1),
(11,'jono','jono','jono','1',1),
(12,'Rebekah George','fubigun','Pa$$w0rd!','p',1),
(13,'Admin','admin','admin','l',2);