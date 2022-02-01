<?php
ob_start();
session_start();
?>

<!--<meta property="og:url"           content="index.php?com=bprofile&kd_inst=INSHPIDB211230121359" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="Book wellness instructor anytime and anywhere" />
<meta property="og:description"   content="YO Instructor is a platform and center for gathering personal training directories. You can look for personal training according to your needs." />
<meta property="og:image"         content="https://yoinstructor.com/foto/user/INSHPIDB211230121359.png" />-->

<style>
   .xlabelz {
   font-family: 'Roboto', sans-serif;
   font-size: 12px;
   font-weight: 600;
   /*letter-spacing: 0.025rem;*/
   font-style: normal;
   text-transform: uppercase;
   color: #000;
   /*background-color: #fddf21;*/
   background-color: #fff;
   border-radius: 1.25rem;
   -webkit-border-radius: 1.25rem;
   -moz-border-radius: 1.25rem;
   padding: 0.35rem 0.75rem;
   border-style: solid;
   border-width: 0.125rem;
   border-color: #f0c93d;
   -webkit-box-shadow: none;
   -moz-box-shadow: none;
   -box-shadow: none;
   width:300px;
   }
   .xlabel {
	/*box-shadow: 1px 1px 1px 1px #ccc;*/
	border:solid 1px;
	/*background:linear-gradient(to bottom, #fddf21 5%, #fddf21 100%);*/
	/*background-color:#fddf21;*/
	background-color:#333;
	border-radius:5px;
	display:inline-block;
	cursor:pointer;
	color:#fff;
	font-family:Roboto;
	font-size:14px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	
}

.xlabel2 {
	/*box-shadow: 1px 1px 1px 1px #ccc;*/
	border:solid 1px;
	/*background:linear-gradient(to bottom, #fddf21 5%, #fddf21 100%);*/
	/*background-color:#fddf21;*/
	background-color:#fff;
	border-radius:5px;
	display:inline-block;
	cursor:pointer;
	color:#333;
	font-family:Roboto;
	font-size:12px;
	font-weight:300;
	padding:6px 24px;
	text-decoration:none;
	
}

#tips_row_atas
{
	width:30%; 
	height:60px; 
	background-color:#ffde39; 
	border-top-left-radius:10px; 
	border-top-right-radius:10px;
	display:block;
	padding:15px;
}

#tips_row_bawah
{
	width:30%; 
	height:100px; 
	background-color:#000; 
	border-bottom-left-radius:10px; 
	border-bottom-right-radius:10px;
	display:block;
	padding:15px;
}
</style>

<script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/jquery.bootstrap.js" type="text/javascript"></script>
            <script src="js/material-bootstrap-wizard.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            
            <script src="js/bootstrap.min2.js"></script>        
		<link rel="stylesheet" href="css/dropzone.css" />
		<link href="css/cropper.css" rel="stylesheet"/>
		<script src="js/dropzone.js"></script>
		<script src="js/cropper.js"></script>
        
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js" id="jquery-easing-1.3-js"></script>

<?php
error_reporting(0);
@ini_set('display_errors', 0);
date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$select_stmt_in=$db->prepare("INSERT INTO tbl_visit (kd_instructor, ip_address, tgl, jam, kd_user,page) VALUES ('$_GET[kd_inst]', '$ip', '$tglin', '$jamin', '$_SESSION[yo_kd_user]','profile')");	
$select_stmt_in->execute();
?>

<?php
   ob_start();
   session_start();
   
   $select_stmt_inst=$db->prepare("SELECT
   instructor.id_,
   instructor.kd_instructor,
   instructor.first_name,
   instructor.last_name,
   instructor.country,
   instructor.state,
   instructor.city,
   instructor.street_name,
   instructor.street_number,
   instructor.zip_code,
   instructor.phone_number,
   instructor.photo,
   instructor.typec,
   instructor.tgl_in,
   instructor.jam_in,
   instructor.sts,
   instructor.aktif,
   user_.username
   FROM
   user_
   JOIN instructor
   ON user_.kd_user = instructor.kd_instructor 
   WHERE kd_instructor='$row[kd_instructor]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
   
   $cek_inst=$db->prepare("SELECT * FROM instructor_detail WHERE kd_instructor='$row[kd_instructor]'");
   $cek_inst->execute();
   $row_cek_inst=$cek_inst->fetch(PDO::FETCH_ASSOC);
   ?>
<!--<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />-->

<div class="container-center-horizontal" style="height:100%;">
      <div class="profile-desktop screen margin_atas_xx" >
        <!--<div class="header">
          <img class="logo-instructor" src="img/logoinstructor-1@2x.png" />
          <div class="rectangle-2"></div>
        </div>-->
        <?php 
		$kar = round(strlen($row_cek_inst['overview'])/110,0);
		$kt = $kar*28;
		
		$tinggi_free="80";
		$tinggi_pro="850"+$kt;
		$tinggi_adm="90"+$kt;

?> 
<?php


	if ($_SESSION['yo_kd_user']!=$_GET['kd_inst']) {$tinngi_a="style=\"height:".$tinggi_free."px;\"";}
elseif ($_SESSION['yo_kd_user']==$_GET['kd_inst']) {$tinngi_a="style=\"height:".$tinggi_pro."px;\"";}
if ($_SESSION['yo_grup']=="1") {$tinngi_a="style=\"height:".$tinggi_adm."px;\"";}
?>        
        <div class="overlap-group2" <?php echo $tinngi_a; ?>>
          <img class="bg-dummy" src="img/bgdummy@1x.png" />
          <div class="group-12" >
          <div id="dname">
          
          <table width="100%" border="0" style="border:hidden;">
  <tr style="border:hidden;">
    <td style="border:hidden;">
    <div id="result_unama">
    <h1 class="name montserrat-semi-bold-white-48px"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
            </h1>
            </div>
            </td>
    <td style="border:hidden;"><?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_name"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>  
               <?php } ?> </td>
  </tr>
</table>
          
            </div>
            
            
            <div id="dt_name">
            <form action="#" method="GET" name="fname">
            <table width="100%" border="0" style="margin-top:50px; border:hidden;">
  <tr style=" border:hidden;">
    <td style=" border:hidden;"><input name="tfname" id="tfname" type="text" value="<?php echo $row['first_name']; ?>" style="background-color:#FFF;"/></td>
    <td style=" border:hidden;"><input name="tlname" id="tlname" type="text" value="<?php echo $row['last_name']; ?>" style="background-color:#FFF;"/></td>
    <td style=" border:hidden;"><input name="bt_save_name" id="bt_save_name" type="button" value="Save" onclick="show_unama((document.getElementById('tfname').value),(document.getElementById('tlname').value));"/></td>
    <td style=" border:hidden;"><input name="bt_cancel_name" type="button" value="Cancel" id="bt_cancel_name"/></td>
  </tr>
