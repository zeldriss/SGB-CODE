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
	$a = login('https://netflix.raditya.website','code=asdasdsada',$header);
}
print_r($a);


?>
