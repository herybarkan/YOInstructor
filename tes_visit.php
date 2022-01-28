<?php
require_once 'Connections/con.php';
date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$select_stmt_in=$db->prepare("INSERT INTO tbl_visit (kd_instructor, ip_address, tgl, jam, kd_user,page) VALUES ('$_GET[kd_inst]', '$ip', '$tglin', '$jamin', '$_SESSION[yo_kd_user]','home')");	
$select_stmt_in->execute();

//tes edit
?>