</table>
            </form>
            </div>
            
            
            
               
            <div class="group-11" style="margin-top:0px; position:relatif;">
              <div class="group-6">
                <!--<img class="group-5" src="img/group-5@2x.svg" />-->
				<span class="group-8 opensans-normal-white-16px" style="margin-left:15px;">
				<?php 
				//echo $row_inst['sts']; 
				
					if ($row_inst['sts']=="0") {echo "FREEMIUM";}
				elseif ($row_inst['sts']=="1") {echo "PROFESIONAL";}
				?>
                </span>
                <!--<div class="text-3 opensans-normal-white-16px">(13)</div>-->
              </div>
              <div class="group-7">
              <?php
                                             $select_stmt_ser=$db->prepare("SELECT * FROM instructor_sertifikat WHERE  kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                                             $select_stmt_ser->execute();
                                             $row_ser=$select_stmt_ser->fetch(PDO::FETCH_ASSOC);
                                             
                                             ?>
                <?php if ($row_ser['verified']=="1" && $row_inst['sts']=="1") { ?>                             
                <div class="certified opensans-bold-malachite-16px">CERTIFIED</div>
                <img class="ic-verified" src="img/icverified@1x.png" />
                <?php } ?>
              </div>
              <div class="group-10">
              <?php
				  $select_stmt_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE kd_instructor='$_GET[kd_inst]'");	
$select_stmt_like->execute();
$row_like=$select_stmt_like->fetch(PDO::FETCH_ASSOC);



$select_stmt_sos=$db->prepare("SELECT * FROM instructor_detail WHERE  kd_instructor='$row[kd_instructor]'");	//sql select query
$select_stmt_sos->execute();
$row_sos=$select_stmt_sos->fetch(PDO::FETCH_ASSOC);
?>

                <div class="group-8 opensans-normal-white-16px">
                  <div class="like">Like</div>
                  
                  <a href="javascript:void(0);" onclick="show_like('<?php echo $_GET['kd_inst']; ?>');">
                  <img class="ic-like" src="img/iclike-1@1x.png" />
                  </a>
                  <div class="number">
				  <span id="result_like">
				  <?php echo $row_like['jml_like']; ?>
                  </span>
                  </div>
                </div>
                <div class="group-9">
                  <div class="share opensans-normal-white-16px">Share</div>
                  <a href="javascript:void(0);" id="bt_share"><img class="ic-share" src="img/icshare@2x.png" /></a>
                  <br>
                  <div style="margin-left:-25px; margin-top:90px; z-index:100000; position:absolute; width:120px;" id="link_share">
                  <table width="100%" border="0" style="margin-top:-15px; border:none; border-style:none;">
  <tr style=" border:none; border-style:none;">
    <td style=" border:none; border-style:none;">
    <a href="http://www.facebook.com/sharer/sharer.php?u=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_blank"><img src="img/icon_fb.png" style="width:30px;  position:absolute; margin-right:5px;" />
    </a> 
    </td>
    
    <td style=" border:none; border-style:none;"><a href="http://twitter.com/share?url=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>&text=Book wellness instructor anytime and anywhere&hashtags=simplesharebuttons" target="_blank""><img src="img/icon_tw.png" style="width:30px;  position:absolute; margin-right:5px;" />
    </a> 
    </td>
    
    <td style=" border:none; border-style:none;"><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_blank""><img src="img/icon_in.png" style="width:30px;  position:absolute; margin-right:5px;" />
    </a> 
    </td>
  </tr>
</table>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="group-49" style="width:100%;">
              <div class="bio opensans-semi-bold-black-15px">BIO
              <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_bio"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:10px;"></i></a>
                  <?php } ?>
              </div>
              
              <div id="pbio">
              <div class="frame-1-1 border-1px-mercury" style="height:100%; width:100%;">
              
              <div id="result_bio">
                <p class="text-1 opensans-normal-black-16px">
                  “<?php echo $row_det['overview']; ?> ”
                </p>
                </div>
                </div>
                
                
               
              </div>
              
              <div id="dbio">
               <!--<h5>Update Bio</h5>-->
                  <form action="#" method="post" name="fbio">
                  
                     <textarea name="tbio" id="tbio" cols="100%" rows="6" ><?php echo $row_det['overview']; ?></textarea>
                     <input name="bt_bio" type="button" value="Save" onclick="show_bio(document.getElementById('tbio').value);"/>
                     <input name="bt_bio" type="button" value="Cancel" id="bt_bio_cancel"/>
                  </form>
               </div>
               
            </div>

            <div class="group-17">
              <div class="choose-package opensans-semi-bold-black-15px">PACKAGE
              <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                     <a href="javascript:void(0);" id="bt_price" title="Update Price"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:10px;"></i></a>
                    
                     <?php } ?>
              </div>
              <br>
              <!--===================tab price=============================================-->
<?php
$select_stmt_prc=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_GET[kd_inst]'");	
$select_stmt_prc->execute();
$row_prc=$select_stmt_prc->fetch(PDO::FETCH_ASSOC);
?>

<div id="dt_price">
<form action="#" method="post" name="fprice">
<div style="inline-block">
<div style="width:400px; display:inline-block;">
Select Currency<br>
<select name="currency" class="default-select select2" id="currency" style="width:100%; margin-top:10px;">
<option value="">Select Currency</option>
                                                      <?php
                                                         $select_stmt_curr=$db->prepare("SELECT * FROM currency ");	//sql select query
                                                         $select_stmt_curr->execute();
                                                         while($row_curr=$select_stmt_curr->fetch(PDO::FETCH_ASSOC))
                                                         {
															 if ($row_curr['nm_curr']==$row_prc['currency']) {$ckd="selected=\"selected\"";} else {$ckd="";}

                                                         ?>
                                                      <option value="<?php echo $row_curr['nm_curr']; ?>" <?php echo $ckd; ?> ><?php echo $row_curr['nm_curr']; ?></option>
                                                      <?php
                                                         }
                                                         ?>
                                                   </select>
</div>
<div style="width:400px; display:inline-block;">
&nbsp;
</div>



<div style="width:200px; display:inline-block;">
Single Package Price
<input name="p1" id="p1" type="number" value="<?php echo $row_prc['price1']; ?>"/>
</div>
<div style="width:200px; display:inline-block;">
5 Session Price
<input name="p2" id="p2" type="number" value="<?php echo $row_prc['price2']; ?>"/>
</div>
<div style="width:200px; display:inline-block;">
10 Session Price
<input name="p3" id="p3" type="number" value="<?php echo $row_prc['price3']; ?>"/>
</div>

</div>
                  
                                                   
                                                  
                     
                     
                     <input name="bt_save_price" id="bt_save_price" type="button" value="Save" onclick="submit_price()"/>
                     <input name="bt_cancel_price" type="button" value="Cancel" id="bt_cancel_price"/>
                  </form>
               </div>
               
<div id="dprice" style="width:100%;">
               
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-12 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0" style="margin-left:-15px;">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="edgtf-tabs  ui-tabs ui-widget ui-widget-content ui-corner-all" style="border:0px;">
            <ul class="edgtf-tabs-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
               
               <li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tab-specs-138" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                  <a href="#tab-specs-138" class="ui-tabs-anchor btn text-white" role="presentation" tabindex="-1" id="ui-id-1" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px; ">1 Session</a>
               </li>
               <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="0" aria-controls="tab-trophies-549" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
                  <a href="#tab-trophies-549" class="ui-tabs-anchor btn btn-dark" role="presentation" tabindex="-1" id="ui-id-2" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px;">5 Session</a>
               </li>
               <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-achievements-932" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
                  <a href="#tab-achievements-932" class="ui-tabs-anchor btn" role="presentation" tabindex="-1" id="ui-id-3" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px;">10 Session</a>
               </li>-->
            </ul>
			
