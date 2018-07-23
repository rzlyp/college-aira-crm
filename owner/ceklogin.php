<?php 
	session_start();
	include('include/config.php');

	if(!empty($_POST)){
		extract($_POST);
		$password = md5($password);
		$q = mysqli_query($konek, "SELECT * FROM pengguna WHERE email='$email' AND password='$password' AND hak_akses='Owner'");
		if($q){
			$r = mysqli_fetch_object($q);
			$_SESSION['is_login'] = true;
			$_SESSION['id_user'] = $r->id_pengguna;
			$_SESSION['nama'] = $r->nama;
			echo "<script>
				document.location.href= 'home.php';
			</script>";
		}else{
			echo "<script>
				alert('Wrong Password');
				document.location.href= 'index.php';
			</script>";
		}
	}
?>