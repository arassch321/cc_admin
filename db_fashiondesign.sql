
DROP TABLE IF EXISTS `baju_man`;

CREATE TABLE `baju_man` (
  `id_baju_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_man`)
) ;

/*Data for the table `baju_man` */

insert  into `baju_man`(`nama`,`harga`,`gambar`,`link`) values 
('Polo shirt Kaos Kerah lengan panjang Ua Golf',150000,'bm_1.jpg','https://tokopedia.link/TUDYQoAU4kb'),
('KAOS POLO / KERAH / GOLF PRIA CUTI LAKOS ORIGINAL PIER ONE RETAIL 700K - S, Putih',99000,'bm_2.jpg','https://tokopedia.link/q9rYZawU4kb'),
('Kaos Someone Gold Koi 172D Glow In The Dark - S',75000,'bm_3.jpg','https://tokopedia.link/zbescSEU4kb'),
('Kith X MLB New York Yankees NY Embroidery T-Shirt Navy - M',189070,'bm_4.jpg','https://tokopedia.link/qA9i3NMU4kb'),
('Human Made 2026 T-Shirt Black - M',179280,'bm_5.jpg','https://tokopedia.link/37BWfqPU4kb'),
('Roughneck H012 Black Sig Black Bold Hoodie ',139000,'bd245f7f698ed8033da8ce9feb362753-0.jfif','https://shopee.co.id/Roughneck-H012-Black-Sig-Black-Bold-Hoodie-i.32427818.7343066165?sp_atk=2a3a4d5a-2e40-4910-bba5-962cb3e4505a'),
('Morwick Tshirt    ',79000,'1fda6bf1e32a22098ef548e323b1300f-f4.jpg','https://tokopedia.link/i3Bd4vcLrlb'),
('KENETH HOODIE  ',50000,'0ee9ca616703b78a43eb89ab17e3ff57-81.jpg','https://tokopedia.link/WkqzC3yLrlb');

/*Table structure for table `baju_woman` */

DROP TABLE IF EXISTS `baju_woman`;

CREATE TABLE `baju_woman` (
  `id_baju_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_woman`)
) ;

/*Data for the table `baju_woman` */

insert  into `baju_woman`(`nama`,`harga`,`gambar`,`link`) values 
('Tumblr T-Shirt Bare Bears',35000,'cde655ed65dd44c254b6fb0692fa152d-bf.jpg','https://tokopedia.link/1yBntO5Lrlb'),
('CARDINAL GIRL ROMPI 3',215920,'ec47f4bc80d517d5da46d1d33dcca443-22.jpg','https://tokopedia.link/ITwqDRoMrlb'),
('Kemeja Korea Oversized',65000,'f74def7e943499c618385b494d9acd43-71.jpg','https://tokopedia.link/auO08IDMrlb'),
('Kardigan Rajut Vintage Cheetah',102900,'d72b5f84769e4df271428e26f328cf85-b0.jpg','https://www.lazada.co.id/products/premium-cardigan-kardigan-rajut-vintage-cheetah-i5773006329-s11228420482.html?spm=a2o4j.searchlistcategory.list.151.80e21f2fvpAMgz&search=1&freeshipping=1'),
('EIGER GAIA SWEATER HOODIE NONZIP',339000,'07842e6ad552cc71444ffc8d047d1347-47.jpg','https://www.lazada.co.id/products/eiger-gaia-sweater-hoodie-nonzip-i4587942146-s7955398341.html?spm=a2o4j.searchlistcategory.list.31.4a331f2fECr37w&search=1&freeshipping=1');

/*Table structure for table `celana_man` */

DROP TABLE IF EXISTS `celana_man`;

CREATE TABLE `celana_man` (
  `id_celana_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_man`)
) ;

/*Data for the table `celana_man` */

insert  into `celana_man`(`nama`,`harga`,`gambar`,`link`) values 
('Motz Chino Washing Basic Reguler Cream - XL',492750,'cm_1.jpg','https://tokopedia.link/pDHh8I6U4kb'),
('https://tokopedia.link/CKfE9D2U4kb',179280,'cm_2.jpg','https://tokopedia.link/CKfE9D2U4kb'),
('UNQ Slim Fit Chino Pants Olive - 33/85',179,'cm_3.jpg','https://tokopedia.link/tb2bi80U4kb'),
('Short Sweatpants Mocca   ',200000,'6d75c615ae03b8b715d92ca3396f7003-a2.png','https://www.bukalapak.com/p/fashion-pria/celana-299/celana-panjang/4cujd9p-jual-short-sweatpants-mocca'),
('Celana Jeans Pria Standart - Celana Jeans Panjang - Celana Pria Levis Standart Reguler Murah - Celan',115000,'aac46ddb1f83ceb196a579c7352ff1a9-a3.png','https://www.bukalapak.com/p/fashion-pria/jeans/a39ejw-jual-celana-jeans-pria-standart-celana-jeans-panjang-celana-pria-levis-standart-reguler-murah-celana-levis-putih-white-premium-murah'),
('Faigoods Denim Pants-Medium Wash ',300000,'80827dc92a0549075c28d0f7b6632df3-a4.png','https://www.bukalapak.com/p/fashion-pria/jeans/4cujcws-jual-faigoods-denim-pants-medium-wash');

/*Table structure for table `celana_woman` */

DROP TABLE IF EXISTS `celana_woman`;

CREATE TABLE `celana_woman` (
  `id_celana_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_woman`)
) ;

/*Data for the table `celana_woman` */

