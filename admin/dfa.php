<?php
	Include "../config.php";
			
			$n=$_GET['kode'];

			$data = $aqua->prepare("SELECT fotofauna FROM fauna WHERE idfauna=?");
			$data->bind_param('i', $n);
			$data->execute();
			$data->bind_result($foto);

			while ($data->fetch()){
				$target= "../fauna/$foto";
				if(file_exists($target)){
					unlink($target);
				}
				else{
					echo'Gagal hapus gambar';
				}
			}

			$SQL = $aqua->query("DELETE FROM fauna WHERE idfauna='".$n."'");
			if ($SQL) {
				echo"<script>window.alert('DATA BERHASIL DIHAPUS');window.location='../admin/fauna.php'</script>";
			}else {
				echo $aqua->error;
			}
?>