<?php
include('include/config.php');
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp'];
	$password = md5($_POST['password']);

	$query = mysqli_query($konek, "INSERT into pengguna (id_pengguna, nama, email, username, password, no, alamat, hak_akses, tanggal)
    	values ('', '$nama', '$email', '$email', '$password', '$hp', '$alamat', 'Admin', now())");
    if($query){
    	echo "<script>document.location.href='home.php?page=admin';</script>";
    }else{
    	echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>