insert  into `celana_woman`(`nama`,`harga`,`gambar`,`link`) values 
('BIGISSIMO VANQISH LUXURIOUS COMFY SKIRT rok jumbo ',275000,'f74def7e943499c618385b494d9acd43-a1.png','https://www.bukalapak.com/p/fashion-wanita/rok/4goords-jual-bigissimo-vanqish-luxurious-comfy-skirt-rok-jumbo'),
('BIGISSIMO TRIXA CULLOTE PANTS',195000,'7bb62589f42aa96a6e9bdf96922d4674-a2.png','https://www.bukalapak.com/p/fashion-wanita/celana/celana-panjang-2515/4goor7p-jual-bigissimo-trixa-cullote-pants'),
('ROK LONG RUFFLE ZARRA KOTAK ',39900,'731f59bccca7217396459a49c5aa5fcc-a3.png','https://www.bukalapak.com/p/fashion-wanita/rok/4acg38d-jual-rok-long-ruffle-zarra-kotak'),
('Celana Pensil Cewek Bahan Kain ',52500,'d7e05c4839463e318d949d6152ab91db-a4.png','https://www.bukalapak.com/p/fashion-wanita/celana/celana-panjang-2515/3xc1cw6-jual-celana-pensil-cewek-bahan-kain'),
('Consina Ammonite Celana Panjang Wanita ',189000,'8a66da851551032ec8eb02e8ccf82c77-a5.png','https://www.bukalapak.com/p/fashion-wanita/celana/celana-pendek/223qtrj-jual-consina-ammonite-celana-panjang-wanita');

/*Table structure for table `sepatu_man` */

DROP TABLE IF EXISTS `sepatu_man`;

CREATE TABLE `sepatu_man` (
  `id_sepatu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu`)
);

/*Data for the table `sepatu_man` */

insert  into `sepatu_man`(`nama`,`harga`,`gambar`,`link`) values 
('BRODO - Sneakers Pria Active Zeal Beast Olive Orange IS - 41',530,'sm_1.jpg','https://tokopedia.link/8lmpaTtV4kb'),
('Sneakers Pria BRODO Base Lite All White GS - 41',299000,'sm_2.jpg','https://tokopedia.link/5HtOl8rV4kb'),
('Geoff Max Official Sandal Pria - Wordler Black',75000,'ac5d3d6944f40823775753388e6babe6-1.jfif','https://shopee.co.id/Geoff-Max-Official-Wordler-Black-Slippers-Sandal-Pria-i.33697514.5016612387?sp_atk=aacc2522-1802-42ff-8ca6-824bed5a0638'),
('Sneakers Unisex BRODO Active Pacer Full Black',295000,'c0d9ad9a3cfe263d65651b7db9ddf756- 2.jpg','https://www.tokopedia.com/brodo/sneakers-unisex-brodo-active-pacer-full-black-40'),
('BRODO - Sneakers Active Pacer Navy LGS',295000,'6d3480aa0b4be3abfe1a4a8120d50e1c- 3.jpg','https://www.tokopedia.com/brodo/brodo-sneakers-active-pacer-navy-lgs-36');

/*Table structure for table `sepatu_woman` */

DROP TABLE IF EXISTS `sepatu_woman`;

CREATE TABLE `sepatu_woman` (
  `id_sepatu_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu_woman`)
);

/*Data for the table `sepatu_woman` */

insert  into `sepatu_woman`(`nama`,`harga`,`gambar`,`link`) values 
('PVN Kara Sepatu Sneakers Wanita Sport Shoes Candy Pink White 372',144900,'c67512506367d269068646212b4ca853-1.jfif','https://shopee.co.id/PVN-Kara-Sepatu-Sneakers-Wanita-Sport-Shoes-Candy-Pink-White-372-i.39910038.1941634390?sp_atk=bfb89ef7-8fca-44be-936d-8216f864b9ab'),
('PVN Suga Sepatu Sneakers Wanita Putih Pink Shoes 004',144900,'a2e6102ee8a575eb304ba59567476359-2.jfif','https://shopee.co.id/PVN-Suga-Sepatu-Sneakers-Wanita-Putih-Pink-Shoes-004-i.39910038.1690548995'),
('SEPATU WANITA TBS06 GEORGIA BALLET FLAT EXTENDED WIDTH PREMIUM IMPORT ',200000,'3453cff077456d79f0e970c1281ebc55-3.jfif','https://shopee.co.id/COD-SEPATU-WANITA-TBS06-GEORGIA-BALLET-FLAT-EXTENDED-WIDTH-PREMIUM-IMPORT-i.32286491.3075159830?sp_atk=7ae5db87-40a8-4a18-b458-a239aa759f95'),
('SANDAL WANITA | CNK CKS139',195000,'d9b9c7cd24c151a7cfa2ffa119e70780-4.jfif','https://shopee.co.id/COD-SANDAL-WANITA-CNK-CKS139-ORI-PREMIUM-IMPORT-i.32286491.3234356039?sp_atk=e2488802-b49e-4658-91f8-447579cf0a3f'),
('CK-226',210000,'25e00cc374335d799d3de756dbf24d4d-5.jfif','https://shopee.co.id/-FREE-PAPERBAG-FREE-BUBBLEWRAP-CK-226-i.68618598.2756874653');

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
) ;

/*Data for the table `user` */

insert  into `user`(`nama`,`username`,`password`,`gender`,`level`) values 
('User','user','user','l',1),
('jono','jono','jono','1',1),
('Rebekah George','fubigun','Pa$$w0rd!','p',1),
('Admin','admin','admin','l',2);
