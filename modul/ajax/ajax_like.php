<?php 
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);

$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt=$db->prepare("INSERT INTO tbl_like (kd_instructor, ip_address, tgl, jam, kd_user) VALUES ('$_GET[get_like]', '$ip', '$tglin', '$jamin', '$_SESSION[yo_kd_user]')");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$select_stmt_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE kd_instructor='$_GET[get_like]'");	
$select_stmt_like->execute();
$row_like=$select_stmt_like->fetch(PDO::FETCH_ASSOC);

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php echo $row_like['jml_like']; ?>
