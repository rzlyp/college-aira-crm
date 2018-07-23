      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Produk</li>
      </ol>
      <?php
        $id = $_GET['id_komplain'];
        $komplain = mysqli_query($konek, "select * from komplain where id = '$id'");
        $k = mysqli_fetch_array($komplain);
        $invoice = $k['id_invoice'];
        $q = mysqli_query($konek, "select * from detail_invoice JOIN invoice ON invoice.id_invoice = detail_invoice.id_invoice
               JOIN produk ON produk.id_produk = detail_invoice.id_produk WHERE detail_invoice.id_invoice = '$invoice'");
        $data = mysqli_fetch_array($q);

        // echo json_encode($data);
      ?>
      <div class="card mb-3">
        <div class="card-header">
          Detail invoice <?php echo $invoice ?> </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Inovice</th>
                    <td><?php echo $invoice; ?></td>
                  </tr>
                  <tr>
                    <th>Nama Produk</th>
                    <td><?php echo $data['nama']; ?></td>
                  </tr>
                  <tr>
                    <th>Jumlah Barang Yang Dibeli</th>
                    <td><?php echo $data['jumlah']; ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal Pemesanan</th>
                    <td><?php echo $data['tanggal']; ?></td>
                  </tr>
                  <tr>
                    <th>Total Bayar</th>
                    <td><?php echo $data['total_bayar']; ?></td>
                  </tr>
                  <tr>
                    <th colspan="2">Isi Komplain</th>
                  </tr>
                  <tr>
                    <td colspan="2"><?php echo $k['pesan']; ?></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <a href="" class="btn btn-success" style="float: right;" title="Tambah Admin" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tanggapi</a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card-header">
             Tanggapan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Pengirim</th>
                      <th>Tanggapan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $kom=mysqli_query($konek, "select * from tanggapan_komplain JOIN pengguna ON pengguna.id_pengguna = tanggapan_komplain.pengirim where id_komplain=$id");
                      while($data=mysqli_fetch_array($kom)){
                    ?>
                    <tr>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['tanggapan']; ?></td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="tanggapi.php" method="POST">

                      <div class="form-group">
                        <label for="exampleInputPassword1">Pesan Tanggapan</label> <br>
                        <input type="hidden" name="id_komplain" value="<?php echo $id; ?>">
                        <textarea name="tanggapan" class="form-control"></textarea>
                      </div>
                      
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
                </div>
              </div>
            </div>
          </div>
