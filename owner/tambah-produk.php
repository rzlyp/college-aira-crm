<?php
include('include/config.php');
$target_dir = "../uploads/";
$uploadfile = $target_dir . basename($_FILES['foto_produk']['name']);
$fileName = $_FILES['foto_produk']['name'];

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];
	$stok = $_POST['stok'];
	$kategori = $_POST['kategori'];

if (move_uploaded_file($_FILES['foto_produk']['tmp_name'], $uploadfile)) {
    $query = mysqli_query($konek, "INSERT into produk (id_produk, nama, foto, harga, deskripsi, stok, potongan_harga, tanggal_dibuat, tanggal_diperbaharui, id_kategori)
    	values ('', '$nama', '$fileName', '$harga', '$deskripsi', '$stok', '', now(), now(), '$kategori')");
    if($query){
    	echo "<script>document.location.href='home.php?page=produk&id_kategori=$kategori';</script>";
    }else{
    	echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }
} else {
    echo "Possible file upload attack!\n";
}

?>