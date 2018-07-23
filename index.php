
	<?php 
		require "header.php";

	?>
	
	

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
<div class="container text-center my-3">
	<div class="row" style=" position:relative; overflow:hidden; max-height:380px; ">
		<div class="col-sm-3  p-b-30 m-lr-auto">
			<div class="block1 wrap-pic-w" style="background-image:url(images/promoted-brand.jpg); background-size:cover; background-position:center center; min-height:360px;">
				
						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Produk Terbaru
								</span>

								<span class="block1-info stext-102 trans-04">
									Juli 2018
								</span>
							</div>


						</a>
					</div>
		</div>
		<div class="col-sm-9" style="padding:0px;">
			<div  class="carousel slide w-100" style="padding:0px;" data-ride="carousel"  data-interval="false" id="produk-terbaru">
				<div class="carousel-inner w-100" role="listbox">
					<div class="carousel-item row no-gutters active" style="padding:0px 0px 0px 40px;">
						<?php 
							$sql_s	 = "SELECT * FROM produk LIMIT 0, 3"; 
							$query_s = mysqli_query($con, $sql_s); 
							if(mysqli_num_rows($query_s)!=0){ 
								while($row_s=mysqli_fetch_array($query_s)){
								$idProduk = $row_s["id_produk"];
								$namaProduk = $row_s["nama"];
								$fotoProduk = "uploads/".$row_s["foto"];
								$hargaProduk = rupiah($row_s["harga"]);
						?>
								<div class="col-sm-4 float-left">
									<div class="card" style="width: 18rem;">
									  <div style=" overflow:hidden; height:215px;">
										<img class="card-img-top" src="<?php echo $fotoProduk?>" alt="Card image cap">
									  </div>
									  <div class="card-body">
										<h5 class="card-title text-left">
											<?php echo $namaProduk; ?>
										</h5>
										<p class="card-text text-left" style="font-size:16px;">
											<b><?php echo $hargaProduk?></b>
										</p>
										<a href="detail_produk.php?idProduk=<?php echo $id_produk; ?>" class="btn btn-primary btn-sm" style="float:left; margin-top:10px;">
										Lihat Produk</a>
									  </div>
									</div>
								</div>
								
						<?php						
								}	  
									  
							}else{ 
								
									$message="This product id it's invalid!"; 
									  
							} 
						?>
						</div>
					<div class="carousel-item row no-gutters"  style="padding:0px 0px 0px 40px;">
						<?php 
							$sql_s	 = "SELECT * FROM produk LIMIT 3, 3"; 
							$query_s = mysqli_query($con, $sql_s); 
							if(mysqli_num_rows($query_s)!=0){ 
								while($row_s=mysqli_fetch_array($query_s)){
								$idProduk = $row_s["id_produk"];
								$namaProduk = $row_s["nama"];
								$fotoProduk = "uploads/".$row_s["foto"];
								$hargaProduk = rupiah($row_s["harga"]);
						?>
								<div class="col-sm-4 float-left">
									<div class="card" style="width: 18rem;">
									  <div style=" overflow:hidden; height:215px;">
										<img class="card-img-top" src="<?php echo $fotoProduk?>" alt="Card image cap">
									  </div>
									  <div class="card-body">
										<h5 class="card-title text-left">
											<?php echo $namaProduk; ?>
										</h5>
										<p class="card-text text-left" style="font-size:16px;">
											<b><?php echo $hargaProduk?></b>
										</p>
										<a href="detail_produk.php?idProduk=<?php echo $id_produk; ?>" class="btn btn-primary btn-sm" style="float:left; margin-top:10px;">
										Lihat Produk</a>
									  </div>
									</div>
								</div>
								
						<?php						
								}	  
									  
							}else{ 
								
									$message="This product id it's invalid!"; 
									  
							} 
						?>
					</div>
				</div>
				<a class="carousel-control-prev" href="#produk-terbaru" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#produl-terbaru" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
		
	</div>

</div>



