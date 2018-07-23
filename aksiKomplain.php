<?php
		require "koneksi.php";
		session_start();
		
		if(!empty($_SESSION['status_login']) && $_SESSION['status_login'] !=0 ){
		
			$invoice = $_POST['nomor_invoice'];
			
			$pesan = $_POST['pesan'];
			
			$sql = "INSERT INTO komplain (pesan, tanggal, id_invoice)
			VALUES ('$pesan', now(), '$invoice')";
			
			
			if (($con->query($sql) === TRUE)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
		
?>