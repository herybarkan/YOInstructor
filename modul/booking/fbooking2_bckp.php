<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<?php
   ob_start();
   session_start();
   
   $select_cont=$db->prepare("SELECT
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
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);
   
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
   instructor.aktif,
   user_.username
   FROM
   user_
   JOIN instructor
   ON user_.kd_user = instructor.kd_instructor 
   WHERE kd_instructor='$_GET[kd_inst]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
   
srand ((double) microtime() * 10000000);
$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");
$rand_index = array_rand($input,8);
$kode= $input[$rand_index[3]].$input[$rand_index[5]].$input[$rand_index[4]].$input[$rand_index[2]].$input[$rand_index[1]];

$zxtahun=date('y');
$zxbulan=date('m');
$zxtanggal=date('d');
$zxjam=date('H');
$zxmenit=date('i');
$zxdetik=date('s');
$awal="ORD";

$kd_order = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;
   ?>
   
<script type="text/javascript" src="modul/ajax_js/ajax_schedule2.js"></script>

<style type="text/css">
.ui-datepicker-calendar tr, .ui-datepicker-calendar td, .ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
div.ui-datepicker{font-size:20px;width:inherit;height:inherit;}
.ui-datepicker-title span{font-size:20px;}
</style>

<div class="edgtf-title-holder edgtf-centered-type edgtf-title-va-header-bottom edgtf-has-bg-image edgtf-bg-parallax" style="height: 600px; background-image: url(&quot;images/booking-bg.jpg&quot;); background-position: center -105.263px;" data-height="375">
   <div class="edgtf-title-image">
      <img itemprop="image" src="images/booking-bg.jpg" alt="a">
   </div>
   <div class="edgtf-title-wrapper" style="height: 375px">
      <div class="edgtf-title-inner">
         <div class="edgtf-grid">
            <h2 style="padding-top: 25%;">
            <span class="font_hitam">BOOKING</span> <span class="font_kuning">FORM</span>
         </div>
      </div>
   </div>
</div>

<div class="edgtf-full-width" style="margin-top:73px;">
   <div class="edgtf-full-width-inner">
      <div class="edgtf-grid-row">
         <div class="edgtf-page-content-holder edgtf-grid-col-12">
            <div class="edgtf-row-grid-section-wrapper ">
               <div class="edgtf-row-grid-section">
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1534429160490">
                     <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div role="form" class="wpcf7" id="wpcf7-f1050-p1258-o3" lang="en-US" dir="ltr">
                                 <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                 <form action="modul/payment/request.php" method="post" class="wpcf7-form init cf7_custom_style_1" novalidate="novalidate">
                                    <div style="display: none;">
                                       
                                    </div>
                                    <div class="edgtf-cf7-form-cs">
                                    Select Date (required)
  
<div class="vc_row wpb_row vc_inner vc_row-fluid">
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
                  <div id="datepicker" style="width:100%; margin-top:15px;"></div>
               </div>
            </div>
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
   
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
                  <input type="hidden" name="your-name" value="" size="40" class="form-control" id="ttgl">
                  <input type="hidden" name="item_number" value="<?php echo $kd_order; ?>" id="item_number">
                  <input type="hidden" name="hf_pid" value="<?php echo $_GET['kd_inst']; ?><?php echo $_GET['pkg']; ?>" id="hf_pid">
                  <input type="hidden" name="hf_kd_inst" value="<?php echo $_GET['kd_inst']; ?>" id="hf_kd_inst">
                  <input type="hidden" name="hf_pkg" value="<?php echo $_GET['pkg']; ?>" id="hf_pkg">
                  <input type="hidden" name="hf_curr" value="<?php echo $_GET['curr']; ?>" id="hf_curr">
                  <input type="hidden" name="hf_prc" value="<?php echo $_GET['prc']; ?>" id="hf_prc">
                  <input type="hidden" name="amount" value="<?php echo $_GET['prc']; ?>" id="amount">
                  <input type="hidden" name="hf_member" value="<?php echo $_SESSION['yo_kd_user']; ?>" id="hf_member">
                  
                  
                 <?php
				 if ($_SESSION['yo_grup']=="4")
				 { ?> 
                  <div class="wpb_text_column wpb_content_element ">
                  	<div class="wpb_wrapper">
                    	<h4><span style=" font-size:23px; font-family: 'Roboto-thin', sans-serif; color:#000; font-weight: lighter;">
                        You want to book a session
                        
                        <h4><?php echo $row_inst['first_name'];?> <?php echo $row_inst['last_name'];?></h4>
                        
                        <?php echo $row_cont['negara'];?>,
                        <?php echo $row_cont['propinsi'];?>,
                        <?php echo $row_cont['kota'];?>
                        
                        <?php
							if ($_GET['pkg']=="1sess") {$pkg="Single Session";}
						elseif ($_GET['pkg']=="5sess") {$pkg="5 Session";}
						elseif ($_GET['pkg']=="10sess") {$pkg="10 Session";}
						?>
                        <input type="hidden" name="item_name" value="<?php echo $pkg.","; ?><?php echo $_GET['kd_inst'].","; ?><?php echo $_SESSION['yo_kd_user']; ?>" id="item_name">
                        <h4>
                        <?php echo $pkg; ?><br>
                        <?php echo $_GET['curr']. " ".$_GET['prc']; ?> 
                        </h4>
                        </span></h4>
                    </div>
                  </div>
                  <?php } 
				  elseif ($_SESSION['yo_grup']!="4")
				  {
				  ?>
                  
                  <div class="wpb_text_column wpb_content_element ">
                  	<div class="wpb_wrapper">
                    	<h4><span style=" font-size:23px; font-family: 'Roboto-thin', sans-serif; color:#000; font-weight: lighter;">
                        You haven't logged in As Member<br><br>
                  		Please login first. or If you are not 
                  		registered yet, please register.
                        </span></h4>
                    </div>
                  </div>
                  <?php } ?>
                                
                  <br>                
                  <div id="result_sched"><span style="color:#F00;">Please Selecet the date</span></div>
                  
                 <!--<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>-->
 <!-- <script src="https://www.paypal.com/sdk/js?client-id=AYXbxKX2zyMA_E6S9IiM7H5JmNbSL_lXkqE4HbvrR_usiUDqmfkKxY25bq03z5hGN_n5Bz0Vm2IOTagB&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
			
			

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>     -->      
                  
                  <!--<input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit">-->
               </div>
            </div>
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
</div>

  
  
                                       
                                 </form>
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
</div>

<br><br><br><br><br><br>




