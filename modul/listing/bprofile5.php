<?php
   ob_start();
   session_start();
   
   require_once 'Connections/con.php';
   ?>
<?php
   $select_stmt=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS negara,
   states.`name` AS propinsi,
   cities.`name` AS kota
   FROM
   instructor
   JOIN user_
   ON instructor.kd_instructor = user_.kd_user 
   JOIN countries
   ON countries.id = instructor.country 
   JOIN states
   ON states.id = instructor.state 
   JOIN cities
   ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$_GET[kd_inst]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_stmt->execute();
   $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
   
   $select_stmt_det=$db->prepare("SELECT *
   FROM
   instructor_detail
   WHERE kd_instructor='$_GET[kd_inst]'"); //sql select query
   $select_stmt_det->execute();
   $row_det=$select_stmt_det->fetch(PDO::FETCH_ASSOC);
   
                              ?>
<meta property="og:image" content="https://yoinstructor.com/foto/user/<?php echo $row['photo']; ?>" />
<style type="text/css">
   @media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   #apDiv1 {
   position: relative;
   width: 170px;
   height: 170px;
   z-index: 100;
   margin-left:150px;
   margin-top:-180px;
   }
   .fotox{margin-top: 70px;}
   #apDiv2 {
   position: absolute;
   width: 100%;
   height: 80pxpx;
   z-index: 101;
   visibility:hidden
   }
   .margin_atas{
	   height:173px;
	   }
   .margin_nama{
	   margin-top:0px;
	   }
	.margin_atas_xx{
		margin-top:66px;
		}
   }
   @media only screen 
   and (max-width : 1200px) {
   #apDiv1 {
   position: relative;
   width: 110px;
   height: 110px;
   z-index: 100;
   margin-left:20px;
   margin-top:-120px;
   padding-bottom: 100px;
   }
   .fotox{margin-top: 30px;}
   #apDiv2 {
   position: fixed;
   width: 98%;
   right: 25px;
   bottom: 25px;
   margin: 0;
   z-index: 20010;
   opacity: 1;
   visibility: visible;
   }
   .margin_atas{
	   height:10px;
	   }
	.margin_nama{
	   margin-top:30px;
	   }
	   
	   /*========================================================================*/
	   
	   /*========================================================================*/

   }
   @media only screen 
   and (max-width : 320px) {
   /* Styles here */
   }
   /*#apDiv2 {
   position: absolute;
   width: 378px;
   height: 115px;
   z-index: 101;
   visibility:hidden
   }*/
</style>
<!-- <div class="edgtf-container"> -->
<script type="text/javascript" src="modul/ajax_js/update_nama.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_price.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_bio.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_schedule.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_sosmed.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_whodo.js"></script>
<script type="text/javascript" src="modul/ajax_js/update_after.js"></script>
<script type="text/javascript" src="modul/ajax_js/ajax_like.js"></script>
<script type="text/javascript" src="modul/ajax_js/show_certificate.js"></script>



<!--<link rel="stylesheet" href="modul/listing/styles.css">-->
<link rel="stylesheet" type="text/css" href="modul/listing/css/profile-desktop.css" />
<link rel="stylesheet" type="text/css" href="modul/listing/css/styleguide.css" />
<link rel="stylesheet" type="text/css" href="modul/listing/css/globals.css" />

<?php
   //
   // include ('element/listing_detail_gallery.php');
   
   
   
   
   include "modul/listing/qrcode/qrlib.php"; 
   $tempdir = "modul/listing/temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);
   
    //ambil logo
    $logopath="images/logoyo.png";
   
   //isi qrcode jika di scan
   $codeContents = "https://yoinstructor.com/?com=bprofile&kd_inst=".$row['kd_instructor']; 
   
   //simpan file qrcode
   QRcode::png($codeContents, $tempdir.'qrwithlogo.png', QR_ECLEVEL_H, 10,4);
   
   
   // ambil file qrcode
   $QR = imagecreatefrompng($tempdir.'qrwithlogo.png');
   
   // memulai menggambar logo dalam file qrcode
   $logo = imagecreatefromstring(file_get_contents($logopath));
   
   imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
   imagealphablending($logo , false);
   imagesavealpha($logo , true);
   
   $QR_width = imagesx($QR);
   $QR_height = imagesy($QR);
   
   $logo_width = imagesx($logo);
   $logo_height = imagesy($logo);
   
   // Scale logo to fit in the QR Code
   $logo_qr_width = $QR_width/8;
   $scale = $logo_width/$logo_qr_width;
   $logo_qr_height = $logo_height/$scale;
   
   imagecopyresampled($QR, $logo, $QR_width/2.3, $QR_height/2.3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
   
   // Simpan kode QR lagi, dengan logo di atasnya
   //imagepng($QR,$tempdir.'qrwithlogo.png');
   imagepng($QR,$tempdir.$row['kd_instructor'].'.png');
   
   
   
   //menampilkan file qrcode 
   //echo '<div align="center"><h2>Create QR Code With Logo PHP</h2>';
   //echo '<img src="'.$tempdir.'qrwithlogo.png'.'" width="297" height="118" align="middle"/>';
   //echo '<br><a href="https://www.maribelajarcoding.com">maribelajarcoding.com</a><div>';
   ?>

<?php
//
include ('modul/front/layout_profile3.php');
?>
<!--================================================================================================-->
   

<?php
//
//include ('modul/front/desc_review.php');
?>
<!-- </div> -->
<!--<div id="apDiv2">zxzxzxzxz</div>-->