<?php
$select_stmt_prc=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_GET[kd_inst]'");	
$select_stmt_prc->execute();
$row_prc=$select_stmt_prc->fetch(PDO::FETCH_ASSOC);
?>
            <div id="result_price">
            <!--xxxx-->
            <div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-specs-138" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
               
               
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php echo $row_prc['currency']; ?> <?php echo number_format($row_prc['price1'],0,",","."); ?></div>
                
                <!--<div class="frame-2-2">
              <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=1sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price1']; ?>" target="_self">
              <div class="book-now opensans-bold-black-16px">BOOK NOW</div>
              </a>
              
              </div>-->
              </div>
              
            </div>
            
            
            <!--<div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-trophies-549" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: inline-block;">
               
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php //echo $row_prc['currency']; ?> <?php //echo number_format($row_prc['price2'],0,",","."); ?></div>
                
                <div class="frame-2-2">
              <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=5sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price2']; ?>" target="_self">
              <div class="book-now opensans-bold-black-16px">BOOK NOW</div>
              </a>
              
              </div>
              </div>
              
            </div>-->
            <!--<div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-achievements-932" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
              
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php //echo $row_prc['currency']; ?> <?php //echo number_format($row_prc['price3'],0,",","."); ?></div>
                
                <div class="frame-2-2">
              <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=10sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price3']; ?>" target="_self">
              <div class="book-now opensans-bold-black-16px">BOOK NOW</div>
              </a>
              
              </div>
              </div>
            </div>-->
            
            <!--xxxxxxxx-->
            </div>
            
         </div>

      </div>
   </div>
</div>
<!--<table width="100%" border="0">
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>-->

</div>
<?php
//
include ('modul/front/tab_tab_free.php');
if ($_SESSION['yo_kd_user']==$_GET['kd_inst'])
			{ 
				include ('modul/front/insight_desktop.php');
				include ('modul/front/tips_desktop.php');
			 } 
