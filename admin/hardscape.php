
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
	<title>Data Hardscape</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../asset/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/datatables/datatables.min.css">
	<link rel="shortcut icon" href="../favicon.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		/*body{
			background: gambar/back.jpg;
		}*/
	</style>
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
					<li class="active"><a href="hardscape.php">Hardscape</a></li>
					<li><a href="perlengkapan.php">Perlengkapan</a></li>
					<li><a href="flora.php">Flora</a></li>
					<li><a href="fauna.php">Fauna</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				<ul class="side-nav" id="mobile-menu">
					<li class="active"><a href="hardscape.php">Hardscape</a></li>
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

		<!-- MODAL -->
			<div id="modal1" class="modal">
			    <div class="modal-content">
					 <?php

						if(isset($_POST["simpan"])) {

							$a=$_POST["nama"];
							$b=$_POST["fungsi"];
							$c=$_FILES["foto"]["name"];

							if (strlen($c)>0) {
								if (is_uploaded_file($_FILES["foto"]["tmp_name"])) {
									move_uploaded_file ($_FILES["foto"]["tmp_name"], "../hardscape/".$c);
								}
							}

							$sql="INSERT INTO hardscape VALUES('','$a','$b','$c')";
							$hasil=mysqli_query($aqua,$sql);

							if($hasil) {
								echo"<script>window.alert('DATA BERHASIL DISIMPAN');;window.location='../admin/hardscape.php'</script>";
							} 
								else {
									echo $aqua->error;
								}			
						}
					
					echo'
					<form method="POST" action="" enctype="multipart/form-data">
							<div class="row">
								<h4 class="center-align">
									Tambah Data Hardscape
								</h4>
								<div class="row">
									<div class="col s12 m6 l6 input-field">
										<i class="material-icons prefix">account_circle</i>
										<input type="text" name="nama" required id="icon_prefix">
										<label for="icon_prefix">Nama</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<textarea id="fungsi" name="fungsi" required class="materialize-textarea" data-length="200"></textarea>
			            				<label for="fungsi">Fungsi Hardscape</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
								    	<input type="file" required name="foto" id="foto">
								    </div>
							    </div>

							    <div class="row">
									<div class="input-field center-align">
										<button class="btn waves-effect waves-light" type="submit" name="simpan">Simpan<i class="material-icons right">send</i></button>
									</div>
								</div>
							</div>
					</form>
					';
					?>

				</div>
			</div>
		<!-- MODAL -->

		<div class="row">
			<a class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#modal1"><i class="material-icons">add</i></a>

			
			<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah</a> -->
		</div>
		<div class="row">

			<table id="datafauna" class="display responsive-table" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th>No</th>
		                <th>Nama</th>
		                <th>Fungsi</th>
		                <th>Foto</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
					<?php
					$sql = "SELECT * FROM hardscape";
					$query = $aqua->query($sql);
					$no =1;
					while ($row = $query->fetch_array()){;?>
					    <tr>
					    	<td><?php echo $no++;?></td>
					        <td><?php echo $row['NamaHardscape'];?></td>
					        <td><?php echo $row['FungsiHardscape'];?></td>
					        <td><?php echo'<img width="100" src="../hardscape/'.$row['fotohardscape'].'">  ';?></td>
					        <td>
					        	<?php echo'<a class="btn-floating waves-effect waves-light blue" href="eha.php?kode='.$row['idhardscape'].'"><i class="material-icons">mode_edit</i></a>';?>
					        	<?php echo'<a onclick="return hapus()" href="dha.php?kode='.$row['idhardscape'].'" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>';?>
					        </td>
					    </tr>
					<?php };?>
				</tbody>
		    </table>

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
	<script src="../asset/js/jquery.dataTables.min.js"></script>
	<script src="../asset/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.button-collapse').sideNav();
			$('select').material_select();
			$('.modal').modal();
			$('#datafauna').DataTable();
		});
	</script>
	<script type="text/javascript" language="JavaScript">
		function hapus(){
			takon = confirm("Anda Yakin Akan Menghapus Data ?");
				if (takon == true) return true;
				else return false;
				}
	</script>
</body>
</html>