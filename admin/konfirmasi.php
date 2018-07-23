<?php
include('include/config.php');
	$invoice = $_POST['invoice'];
	$id_bukti = $_POST['id_bukti'];

    $query1 = mysqli_query($konek, "UPDATE invoice SET status_invoice = 1 WHERE id_invoice = '$invoice'");
    $query2 = mysqli_query($konek, "UPDATE bukti_pembayaran SET status = 1 WHERE id_bukti = '$id_bukti'");
    if($query1 && $query2){
    	echo "<script>document.location.href='home.php?page=pembayaran';</script>";
    }else{
    	echo "Error: " . $query . "<br>" . mysqli_error($konek);
    }


?>