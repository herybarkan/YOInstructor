<?php
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);

require_once '../../Connections/con.php';

/*echo $_POST['uname'];
echo "<br>";
echo $_POST['passwd'];
echo "<br>";
*/

	//$uname	=mysql_real_escape_string($_POST["username"]);	//textbox name "txt_username_email"
	//$passwd	=mysql_real_escape_string($_POST["passwd"]);			//textbox name "txt_password"
	
	$uname	=$_POST["username"];	//textbox name "txt_username_email"
	$passwd	=$_POST["passwd"];			//textbox name "txt_password"
	
		
		$select_stmt=$db->prepare("SELECT * FROM user_ WHERE username=:uname AND passwd=:passwd AND aktif='1'"); //sql select query
		$select_stmt->execute(array(':uname'=>$uname, ':passwd'=> md5($passwd)));	//execute query with bind parameter
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		
		if ($row["username"]!="")
		{
		$_SESSION['yo_uname']=$row["username"];
		$_SESSION['yo_kd_user']=$row["kd_user"];	
		$_SESSION['yo_grup']=$row["grup"];	
		
			if ($row["grup"]=="1") {header("refresh:0; ../../admin/");}
			elseif ($row["grup"]=="3") {header("refresh:0; ../../index.php?com=bprofile&kd_inst=".$_SESSION['yo_kd_user']."");}
			//elseif ($row["grup"]=="4") {header("refresh:0; ../../index.php?com=mprofile&kd_mem=".$_SESSION['yo_kd_user']."");}
			//else {header("refresh:0; ../../index.php?sts_login=success");}
			
		
		}
		elseif ($row["username"]=="")
		{
		$select_stmt=$db->prepare("SELECT aktif FROM user_ WHERE username='$uname'");
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		
		$aktif=$row['aktif'];
			if ($aktif=="0") {$sts="na";}
		elseif ($aktif=="") {$sts="fail";}
			
		header("refresh:0; ../../index.php?com=login&sts_login=".$sts."");
		}
	

?>