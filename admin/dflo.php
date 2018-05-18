<?php
	Include "../config.php";
			
			$n=$_GET['kode'];

			$data = $aqua->prepare("SELECT fotoflora FROM flora WHERE idflora=?");
			$data->bind_param('i', $n);
			$data->execute();
			$data->bind_result($foto);

			while ($data->fetch()){
				$target= "../flora/$foto";
				if(file_exists($target)){
					unlink($target);
				}
				else{
					echo'Gagal hapus gambar';
				}
			}

			$SQL = $aqua->query("DELETE FROM flora WHERE idflora='".$n."'");
			if ($SQL) {
				echo"<script>window.alert('DATA BERHASIL DIHAPUS');window.location='../admin/flora.php'</script>";
			}else {
				echo $aqua->error;
			}
?>