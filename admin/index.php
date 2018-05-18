
<?php
	include('../config.php');
	include('../fungsi.php');

	session_start(); // Menciptakan session

	if(cek_login($aqua) == false){
		header('location: ../index.php');
		exit();	
	}

	$stmt = $aqua->prepare("SELECT username FROM users WHERE id = ?");
	$stmt->bind_param('i', $_SESSION['id']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($username);
	$stmt->fetch();

	// $sql="SELECT nama FROM users WHERE username='$username'";
	// $nama=mysqli_query($aqua,$sql);

	$SQL_DATA = $aqua->query("SELECT * FROM users WHERE username='".$username."'");
		if ($SQL_DATA->num_rows > 0) {
		while($b=$SQL_DATA->fetch_array()){
			$nama=$b['nama'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../asset/css/materialize.min.css">
	<link rel="shortcut icon" href="../favicon.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		/*body{
			background: gambar/back.jpg;
		}*/
	</style>
</head>

<body background="../back.jpg">

	<!-- Menu -->
	<!-- <div class="navbar-fixed"> -->
		<!-- menu dropdown1 -->
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
					<li><a href="flora.php">Flora</a></li>
					<li><a href="fauna.php">Fauna</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				<ul class="side-nav" id="mobile-menu">
					<li><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li><a href="flora.php">Flora</a></li>
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

		<div class="row">
			<div class="col s12 white">
				<h5>Hallo ! ! ! <?php echo $nama; ?> </h5>
				<p>
					<span>
						Gunakan dengan bijak ya 
					</span>
				</p>
			</div>
		</div>
		<div class="row">

			<div class="col s12 m3 l3 light-green accent-1">
				<div class="card blue-grey darken-1 center-align">
		            <div class="card-content white-text">
		              <span class="card-title">Hardscape</span>
		              <img src="../gambar/dragonstone.jpg" class="responsive-img" alt="">
		            </div>
		            <div class="card-action">
		              <a href="hardscape.php" class="orange darken-4 waves-effect waves-light btn">Kelola</a>
		            </div>
		        </div>
		    </div>

		    <div class="col s12 m3 l3 light-green accent-1">
		        <div class="card blue-grey darken-1 center-align">
		            <div class="card-content white-text">
		              <span class="card-title">Perlengkapan</span>
		              <img src="../gambar/co2.png" class="responsive-img" alt="">
		            </div>
		            <div class="card-action">
		              <a href="perlengkapan.php" class="orange darken-4 waves-effect waves-light btn">Kelola</a>
		            </div>
		        </div>
		    </div>

		    <div class="col s12 m3 l3 light-green accent-1">
		        <div class="card blue-grey darken-1 center-align">
		            <div class="card-content white-text">
		              <span class="card-title">Flora</span>
		              <img src="../gambar/anubias.jpg" class="responsive-img" alt="">
		            </div>
		            <div class="card-action">
		              <a href="flora.php" class="orange darken-4 waves-effect waves-light btn">Kelola</a>
		            </div>
		        </div>
		    </div>

		    <div class="col s12 m3 l3 light-green accent-1">
		        <div class="card blue-grey darken-1 center-align">
		            <div class="card-content white-text">
		              <span class="card-title">Fauna</span>
		              <img src="../gambar/platy.png" class="responsive-img" alt="">
		            </div>
		            <div class="card-action">
		              <a href="fauna.php" class="orange darken-4 waves-effect waves-light btn">Kelola</a>
		            </div>
		        </div>
			</div>
			
		</div>
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
			$('.materialboxed').materialbox();
			$('select').material_select();
		})
	</script>
</body>
</html>