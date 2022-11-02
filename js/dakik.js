function onaydivac(deger) {
	if (deger == 1) {
		var arr = [];
		arr[0] = 1;
		while (arr.length < 39) {
			var r = Math.floor(Math.random() * 39) + 1;
			if (arr.indexOf(r) === -1) arr.push(r);
		}
		arr.push(40)
		while (arr.length < 74) {
			var r = Math.floor(Math.random() * 74) + 1;
			if (arr.indexOf(r) === -1) arr.push(r);
		}
		arr.push(75);
		while (arr.length < 113) {
			var r = Math.floor(Math.random() * 113) + 1;
			if (arr.indexOf(r) === -1) arr.push(r);
		}
		arr.push(114);
		var div = document.getElementById("soruGetirRandom");
		for (let i = 0; i < arr.length; i++) {
			div.innerHTML += arr[i] + ',';
		}

		document.getElementById("calisanadaymetnidiv").style.display = 'block';
		document.getElementById("testencikdiv").style.display = 'none';
	}
	if (deger == 2) {

		document.getElementById("modal_default").style.display = 'block';
		document.getElementById("modal_default").classList.add('show');
	}
	if (deger == 3) {
		document.getElementById("modal_default2").style.display = 'block';
		document.getElementById("modal_default2").classList.add('show');
	}
	if (deger == 4) {
		document.getElementById("acikrizametnidiv").style.display = 'none';
		document.getElementById("calisanadaymetnidiv").style.display = 'none';
		document.getElementById("testebasladiv").style.display = 'none';
		document.getElementById("testencikdiv").style.display = 'block';
		document.getElementById("caam").checked = false;
		document.getElementById("arm").checked = false;
	}
}

function ikinciSayfaAc() {
	document.getElementById("div1").style.display = 'none';
	document.getElementById("div2").style.display = 'block';
}

function ucuncuSayfaAc() {
	document.getElementById("div2").style.display = 'none';
	document.getElementById("div3").style.display = 'block';
}

function destroyCaam() {
	document.getElementById("modal_default").style.display = 'none';
	document.getElementById("modal_default").classList.remove('show');
}

function destroyArm() {
	document.getElementById("modal_default2").style.display = 'none';
	document.getElementById("modal_default2").classList.remove('show');
}


function caamOnay() { // Açık rıza metnini onaylama butonunu açar ve caam'ı butonunu checked yapar.
	document.getElementById("acikrizametnidiv").style.display = 'block';
	document.getElementById("testencikdiv").style.display = 'none';
	document.getElementById("caam").checked = true;
}

function armOnay() { // Giriş yapma butonunu görünür yapar ve Açık rıza metnini checked yapar.
	document.getElementById("testebasladiv").style.display = 'block';
	document.getElementById("testencikdiv").style.display = 'none';
	document.getElementById("arm").checked = true;
}

function destroyHataModal() { // Hata pop-up'ını kapatır.
	document.getElementById("hatamodal").style.display = 'none';
	document.getElementById("hatamodal").classList.remove('show');
	document.getElementById("transparentBG").classList.remove('popup-background');
}

