<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Fluktuasi Penjualan</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
      </div>
        
      <!-- Example DataTables Card-->
      <div class="row">
        <div class="col-md-6">
               <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bell-o"></i> Produk Terlaris</div>
              <div class="list-group list-group-flush small">
                <?php 
                    $terlaris = mysqli_query($konek, "SELECT produk.foto, produk.nama, SUM(detail_invoice.jumlah) as jml FROM detail_invoice JOIN produk ON produk.id_produk = detail_invoice.id_produk GROUP BY detail_invoice.id_produk ORDER BY jml DESC LIMIT 7");
                    while($data = mysqli_fetch_array($terlaris)){
                ?>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="../uploads/<?php echo $data['foto']; ?>" style="width: 50px;">
                    <div class="media-body">
                      <strong><?php echo $data['nama']; ?></strong>
                      <div class="text-muted smaller">Terjual <?php echo $data['jml']; ?></div>
                    </div>
                  </div>
                </a>
              <?php } ?>
              </div>
          </div>
        </div>
        <div class="col-md-6">
               <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-bell-o"></i> Produk Butuh Restok</div>
                <div class="list-group list-group-flush small">
                  <?php 
                    $terlaris = mysqli_query($konek, "SELECT produk.foto, produk.nama, produk.stok FROM detail_invoice JOIN produk ON produk.id_produk = detail_invoice.id_produk GROUP BY detail_invoice.id_produk HAVING produk.stok <= 10 ORDER BY stok LIMIT 7");
                    while($data = mysqli_fetch_array($terlaris)){
                ?>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="../uploads/<?php echo $data['foto']; ?>" style="width: 50px;">
                    <div class="media-body">
                      <strong><?php echo $data['nama']; ?></strong>
                      <div class="text-muted smaller">Sisa <?php echo $data['stok']; ?></div>
                    </div>
                  </div>
                </a>
              <?php } ?>
                </div>
            </div>
        </div>
      </div>
