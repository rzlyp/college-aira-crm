<?php
		require "koneksi.php";
		session_start();
		if(isset($_POST['login'])){
			$username = $_POST["username"];
			$password = $_POST["password"];
		
			$sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
			
			$query_s = mysqli_query($con, $sql); 
				if(mysqli_num_rows($query_s)!=0){ 
					while($row_s=mysqli_fetch_array($query_s)){
						
						$_SESSION["id_pengguna"] = $row_s["id_pengguna"];
						$_SESSION["nama"] = $row_s["nama"]; 
						$_SESSION["email"] = $row_s["email"];
						$_SESSION["password"] = $row_s["password"];						
						$_SESSION["username"] = $row_s["username"];
						
						$_SESSION["no_telp"] = $row_s["no"];
						
						$_SESSION["alamat"] = $row_s["alamat"];
						
						$_SESSION["hak_akses"] = $row_s["hak_akses"];
						
						$_SESSION["tanggal_daftar"] = $row_s["tanggal"];
						$_SESSION["status_login"] = 1;
					}
					header("Location: index.php");
				}
				
		}
?>