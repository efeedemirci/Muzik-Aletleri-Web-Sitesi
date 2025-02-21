-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2024, 11:08:49
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dukkan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anaicerik`
--

CREATE TABLE `anaicerik` (
  `id` int(11) NOT NULL,
  `resim` varchar(500) NOT NULL,
  `baslik` varchar(500) NOT NULL,
  `icerik` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `anaicerik`
--

INSERT INTO `anaicerik` (`id`, `resim`, `baslik`, `icerik`) VALUES
(3, '../resimler/resim1.png', 'En İkonik M&uuml;zik Aletleri ve Ekipmanları\r\n', 'M&uuml;ziğin b&uuml;y&uuml;s&uuml;, en ikonik m&uuml;zik aletleri ve ekipmanlarıyla bir araya gelir. Bu eşsiz enstr&uuml;manlar, tarihleri ve m&uuml;zik d&uuml;nyasındaki etkileriyle birlikte, her m&uuml;zik tutkununun koleksiyonunda &ouml;zel bir yer buluyor. Bu ikonik m&uuml;zik aletleri ve ekipmanları, m&uuml;zik d&uuml;kkanımızın geniş &uuml;r&uuml;n yelpazesi i&ccedil;inde yer alıyor. Her biri, m&uuml;zik tutkunlarının aradıkları sesi bulmalarına yardımcı olacak kalite ve &ccedil;eşitlilik sunuyor. M&uuml;zik d&uuml;nyasının zirvesinde yer almak i&ccedil;in, en ikonik enstr&uuml;manları keşfetmeye hazır'),
(8, '../resimler/resim2.png', 'Analog ve Dijital Dünyanın Buluştuğu Mükemmel Harmony: Hybrid Enstrümanlar', 'Geleneksel enstrümanların sıcaklığı ile dijital teknolojinin esnekliği arasında mükemmel bir denge kuran hybrid enstrümanlar, müzik dünyasında çığır açıyor. Bu enstrümanlar, çeşitli tonal özellikleriyle müzisyenlere geniş bir yelpaze sunarak, hem geleneksel hem de modern müziğe yönelik yeni kapılar açıyor.'),
(9, '../resimler/resim3.png', 'Retro Rüzgarı: Vintage Müzik Ekipmanlarının Yükselişi', 'Nostalji tutkunları için, vintage müzik ekipmanları her geçen gün daha çekici hale geliyor. Eskimeyen ses kalitesi ve estetik cazibesiyle vintage ekipmanlar, müzik dükkanımızın raflarında yerini alıyor. Analog kayıtçılardan eski model hoparlörlere kadar, geçmişin müzik deneyimini günümüze taşıyan bu ürünler, müzik tutkunlarına unutulmaz anlar yaşatıyor.'),
(10, '../resimler/resim4.png', 'Sesinizi Şekillendirin: En İyi Ses Efekt Pedalları Rehberi', 'Müzisyenler için seslerini kişiselleştirmenin vazgeçilmez yollarından biri olan ses efekt pedalları, yaratıcılığı zirveye taşıyor. Distorsiyon, delay, reverb gibi çeşitli efektleri içeren bu pedallar, sahnede ve stüdyoda birbirinden farklı ses deneyimleri sunuyor. En iyi ses efekt pedalları rehberimizle, müzik tutkunları kendi özgün seslerini keşfetmeye davet ediyoruz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` varchar(20) NOT NULL,
  `ksifre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kadi`, `ksifre`) VALUES
