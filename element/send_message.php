<?php
ob_start();
session_start();

require_once '../Connections/con.php';
date_default_timezone_set('Asia/Jakarta');


$name=$_POST['your-name'];
$email=$_POST['your-email'];
$hp=$_POST['hp'];
$subject=$_POST['subject'];
$message=$_POST['your-message'];
$captcha=$_POST['captcha'];

echo $_SESSION['captcha_token']."<br>";
echo $name."<br>";
echo $email."<br>";
echo $hp."<br>";
echo $subject."<br>";
echo $message."<br>";
echo $captcha."<br>";

$tglin=date('Y-m-d');
$jamin=date('H:i:s');

if (($captcha==$_SESSION['captcha_token']) && ($name!="") && ($email!="") && ($hp!="") && ($subject!="") && ($message!=""))
{
	echo "data bisa diinput";
	$query_im=$db->prepare("
	INSERT INTO tbl_contact(
	name,
	email,
	phone,
	subject,
	message,
	tgl,
	jam
	) VALUES (
	'$name',
	'$email',
	'$hp',
	'$subject',
	'$message',
	'$tglin',
	'$jamin'
	)
	"); //sql select query
    $query_im->execute();
	if ($captcha!=$_SESSION['captcha_token']) {$ermsg="wc";}
	else{$ermsg="iok";}
	header("Location:../index.php?com=contact_us&msg=".$ermsg."");
}
else 
{
	echo "data tidak dapat diinput";
	$ermsg="fail";
	header("Location:../index.php?com=contact_us&msg=".$ermsg."");
}
?>