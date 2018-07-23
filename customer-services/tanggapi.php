<?php
session_start();
include('include/config.php');
	$id_komplain = $_POST['id_komplain'];
	$tanggapan = $_POST['tanggapan'];
	$pengirim = $_SESSION['id_user'];

	$query = mysqli_query($konek, "INSERT into tanggapan_komplain (id_tanggapan, tanggapan, pengirim, id_komplain) VALUES ('', '$tanggapan', '$pengirim', '$id_komplain')");
    if($query){
    	echo "<script>document.location.href='home.php?page=detail-komplain&id_komplain=$id_komplain';</script>";
    }else{
    	echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
?>