<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'config.php';
$kullanicisor=$conn->prepare("SELECT * FROM cevaplar where tckn=:tckn");
$kullanicisor->execute(array(
  'tckn' => $_GET['tckn']
  ));
  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


/*
	if($_GET['durum']=="mailGonder"){
	
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPKeepAlive = true;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls'; //ssl
	
	$mail->Port = 587; //25,465
	$mail->Host = "smtp-relay.gmail.com";
	$mail->Username = "slymntrkr1905@gmail.com";
	$mail->Password = "Stg29968055228"
	
	$mail->setFrom(address: "slymntrkr1905.com",name:"Titiz Agro Grup");
	$mail->addAddress(address:"gunersuleymanturker@gmail.com",name:"Süleyman Türker Güner");
	$mail->Subect = "Sonuçlarınız"
	$mail->Body = "<h1>Sonuçlar buraya gelecek</h1><p>Bu bir deneme</p>";
	if($mail->send()){
		echo "Mail gönderildi";
	}else{
		echo "Malesef mail gönderilemedi.";
	}
}
*/
?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
		crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/adminStyle.css">
</head>

<body onload="sonucAc();">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 d-flex w-100" style="justify-content:space-between;">
		<div class="leftSideNavbar w-50" style="display:flex; justify-content:left; padding-left: 16px;">
			<a class="navbar-brand" href="loggedinAdminPanel.php"> dakİK Envanter Testleri</a>
		</div>
		<div class="rightSideNavbar w-50" style="display:flex; justify-content:right; padding-right: 16px;">
			<ul class="nav nav-pills anasayfa" style="padding-right: 16px;">
				<li class="nav-item">
					<a href="loggedinAdminPanel.php" class="nav-link active" aria-current="page">
						<i class="fa-solid fa-house pt-1"></i>
						Anasayfa
					</a>
				</li>
			</ul>
			<div class="dropdown pt-1">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
					id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
					<strong>Süleyman</strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
					<li><a class="dropdown-item" href="#">Profil</a></li>
					<li><a class="dropdown-item" href="#">Ayarlar</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="index.php">Çıkış Yap</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<!-- Right Side of Container-->
			<div class="col-md-12">
				<div class="adminContent-wrapper">
					<h1 style="text-align: center;" class="text-muted pt-3">
						<?php echo $kullanicicek['ad'] ?>
						<?php echo $kullanicicek['soyad'] ?>
						<br>
						Envanter Testi Sonuçları
					</h1>
					<div style="text-align: center;">
						<button type="button" class="btn btn-primary" onclick="sonucAc()" id="sonucAc"> Sonuçları Açmak
							İçin Butona Tıklayınız </button>
					</div>
					<p id="dgt"></p>
					<p></p>
					<hr>
					<div class="bilgiler table-responsive">
						<table class="table table-striped table-hover table-bordered text-nowrap">
							<thead>
								<tr>
									<th>Ad</th>
									<th>Soyad</th>
									<th>Başlangıç</th>
									<th>Bitiş</th>
									<th>İletişim</th>
									<th>Cinsiyet</th>
									<th>TCKN</th>
									<th>Doğum Günü</th>
									<th>Burcu</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="overflow:hidden; white-space:nowrap; " id="ad">
										<?php echo $kullanicicek['ad'] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="soyad">
										<?php echo $kullanicicek['soyad'] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="baslangic">
										<?php echo $kullanicicek['baslangic'][0],$kullanicicek['baslangic'][1],$kullanicicek['baslangic'][2],$kullanicicek['baslangic'][3],$kullanicicek['baslangic'][4],$kullanicicek['baslangic'][5],$kullanicicek['baslangic'][6],$kullanicicek['baslangic'][7]; ?>
										<br>
										<?php echo $kullanicicek['baslangic'][9],$kullanicicek['baslangic'][10],$kullanicicek['baslangic'][11],$kullanicicek['baslangic'][12],$kullanicicek['baslangic'][13],$kullanicicek['baslangic'][14],$kullanicicek['baslangic'][15],$kullanicicek['baslangic'][16]; ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="bitis">
										<?php if($kullanicicek['bitis'] != "") {
											echo $kullanicicek['bitis'][0],$kullanicicek['bitis'][1],$kullanicicek['bitis'][2],$kullanicicek['bitis'][3],$kullanicicek['bitis'][4],$kullanicicek['bitis'][5],$kullanicicek['bitis'][6],$kullanicicek['bitis'][7]; }else{
												echo "Bitirilmemiş";
											} ?>
										<br>
										<?php if($kullanicicek['bitis'] != "") {
											echo $kullanicicek['bitis'][9],$kullanicicek['bitis'][10],$kullanicicek['bitis'][11],$kullanicicek['bitis'][12],$kullanicicek['bitis'][13],$kullanicicek['bitis'][14],$kullanicicek['bitis'][15],$kullanicicek['bitis'][16]; } ?>
									</td>
									<div style="display:none;" id="realTelNumber"></div>
									<td style="overflow:hidden; white-space:nowrap; " id="telNo">
										<a href="tel:+90<?php echo $kullanicicek['telNo'] ?>"><i
												class="fa-solid fa-phone" style="scale:1.3;"></i></a>
										<a href="https://wa.me/90<?php echo $kullanicicek['telNo'] ?>"
											target="_blank"><i class="fa-brands fa-whatsapp"
												style="scale:1.5; margin-left:10px;"></i></a>
										<a href="mailto:<?php echo $kullanicicek['email'] ?>"><i class="fa-solid fa-paper-plane" style="margin-left:10px;cursor:pointer; color:blue;"></i></a>
										<i class="fa-solid fa-eye" id="telNoIcon" onclick="telNoAc()"
											style="scale:1.5; margin-left:10px;color:blue; cursor:pointer;"></i>
										<p style="margin-bottom:0px; display:none; padding-top:5px;" id="telNoFront">(+90)<span> </span><?php echo $kullanicicek['telNo'][0],$kullanicicek['telNo'][1],$kullanicicek['telNo'][2] ?><span> </span><?php echo $kullanicicek['telNo'][3],$kullanicicek['telNo'][4],$kullanicicek['telNo'][5] ?><span> </span><?php echo $kullanicicek['telNo'][6],$kullanicicek['telNo'][7] ?><span> </span><?php echo $kullanicicek['telNo'][8],$kullanicicek['telNo'][9] ?>
										</p>
										<p style="margin-bottom:0px; display:none;" id="emailFront">
											<?php echo $kullanicicek['email'] ?>
										</p>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="cinsiyet">
										<?php echo $kullanicicek['cinsiyet'] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="tckn">
										<?php echo $kullanicicek['tckn'] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="dogumTarihi">
									<?php echo $kullanicicek['dogumTarihi'][8],$kullanicicek['dogumTarihi'][9] ?><span>.</span><?php echo $kullanicicek['dogumTarihi'][5],$kullanicicek['dogumTarihi'][6] ?><span>.</span><?php echo $kullanicicek['dogumTarihi'][0],$kullanicicek['dogumTarihi'][1],$kullanicicek['dogumTarihi'][2],$kullanicicek['dogumTarihi'][3] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="burc">
										<?php echo $kullanicicek['burc'] ?>
									</td>
									<td style="overflow:hidden; white-space:nowrap; " id="mail" style="text-center;">
										<button type="button" class="btn btn-primary py-0" style="font-size:12px;">Mail
											Gönder</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>



					<div class="row grafikler"
						style="display:none; margin-bottom:30px; margin-left:%15; margin-right:%15;" id="grafikler">
						<div class="col-md-4 text-center border border-primary pb-5">
							<h6 class="pt-3"> KİŞİLİK TESTİ SONUÇLARI</h6>
							<hr>
							<div class="col-md-12" style="padding-left:10%; padding-right:10%;">
								<div class="ozellikler">
									<div class="row border border-secondary">
										<div class="col-md-6 text-center" id="deneme" style="background-color:yellow;">
											Neşeli & Hayalci</div>
										<div class="col-md-6 d-flex align-items-center justify-content-center"
											id="neseli"></div>
									</div>
								</div>
								<div class="ozellikler">
									<div class="row border border-secondary">
										<div class="col-md-6 text-center" style="background-color:red; color:white; ">
											Otoriter</div>
										<div class="col-md-6 d-flex align-items-center justify-content-center"
											id="otoriter"></div>
									</div>
								</div>
								<div class="ozellikler">
									<div class="row border border-secondary">
										<div class="col-md-6 text-center" style="background-color:green; color:white;">
											Sakin</div>
										<div class="col-md-6 d-flex align-items-center justify-content-center"
											id="sakin"></div>
									</div>
								</div>
								<div class="ozellikler">
									<div class="row border border-secondary">
										<div class="col-md-6 text-center" style="background-color:blue; color:white;">
											Titiz - İdealist</div>
										<div class="col-md-6 d-flex align-items-center justify-content-center"
											id="titiz"></div>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex" style="justify-content:center;">
								<div id="chartContainer1" style="height: 200px; width: 100%;"></div>
							</div>
						</div>
						<div class="col-md-4 text-center border border-success pb-5">
							<h6 class="pt-3"> DAVRANIŞ TESTİ SONUÇLARI</h6>
							<hr>
							<div class="row">
								<div class="col-md-4">
									<p style="text-decoration:underline;margin-bottom:0px;">Girişken D. Puanı:</p>
									<p id="gdp"> </p>
								</div>
								<div class="col-md-4">
									<p style="text-decoration:underline;margin-bottom:0px;">Baskıcı D. Puanı:</p>
									<p id="bdp"> </p>
								</div>
								<div class="col-md-4">
									<p style="text-decoration:underline;margin-bottom:0px;">Pasif D. Puanı:</p>
									<p id="pdp"> </p>
								</div>
							</div>
							<div id="chartContainer" style="height: 200px; width: 100%;"></div>
						</div>
						<div class="col-md-4 text-center border border-danger pb-5">
							<h6 class="pt-3"> ENVANTER TESTİ SONUÇLARI</h6>
							<hr>
							<div id="foo" style="height: 200px; width: 100%;"></div>
						</div>
					</div>

				</div>
			</div>
			<!-- Right Side End -->
		</div>

	</div>
	<script src="../js/admin.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://kit.fontawesome.com/35e8266fdf.js" crossorigin="anonymous"></script>
</body>

</html>