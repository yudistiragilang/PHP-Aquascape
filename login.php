
<?php

	include('config.php');
	include('fungsi.php');

	session_start(); // Menciptakan session

	if(cek_login($aqua) == true){
		header('location: admin/index.php');
		exit();	
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['username']) and isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(login($username, $password, $aqua) == true){
				echo"<script>window.alert('Login Berhasil !!');;window.location='admin/index.php'</script>";
				// Berhasil login
				exit();
			}else{
				echo"<script>window.alert('PASSWORD SALAH !!');;window.location='login.php'</script>";
				// Gagal login
				exit();	
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/materialize.min.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.link{
			color: white;
		}
		.link:active{
			color: red;
		}
		.link:hover{
			color: black;
		}
	</style>
</head>

<body background="back.jpg">

	<!-- Menu -->
	<div class="navbar-fixed">

		<nav class="light-green accent-4">
		<div class="container">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">AQUASCAPE</a>
				<!-- <a href="#" data-activates="mobile-menu" class="button-collapse">
					<i class="material-icons">menu</i>
				</a> -->
			</div>
		</div>
		</nav>
	</div>

	<!-- Menu -->
	<br><br>
	<!-- Konten -->
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8">
				
			</div>
			<div class="col s12 m4 l4 white">
				<form action="" method="POST">
					<div class="row">
						<h4 class="center-align">
							Login Admin
						</h4>
						<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="username" required id="icon_prefix">
							<label for="icon_prefix">Username</label>
						</div>
						<div class="input-field">
							<i class="material-icons prefix">fingerprint</i>
							<input type="password" name="password" required id="icon_password">
							<label for="icon_password">Password</label>
						</div>
						<div class="input-field center-align">
							<button class="btn waves-effect waves-light" type="submit" name="action">Login<i class="material-icons right">send</i></button>
							<!-- <a href="index.php" class="waves-effect waves-light btn">Home</a> -->
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
	<!-- Konten -->

	<!-- Footer -->
	<br>
	<br>
	<footer class="page-footer light-green accent-4 black-text">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<h5>Daftar Menu</h5>
					<ul>
						<li><a class="link" href="#">Hardscape</a></li>
						<li><a class="link" href="#">Perlengkapan</a></li>
						<li><a class="link" href="#">Flora</a></li>
						<li><a class="link" href="#">Fauna</a></li>
					</ul>
				</div>

				<div class="col s12 m6 l6">
					<h5>Tentang Kami</h5>
					<ul>
						<li><a class="link" href="#">Facebook</a></li>
						<li><a class="link" href="#">Twetter</a></li>
						<li><a class="link" href="#">Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container center-align">
				&copy; Aquatiq - materialize 2017
				<br>
				<a href="index.php">Yudhistira Gilang</a>
			</div>
		</div>
	</footer>
	<!-- Footer -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="asset/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){}
			$('.button-collapse').sideNav();
		})
	</script>
</body>
</html>