function formKontrol() { //Form Verilerini Kontrol eder ve db gönderir.

	const tckn = document.getElementById("tckn");
	const kullaniciAdi = document.getElementById("kullaniciAdi");
	const kullaniciSoyadi = document.getElementById("kullaniciSoyadi");
	const email = document.getElementById("email");
	const telNo = document.getElementById("telNo");

	if (tckn.value < 1) {
		document.getElementById("hatamodal").style.display = 'block';
		document.getElementById("hatamodal").classList.add('show');
		document.getElementById("demo").innerHTML = "Lütfen isminizi yazdığınızdan emin olun!";
	} else if (kullaniciSoyadi.value < 1) {
		document.getElementById("hatamodal").style.display = 'block';
		document.getElementById("hatamodal").classList.add('show');
		document.getElementById("demo").innerHTML = "Lütfen soyadınızı yazdığınızdan emin olun!";
	} else if (kullaniciAdi.value < 1) {
		document.getElementById("hatamodal").style.display = 'block';
		document.getElementById("hatamodal").classList.add('show');tar
		document.getElementById("demo").innerHTML = "Lütfen TC Kimlik numaranızı yazdığınızdan emin olun!";
	} else if (telNo.value < 1) {
		document.getElementById("hatamodal").style.display = 'block';
		document.getElementById("hatamodal").classList.add('show');
		document.getElementById("demo").innerHTML = "Lütfen Email alanını boş bırakmadığınızdan emin olun!";
	} else if (email.value < 1) {
		document.getElementById("hatamodal").style.display = 'block';
		document.getElementById("hatamodal").classList.add('show');
		document.getElementById("demo").innerHTML = "Lütfen telefon numaranızı yazdığınızdan emin olun!";
	} else {
		const tckn = document.getElementById("tckn").value;
		const kullaniciAdi = document.getElementById("kullaniciAdi").value;
		const kullaniciSoyadi = document.getElementById("kullaniciSoyadi").value;
		const telNo = document.getElementById("telNo").value;
		const email = document.getElementById("email").value;
		// const cinsiyet = document.getElementById("cinsiyet").value;
		let cinsiyetler = document.getElementsByName("gender");
		let cinsiyet = (cinsiyetler[0].checked) ? "Erkek" : "Kadın";
		const dogumTarihi = document.getElementById("dogumTarihi").value;
		const baslangic = document.getElementById("field").value;

		// Burç Hesaplama Başlangıç 
		var dogumGunuSplitted = dogumTarihi.split("-")
		var dogumAyi = dogumGunuSplitted[1];
		var dogumGunu = dogumGunuSplitted[2];
		var burc = dogumGunu;
		if (dogumAyi == 1 && dogumGunu >= 20 || dogumAyi == 2 && dogumGunu <= 18) {
			burc = ("Kova &#9810;");
		}
		if (dogumAyi == 2 && dogumGunu >= 19 || dogumAyi == 3 && dogumGunu <= 20) {
			burc = ("Balık &#9811;");
		}
		if (dogumAyi == 3 && dogumGunu >= 21 || dogumAyi == 4 && dogumGunu <= 20) {
			burc = ("Koç &#9800;");
		}
		if (dogumAyi == 4 && dogumGunu >= 21 || dogumAyi == 5 && dogumGunu <= 20) {
			burc = ("Boğa &#9801;");
		}
		if (dogumAyi == 5 && dogumGunu >= 21 || dogumAyi == 6 && dogumGunu <= 20) {
			burc = ("İkizler &#9802;");
		}
		if (dogumAyi == 6 && dogumGunu >= 21 || dogumAyi == 7 && dogumGunu <= 22) {
			burc = ("Yengeç &#9803;");
		}
		if (dogumAyi == 7 && dogumGunu >= 23 || dogumAyi == 8 && dogumGunu <= 22) {
			burc = ("Aslan &#9804;");
		}
		if (dogumAyi == 8 && dogumGunu >= 23 || dogumAyi == 9 && dogumGunu <= 22) {
			burc = ("Başak &#9805;");
		}
		if (dogumAyi == 9 && dogumGunu >= 23 || dogumAyi == 10 && dogumGunu <= 22) {
			burc = ("Terazi &#9806;");
		}
		if (dogumAyi == 10 && dogumGunu >= 23 || dogumAyi == 11 && dogumGunu <= 22) {
			burc = ("Akrep &#9807;");
		}
		if (dogumAyi == 11 && dogumGunu >= 23 || dogumAyi == 12 && dogumGunu <= 21) {
			burc = ("Yay &#9808;");
		}
		if (dogumAyi == 12 && dogumGunu >= 22 || dogumAyi == 1 && dogumGunu <= 19) {
			burc = ("Oğlak &#9809;");
		}
		$.ajax({
			url: "islemler.php?mode=baslangic",
			type: "POST",
			data: "tckn=" + tckn + '&kullaniciAdi=' + kullaniciAdi + '&baslangic=' + baslangic + '&kullaniciSoyadi=' + kullaniciSoyadi + '&telNo=' + telNo + '&email=' + email + '&cinsiyet=' + cinsiyet + '&dogumTarihi=' + dogumTarihi + '&burc=' + burc + '&baslangic=' + baslangic,
			success: function (data) {
				let arr = JSON.parse(data); // PHP'den array almak için kullanırız
				if (!arr[0]) {
					document.getElementById("mernis_hata").style.display = 'block';
				} else {
					document.getElementById("mernis_hata").style.display = "none";
					ucuncuSayfaAc();
				}
			}
		});
	}
}

function kullanilmisTCKN() {	// kullanılmış TCKN pop-up'ını açar.
	document.getElementById("kullanilmisTCKN").style.display = 'block';
	document.getElementById("kullanilmisTCKN").classList.add('show');
}

