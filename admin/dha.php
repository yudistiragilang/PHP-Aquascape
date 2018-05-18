<?php
	Include "../config.php";
			
			$n=$_GET['kode'];

			$data = $aqua->prepare("SELECT fotohardscape FROM hardscape WHERE idhardscape=?");
			$data->bind_param('i', $n);
			$data->execute();
			$data->bind_result($foto);

			while ($data->fetch()){
				$target= "../hardscape/$foto";
				if(file_exists($target)){
					unlink($target);
				}
				else{
					echo'Gagal hapus gambar';
				}
			}

			$SQL = $aqua->query("DELETE FROM hardscape WHERE idhardscape='".$n."'");
			if ($SQL) {
				echo"<script>window.alert('DATA BERHASIL DIHAPUS');window.location='../admin/hardscape.php'</script>";
			}else {
				echo $aqua->error;
			}
?>