<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Pembayaran</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          Daftar Produk <a href="" class="btn btn-success" style="float: right;" title="Tambah Admin" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Produk</a></div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Invoice</th>
                      <th>Atas Nama</th>
                      <th>Pengirim</th>
                      <th>Foto Bukti</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Invoice</th>
                      <th>Atas Nama</th>
                      <th>Pengirim</th>
                      <th>Foto Bukti</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $produk=mysqli_query($konek, "select * from bukti_pembayaran JOIN pengguna ON pengguna.id_pengguna = bukti_pembayaran.id_pengguna WHERE status = 0");
                      while($data=mysqli_fetch_array($produk)){
                    ?>
                    <tr>
                      <td><?php echo $data['id_invoice']; ?></td>
                      <td>Rp. <?php echo $data['atas_nama']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><img src="../uploads/<?php echo $data['bukti_foto']; ?>" class="img-responsive"style="padding:0;margin:0; width: 100px"></td>
                      <td>
                        <form action="konfirmasi.php" method="POST">
                          <input type="hidden" name="invoice" value="<?php echo $data['id_invoice']; ?>">
                          <input type="hidden" name="id_bukti" value="<?php echo $data['id_bukti']; ?>">
                          <button type="sibmit" href="konfirmasi.php" class="btn btn-success"><i class="fa fa-check"></i> Konfirmasi</button>
                        </form>
                        
                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
       