<?php
ob_start();
session_start();

date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');

require 'modul/phpmailler/PHPMailerAutoload.php';
require 'modul/phpmailler/class.phpmailer.php';
require 'modul/phpmailler/class.phpmaileroauth.php';

?>
<?php
 $select_pay=$db->prepare("SELECT * FROM payments_upgrade where id='$_GET[payid]'"); //sql select query
   $select_pay->execute();
   $row=$select_pay->fetch(PDO::FETCH_ASSOC);
   
$sapprove1=$db->prepare("UPDATE payments_upgrade SET approve='1' WHERE id='$_GET[payid]'");
$sapprove1->execute();

$sapprove2=$db->prepare("UPDATE instructor SET sts='1' WHERE kd_instructor='$row[kd_instructor]'");
$sapprove2->execute();
   
$data_sources  = $row['product_name'];
$data = explode(",", $data_sources);
//echo $data[0]; // piece1
//echo $data[1]; // piece2
//echo $data[2]; // piece2

$uptgl=$db->prepare("UPDATE payments_upgrade SET tgl_start='$data[2]', tgl_end='$data[3]', tgl_remind='$data[4]' WHERE id='$_GET[payid]'");
$uptgl->execute();

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
   
/*   $select_mem=$db->prepare("SELECT
member.kd_member,
member.first_name,
member.last_name,
countries.`name` AS nm_negara,
states.`name` AS nm_state,
cities.`name` AS nm_city,
member.aktif,
member.phone_number,
user_.username
FROM
countries
JOIN member
ON countries.id = member.country 
JOIN states
ON states.id = member.state 
JOIN cities
ON cities.id = member.city 
JOIN user_
ON user_.kd_user = member.kd_member
   WHERE member.kd_member='$data[2]'
   GROUP BY member.kd_member"); //sql select query
   $select_mem->execute();
   $row_mem=$select_mem->fetch(PDO::FETCH_ASSOC);*/

   
//$email = $row_cont['email'];
$email = "herybarkan@gmail.com";
$to = $email; 
//$subject = "Konfirmasi Aktivasi Akun ". $email;

$mailz = new PHPMailer;

// Konfigurasi SMTP
$mailz->isSMTP();
$mailz->Host = 'mail.yoinstructor.com';
$mailz->SMTPAuth = true;
$mailz->Username = 'system@yoinstructor.com';
$mailz->Password = 'Alhamdulilah2021';
$mailz->SMTPSecure = 'tls';
$mailz->Port = 587;
/*$mailz->smtpConnect(
	    array(
	        "ssl" => array(
	            "verify_peer" => false,
	            "verify_peer_name" => false,
	            "allow_self_signed" => true
	        )
	    )
	);*/

$mailz->setFrom('system@yoinstructor.com', 'Extend Account Payment');
$mailz->addReplyTo('system@yoinstructor.com', 'Extend Account Payment');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Extend Account Payment';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span>
    <h2>My Extend Payment Info</h2></span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td>Payment Type</td>
    <td>Paypal</td>
  </tr>
  <tr>
    <td>Order Code</td>
    <td>'.$row['product_id'].'</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>'.$tglin.'-'.$jamin.'</td>
  </tr>
  <tr>
    <td>Instructor Name</td>
    <td>'.$row_cont['first_name'].' '.$row_cont['last_name'].'</td>
  </tr>
  <tr>
    <td>Instructor Location</td>
    <td>'.$row_cont['nm_negara'].','.$row_cont['nm_state'].','.$row_cont['nm_city'].'</td>
  </tr>
  <tr>
    <td>Instructor Contact</td>
    <td>'.$row_cont['email'].', '.$row_cont['phone_number'].'</td>
  </tr>
  <tr>
    <td>Payment</td>
    <td>'.$data[0].'</td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>'.$row['currency_code'].' '.$row['payment_amount'].'</td>
  </tr>
  <tr>
    <td>Payment Status</td>
    <td>Success</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">We will check your payment immediately. and if it matches your account we will update it soon.<br>Thank You</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Book wellness instructors Anytime &amp; Anywhere.</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="font-weight: bold">www.yoinstructor.com</td>
  </tr>
</table>';
         
$mailz->Body = $mailContent;


// Kirim email
if(!$mailz->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mailz->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
//==========================================================================================
//$email2 = $row_mem['username'];
$email2 = "tambahlong@gmail.com";
$to2 = $email2; 
//$subject = "Konfirmasi Aktivasi Akun ". $email;

$mailz2 = new PHPMailer;

// Konfigurasi SMTP
$mailz2->isSMTP();
$mailz2->Host = 'mail.yoinstructor.com';
$mailz2->SMTPAuth = true;
$mailz2->Username = 'system@yoinstructor.com';
$mailz2->Password = 'Alhamdulilah2021';
$mailz2->SMTPSecure = 'tls';
$mailz2->Port = 587;
/*$mailz->smtpConnect(
	    array(
	        "ssl" => array(
	            "verify_peer" => false,
	            "verify_peer_name" => false,
	            "allow_self_signed" => true
	        )
	    )
	);*/

$mailz2->setFrom('system@yoinstructor.com', 'Extend Account Payment');
$mailz2->addReplyTo('system@yoinstructor.com', 'Extend Account Payment');

// Menambahkan penerima
$mailz2->addAddress($email2);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz2->Subject = 'Extend Account Payment';

// Mengatur format email ke HTML
$mailz2->isHTML(true);

         $mailContent2 = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span>
    <h2>Extend Payment Info</h2></span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td>Payment Type</td>
    <td>Paypal</td>
  </tr>
  <tr>
    <td>Order Code</td>
    <td>'.$row['product_id'].'</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>'.$tglin.'-'.$jamin.'</td>
  </tr>
  <tr>
    <td>Instructor Name</td>
    <td>'.$row_cont['first_name'].' '.$row_cont['last_name'].'</td>
  </tr>
  <tr>
    <td>Instructor Location</td>
    <td>'.$row_cont['nm_negara'].','.$row_cont['nm_state'].','.$row_cont['nm_city'].'</td>
  </tr>
  <tr>
    <td>Instructor Contact</td>
    <td>'.$row_cont['email'].', '.$row_cont['phone_number'].'</td>
  </tr>
  <tr>
    <td>Payment</td>
    <td>'.$data[0].'</td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>'.$row['currency_code'].' '.$row['payment_amount'].'</td>
  </tr>
  <tr>
    <td>Payment Status</td>
    <td>Success</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">We will check your payment immediately. and if it matches your account we will update it soon.<br>Thank You</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Book wellness instructors Anytime &amp; Anywhere.</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="font-weight: bold">www.yoinstructor.com</td>
  </tr>
</table>';
         
$mailz2->Body = $mailContent2;


// Kirim email
if(!$mailz2->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mailz2->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
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
                              
                              <h3>Your Payment has been Successful</h3>
                              
                              <h4>Payment Information</h4>
      <p>Reference Number: <?php echo $row['invoice_id']; ?></p>
      <p>Transaction ID: <?php echo $row['transaction_id']; ?></p>
      <p>Paid Amount: <?php echo $row['payment_amount']; ?></p>
      <p>Payment Status: <?php echo $row['payment_status']; ?></p>
      <h4>Product Information</h4>
      <p>Product id: <?php echo $row['product_id']; ?></p>
      <p>Product Name: <?php echo $row['product_name']; ?></p>
                              
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