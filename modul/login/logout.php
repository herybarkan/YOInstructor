<?php
ob_start();
session_start();

$_SESSION['yo_uname'] = NULL;	
$_SESSION['yo_kd_user']= NULL;
$_SESSION['yo_grup']= NULL;

unset($_SESSION['yo_uname']);
unset($_SESSION['yo_kd_user']);
unset($_SESSION['yo_grup']);
		
header("refresh:0; ../../index.php");
?>