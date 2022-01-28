<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
$select_stmt=$db->prepare("DELETE FROM who_train WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();

$cb_who = isset($_POST['cb_who2']) ? $_POST['cb_who2'] : array();
foreach($cb_who as $valuext) {
    // here you can use $value
	//echo $valuext."<br>";
	$dwho[]= $valuext;
	//===========================
	$select_stmt4=$db->prepare("INSERT INTO who_train (
		kd_instructor,
		wtrain 
		) VALUES (
		'$_SESSION[yo_kd_user]',
		'$valuext'
		)");	
	$select_stmt4->execute();
	//===============================
	$wt[]= $valuext;
}
$array_wt = implode(",", $wt); 
$xx_wt= $array_wt;
//echo "class: ".$xx_wt."";

//========================================================================================= 
$select_stmt_cek2=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek2->execute();
$row_cek2=$select_stmt_cek2->fetch(PDO::FETCH_ASSOC);

if ($row_cek2['id_']!="") 
{
$select_stmt82=$db->prepare("UPDATE content_search SET
who_train='$xx_wt'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt82->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt82=$db->prepare("INSERT INTO content_search (kd_instructor, who_train) VALUES ('$_SESSION[yo_kd_user]','$xx_wt')");	//sql select query
$select_stmt82->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>



                  <?php
$select_stmt_wt=$db->prepare("SELECT
who_train.id_,
who_train.kd_instructor,
who_train.wtrain,
who_train.aktif,
train.icon
FROM
who_train
JOIN train
ON who_train.wtrain = train.nm_train
WHERE who_train.kd_instructor='$_SESSION[yo_kd_user]' AND who_train.aktif='1'");	//sql select query
                           $select_stmt_wt->execute();
                           while($row_wt=$select_stmt_wt->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                    <div class="group-30-3" style="margin-bottom:30px; columns:3;">
                      <img class="ic-check-2" src="img/iccheck@1x.png" />
                      <img class="ic-men-1" src="img/<?php echo $row_wt['icon']; ?>" />
                      <div class="men-1 opensans-normal-black-14px"><?php echo $row_wt['wtrain']; ?></div>
                    </div>
                    <?php } ?>
                 