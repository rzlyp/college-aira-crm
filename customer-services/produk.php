<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Produk</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          Daftar Produk <a href="" class="btn btn-success" style="float: right;" title="Tambah Admin" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Produk</a></div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Foto Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Foto Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $id = $_GET['id_kategori'];
                      $produk=mysqli_query($konek, "select * from produk where id_kategori=$id");
                      while($data=mysqli_fetch_array($produk)){
                    ?>
                    <tr>
                      <td><img src="../uploads/<?php echo $data['foto']; ?>" class="img-responsive"style="padding:0;margin:0; width: 100px"></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td>Rp. <?php echo $data['harga']; ?></td>
                      <td><?php echo $data['stok']; ?></td>
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
                  <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
                </div>
                <div class="modal-body">
                  <form action="tambah-produk.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" name="nama" aria-describedby="emailHelp" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Produk</label>
                        <select name="kategori" class="form-control">
                          <?php 
                            $q = mysqli_query($konek, "select * from kategori");
                            while($data=mysqli_fetch_array($q)){
                          ?>
                          <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama']; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Foto Produk</label>
                        <input type="file" class="form-controlm" name="foto_produk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" name="harga" aria-describedby="emailHelp" placeholder="Harga">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Stok</label> <br>
                        <input class="form-control" id="exampleInputPassword1" type="number" name="stok" placeholder="Stok">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi</label> <br>
                        <textarea name="deskripsi" class="form-control"></textarea>
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
