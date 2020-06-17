<?php
$admin = array("sad","ahmed" , "mohamed");
$username = $_GET ['username'];
if (in_array($username, $admin)){
	include ("noname1.php");
}else{
	echo "No admins";}

?>