?> 


            
             
            </div>
          </div>
          
    
            
          <div class="group-26">
           <div id="dt_image">
            <img class="dummy-image" src="foto/user/<?php echo $row['photo']; ?>" style="border-radius:10px;" id="new_profile"/>
			</div>
			<?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <br>
         <a href="javascript:void(0);" id="bt_image"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a> 
         <?php } ?>
         
         <form action="" method="get" name="ffoto">
         							<div id="dimage">
                                    
                                    <div class="picture">
                                    
                                    <!--<div class="overlay">
                                       <div class="text">Click to Change Profile Image</div>
                                    </div>-->
                                    <input name="file_foto" type="file" id="file_foto" value="">
                                    
                                 </div>
                                 <div id="path_profile"></div>
                                    </div></form>
  <?php
  if ($_SESSION['yo_grup']!="4" && $_SESSION['yo_uname']!="")      { ?>  
            <img class="qr-c-ode-desktop" src="modul/listing/temp/<?php echo $row['kd_instructor'].".png"; ?>" />
 <?php } ?>           
            <!--<div class="group-25">
              <div class="available-on opensans-semi-bold-black-15px">AVAILABLE ON
              <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_schedule"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                       <?php //} ?>
              </div>
              
              <div id="dschedule">
              <div id="result_sch">
              <div class="frame-5 opensans-normal-black-16px border-1px-mercury">
              
              <?php
                                       /*$select_stmt_sch=$db->prepare("SELECT * FROM instructor_schedule WHERE  kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                                       $select_stmt_sch->execute();
                                       $row_sch=$select_stmt_sch->fetch(PDO::FETCH_ASSOC);*/
                                       ?>
                                       
                <div class="frame-1">
                  <div class="monday">Monday</div>
                  <div class="text">: <?php //echo $row_sch['mon_start']; ?> - <?php //echo $row_sch['mon_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="tuesday">Tuesday</div>
                  <div class="text">: <?php //echo $row_sch['tue_start']; ?> - <?php //echo $row_sch['tue_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="wednesday">Wednesday</div>
                  <div class="text">: <?php //echo $row_sch['wed_start']; ?> - <?php //echo $row_sch['wed_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Thursday</div>
                  <div class="text">: <?php //echo $row_sch['thurs_start']; ?> - <?php //echo $row_sch['thurs_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Friday</div>
                  <div class="text">: <?php //echo $row_sch['fri_start']; ?> - <?php //echo $row_sch['fri_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Saturday</div>
                  <div class="text">: <?php //echo $row_sch['sat_start']; ?> - <?php //echo $row_sch['sat_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Sunday</div>
                  <div class="text">: <?php //echo $row_sch['sun_start']; ?> - <?php //echo $row_sch['sun_end']; ?></div>
                </div>
              </div>
              </div>
              </div>
              
              <div id="dt_schedule">
                                       <h5 style="padding-left:15px;">Update Schedule</h5>
                                       <form action="#" method="post" name="fschedule">
                                          <table width="100%" border="0" style="border-collapse: collapse; border: none;margin-top:-20px; ">
                                             <tr style="border: none;">
                                                <td width="13%" align="left" style="border: none; text-align:left;">Monday: </td>
                                                <td width="87%" style="border: none; text-align:left;">
                                                   <input name="mon_start" id="mon_start" type="time" value="<?php //echo $row_sch['mon_start']; ?>"/> - 		
                                                </td>
                                                <td width="87%" style="border: none; text-align:left;"><input name="mon_end" id="mon_end" type="time" value="<?php //echo $row_sch['mon_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Tuesday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="tue_start" id="tue_start" type="time"  value="<?php //echo $row_sch['tue_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="tue_end" id="tue_end" type="time"  value="<?php //echo $row_sch['tue_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Wednesday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="wed_start" id="wed_start" type="time" value="<?php //echo $row_sch['wed_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="wed_end" id="wed_end" type="time" value="<?php //echo $row_sch['wed_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Thursday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="thurs_start" id="thurs_start" type="time" value="<?php //echo $row_sch['thurs_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="thurs_end" id="thurs_end" type="time" value="<?php //echo $row_sch['thurs_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Friday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="fri_start" id="fri_start" type="time" value="<?php //echo $row_sch['fri_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="fri_end" id="fri_end" type="time" value="<?php //echo $row_sch['fri_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Saturday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="sat_start" id="sat_start" type="time" value="<?php //echo $row_sch['sat_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="sat_end" id="sat_end" type="time" value="<?php //echo $row_sch['sat_end']; ?>"/></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Sunday:</td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="sun_start" id="sun_start" type="time" value="<?php //echo $row_sch['sun_start']; ?>"/> - 
                                                </td>
                                                <td style="border: none; text-align:left;"><input name="sun_end" id="sun_end" type="time" value="<?php //echo $row_sch['sun_end']; ?>"/></td>
                                             </tr>
                                          </table>
                                          <input name="bt_save_schedule" type="button" value="Save" onclick="show_sch(
                                             (document.getElementById('mon_start').value),
                                             (document.getElementById('mon_end').value),
                                             (document.getElementById('tue_start').value),
                                             (document.getElementById('tue_end').value),
                                             (document.getElementById('wed_start').value),
                                             (document.getElementById('wed_end').value),
                                             (document.getElementById('thurs_start').value),
                                             (document.getElementById('thurs_end').value),
                                             (document.getElementById('fri_start').value),
                                             (document.getElementById('fri_end').value),
                                             (document.getElementById('sat_start').value),
                                             (document.getElementById('sat_end').value),
                                             (document.getElementById('sun_start').value),
                                             (document.getElementById('sun_end').value))"/>
                                          <input name="bt_cancel_schedule" type="button" value="Cancel" id="bt_cancel_schedule"/>
                </form>
              </div>
            </div>-->
            
           
            <!--==========================================================================-->
            <div class="edgtf-ls-amenities-items" style="column-count:1; ">
               <?php
                  $select_stmt_cat=$db->prepare("SELECT
                  type_class.kd_instructor,
                  type_class.type,
                  type_class.aktif,
                  category.id_
                  FROM
                  category
                  JOIN type_class
                  ON category.nm_category = type_class.type WHERE kd_instructor='$row[kd_instructor]' AND type_class.aktif='1'
                  GROUP BY
                  category.id_ LIMIT 1");	//sql select query
                  $select_stmt_cat->execute();
                  ?>
               <!--<?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_type">
               <i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;">
               </i></a>
               <?php //} ?>-->
               <div id="dt_type">
                  <div id="result_type">
                     <table border="0" style="width:230px; border-style:none; border:none;">
                        <tr valign="top" style=" border-style:none; border:none;">
                           <?php
                              while($row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC))
                                    	{
                                         ?>
                           <td valign="top" style="vertical-align:top;border-style:none; border:none;">
                              <span class="xlabel " style="width:220px; margin:5px;">
                              <?php echo $row_cat['type']; ?>
                              </span>
                              <table style="border-style:none; border:none;">
                                 <?php
                                    $select_stmt_catsubx=$db->prepare("SELECT * FROM type_class_sub
                                    WHERE kd_instructor='$row[kd_instructor]' AND type_class='$row_cat[id_]' LIMIT 3");	//sql select query
                                    $select_stmt_catsubx->execute();
                                    while($row_catsubx=$select_stmt_catsubx->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <tr style="border-style:none; border:none;">
                                    <td style="border-style:none; border:none;"><span class="xlabel2 " style="width:220px; margin:2px; margin-left:5px;">
                                       <?php echo $row_catsubx['sub_class_name']; ?>
                                       </span>
                                    </td>
                                    <?php } ?>
                                 </tr>
                              </table>
                           </td>
                           <?php } ?>
                        </tr>
                     </table>
                  </div>
               </div>
               <div class="vc_column-inner" id="dtype" style="width:230px; height:500px; overflow:scroll;">
                  <form action="#" method="post" name="ftype">
                     <div class="wpb_wrapper">
                        <div class="edgtf-accordion-holder edgtf-ac-default  edgtf-accordion clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
                           <?php
                              $select_stmt_catx=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
                              $select_stmt_catx->execute();
                              while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
                              {
                              ?>
                           <h5 class="edgtf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
                              <span class="edgtf-tab-title"><?php echo $row_catx['nm_category']; ?></span>
                              <span class="edgtf-accordion-mark">
                              <span class="edgtf-icon-plus fas fa-plus"></span>
                              <span class="edgtf-icon-minus fas fa-minus"></span>
                              </span>
                           </h5>
                           <div class="edgtf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" >
                              <div class="edgtf-accordion-content-inner">
                                 <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                       <!--<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus ligula eget.</p>-->
                                       <p>
                                       <div class="col-sm-12" style="padding-bottom:25px; column-count:1; z-index:10000;">
                                          <?php
                                             $select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_catx[id_]' AND aktif='1'");	//sql select query
                                             $select_stmt_subcat->execute();
                                             while($row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC))
                                             {
                                             	
                                             	$select_stmt_subcat2=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$row[kd_instructor]' AND sub_class_name='$row_subcat[nm_sub_category]'");	//sql select query
                                             $select_stmt_subcat2->execute();
                                             $row_subcat2=$select_stmt_subcat2->fetch(PDO::FETCH_ASSOC);
                                             if ($row_subcat2['sub_class_name']==$row_subcat['nm_sub_category']) {$chkd="checked=\"checked\"";}
                                             else {$chkd="";}
                                             ?>
                                          <div class="col-sm-12">
                                             <div class="checkboxx">
                                                <input type="checkbox" name="cb_type[]" value="<?php echo $row_subcat['nm_sub_category']; ?>" style="accent-color: #ffe14e;" <?php echo $chkd; ?>>
                                                <?php echo $row_subcat['nm_sub_category']; ?>
                                             </div>
                                          </div>
                                          <?php } ?>
                                       </div>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
                     </div>
                     <input name="bt_save_type" id="bt_save_type" type="button" value="Save" onclick="submit_type_free()"/>
                     <input name="bt_cancel_type" id="bt_cancel_type" type="button" value="Cancel"/>
                  </form>
               </div>
			   
			   <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_type">
               <i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;">
               </i></a>
               <?php } ?>
            </div>
            
            
            
              
             <div style="width:100%;">
              <center>
              <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { 
			  $cek_pm=$db->prepare("SELECT * FROM payments_upgrade WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
              $cek_pm->execute();
              $row_cek_pm=$cek_pm->fetch(PDO::FETCH_ASSOC);
			  if ($row_cek_pm['approve']=="0") {$dis="disabled=\"disabled\"";}
			  
			  ?>
                  <a href="?com=upgrade_account&kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_self">
              <input type='button' class='btn btn-finish btn-fill btn-wd' name='finish' value='UPGRADE ACCOUNT' data-color="yellow" style="background-color:#FC0;" <?php echo $dis; ?>/>
              </a>
              <?php
			  echo "<br>";
			  if ($row_cek_pm['approve']=="0")
			  {
			  echo "your upgrade payment is being processed";
			  }
			  ?>
                  <?php } ?>
                  
              
              </center>
              </div>
            <!--==========================================================================-->
          </div>
         
        </div>
        <div class="group-47" style="height:100%; position:relative; margin-top:150px;">
          <!--<div class="overlap-group">
            <div class="rectangle-6"></div>
            <div class="group-21">
              <div class="group-20">
                <div class="instructor-type opensans-bold-black-16px">Instructor Type</div>
                <div class="rectangle-7"></div>
              </div>
              <a href="profile-desktop.html"
                ><div class="who-do-they-train opensans-normal-black-16px">Who do they train</div></a
              ><a href="profile-desktop.html"
                ><div class="where-do-they-train opensans-normal-black-16px">Where do they train</div></a
              ><a href="profile-desktop.html"><div class="posts opensans-normal-black-16px">Posts</div></a
              ><a href="profile-desktop.html"
                ><div class="text-4 opensans-normal-black-16px">Social Media &amp; Contact</div></a
              ><a href="profile-desktop.html"><div class="reviews opensans-normal-black-16px">Reviews</div></a>
            </div>
          </div>-->
          <!--<div class="overlap-group1">
            <img class="frame-3" src="img/frame-3@2x.svg" />
            <div class="frame-8 border-1px-mercury">
              <div class="bodybuilding opensans-normal-black-15px">Bodybuilding</div>
            </div>
            <div class="frame-4 border-1px-mercury">
              <div class="body-sculpting opensans-normal-black-15px">Body Sculpting</div>
            </div>
            <div class="frame-5-1 border-1px-mercury">
              <div class="weight-loss opensans-normal-black-15px">Weight Loss</div>
            </div>
            <div class="frame-6 border-1px-mercury">
              <div class="weight-gain opensans-normal-black-15px">Weight Gain</div>
            </div>
            <img class="frame-7" src="img/frame-7@2x.svg" />
          </div>-->
          
          <?php
//
//include ('modul/front/tab_tab.php');
?>

     
        </div>
        <!--<div class="header-1">
          <div class="rectangle-2-1"></div>
          <img class="logo-instructor-1" src="img/logoinstructor@2x.png" />
        </div>-->
      </div>
    </div>


    <!--mobile======================================================================-->
    
    <div class="container-center-horizontal">
      <div class="profile-mobile screen margin_atas_xx">
        <!--<div class="header-12">
          <img class="logo-instructor-12" src="img/logoinstructor@2x.png" />
          <div class="rectangle-2-12"></div>
        </div>-->
        <div class="overlap-group1-6">
          <img class="bg-dummy-6" src="img/bgdummy@1x.png" />
          <div id="dt_image2">
          <img class="dummy-image-6" src="foto/user/<?php echo $row['photo']; ?>" style="border-radius:10px;" id="new_profile2"/>
          </div>
          
          
          
        </div>
        <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <br>
         <center>
         <a href="javascript:void(0);" id="bt_image2">
         <i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;" ></i>
         <small>Update Image</small>
         </a>
         </center> 
         <?php } ?>
         
         <form action="" method="get" name="ffoto2">
         <center>
         							<div id="dimage2">
                                    
                                    <div class="picture">
                                    
                                    <div class="overlay">
                                       <div class="text">Click to Change Profile Image</div>
                                    </div>
                                    <input name="file_foto2" type="file" id="file_foto2" value="">
                                    
                                 </div>
                                 <div id="path_profile"></div>
                                    </div>
                                    </center>
                                    </form>
        <div id="dname2">
        <div class="name-8">
		<div id="result_uname2">
		<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
        </div>
        </div>
        </div>
        
        <div id="dt_name2">
            <form action="#" method="GET" name="fname2">
            <table width="100%" border="0" style="margin-top:50px; border:hidden;">
  <tr style=" border:hidden;">
    <td colspan="2" style=" border:hidden;"><input name="tfname2" id="tfname2" type="text" value="<?php echo $row['first_name']; ?>" style="background-color:#FFF;"/></td>
    </tr>
    <tr>
    <td colspan="2" style=" border:hidden;"><input name="tlname2" id="tlname2" type="text" value="<?php echo $row['last_name']; ?>" style="background-color:#FFF;"/></td>
    </tr>
    <tr>
    <td width="50%" align="right" style=" border:hidden; text-align:right;">
    <input name="bt_save_name2" id="bt_save_name2" type="button" value="Save" onclick="show_unama2((document.getElementById('tfname2').value),(document.getElementById('tlname2').value));"/>
    </td>
    <td width="50%" align="left" style=" border:hidden; text-align:left;">
    <input name="bt_cancel_name2" type="button" value="Cancel" id="bt_cancel_name2" style="text-align:left;"/></td>
    </tr>
