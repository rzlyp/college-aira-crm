<?php require "header.php"; ?>
<body class="animsition">
	
	
	<div class="container" style="margin-top:100px;">
		
		<center><h1 class="well">Registration Form</h1></center>
		<div class="row">
			
		<div class="col-sm-6 " >
			
			<div class="card">
			  <h5 class="card-header">Detail Pembeli</h5>
			  <div class="card-body">
					<?php
						if(!empty($_GET['status'])){
							//1 berarti login tar ganti session aja
							
							//BIKIN VARIABEL DATA LOGIN MASUKIN KE INPUT
					?>
								
					<?php
							
						} else{
					?>
						
							
							<div class="col-sm-12 form-group">
								<label for="labelNama">Nama Lengkap</label>
								<input name="namalengkap" type="text" placeholder="Nama Lengkap"  class="form-control">
							</div>
							
							<div class="col-sm-12 form-group">
								<label for="labelEmail">Email Pembeli</label>
								<input name="email" type="email" placeholder="Email" class="form-control">
							</div>
							
							
							<div class="col-sm-12 form-group">
								<label for="labelnomorponsel">Nomor Ponsel</label>
								<input name="nomorponsel" type="text" placeholder="Nomor Ponsel" class="form-control">
							</div>
							
						
							<div class="col-sm-12 form-group" >
								<label for="labelalamat">Alamat Pengiriman</label>
								<textarea name="alamat" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder="Alamat lengkap"></textarea>
							</div>
					<?php	
							
						}
					?>
					
					
					
			  </div>
			</div>
			
			<div class="card">
			  <h5 class="card-header">Detail Belanja</h5>
			  <div class="card-body">
					
					<table class="table ">
					  
					  <tbody>
						<tr>
							<td rowspan="2" style="width:150px;">
								<img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
							</td>
							<td>Instant Sabina</td>
							<td>Rp. 45000</td>
						</tr>
						
						<tr>
							<td >
								<input  name="kuantitas" type="number" placeholder="0" class="form-control" style="width:60px;">
							</td>
						</tr>
						
						<tr>
						  <td colspan="3">
							<div class="col-sm-12 form-group" >
								<label for="labelalamat">Kurir</label>
								<select class="custom-select" style="width:100%;">
								  <option selected>Pilih Kurir</option>
								  <option value="1">JNE</option>
								  <option value="2">J&T</option>
								  <option value="3">Tiki</option>
								</select>
							</div>
						  </td>
						</tr>
						
						<tr>
						  <td colspan="3">
								<div class="col-sm-12 form-group" >
									<label for="labelalamat">Catatan</label>
									<textarea name="alamat" id="message" class="form-control" rows="9" cols="25" required="required"
													placeholder="Alamat lengkap"></textarea>
								</div>
						  </td>
						</tr>
						
					  </tbody>
					</table>
					
					
				
					
			  </div>
			</div>

		</div>
			
		<div class="col-sm-6 " style="padding:0px; ">
			<div class="card">
				<h5 class="card-header">Ringkasan Belanja</h5>
				<div class="card-body">
					<table class="table table-bordered">
					  
					  <tbody>
						<tr>
						  <td>Total Harga Barang</td>
						  <td>Rp. 45000</td>
						</tr>
						<tr>
						  <td>Biaya Kirim</td>
						  <td>Rp. 10000</td>
						</tr>
						
						<tr>
						  <td>Potongan Harga</td>
						  <td>Rp. 0</td>
						</tr>
						<tr>
						  <td style="border-top:2px solid #666;">Total Bayar</td>
						  <td style="border-top:2px solid #666;">Rp. 55000</td>
						</tr>
						<tr>
							<td colspan="2">
								<center>
									<button type="button" class="col-md-12 btn btn-success" data-toggle="modal" data-target="#konfirmasiBayar">
									Bayar</button>
									
									
								</center>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
		
		</div>
		
		
					
		</div>
	
	</div>
	
	<!-- Modal -->
<div class="modal fade" id="konfirmasiBayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-top:100px;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Total Tagihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
		<button type="button" class="col-md-12 btn btn-success" data-toggle="modal" data-target="#formkonfirmasiBayar">
			Konfirmasi Bayar</button>
									
      </div>
    </div>
  </div>
</div>

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
        <div class="col-sm-12 form-group">
			<label for="labelNama">Nominal Transfer</label>
			<input name="nominal" type="text" placeholder="100000, 200000 dll"  class="form-control">
		</div>
        <div class="col-sm-12 form-group">
			<label for="labelNama">Atas Nama</label>
			<input name="atasnama" type="text" placeholder="Atas Nama"  class="form-control">
		</div>
		
		<div class="col-sm-12 form-group">
			<label for="labelNama">Bukti Pembayaran</label>
			<input  type="file"   class="form-control">
		</div>
      </div>
      <div class="modal-footer">
		<button type="button" class="col-md-12 btn btn-success" data-toggle="modal" data-target="#formkonfirmasiBayar">
			Konfirmasi Transfer</button>
									
      </div>
    </div>
  </div>
</div>
	
<?php require "footer.php"; ?>