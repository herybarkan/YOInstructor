<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt=$db->prepare("INSERT INTO instructor_price (kd_instructor,currency,price,pack,deskripsi) VALUES ('$_SESSION[yo_kd_user]','$_POST[currency2]','$_POST[tprice2]','$_POST[tpack2]','$_POST[tdesc2]')");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$select_stmt_pr=$db->prepare("SELECT * FROM instructor_price WHERE kd_instructor='$_SESSION[yo_kd_user]' AND checked='1'");	
$select_stmt_pr->execute();
$row_pr=$select_stmt_pr->fetch(PDO::FETCH_ASSOC);

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<table width="100%" border="0" style="border: none;">
  <tr style="border: none;">
    <td style="border: none;">
    <table width="100%" border="0" style="border: none;">
  <tr style="border: none;">
    <td style="border: none;"><h2 style="margin-top:0px; margin-left:-25px;"><?php echo $row_pr['currency']; ?></h2></td>
    <td style="border: none;"><h2 style="margin-top:0px;"><?php echo number_format($row_pr['price'],0,',','.'); ?></h2></td>
  </tr>
</table>
     </td>
    <td style="border: none;"></td>
  </tr>
</table><input name="opack" id="opack" type="button" value="Other Package"/>