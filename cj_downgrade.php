<?php
require_once 'Connections/con.php';
date_default_timezone_set('Asia/Jakarta');

require 'modul/phpmailler/PHPMailerAutoload.php';
require 'modul/phpmailler/class.phpmailer.php';
require 'modul/phpmailler/class.phpmaileroauth.php';


$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$cek_tgl=$db->prepare("SELECT * FROM payments_upgrade WHERE tgl_end <= CURDATE() AND sts_dg='0'");
$cek_tgl->execute();
while($row_cek_tgl = $cek_tgl->fetch(PDO::FETCH_ASSOC))
     {
		echo $row_cek_tgl['kd_instructor']."<br>";
		$up_sts=$db->prepare("UPDATE payments_upgrade SET sts_dg='1' WHERE kd_instructor='$row_cek_tgl[kd_instructor]'");	
$up_sts->execute();

$up_inst = $db->prepare("UPDATE instructor SET sts='0' WHERE sts2='R' AND kd_instructor='$row_cek_tgl[kd_instructor]'");	
$up_inst->execute();

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
user_.username,
countries.`name` AS nm_country,
states.`name` AS nm_states,
cities.`name` AS nm_city
FROM
user_
JOIN instructor
ON user_.kd_user = instructor.kd_instructor 
JOIN countries
ON countries.id = instructor.country 
JOIN states
ON states.id = instructor.state 
JOIN cities
ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$row_cek_tgl[kd_instructor]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$email = $row_inst['username'];
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

$mailz->setFrom('system@yoinstructor.com', 'Downgrade Confirmation');
$mailz->addReplyTo('system@yoinstructor.com', 'Downgrade Confirmation');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Downgrade Confirmation';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span>
    <center>
    <h2>YO Instructor Reminder</h2>
    Your Profesional will be Downgrade as Freemium Account
    </center>
    </span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td> Name</td>
    <td>'.$row_inst['first_name'].' '.$row_inst['last_name'].'</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>'.$row_cek_tgl['tgl_end'].'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Thank for Joining</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <a href="https://yoinstructor.com/?com=bprofile&kd_inst='.$row_cek_tgl['kd_instructor'].'">
      <input type="button" name="btn" id="btn" value="My Profile" style="background-color:#FC6; color:#FFF; border:none; width:120px; border-radius:8px; height:40px;"/>
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

	 }




?>