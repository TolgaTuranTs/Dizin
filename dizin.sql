-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 21 Oca 2017, 20:10:09
-- Sunucu sürümü: 5.6.34
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `emlaxin_dizin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `admin_name` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `admin_name`, `admin_mail`) VALUES
(1, 'Admin', '123456', 'Tolga Turan', 'tolgaturants@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('738c46e221047a40e9936b10db83e8e95ae596ae', '93.89.232.254', 1485011368, 0x4535394f536968566478564671322d674a32666573315f51355973615070683666317154716671356a505831574f686231356265676b6a6e377362676d4a7164623039704e4c55746148666e6d71514d474e4a6634412e2e),
('2c25a1ac0316aa77f88b8e16b98e852b4b33d7b3', '93.89.232.254', 1485011769, 0x6f456d4d4c436e666f5441736939595a41774b5236556877522d734b6a7a6276756941314a4c2d664d386f594567535a2d4d79315f417048586e744b694761574843507a7a54523061384e634d37546e68386d3451772e2e),
('ed67548fdab9fd47ff385b84c72197c248997203', '93.89.232.254', 1485013796, 0x5759513636676d3974554b69426e574d5446444d464e65414b577a336537615063384a5a6b584b7a4443573746414343585152456c75416c5f77324d324c6a5a436468332d474e534b5a54416c63774d58764b4a45772e2e),
('d277c811803321beec23f3c27483f93b9c3f8746', '93.89.232.254', 1485014199, 0x7a6d4f78473141465662536e7350675a3177625752546d4675476961563550424d365035504d774d4d73647751453464576a2d32796c76763836356969576846384f54344e5f746e38355747385a70394345667335672e2e),
('356862e19950155d88850f79a6ebe30598facd4d', '93.89.232.254', 1485014150, 0x645449495651446541386944677654663652494d4338776c5f41304b79584352476a494956714966716c5f387532357a4f4a43587238724e335032793139725a744f2d3430664f616278737265344c664e68564861512e2e),
('b4ae8943b4a6fe1c8a5b94257b3bdfcaf58ddf73', '93.89.232.254', 1485014785, 0x3071433249356c616564615734526d6f61444b335957482d364b6a614a6f497959786b746c2d666e64302d43533331597a61625676726e3667515f526e4a385a664b47316e6379736377435565575076454f635854772e2e),
('a4af32d88ee8d15cd5b009e962d206157eea4f3f', '93.89.232.254', 1485015113, 0x74646373426c6731355f4f492d414b596159654464644b4946494b7076556779304368546c6e714b61536e4c6d47464e32364e74636f4c41676273615338795a512d592d6d332d73304c515a48546463383550624f772e2e),
('d017b38e2c6d78b39b822cef1bdf3c2581a5a220', '93.89.232.254', 1485015410, 0x4d505876677843396a5563336c6635536b5a557341544e3479394e38794558504d495778356444564c41434b5267585145522d4858736e733850466e5f474f47636a38354d4f305031736a30454c65335f676a7249672e2e),
('962cba42c3b7585191e33537d9f55fcdf2c0f4b3', '93.89.232.254', 1485015352, 0x5a77654e4872744d53393835765835704b474650503256712d725444626a34514e56353067624574733550493056575a30704a38716c4454696d304234765f503844514a4d3264366e6f6465716e4a4d374379575f672e2e),
('c1f9d603edb8452cacfa87d84ebb7fff2785c11b', '93.89.232.254', 1485015413, 0x784f36476c6e367a54444a4c325f4973626b4a764f6c747869744c736943524371466b704d53655655577a31365438536b4e583472566c4f3051676f567a6947434e6f53615f794f6a3147374c34735a686c6f3234512e2e),
('55d046bb988d30b24b12d27ce387bfe409cb7789', '93.89.232.254', 1485015707, 0x52374d417a6858775975777933684a563637797366304b35734735535845576541307348645f56504d4c5a7479687757597746313276755837424f614a4a6a5265306a49356b6775674a6d3072645a796b76396263412e2e),
('4a80feda2e6d410e7222622f46df896aec2f257a', '93.89.232.254', 1485016035, 0x334e754d41694742386573665568485a786f6f41396e685845365977564734525145727a72553943576f5750626d6b6b685f334f42583838624f6f55594c565747456f5271547a4875426953557442665832575a42772e2e),
('b026d4fce00605cb6a0380698471664e3c46f9bd', '93.89.232.254', 1485016772, 0x596b34775a6c4d524a6469706d59334e4158715a6e622d7548534f61466b476275355a4b61786d6c59757a5946466b782d4658746865353877367765486234455969644c697076705f75654b787874514c37674844672e2e),
('5b386099ca78d26f66a206ff09481e213a9940ad', '93.89.232.254', 1485016945, 0x7a314161725a354d71597a3938385a58726869517a555f5848497533764d437755637644684e59536b7a4150564543457066453644315568384b4350565a42697a363445563279483133304168644871414d323633672e2e),
('29a2f113268acf577e28d277ae308e6e6be589b0', '93.89.232.254', 1485017630, 0x644b444348463857597176325f6b5151396479626951784931656e515f69364d5f354a42714e7845637468546456724a4465395573324a344c4e514548457a4a32707964495f4c634561555f6b5448734b74666f74672e2e),
('847c5594310e96e0938f3eff490b467843608634', '93.89.232.254', 1485017790, 0x306262335230356c724a75736c4451567052794f594b305679324c715f4343712d7435454c623449444b5945726165782d786c5059534c4b4c68313876456d74315a546455485150674e7561515176795837774553512e2e),
('4fb8f03cd4a9ea83e351589cd56fbf43d05cbc03', '93.89.232.254', 1485018494, 0x517651396e566f6646794a4f485144506d65304b613746775a667a423339786f6b6a6b786c4c4c3559736d59725a525f54645858674c3173715f31554158754e686b3555704166686e7851526763694c623371396d69757073534f345a394a4d307370444d58753674644e68664156786c6574705954394656397154416271394b4861693462384f3538546c34346869767866544e772e2e);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dizinler`
--

