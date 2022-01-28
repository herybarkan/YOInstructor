<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt=$db->prepare("UPDATE instructor SET first_name='$_GET[get_fnm]', last_name='$_GET[get_lnm]' WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$select_stmt_nm=$db->prepare("SELECT kd_instructor, first_name, last_name FROM instructor WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_nm->execute();
$row_nm=$select_stmt_nm->fetch(PDO::FETCH_ASSOC);

//========================================================================================= 
$select_stmt_cek=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek->execute();
$row_cek=$select_stmt_cek->fetch(PDO::FETCH_ASSOC);

if ($row_cek['id_']!="") 
{
$select_stmt8=$db->prepare("UPDATE content_search SET
nm_instructor='$_GET[get_fnm] $_GET[get_lnm]'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt8->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt8=$db->prepare("INSERT INTO content_search (kd_instructor, nm_instructor) VALUES ('$_SESSION[yo_kd_user]','$_GET[get_fnm] $_GET[get_lnm]')");	//sql select query
$select_stmt8->execute();
}

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

               
<!--<table width="100%" border="0" style="border:hidden;">
  <tr style="border:hidden;">
    <td style="border:hidden;"><h1 class="name montserrat-semi-bold-white-48px"><?php echo $row_nm['first_name']; ?> <?php echo $row_nm['last_name']; ?>
            </h1></td>
    <td style="border:hidden;"><?php if ($_SESSION['yo_kd_user']==$row_nm['kd_instructor']) { ?>
               <a href="javascript:void(0);" id="bt_name"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>  
               <?php } ?> </td>
  </tr>
</table>
-->

<h1 class="name montserrat-semi-bold-white-48px"><?php echo $row_nm['first_name']; ?> <?php echo $row_nm['last_name']; ?>
            </h1>