</table>
            </form>
            </div>
            
        <center>
		<?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_name2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i>
               <small>Update Name</small>
               </a>  
               
               <?php } ?>
        </center>
        <div class="group-45 opensans-normal-black-14px">
          <div class="group-27" style="margin-top:-20px;">
            <!--<div class="group-6-6">-->
              <span><center>FREEMIUM</center></span>
                          
           <!-- </div>-->
            
          </div>
          <div class="group-10-6" style="margin-top:-25px;">
            <div class="group-8-6">
              <div class="like-6">Like</div>
              <a href="javascript:void(0);" onclick="show_like2('<?php echo $_GET['kd_inst']; ?>');">
              <img class="ic-like-6" src="img/iclike@1x.png" />
              </a>
              
             
              
              <div class="number-6">
			  <span id="result_like2">
			  <?php echo $row_like['jml_like']; ?>
              </span>
              </div>
            </div>
            <div class="group-9-6">
              <div class="share-6">Share</div>
              <a href="javascript:void(0);" id="bt_share2"><img class="ic-share-6" src="img/icshare@1x.png" /></a>
              
              <div style="margin-left:75px; margin-top:40px; z-index:100000; position:absolute; width:40px;" id="link_share2">
                  <table width="100%" border="0" style="margin-top:-65px; border:none; border-style:none;">
  <tr style=" border:none; border-style:none;margin-bottom:14px;height:30px;">
    <td style=" border:none; border-style:none;">
    <a href="http://www.facebook.com/sharer/sharer.php?u=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_blank"><img src="img/icon_fb.png" style="width:25px;  position:absolute; margin-right:5px; " />
    </a> 
    </td>
    </tr>
    
    <tr style=" border:none; border-style:none;margin-bottom:14px;height:30px;">
    <td style=" border:none; border-style:none;"><a href="http://twitter.com/share?url=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>&text=Book wellness instructor anytime and anywhere&hashtags=simplesharebuttons" target="_blank"><img src="img/icon_tw.png" style="width:25px;  position:absolute; margin-right:5px;" />
    </a> 
    </td>
    </tr>
    
    <tr style=" border:none; border-style:none;">
    <td style=" border:none; border-style:none;"><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://yoinstructor.com/share.php?kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_blank"><img src="img/icon_in.png" style="width:25px;  position:absolute; margin-right:5px;" />
    </a> 
    </td>
  </tr>
</table>
                  
                  </div>
                  
            </div>
          </div>
<?php
  if ($_SESSION['yo_grup']!="4" && $_SESSION['yo_uname']!="")      { ?>            
          <img class="qr-c-ode-mobile" src="modul/listing/temp/<?php echo $row['kd_instructor'].".png"; ?> " width="200" height="200" align="middle"/>
<?php } ?>  

