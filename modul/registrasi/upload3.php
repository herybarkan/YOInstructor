<?php
ob_start();
session_start();

require_once('../../Connections/con.php');
//upload.php

$select_stmt2=$db->prepare("SELECT COUNT(id_) AS jmli FROM instructor_before_after WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
$select_stmt2->execute();
$row_stmt2=$select_stmt2->fetch(PDO::FETCH_ASSOC);

$pfix=$row_stmt2['jmli']+1;


if(isset($_POST['image3']))
{
	$data = $_POST['image3'];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	//$image_name = 'upload/' . time() . '.png';
	$image_name = 'upload/BF-'.$_SESSION['yo_kd_user'].'-'.$pfix.'.png';
	file_put_contents($image_name, $data);

	echo "modul/registrasi/".$image_name;
	
	
	
}
copy($image_name, '../../foto/member/BF-'.$_SESSION['yo_kd_user'].'-'.$pfix.'.png');

/*$xphoto=$_SESSION['yo_kd_user'].".png";

$select_stmt2=$db->prepare("UPDATE instructor SET photo='$xphoto'
WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
$select_stmt2->execute();*/

?>

<?php

function merge($filename_x, $filename_y, $filename_result, $mergeType = 0) {

    //$mergeType 0 for horizandal merge 1 for vertical merge

 // Get dimensions for specified images
 list($width_x, $height_x) = getimagesize($filename_x);
 list($width_y, $height_y) = getimagesize($filename_y);


$lowerFileName = strtolower($filename_x); 
if(substr_count($lowerFileName, '.jpg')>0 || substr_count($lowerFileName, '.jpeg')>0){
    $image_x = imagecreatefromjpeg($filename_x);    
}else if(substr_count($lowerFileName, '.png')>0){
    $image_x = imagecreatefrompng($filename_x); 
}else if(substr_count($lowerFileName, '.gif')>0){
    $image_x = imagecreatefromgif($filename_x); 
}


$lowerFileName = strtolower($filename_y); 
if(substr_count($lowerFileName, '.jpg')>0 || substr_count($lowerFileName, '.jpeg')>0){
    $image_y = imagecreatefromjpeg($filename_y);    
}else if(substr_count($lowerFileName, '.png')>0){
    $image_y = imagecreatefrompng($filename_y); 
}else if(substr_count($lowerFileName, '.gif')>0){
    $image_y = imagecreatefromgif($filename_y); 
}


if($mergeType==0){
    //for horizandal merge
     if($height_y<$height_x){
        $new_height = $height_y;

        $new_x_height = $new_height;
        $precentageReduced = ($height_x - $new_height)/($height_x/100);
        $new_x_width = ceil($width_x - (($width_x/100) * $precentageReduced));

         $tmp = imagecreatetruecolor($new_x_width, $new_x_height);
        imagecopyresampled($tmp, $image_x, 0, 0, 0, 0, $new_x_width, $new_x_height, $width_x, $height_x);
        $image_x = $tmp;

        $height_x = $new_x_height;
        $width_x = $new_x_width;

     }else{
        $new_height = $height_x;

        $new_y_height = $new_height;
        $precentageReduced = ($height_y - $new_height)/($height_y/100);
        $new_y_width = ceil($width_y - (($width_y/100) * $precentageReduced));

         $tmp = imagecreatetruecolor($new_y_width, $new_y_height);
        imagecopyresampled($tmp, $image_y, 0, 0, 0, 0, $new_y_width, $new_y_height, $width_y, $height_y);
        $image_y = $tmp;

        $height_y = $new_y_height;
        $width_y = $new_y_width;

     }

     $new_width = $width_x + $width_y;

     $image = imagecreatetruecolor($new_width, $new_height);

    imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
    imagecopy($image, $image_y, $width_x, 0, 0, 0, $width_y, $height_y);

}else{


    //for verical merge
    if($width_y<$width_x){
        $new_width = $width_y;

        $new_x_width = $new_width;
        $precentageReduced = ($width_x - $new_width)/($width_x/100);
        $new_x_height = ceil($height_x - (($height_x/100) * $precentageReduced));

        $tmp = imagecreatetruecolor($new_x_width, $new_x_height);
        imagecopyresampled($tmp, $image_x, 0, 0, 0, 0, $new_x_width, $new_x_height, $width_x, $height_x);
        $image_x = $tmp;

        $width_x = $new_x_width;
        $height_x = $new_x_height;

     }else{
        $new_width = $width_x;

        $new_y_width = $new_width;
        $precentageReduced = ($width_y - $new_width)/($width_y/100);
        $new_y_height = ceil($height_y - (($height_y/100) * $precentageReduced));

         $tmp = imagecreatetruecolor($new_y_width, $new_y_height);
        imagecopyresampled($tmp, $image_y, 0, 0, 0, 0, $new_y_width, $new_y_height, $width_y, $height_y);
        $image_y = $tmp;

        $width_y = $new_y_width;
        $height_y = $new_y_height;

     }

     $new_height = $height_x + $height_y;

     $image = imagecreatetruecolor($new_width, $new_height);

    imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
    imagecopy($image, $image_y, 0, $height_x, 0, 0, $width_y, $height_y);

}





$lowerFileName = strtolower($filename_result); 
if(substr_count($lowerFileName, '.jpg')>0 || substr_count($lowerFileName, '.jpeg')>0){
    imagejpeg($image, $filename_result);
}else if(substr_count($lowerFileName, '.png')>0){
    imagepng($image, $filename_result);
}else if(substr_count($lowerFileName, '.gif')>0){
    imagegif($image, $filename_result); 
}


 // Clean up
 imagedestroy($image);
 imagedestroy($image_x);
 imagedestroy($image_y);

}


merge('upload/bf-'.$_SESSION['yo_kd_user'].'-'.$pfix.'.png', 'after1.png', '../../foto/member/BA-'.$_SESSION['yo_kd_user'].'-'.$pfix.'.png',0); //merge horizontally
//merge('men1a.png', 'men1b.png', 'images/merged.png',1); //merge vertically

?>
