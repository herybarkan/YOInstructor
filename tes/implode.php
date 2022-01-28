<?php
ob_start();
session_start();

require_once '../Connections/con.php';
?>


		  
	 
<table width="90%" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
$select_stmt=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='INSPRQLC210919181625'"); 
$select_stmt->execute();
while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))

      { 
	  $class_sub[]= $row['sub_class_name'];
	  ?>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row['sub_class_name']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <?php  } 
  
  ?>
</table>

<?php
$array_class_sub = implode(",", $class_sub); 

$xx_class_sub= $array_class_sub;

echo "class_sub: ".$xx_class_sub."";

?>

