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
					  <a class="nav-link active" id="v-pills-tanya-tab" data-toggle="pill" href="#v-pills-tanya" role="tab" aria-controls="v-pills-tanya" aria-selected="true">Tanya Kami</a>
					  <a class="nav-link" id="v-pills-komplain-tab" data-toggle="pill" href="#v-pills-komplain" role="tab" aria-controls="v-pills-komplain" aria-selected="false">Komplain</a>
					  <a class="nav-link" id="v-pills-FAQ-tab" data-toggle="pill" href="#v-pills-FAQ" role="tab" aria-controls="v-pills-FAQ" aria-selected="false">FAQ</a>
					</div>
				</div>
				<div class="col-md-10">
					<div class="well well-sm">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-tanya" role="tabpanel" aria-labelledby="v-pills-tanya-tab">
							
								<div class="row">
									<div class="col-md-12">
									<h3>Tanya Kami</h3>
									<h6 style="margin-top:10px;">Kirimkan pertanyaamu. Kami akan segera menghubungimu. </h6>
									<hr>
										<div class="form-group">
											<input name="namalengkap" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="required" />
										</div>
										<div class="form-group">
											<input name="emaillengkap"type="email" class="form-control" id="email" placeholder="Email Aktif Kamu" required="required" />
										</div>
										
										<div class="form-group">
											<input name="nomorponsel"type="text" class="form-control" id="nomorponsel" placeholder="Nomor Ponsel Kamu" required="required" />
										</div>
										
										<div class="form-group">
											<textarea name="pesan" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder="Pesan"></textarea>
										</div>
											<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
											Kirim Pesan</button>
									</div>
									
								</div>
							
							</div>
							<div class="tab-pane fade" id="v-pills-komplain" role="tabpanel" aria-labelledby="v-pills-komplain-tab">
								
									<div class="row">
										<div class="col-md-8">
										<h3>Komplain</h3>
										<form method="POST" action="aksiKomplain.php" enctype="multipart/form-data">
											<h6 style="margin-top:10px;">Kirimkan komplainmu. Kami akan segera menghubungimu. </h6>
											<hr>
											<div class="form-group">
												<input name="nomor_invoice" type="text" class="form-control" id="nomorInvoice" placeholder="Nomor invoice" required="required" />
											</div>
											
											<div class="form-group">
												<textarea name="pesan" id="message" class="form-control" rows="9" cols="25" required="required"
													placeholder="Pesan"></textarea>
											</div>
											<div class="modal-footer">
											<input type="submit" class="col-md-12 btn btn-success" value="Konfirmasi Transfer">
																		
											</div>
										  </form>
		
										</div>
										
									</div>
								
							</div>
							<div class="tab-pane fade" id="v-pills-FAQ" role="tabpanel" aria-labelledby="v-pills-messages-FAQ">
									<form>
										<div class="row">
											<div class="col-md-8">
											<h3>FAQ</h3>
											<h6 style="margin-top:10px;">Pertanyaan yang sering ditanyakan. </h6>
											<hr>
											
											<div id="accordion">
												 <div class="card">
													<div class="card-header" id="headingTwo">
													  <h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														  Pertanyaan 1
														</button>
													  </h5>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
													  <div class="card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													  </div>
													</div>
												  </div>
												  <div class="card">
													<div class="card-header" id="headingTwo">
													  <h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														 Pertanyaan 2
														</button>
													  </h5>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
													  <div class="card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													  </div>
													</div>
												  </div>
												  <div class="card">
													<div class="card-header" id="headingThree">
													  <h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														  Pertanyaan 3
														</button>
													  </h5>
													</div>
													<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
													  <div class="card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													  </div>
													</div>
												  </div>
												</div>
											</div>
											
										</div>
										</form>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
<?php require "footer.php"; ?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	