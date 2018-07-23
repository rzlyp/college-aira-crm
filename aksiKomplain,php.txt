<?php
		require "koneksi.php";
		session_start();
		
		if(!empty($_SESSION['status_login']) && $_SESSION['status_login'] !=0 ){
			$nama  = $_POST["namalengkap"];
			$email = $_POST["email"];
			$nomorponsel  = $_POST["nomorponsel"];
			$alamat  = $_POST["alamat"];
			$kurir  = $_POST["kurir"];
			$totalBayar  = $_POST["totalBayar"];
			$ongkir      = $_POST["ongkir"];
			$catatan      = $_POST["catatan"];
			$id_pengguna      = $_POST["id_pengguna"];
			$id_produk      = $_POST["id_produk"];
			$kuantitas      = $_POST["kuantitas"];
			$invoice = "INV/".date("Y-m-d")."/".rand(5, 1000);
			
			$sql = "INSERT INTO invoice (id_invoice, nama, email, no_ponsel, alamat, kurir, total_bayar, ongkir, catatan, tanggal, id_pengguna, status_invoice)
			VALUES ('$invoice', '$nama', '$email', '$nomorponsel', '$alamat', '$kurir', '$totalBayar', '$ongkir', '$catatan', now(), '$id_pengguna', 0)";
			
			$sql1 = "INSERT INTO detail_invoice (jumlah, id_invoice, id_produk)
			VALUES ('$kuantitas', '$invoice', '$id_produk')";

			
			if (($con->query($sql) === TRUE) && ($con->query($sql1) === TRUE)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
		
?>