<?php
//echo $_SESSION['yo_grup'];
//echo $_SESSION['yo_uname'];
?>        
        
        <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { 
			  $cek_pm=$db->prepare("SELECT * FROM payments_upgrade WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
              $cek_pm->execute();
              $row_cek_pm=$cek_pm->fetch(PDO::FETCH_ASSOC);
			  if ($row_cek_pm['approve']=="0") {$dis="disabled=\"disabled\"";}
			  
			  ?>
                  <a href="?com=upgrade_account&kd_inst=<?php echo $_GET['kd_inst']; ?>" target="_self">
              <input type='button' class='btn btn-finish btn-fill btn-wd' name='finish' value='UPGRADE ACCOUNT' data-color="yellow" style="background-color:#FC0;" <?php echo $dis; ?>/>
              </a>
              <?php
			  echo "<br>";
			  if ($row_cek_pm['approve']=="0")
			  {
			  echo "your upgrade payment is being processed";
			  }
			  ?>
                  <?php } ?>
                  
                    
         
          
          <div class="group-63">
            <div class="bio-6 opensans-semi-bold-black-13px">BIO
            <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_bio2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
                  <?php } ?>
            </div>
            <div id="pbio2">
            <div class="frame-1-7 border-1px-mercury" style="height:100%;">
            <div id="result_bio2">
              <p class="text-10 opensans-normal-black-14px" style="text-align:left;">
                <?php echo $row_det['overview']; ?>
              </p>
              </div>
              </div>
              
              
            </div>
            
            <div id="dbio2">
               <!--<h5>Update Bio</h5>-->
                  <form action="#" method="post" name="fbio2">
                  
                     <textarea name="tbio2" id="tbio2" cols="100%" rows="6" ><?php echo $row_det['overview']; ?></textarea>
                     <input name="bt_bio2" type="button" value="Save" onclick="show_bio2(document.getElementById('tbio2').value);"/>
                     <input name="bt_bio2" type="button" value="Cancel" id="bt_bio_cancel2"/>
                  </form>
               </div>
          </div>
                                                
          
          
          <div class="group-17-6">
            <div class="choose-package-6 opensans-semi-bold-black-13px">PACKAGE
            <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                     <a href="javascript:void(0);" id="bt_price2" title="Update Price"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:10px;"></i></a>
                    
                     <?php } ?>
            </div>
            <div class="group-15-6">
              <!--<div class="frame-2-19"><div class="package-a">Package A</div></div>
              <div class="frame-20 border-1px-black">
                <div class="package-6 opensans-normal-black-14px">Package B</div>
              </div>
              <div class="frame-20 border-1px-black">
                <div class="package-6 opensans-normal-black-14px">Package C</div>
              </div>-->
              
              <!--=================================================================-->
 <?php
$select_stmt_prcm=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_GET[kd_inst]'");	
$select_stmt_prcm->execute();
$row_prcm=$select_stmt_prcm->fetch(PDO::FETCH_ASSOC);
?>
               
 <div id="dprice2" style="width:100%;">
 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-12 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0" style="margin-left:-15px;">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="edgtf-tabs  ui-tabs ui-widget ui-widget-content ui-corner-all" style="border:0px;">
            <ul class="edgtf-tabs-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
               
               <li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tab-specs-138" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                  <a href="#tab-specs-138" class="ui-tabs-anchor btn text-white btn-sm" role="presentation" tabindex="-1" id="ui-id-1" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px; width:100%; margin-left:15px;">1 Session</a>
               </li>
               <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="0" aria-controls="tab-trophies-549" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
                  <a href="#tab-trophies-549" class="ui-tabs-anchor btn btn-dark btn-sm" role="presentation" tabindex="-1" id="ui-id-2" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px;width:100%; margin-left:15px;">5 Session</a>
               </li>-->
               <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-achievements-932" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
                  <a href="#tab-achievements-932" class="ui-tabs-anchor btn btn-sm" role="presentation" tabindex="-1" id="ui-id-3" style="background-color:#FFF; border:1px; border-color:#ccc; border-radius:7px;width:100%; margin-left:15px;">10 Session</a>
               </li>-->
            </ul>
            
<div id="result_price2">
            <div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-specs-138" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
               
               <div class="group-56" style="width:100%;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php echo $row_prcm['currency']; ?> <?php echo number_format($row_prcm['price1'],0,",","."); ?>
                <!--<div class="frame-2-18">
          <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=1sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price1']; ?>" target="_self">
          <div class="book-now-6 opensans-bold-black-16px">BOOK NOW</div>
          </a>
          </div>-->
                
                </div>
                
                
                
              </div>
               
              
            </div>
            <!--<div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-trophies-549" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: inline-block;">
              
               <div class="group-56" style="width:100%;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php //echo $row_prcm['currency']; ?> <?php //echo number_format($row_prcm['price2'],0,",","."); ?>
                <div class="frame-2-18">
          <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=5sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price2']; ?>" target="_self">
          <div class="book-now-6 opensans-bold-black-16px">BOOK NOW</div>
          </a>
          </div>
                </div>
                
              </div>
              
              
            </div>-->
            <!--<div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-achievements-932" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
               <div class="group-56" style="width:100%;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php //echo $row_prcm['currency']; ?> <?php //echo number_format($row_prcm['price3'],0,",","."); ?>
                <div class="frame-2-18">
          <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>&pkg=10sess&curr=<?php //echo $row_prc['currency']; ?>&prc=<?php //echo $row_prc['price3']; ?>" target="_self">
          <div class="book-now-6 opensans-bold-black-16px">BOOK NOW</div>
          </a>
          </div>
                </div>
              </div>
            </div>-->
            
            
              </div>
         </div>
      </div>
   </div>
</div>
</div>
              <!--=================================================================-->
            </div>
            
<div id="dt_price2">
<form action="#" method="post" name="fprice2">
<div style="inline-block">
<div style="width:200px; display:inline-block;">
Select Currency<br>
<select name="currency2" class="default-select select2" id="currency2" style="width:100%; margin-top:10px;">
<option value="">Select Currency</option>
                                                      <?php
                                                         $select_stmt_curr=$db->prepare("SELECT * FROM currency ");	//sql select query
                                                         $select_stmt_curr->execute();
                                                         while($row_curr=$select_stmt_curr->fetch(PDO::FETCH_ASSOC))
                                                         {
															 if ($row_curr['nm_curr']==$row_prc['currency']) {$ckd="selected=\"selected\"";} else {$ckd="";}

                                                         ?>
                                                      <option value="<?php echo $row_curr['nm_curr']; ?>" <?php echo $ckd; ?> ><?php echo $row_curr['nm_curr']; ?></option>
                                                      <?php
                                                         }
                                                         ?>
                                                   </select>
</div>
<div style="width:400px; display:inline-block;">
&nbsp;
</div>



<div style="width:200px; display:inline-block;">
1 Session Price
<input name="p12" id="p12" type="number" value="<?php echo $row_prc['price1']; ?>"/>
</div>
<div style="width:200px; display:inline-block;">
5 Session Price
<input name="p22" id="p22" type="number" value="<?php echo $row_prc['price2']; ?>"/>
</div>
<div style="width:200px; display:inline-block;">
10 Session Price
<input name="p32" id="p32" type="number" value="<?php echo $row_prc['price3']; ?>"/>
</div>

</div>
                     <input name="bt_save_price2" id="bt_save_price2" type="button" value="Save" onclick="submit_price2()"/>
                     <input name="bt_cancel_price2" type="button" value="Cancel" id="bt_cancel_price2"/>
                  </form>
               </div>
               
               
          </div>

          <!--<div class="frame-2-18">
          <a href="?com=booking&kd_inst=<?php //echo $_GET['kd_inst']; ?>">
          <div class="book-now-6 opensans-bold-black-16px">BOOK NOW</div>
          </a>
          </div>-->
          <div class="group-62" >
            <div class="group-61-1">
              <div class="rectangle"></div>
              <div class="group-37">
                <div class="type opensans-bold-black-13px">TYPE
