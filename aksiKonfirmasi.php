<?php
		require "koneksi.php";
		session_start();
		
		if(!empty($_SESSION['status_login']) && $_SESSION['status_login'] !=0 ){
			
			$targetDir = "uploads/";
			$fileName = basename($_FILES["bukti"]["name"]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
			$id_pengguna = $_POST['id_pengguna'];
			$id_invoices = $_POST['id_invoice'];
			$atas_nama  = $_POST['atasnama'];
			$allowTypes = array('jpg','png','jpeg','gif','pdf');
		
				// Upload file to server
				if(move_uploaded_file($_FILES["bukti"]["tmp_name"], $targetFilePath)){
					// Insert image file name into database
					$insert = $con->query("INSERT into bukti_pembayaran (bukti_foto, id_pengguna, id_invoice, atas_nama) 
							  VALUES ('".$fileName."', $id_pengguna, '$id_invoices', '$atas_nama')");
					echo "INSERT into bukti_pembayaran (bukti_foto, id_pengguna, id_invoice, atas_nama) 
							  VALUES ('".$fileName."', $id_pengguna, $id_invoices, $atas_nama)";
					if($insert){
						$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
					}else{
						$statusMsg = "File upload failed, please try again.";
					} 
					
					//UPDATE STATUS INVOICES JADI 1
					$sql = "UPDATE invoice SET status_invoice='1' WHERE id_invoice='$id_invoices'";

					if ($con->query($sql) === TRUE) {
						echo "Record updated successfully";
					} else {
						echo "Error updating record: " . $con->error;
					}
				}else{
					$statusMsg = "Sorry, there was an error uploading your file.";
				}
			
			
			
		}
		
		
?>