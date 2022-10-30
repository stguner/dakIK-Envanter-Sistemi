<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Anasayfa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
		crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: #F5F5F5;">
	<div class="page-content">
		<!-- Main content -->
		<div class="header" style="background-color: #ffffff;">
			<header class="border-bottom">
				<div class="nav col-4 col-md-auto pt-3 pb-3 w-100"
					style="padding-left: 16px;display:flex; justify-content:space-between;">
					<div>
						<a href="index.php" style="text-decoration: none;">dakik</a> ©
						<span> / Kişilik ve Davranış Testi</span>
					</div>
					<div style="padding-right: 16px; text-align:right;">
						<a href="adminPanel.php" style="text-decoration: none;">Yönetici Girişi</a>
					</div>
				</div>
			</header>
		</div>
		<div class="content-wrapper md-3 py-5">
			<!-- Content area -->
			<div class="row g-0 mb-4">
				<div class="col-md-3"></div>
				<div class="col-md-6 " style="background-color: #ffffff;">


					<div class="card" style="padding: 2%;">
						<!-- Birinci Sayfa BAŞLANGIÇ-->
						<div class="card-body py-0"></div>
						<div class="p-5" style="display: block;" id="div1">
							<center>
								<h2><u>Kişilik ve Davranış Envanter Testi</u></h2>
								<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_efbizstn.json"  background="transparent"  speed="1.5"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
							</center>
							<div class="col-md-12">
								<h3 style="text-align:center;">KVK ve Tahakkuk Onayı</h3>
							</div>
							<div class="col-md-12" style="text-align: justify;">
								İş Başvurusu sürecinde vereceğiniz sözlü ve İş Başvuru Formu'na yazacağınız tüm
								Kişisel Verilerinizin; işlenmesine, kullanılmasına, değerlendirilmesine,
								paylaşılmasına izin vermeniz ve tüm bilgilerinizin; eksiksiz, tam, doğru ve
								gerçeği eksiksiz yansıtacağını, herhangi bir tahrifat, yanıltıcı bilgi veya
								eksiklik olmayacağını, aksi takdirde İşveren/İşveren Aday’ını yanıltmaktan
								hakkınızda yasal işlem başlatılabileceğini kabul ettiğinizi tahakkuk etmeniz
								gerekmektedir.
								<br><br>
								Bu koşullar doğrultusunda, İş Başvurusunda bulunmak istiyorsanız
								<b> "Onaylıyorum ve Devam Etmek İstiyorum"</b>
								kısmını seçiniz.
								<br><br>
							</div>
							<div class="col-md-12" id="girisdiv">
								<div class="form__group">
									<div class="form__radio-group">
										<input type="radio" name="size" id="small" class="form__radio-input">
										<label class="form__label-radio pb-2" onclick="onaydivac(1)" for="small">
											<span class="form__radio-button"></span><b> Onaylıyorum ve Devam Etmek
												İstiyorum </b>
										</label>
									</div>


									<div class="form-check form-switch" style="display: none; margin-left: 32px; padding-bottom: 1rem;"
										id="calisanadaymetnidiv">
										<input class="form-check-input" id="caam" onclick="caamOnay()" type="checkbox" role="switch">
										<u style="cursor:pointer;"><b onclick="onaydivac(2)"
												style="color:blue; text-decoration:none;">Çalışan Adayı Aydınlatma
												Metni</b></u>'ni kabul ediyorum.

										<br>
									</div>
									<div id="modal_default" class="modal fade" tabindex="-1"
										style="display: none; padding-right: 17px;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"><b>Çalışan Adayı Aydınlatma Metni</b>
													</h5>
													<i class="fa-solid fa-circle-xmark" style="scale:2; cursor:pointer;"
														onclick="destroyCaam()"></i>
												</div>

												<div class="modal-body" style="height: 400px;overflow-y: scroll;">
													<p style="text-align: justify;">
														<b>dakik Davranış ve Kişilik Envanter Tespit Sistemi</b>
														olarak, veri sorumlusu sıfatıyla, kişisel verilerinizin
														güvenliği hususuna verdiğimiz önem doğrultusunda bünyemizde
														barındırdığımız her türlü kişisel veri 6698 sayılı Kişisel
														Verilerin Korunması Kanunu (“KVKK”)’na uygun olarak
														işlenmekte, saklanmakta ve aktarılmaktadır. Bu bilinçle,
														Şirket olarak, çalışan adayları ve stajyer adaylarının
														kişisel verilerinin 6698 sayılı Kişisel Verilerin Korunması
														Kanununa uygun olarak işlenmesine ve korunmasına büyük önem
														veriyoruz. Bu sorumluluğumuzun bilinciyle Kişisel Verilerin
														Korunması Kanununda tanımlı şekli ile “Veri Sorumlusu”
														sıfatıyla, kişisel verilerinizi aşağıda açıklandığı surette
														ve mevzuatta yer alan sınırlar çerçevesinde
														işlemekteyiz.<br>
														İşbu aydınlatma metni veri sorumlusu sıfatıyla Şirket
														tarafından toplanan, saklanan ve işlenen kişisel
														verilerinize ilişkin olarak KVKK’nun “Veri Sorumlusunun
														Aydınlatma Yükümlülüğü” başlıklı 10. Maddesi ile Aydınlatma
														Yükümlülüğünün Yerine Getirilmesinde Uyulacak Usul ve
														Esaslar Hakkında Tebliğ uyarınca çalışan adayları ve stajyer
														adaylarının bilgilendirilmesi amacıyla hazırlanmıştır.<br>
														İşbu aydınlatma metninde kullanılan kişisel veri işleme,
														özel nitelikli kişisel veri, ilgili kişi ve veri sorumlusu
														kavramları KVKK’unda yapılan tanımlara istinaden
														kullanılmıştır.<br>
														KVKK’unda geçen “Kişisel Veri” kavramı kimliği belirli veya
														belirlenebilir gerçek kişiye ilişkin her türlü bilgiyi;
														“Kişisel Verilerin İşlenmesi” kavramı ise, kişisel verilerin
														tamamen veya kısmen otomatik olan ya da herhangi bir veri
														kayıt sisteminin parçası olmak kaydıyla otomatik olmayan
														yollarla elde edilmesi, kaydedilmesi, depolanması, muhafaza
														edilmesi, değiştirilmesi, yeniden düzenlenmesi, açıklanması,
														aktarılması, devralınması, elde edilebilir hâle getirilmesi,
														sınıflandırılması ya da kullanılmasının engellenmesi gibi
														veriler üzerinde gerçekleştirilen her türlü işlemi ifade
														eder.<br>
														<b>Özel Nitelikli Kişisel Veri:</b> Irk, etnik köken, siyasi
														düşünce, felsefi inanç, din, mezhep veya diğer inançlar,
														kılık kıyafet, dernek vakıf ya da sendika üyeliği, sağlık,
														cinsel hayat, ceza mahkumiyeti ve güvenlik tedbirleriyle
														ilgili veriler ile biyometrik ve genetik veriler özel
														nitelikli verilerdir.<br>
														Sizden özellikle istemediğimiz sürece, paylaştığınız
														özgeçmişlerinizin içerisinde, profil sayfanızda veya bizimle
														yaptığınız destek görüşmelerinde özel nitelikli kişisel
														verilerinizi paylaşmamanızı öneririz.<br>
														<b>İlgili Kişi:</b>Kişisel verisi işlenen gerçek kişi
														çalışan adayı, stajyer adayı ve şirketle yapılmış sözleşme
														kapsamındaki diğer üçüncü şahıs gerçek kişilerdir.
														Şirketimizde de verileri işlenen çalışanlarımız Kanun
														kapsamında ilgili kişi olarak tanımlanmıştır.<br>
														<b>Veri Sorumlusu:</b> Kişisel verilerin işlenme amaçlarını
														ve vasıtalarını belirleyen, verilerin sistematik bir şekilde
														işlendiği ve saklandığı veri kayıt sistemini kuran ve
														yöneten kişi veri sorumlusudur. Çalışanlarımızla ve çalışan
														adaylarımızla ilgili kişisel verilerin işleme amaçlarını ve
														vasıtalarını belirleyen, veri kayıt sisteminin kurulmasından
														ve yönetilmesinden sorumlu olan şirketimiz veri
														sorumlusudur.<br><br>
														<b>KİŞİSEL VERİLERİNİZİN İŞLENME AMAÇLARI</b><br>
														Kişisel verileriniz KVKK’nun Genel İlkeleri içeren 4.
														Maddesi kapsamında, Hukuka ve dürüstlük kurallarına uygun
														olma, doğru ve gerektiğinde güncel olma, Belirli, açık ve
														meşru amaçlar için işlenme, İşlendikleri amaçla bağlantılı,
														sınırlı ve ölçülü olma, İlgili mevzuatta öngörülen veya
														işlendikleri amaç için gerekli olan süre kadar muhafaza
														edilme ilkelerine bağlı olarak, veri kategorileriyle
														eşleştirilen amaçlar ve hukuki sebepler doğrultusunda
														işlenmektedir:<br>
														Veri kategorileriyle eşleştirilen amaçlar ve hukuki
														sebepler:<br>
														<b>Kimlik Verisi:</b> Ad, soyadı, Doğum tarihi, TC kimlik
														kartı bilgileri (T.C. kimlik numarası,). CV üzerinde yer
														alan kimlik bilgileri, İş Başvuru Formu bilgileri<br>
														Çalışan Adayı/Stajyer Seçme ve Yerleştirme Süreçlerinin
														Yürütülmesi ve Çalışan Adaylarının Başvuru Süreçlerinin
														Yürütülmesi, İnsan Kaynakları Süreçlerinin Planlanması,
														İnsan kaynakları tarafından incelenen CV’lerin ilgili üst
														yöneticiye değerlendirilmek üzere sunulması amaçlarıyla ve
														KVKK Md.5/2-c Bir sözleşmenin kurulması veya ifasıyla
														doğrudan doğruya ilgili olması kaydıyla, sözleşmenin
														taraflarına ait kişisel verilerin işlenmesinin gerekli
														olması hukuki sebebine istinaden,<br>
														<b>İletişim Verisi:</b>Telefon numarası, ikamet adresi,
														e-posta adresi, kurumsal e-posta adresi, irtibat kurulacak
														yakınının adı, soyadı ve telefonu,<br>
														Çalışan Adayı/Stajyer Seçme ve Yerleştirme Süreçlerinin
														Yürütülmesi ve Çalışan Adaylarının Başvuru Süreçlerinin
														yürütülmesi, İnsan Kaynakları Süreçlerinin Planlanması,
														İnsan kaynakları tarafından incelenen özgeçmişlerin ilgili
														üst yöneticiye değerlendirilmek üzere sunulması amaçlarıyla
														ve KVKK Md.5/2-c Bir sözleşmenin kurulması veya ifasıyla
														doğrudan doğruya ilgili olması kaydıyla, sözleşmenin
														taraflarına ait kişisel verilerin işlenmesinin gerekli
														olması hukuki sebebine istinaden,<br>
														<b>Çalışma ve Mesleki Deneyim Verisi:</b>Güncel özgeçmiş
														(cv), lisans, sertifika ve diploma bilgileri, mezun olduğu
														okullar, yabancı dil bilgisi, seviyesi ve sertifikaları,
														bilgisayar programları bilgi düzeyi-sertifikası, katıldığı
														kurslar ve seminerler, önceki çalıştığı firmaların isimleri,
														önceki çalıştığı firmalarda işe başlama ve işten ayrılma
														tarihleri, geçmiş unvanları-görevi, çalışmak istediği görev,
														çalışmak istediği bölge-ülke, referanslarının
														bilgisi(Referans kişileri ad soyad, cep telefonu, şirket
														telefonu, şirket adı, görevi, e-mail adresi).
														(Referanslarınıza ait kişisel verilerin paylaşıldığının
														referansınıza tarafınızca bildirilmesi gereklidir)<br>
														Çalışan Adayı/Stajyer Seçme ve Yerleştirme Süreçlerinin
														Yürütülmesi ve Çalışan Adaylarının Başvuru Süreçlerinin
														yürütülmesi, İnsan Kaynakları Süreçlerinin Planlanması,
														İnsan kaynakları tarafından incelenen özgeçmişlerin (CV)
														ilgili üst yöneticiye değerlendirilmek üzere sunulması
														amaçlarıyla ve KVKK Md.5/2-c Bir sözleşmenin kurulması veya
														ifasıyla doğrudan doğruya ilgili olması kaydıyla,
														sözleşmenin taraflarına ait kişisel verilerin işlenmesinin
														gerekli olması hukuki sebebine istinaden,<br>
														<b>Finansal Veriler:</b>Önceki maaş bilgileri, Çalışan
														Adayı/Stajyer Seçme ve Yerleştirme Süreçlerinin Yürütülmesi
														ve Çalışan Adaylarının Başvuru Süreçlerinin, Yürütülmesi,
														İnsan Kaynakları Süreçlerinin Planlanması, İlgili kişinin
														temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
														sorumlusunun meşru menfaatleri için veri işlenmesinin
														zorunlu olması. Hukuki sebebiyle KVKK Md.5/2-f'ye
														istinaden<br>
														Görsel ve İşitsel Veri: Fotoğraf, kamera kayıtları /
														Fiziksel Mekân Güvenliğinin Temini amacı ve İlgili kişinin
														temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri
														sorumlusunun meşru menfaatleri için veri işlenmesinin
														zorunlu olması. Hukuki sebebiyle KVKK Md.5/2-f'ye
														istinaden<br>
														<b>Özel Nitelikli Veriler:</b>İş sağlığı ve güvenliği
														faaliyetlerinin yürütülmesi, Çalışan adayları için iş akdi
														ve mevzuattan kaynaklanan yükümlülüklerin yerine
														getirilmesi, özel gereksinimli birey kadrolarında istihdam
														sağlamak amaçlarıyla, Sağlık Raporu, Ameliyat, bedensel
														engel ve kalıcı hastalık bilgisi Açık Rıza alınmak
														suretiyle, sabıka kaydı bilginiz Açık Rıza alınmak
														suretiyle,<br><br>
														<b>KİŞİSEL VERİLERİNİZİN 3. KİŞİLERE AKTARILMASI</b><br>
														KVK Kanununun 8. maddesinde (1) Kişisel veriler, ilgili
														kişinin açık rızası olmaksızın aktarılamaz. (2) Kişisel
														veriler; a) 5. maddenin ikinci fıkrasında, b) Yeterli
														önlemler alınmak kaydıyla, 6. maddesinin üçüncü fıkrasında,
														belirtilen şartlardan birinin bulunması hâlinde, “ilgili
														kişinin açık rızası aranmaksızın aktarılabilir” hükmü
														kapsamında ve kanunlarda öngörülmesi halinde veya açık rıza
														alınarak hükmü yer almaktadır, <br>
														Yukarıda verilerin işlenme amaçları başlığı altında
														kategorileri yer alan bilgileriniz;
														İş Faaliyetlerinin Yürütülmesi, Denetim ve etik
														faaliyetlerin yürütülmesi amacıyla Şirketimiz
														yöneticilerine, Hukuk işlerinin takibi ve yürütülmesi
														amacıyla Şirket Avukatlarına,
														Fiziksel güvenliğin sağlanması ve İşyeri güvenliği amacıyla
														giriş-çıkışların denetlenmesi için işyeri bina/ofis
														yönetimine, güvenlik şirketine, <br>
														Kanunlarda öngörülmesi şartı kapsamında Kanunen bilgi
														vermekle mükellef olduğumuz Kamu Kurumlarına, Hukuki
														Yükümlülüğün Yerine Getirilmesi amacıyla Mahkeme kararı veya
														delil talebi gibi hukuki talepleri yerine getirme
														yükümlülüğümüz çerçevesinde mahkemeler ve ilgili
														kurumlara,<br>
														Mevzuat gereği iş yeri hekimine ve ayrıca şirketimiz
														tarafından uygun görülmesi halinde; İş faaliyetlerinin
														yürütülmesi amacıyla grup şirketlerine, iş ortaklarına,
														danışmanlara aktarılabilmektedir.<br>
														Yurtdışına aktarılacak olan kişisel verilerde çalışan
														adayları ve çalışanlarımızın açık rızaları alınır.<br><br>
														<b>KİŞİSEL VERİLERİNİZİN TOPLANMA YÖNTEMİ VE HUKUKİ
															SEBEBİ</b><br>
														Kişisel verileriniz, iş akdinin kurulması ile işe uygunluk
														ve yetkinlik değerlendirmesi süreçlerine ilişkin meşru
														menfaat gibi hukuki sebeplere dayanılarak; İK İstihdam veya
														Danışmanlık Şirketleri ile LinkedIn, Kariyer.net ve diğer
														şirketlere ait kariyer sayfaları, iletilen başvuru formları,
														gönderilen e-postalar ve belgeler, mesleki yetkinlik
														belgeleri, adaylar tarafından yapılan sözel açıklamalar,
														yazılı ve imzalı başvurular, Adayların Şirkete e-posta,
														kargo ve benzeri yöntemlerle ulaştırdıkları özgeçmişler,
														Şirkete ait İş Başvuru Formuyla beyan edilen bilgiler,
														Şirket çalışanlarının ilettikleri aday çalışana ait özgeçmiş
														bilgileri, Mülakat süreçleri kapsamında video konferans,
														telefon gibi araçlarla veya yüz yüze mülakat yapılan
														hallerde elde edilen veya referans kontrolleri vasıtasıyla
														elde edilen bilgilerle, ayrıca uzman kişiler tarafından
														yapılan ve sonuçları incelenen yetenek ve kişilik
														özelliklerini tespit eden işe alım testleri vasıtasıyla,
														elektronik ve fiziki ortamlarda elde edilmektedir. Şirket
														toplanan kişisel verileri, bilişim sistemleri ve insan
														kaynakları personeli vasıtasıyla otomatik olan veya otomatik
														olmayan yollarla işler.<br>
														Bilgi toplama amaçları kapsamında Şirket adaylar hakkında
														referans araştırması yapabilir. Yapılacak referans
														araştırması genel olarak adayın verdiği bilgilerin
														doğruluğunu teyit etmeye yönelik olacaktır. Yapılacak
														referans araştırması kapsamında üçüncü kişilerle adaylara
														ait kimlik bilgileri, iş ve eğitim tecrübeleri gibi gerekli
														kişisel veriler paylaşılabilir, referanslarınıza ait kişisel
														verilerin paylaşıldığının referansınıza tarafınızca
														bildirilmesi gereklidir, beyan edilen referanslar ile
														adaylar hakkında üçüncü kişilerden kişisel veri elde
														edilebilir. Adayların çalışmakta olduğu iş yerinden adayın
														bilgisi haricinde referans görüşü alınmamaktadır.<br>
														Şirket iş süreçlerine bağlı olarak işlediği kişisel veriler,
														Bir sözleşmenin kurulması veya ifasıyla doğrudan doğruya
														ilgili olması kaydıyla, sözleşmenin taraflarına ait kişisel
														verilerin işlenmesinin gerekli olması. KVK Kanunu Mad. 5/2-c
														hukuki sebebine istinaden ve İlgili kişinin temel hak ve
														özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun
														meşru menfaatleri için veri işlenmesinin zorunlu olması
														Madde.5/2- hukuki sebeplerine dayanarak ve gerektiğinde açık
														rıza almak suretiyle toplanmakta ve işlenmektedir.<br>
														Toplanan ve işlenen verilere yukarıda Kişisel Verilerinizin
														İşlenme Amaçları başlığında kategorileri bazında ayrı ayrı
														amaçları ve hukuki sebepleriyle bağlantılı olarak yer
														verilmiştir.<br>
														Şirketimiz tarafından yukarıda yer verilen toplanma
														yöntemleriyle, İşe alım süreçleri boyunca aday hakkında
														toplanan ve işlenen tüm kişisel veriler, adayın ilgili açık
														pozisyonda istihdam edilmesine karar verilmesi halinde özlük
														dosyasına aktarılır. Başvuru değerlendirme sürecinin ve buna
														bağlı amacın sona ermesini takiben sözleşmeye /
														görevlendirmeye dönüşmediği takdirde iş başvurusu olumsuz
														sonuçlanan çalışan adaylarının kişisel verilerini ilk
														periyodik silme dönemi içinde elektronik ortamda siler ve
														fiziksel ortamda ise imha eder.<br>
														<br><b>HAKLARINIZ</b><br>
														Şirket KVK Kanunu’nun 10. maddesine uygun olarak kişisel
														veri sahibinin haklarını kendisine bildirmekte, bu hakların
														nasıl kullanılacağı konusunda kişisel veri sahibine yol
														göstermektedir. KVKK’nun 11. Maddesi uyarınca Birliğe
														başvurarak;<br>
														Kişisel verilerinin işlenip işlenmediğini öğrenme, Kişisel
														verileri işlenmişse bunun hakkında bilgi talep etme, Kişisel
														verilerinin işlenme amacını ve amacına uygun kullanılıp
														kullanılmadığını öğrenme, Kişisel verilerini yurt içinde
														veya yurt dışında aktarıldığı 3. kişileri bilme, Kişisel
														verileri eksik veya yanlış işlenmişse, bunların
														düzeltilmesini isteme, KVKK’nın 7. maddesinde öngörülen
														şartlar çerçevesinde şirketimizin hukuki yükümlülükleri
														saklı kalmak kaydı ile silinmesini veya yok edilmesini
														isteme, Kişisel verilerinin aktarıldığı 3. kişilere yukarıda
														sayılan (d) ve (e) bentleri uyarınca yapılan işlemlerin
														bildirilmesini isteme, Kişisel verilerinin münhasıran
														otomatik sistemler ile analiz edilmesi nedeniyle aleyhinize
														bir sonucun ortaya çıkmasına itiraz etme,<br>
														Kişisel verilerinin kanuna aykırı olarak işlenmesi sebebiyle
														zarara uğramanız hâlinde zararın giderilmesini talep etme
														hakkınız vardır.<br><br>
														Kanun 11.madde kapsamındaki başvurularınızı,<br>

														<b>a)</b> Taleplerinizi kanuna uygun şekilde ortaya koyan
														detaylı hazırlanmış bir metin ile veya şirketimiz web
														adresinde yer alan “Kişisel Verilerin Korunması Kanunu
														Uyarınca Başvuru Formu” nu çıktı alıp doldurarak ıslak
														imzalı yazılı başvurunuzu, bizzat Kızıltoprak Mh. Aspendos
														Bulvarı No:37/101 Muratpaşa/Antalya/Türkiye PK: 07300 Merkez
														adresimize ve Muhatap olduğunuz işletme adresimize getirerek
														elden teslim edebilir,<br>
														<b>b)</b> Noter kanalıyla,<br>
														<b>c)</b> Güvenli elektronik imza veya mobil imza ile
														info@dakik.com.tr eposta adresimize,<br>
														<b>d)</b> Şirketimizin sisteminde kayıtlı bulunan e-posta
														adresinizden, info@dakik.com.tr e-posta adresimize<br>
														iletebilirsiniz. Başvurunuzda yer alan talepleriniz, talebin
														niteliğine göre en geç otuz (30) gün içinde ücretsiz olarak
														sonuçlandırılacaktır.
													</p>
												</div>

												<div class="modal-footer">
													<button type="button" class="btn bg-primary py-0"
														onclick="destroyCaam()">Onayla</button>
												</div>


											</div>
										</div>
									</div>
									<div class="form-check form-switch" style="display: none; margin-left: 32px; padding-bottom: 1rem;"
										id="acikrizametnidiv">
										<input class="form-check-input" id="arm" onclick="armOnay()" type="checkbox" role="switch" required>
										<u style="cursor:pointer;"><b onclick="onaydivac(3)"
												style="color:blue; text-decoration:none; ">Açık Rıza Metni</b></u>'ni
										kabul ediyorum.

										<br>
									</div>
									<div id="modal_default2" class="modal fade" tabindex="-1"
										style="display: none; padding-right: 17px;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<center><b>Açık Rıza Beyanı</b></center>
													</h5>
													<i class="fa-solid fa-circle-xmark" style="scale:2; cursor:pointer;"
														onclick="destroyArm()"></i>
												</div>

												<div class="modal-body" style="height: 400px;overflow-y: scroll;">
													<p style="text-align:justify;">
														Dakik Davranış ve Kişilik Envanter Tespit Sistemi (Şirket)
														olarak tarafınıza bilgilendirme amacıyla aydınlatma metni
														iletilmiştir. Ceza mahkûmiyeti bilgi ve belgelerinizin iş
														başvurusunun değerlendirilmesi kapsamında işlenmesi için
														KVKK Madde 6 kapsamında açık rızanızın alınması
														gerekmektedir. Bu verileriniz özgeçmişinizi işleme
														alabilmemiz, değerlendirebilmemiz ve iletişime geçebilmemiz
														için işlenecektir.<br><br>
														Yukarıda açıklanan verilerinizin işlenmesi ve aktarılması
														tamamen özgür iradenizle açık rıza vermenize bağlı olup,
														rıza göstermemeniz halinde verileriniz derhal silinecektir.
														Değerlendirme sonunda işe kabul edilmemeniz halinde yeniden
														değerlendirme amacıyla kişisel verileriniz değerlendirme
														tarihinden itibaren 12 ay sonunda kayıtlarımızdan
														silinecektir.<br><br>
														“Aydınlatma metni ile bilgilendirildim ve işbu açık rıza
														metnini okudum, bu metin uyarınca yukarıda belirtilen özel
														nitelikli verilerimin yukarıdaki belirtilen amaçlarla
														işlenmesine ve belirtilen kurumlara aktarılmasını kabul
														ediyorum.”
													</p>
												</div>

												<div class="modal-footer">
													<button type="button" class="btn bg-primary py-0"
														onclick="destroyArm()">Onayla</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form__radio-group mb-3">
										<input type="radio" onclick="onaydivac(4)" name="size" id="red"
											class="form__radio-input-red">
										<label class="form__label-radio-red" for="red">
											<span class="form__radio-button-red"></span>
											<b>Kabul Etmiyorum ve Çıkmak İstiyorum</b>
										</label>
									</div>
								</div>

								<div id="testebasladiv" onclick="ikinciSayfaAc()"
									style="display: none; margin-top: 1%; margin-bottom: 1%; text-align: center; padding-bottom: 10px;">
									<button type="submit" id="testebasla" class="btn text-white bg-primary py-0">Devam
										Et</button>
								</div>

								<div id="testencikdiv"
									style="display: none; margin-top: 1%; margin-bottom: 1%; text-align: center; padding-bottom: 10px;">
									<button type="button" class="btn bg-danger py-0"> <a href="https://www.google.com/"
											id="cikisYap" style="text-decoration:none;">Çıkış Yap</a></button>
								</div>

								<div class="card-body border border-2 py-0 shadow">
									<p class="card-text">
										<center class="px-2" style="text-align:justify;">
											6698.No'lu Kişisel Verileri Koruma Kanunu 4. madde ilkelerine uygun
											bir şekilde dakİK Envanter sisteminde korunmaya alınmaktadır. Kanun
											içeriğine ulaşmak için <a target="_blank"
												href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&amp;MevzuatTur=1&amp;MevzuatTertip=5#:~:text=MADDE%201%2D%20(1)%20Bu,uyacaklar%C4%B1%20usul%20ve%20esaslar%C4%B1%20d%C3%BCzenlemektir.">tıklayınız.
											</a>
										</center>
									</p>
								</div>
							</div>
							<div id="modal_default2" class="modal fade" tabindex="-1" style="display: none;"
								aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">
												<center><b>Açık Rıza Beyanı</b></center>
											</h5>
											<i class="fa-solid fa-circle-xmark" style="scale:2; cursor:pointer;"
												onclick="destroyArm()"></i>
										</div>

										<div class="modal-body" style="height: 600px;overflow-y: scroll;">
											<p style="text-align:justify;">
												Dakik Davranış ve Kişilik Envanter Tespit Sistemi (Şirket) olarak
												tarafınıza
												bilgilendirme amacıyla aydınlatma metni iletilmiştir. Ceza mahkûmiyeti
												bilgi
												ve belgelerinizin iş başvurusunun değerlendirilmesi kapsamında işlenmesi
												için KVKK Madde 6 kapsamında açık rızanızın alınması gerekmektedir. Bu
												verileriniz özgeçmişinizi işleme alabilmemiz, değerlendirebilmemiz ve
												iletişime geçebilmemiz için işlenecektir.<br><br>
												Yukarıda açıklanan verilerinizin işlenmesi ve aktarılması tamamen özgür
												iradenizle açık rıza vermenize bağlı olup, rıza göstermemeniz halinde
												verileriniz derhal silinecektir. Değerlendirme sonunda işe kabul
												edilmemeniz
												halinde yeniden değerlendirme amacıyla kişisel verileriniz değerlendirme
												tarihinden itibaren 12 ay sonunda kayıtlarımızdan silinecektir.<br><br>
												“Aydınlatma metni ile bilgilendirildim ve işbu açık rıza metnini okudum,
												bu
												metin uyarınca yukarıda belirtilen özel nitelikli verilerimin yukarıdaki
												belirtilen amaçlarla işlenmesine ve belirtilen kurumlara aktarılmasını
												kabul
												ediyorum.”



											</p>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn bg-primary py-0"
												data-dismiss="modal">Onayla</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Birinci Sayfa SONU-->
						<!-- İkinci Sayfa BAŞLANGIÇ-->
						<div class="row m-0" style="display: none; " id="div2">

							<div class="col-md-12">
								<h6 class="mb-2 font-weight-semibold">
									KİŞİSEL BİLGİLERİNİZ
								</h6>
							</div>
							<!-- <div class="col-md-12 pt-2" style="text-align: inherit;">
								<span class="d-block">
									<p class="m-0">Bu formu doldurduktan sonra gelen 114 durum için 
										kendinize en uygun olan cevabı seçiniz.
									</p>
								</span>
							</div> -->
							<!-- Zamanı bu input sayesinde alıyorum-->
							<input id="field" style="display:none;" type="text" name="field" value="<?php echo date('m.d.y H:i:s'); ?>" size="11" />
							<hr>
							<div class="row m-0">

								<div class="col-md-4 pb-3">
									<label class="col-form-label col-lg-2 font-weight-semibold w-100">TCKN</label>
									<div class="col-lg-10">
										<div class="position-relative">
											<input type="number" maxlength="11" name="tckn" id="tckn" class="form-control"
												required>
										</div>
									</div>
								</div>
								<div class="col-md-4 pb-3">
									<div>
										<label class="col-form-label col-lg-2 font-weight-semibold w-100">Doğum
											Tarihi</label>
										<div class="col-lg-10">
											<div class="position-relative">
												<input type="date" name="dogumTarihi" class="form-control"
													id="dogumTarihi" required>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 pb-3">
									<label
										class="col-form-label col-lg-2 font-weight-semibold w-100">Cinsiyetiniz</label>
										<!-- <div class="col-lg-10">
										<div class="position-relative">
											<select id="cinsiyet" name="cinsiyet" class="form-control" required>
												<option value="">Seçiniz</option>
												<option value="Kadın">Kadın</option>
												<option value="Erkek">Erkek</option>
											</select>
										</div>
										</div> -->
										<div class="form-group">
                                    <input type="radio" class="btn-check"
                                           style="font-size: smaller" name="gender" value="Erkek" id="inputGender" autocomplete="off" checked>
                                    <label class="btn btn-sm btn-outline-primary" style="padding: .25rem" for="inputGender">Erkek</label>

                                    <input type="radio" class="btn-check"
                                           style="font-size: smaller" name="gender" value="Kadın" id="inputGender2" autocomplete="off">
                                    <label class="btn btn-sm btn-outline-danger" style="padding: .25rem" for="inputGender2">Kadın</label>

                                </div>
								</div>
							</div>


							<div class="row m-0">
								<div class="col-md-6 pb-3">
									<div>
										<label class="col-form-label col-lg-2 font-weight-semibold w-100">Ad</label>
										<div class="col-lg-10">
											<div class="position-relative">
												<input type="text" name="kullaniciAdi" id="kullaniciAdi"
												onkeyup="ilkHarfBuyuk()" class="form-control" required>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 pb-3">
									<div>
										<label
											class="col-form-label col-lg-2 font-weight-semibold w-100">Soyad</label>
										<div class="col-lg-10">
											<div class="position-relative">
												<input type="text" name="kullaniciSoyadi" id="kullaniciSoyadi"
												onkeyup="soyadBuyuk()" class="form-control" required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row m-0">
								<div class="col-md-6 pb-3">
								<div>
									<label class="col-form-label col-lg-2 font-weight-semibold w-100">Mail
										Adresi</label>
										<div class="col-lg-10">
											<div class="position-relative">
												<input type="text" name="email" id="email" class="form-control" maxlength="60"
													required>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 pb-3">
									<div>
										<label class="col-form-label col-lg-2 font-weight-semibold w-100">Telefon
											Numarası</label>
										<div class="col-lg-10">
											<div class="position-relative">
												<input type="text" name="telNo" maxlength="10" id="telNo"
													class="form-control" placeholder="Ör: 505 *** ** **" required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="col-md-12 pb-3" style="text-align:center; justify-content:center;">
								<div>
									<div>
										<label class="col-form-label col-lg-2 font-weight-semibold w-100">Mail
											Adresi</label>
											<div class="position-relative" style="margin-left:30%;margin-right:30%;">
												<input type="text" name="email" id="email" class="form-control" maxlength="60"
													required>
											</div>
									</div>
								</div>
							</div> -->

							<div style="display:none;" id="soruGetirRandom"></div>
							<div style="display:none;" id="sayac">1</div>
							<div style="display:none;" id="sayac2"></div>
							<div class="col-md-12 pb-3" style="text-align: center">
								<button type="submit" name="testebasla" id="testebasla" onclick="formKontrol()"
									class="btn text-white bg-primary py-0">Devam Et</button>
							</div>
							<div class="col-md-12 pb-3">
								<div id="mernis_hata" class="alert alert-danger" role="alert" style="display:none;">
									Bilgilerinizi kontrol edip tekrar deneyiniz.
								</div>
							</div>

						</div>
						<div id="hatamodal" class="modal fade" tabindex="-1" style="padding-right: 17px; display: none; z-index:11;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">
											<center><b style="color:red;"><i
														class="fa-solid fa-exclamation p-2"></i>Teste başlanamadı.</b>
											</center>
										</h5>
										<i class="fa-solid fa-circle-xmark" style="scale:2; cursor:pointer;"
											onclick="destroyHataModal()"></i>
									</div>

									<div class="modal-body">
										<p style="text-align:justify;">
											Lütfen form alanındaki verilerinizin kontrollerini sağlayınız.
										</p>
										<b><h6 id="demo"></h6></b>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn bg-primary"
											onclick="destroyHataModal()">Tamam</button>
									</div>
								</div>
							</div>
						</div>
						<div id="kullanilmisTCKN" class="modal fade" tabindex="-1" style="padding-right: 17px; display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">
											<center><b><i
														class="fa-solid fa-exclamation p-2"></i>Bu TCKN daha önce kullanılmış.</b>
											</center>
										</h5>
										<i class="fa-solid fa-circle-xmark exit" style="scale:2; cursor:pointer;"
											onclick="destroyKullanilmisTCKN()"></i>
									</div>

									<div class="modal-body">
										<p style="text-align:justify;">
											Verilerinizi silip yeni bir teste başlamak için <b>'SİL'</b> butonuna, teste kaldığınız yerden 
											devam etmek için <b>'DEVAM'</b> butonuna tıklayınız.
										</p>
									</div>

									<div class="modal-footer">
										<div class="row w-100" style="justify-content:space-between;">
										<button type="button" class="btn bg-danger w-25" onclick="tcknSil()">SİL</button>
										<button type="button" class="btn bg-primary w-25" onclick="destroyKullanilmisTCKN()">DEVAM</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- İkinci Sayfa SONU-->
						<!-- Üçüncü Sayfa BAŞLANGIÇ-->
						<div class="row pb-6" style="display: none;" id="div3">
							<div class="progress mb-2" style="padding-left: 0px; padding-right: 0px;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
									id="loadingbar" style="width: 0%;"></div>
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
									id="loadingbar1" style="width: 0%"></div>
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
									id="loadingbar2" style="width: 0%;"></div>	
							</div>
							
							<div class="col-md-12">
								<div class="toast-header bg-slate-600 border-bottom-slate-400 mb-2"
									style="justify-content:space-between;">
									<span class="font-weight-semibold mr-auto" style="font-size:14px;" id="testadi"> <b>KİŞİLİK TESTİ</b> </span>
									<span class="font-size-sm" id="sorudurumu">KT1 - 1/114</span>
								</div>
								<div class="alert alert-info alert-styled-left alert-dismissible py-0" id="sorular" style="margin-bottom: 7px;padding-left: 3px;">
									<span class="font-weight-semibold"><b>1.</b> </span><span id="sorular" style="font-size:15px;"><b>Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>
								</div>

								<div class="toast-body">
									<span class="text-muted d-block" style="text-align:justify;">
										<p style="color: black; font-size:10px; margin-bottom: 10px;" id="girisCumlesi">
											(Aşağıda yer alan ifadelerden, kendinize en uygun olan <b> 1 (bir) </b> ifadeyi seçmelisiniz!)</p>
									</span>
								</div>

								<div id="radiobuttonlar" class="pb-3">
									<label class="form-control2">
										<input id="soruradio1" onchange="cevapyaz(this)" type="radio"
											name="radio-styled-color" value="1-A-1">
										<span id="c1" style="">Hareketli</span>
									</label>
									<br>
									<label class="form-control2">
										<input id="soruradio2" onchange="cevapyaz(this)" type="radio"
											name="radio-styled-color" value="1-B-1">
										<span id="c2" style="">Maceraperest</span>
									</label>
									<br>
									<label class="form-control2">
										<input id="soruradio3" onchange="cevapyaz(this)" type="radio"
											name="radio-styled-color" value="1-C-1">
										<span id="c3" style="">Uyum Sağlayan</span>
									</label>
									<br>
									<label class="form-control2">
										<input id="soruradio4" onchange="cevapyaz(this)" type="radio"
											name="radio-styled-color" value="1-D-1">
										<span id="c4" style="">Analitik</span>
									</label>
									<br>
									<label class="form-control2" style="display:none;">
										<input id="soruradio5" onchange="cevapyaz(this)" type="radio"
											name="radio-styled-color" value="1-E-2">
										<span id="c5" style=""></span>
									</label>
								</div>

								<div class="row">
									<div class="col-md-6 w-50">
										<button style="font-size: small" type="button" id="soruyuAtla" class="btn btn-secondary py-0" onclick="sorugetir(1000)">Soruyu Atla</button>
									</div>
									<div id="devambuton" class="col-md-6 w-50" style="text-align:right;">
										<button disabled type="button" class="btn btn-primary py-0" 
										onclick="sorugetir(2)">Devam Et</button>
									</div>
								</div>
								<br>
								<!--Bunu artık kaldırabiliriz çünkü devam butonu bir seçenek seçilinceye kadar disabled kalacak, atla butonu yeterli -->
								<div id="cevapsizalert" style="display: none;"
									class="alert alert-warning alert-styled-right alert-dismissible">
									 Sanırım soruyu <a href="#" class="alert-link">cevapsız olarak</a> geçmeyi tercih ettin. Lütfen bunun için <b>'Soruyu Atla'</b> seçeneğini dene.
								</div>

							</div>
						</div>

						<!-- Üçüncü Sayfa SONU -->
						<!-- Dördüncü Sayfa BAŞLANGIÇ -->
						<div class="row text-center" style="display: none; " id="div4">
							<div class="col-md-12">
								<div class="d-flex" style="justify-content:center;">
								</div>
								<img src="../assets/okey.gif" alt="Testi bitirdiniz"  width="250" />
								<h3 style="color:green;">Testi bitirdiniz.</h3>
								<p>Sorularımızı cevaplandırdığınız için teşekkürler. İnsan Kaynakları departmanı test sonuçlarınızı
									değerlendirip iletişim adresinize dönüş sağlayacaktır.
								</p>
							</div>
						</div>
						<!-- Dördüncü Sayfa SONU -->
					</div>
				</div>

			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>
	<!-- Content area -->
	<script type="text/javascript">
	function getTimeStamp() {
       var now = new Date();
       return ((now.getDate()) + '/' + (now.getMonth() + 1) + '/' + now.getFullYear() + " " + ((now.getHours() < 10) ? ("0" + now.getHours()) : (now.getHours())) + ':'
                     + ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() < 10) ? ("0" + now
                     .getSeconds()) : (now.getSeconds())));
	}

	</script>
	<script src="../js/dakik.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://kit.fontawesome.com/35e8266fdf.js" crossorigin="anonymous"></script>
</body>
</html>