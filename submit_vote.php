

<?php
    include("admin/dbcon.php");
    session_start();

    // Retrieve voter's gender from session

    // Insert votes for each position
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[hg_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]')") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[hb_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]')") or die($conn->error);
    $conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[hp_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[sp_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[cp_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[sprt_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[lbt_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[lab_id]', '$_SESSION[voters_id]', '$SESSION[gender]' , '$_SESSION[year_level]')") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[lib_id]', '$_SESSION[voters_id]', '$SESSION[gender]' , '$_SESSION[year_level]')") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[din_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);
	$conn->query("INSERT INTO `votes` VALUES ('', '$_SESSION[tk_id]', '$_SESSION[voters_id]', '$SESSION[gender]', '$_SESSION[year_level]' )") or die($conn->error);

	// Update voter status to 'Voted'
    $conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);

	session_destroy();

    // Redirect to homepage after voting
    header("location:index.php");
	
?>
