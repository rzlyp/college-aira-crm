<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/LOGO.JPG"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <!--	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	
	<?php 
	session_start();
	include "koneksi.php"; ?>
	
	<?php 
		$sql_s	 = "SELECT * FROM invoice where status_invoice=0 AND id_pengguna = '$_SESSION[id_pengguna]'";
		
		$query_s = mysqli_query($con, $sql_s); 
		if(mysqli_num_rows($query_s)!=0){ 
			while($row_s=mysqli_fetch_array($query_s)){
				$idInvoice = $row_s["id_invoice"];
				$totalBayar = $row_s["total_bayar"];
			}
		}
	?>



	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/LOGO.JPG" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
						
							<li>
								<a href="produk.php">Semua Produk</a>
							</li>
							
							
							<li>
								<a href="hubungi-kami.php">Hubungi Kami</a>
							</li>
							
							
							
							<li>
								<a href="tentang-kami.php" data-toggle="modal" data-target="#formkonfirmasiBayar">Konfirmasi Transfer</a>
							</li>
							
							<li class="dropdown">
								<?php 
									if(!empty($_SESSION["status_login"]) && $_SESSION["status_login"]==1){
								?>	
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>
								<?php echo "Halo, ".$_SESSION["nama"];?>
									</b></a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="#">Profil</a>
										  <a class="dropdown-item" href="#">Profil</a>
										  <a class="dropdown-item disabled" href="#">Disabled link</a>
										  <a class="dropdown-item" href="#">Logout</a>
										</div>

								<?php	} 
								
								else{
										
								?>
								
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
								<ul id="login-dp" class="dropdown-menu">
									<li>
										 <div class="row">
												<div class="col-md-12">
													
													 <form class="form" role="form" method="post" action="aksilogin.php" accept-charset="UTF-8" id="login-nav">
															<div class="form-group">
																 <label class="sr-only" for="exampleInputEmail2">Username</label>
																 <input type="text" name="username" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
															</div>
															<div class="form-group">
																 <label class="sr-only" for="exampleInputPassword2">Password</label>
																 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
																 <div class="help-block text-left" style="margin-top:5px;"><a href="">Forget the password ?</a></div>
															</div>
															<div class="form-group">
																 <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
															</div>
															
													 </form>
													 <hr>
													<div class="social-buttons">
														<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
														<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
													</div>
													
												<div class="bottom text-center">
													Belum memiliki akun? <br><a href="#"><b>Daftar Member</b></a>
												</div>	
												</div>
										 </div>
									</li>
								</ul>
								<?php 
									}
								?>
							</li>



						</ul>
					</div>	

					<!-- Icon header -->
					
				</nav>
			</div>	
		</div>
		
		<?php 
		function rupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
		?>
		
			<!-- Modal -->
<div class="modal fade" id="formkonfirmasiBayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-top:100px;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Total Tagihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="POST" action="aksiKonfirmasi.php" enctype="multipart/form-data">
        <div class="col-sm-12 form-group">
			<label for="labelNama">Nominal Transfer</label>
			<input name="id_pengguna" type="text"  value="<?php echo $_SESSION['id_pengguna']; ?>" class="form-control">
			<input name="id_invoice" type="text"  value="<?php echo $idInvoice; ?>" class="form-control">
			<input name="totalBayar" type="text"  value="<?php echo $totalBayar; ?>" class="form-control">
		</div>
        <div class="col-sm-12 form-group">
			<label for="labelNama">Atas Nama</label>
			<input name="atasnama" type="text" placeholder="Atas Nama"  class="form-control">
		</div>
		
		<div class="col-sm-12 form-group">
			<label for="labelNama">Bukti Pembayaran</label>
			<input  type="file"  name="bukti" class="form-control">
		</div>
      </div>
      <div class="modal-footer">
		<input type="submit" class="col-md-12 btn btn-success" value="Konfirmasi Transfer">
									
      </div>
	  </form>
    </div>
  </div>
</div>	

	
	