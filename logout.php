<?php
//logout.php
include('gconfig.php');
if(isset($_GET['logout'])) {
	//Reset OAuth access token
$google_client->revokeToken();
//Destroy entire session data.
session_destroy();
//redirect page to index.php
header('location:TrangChuDocGia.php');
}
header('location:TrangChuDocGia.php');
?>

