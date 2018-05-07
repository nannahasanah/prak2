<?php
	
		$link = mysqli_connect("localhost","root","","ina");
		
		if ($link === false ){

			die ("gagal koneksi : " . mysql_connect_error ());

		}

		echo "sukses";



	?> 