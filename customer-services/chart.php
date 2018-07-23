<?php 
		include('include/config.php');
       $terlaris = mysqli_query($konek, "SELECT tanggal, SUM(total_bayar) as jml from invoice GROUP BY tanggal LIMIT 10");
       $res = array();
         while($data = mysqli_fetch_array($terlaris)){
         	$res[] = $data;
         }

         echo json_encode($res);
?>