
<?php
	include('../config.php');
	include('../fungsi.php');

	session_start(); // Menciptakan session

	if(cek_login($aqua) == false){
		header('location: ../index.php');
		exit();	
	}

	$id = $_GET['kode'];
	$SQL_DATA = $aqua->query("SELECT * FROM flora WHERE idflora='$id'");
	$data = $SQL_DATA->fetch_array();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Flora</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../asset/css/materialize.min.css">
	<link rel="shortcut icon" href="../favicon.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>

	<!-- Menu -->
	<!-- <div class="navbar-fixed"> -->
		
		<nav class="light-green accent-4">
		<div class="container">
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo">AQUASCAPE</a>
				<a href="#" data-activates="mobile-menu" class="button-collapse">
					<i class="material-icons">menu</i>
				</a>

				<ul class="right hide-on-med-and-down">
					<li><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li class="active"><a href="flora.php">Flora</a></li>
					<li><a href="fauna.php">Fauna</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				<ul class="side-nav" id="mobile-menu">
					<li><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li class="active"><a href="flora.php">Flora</a></li>
					<li><a href="fauna.php">Fauna</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		</nav>
	<!-- </div> -->

	<!-- Menu -->

	<!-- Konten -->
	<br><br>
	<div class="container">

		<!-- FORM EDIT -->
			<div class="row">
				<div class="container">
					 <?php

						if(isset($_POST["edit"])) {

							$id=$data['idflora'];
							$a=$_POST["nama"];
							$b=$_POST["jenis"];
							$c=$_POST["keterangan"];

							$sql="UPDATE flora SET NamaFlora='$a',JenisFlora='$b',KetFlora='$c' WHERE idflora='$id'";
							$hasil=mysqli_query($aqua,$sql);

							if($hasil) {
								echo"<script>window.alert('DATA BERHASIL DI EDIT');;window.location='../admin/flora.php'</script>";
							} 
								else {
									echo $aqua->error;
								}			
						}
					
					echo'
					<form method="POST" action="" enctype="multipart/form-data">
							<div class="row">
								<h4 class="center-align">
									Edit Data Flora
								</h4>
								<div class="row">
									<div class="col s12 m6 l6 input-field">
										<i class="material-icons prefix">account_circle</i>
										<input type="text" name="nama" value="'.$data['NamaFlora'].'" id="icon_prefix">
										<label for="icon_prefix">Nama</label>
									</div>

									<div class="col s12 m6 l6 input-field">
										<i class="material-icons prefix">expand_more</i>
										<select class="" name="jenis" id="jenis">';
											if ($data['JenisFlora']== "steam") 
												echo '<option value="steam" selected>Steam</option>';
											else 
												echo '<option value="steam">Steam</option>';
											if ($data['JenisFlora']== "moss") 
												echo '<option value="moss" selected>Moss</option>';
											else
												echo '<option value="moss">Moss</option>';
											if ($data['JenisFlora']== "lainya")
												echo '<option value="lainnya" selected>Lain - lain</option>';
											else
												echo '<option value="lainnya">Lain - lain</option>';
										echo'
									    </select>
										<label for="jenis">Jenis</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<i class="material-icons">mail_outline</i>
										<input type="text" name="keterangan" value="'.$data['KetFlora'].'" id="icon_prefix">
										<label for="icon_prefix">Keterangan</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field center-align">
										<button class="btn waves-effect waves-light" type="submit" name="edit">Edit<i class="material-icons right">done</i></button>
										<a href="flora.php" class="waves-effect waves-light btn">Batal</a>
									</div>
								</div>
							</div>
					</form>
					';
					?>
				</div>
			</div>
		<!-- FORM EDIT -->

		<br>
	</div>
	<!-- Konten -->

	<!-- Footer -->
	<br>
	<br>
	<footer class="page-footer light-green accent-4 black-text">
			<div class="footer-copyright">
				<div class="container center-align">
					&copy; Aquatiq - materialize 2017
					<br>
					Yudhistira Gilang
				</div>
			</div>
	</footer>
	<!-- Footer -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../asset/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.button-collapse').sideNav();
			$('select').material_select();
		});
	</script>
</body>
</html>