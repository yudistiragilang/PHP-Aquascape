<?php
// memanggil file config.php
require '../config.php';
?>
<html>
<head>
	<title>Cara Menggunakan Datatables</title>
	<link rel="stylesheet" type="text/css" href="../asset/datatables/DataTables-1.10.16/css/jquery.datatables.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                	<table id="example" class="display table-bordered" align="center" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="col col-md-1 col-sm-1">No</th>
                                <th class="col col-md-2 col-sm-2">Nama</th>
                                <th class="col col-md-2 col-sm-2">Jenis</th>
                                <th class="col col-md-4 col-sm-4">Keterangan</th>
                                <th class="col col-md-2 col-sm-2">Foto</th>
                                <th class="col col-md-1 col-sm-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM fauna";
                        $query = $aqua->query($sql);
                        $no=1;

                        while ($row = $query->fetch_assoc()) :?>
                        	<tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['NamaFauna'];?></td>
                                <td><?php echo $row['JenisFauna'];?></td>
                                <td><?php echo $row['KetFauna'];?></td>
                                <td><?php echo'<img width="100" src="../fauna/'.$row['fotofauna'].'">  ';?></td>
                                <td>
                                    <?php echo'<a class="btn btn-warning" href="efa.php?kode='.$row['idfauna'].'">Edit</a>';?>
                                    <?php echo'<a onclick="return hapus()" href="dfa.php?kode='.$row['idfauna'].'" class="btn btn-danger">Hapus</a>';?>
                                </td>
                            </tr>
                        <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script> -->
    <script src="../asset/datatables/DataTables-1.10.16/js/jquery.min.js"></script>
    <script src="../asset/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

	<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );
	</script>

</body>
</html>