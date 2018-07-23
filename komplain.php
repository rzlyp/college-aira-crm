<?php require "header.php"; ?>
<body class="animsition">
	
	

	<!-- Title page -->
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>
	<!--<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>-->	


	<!-- Content page -->
	

		<div class="container" style="margin-top:20px; margin-bottom:50px;">
			<div class="row">
				<div class="col-md-2">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Tanya Kami</a>
					  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Komplain</a>
					  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">FAQ</a>
					</div>
				</div>
				<div class="col-md-10">
					<div class="well well-sm">
						<form>
						<div class="row">
							<div class="col-md-8">
							<h3>Komplain</h3>
							<h6 style="margin-top:10px;">Kirimkan komplainmu. Kami akan segera menghubungimu. </h6>
							<hr>
								<div class="form-group">
									<input name="nomor_invoice" type="text" class="form-control" id="nomorInvoice" placeholder="Nomor invoice" required="required" />
								</div>
								
								<div class="form-group">
									<textarea name="pesan" id="message" class="form-control" rows="9" cols="25" required="required"
										placeholder="Pesan"></textarea>
								</div>
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
									Kirim Pesan</button>
							</div>
							
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	

	<?php require "footer.php"; ?>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	
