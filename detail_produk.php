<?php require "header.php"; ?>

<body class="animsition">
	

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
				Men
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Lightweight Jacket
			</span>
		</div>
	</div>
	
	<?php 
		$id = $_GET["id"];
		$sql_s	 = "SELECT *, produk.nama AS napro, kategori.nama AS kapro FROM produk,kategori where produk.id_kategori = kategori.id_kategori AND id_produk='$id'"; 
		
		$query_s = mysqli_query($con, $sql_s); 
		if(mysqli_num_rows($query_s)!=0){ 
			while($row_s=mysqli_fetch_array($query_s)){
				$idProduk = $row_s["id_produk"];
				$namaProduk = $row_s["napro"];
				$hargaProduk = rupiah($row_s["harga"]);
				$fotoProduk = "uploads/".$row_s["foto"];
				
				$deskripsiProduk = $row_s["deskripsi"];
				$kategoriProduk = $row_s["kapro"];
			}
	?>
			<!-- Product Detail -->
			<section class="sec-product-detail bg0 p-t-65 p-b-60">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-7 p-b-30">
							<div class="p-l-25 p-r-30 p-lr-0-lg">
								<div class="wrap-slick3 flex-sb flex-w">
									<div class="wrap-slick3-dots"></div>
									<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

									<div class="slick3 gallery-lb">
										<div class="item-slick3" data-thumb="<?php echo $fotoProduk; ?>">
											<div class="wrap-pic-w pos-relative">
												<img src="<?php echo $fotoProduk; ?>" alt="IMG-PRODUCT">

												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
													<i class="fa fa-expand"></i>
												</a>
											</div>
										</div>

										
									</div>
								</div>
							</div>
						</div>
							
						<div class="col-md-6 col-lg-5 p-b-30">
							<div class="p-r-50 p-t-5 p-lr-0-lg">
								<h4 class="mtext-105 cl2 js-name-detail p-b-14">
									<?php echo $namaProduk?>
									<footer class="blockquote-footer" style="font-size:16px;">Kategori <cite title="Source Title"><?php echo $kategoriProduk; ?></cite></footer>
								
								</h4>

								
								
								<span class="mtext-106 cl2">
									<?php echo $hargaProduk; ?>
								</span>

								<p class="stext-102 cl3 p-t-23">
									<?php echo $deskripsiProduk; ?>
								</p>
								
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
									<form method="POST" action="transaksiProduk.php">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="kuantitas" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										<input type="hidden" name="idProduk" value="<?php echo $idProduk; ?>">
										<input type="submit"  class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 " value="Beli Barang">
											
									</form>
									</div>
								</div>
								
								
								<!--  -->
								<div class="flex-w flex-m p-l-100 p-t-40 respon7">
									<div class="flex-m bor9 p-r-10 m-r-11">
										<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
											<i class="zmdi zmdi-favorite"></i>
										</a>
									</div>

									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
										<i class="fa fa-facebook"></i>
									</a>

									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
										<i class="fa fa-twitter"></i>
									</a>

									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					</div>

				
			</section>


	<?php

	}
	?>


<?php require "footer.php"; ?>