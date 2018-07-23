<?php require "header.php"; ?>
<body class="animsition">
	
		<?php 
		$id = $_POST['idProduk'];
		$kuantitas = $_POST['kuantitas'];
		echo $kuantitas."aaa";
		$sql_s	 = "SELECT *, produk.nama AS napro, kategori.nama AS kapro FROM produk,kategori where produk.id_kategori = kategori.id_kategori AND id_produk='$id'"; 
		
		$query_s = mysqli_query($con, $sql_s); 
		if(mysqli_num_rows($query_s)!=0){ 
			while($row_s=mysqli_fetch_array($query_s)){
				$idProduk = $row_s["id_produk"];
				$namaProduk = $row_s["napro"];
				$hargaProduk = $row_s["harga"];
				$fotoProduk = "uploads/".$row_s["foto"];
				
				$deskripsiProduk = $row_s["deskripsi"];
				$kategoriProduk = $row_s["kapro"];
				
				$total = $hargaProduk * $kuantitas;
				$biayaKirim = 10000;
				$totalBayar = $total + $biayaKirim;
			}
			
			$idMember = $_SESSION["id_pengguna"];
			$namaMember = $_SESSION["nama"];
			$emailMember = $_SESSION["email"];
			$notelpMember = $_SESSION["no_telp"];
			$alamatMember = $_SESSION["alamat"];
		}
		?>
	<form method="POST" action="aksiTransaksi.php">
	<div class="container" style="margin-top:100px;">
		<?php 
			echo "asdasdas ".$id." + ".$kuantitas;
		?>
		
		<center><h1 class="well">Registration Form</h1></center>
		<div class="row">
			
		<div class="col-sm-6 " >
			
			<div class="card">
			  <h5 class="card-header">Detail Pembeli</h5>
			  <div class="card-body">
					
							
							<div class="col-sm-12 form-group">
								<label for="labelNama">Nama Lengkap</label>
								<input type="hidden" name="id_pengguna" value="<?php echo $idMember; ?>">
								<input type="hidden" name="id_produk" value="<?php echo $idProduk; ?>">
								<input type="hidden" name="kuantitas" value="<?php echo $kuantitas; ?>">
						  
								<input name="namalengkap" type="text" placeholder="Nama Lengkap"  class="form-control" value="<?php echo $namaMember;?>">
							</div>
							
							<div class="col-sm-12 form-group">
								<label for="labelEmail">Email Pembeli</label>
								<input name="email" type="email" placeholder="Email" class="form-control" value="<?php echo $emailMember;?>">
							</div>
							
							
							<div class="col-sm-12 form-group">
								<label for="labelnomorponsel">Nomor Ponsel</label>
								<input name="nomorponsel" type="text" placeholder="Nomor Ponsel" class="form-control" value="<?php echo $notelpMember;?>">
							</div>
							
						
							<div class="col-sm-12 form-group" >
								<label for="labelalamat">Alamat Pengiriman</label>
								<textarea name="alamat" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder="Alamat lengkap"><?php echo $alamatMember; ?></textarea>
							</div>
				
					
					
			  </div>
			</div>
			
			<div class="card">
			  <h5 class="card-header">Detail Belanja</h5>
			  <div class="card-body">
					
					<table class="table ">
					  
					  <tbody>
						<tr>
							<td  style="width:150px;">
								<img class="img-responsive" src="<?php echo $fotoProduk; ?>" alt="prewiew" style="width:100%;">
							</td>
							<td><?php echo $namaProduk;?> </td>
							<td><?php echo $hargaProduk; ?></td>
						</tr>
						
					
						
						<tr>
						  <td colspan="3">
							<div class="col-sm-12 form-group" >
								<label for="labelalamat">Kurir</label>
								<select name="kurir" class="custom-select" style="width:100%;">
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
									<textarea name="catatan" id="message" class="form-control" rows="3" cols="25" 
													placeholder="catatan"></textarea>
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
						  <td>
						
								
						  <?php echo rupiah($total); ?></td>
						</tr>
						<tr>
						  <td>Biaya Kirim</td>
						  <td><?php echo rupiah($biayaKirim); ?></td>
						</tr>
						
						<tr>
						  <td style="border-top:2px solid #666;">Total Bayar</td>
						  <td style="border-top:2px solid #666;">
							<?php 
								echo rupiah($totalBayar);
							?>
							<input type="hidden" name="totalBayar" value="<?php echo $totalBayar; ?>">
							<input type="hidden" name="ongkir" value="<?php echo $biayaKirim; ?>">
						  </td>
						</tr>
						<tr>
							<td colspan="2">
								<center>
									<input type="submit" class="col-md-12 btn btn-success" value="Bayar">		
								</center>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
		
		</div>
		
	
		</form>	
					
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

<?php require "footer.php"; ?>