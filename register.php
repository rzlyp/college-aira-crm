<?php require "header.php"; ?>
<body class="animsition">
	
	<div class="container" style="margin-top:110px;">
		
		<center><h1 class="well">Registration Form</h1></center>
		<div class="row">
			
		<div class="col-sm-3 " >
			
		</div>
			
		<div class="col-sm-6 " style="padding:10px; ">
			<form>
					<div class="col-sm-12 form-group">
						<input name="namalengkap" type="text" placeholder="Nama Lengkap" class="form-control">
					</div>
					
					<div class="col-sm-12 form-group">
						<input name="username" type="text" placeholder="Username" class="form-control">
					</div>
					
					
					<div class="col-sm-12 form-group">
						<input name="email" type="email" placeholder="Email" class="form-control">
					</div>
					
					
					<div class="col-sm-12 form-group" >
						<textarea name="alamat" id="message" class="form-control" rows="9" cols="25" required="required"
										placeholder="Alamat lengkap"></textarea>
					</div>
					
					
					<div class="col-sm-12 form-group">
						<input name="nomorponsel" type="text" placeholder="Nomor Ponsel" class="form-control">
					</div>
					
					
					<div class="col-sm-12 form-group">
						<input name="password" type="text" placeholder="password" class="form-control">
					</div>
					
					
					<div class="col-sm-12 form-group">
						<input name="konfirmasi_password" type="text" placeholder="konfirmasi password" class="form-control">
					</div>
					
					
					<center>
						<button type="button" class="col-md-11 btn btn-info">Daftar</button>
					</center>
			</form>
		</div>
		
		
					
		</div>
	
	</div>
	
<?php require "footer.php"; ?>