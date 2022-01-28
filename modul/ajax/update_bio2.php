<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt_cekb=$db->prepare("SELECT * FROM instructor_detail WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cekb->execute();
$row_cekb=$select_stmt_cekb->fetch(PDO::FETCH_ASSOC);

$data_bio=addslashes($_GET['get_bio2']);

if ($row_cekb['id_']!="")
{
$select_stmt=$db->prepare("UPDATE instructor_detail SET overview='$data_bio' WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
}
elseif ($row_cekb['id_']=="")
{
$select_stmt=$db->prepare("INSERT INTO instructor_detail (kd_instructor, overview) VALUES ('$_SESSION[yo_kd_user]','$data_bio')");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
}

//========================================================================================= 
$select_stmt_cek2=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek2->execute();
$row_cek2=$select_stmt_cek2->fetch(PDO::FETCH_ASSOC);

if ($row_cek2['id_']!="") 
{
$select_stmt82=$db->prepare("UPDATE content_search SET
bio='$data_bio'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt82->execute();
}
elseif ($row_cek2['id_']=="") 
{
$select_stmt82=$db->prepare("INSERT INTO content_search (kd_instructor, bio) VALUES ('$_SESSION[yo_kd_user]','$data_bio')");	//sql select query
$select_stmt82->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


$select_stmt_bio=$db->prepare("SELECT overview FROM instructor_detail WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_bio->execute();
$row_bio=$select_stmt_bio->fetch(PDO::FETCH_ASSOC);

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>


<p class="text-10 opensans-normal-black-14px" style="text-align:left;">
                <?php echo $row_bio['overview']; ?>
              </p>
