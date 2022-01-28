<?php
ob_start();
session_start();
//upload.php



if(isset($_POST['image']))
{
	$data = $_POST['image'];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	//$image_name = 'upload/' . time() . '.png';
	$image_name = 'upload/' . $_SESSION['kdxx'] . '.png';
	file_put_contents($image_name, $data);

	echo "modul/registrasi/".$image_name;
	
	
	
}
copy($image_name, '../../foto/user/'.$_SESSION['kdxx'].'.png');
?>
