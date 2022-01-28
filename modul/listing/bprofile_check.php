<?php
   ob_start();
   session_start();
   
   require_once 'Connections/con.php';
   ?>
<?php
   $select_stmt=$db->prepare("SELECT * FROM instructor WHERE instructor.kd_instructor='$_GET[kd_inst]'"); //sql select query
   $select_stmt->execute();
   $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
   
	if ($row['sts']=="0") {include ('bprofile_free.php');}
elseif ($row['sts']=="1") {include ('bprofile_pro.php');}
elseif ($row['sts']=="") {include ('bprofile_pro.php');}

//echo "status:".$row['sts'];
?>
