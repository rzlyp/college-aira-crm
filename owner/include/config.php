<?php
	$konek=mysqli_connect("localhost","root","", "db_aira_crm");
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
?>