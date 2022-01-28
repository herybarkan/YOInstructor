<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
$select_stmt=$db->prepare("DELETE FROM where_work WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();

$cb_work = isset($_POST['cb_work2']) ? $_POST['cb_work2'] : array();
foreach($cb_work as $valuext) {
    // here you can use $value
	//echo $valuext."<br>";
	$dwork[]= $valuext;
	//===========================
	$select_stmt4=$db->prepare("INSERT INTO where_work (
		kd_instructor,
		wwork 
		) VALUES (
		'$_SESSION[yo_kd_user]',
		'$valuext'
		)");	
	$select_stmt4->execute();
	//===============================
	$wd[]= $valuext;
}
$array_wd = implode(",", $wd); 
$xx_wd= $array_wd;
//echo "class: ".$xx_wd."";

//========================================================================================= 
$select_stmt_cek2=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek2->execute();
$row_cek2=$select_stmt_cek2->fetch(PDO::FETCH_ASSOC);

if ($row_cek2['id_']!="") 
{
$select_stmt82=$db->prepare("UPDATE content_search SET
where_train='$xx_wd'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt82->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt82=$db->prepare("INSERT INTO content_search (kd_instructor, where_train) VALUES ('$_SESSION[yo_kd_user]','$xx_wd')");	//sql select query
$select_stmt82->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>

<?php
$select_stmt_ww=$db->prepare("SELECT
where_work.id_,
where_work.kd_instructor,
where_work.wwork,
where_work.aktif,
`work`.icon
FROM
`work`
JOIN where_work
ON `work`.nm_work = where_work.wwork WHERE kd_instructor='$_SESSION[yo_kd_user]' AND where_work.aktif='1'");	//sql select query
                           $select_stmt_ww->execute();
                           while($row_ww=$select_stmt_ww->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                           
                <div class="group-30-5" style="columns:3; margin-bottom:10px;">
                  <img class="ic-check-2" src="img/iccheck@1x.png" />
                  <img class="ic-personal-studio-1" src="img/<?php echo $row_ww['icon']; ?>" />
                  <div class="personal-studio-1 opensans-normal-black-14px"><?php echo $row_ww['wwork']; ?></div>
                </div>
                
                <?php } ?>