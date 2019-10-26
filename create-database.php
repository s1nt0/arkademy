<?php
	include "koneksi.php";
	
	$sql = "CREATE DATABASE profile";
	
	if($koneksi->query($sql) === TRUE){
		echo "DATABASE berhasil dibuat";
	}else{
		echo "DATABASE gagal dibuat";
	}
?>