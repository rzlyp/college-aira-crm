<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Komplain</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
           Daftar Komplain 
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Nomor Invoice</th>
                      <th>Isi Komplain</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal</th>
                      <th>Nomor Invoice</th>
                      <th>Isi Komplain</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $produk=mysqli_query($konek, "select * from komplain");
                      while($data=mysqli_fetch_array($produk)){
                    ?>
                    <tr>
                      <td><?php echo $data['tanggal']; ?></td>
                      <td><?php echo $data['id_invoice']; ?></td>
                      <td><?php echo $data['pesan']; ?></td>
                      <td><a class="btn btn-info" href="home.php?page=detail-komplain&id_komplain=<?php echo $data['id']; ?>"><i class="fa fa-eye"></i></a></td>
                    </tr>
                  <?php } ?>
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
                  <h4 class="modal-title" id="myModalLabel">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                  <form action="tambah-admin.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="konfirmasi-password" placeholder="Konfirmasi Password">
                      </div>
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
              </div>
            </div>
          </div>


