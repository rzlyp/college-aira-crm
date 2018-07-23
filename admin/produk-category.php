<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Produk</li>
      </ol>
      <div class="row">
            <?php 
              $q = mysqli_query($konek, "select produk.id_kategori, COUNT(id_produk) as jml, kategori.nama FROM produk JOIN kategori ON kategori.id_kategori = produk.id_kategori GROUP BY produk.id_kategori");
              while($data = mysqli_fetch_array($q)){
            ?>
            
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                    </div>
                    <div class="mr-5"><?php echo $data['nama']." ( ".$data['jml']." Produk )"; ?></div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="home.php?page=produk&id_kategori=<?php echo $data['id_kategori']; ?>">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
             </div>
            <?php } ?>
             
      </div>
