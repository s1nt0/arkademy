<?php
	include "koneksi.php";
	
	if(isset($_POST['submit'])){
		$id_user = $_POST["id_user"];
		$nama = $_POST["name"];
		$role = $_POST["role"];
		$availability = $_POST["availability"];
		$age = $_POST["age"];
		$location = $_POST["location"];
		$years_expereience = $_POST["years"];
		$email = $_POST["email"];
		
		$sql = "UPDATE user SET nama = '$nama',
				role = '$role',
				availability = '$availability',
				age = '$age',
				location = '$location',
				years_expereience = '$years_expereience',
				email = '$email'
				WHERE id = '$id_user'";
				
				if($koneksi->query($sql) == TRUE){
					echo "Update data Berhasil";
				}else{
					echo "Update data Gagal";
				}
	}
?>