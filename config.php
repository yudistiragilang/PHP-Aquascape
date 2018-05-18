

<?php

	$host="localhost";
	$user="root";
	$pass="root";
	$db="aqua";

	$aqua = new mysqli($host, $user, $pass, $db);

			/* Cek koneksi database */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}


?>
