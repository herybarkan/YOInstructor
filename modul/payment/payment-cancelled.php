<?php
ob_start();
session_start();

date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');


?>
<?php
 $select_pay=$db->prepare("SELECT * FROM payments_upgrade where id='$_GET[payid]'"); //sql select query
   $select_pay->execute();
   $row=$select_pay->fetch(PDO::FETCH_ASSOC);
   
   
$data_sources  = $row['product_name'];
$data = explode(",", $data_sources);
//echo $data[0]; // piece1
//echo $data[1]; // piece2
//echo $data[2]; // piece2


 $select_cont=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS nm_negara,
   states.`name` AS nm_state,
   cities.`name` AS nm_city
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
   WHERE instructor.kd_instructor='$row[kd_instructor]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);
   

?>
<style type="text/css">
   @media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   .posisi{
	   margin-top: 137px;
	   }
.font_hitam{
   font-size:50px; font-family: 'Roboto';
   color:#000;
}
.font_kuning{
   font-size:50px; font-family: 'Roboto';
   color:#E7C901;
}

.font_hitam2{
   font-size:35px; font-family: 'Roboto';
   color:#000;
}
.font_kuning2{
   font-size:35px; font-family: 'Roboto';
   color:#E7C901;
}
   }
   @media only screen 
   and (max-width : 1200px) {
   .posisi{
	   margin-top: 0px;
	   }
.font_hitam{
   font-size:40px; font-family: 'Roboto';
   color:#000;
}
.font_kuning{
   font-size:40px; font-family: 'Roboto';
   color:#E7C901;
}

.font_hitam2{
   font-size:30px; font-family: 'Roboto';
   color:#000;
}
.font_kuning2{
   font-size:30px; font-family: 'Roboto';
   color:#E7C901;
}
   }
</style>

<div class="edgtf-full-width">
   <div class="edgtf-full-width-inner posisi">
      <div class="edgtf-grid-row">
         <div class="edgtf-page-content-holder edgtf-grid-col-12">
            <div class="edgtf-row-grid-section-wrapper edgtf-content-aligment-center">
               <div class="edgtf-row-grid-section">
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1534500930311">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <h2 class="edgtf-custom-font-holder  edgtf-cf-7871  " style="font-family: Montserrat;font-size: 60px;line-height: 65px;font-weight: 700; margin-top:70px;" data-item-class="edgtf-cf-7871" data-font-size-1366="50px" data-font-size-1024="40px" data-font-size-768="30px" data-font-size-680="20px" data-line-height-1366="0px" data-line-height-1024="0px" data-line-height-768="0px" data-line-height-680="0px">
                                 <span class="font_kuning">Payment</span> <span class="font_hitam">Confirmation</span>
                              </h2>
                              
                              <h3>Your Payment is Canceled</h3>
                              
                              
                              
                              <br>
                              <a href="index.php?com=bprofile&kd_inst=<?php echo $_SESSION['yo_kd_user']; ?>"><span class="btn" style="background-color:#FFE45F;">Show My Profile</span>
</a>
                              <br>
                              <br>
                              <br>
                              
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>