<div class="container text-center my-3">
	<div class="row" style=" position:relative; overflow:hidden; max-height:380px; ">
		<div class="col-sm-3  p-b-30 m-lr-auto">
			<div class="block1 wrap-pic-w" style="background-image:url(images/promoted-brand.jpg); background-size:cover; background-position:center center; min-height:360px;">
				
						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Produk Terlaris
								</span>

								<span class="block1-info stext-102 trans-04">
									Juli 2018
								</span>
							</div>


						</a>
					</div>
		</div>
		<div class="col-sm-9" style="padding:0px;">
			<div  class="carousel slide w-100" style="padding:0px;" data-ride="carousel"  data-interval="false" id="produk-terlaris">
				<div class="carousel-inner w-100" role="listbox">
					<div class="carousel-item row no-gutters active" style="padding:0px 0px 0px 40px;">
						
						<?php 
							$sql_s	 = "SELECT * FROM produk LIMIT 0, 3"; 
							$query_s = mysqli_query($con, $sql_s); 
							if(mysqli_num_rows($query_s)!=0){ 
								while($row_s=mysqli_fetch_array($query_s)){
								$idProduk = $row_s["id_produk"];
								$namaProduk = $row_s["nama"];
								$fotoProduk = "uploads/".$row_s["foto"];
								$hargaProduk = rupiah($row_s["harga"]);
						?>
								<div class="col-sm-4 float-left">
									<div class="card" style="width: 18rem;">
									  <div style=" overflow:hidden; height:215px;">
										<img class="card-img-top" src="<?php echo $fotoProduk?>" alt="Card image cap">
									  </div>
									  <div class="card-body">
										<h5 class="card-title text-left">
											<?php echo $namaProduk; ?>
										</h5>
										<p class="card-text text-left" style="font-size:16px;">
											<b><?php echo $hargaProduk?></b>
										</p>
										<a href="detail_produk.php?idProduk=<?php echo $id_produk; ?>" class="btn btn-primary btn-sm" style="float:left; margin-top:10px;">
										Lihat Produk</a>
									  </div>
									</div>
								</div>
								
						<?php						
								}	  
									  
							}else{ 
								
									$message="This product id it's invalid!"; 
									  
							} 
						?>
					</div>
					<div class="carousel-item row no-gutters"  style="padding:0px 0px 0px 40px;">
						<?php 
							$sql_s	 = "SELECT * FROM produk LIMIT 0, 3"; 
							$query_s = mysqli_query($con, $sql_s); 
							if(mysqli_num_rows($query_s)!=0){ 
								while($row_s=mysqli_fetch_array($query_s)){
								$idProduk = $row_s["id_produk"];
								$namaProduk = $row_s["nama"];
								$fotoProduk = "uploads/".$row_s["foto"];
								$hargaProduk = rupiah($row_s["harga"]);
						?>
								<div class="col-sm-4 float-left">
									<div class="card" style="width: 18rem;">
									  <div style=" overflow:hidden; height:215px;">
										<img class="card-img-top" src="<?php echo $fotoProduk?>" alt="Card image cap">
									  </div>
									  <div class="card-body">
										<h5 class="card-title text-left">
											<?php echo $namaProduk; ?>
										</h5>
										<p class="card-text text-left" style="font-size:16px;">
											<b><?php echo $hargaProduk?></b>
										</p>
										<a href="detail_produk.php?idProduk=<?php echo $id_produk; ?>" class="btn btn-primary btn-sm" style="float:left; margin-top:10px;">
										Lihat Produk</a>
									  </div>
									</div>
								</div>
								
						<?php						
								}	  
									  
							}else{ 
								
									$message="This product id it's invalid!"; 
									  
							} 
						?>
					</div>
				</div>
				<a class="carousel-control-prev" href="#produk-terlaris" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#produk-terlaris" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
		
	</div>

</div>


<div class="sec-banner bg0 p-t-80 p-b-50" style="padding-top:0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="uploads/jilbab_segiempat.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									SEGI EMPAT
								</span>

								<span class="block1-info stext-102 trans-04">
									Juli 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Lihat Produk Segiempat
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="uploads/jilbab_pashmina.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Pashmina
								</span>

								<span class="block1-info stext-102 trans-04">
									Juli 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Lihat Produk Pashmina
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="uploads/jilbab_instan.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Instan
								</span>

								<span class="block1-info stext-102 trans-04">
									Juli 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Lihat Produk Instan
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<div class="container text-center my-3">
<div class="col-sm-12" > 
	<h4 class="text-center"> Testimoni Member</h4>
</div>
<div class="col-sm-12" style="padding:20px;">
			<div  class="carousel slide w-100" style="padding:0px;" data-ride="carousel"  data-interval="false" id="testimoni">
				<div class="carousel-inner w-100" role="listbox">
						<?php 
							$sql_s	 = "SELECT * FROM testimoni, pengguna where testimoni.id_pengguna = pengguna.id_pengguna LIMIT 0, 5"; 
							$query_s = mysqli_query($con, $sql_s); 
							if(mysqli_num_rows($query_s)!=0){ 
								while($row_s=mysqli_fetch_array($query_s)){
								$idPengguna = $row_s["id_pengguna"];
								$namaPengguna = $row_s["nama"];
								//$fotoProduk = "uploads/".$row_s["foto"];
								$testimoni = $row_s["testimoni"];
						?>
					
					<div class="carousel-item row no-gutters active" >
						<center>
							<div class="block1 wrap-pic-w" style="background-image:url(images/promoted-brand.jpg); background-size:cover; background-position:center center; width:130px; height:130px;"></div>
						</center>
						<br>
						
						<blockquote class="blockquote">
						  <p class="mb-0"> <?php echo $testimoni; ?> </p>
						  <footer class="blockquote-footer"><cite title="Source Title"><?php echo $namaPengguna; ?></cite></footer>
						</blockquote>
						
						
					</div>
					<?php 
							}
						}
					?>
					<div class="carousel-item row no-gutters"  style="padding:0px 0px 0px 40px;">
						<center>
							<div class="block1 wrap-pic-w" style="background-image:url(images/promoted-brand.jpg); background-size:cover; background-position:center center; width:130px; height:130px;"></div>
						</center>
						<br>
						<p> 
								“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.” 
						</p>
						
					</div>
				</div>
				<a class="carousel-control-prev" href="#testimoni" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#testimoni" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
		
</div>

<?php require "footer.php"; ?>	