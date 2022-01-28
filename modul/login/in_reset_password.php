<?php
ob_start();
session_start();
require_once '../../Connections/con.php';

date_default_timezone_set('Asia/Jakarta');

$datex=date('Y-m-d');
$timex=date('H:i:s');


require '../../modul/phpmailler/PHPMailerAutoload.php';
require '../../modul/phpmailler/class.phpmailer.php';
require '../../modul/phpmailler/class.phpmaileroauth.php';

	
	$kdu	=$_POST["hf_kdu"];	//textbox name "txt_username_email"
	$passwd	=md5($_POST["passwd"]);			//textbox name "txt_password"
	
$select_cu=$db->prepare("SELECT id_, kd_user, username, grup, aktif FROM user_ WHERE kd_user='$kdu'");
$select_cu->execute();
$row_cu=$select_cu->fetch(PDO::FETCH_ASSOC);

$update_pass=$db->prepare("UPDATE user_ SET passwd='$passwd' WHERE id_='$row_cu[id_]'");
$update_pass->execute();
//$row_up=$update_pass->fetch(PDO::FETCH_ASSOC);

//=================================================================================
$email = $row_cu['username'];
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
    <span>
    <h2> Password Reset Complete</h2></span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	Date:'.$datex.'  Time:'.$timex.' <br>
	<strong>'.$row_cu['username'].'</strong><br>
    Your password has been reset.<br><br>

Please login again using your new login password.<br><br>


    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <a href="https://yoinstructor.com/?com=login">
      <input type="button" name="btn" id="btn" value="LOGIN" style="background-color:#FC6; color:#FFF; border:none; width:120px; border-radius:8px; height:40px;"/>
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
$_SESSION['yo_uname'] = NULL;	
$_SESSION['yo_kd_user']= NULL;
$_SESSION['yo_grup']= NULL;

unset($_SESSION['yo_uname']);
unset($_SESSION['yo_kd_user']);
unset($_SESSION['yo_grup']);		

			
		header("location: ../../index.php?com=crp_done");
	

?>