<?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
<a href="javascript:void(0);" id="bt_type2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
<?php } ?>

                </div>
                <div class="overlap-group-6">
<div id="dt_type2">
<div id="result_type2">                   
                  
<?php
$select_stmt_cat=$db->prepare("SELECT
type_class.kd_instructor,
type_class.type,
type_class.aktif,
category.id_
FROM
category
JOIN type_class
ON category.nm_category = type_class.type WHERE kd_instructor='$row[kd_instructor]' AND type_class.aktif='1'
GROUP BY
category.id_ LIMIT 1");	//sql select query
                                             $select_stmt_cat->execute();
                                             while($row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
                                          <div class="edgtf-ls-combined-item " style="padding:5px;">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                                <span class="xlabel " style="width:250px;">
												<?php echo $row_cat['type']; ?>
                                                </span>
                                             </a>
                                          </div>
                                          
                                          <?php
                                             $select_stmt_catsubx=$db->prepare("SELECT * FROM type_class_sub
 WHERE kd_instructor='$row[kd_instructor]' AND type_class='$row_cat[id_]' LIMIT 3");	//sql select query
                                             $select_stmt_catsubx->execute();
                                             while($row_catsubx=$select_stmt_catsubx->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
                                             <div class="edgtf-ls-combined-item " style="padding:5px; margin-left:30px;">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                                <span class="xlabel2 " style="width:250px;">
												<?php echo $row_catsubx['sub_class_name']; ?>
                                                </span>
                                             </a>
                                          </div>
                                          <?php } ?>
                                          
                                          <?php } ?>

                </div>
              </div>
            </div>
            
            </div>
            </div>
            
<div id="dtype2">
 <form action="#" method="post" name="ftype2">
      <div class="wpb_wrapper" style="width:100%;">
         <div class="edgtf-accordion-holder edgtf-ac-default  edgtf-accordion clearfix ui-accordion ui-widget ui-helper-reset" role="tablist" style="width:100%;">
            <?php
										
			$select_stmt_catx=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
			$select_stmt_catx->execute();
			while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
			{
			?>
            <h5 class="edgtf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"  style="width:100%;">
               <span class="edgtf-tab-title"><?php echo $row_catx['nm_category']; ?></span>
               <span class="edgtf-accordion-mark">
               <span class="edgtf-icon-plus fas fa-plus"></span>
               <span class="edgtf-icon-minus fas fa-minus"></span>
               </span>
            </h5>
            <div class="edgtf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none; width:100%;">
               <div class="edgtf-accordion-content-inner">
                  <div class="wpb_text_column wpb_content_element ">
                     <div class="wpb_wrapper">
                        <!--<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus ligula eget.</p>-->
                        <p>
                        <div class="col-sm-12" style="padding-bottom:25px; column-count:2; width:370px;">
                             <?php
										
									$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_catx[id_]' AND aktif='1'");	//sql select query
									$select_stmt_subcat->execute();
									while($row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC))
									{
										
										$select_stmt_subcat2=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$row[kd_instructor]' AND sub_class_name='$row_subcat[nm_sub_category]'");	//sql select query
									$select_stmt_subcat2->execute();
									$row_subcat2=$select_stmt_subcat2->fetch(PDO::FETCH_ASSOC);
									if ($row_subcat2['sub_class_name']==$row_subcat['nm_sub_category']) {$chkd="checked=\"checked\"";}
									else {$chkd="";}
									?>
							 
                              <div class="col-sm-12">
                                 <div class="checkboxx">
                                 
                                 <input type="checkbox" name="cb_type2[]" value="<?php echo $row_subcat['nm_sub_category']; ?>" style="accent-color: #ffe14e;" <?php echo $chkd; ?>>
                                    <?php echo $row_subcat['nm_sub_category']; ?>
                                 </div>
                              </div>
                              <?php } ?>

                           </div>
                           </p>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            
            
         </div>
         <!--<div class="vc_empty_space" style="height: 90px"><span class="vc_empty_space_inner"></span></div>-->
      </div>
      <input name="bt_save_type2" id="bt_save_type2" type="button" value="Save" onclick="submit_type2_free()"/>
      <input name="bt_cancel_type2" id="bt_cancel_type2" type="button" value="Cancel"/>
      </form>
   </div>
   
   
            
            
              <!--</div>
            </div>-->
            
            
            
            <!--<div class="group-51">
              <div class="rectangle"></div>
              <div class="group-33-4">
                <div class="posts-6 opensans-bold-black-13px">POST
                <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_post2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:10px;"></i></a>
                  <?php //} ?>
                  
                  </div>
                <br>
                
<div id="d_post2">   
<div class="edgtf-bl-wrapper edgtf-outer-space" style="margin-left:0px;">
<form action="#" method="post" name="fpost" id="fpost2" enctype="multipart/form-data">
Title<br>
<input name="nm_title2" type="text"  id="nm_title2" style="width:100%"/><br>      
Post Images<br>
<input name="pimages2" type="file"  id="pimages2" style="width:100%"/><br>     
Description<br>
<textarea name="desc_post2" id="desc_post2" cols="" rows="2"  style="width:100%"></textarea><br>

<input name="bt_save_post2" type="button" value="Add New" onclick="submit_post2()"/>
<input name="bt_cancel_post2" type="button" value="Cancel" id="bt_cancel_post2"/>        
</form>
</div>
</div>

<div id="dt_post2">
<div id="result_post2">      


                                                                <?php
																/*
                                             $select_stmt_post=$db->prepare("SELECT * FROM instructor_post WHERE  kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1'");	//sql select query
                                             $select_stmt_post->execute();
                                             while($row_post=$select_stmt_post->fetch(PDO::FETCH_ASSOC))
                                             {
												 */
                                             ?>
       <div class="edgtf-ig-image edgtf-item-space">
            <div class="edgtf-ig-image-inner">
               <img width="800" height="552" src="foto/assets/<?php //echo $row_post['image']; ?>" class="attachment-full size-full" alt="a" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" style="border-radius:7px; margin-bottom:15px;"> 
            </div>
         </div>
                                                <?php //} ?>


              </div>
            </div>
            
            </div>
            </div>-->
            
            
            <div class="group-52">
              <div class="rectangle"></div>
              <div class="group-32-5">
                <div class="text-17 opensans-bold-black-13px">CONTACT</div>
                <!--<div class="flex-row-3">
                  <img class="ic-ig-1" src="img/icig@1x.png" />
                  <img class="flex-row-item-1" src="img/icyt@1x.png" />
                  <img class="flex-row-item-1" src="img/ictw@1x.png" />
                  <img class="flex-row-item-1" src="img/icfb@1x.png" />
                </div>-->
                



            


            
            
<div id="dt_contact2">
<div id="result_contact2">    
                <div class="text-18 opensans-normal-black-13px">
				<?php echo $row['propinsi']; ?>, 
				<?php echo $row['kota']; ?> 
				<?php echo $row['negara']; ?>
                </div>
                
                <div class="text-19 opensans-normal-black-13px">
                <a href="tel:<?php echo $row['phone_number']; ?>"><span style="color:#03F;"><?php echo $row['phone_number']; ?></span>
                </a><br>
                <a href="mailto:<?php echo $row['email']; ?>"><span style="color:#03F;"><?php echo $row['email']; ?></span></a>
               
                  <!--<a href="mailto:<?php //echo $row['email']; ?>"><?php //echo $row['email']; ?>
<div ng-attr-style="{{style.btn.value}};{{style.text1.value}};" ng-class="(ctrl.loader.on ? 'running ld ld-' + ctrl.loader.type : '')" class="ng-binding" style="backface-visibility:hidden;position:relative;cursor:pointer;display:inline-block;white-space:nowrap;background:#ffe66c;border-radius:500px;border:0px solid #444;border-width:0px 0px 0px 0px;padding:10px 15px 10px 43px;color:#140001;font-size:16px;font-family:Helvetica Neue;font-weight:900;font-style:normal;">Click to Emaill : <?php //echo $row['email']; ?><i class="fa ng-scope fa-arrow-right" ng-attr-style="{{style.icon.value}}" ng-class="'fa-' + ctrl.icon.class" ng-if="ctrl.icon.align=='Right' &amp;&amp; ctrl.icon.class" style="color:#090100;font-size:1em;background:#fff;border-radius:500px;border:0px solid transparent;border-width:0px 0px 0px 0px;padding:8px 8px 8px 8px;margin:6px 6px 6px 6px;position:absolute;top:0px;left:0px"></i><div ng-attr-style="{{style.text2.value}}" class="ng-binding" style="color:#999;font-size:10px;font-family:Helvetica Neue;font-weight:initial;font-style:normal;text-align:center;margin:0px 0px 0px 0px"></div></div>  
                </a>-->
                </div>
            
            
              
              </div>
              <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <a href="javascript:void(0);" id="bt_contact2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-top:10px;"></i></a>
            <?php } ?>
</div>

<div id="dcontact2">
            <!--<h5 style="padding-left:0px;">Update Contact</h5>-->
<form action="#" method="post" name="fcontact2">
<div id="boxx" style="display:inline-block;">
<div id="col1" style="width:100%; display:inline-block;">
<div id="form-group-sm">
Country
<select name="country2" class="default-select select2" id="country2" onchange="show_states2(document.getElementById('country2').value);" style="width:100%;">
                                 <option >Country</option>
                                 <?php
                                    $select_stmt_country=$db->prepare("SELECT * FROM countries");	//sql select query
                                    $select_stmt_country->execute();
                                    while($row_countries=$select_stmt_country->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_countries['id']; ?>" <?php if ($row_countries['id']==$row_inst['country']) {echo "selected=\"selected\"";} ?>><?php echo $row_countries['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col2" style="width:100%; display:inline-block;"><div id="result_states2">
States
                              <select name="state2" id="state2" style="width:100%;">
                                 <?php
                                    $select_stmt_state=$db->prepare("SELECT * FROM states WHERE country_id='$row[country]'");	//sql select query
                                    $select_stmt_state->execute();
                                    while($row_state=$select_stmt_state->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_state['id']; ?>" <?php if ($row_state['id']==$row_inst['state']) {echo "selected=\"selected\"";} ?>><?php echo $row_state['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col1" style="width:100%; display:inline-block;">
<div id="result_city2">
Cities
<select name="city2" id="city2" style="width:100%;">
                                 <?php
                                    $select_stmt_city=$db->prepare("SELECT * FROM cities WHERE state_id='$row[state]'");	//sql select query
                                    $select_stmt_city->execute();
                                    while($row_city=$select_stmt_city->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_city['id']; ?>" <?php if ($row_city['id']==$row_inst['city']) {echo "selected=\"selected\"";} ?>><?php echo $row_city['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col2" style="width:100%; display:inline-block;">
Street Name
<input name="street_name2" type="text"  id="street_name2" placeholder="Street Name" value="<?php echo $row_inst['street_name']; ?>">
</div>
<div id="col2" style="width:100%; display:inline-block;">
Street Number
<input name="street_number2" type="text"  id="street_number2" placeholder="Street Number" value="<?php echo $row_inst['street_number']; ?>">
</div>
<div id="col2" style="width:100%; display:inline-block;">
Zip Code
<input name="zip_code2" type="text"  id="zip_code2" placeholder="Zip Code" value="<?php echo $row_inst['zip_code']; ?>">
</div>
<div id="col2" style="width:100%; display:inline-block;">
Phone Number
<input name="phone2" type="text" id="phone2" placeholder="Phone Number" value="<?php echo $row_inst['phone_number']; ?>">
</div>
<div id="col2" style="width:100%; display:inline-block;">
Email
<input name="email2" type="text"  id="email2" placeholder="Email" value="<?php echo $row_inst['username']; ?>">
</div>
</div>            

                  <input name="bt_save_contact2" type="button" value="Save" onclick="submit_contact2()"/>
                  <input name="bt_cancel_contact2" type="button" value="Cancel" id="bt_cancel_contact2"/>
               </form>
            </div>
</div>


            </div>
            
            <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst'])
			{ 
				include ('modul/front/insight_mobile.php');
				include ('modul/front/tips_mobile.php');	
			 } 
			 ?>
            
            
            
          </div>
        </div>
        <!--<div class="footer">
          <div class="rectangle-2-13"></div>
          <img class="logo-instructor-13" src="img/logoinstructor@2x.png" />
        </div>-->
      </div>
    </div>
    
    <!--end mobile======================================================================-->

<script>
function submit_type_free() {
   var form = document.ftype;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_type_free.php',
       data: dataString,
       success: function(data){
        jQuery('#result_type').html(data);
   		jQuery('#dtype').hide();
   		jQuery('#dt_type').show();
   
   
       }
   });
   return false;
   }
   
//================================================================
function submit_type2_free() {
   var form = document.ftype2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_type2_free.php',
       data: dataString,
       success: function(data){
        jQuery('#result_type2').html(data);
   		jQuery('#dtype2').hide();
   		jQuery('#dt_type2').show();
   
   
       }
   });
   return false;
   }
   //====================================================================
   
   function submit_contact2() {
   var form = document.fcontact2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_contact2.php',
       data: dataString,
       success: function(data){
        jQuery('#result_contact2').html(data);
   		jQuery('#dcontact2').hide();
   		jQuery('#dt_contact2').show();
   
   
       }
   });
   return false;
   }
   
//========================================================================
function submit_price() {
   var form = document.fprice;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_price.php',
       data: dataString,
       success: function(data){
		jQuery('#dprice').show();
        jQuery('#result_price').html(data);
   		jQuery('#dt_price').hide();
		
   
   
       }
   });
   return false;
   }
   //=============================================
   function submit_price2() {
   var form = document.fprice2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_price2.php',
       data: dataString,
       success: function(data){
		jQuery('#dprice2').show();
        jQuery('#result_price2').html(data);
   		jQuery('#dt_price2').hide();
		
   
   
       }
   });
   return false;
   }
   //=============================================
</script>

<script>
$(document).ready(function()
{
$('#link_share').hide();

$( "#bt_share" ).click(function() {
  $( "#link_share" ).toggle( "fast" );
});

$('#link_share2').hide();

$( "#bt_share2" ).click(function() {
  $( "#link_share2" ).toggle( "fast" );
});

})
</script>

