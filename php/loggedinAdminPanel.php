<?php
include 'config.php';
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

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 d-flex w-100" style="justify-content:space-between;">
		<div class="leftSideNavbar w-50" style="display:flex; justify-content:left; padding-left: 16px;">
			<a class="navbar-brand" href="loggedinAdminPanel"> dakİK Envanter Testleri</a>
		</div>
		<div class="rightSideNavbar w-50" style="display:flex; justify-content:right; padding-right: 16px;">
			<ul class="nav nav-pills anasayfa" style="padding-right: 16px;">
				<li class="nav-item">
					<a href="loggedinAdminPanel" class="nav-link active" aria-current="page" >
						<i class="fa-solid fa-house pt-1"></i>
						Anasayfa
					</a>
				</li>
			</ul>
			<div class="dropdown pt-1">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
					id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="../assets/admin_photo.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
					<strong>Admin</strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
					<li><a class="dropdown-item" href="#">Profil</a></li>
					<li><a class="dropdown-item" href="#">Ayarlar</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="../index">Çıkış Yap</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex" style="justify-content:space-between;">
							<h3 class="card-title">KAYIT YAPAN KULLANICILAR</h3>
							<div class="card-tools">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control float-right"
										placeholder="Ara">
									<div class="input-group-append">
										<button type="submit" class="btn btn-default pt-2">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card-body table-responsive p-0">
							<?php 
				$query = $conn->prepare("SELECT * from cevaplar");
				$query->execute();
				if($query->rowCount()){
					?>
							<table class="table table-hover text-nowrap">
								<thead>
									<tr>
										<th>#</th>
										<th>Ad</th>
										<th>Soyad</th>
										<th>Başlangıç</th>
										<th>Bitiş</th>
										<th>Telefon Numarası</th>
										<th>Cinsiyet</th>
										<th>TCKN</th>
										<th>Email</th>
										<th>Doğum Günü</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; 
								foreach($query as $row){ ?>
									<tr>
										<td><?php echo $i; $i++; ?></td>
										<td><?php echo $row['ad'] ?></td>
										<td><?php echo $row['soyad'] ?></td>
										<td><?php $parca2 = explode(" ",$row['baslangic']); echo $parca2[0],' - ',$parca2[1]; ?></td>
										<td><?php if($row['bitis'] != "") {
											 $parca = explode(" ",$row['bitis']); echo $parca[0],' - ',$parca[1];}else{
												echo "Bitirilmemiş";
											} ?></td>
										<td><?php echo $row['telNo'] ?></td>
										<td><?php echo $row['cinsiyet'] ?></td>
										<td><?php echo $row['tckn'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo $row['dogumTarihi'][8],$row['dogumTarihi'][9]?><span>.</span><?php echo $row['dogumTarihi'][5],$row['dogumTarihi'][6]?><span>.</span><?php echo $row['dogumTarihi'][0],$row['dogumTarihi'][1],$row['dogumTarihi'][2],$row['dogumTarihi'][3]?></td>
										<td><a href="adminKisiBilgileri?tckn=<?php echo $row['tckn'] ?>"><button
											class="btn btn-primary py-0">Gözat</button></a></td>
									</tr>
									<?php } ?>
								</tbody>
								<?php
				}else{
					echo 'Veri Yok';
				}
				?>
							</table>
						</div>

					</div>

				</div>
			</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://kit.fontawesome.com/35e8266fdf.js" crossorigin="anonymous"></script>
</body>

</html>