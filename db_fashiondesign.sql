
DROP TABLE IF EXISTS `baju_man`;

CREATE TABLE `baju_man` (
  `id_baju_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_baju_man`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `baju_man` */

insert  into `baju_man`(`id_baju_man`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Polo shirt Kaos Kerah lengan panjang Ua Golf ',150000,'e1eff092ebae73b9aa65b07077a1026e','https://tokopedia.link/TUDYQoAU4kb'),
(2,'KAOS POLO / KERAH / GOLF PRIA CUTI LAKOS ORIGINAL PIER ONE RETAIL 700K - S, Putih ',99000,'6405065e955b8d22d22c0e2c6422fdcf','https://tokopedia.link/q9rYZawU4kb'),
(3,'Kaos Someone Gold Koi 172D Glow In The Dark - S ',75000,'a3f5779d73845ed376668825a137cc38','https://tokopedia.link/zbescSEU4kb'),
(4,'Kith X MLB New York Yankees NY Embroidery T-Shirt Navy - M ',189070,'f2673cfd2e3e78e704b662b88262b2a3','https://tokopedia.link/qA9i3NMU4kb'),
(5,'Human Made 2026 T-Shirt Black - M ',179280,'957df53e5664d4ac2fb2319ca07a63b0','https://tokopedia.link/37BWfqPU4kb'),
(6,'Roughneck H012 Black Sig Black Bold Hoodie  ',139000,'f61e573e65db8170f05428547f691afc','https://shopee.co.id/Roughneck-H012-Black-Sig-Black-Bold-Hoodie-i.32427818.7343066165?sp_atk=2a3a4d5a-2e40-4910-bba5-962cb3e4505a'),
(7,'Morwick Tshirt     ',79000,'de68993c34856f1ea52c9e9d2817ecfe','https://tokopedia.link/i3Bd4vcLrlb'),
(8,'KENETH HOODIE     ',50000,'19747d8c75cc81204f766a63091fd7c6','https://tokopedia.link/WkqzC3yLrlb');

/*Table structure for table `baju_woman` */

DROP TABLE IF EXISTS `baju_woman`;

CREATE TABLE `baju_woman` (
  `id_baju_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_baju_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `baju_woman` */

insert  into `baju_woman`(`id_baju_woman`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Tumblr T-Shirt Bare Bears ',35000,'f4f851a23c7608ee83ca6cffe2892977','https://tokopedia.link/1yBntO5Lrlb'),
(2,'CARDINAL GIRL ROMPI 3 ',215920,'d99fc91d79b3a5419fbf0296692a8838','https://tokopedia.link/ITwqDRoMrlb'),
(3,'Kemeja Korea Oversized ',65000,'6350670f8340cbedb1f0e80fc483f4d0','https://tokopedia.link/auO08IDMrlb'),
(4,'Kardigan Rajut Vintage Cheetah ',102900,'8a69b8977009990014cac4c8a05ec9c9','https://www.lazada.co.id/products/premium-cardigan-kardigan-rajut-vintage-cheetah-i5773006329-s11228420482.html?spm=a2o4j.searchlistcategory.list.151.80e21f2fvpAMgz&search=1&freeshipping=1'),
(5,'EIGER GAIA SWEATER HOODIE NONZIP ',339000,'d44cbd206b6b7127da9825e447756753','https://www.lazada.co.id/products/eiger-gaia-sweater-hoodie-nonzip-i4587942146-s7955398341.html?spm=a2o4j.searchlistcategory.list.31.4a331f2fECr37w&search=1&freeshipping=1'),
(6,'Monic Blouse',65,'707fdc42df17ec87e0a0a0b2237bfd6e','https://shopee.co.id/Monic-Blouse-Ukuran-S-M-L-XL-XXL3XL-Baju-Wanita-Korea-Jumbo-Atasan-Wanita-Big-Size-Atasan-Wanita-Jumbo-Over-Size-i.155454207.13851372691?sp_atk=ef57d3a8-ee20-4dc9-8054-7d8de106d3ef'),
(7,'Monic Blouse Black',65000,'f535c5d6dacd332713b216d95efa6b9f','https://shopee.co.id/Monic-Blouse-Ukuran-S-M-L-XL-XXL3XL-Baju-Wanita-Korea-Jumbo-Atasan-Wanita-Big-Size-Atasan-Wanita-Jumbo-Over-Size-i.155454207.13851372691?sp_atk=ef57d3a8-ee20-4dc9-8054-7d8de106d3ef'),
(8,'White Print Shirt',120,'6c0187bbdd5f6950c8927cc34ffcaf4a','https://shopee.co.id/PROMO-SALE!!!-Baju-Korea-Animal-Shirt-White-Print-Shirt-Blouse-LAST-STOCK--i.11935528.6510983964?sp_atk=b437c951-039d-4599-8eed-060712f00ce7'),
(9,'Sweater Cewek Murah Sunshine',152,'0993bd0bab6718cf6722f70015aeb44b','https://shopee.co.id/-604G-Sweater-Cewek-Murah-Sunshine-Baju-Korea-Baju-Sweater-Kameja-Korea-White-Navy--i.95988036.7519416610?sp_atk=60635c6d-3a88-43b5-a8ef-385c30ec2ea1'),
(10,'BELOUSE',45500,'b162af0040f4bd4ca094e7d4ff8990ab','https://shopee.co.id/BELOUSE-WANITA-TERBARU-AGATA-BAJU-ATASAN-CEWEK-POLOS-KEKINIAN-KOREAAN-SIZE(-S.M.L.XL.XXL-i.363218629.13641680888?sp_atk=c209ab55-9888-4b5d-851c-af9dff581745');

/*Table structure for table `celana_man` */

DROP TABLE IF EXISTS `celana_man`;

CREATE TABLE `celana_man` (
  `id_celana_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_celana_man`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `celana_man` */

insert  into `celana_man`(`id_celana_man`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Motz Chino Washing Basic Reguler Cream - XL ',492750,'5508bb4b036410924e6977143b00b14e','https://tokopedia.link/pDHh8I6U4kb'),
(2,'UNQ Slim Fit Chino Pants Light Pink - 29/73 ',179280,'a6fea95c31855af86409d940b96405ea','https://tokopedia.link/CKfE9D2U4kb'),
(3,'UNQ Slim Fit Chino Pants Olive - 33/85  ',179000,'20c1439562eaa65912cc8092fa4e1544','https://tokopedia.link/tb2bi80U4kb'),
(4,'Short Sweatpants Mocca    ',200000,'2d2c4debedddc13aebd0424d54d61257','https://www.bukalapak.com/p/fashion-pria/celana-299/celana-panjang/4cujd9p-jual-short-sweatpants-mocca'),
(5,'Celana Jeans Pria Standart - Celana Jeans Panjang - Celana Pria Levis Standart Reguler Murah - Celan',115000,'fbb0c6fa7d8cb8d7cea88c8ebfc357d7','https://www.bukalapak.com/p/fashion-pria/jeans/a39ejw-jual-celana-jeans-pria-standart-celana-jeans-panjang-celana-pria-levis-standart-reguler-murah-celana-levis-putih-white-premium-murah'),
(6,'Faigoods Denim Pants-Medium Wash  ',300000,'27d35938ccf67e129f5b11bf99795bbc','https://www.bukalapak.com/p/fashion-pria/jeans/4cujcws-jual-faigoods-denim-pants-medium-wash');

/*Table structure for table `celana_woman` */

DROP TABLE IF EXISTS `celana_woman`;

CREATE TABLE `celana_woman` (
  `id_celana_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_celana_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `celana_woman` */

insert  into `celana_woman`(`id_celana_woman`,`nama`,`harga`,`gambar`,`link`) values 
(1,'BIGISSIMO VANQISH LUXURIOUS COMFY SKIRT rok jumbo  ',275000,'ec62bc819ec8aa9ff866eeec38c65f7a','https://www.bukalapak.com/p/fashion-wanita/rok/4goords-jual-bigissimo-vanqish-luxurious-comfy-skirt-rok-jumbo'),
(2,'BIGISSIMO TRIXA CULLOTE PANTS ',195000,'996f4c71859e8110bf52887e8b3a0661','https://www.bukalapak.com/p/fashion-wanita/celana/celana-panjang-2515/4goor7p-jual-bigissimo-trixa-cullote-pants'),
(3,'ROK LONG RUFFLE ZARRA KOTAK  ',39900,'c24b91fdf9d53bbd9378d9e6854a9c39','https://www.bukalapak.com/p/fashion-wanita/rok/4acg38d-jual-rok-long-ruffle-zarra-kotak'),
(4,'Celana Pensil Cewek Bahan Kain  ',52500,'ab63c57662e8786674da6a98dcfd008d','https://www.bukalapak.com/p/fashion-wanita/celana/celana-panjang-2515/3xc1cw6-jual-celana-pensil-cewek-bahan-kain'),
(5,'Consina Ammonite Celana Panjang Wanita  ',189000,'59a0f6d695e3d65852d4125c8cf0f0a2','https://www.bukalapak.com/p/fashion-wanita/celana/celana-pendek/223qtrj-jual-consina-ammonite-celana-panjang-wanita'),
(6,'Geoff Girls Official',160000,'c1658eb5265185ca3efbda25de3829a3','https://shopee.co.id/Geoff-Girls-Official-Thea-Lylac-Pants-Wanita-Sweatpants-i.33697514.10654100787?sp_atk=726d32d6-fdb5-4e97-9d93-95025b375369'),
(7,'CARDINAL GIRL CELANA JEANS 21 (INDIGO)',169900,'140bcb600f489b9e1e309b798fec20c1','https://shopee.co.id/CARDINAL-GIRL-CELANA-JEANS-21-(INDIGO)-i.71714210.6075669713?sp_atk=06fde3cf-8ff5-4801-9e87-fb6fd11d0d4f'),
(8,'CARDINAL GIRL CELANA JEANS 41 (PUTIH)',319920,'7ad2cffc23e4c2116403401596dd9611','https://shopee.co.id/CARDINAL-GIRL-CELANA-JEANS-41-(PUTIH)-i.71714210.10200014582?sp_atk=66c366c1-e93c-475d-a5d5-949d52d4c8e5'),
(9,'Little X eight Girl Claire Skirt',399900,'47b2563401c71a09ab8190a72a987dd7','https://shopee.co.id/Little-X-eight-Girl-Claire-Skirt-i.69395432.4544880878?sp_atk=2717b3ae-8ce9-492d-b3d7-ac2910ada724'),
(10,'CARDINAL GIRL CELANA KULOT ',169900,'f244251bf07609a56de0f0ef2a27d5fe','https://shopee.co.id/CARDINAL-GIRL-CELANA-KULOT-(HITAM)-i.71714210.12527580454?sp_atk=79e70452-8f00-4ac8-9997-0e5e64413664');

/*Table structure for table `sepatu_man` */

DROP TABLE IF EXISTS `sepatu_man`;

CREATE TABLE `sepatu_man` (
  `id_sepatu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sepatu_man` */

insert  into `sepatu_man`(`id_sepatu`,`nama`,`harga`,`gambar`,`link`) values 
(1,'BRODO - Sneakers Pria Active Zeal Beast Olive Orange IS - 41   ',530000,'c66af6c30fdeb00b16922c98f933ecb6','https://tokopedia.link/8lmpaTtV4kb'),
(2,'Sneakers Pria BRODO Base Lite All White GS - 41 ',299000,'44b839e99628f5e8b97066935f2bebbd','https://tokopedia.link/5HtOl8rV4kb'),
(3,'Geoff Max Official Sandal Pria - Wordler Black  ',75000,'6473bde88e8988a9c8d93b07a704a1ae','https://shopee.co.id/Geoff-Max-Official-Wordler-Black-Slippers-Sandal-Pria-i.33697514.5016612387?sp_atk=aacc2522-1802-42ff-8ca6-824bed5a0638'),
(4,'Sneakers Unisex BRODO Active Pacer Full Black  ',295000,'65b0523751a12f90a563ab12750d4203','https://www.tokopedia.com/brodo/sneakers-unisex-brodo-active-pacer-full-black-40'),
(5,'BRODO - Sneakers Active Pacer Navy LGS ',295000,'74ef51ed8a113b543660ef728244f5db','https://www.tokopedia.com/brodo/brodo-sneakers-active-pacer-navy-lgs-36');

/*Table structure for table `sepatu_woman` */

DROP TABLE IF EXISTS `sepatu_woman`;

CREATE TABLE `sepatu_woman` (
  `id_sepatu_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sepatu_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sepatu_woman` */

insert  into `sepatu_woman`(`id_sepatu_woman`,`nama`,`harga`,`gambar`,`link`) values 
(1,'PVN Kara Sepatu Sneakers Wanita Sport Shoes Candy Pink White 372 ',144900,'6cf8d6d013ee81d5b860afb1da4aebea','https://shopee.co.id/PVN-Kara-Sepatu-Sneakers-Wanita-Sport-Shoes-Candy-Pink-White-372-i.39910038.1941634390?sp_atk=bfb89ef7-8fca-44be-936d-8216f864b9ab'),
(2,'PVN Suga Sepatu Sneakers Wanita Putih Pink Shoes 004 ',144900,'713c449cb751cb59220fa15854cece2d','https://shopee.co.id/PVN-Suga-Sepatu-Sneakers-Wanita-Putih-Pink-Shoes-004-i.39910038.1690548995'),
(3,'SEPATU WANITA TBS06 GEORGIA BALLET FLAT EXTENDED WIDTH PREMIUM IMPORT  ',200000,'93067a2949e7f49d657d7e5481a89f0e','https://shopee.co.id/COD-SEPATU-WANITA-TBS06-GEORGIA-BALLET-FLAT-EXTENDED-WIDTH-PREMIUM-IMPORT-i.32286491.3075159830?sp_atk=7ae5db87-40a8-4a18-b458-a239aa759f95'),
(4,'SANDAL WANITA | CNK CKS139 ',195000,'f04556e182ae202e4dc56a4f72ec55d8','https://shopee.co.id/COD-SANDAL-WANITA-CNK-CKS139-ORI-PREMIUM-IMPORT-i.32286491.3234356039?sp_atk=e2488802-b49e-4658-91f8-447579cf0a3f'),
(5,'CK-226 ',210000,'5e1776c20beccf0700592c2a2655787d','https://shopee.co.id/-FREE-PAPERBAG-FREE-BUBBLEWRAP-CK-226-i.68618598.2756874653'),
(7,'Sepatu Wanita Formal - Sepatu Paskibraka Wanita',45000,'2bb09f5780ab4e36a697258ed5792304','https://www.lazada.co.id/products/sepatu-wanita-formal-sepatu-paskibraka-wanita-i121283882-s126665432.html?laz_trackid=2:mm_150020327_51150595_2010300600:clkgg0c8e1fmaoignfnrbl&mkttid=clkgg0c8e1fmaoignfnrbl'),
(9,'Sepatu Cardinal Wanita (Red&Black)',139000,'aa6fe439c74e0228c52f3ada11d6076c','https://cf.shopee.co.id/file/819217e40d48be50b64a0ad5899cdf4d'),
(10,'Sepatu Sneakers Olahraga wanita',59950,'6b6755360d31cfe8ceb9fdd94475367e','https://shopee.co.id/Sepatu-NK-ZOOM-Sepatu-Sneakers-Olahraga-wanita-~-sepatu-kets-cewek-viral-embos-senam-zumba-i.277108397.3792701409?sp_atk=7f79b115-a907-4720-b83a-24a653d7f357'),
(11,'PVN Jipyeong Sepatu Sneakers Wanita Sport Shoes Casual Putih 099',149900,'c265ecfeebb0d077fb452e030409495f','https://shopee.co.id/PVN-Jipyeong-Sepatu-Sneakers-Wanita-Sport-Shoes-Casual-Putih-099-i.39910038.7712169007?sp_atk=e88ea471-af65-4e99-8b16-a552c0cd3370'),
(12,'Syra.footwear Sepatu Sneakers Import Wanita Korea Fashion ORIGINAL',76,'0eed08ebaa67b471ab8ee8c87af43b24','https://shopee.co.id/Syra.footwear-Sepatu-Sneakers-Import-Wanita-Korea-Fashion-ORIGINAL-TANPA-KOTAK-SHG106-i.202928762.8141395298?sp_atk=d9aa27c0-6f52-45a5-9455-9f5d226c8c76');

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
('Admin','admin','adminkel3','l',2),
('Rebekah George','fubigun','Pa$$w0rd!','p',1),
('Angelica Lancaster','angelica','Pa$$w0rd!','p',1),
('Ina Mcgowan','mcgowan','Pa$$w0rd!','l',1);

