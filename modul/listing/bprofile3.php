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

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="modul/listing/styles.css">
            
            
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
//include ('modul/front/layout_profile2.php');


?>
<!--================================================================================================-->
   <div class=e186_118>
   <div  class="e186_119"></div>
   <div class=e186_120>
      <div  class="e186_121"></div>
      <div  class="e186_122"></div>
      <div  class="e186_123"></div>
   </div>
   <div class=e208_1009>
      <span  class="e208_1010">Roger Junior</span>
      <div class=e208_1011>
         <div class=e208_1012>
            <div class=e208_1013><span  class="e208_1014">“Hello my name is roger junioriam a personal trainer. Lorem ipsum dolor sit amet meta tarsal palefs ”</span></div>
         </div>
         <span  class="e208_1015">Bio</span>
      </div>
      <div class=e208_1016>
         <div class=e208_1017>
            <div class=e208_1018><span  class="e208_1019">Package A</span></div>
            <div class=e208_1020><span  class="e208_1021">Package B</span></div>
            <div class=e208_1022><span  class="e208_1023">Package C</span></div>
         </div>
         <span  class="e208_1024">Package A is a lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper 5x pertemuan.</span>
         <div class=e208_1025>
            <span  class="e208_1026">Price</span>
            <div class=e208_1027><span  class="e208_1028">Rp 400.000</span></div>
         </div>
         <div class=e208_1029>
            <div class=e208_1030><span  class="e208_1031">Book Now</span></div>
         </div>
         <span  class="e208_1032">Choose Package</span>
      </div>
      <div class=e208_1033>
         <div class=e208_1034>
            <span  class="e208_1035">Rp 200.000/hour</span>
            <div class=e208_1036>
               <div  class="e208_1037"></div>
            </div>
         </div>
         <span  class="e208_1038">Choose Price</span>
      </div>
      <div class=e208_1039>
         <div class=e208_1040><span  class="e208_1041">Book Now</span></div>
      </div>
      <div class=e208_1042>
         <div class=e208_1043>
            <span  class="e208_1044">(13)</span>
            <div class=e208_1045>
               <div class=e208_1046>
                  <div  class="e208_1047"></div>
               </div>
               <div class=e208_1048>
                  <div  class="e208_1049"></div>
               </div>
               <div class=e208_1050>
                  <div  class="e208_1051"></div>
               </div>
               <div class=e208_1052>
                  <div  class="e208_1053"></div>
               </div>
               <div class=e208_1054>
                  <div  class="e208_1055"></div>
               </div>
            </div>
         </div>
         <div class=e208_1056>
            <span  class="e208_1057">Certified</span>
            <div class=e208_1058>
               <div class=e208_1059>
                  <div  class="e208_1060"></div>
               </div>
            </div>
         </div>
         <div class=e208_1061>
            <div class=e208_1062>
               <span  class="e208_1063">Like</span><span  class="e208_1064">105</span>
               <div class=e208_1065>
                  <div  class="e208_1066"></div>
               </div>
            </div>
            <div class=e208_1067>
               <div class=e208_1068>
                  <div  class="e208_1069"></div>
               </div>
               <span  class="e208_1070">Share</span>
            </div>
         </div>
      </div>
   </div>
   <div class=e186_178>
      <div class=e186_179>
         <div  class="e186_180"></div>
         <div class=e186_181>
            <div class=e186_182>
               <div  class="e186_183"></div>
               <span  class="e186_184">Who do they train</span>
            </div>
            <span  class="e186_185">Instructor Type</span><span  class="e186_186">Where do they train</span><span  class="e186_187">Reviews</span><span  class="e186_188">Social Media & Contact</span><span  class="e186_189">Posts</span>
         </div>
      </div>
      <div class=e186_190>
         <div class=e186_191>
            <span  class="e186_192">Men</span>
            <div  class="e186_193"></div>
            <div class=e186_908>
               <div  class="e186_909"></div>
            </div>
         </div>
         <div class=e186_194>
            <span  class="e186_195">Women</span>
            <div  class="e186_196"></div>
            <div class=e186_910>
               <div  class="e186_911"></div>
            </div>
         </div>
         <div class=e186_197>
            <span  class="e186_198">Kids</span>
            <div class=e186_199>
               <div class=e267_234>
                  <div  class="e186_200"></div>
                  <div  class="e186_201"></div>
                  <div  class="e186_202"></div>
               </div>
            </div>
            <div class=e186_912>
               <div  class="e186_913"></div>
            </div>
         </div>
         <div class=e246_27>
            <span  class="e246_28">Group</span>
            <div class=e267_60>
               <div  class="e267_63"></div>
               <div class=e267_235>
                  <div  class="e267_61"></div>
                  <div  class="e267_62"></div>
                  <div  class="e267_64"></div>
               </div>
               <div  class="e267_65"></div>
            </div>
            <div class=e246_33>
               <div  class="e246_34"></div>
            </div>
         </div>
      </div>
   </div>
   <div class=e267_66>
      <div  class="e267_67"></div>
      <div class=e267_68>
         <div class=e267_69>
            <div  class="e267_70"></div>
            <div  class="e267_71"></div>
         </div>
      </div>
      <div class=e267_72>
         <div class=e267_73>
            <div class=e267_74><span  class="e267_75">Monday</span><span  class="e267_76">: 08:00 - 18:00</span></div>
            <div class=e267_77><span  class="e267_78">Tuesday</span><span  class="e267_79">: 08:00 - 18:00</span></div>
            <div class=e267_80><span  class="e267_81">Wednesday</span><span  class="e267_82">: 08:00 - 18:00</span></div>
            <div class=e267_83><span  class="e267_84">Friday</span><span  class="e267_85">: 08:00 - 18:00</span></div>
         </div>
         <span  class="e267_86">Available On</span>
      </div>
   </div>
   <div class=e186_203>
      <div  class="e186_204"></div>
      <div  class="e186_205"></div>
      <div  class="e186_206"></div>
   </div>
</div>

<?php
//
include ('modul/front/desc_review.php');
?>
<!-- </div> -->
<!--<div id="apDiv2">zxzxzxzxz</div>-->