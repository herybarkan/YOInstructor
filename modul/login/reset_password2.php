<?php
ob_start();
session_start();
require_once '../../Connections/con.php';

date_default_timezone_set('Asia/Jakarta');

require '../../modul/phpmailler/PHPMailerAutoload.php';
require '../../modul/phpmailler/class.phpmailer.php';
require '../../modul/phpmailler/class.phpmaileroauth.php';

?>
<?php
$select_cu=$db->prepare("SELECT kd_user, username, grup, aktif FROM user_ WHERE username='$_POST[email]'");
$select_cu->execute();
$row_cu=$select_cu->fetch(PDO::FETCH_ASSOC);
   
if ($row_cu['username']==$_POST['email'] && $row_cu['aktif']=="1")
{
	//proses dilanjutkan
$email = $_POST['email'];
//$email = "herybarkan@gmail.com";
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

$mailz->setFrom('system@yoinstructor.com', 'Reset Password');
$mailz->addReplyTo('system@yoinstructor.com', 'Reset Password');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Reset Passwor';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span><h2>Reset Password Request</h2></span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    You are getting this email because you have requested a password reset.<br><br>

if you don\'t do a password reset request, just ignore it.<br><br>

and if you make a password reset request. Please click the button or link below to continue.<br><br>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <a href="https://yoinstructor.com/?com=form_reset_password&kdu='.md5($row_cu['kd_user']).'">
      <input type="button" name="btn" id="btn" value="RESET PASSWORD" style="background-color:#FC6; color:#FFF; border:none; width:120px; border-radius:8px; height:40px;"/>
      </a>
    </td>
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
header("location: ../../index.php?com=conf_reset_password_ok");
	}
elseif ($row_cu['username']==$_POST['email'] && $row_cu['aktif']!="1")
{
header("location: ../../index.php?com=conf_reset_password_fail");
	}
elseif ($row_cu['username']!=$_POST['email'] && $row_cu['aktif']!="1")
{
header("location: ../../index.php?com=conf_reset_password_fail");
	}
	



/* $select_cont=$db->prepare("SELECT
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
   WHERE instructor.kd_instructor='$data[1]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);
   
   $select_mem=$db->prepare("SELECT
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

   
?>


