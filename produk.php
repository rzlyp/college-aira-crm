<?php require "header.php"; ?>
<body class="animsition" >
	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140" style="margin-top:130px;">
		<div class="container">
			<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search">
					<input type="text" class="col-md-8 form-control" placeholder="Search for snippets" />
					<select class="form-control col-md-3 " style="border-left: 0px !important; border-right:0px !important;">
											<option value="0" selected>Semua Kategori</option>
											<option value="1">Featured</option>
											<option value="2">Most popular</option>
											<option value="3">Top rated</option>
											<option value="4">Most commented</option>
					</select>
					
					<button type="button" class="col-md-1 btn btn-primary" style="border-top-left-radius:0em !important; border-bottom-left-radius:0em !important; border-left: 0px !important;">
						<i class="fa fa-search"></i>
					</button>
                   
                </div>
          </div>
        </div>
	</div>
			
		<br>

			<div class="row isotope-grid">
				<?php 
					$sql_s	 = "SELECT * FROM produk order by id_produk DESC"; 
					$query_s = mysqli_query($con, $sql_s); 
					if(mysqli_num_rows($query_s)!=0){ 
						while($row_s=mysqli_fetch_array($query_s)){
							$idProduk = $row_s["id_produk"];
							$namaProduk = $row_s["nama"];
							$hargaProduk = rupiah($row_s["harga"]);
							$fotoProduk = "uploads/".$row_s["foto"];
							
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2 box-produk">
						<div class="block2-pic hov-img0" style="height:250px;">
							<img src="<?php echo $fotoProduk; ?>" alt="IMG-PRODUCT">
								
							
						</div>

						<div class="block2-txt flex-w flex-t p-t-14" style="padding:10px 10px;">
							<div class="block2-txt-child1 flex-col-l ">
								<div style="height:23px; overflow:hidden;">
									<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $namaProduk; ?>
									</a>
								</div>
								<span class="stext-105 cl3">
									<?php echo $hargaProduk; ?>
								</span>
							</div>

							
							<center>
							<div class="col-sm-1" style="margin-top:10px;">
							<a href="detail_produk.php?id=<?php echo $idProduk?>" class="btn btn-primary" >
								Beli Sekarang
							</a>
							</div>
							</center>
						</div>
					</div>
				</div>
				
				<?php 
						}
					}
				?>
			</div>

			<!-- Load more -->
			<div class="pull-right">
				<nav aria-label="Page navigation example " >
				  <ul class="pagination justify-content-end ">
					<li class="page-item disabled">
					  <a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					  <a class="page-link" href="#">Next</a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="flex-c-m flex-w w-full p-t-45 "  >
				
			</div>
		</div>
	</div>
		

	<?php require "footer.php"; ?>
	<style>
		.dropdown.dropdown-lg .dropdown-menu {
			margin-top: -1px;
			padding: 6px 20px;
			border:red;
		}
		.input-group-btn .btn-group {
			display: flex !important;
		}
		.btn-group .btn {
			border-radius: 0;
			margin-left: -1px;
		}
		.btn-group .btn:last-child {
			border-top-right-radius: 4px;
			border-bottom-right-radius: 4px;
		}
		.btn-group .form-horizontal .btn[type="submit"] {
		  border-top-left-radius: 4px;
		  border-bottom-left-radius: 4px;
		}
		.form-horizontal .form-group {
			margin-left: 0;
			margin-right: 0;
		}
		.form-group .form-control:last-child {
			border-top-left-radius: 4px;
			border-bottom-left-radius: 4px;
		}

		@media screen and (min-width: 768px) {
			#adv-search {
				width: 100%;
				margin: 0 auto;
			}
			.dropdown.dropdown-lg {
				position: static !important;
			}
			.dropdown.dropdown-lg .dropdown-menu {
				min-width: 500px;
			}
		}
	</style>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>