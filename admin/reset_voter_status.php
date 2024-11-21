<?php 
	require_once 'dbcon.php';						
	$conn->query("UPDATE voters SET status = 'Unvoted'")or die($conn->error);
	echo "<script> window.location='voters.php' </script>";
?>			