<?php
error_reporting(0); 
date_default_timezone_set("Asia/Jakarta");
require 'agent.php';
require 'pubg_.php';
$format = $_POST['mailpass'];
$next = explode("|", $format);
$email = $next[0];
$pass = $next[1];
$a = get('https://netflix.raditya.website');
if ($a) {
	$header = array(
		'Content-Type": "application/x-www-form-urlencoded',
	);
	
$a = login('https://netflix.raditya.website','code=SGB-36bf0ea7b1',$header);
}
print_r($a)
//if (inStr($a, 'ok')) {
	// echo "LIVE";
 // }
 // else{
  // echo "DIE";

 // }
			
//SGB CODE TIDAK VALID
//Server Penuh , Harap Menunggu
//SGB-36bf0ea7b1
?>
