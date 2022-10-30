<!DOCTYPE html>
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
	<div class="page-content">
		<div class="">
			<header class="border-bottom">
				<div class="nav col-4 col-md-auto pt-3 pb-3 w-100" style="padding-left: 16px; display: flex;">
					<div>
						<a href="index.php" style="text-decoration: none;">dakik</a> ©
						<span> / Yönetici Girişi</span>
					</div>
				</div>
			</header>
		</div>

		<!-- Main content -->
		<div class="content-wrapper" style="background-color: #F5F5F5; height: 90vh;" >

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->

				<div class="card mb-0 mt-5">
					<div class="card-body">
						<div class="text-center">
							<center><img src="../assets/loginicon.jpg" width="180px" height="180px"></center>
							<h5 class="mb-0"><span style="color:blue;">dakİK</span> <br>Envanter Sistemi</h5>

						</div>

						<div class="inputWithIcon">
							<input type="text" name="kullaniciAdi" id="adminKullaniciAdi" placeholder="Kullanıcı Adı">
							<i class="fa fa-user fa-lg fa-fw" style="padding-top:20px;" aria-hidden="true"></i>
						</div>


						<div class="inputWithIcon">
							<input type="password" name="sifre" id="adminSifre" placeholder="Şifre" >
							<i class="fa fa-lock fa-lg fa-fw" style="padding-top:20px;" aria-hidden="true"></i>
						</div>


						<div id="loginhata" class="form-group form-group-feedback form-group-feedback-left"
							style="color:red;">

						</div>


						<div class="form-group text-center">
						<button type="button" id="login" name="login" onclick="girisYap()"
								class="btn btn-primary btn-block py-1">Giriş Yap</button>
						</div>
					</div>
				</div>

				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<script src="../js/dakik.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://kit.fontawesome.com/35e8266fdf.js" crossorigin="anonymous"></script>
</body>

</html>