CREATE TABLE IF NOT EXISTS `dizinler` (
  `dizin_id` int(11) NOT NULL AUTO_INCREMENT,
  `dizin_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_url` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_aciklama` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_etiket` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_ekleyen` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_ekleyen_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_tarih` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_ekleyen_ip` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `dizin_durum` int(10) NOT NULL,
  `dizin_kategori` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`dizin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `dizinler`
--

INSERT INTO `dizinler` (`dizin_id`, `dizin_baslik`, `dizin_url`, `dizin_aciklama`, `dizin_etiket`, `dizin_ekleyen`, `dizin_ekleyen_mail`, `dizin_tarih`, `dizin_ekleyen_ip`, `dizin_durum`, `dizin_kategori`) VALUES
(3, 'Deneme Sitesi', 'http://e-bayraksepeti.com', 'Bayrak Sepeti Bayrak SAtımı', 'Bayrak,satımı', 'Tolga Turan', 'tolgaturants@gmail.com', '18/01/2017', '::1', 1, 'cocuklar-ve-gencler'),
(4, 'Deneme Sayısı', 'http://google.com', 'sdadfs', 'fsdf', 'sdfs', 'tolgaturants@gmail.com', '19/01/2017', '::1', 0, 'cocuklar-ve-gencler'),
(5, 'Deneme', 'http://google.com', 'deneme', 'dfs', 'asdasfsd', 'tolgaturants@gmail.com', '21/01/2017', '93.89.232.254', 0, 'forum'),
(6, 'Ferroli Kombi Servisi', 'http://ferroliservisim.web.tr', 'Ferroli Kombi Servisi 7/24 Hizmet', 'fg', 'dgd', 'tolgaturants@gmail.com', '21/01/2017', '93.89.232.254', 0, 'enerji-ve-cevre');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `iletisim_id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ip_adres` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `baslik` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`iletisim_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `adsoyad`, `email`, `ip_adres`, `tarih`, `baslik`, `mesaj`) VALUES
(4, 'Tolga', 'tolga_turan_ts@hotmail.com', '::1', '19/01/2017', 'Deneme', 'sdasd'),
(5, 'Tolga', 'tolga_turan_ts@hotmail.com', '93.89.232.254', '21/01/2017', 'Deneme', 'adf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_baslik` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `kategori_seflink` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `kategori_key` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=43 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_baslik`, `kategori_seflink`, `kategori_key`) VALUES
(1, 'Alışveriş', 'alisveris', ' Alışveriş'),
(2, 'Bilgisayar,Donanım,Yazılım', 'bilgisayar-donanim-yazilim', 'Bilgisayar,Donanım,Yazılım'),
(3, 'Baskı, Matbaa ve Ambalaj', 'baski-matbaa-ve-ambalaj', 'Baskı, Matbaa ve Ambalaj'),
(4, 'Arama Motoru', 'arama-motoru', 'Arama Motoru'),
(5, 'Bilim', 'bilim', 'Bilim'),
(6, 'Bilişim Teknolojileri', 'bilisim-teknolojileri', 'Bilişim Teknolojileri'),
(7, 'Danışmanlık', 'danismanlik', 'Danışmanlık'),
(8, 'Çocuklar ve Gençler', 'cocuklar-ve-gencler', 'Çocuklar ve Gençler'),
(9, 'Dış Ticaret', 'dis-ticaret', 'Dış Ticaret'),
(10, 'Dizin ve Backlink Siteleri', 'dizin-ve-backlink-siteleri', 'Dizin ve Backlink Siteleri'),
(11, 'Eğitim', 'egitim', 'Eğitim'),
(12, 'E-Ticaret', 'e-ticaret', 'E-Ticaret'),
(13, 'Eğlence, Oyun ve Yaşam', 'eglence-oyun-ve-yasam', 'Eğlence, Oyun ve Yaşam'),
(14, 'Elektrik ve Elektronik', 'elektrik-ve-elektronik', 'Elektrik ve Elektronik'),
(15, 'Emlak', 'emlak', 'Emlak'),
(16, 'Endüstriyel Hizmetler', 'endustriyel-hizmetler', 'Endüstriyel Hizmetler'),
(17, 'Enerji ve Çevre', 'enerji-ve-cevre', 'Enerji ve Çevre'),
(18, 'Finansal Hizmetler', 'finansal-hizmetler', 'Finansal Hizmetler'),
(19, 'Forum', 'forum', 'Forum'),
(20, 'Gıda Maddeleri ve İçecek', 'gida-maddeleri-ve-icecek', 'Gıda Maddeleri ve İçecek'),
(21, 'Haber, Medya ve Yayıncılık', 'haber-medya-ve-yayincilik', 'Haber, Medya ve Yayıncılık'),
(22, 'Holdingler', 'holdingler', 'Holdingler'),
(23, 'İletişim ve Haberleşme', 'iletisim-ve-haberlesme', 'İletişim ve Haberleşme'),
(24, 'İnteraktif Hizmetler', 'interaktif-hizmetler', 'İnteraktif Hizmetler'),
(25, 'İnşaat ve Yapı Sektörü', 'insaat-ve-yapi-sektoru', 'İnşaat ve Yapı Sektörü'),
(26, 'Kimyasal Ürünler', 'kimyasal-urunler', 'Kimyasal Ürünler'),
(27, 'Kişisel Web Sayfaları, Blog', 'kisisel-web-sayfalari-blog', 'Kişisel Web Sayfaları, Blog'),
(28, 'Kültür ve Sanat', 'kultur-ve-sanat', 'Kültür ve Sanat'),
(29, 'Madencilik ve Sondaj', 'madencilik-ve-sondaj', 'Madencilik ve Sondaj'),
(30, 'Mağazacılık', 'magazacilik', 'Mağazacılık'),
(31, 'Mobilya ve Dekorasyon', 'mobilya-ve-dekorasyon', 'Mobilya ve Dekorasyon'),
(32, 'Nakliyat,Taşımacılık', 'nakliyat-tasimacilik', 'Nakliyat,Taşımacılık'),
(33, 'Otomotiv', 'otomotiv', 'Otomotiv'),
(34, 'Reklamcılık ve Pazarlama', 'reklamcilik-ve-pazarlama', 'Reklamcılık ve Pazarlama'),
(35, 'Sağlık, Spor ve Bakım', 'saglik-spor-ve-bakim', 'Sağlık, Spor ve Bakım'),
(36, 'Security / Hacking', 'security-hacking', 'Security / Hacking'),
(37, 'Sigorta', 'sigorta', 'Sigorta'),
(38, 'Sosyal Medya', 'sosyal-medya', 'Sosyal Medya'),
(39, 'Tarım ve Hayvancılık', 'tarim-ve-hayvancilik', 'Tarım ve Hayvancılık'),
(40, 'Tekstil ve Konfeksiyon', 'tekstil-ve-konfeksiyon', 'Tekstil ve Konfeksiyon'),
(41, 'Ticari Hizmetler', 'ticari-hizmetler', 'Ticari Hizmetler'),
(42, 'Toplum, Topluluk', 'toplum-topluluk', 'Toplum, Topluluk');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE IF NOT EXISTS `sayfalar` (
  `sayfa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sayfa_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_seflink` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_key` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_text` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`sayfa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_baslik`, `sayfa_seflink`, `sayfa_key`, `sayfa_text`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 'Hakkımızda,deneme', '<p>Bu Hakkımızda Sayfası , deneme..</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlari`
--

CREATE TABLE IF NOT EXISTS `site_ayarlari` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `site_key` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `site_desc` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `site_copyright` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `site_iletisim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `site_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `site_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `site_reklam` text COLLATE utf8_turkish_ci NOT NULL,
  `site_logo` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `site_ayarlari`
--

INSERT INTO `site_ayarlari` (`site_id`, `site_baslik`, `site_key`, `site_desc`, `site_copyright`, `site_iletisim`, `site_facebook`, `site_twitter`, `site_reklam`, `site_logo`) VALUES
(1, 'Dizin Sitesi', 'deneme,dizin', 'Dizin Site Ücretsiz Üyeliksiz Kodsuz', '2017 2018 Tolga Turan / Açık Proje Yazılımı.', 'tolgaturants@gmail.com', 'http://facebook.com', 'http://twitter.com', '<a href="" target="_blank">\r\n<img src="http://cikmateklifi.gen.tr/wp-content/uploads/2013/11/reklam-alani-260x250.jpg" style="width:100%" />\r\n</a>', 'B-T Dizin Sitesi.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
