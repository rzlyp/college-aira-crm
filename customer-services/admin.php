<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admin</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
           Admin Yang Terdaftar <a href="" class="btn btn-success" style="float: right;" title="Tambah Admin" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Admin</a></div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $produk=mysqli_query($konek, "select * from pengguna where hak_akses != 'Owner'");
                      while($data=mysqli_fetch_array($produk)){
                    ?>
                    <tr>
                      <td><?php echo $data['nama']; ?> </td>
                      <td><?php echo $data['email']; ?></td>
                      <td><a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
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
                  <h4 class="modal-title" id="myModalLabel">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                  <form action="tambah-admin.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input class="form-control" id="exampleInputEmail1" name="nama" type="text" aria-describedby="emailHelp" placeholder="Nama">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input class="form-control" id="exampleInputEmail1" name="alamat" type="text" aria-describedby="emailHelp" placeholder="Alamat">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">No Hp</label>
                        <input class="form-control" id="exampleInputEmail1" name="hp" type="text" aria-describedby="emailHelp" placeholder="No Hp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1"name="password" type="password" placeholder="Password">
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
