<?php
ob_start();
session_start();

require_once('../../Connections/con.php');
//upload.php



if(isset($_POST['image']))
{
	$data = $_POST['image'];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	//$image_name = 'upload/' . time() . '.png';
	$image_name = 'upload/' . $_SESSION['yo_kd_user'] . '.png';
	file_put_contents($image_name, $data);

	echo "modul/registrasi/".$image_name;
	
	
	
}
copy($image_name, '../../foto/user/'.$_SESSION['yo_kd_user'].'.png');

$xphoto=$_SESSION['yo_kd_user'].".png";

$select_stmt2=$db->prepare("UPDATE instructor SET photo='$xphoto'
WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
$select_stmt2->execute();

?>
