-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Eki 2022, 13:25:36
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `titizagrogrup`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `kullaniciAdi` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kayit_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullaniciAdi`, `sifre`, `kayit_id`) VALUES
('stg', '123123', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevaplar`
--

CREATE TABLE `cevaplar` (
  `kayit_id` int(11) NOT NULL,
  `tckn` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `telNo` varchar(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `cinsiyet` varchar(6) NOT NULL,
  `dogumTarihi` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `burc` varchar(20) NOT NULL,
  `baslangic` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `bitis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt1` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt2` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt3` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt4` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt5` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt6` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt7` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt8` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt9` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt10` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt11` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt12` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt13` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt14` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt15` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt16` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt17` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt18` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt19` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt20` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt21` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt22` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt23` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt24` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt25` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt26` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt27` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt28` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt29` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt30` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt31` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt32` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt33` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt34` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt35` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt36` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt37` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt38` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt39` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kt40` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt1` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt2` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt3` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt4` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt5` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt6` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt7` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt8` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt9` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt10` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt11` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt12` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt13` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt14` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt15` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt16` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt17` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt18` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt19` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt20` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt21` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt22` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt23` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt24` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt25` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt26` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt27` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt28` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt29` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt30` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt31` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt32` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt33` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt34` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `dt35` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et1` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et2` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et3` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et4` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et5` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et6` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et7` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et8` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et9` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et10` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et11` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et12` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et13` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et14` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et15` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et16` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et17` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et18` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et19` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et20` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et21` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et22` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et23` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et24` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et25` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et26` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et27` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et28` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et29` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et30` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et31` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et32` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et33` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et34` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et35` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et36` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et37` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et38` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `et39` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cevaplar`
--

INSERT INTO `cevaplar` (`kayit_id`, `tckn`, `telNo`, `ad`, `soyad`, `cinsiyet`, `dogumTarihi`, `email`, `burc`, `baslangic`, `bitis`, `kt1`, `kt2`, `kt3`, `kt4`, `kt5`, `kt6`, `kt7`, `kt8`, `kt9`, `kt10`, `kt11`, `kt12`, `kt13`, `kt14`, `kt15`, `kt16`, `kt17`, `kt18`, `kt19`, `kt20`, `kt21`, `kt22`, `kt23`, `kt24`, `kt25`, `kt26`, `kt27`, `kt28`, `kt29`, `kt30`, `kt31`, `kt32`, `kt33`, `kt34`, `kt35`, `kt36`, `kt37`, `kt38`, `kt39`, `kt40`, `dt1`, `dt2`, `dt3`, `dt4`, `dt5`, `dt6`, `dt7`, `dt8`, `dt9`, `dt10`, `dt11`, `dt12`, `dt13`, `dt14`, `dt15`, `dt16`, `dt17`, `dt18`, `dt19`, `dt20`, `dt21`, `dt22`, `dt23`, `dt24`, `dt25`, `dt26`, `dt27`, `dt28`, `dt29`, `dt30`, `dt31`, `dt32`, `dt33`, `dt34`, `dt35`, `et1`, `et2`, `et3`, `et4`, `et5`, `et6`, `et7`, `et8`, `et9`, `et10`, `et11`, `et12`, `et13`, `et14`, `et15`, `et16`, `et17`, `et18`, `et19`, `et20`, `et21`, `et22`, `et23`, `et24`, `et25`, `et26`, `et27`, `et28`, `et29`, `et30`, `et31`, `et32`, `et33`, `et34`, `et35`, `et36`, `et37`, `et38`, `et39`) VALUES
(105, '29968055228', '5542071777', 'Süleyman Türker', 'GÜNER', 'Erkek', '2000-02-02', 'gunersuleymanturker@gmail.com', 'Kova &#9804;', '10.28.22 20:42:03', '10.28.22\n20:45:03', 'A', 'A', 'B', 'A', 'B', 'A', 'C', 'C', 'C', 'C', 'A', 'C', 'D', 'D', 'C', 'B', 'A', 'B', 'D', 'A', 'B', 'C', 'B', 'C', 'D', 'B', 'D', 'B', 'C', 'B', 'B', 'C', 'D', 'A', 'B', 'B', 'D', 'D', 'D', 'B', '2', '0', '0', '2', '2', '0', '4', '1', '2', '0', '4', '3', '3', '0', '1', '2', '2', '3', '1', '3', '0', '1', '3', '4', '3', '2', '1', '4', '4', '3', '4', '4', '4', '2', '3', '5', '3', '5', '5', '4', '2', '2', '5', '4', '5', '2', '1', '3', '1', '1', '4', '5', '4', '1', '5', '5', '5', '5', '1', '5', '3', '3', '5', '4', '1', '1', '5', '5', '3', '2', '5', '5', '1', '4'),
(107, '30082051492', '5542071777', 'Süleyman Türker', 'GÜNER', 'Erkek', '2222-02-22', 'gunersuleymanturker@gmail.com', 'Balık &#9804;', '10.28.22 22:17:38', '10.28.22 22:17:38', 'C', 'B', 'C', 'B', 'D', 'C', 'D', 'C', 'A', 'A', 'A', 'C', 'C', 'B', 'C', 'D', 'C', 'C', 'A', 'A', 'C', 'C', 'A', 'D', 'A', 'C', 'B', 'B', 'C', 'D', 'C', 'A', 'B', 'C', 'D', 'B', 'D', 'B', 'D', 'C', '2', '3', '3', '3', '2', '4', '3', '2', '4', '3', '2', '2', '3', '3', '0', '4', '2', '3', '3', '2', '0', '2', '3', '3', '1', '3', '1', '1', '4', '4', '3', '3', '3', '1', '2', '3', '2', '1', '4', '2', '5', '5', '3', '3', '4', '3', '1', '3', '5', '4', '5', '4', '3', '5', '4', '4', '5', '4', '3', '5', '2', '2', '4', '2', '3', '2', '4', '5', '2', '4', '4', '2', '5', '4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `davranistesti_secenekleri`
--

CREATE TABLE `davranistesti_secenekleri` (
  `kayit_id` varchar(11) DEFAULT NULL,
  `sturu` varchar(11) DEFAULT NULL,
  `secenek_id` int(2) DEFAULT NULL,
  `secenek_tanimi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `davranistesti_secenekleri`
--

INSERT INTO `davranistesti_secenekleri` (`kayit_id`, `sturu`, `secenek_id`, `secenek_tanimi`) VALUES
('1', '2', 0, 'Asla'),
('2', '2', 1, 'Bazen'),
('3', '2', 2, 'Duruma Göre'),
('4', '2', 3, 'Sık Sık'),
('5', '2', 4, 'Her Zaman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `davranistesti_sorular`
--

CREATE TABLE `davranistesti_sorular` (
  `soru_id` varchar(11) DEFAULT NULL,
  `sturu_id` varchar(11) DEFAULT NULL,
  `sorular` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `davranistesti_sorular`
--

INSERT INTO `davranistesti_sorular` (`soru_id`, `sturu_id`, `sorular`) VALUES
('1', '2', 'Bir kişi haksız olduğunda bunu ona söyler misiniz?'),
('2', '2', 'Karar alırken zorlanır mısınız?'),
('3', '2', 'Başkalarının fikirlerini, görüşlerini, davranışlarını rahatlıkla eleştirebilir misiniz?'),
('4', '2', 'Siz kuyrukta beklerken bir başkası önünüze geçerse, sesinizi çıkarır ve onu engeller misiniz?'),
('5', '2', 'Utanma, sıkılma endişesiyle sıklıkla insanlardan ve belli ortamlardan kaçınır mısınız?'),
('6', '2', 'Kendi yargılarınıza güvenir misiniz?'),
('7', '2', 'Eşinizin ya da ev arkadaşınızın günlük ev işlerinin makul bir kısmını üstlenmesi için ısrarcı olur musunuz?'),
('8', '2', 'Anlık sevinçlere ya da öfkelere kapılmaya eğilimli misiniz?'),
('9', '2', 'Gerçekte ihtiyacınız olmayan bir ürünü satmaya çalışan satıcının ısrarı karşısında “hayır” demekte zorlanır mısınız?'),
('10', '2', 'Geç kalan birini beklemek zorunda kaldığınızda bu duruma dikkatini çeker misiniz?'),
('11', '2', 'Bir toplantıda söz alıp konuşma konusunda tedirgin/isteksiz olur musunuz?'),
('12', '2', 'Bir kişi sizden ödünç aldığı bir şeyi geri getirmede gecikirse bunu ona söyler misiniz?'),
('13', '2', 'Karşınızdaki bitirmek istediği halde siz tartışmaya devam eder misiniz?'),
('14', '2', 'Ne hissettiğinizi genellikle açıklıkla söyler misiniz?'),
('15', '2', 'Eğer bir kişi çalışırken sizi izliyorsa rahatsız olur musunuz?'),
('16', '2', 'Sinemada veya konferansta yanınızdaki/arkanızdaki sürekli olarak koltuğunuza dokunuyor ya da ayağıyla vuruyorsa durması için uyarır mısınız?'),
('17', '2', 'Bir başkasıyla konuşurken göz temasını sürdürmekte zorlanır mısınız?'),
('18', '2', 'Lokantada yemeğiniz iyi hazırlanmamış ya da iyi servis edilmemişse durumun düzeltilmesini ister misiniz?'),
('19', '2', 'Satın aldığınız bir ürün hatalıysa, düzeltilmesi için iade eder misiniz?'),
('20', '2', 'Kızgınlığınızı küfrederek gösterir misiniz?'),
('21', '2', 'Sosyal ortamlarda mümkün olduğunca dikkat çekmemeye çalışır mısınız?'),
('22', '2', 'Ev sahibinin kendi sorumluluğu olan tamir, ayar, bakım yapması konusunda ısrarcı olur musunuz?'),
('23', '2', 'Genellikle öne çıkıp başkaları için kararlar alır mısınız?'),
('24', '2', 'Sevginizi ve ilginizi bir başkasına açıklıkla söyleyebilir misiniz?'),
('25', '2', 'Arkadaşlarınızdan küçük iyilikler yapmalarını ya da size yardım etmelerini isteyebilir misiniz?'),
('26', '2', 'Her zaman doğru cevabın sizde olduğunu düşünür müsünüz?'),
('27', '2', 'Saygı duyduğunuz bir kişiyle farklı düşünüyorsanız bunu ona rahatlıkla söyleyebilir misiniz?'),
('28', '2', 'Arkadaşlarınızdan gelen makul olmayan istekleri zorlanmadan reddedebilir misiniz?'),
('29', '2', 'Başkalarına iltifat etmede ve onları övmede zorlanıyor musunuz?'),
('30', '2', 'Yakınınızda sigara içen birisinden rahatsız oluyorsanız, bunu ona söyler misiniz?'),
('31', '2', 'Başkalarının sizin istediğiniz gibi davranması için bağırır veya baskıcı taktikler kullanır mısınız?'),
('32', '2', 'Başkalarının cümlelerini onların yerine siz tamamlar mısınız?'),
('33', '2', 'Çok rahatlıkla fiziksel kavgaya girişir misiniz?'),
('34', '2', 'Aile yemeklerinde konuşmaları kontrolünüz altında tutar mısınız?'),
('35', '2', 'Bir yabancıyla karşılaştığınızda ilk olarak kendini tanıtan ve konuşmaya başlayan kişi siz misiniz?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `envantertesti_secenekleri`
--

CREATE TABLE `envantertesti_secenekleri` (
  `kayit_id` varchar(11) DEFAULT NULL,
  `sturu` varchar(11) DEFAULT NULL,
  `secenek_id` int(2) DEFAULT NULL,
  `secenek_tanimi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `envantertesti_secenekleri`
--

INSERT INTO `envantertesti_secenekleri` (`kayit_id`, `sturu`, `secenek_id`, `secenek_tanimi`) VALUES
('1', '3', 1, 'Hiç katılmıyorum'),
('2', '3', 2, 'Katılmıyorum'),
('3', '3', 3, 'Kararsızım'),
('4', '3', 4, 'Katılıyorum'),
('5', '3', 5, 'Tamamen katılıyorum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `envantertesti_sorulari`
--

CREATE TABLE `envantertesti_sorulari` (
  `soru_id` varchar(11) DEFAULT NULL,
  `sturu_id` varchar(11) DEFAULT NULL,
  `sorular` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `envantertesti_sorulari`
--

INSERT INTO `envantertesti_sorulari` (`soru_id`, `sturu_id`, `sorular`) VALUES
('1', '3', 'Mümkün olsa her akşam arkadaşlarımla dışarı çıkarım.'),
('2', '3', 'Girdiğim gruplarda idareyi ele alma konusunda istekliyimdir.'),
('3', '3', 'Birisinin bana sebepsiz iyilik yapması beni şüphelendirmez.'),
('4', '3', 'Alıştığım ve bildiğim şeylerdense yeni şeyler denemeyi tercih ederim.'),
('5', '3', 'Sevmediğim birisi olsa bile bunu ona hissettirmem.'),
('6', '3', 'Düzenli ve titiz biriyim.'),
('7', '3', 'O an, içimden geldiği gibi davrandığım azdır.'),
('8', '3', 'Enerjik ve hareketli bir yapım vardır.'),
('9', '3', 'Estetik ve sanatsal eğilimlerim vardır.'),
('10', '3', 'Benimle ilgili başkalarının düşüncelerini değil, kendi düşüncelerimi daha çok önemser ve referans alırım.'),
('11', '3', 'Bir ortama girdiğimde dikkatlerin üzerimde olmasından hoşlanırım.'),
('12', '3', 'Hayalperest değil, gerçekçi birsiyim.'),
('13', '3', 'İnsanlarla birlikte olmaktan her zaman keyif alırım.'),
('14', '3', 'Her zaman kurallara uygun davranırım.'),
('15', '3', 'Duygularımı ve tepkilerimi kontrol etmekte pek zorlanmam.'),
('16', '3', 'İstediğim şeyleri başarabileceğime inanırım.'),
('17', '3', 'Duygularımda hızlı değişimler pek olmaz.'),
('18', '3', 'İnsanların çoğunu severim.'),
('19', '3', 'Gündelik hayatımda bir değişiklik olduğunda çabuk uyum sağlarım.'),
('20', '3', 'Yaptığım şeylerle ilgili pişmanlık veya suçluluk duygularını pek hissetmem.'),
('21', '3', 'İnsanların hatasını görsem bile pek eleştirmem.'),
('22', '3', 'Rutinden sıkılır, değişiklik ihtiyacı hissederim.'),
('23', '3', 'Çok ender kaygılı ve gergin olurum.'),
('24', '3', 'Zihinsel oyunlar oynamaktan keyif alırım.'),
('25', '3', 'İnsanların özünde iyi ve güvenilir olduklarını düşünüyorum.'),
('26', '3', 'Heyecan verici ve tehlikeli aktiviteleri (yamaç paraşütü, yüksekten atlama, lunaparktaki hızlı ve yüksek oyuncaklar vb.) denemekten keyif alırım.'),
('27', '3', 'Planlı ve programlı yaşarım.'),
('28', '3', 'Davranışlarım ve konuşmalarım ile insanları kırmaktan çekinen birisiyim.'),
('29', '3', 'Sevmesem bile başladığım işi elimden gelen en iyi şekilde bitiririm.'),
('30', '3', 'Her durumda sakin kalabilirim.'),
('31', '3', 'Sürekli yeni şeyler öğrenmek için çaba gösteririm.'),
('32', '3', 'İçimden gelen dürtüleri kontrol edemediğim pek olmaz.'),
('33', '3', 'Tanıştığım insanlara çabuk güvenirim.'),
('34', '3', 'Problem çıkmasın diye fikirlerimi savunmadığım olur.'),
('35', '3', 'Ufak şeyler moralimi bozmaz.'),
('36', '3', 'Yaptığım işlerde mükemmellik ararım.'),
('37', '3', 'Yardımsever birisi olarak tanınırım.'),
('38', '3', 'Alacağım her türlü karar için enine boyuna düşünürüm.'),
('39', '3', 'Yeni bir ortama girdiğimde dinlemek yerine konuşmayı tercih ederim.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiliktesti_secenekleri`
--

CREATE TABLE `kisiliktesti_secenekleri` (
  `kayit_id` varchar(11) DEFAULT NULL,
  `sturu` varchar(11) DEFAULT NULL,
  `soru_no` int(2) DEFAULT NULL,
  `secenek_a` varchar(60) DEFAULT NULL,
  `secenek_b` varchar(60) DEFAULT NULL,
  `secenek_c` varchar(60) DEFAULT NULL,
  `secenek_d` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisiliktesti_secenekleri`
--

INSERT INTO `kisiliktesti_secenekleri` (`kayit_id`, `sturu`, `soru_no`, `secenek_a`, `secenek_b`, `secenek_c`, `secenek_d`) VALUES
('1', '1', 1, 'Hareketli', 'Maceraperest', 'Uyum sağlayan', 'Analitik'),
('2', '1', 2, 'Neşeli', 'İkna edici', 'Barışçıl', 'Israrcı'),
('3', '1', 3, 'Sosyal', 'İradeli', 'Fedakâr', 'Uysal'),
('4', '1', 4, 'İnandırıcı', 'Rekabetçi', 'İnsaflı', 'Denetimli'),
('5', '1', 5, 'Ferahlatıcı', 'Becerikli', 'Çekingen', 'Saygılı'),
('6', '1', 6, 'Cesur', 'Kendine güvenen', 'Hoşnut', 'Duyarlı'),
('7', '1', 7, 'Teşvik edici', 'Olumlu', 'Sabırlı', 'Planlı'),
('8', '1', 8, 'Kendiliğinden', 'Emin', 'Utangaç', 'Programa bağlı'),
('9', '1', 9, 'İyimser', 'Dobra', 'Lütufkâr', 'Düzenli'),
('10', '1', 10, 'Komik', 'Baskıcı', 'Arkadaşçıl', 'Sadık'),
('11', '1', 11, 'Hoş', 'Cesaretli', 'Kültürlü', 'Zararsız'),
('12', '1', 12, 'Neşeli', 'Tutarlı', 'Hoşgörülü', 'Güvenli'),
('13', '1', 13, 'Heyecanlandırıcı', 'Bağımsız', 'Zararsız', 'İdealist'),
('14', '1', 14, 'Coşkun', 'Kesin', 'Derin düşünceli', 'Kuru esprili'),
('15', '1', 15, 'Kolay kaynaşır', 'Harekete geçiren', 'Aracı', 'Ahenkli'),
('16', '1', 16, 'Konuşma yanlısı', 'Yapışkan', 'İnce düşünceli', 'Hoşgörülü'),
('17', '1', 17, 'Canlı', 'Lider', 'Samimi', 'Dinleyici'),
('18', '1', 18, 'Şirin', 'Başkan, şef', 'Halinden memnun', 'Yol gösteren'),
('19', '1', 19, 'Popüler', 'Üretici', 'Cana yakın', 'Mükemmeliyetçi'),
('20', '1', 20, 'Cömert', 'Atılgan', 'Terbiyeli', 'Dengeli'),
('21', '1', 21, 'Yüzsüz', 'Zorba', 'Çekingen', 'İfadesiz'),
('22', '1', 22, 'Disiplinsiz', 'Sevimsiz', 'Affetmez', 'Donuk'),
('23', '1', 23, 'Tekrarlayan', 'Dayanıklı', 'Kinci', 'Ketum'),
('24', '1', 24, 'Unutkan', 'Açık sözlü', 'Titiz', 'Korkak'),
('25', '1', 25, 'Laf kesici', 'Sabırsız', 'Güvensiz', 'Kararsız'),
('26', '1', 26, 'Ne yapacağı belirsiz', 'Şefkatsiz', 'Sevilmeyen', 'İşe karışmayan'),
('27', '1', 27, 'Gelişigüzel', 'Dik kafalı', 'Tereddütlü', 'Aşırı titiz'),
('28', '1', 28, 'Anlayışlı', 'Kibirli', 'Sade', 'Karamsar'),
('29', '1', 29, 'Kolay Sinirlenir', 'Tartışmacı', 'Amaçsız', 'Soğuk'),
('30', '1', 30, 'Saf', 'Sinirli', 'Kayıtsız', 'Olumsuz tavırlı'),
('31', '1', 31, 'Tanınmak isteyen', 'İşkolik', 'İçine kapanık', 'Kaygılanan'),
('32', '1', 32, 'Konuşkan', 'Kaba', 'Çok hassas', 'Ürkek'),
('33', '1', 33, 'Organize olmamış', 'Otoriter', 'Kederli', 'Kuşkulu'),
('34', '1', 34, 'Tutarsız', 'Hoşgörüsüz', 'İçe dönük', 'Sıradan'),
('35', '1', 35, 'Dağınık', 'İnsanı kullanan', 'Huysuz', 'Ağzında kelimeleri yuvarlayan'),
('36', '1', 36, 'Hava atan', 'İnatçı', 'Uyuşuk', 'Kuşkucu'),
('37', '1', 37, 'Gürültücü', 'Denetleyici', 'Tembel', 'Yalnız'),
('38', '1', 38, 'Dikkatsiz', 'Çabuk öfkelenen', 'Miskin', 'Şüpheci'),
('39', '1', 39, 'Huzursuz', 'Patavatsız', 'İntikamcı', 'İsteksiz'),
('40', '1', 40, 'Değişken', 'Kurnaz', 'Uzlaşmacı', 'Tenkitçi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiliktesti_sorulari`
--

CREATE TABLE `kisiliktesti_sorulari` (
  `soru_id` varchar(11) DEFAULT NULL,
  `sturu_id` varchar(11) DEFAULT NULL,
  `sorular` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisiliktesti_sorulari`
--

INSERT INTO `kisiliktesti_sorulari` (`soru_id`, `sturu_id`, `sorular`) VALUES
('1', '1', 'Aşağıda yer alan ifadelerden, kendinize en uygun olan 1 (bir) ifadeyi seçmelisiniz!');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kayit_id`);

--
-- Tablo için indeksler `cevaplar`
--
ALTER TABLE `cevaplar`
  ADD PRIMARY KEY (`kayit_id`);

--
-- Tablo için indeksler `kisiliktesti_sorulari`
--
ALTER TABLE `kisiliktesti_sorulari`
  ADD UNIQUE KEY `soru_id` (`soru_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `kayit_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `cevaplar`
--
ALTER TABLE `cevaplar`
  MODIFY `kayit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
