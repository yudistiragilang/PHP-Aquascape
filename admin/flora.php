
<?php
	include('../config.php');
	include('../fungsi.php');

	session_start(); // Menciptakan session

	if(cek_login($aqua) == false){
		header('location: ../index.php');
		exit();	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Flora</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../asset/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/datatables/datatables.min.css">
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

		<!-- MODAL -->
			<div id="modal1" class="modal">
			    <div class="modal-content">
					 <?php

						if(isset($_POST["simpan"])) {

							$a=$_POST["nama"];
							$b=$_POST["jenis"];
							$c=$_POST["keterangan"];
							$d=$_FILES["foto"]["name"];

							if (strlen($d)>0) {
								if (is_uploaded_file($_FILES["foto"]["tmp_name"])) {
									move_uploaded_file ($_FILES["foto"]["tmp_name"], "../flora/".$d);
								}
							}

							$sql="INSERT INTO flora VALUES('','$a','$b','$c','$d')";
							$hasil=mysqli_query($aqua,$sql);

							if($hasil) {
								echo"<script>window.alert('DATA BERHASIL DISIMPAN');;window.location='../admin/flora.php'</script>";
							} 
								else {
									echo $aqua->error;
								}			
						}
					
					echo'
					<form method="POST" action="" enctype="multipart/form-data">
							<div class="row">
								<h4 class="center-align">
									Tambah Data Flora
								</h4>
								<div class="row">
									<div class="col s12 m4 l6 input-field">
										<i class="material-icons prefix">account_circle</i>
										<input type="text" name="nama" required id="icon_prefix">
										<label for="icon_prefix">Nama</label>
									</div>
									<div class="col s12 m4 l6 input-field">
										<i class="material-icons prefix">expand_more</i>
										<select class="" name="jenis" id="jenis">
											<option value="steam">Steam</option>
									    	<option value="moss">Moss</option>
									    	<option value="lainnya">Lain - lain</option>
									    </select>
										<label for="jenis">Jenis</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<textarea id="keterangan" required name="keterangan" class="materialize-textarea" data-length="150"></textarea>
			            				<label for="keterangan">Keterangan Flora</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
								    	<input type="file" required name="foto" id="icon_p">
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

		<!-- tombol tambah -->
		<div class="row">
			<a class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
		</div>
		<!-- tombol tambah -->

	<!-- TAMPIL DATATABLES -->
		<div class="row">

			<table id="dataflora" class="display responsive-table" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th>No</th>
		                <th>Nama</th>
		                <th>Jenis</th>
		                <th>Keterangan</th>
		                <th>Foto</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
					<?php
					$sql = "SELECT * FROM flora";
					$query = $aqua->query($sql);
					$no =1;
					while ($row = $query->fetch_array()){;?>
					    <tr>
					    	<td><?php echo $no++;?></td>
					        <td><?php echo $row['NamaFlora'];?></td>
					        <td><?php echo $row['JenisFlora'];?></td>
					        <td><?php echo $row['KetFlora'];?></td>
					        <td><?php echo'<img width="100" src="../flora/'.$row['fotoflora'].'">  ';?></td>
					        <td>
					        	<?php echo'<a class="btn-floating waves-effect waves-light blue" href="eflo.php?kode='.$row['idflora'].'"><i class="material-icons">mode_edit</i></a>';?>
					        	<?php echo'<a onclick="return hapus()" href="dflo.php?kode='.$row['idflora'].'" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>';?>
					        </td>
					    </tr>
					<?php };?>
				</tbody>
		    </table>

		</div>
		<!-- TAMPIL DATATABLES -->
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
			$('.datepicker').pickadate({
				selectMonths : true,
				selectYears : 10
			});

			$('.modal').modal();
			$('#dataflora').DataTable();
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