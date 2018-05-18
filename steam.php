


<!DOCTYPE html>
<html>
<head>
	<title>Aquascape</title>
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

<body background="back.jpg" style="">

	<!-- Menu -->
	<!-- <div class="navbar-fixed"> -->

		<!-- menu dropdown1 -->

		<ul id="dropdown1" class="dropdown-content">
			<li class="active"><a href="steam.php">Steam</a></li>
			<li><a href="moss.php">Moss</a></li>
			<li><a href="lain.php">Lainya</a></li>
		</ul>

		<ul id="dropdown3" class="dropdown-content">
			<li class="active"><a href="steam.php">Steam</a></li>
			<li><a href="moss.php">Moss</a></li>
			<li><a href="lain.php">Lainya</a></li>
		</ul>
		<!-- menu dropdown1 -->
		<!-- menu dropdown2 -->

		<ul id="dropdown2" class="dropdown-content">
			<li><a href="faga.php">Galak</a></li>
			<li><a href="faji.php">Jinak</a></li>
		</ul>

		<ul id="dropdown4" class="dropdown-content">
			<li><a href="faga.php">Galak</a></li>
			<li><a href="faji.php">Jinak</a></li>
		</ul>
		<!-- menu dropdown2 -->

		<nav class="light-green accent-4">
		<div class="container">
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo">AQUASCAPE</a>
				<a href="#" data-activates="mobile-menu" class="button-collapse">
					<i class="material-icons">menu</i>
				</a>

				<ul class="right hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li class="active"><a href="#" class="dropdown-button" data-activates="dropdown1">Flora <i class="material-icons right">keyboard_arrow_down</i></a></li>
					<li><a href="#" class="dropdown-button" data-activates="dropdown2">Fauna <i class="material-icons right">keyboard_arrow_down</i></a></li>
				</ul>

				<ul class="side-nav" id="mobile-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li class="active"><a href="#" class="dropdown-button" data-activates="dropdown3">Flora<i class="material-icons right">keyboard_arrow_down</i></a></li>
					<li><a href="#" class="dropdown-button" data-activates="dropdown4">Fauna <i class="material-icons right">keyboard_arrow_down</i></a></li>
				</ul>
			</div>
		</div>
		</nav>
	<!-- </div> -->

	<!-- Menu -->

	<!-- Konten -->
	<br><br>
	<div class="container">
		<div class="row">

			<?php
			include "config.php";

			$data ="SELECT * FROM flora WHERE JenisFlora='steam'";
			$query = $aqua->query($data);

			while ($row = $query->fetch_array()){
			?>

			<div class="col s12 m4 l4">
				<div class="card">
					<div class="card-image waves-effect waves-light">
					<?php echo'	<img src="flora/'.$row['fotoflora'].'" class="activator responsive-img" alt="" />'; ?>
					</div>
					<div class="card-content">
					<?php echo'	<span class="card-title activator">'.$row['NamaFlora'].'<i class="material-icons right">keyboard_arrow_up</i></span>'; ?>
					</div>
					<div class="card-reveal">
					<?php echo'	<div class="card-title">'.$row['NamaFlora'].'<i class="material-icons right">close</i></div>';?>
					<?php echo'<p>'.$row['KetFlora'].'</p>';?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<!-- Konten -->

	<!-- Footer -->
	<br>
	<br>
	<footer class="page-footer light-green accent-4 black-text">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 l4">
					<h5>Daftar Menu</h5>
					<ul>
						<li><a class="link" href="#">Hardscape</a></li>
						<li><a class="link" href="#">Perlengkapan</a></li>
						<li><a class="link" href="#">Flora</a></li>
						<li><a class="link" href="#">Fauna</a></li>
					</ul>
				</div>

				<div class="col s12 m4 l4">
					<h5>Tentang Kami</h5>
					<ul>
						<li><a class="link" href="#">Facebook</a></li>
						<li><a class="link" href="#">Twetter</a></li>
						<li><a class="link" href="#">Instagram</a></li>
					</ul>
				</div>
				<div class="col s12 m4 l4 blue white">
					<h5>Saran</h5>

					<?php
						include ('config.php');

						if (isset($_POST['nama']) and isset($_POST['pesan'])){
								
					
								$nama=$_POST["nama"];
								$saran=$_POST["pesan"];

								$sql="INSERT INTO saran VALUES('','$nama','$saran')";
								$hasil=mysqli_query($aqua,$sql);

								if($hasil) {
									echo"<script>window.alert('DATA BERHASIL DISIMPAN');;window.location='index.php'</script>";
								} else {
									echo $aqua->error;
								}
						}
					?>
					<form action="" method="POST">
						<div class="input-field ">
							<input type="text" name="nama" id="nama">
							<label for="nama">Nama</label>
						</div>
						<div class="input-field">
							<textarea id="pesan" name="pesan" class="materialize-textarea"></textarea>
          					<label for="pesan">Pesan</label>
						</div>
						<div class="input-field">
							<button class="btn waves-effect waves-light right" type="submit" name="kirim">Kirim</button>
						</div><br>
					</form>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container center-align">
				&copy; Aquatiq - materialize 2017
				<br>
				<a href="login.php">Yudhistira Gilang</a>
			</div>
		</div>
	</footer>
	<!-- Footer -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="asset/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.dropdown-button').dropdown();
			$('.button-collapse').sideNav();
			$('.materialboxed').materialbox();
			$('select').material_select();
			$('.datepicker').pickadate({
				selectMonths : true,
				selectYears : 10
			});

			$('.carousel').carousel({
				dist: -70
			});
		})
	</script>
</body>
</html>