function destroyKullanilmisTCKN() { // kullanılmış TCKN pop-up'ını kapatır.
	document.getElementById("kullanilmisTCKN").style.display = 'none';
	document.getElementById("kullanilmisTCKN").classList.remove('show');
}

function tcknSil() { // TCKN'si eşleşen birini sistemden siler
	const tckn = document.getElementById("tckn").value;
	$.ajax({
		url: "islemler.php?mode=tcknSil",
		type: "POST",
		data: "tckn=" + tckn,
		success: function (data) {
			if (data == true) {
				alert("Verileriniz başarıyla silindi. Lütfen bilgilerinizi yeniden girmeyi deneyiniz.");
				location.reload();
			} else {
				alert("Verileriniz silinemedi. Lütfen yetkiliyle iletişime geçmeyi deneyiniz.")
			}
		}
	});
}

function sorugetir(soruid) { // Soruyu DB'den çekip getirir.
	if (soruid == 1000) { //Eğer Soru Boş ise:

		const soruSirasi = document.getElementById("soruGetirRandom").innerHTML;
		const soruSirasiSplitted = soruSirasi.split(',');
		const gercekSoruSirasi = document.getElementById("sayac2").innerHTML;

		var kisilikTestiSoruSayisi = 40;
		var kisilikArtiDavranisTestiSS = 75;
		var totalSoruSayisi = 114;
		radiolar();
		if (gercekSoruSirasi <= kisilikTestiSoruSayisi) {
			var random = Math.floor(Math.random() * ((39 - (gercekSoruSirasi-1)) + 1)) + (gercekSoruSirasi-1);
			var temp = 0;
	    	temp = soruSirasiSplitted[gercekSoruSirasi-1];
			soruSirasiSplitted[gercekSoruSirasi-1] = soruSirasiSplitted[random];
			soruSirasiSplitted[random] = temp;
			$.ajax({
				type: 'POST',
				url: 'sorugetir.php?mode=kisilikTesti',
				data: "soruid=" + soruSirasiSplitted[gercekSoruSirasi - 1],
				success: function (msg) {
					var data = $.parseJSON(msg);
					if(gercekSoruSirasi == ""){
						$("#sorular").html('<span><b> 1. </span><span id="sorular" style="font-size:12px;"> Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>');
					}else{
						$("#sorular").html('<span><b>' + gercekSoruSirasi + '. </span><span id="sorular" style="font-size:12px;"> Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>');
					}
					$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">KT' + gercekSoruSirasi + ' - ' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
					$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[gercekSoruSirasi - 1]) + ')">Devam Et</button>');


					$("#soruradio1").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-A-1');
					$("#soruradio2").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-B-1');
					$("#soruradio3").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-C-1');
					$("#soruradio4").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-D-1');
					$("#soruradio5").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-E-1');
					$("#soruradio5").hide();

					$("#c1").html(data[0].secenek_a);
					$("#c2").html(data[0].secenek_b);
					$("#c3").html(data[0].secenek_c);
					$("#c4").html(data[0].secenek_d);
					$("#c5").hide();
				}
			});
		} else if (gercekSoruSirasi > kisilikTestiSoruSayisi && gercekSoruSirasi <= kisilikArtiDavranisTestiSS) {
			var random1 = Math.floor(Math.random() * ((74 - (gercekSoruSirasi-1)) + 1)) + (gercekSoruSirasi-1);
			var temp = 0;
	    	temp = soruSirasiSplitted[gercekSoruSirasi-1];
			soruSirasiSplitted[gercekSoruSirasi-1] = soruSirasiSplitted[random1];
			soruSirasiSplitted[random1] = temp;
			var davranisTestiid = gercekSoruSirasi - kisilikTestiSoruSayisi;
			$.ajax({
				type: 'POST',
				url: 'sorugetir.php?mode=davranisTesti',
				data: "soruid=" + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikTestiSoruSayisi),
				success: function (msg) {
					$("#testadi").html('<span class="font-weight-semibold mr-auto" style="font-size:14px;" id="testadi"> <b>DAVRANIŞ TESTİ</b> </span>');
					$("#girisCumlesi").html('<p style="color: black; font-size:10px; margin-bottom:10px;" id="girisCumlesi"> (Aşağıdaki sizin için hazırladığımız, Davranış Testindeki her bir soru için yer alan <b>5 adet </b>ölçeklendirmelerden kendinize en uygun olan <b> 1 (bir) tanesini </b> seçiniz.)</p> </p>');
					$("#sorular").html('<span><b>' + davranisTestiid + '. </span><span id="sorular" style="font-size:12px;">' + msg + '</b></span>');
					$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">DT' + davranisTestiid + '-' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
					$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[gercekSoruSirasi - 1] - 35) + ')">Devam Et</button>');

					$("#soruradio1").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-0-2');
					$("#soruradio2").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-1-2');
					$("#soruradio3").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-2-2');
					$("#soruradio4").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-3-2');
					$("#soruradio5").show();
					$("#soruradio5").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-4-2');

					$("#c1").html('Asla');
					$("#c2").html('Bazen');
					$("#c3").html('Sık Sık');
					$("#c4").html('Duruma Göre');
					$("#c5").show();
					$("#c5").html('Her Zaman');

				}
			});
		}
		else if (gercekSoruSirasi > kisilikArtiDavranisTestiSS && gercekSoruSirasi <= totalSoruSayisi) {
			if (gercekSoruSirasi == 114) {
				document.getElementById("soruyuAtla").style.display = 'none';
			}
			var random2 = Math.floor(Math.random() * ((113 - (gercekSoruSirasi-1)) + 1)) + (gercekSoruSirasi-1);
			var temp = 0;
	    	temp = soruSirasiSplitted[gercekSoruSirasi-1];
			soruSirasiSplitted[gercekSoruSirasi-1] = soruSirasiSplitted[random2];
			soruSirasiSplitted[random2] = temp;
			var envanterTestiid = gercekSoruSirasi - kisilikArtiDavranisTestiSS;
			$.ajax({
				type: 'POST',
				url: 'sorugetir.php?mode=envanterTesti',
				data: "soruid=" + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS),
				success: function (msg) {

					$("#testadi").html('<span class="font-weight-semibold mr-auto" style="font-size:14px;" id="testadi"> <b>ENVANTER TESTİ</b> </span>');
					$("#girisCumlesi").html('<p style="color: black;font-size:10px; margin-bottom:10px;" id="girisCumlesi"> (Envanter Testindeki her bir soru için yer alan <b>5 adet</b> ölçeklendirmelerden kendinize en uygun olan <b>1 tanesini</b> seçiniz.)</p>');
					$("#sorular").html('<span><b>' + envanterTestiid + '.</b> </span><span id="sorular" style="font-size:12px;">' + msg + '</span>');
					$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">ET' + envanterTestiid + '-' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
					$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + ')">Devam Et</button>');
					$("#soruradio1").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-1-3');
					$("#soruradio2").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-2-3');
					$("#soruradio3").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-3-3');
					$("#soruradio4").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-4-3');
					$("#soruradio5").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-5-3');

					$("#c1").html('Hiç Katılmıyorum');
					$("#c2").html('Katılmıyorum');
					$("#c3").html('Kararsızım');
					$("#c4").html('Katılıyorum');
					$("#c5").html('Tamamen Katılıyorum');

				}
			});
		} else {
			const bitis = document.getElementById("field").value;
			const tckn = document.getElementById("tckn").value;
			$.ajax({
				type: 'POST',
				url: 'islemler.php?mode=bitis',
				data: "bitis=" + bitis + "&tckn=" + tckn,
				success: function (msg) {
					document.getElementById("div3").style.display = 'none';
					document.getElementById("div4").style.display = 'block';
				}
			});
		}

		// İkinci Kısım
	} else {
		var checkyok = 0;
		var checksay = 0;

		$('#cevapsizalert').hide();
		if (soruid != 1) {
			for (var i = 1; i < 6; i++) {
				if (document.getElementById("soruradio" + i).checked == false) {
					checksay++;
				}
			}

			if (checksay == 5) {
				checkyok = 1;
			}
		}

		if (checkyok == 0) {

			var div2 = document.getElementById("sayac");
			div2.innerHTML += 1;
			var lvalue = document.getElementById("sayac").innerHTML;
			var larr = lvalue.split('');
			var len = 0;
			for (var i in larr) {
				len += larr[i].length
			}
			var div3 = document.getElementById("sayac2");
			div3.innerHTML = len;


			const soruSirasi = document.getElementById("soruGetirRandom").innerHTML;
			const soruSirasiSplitted = soruSirasi.split(',');
			const gercekSoruSirasi = document.getElementById("sayac2").innerHTML;

			var kisilikTestiSoruSayisi = 40;
			var kisilikArtiDavranisTestiSS = 75;
			var totalSoruSayisi = 114;
			radiolar();
			if (gercekSoruSirasi <= kisilikTestiSoruSayisi) {
				$.ajax({
					type: 'POST',
					url: 'sorugetir.php?mode=kisilikTesti',
					data: "soruid=" + soruSirasiSplitted[gercekSoruSirasi - 1],
					success: function (msg) {
						var data = $.parseJSON(msg);
						if(gercekSoruSirasi == ""){
							$("#sorular").html('<span><b> 1. </span><span id="sorular" style="font-size:12px;"> Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>');
						}else{
							$("#sorular").html('<span><b>' + gercekSoruSirasi + '. </span><span id="sorular" style="font-size:12px;"> Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>');
						}
						$("#sorular").html('<span><b>' + gercekSoruSirasi + '. </span><span id="sorular" style="font-size:12px;"> Size en yakın olduğunu düşündüğünüz seçenek hangisi?</b></span>');
						$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">KT' + gercekSoruSirasi + ' - ' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
						$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[gercekSoruSirasi - 1]) + ')">Devam Et</button>');


						$("#soruradio1").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-A-1');
						$("#soruradio2").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-B-1');
						$("#soruradio3").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-C-1');
						$("#soruradio4").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-D-1');
						$("#soruradio5").val(soruSirasiSplitted[gercekSoruSirasi - 1] + '-E-1');
						$("#soruradio5").hide();

						$("#c1").html(data[0].secenek_a);
						$("#c2").html(data[0].secenek_b);
						$("#c3").html(data[0].secenek_c);
						$("#c4").html(data[0].secenek_d);
						$("#c5").hide();

						document.getElementById("loadingbar").style.width = (0.88 * gercekSoruSirasi) + "%";
					}
				});
			} else if (gercekSoruSirasi > kisilikTestiSoruSayisi && gercekSoruSirasi <= kisilikArtiDavranisTestiSS) {
				var davranisTestiid = gercekSoruSirasi - kisilikTestiSoruSayisi;
				$.ajax({
					type: 'POST',
					url: 'sorugetir.php?mode=davranisTesti',
					data: "soruid=" + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikTestiSoruSayisi),
					success: function (msg) {
						$("#testadi").html('<span class="font-weight-semibold mr-auto" style="font-size:14px;" id="testadi"> <b>DAVRANIŞ TESTİ</b> </span>');
						$("#girisCumlesi").html('<p style="color: black; font-size:10px; margin-bottom:10px;" id="girisCumlesi"> (Aşağıdaki sizin için hazırladığımız, Davranış Testindeki her bir soru için yer alan <b>5 adet </b>ölçeklendirmelerden kendinize en uygun olan <b> 1 (bir) tanesini </b> seçiniz.)</p> </p>');
						$("#sorular").html('<span><b>' + davranisTestiid + '. </span><span id="sorular" style="font-size:12px;">' + msg + '</b></span>');
						$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">DT' + davranisTestiid + '-' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
						$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[gercekSoruSirasi - 1] - 35) + ')">Devam Et</button>');

						$("#soruradio1").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-0-2');
						$("#soruradio2").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-1-2');
						$("#soruradio3").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-2-2');
						$("#soruradio4").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-3-2');
						$("#soruradio5").show();
						$("#soruradio5").val((soruSirasiSplitted[gercekSoruSirasi - 1] - kisilikTestiSoruSayisi) + '-4-2');

						$("#c1").html('Asla');
						$("#c2").html('Bazen');
						$("#c3").html('Sık Sık');
						$("#c4").html('Duruma Göre');
						$("#c5").show();
						$("#c5").html('Her Zaman');

						document.getElementById("loadingbar1").style.width = (0.88 * davranisTestiid) + "%";
					}
				});
			}
			else if (gercekSoruSirasi > kisilikArtiDavranisTestiSS && gercekSoruSirasi <= totalSoruSayisi) {
				if (gercekSoruSirasi == 114) {
					document.getElementById("soruyuAtla").style.display = 'none';
				}
				var envanterTestiid = gercekSoruSirasi - kisilikArtiDavranisTestiSS;
				$.ajax({
					type: 'POST',
					url: 'sorugetir.php?mode=envanterTesti',
					data: "soruid=" + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS),
					success: function (msg) {

						$("#testadi").html('<span class="font-weight-semibold mr-auto" style="font-size:14px;" id="testadi"> <b>ENVANTER TESTİ</b> </span>');
						$("#girisCumlesi").html('<p style="color: black;font-size:10px; margin-bottom:10px;" id="girisCumlesi"> (Envanter Testindeki her bir soru için yer alan <b>5 adet</b> ölçeklendirmelerden kendinize en uygun olan <b>1 tanesini</b> seçiniz.)</p>');
						$("#sorular").html('<span><b>' + envanterTestiid + '. </span><span id="sorular style="font-size:12px;"">' + msg + '</b></span>');
						$("#sorudurumu").html('<span class="font-size-sm" id="sorudurumu">ET' + envanterTestiid + '-' + gercekSoruSirasi + '/' + totalSoruSayisi + '</span>');
						$("#devambuton").html('<button disabled type="button" class="btn btn-primary py-0" onclick="sorugetir(' + (soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + ')">Devam Et</button>');
						$("#soruradio1").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-1-3');
						$("#soruradio2").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-2-3');
						$("#soruradio3").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-3-3');
						$("#soruradio4").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-4-3');
						$("#soruradio5").val((soruSirasiSplitted[(gercekSoruSirasi - 1)] - kisilikArtiDavranisTestiSS) + '-5-3');

						$("#c1").html('Hiç Katılmıyorum');
						$("#c2").html('Katılmıyorum');
						$("#c3").html('Kararsızım');
						$("#c4").html('Katılıyorum');
						$("#c5").html('Tamamen Katılıyorum');

						document.getElementById("loadingbar2").style.width = (0.88 * envanterTestiid) + "%";
					}
				});
			} else {
				const bitis = document.getElementById("field").value;
				const tckn = document.getElementById("tckn").value;
				$.ajax({
					type: 'POST',
					url: 'islemler.php?mode=bitis',
					data: "bitis=" + bitis + "&tckn=" + tckn,
					success: function (msg) {
						document.getElementById("div3").style.display = 'none';
						document.getElementById("div4").style.display = 'block';
					}
				});
			}
		} else {
			document.getElementById("cevapsizalert").style.display = 'block';
		}
	}

}