(1, 'izzet efe', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nefesliler`
--

CREATE TABLE `nefesliler` (
  `id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `nefesliler`
--

INSERT INTO `nefesliler` (`id`, `resim`, `baslik`, `icerik`) VALUES
(1, '../resimler/flut.png', 'Flüt', 'Flüt, nefesli bir üflemeli enstrümandır ve metal bir ağızlık kullanılarak çalınır. Genellikle hafif ve melodik tonlarıyla bilinir. Flüt, klasik müzikten popüler müziğe, cazdan folk müziğe kadar birçok farklı türde kullanılır. Flütçüler, parmakları ve nefes kontrolünü kullanarak çeşitli melodi ve teknikleri başarıyla ifade ederler.\r\n\r\n'),
(2, '../resimler/klarnet.png', 'Klarnet', 'Klarnet, ağaçtan yapılan bir enstrümandır ve tek kamışlı bir ağızlık kullanır. Kendine özgü tonu, geniş ses aralığı ve esnek kullanımı ile tanınır. Klarnet, klasik orkestrasyonda, caz gruplarında ve halk müziğinde sıkça yer alır. Virtüöz klarnetçiler, enstrümanlarını duygusal bir ifade aracına dönüştürerek çeşitli müzik türlerinde önemli roller üstlenirler.\r\n\r\n'),
(3, '../resimler/obua.png', 'Obua', 'Obua, tek kamışlı bir ağızlık kullanılan nefesli bir üflemeli enstrümandır. Klasik müzikte sıkça kullanılan obua, zengin tonu ve duygusal ifadesiyle öne çıkar. Orkestral gruplarda, oditoryumlarda ve oda müziği performanslarında yer alır. Obua çalmak, özel bir tekniği gerektirir ve müzisyenin ağızlık kontrolü ile çeşitli melodik pasajları ifade etmesini sağlar.\r\n\r\n'),
(4, '../resimler/trompet.png', 'Trompet', 'Trompet, parlak ve yüksek tonları ile öne çıkan bir bakır üflemeli enstrümandır. Nefes kontrolü, embuçu tekniği ve özgün üfleme teknikleri trompetçilerin başarılı olmasını sağlar. Caz, klasik, pop ve halk müziği gibi birçok türde kullanılan trompet, enerjik solo performanslarının yanı sıra orkestral ve grup çalışmalarında da önemli bir rol oynar.\r\n\r\n'),
(5, '../resimler/korno.png', 'Korno', 'Korno, bakır bir üflemeli enstrüman olup genellikle büyük orkestral gruplarda bulunur. Büyük bir kıvrım şeklindeki borusu ve geniş ton aralığı, kornoyu diğer bakır üflemelilerden ayırır. Klasik müzikte sıkça kullanılan korno, dramatik ve güçlü sesiyle orkestrasyona derinlik katar. Kornocular, özellikle orkestral eserlerde sololar ve öne çıkan melodi hatlarıyla dikkat çekerler.\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `telliler`
--

CREATE TABLE `telliler` (
  `id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `telliler`
--

INSERT INTO `telliler` (`id`, `resim`, `baslik`, `icerik`) VALUES
(1, '../resimler/gitar.png', 'Gitar', 'Gitar, telli bir çalgıdır ve genellikle altı telli olarak bilinir. Akustik veya elektrikli olabilen gitar, çeşitli müzik türlerinde yaygın olarak kullanılır. Akustik gitarlar genellikle hafif tonlarıyla folk, country ve akustik müzikte tercih edilirken, elektrikli gitarlar rock, metal ve blues gibi türlerde kullanılır. Gitar, çalma tarzı ve ton çeşitliliği ile müzisyenlere geniş bir ifade yelpazesi sunar.\r\n\r\n'),
(2, '../resimler/baglama.png', 'Bağlama', 'Bağlama, geleneksel bir Türk telli çalgısıdır ve üç çift telli bir yapıya sahiptir. Türk halk müziği ve klasik Türk müziği gibi geleneksel Türk müzik türlerinde sıkça kullanılır. Bağlama, genellikle halk şarkılarına eşlik etmek veya solo performanslar için kullanılır. İki farklı boyutta başlıca türleri bulunur: \"bozuk düzen\" ve \"akort düzeni\".\r\n\r\n'),
(3, '../resimler/ukulele.png', 'Ukulele', 'Ukulele, dört telli küçük bir çalgıdır ve genellikle Hawai müziği ile özdeşleşmiştir. Hafif ve neşeli tonlarıyla bilinen ukulele, popüler müzik, folk ve hafif tınılı şarkılarda kullanılır. Genellikle kolay taşınabilir olması ve basit akor yapısıyla başlangıç seviyesi müzisyenler için popüler bir seçenektir.\r\n\r\n'),
(4, '../resimler/kanun.png', 'Kanun', 'Kanun, Orta Doğu ve Orta Asya müzik geleneğinde önemli bir yere sahip bir çalgıdır. Tahta bir gövde ve telleri olan bir çerçeveye sahiptir. Çalındığında, parmaklarla telleri eğerek çeşitli tonları üretir. Kanun, özellikle Arap müziği, Türk müziği ve Fars müziği gibi geleneksel müziklerde kullanılır. Zengin ve duygusal tonlarıyla bilinen kanun, melodi hatlarını güçlendirmek ve vurgulamak için kullanılır.\r\n\r\n'),
(5, '../resimler/arp.png', 'Arp', 'Arp, tarihi oldukça eski olan bir teli çekme enstrümanıdır. Ahşap veya metal teli bulunan bir çerçeveye sahiptir ve telleri parmak veya perçin yardımıyla çekilerek çalınır. Klasik müzik, Ortaçağ müziği ve bazı halk müzik türlerinde kullanılan arp, zarif ve etkileyici sesi ile bilinir. Orkestral çalışmalarda, solo performanslarda ve çeşitli müzik topluluklarında yer alabilir.\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tuslular`
--

CREATE TABLE `tuslular` (
  `id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tuslular`
--

INSERT INTO `tuslular` (`id`, `resim`, `baslik`, `icerik`) VALUES
(1, '../resimler/piyano.png', 'Piyano', 'Piyano, geniş bir ses yelpazesine sahip olan ve tuşlar aracılığıyla çalınan bir klavye enstrümanıdır. Her tuşun farklı bir nota üretmesi sayesinde, piyano hem solo performanslarda hem de orkestrasyonlarda kullanılır. Klasik, caz, pop ve birçok müzik türünde önemli bir yer tutar. Piyano, müzisyenlere dinamik ifade ve geniş melodi yelpazesi sağlar.\r\n\r\n'),
(2, '../resimler/org.png', 'Org', 'Org, hava basıncını kullanarak üretilen seslerle çalışan bir klavye enstrümanıdır. Genellikle kiliselerde ve konser salonlarında bulunan org, çok sayıda sesi kontrol edebilme özelliğiyle tanınır. Klavye çalmakla birlikte, orgun pedal bölümü de kullanılarak derin bas tonlarına ulaşılır. Klasik müzik, kilise müziği ve bazı modern türlerde org önemli bir rol oynar.\r\n\r\n'),
(3, '../resimler/akordeon.png', 'Akordeon', 'Akordeon, nefesli bir üflemeli enstrüman olup yan yana dizilmiş tuşlar ve akordeonu şişirmek veya sıkıştırmak için kullanılan bir balgı ile çalışır. Akordeon, halk müziği, caz, tangolar gibi birçok kültürel müzik türünde kullanılan çok yönlü bir enstrümandır. Akordeonun karakteristik sesi ve esnekliği, solo performanslardan orkestral kullanıma kadar çeşitli bağlamlarda işlev görmesini sağlar.\r\n\r\n'),
(4, '../resimler/melodika.png', 'Melodika', 'Melodika, klavye enstrümanları arasında taşınabilir bir seçenektir. Küçük boyutu ve basit çalım prensibi, her tuşa basıldığında hava üfleyerek ses üretimini sağlar. Genellikle eğlenceli ve eğitici amaçlarla kullanılan melodika, özellikle müzik eğitimi alanında popülerdir.\r\n\r\n'),
(5, '../resimler/keytar.png', 'Keytar', 'Keytar, bir klavye enstrümanı olan keytar, tuşlara ek olarak gitar benzeri bir sapı da içerir. Elektronik klavye tonlarını çalmak ve aynı zamanda sahne performanslarına dinamizm katmak için kullanılır. Pop, rock ve elektronik müzik gibi türlerde keytar, müzisyenlere sahnedeki hareketliliklerini artırma ve farklı bir estetik sunma imkanı sağlar.\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vurmalilar`
--

CREATE TABLE `vurmalilar` (
  `id` int(11) NOT NULL,
  `resim` varchar(50) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `vurmalilar`
--

INSERT INTO `vurmalilar` (`id`, `resim`, `baslik`, `icerik`) VALUES
(1, '../resimler/bateri.png', 'Bateri', 'Bateri, müziğin temel taşlarından biridir. Bir baterist, farklı boyutlardaki davulları, zilleri ve perküsyon enstrümanlarını kullanarak çeşitli ritimler ve ses efektleri oluşturur. Rock, pop, caz ve diğer birçok müzik türünde baterinin enerjik ve ritmik dokunuşu, sahne performanslarına ve kayıtlara güç katmaktadır.'),
(5, '../resimler/trampet.png', 'Trampet', 'Trampet, kendine özgü parlak ve yüksek tonlarıyla öne çıkan bir bakır üflemeli enstrümandır. Nefes kontrolü ve embuçu tekniği, trampet çalan müzisyenler için temel becerilerdir. Caz sololarında, klasik orkestrasyonda veya pop şarkılarında kullanılan trampet, duygusal bir ifade aracı olarak da önemli bir rol oynar.'),
(6, '../resimler/marimba.png', 'Marimba', 'Marimba, ahşap çubuklar üzerindeki ses plakalarıyla çalınan melodik bir perküsyon enstrümanıdır. Zarif ve zengin tonlarıyla bilinen marimba, genellikle etkileyici melodilerin ve ritmik desenlerin çalınmasında kullanılır. Klasik müzikten çağdaş eserlere kadar çeşitli türlerde marimba, geniş bir müzik yelpazesinde yer bulur.'),
(7, '../resimler/davul.png', 'Davul', 'Davul, ritim enstrümanları arasında temel bir rol oynar. Bir davul seti, farklı boyutlardaki davulları, zilleri ve diğer perküsyon elemanlarını içerir. Davulcunun elleri ve ayakları aracılığıyla kontrol ettiği bu enstrüman, müziğe dinamik ve güçlü bir temel sağlar. Rock, metal, blues ve diğer birçok müzik türünde davul, enerjik ve çeşitli ritimlerin ana kaynağı olarak kullanılır.\r\n\r\n'),
(8, '../resimler/zil.png', 'Zil', 'Zil, metalin özel bir şekilde şekillendirilmesiyle elde edilen bir çalgıdır. Genellikle bir çubuk veya çalgıcının elle çalındığı bu enstrüman, parlak ve canlı bir tınıya sahiptir. Ziller, genellikle orkestral, caz veya halk müziği eserlerinde kullanılır ve melodik öğeleri vurgulamak, ritmi güçlendirmek veya belirli anları vurgulamak için kullanılır. Hem klasik hem de çağdaş müzikte ziller, çeşitli ses rengi ve dokularıyla dikkat çeker.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yaylilar`
--

CREATE TABLE `yaylilar` (
  `id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yaylilar`
--

INSERT INTO `yaylilar` (`id`, `resim`, `baslik`, `icerik`) VALUES
(1, '../resimler/keman.png', 'Keman', 'Keman, dört telli bir yaylı çalgıdır ve genellikle klasik müzik orkestralarında veya solo performanslarda kullanılır. Küçük boyutu, zengin tonu ve duygusal ifadesi ile tanınan keman, bir yay ve tellere parmaklarla dokunarak çalınır. Virtüöz keman çalgıcıları, teknik becerilerini ve melodik duyarlılıklarını birleştirerek çeşitli müzik türlerinde önemli roller üstlenirler.\r\n\r\n'),
(3, '../resimler/viyola.png', 'Viyola', 'Viyola, kemanın bir tını aşağısında olan bir yaylı çalgıdır. Daha büyük bir boyuta sahip olmasının yanı sıra kemanla benzer bir yapıya sahiptir. Viyola, genellikle orkestral ve oda müziği eserlerinde harmoniyi güçlendirmek veya öne çıkarmak için kullanılır. Viyolacılar, özel bir ton rengi ve daha düşük tonları ifade etme yetenekleriyle tanınırlar.\r\n\r\n'),
(4, '../resimler/cello.png', 'Çello', 'Çello, dört telli bir yaylı çalgıdır ve viyola ile keman arasında bir tınıya sahiptir. Çellistler, genellikle oturarak çalarlar ve çellonun büyük boyutu sayesinde derin, zengin tonlar elde ederler. Klasik müzikte solo veya orkestral performanslarda sıkça görülen çello, aynı zamanda popüler müzikte de kullanılır.\r\n\r\n'),
(5, '../resimler/kontrbas.png', 'Kontrbas', 'Kontrbas, yaylı çalgı ailesinin en büyüğüdür ve genellikle orkestral gruplarda kullanılır. Derin tonlu ve güçlü bir sesi vardır. Kontrbasçılar, genellikle ayakta durarak veya oturarak çalarlar ve büyük boyutlarına rağmen bu enstrümanı çalmak oldukça dinamik bir yetenek gerektirir.\r\n\r\n'),
(6, '../resimler/kemence.png', 'Kemençe', 'Kemençe, geleneksel Türk müziğinde kullanılan üç telli bir çalgıdır. Gövdesi genellikle yuvarlak ve incedir. Yaylı bir çalgı olan kemençe, yayı ve telleri parmaklarla çekilerek çalınır. Türk halk müziği ve klasik Türk müziği gibi geleneksel Türk müzik türlerinde önemli bir yer tutar. Kemençenin kendine özgü tonu, melodik özellikleri ve duygusal ifadesiyle bilinir.\r\n\r\n\r\n\r\n\r\n\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anaicerik`
--
ALTER TABLE `anaicerik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `nefesliler`
--
ALTER TABLE `nefesliler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `telliler`
--
ALTER TABLE `telliler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tuslular`
--
ALTER TABLE `tuslular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vurmalilar`
--
ALTER TABLE `vurmalilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yaylilar`
--
ALTER TABLE `yaylilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anaicerik`
--
ALTER TABLE `anaicerik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `nefesliler`
--
ALTER TABLE `nefesliler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `telliler`
--
ALTER TABLE `telliler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tuslular`
--
ALTER TABLE `tuslular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `vurmalilar`
--
ALTER TABLE `vurmalilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `yaylilar`
--
ALTER TABLE `yaylilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