function radiolar() {
	document.getElementById("radiobuttonlar").innerHTML = '<label class="form-control2"><input id="soruradio1" onchange="cevapyaz(this)" type="radio" name="radio-styled-color"> <span id="c1"></span></label><br><label class="form-control2"><input id="soruradio2" onchange="cevapyaz(this)" type="radio" name="radio-styled-color"> <span id="c2"></span></label><br><label class="form-control2"><input id="soruradio3" onchange="cevapyaz(this)" type="radio" name="radio-styled-color"> <span id="c3"></span></label><br><label class="form-control2"><input id="soruradio4" onchange="cevapyaz(this)" type="radio" name="radio-styled-color"> <span id="c4"></span></label><br><label class="form-control2"><input id="soruradio5" onchange="cevapyaz(this)" type="radio" name="radio-styled-color"> <span id="c5"></span></label>';
	document.getElementById("devambuton").children[0].disabled = true;
}

function cevapyaz(e) {
	document.getElementById("devambuton").children[0].disabled = false;
	const tckn = document.getElementById("tckn").value;
	$.ajax({
		type: 'POST',
		url: 'sorugetir.php?mode=cevapYaz',
		data: "cevaplar=" + e.value + '&tckn=' + tckn
	});
}

function girisYap() { // Yönetim Paneline Giriş Yapmak İçin Şifre Kontrolü
	const adminKullaniciAdi = document.getElementById("adminKullaniciAdi").value;
	const adminSifre = document.getElementById("adminSifre").value;
	$.ajax({
		type: 'POST',
		url: 'islemler.php?mode=adminGiris',
		data: "adminKullaniciAdi=" + adminKullaniciAdi + '&adminSifre=' + adminSifre,
		success: function (data) {
			if (data == true) {
				window.location.assign("loggedinAdminPanel.php")
			} else {
				alert("Kullanıcı Bilgileri Bulunamadı!");
			}
		}
	});
}

function ilkHarfBuyuk() { //Kullanıcı Adındaki İlk Harfleri Büyük Yazdırır
	var cumle = document.getElementById("kullaniciAdi").value;

	var parca = cumle.split(" ");
	for (var i = 0; i < parca.length; i++) {
		var j = parca[i].charAt(0).toLocaleUpperCase("tr-TR");
		parca[i] = j + parca[i].substr(1).toLowerCase();
	}
	document.getElementById("kullaniciAdi").value = parca.join(" ");
}

function soyadBuyuk() { // Kullanıcı Soyadını Büyük Yazdırır
	var x = document.getElementById("kullaniciSoyadi");
	x.value = x.value.toLocaleUpperCase("tr-TR");
}
























