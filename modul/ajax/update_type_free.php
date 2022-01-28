<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
$select_stmt=$db->prepare("DELETE FROM type_class_sub WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();

$select_stmtz=$db->prepare("DELETE FROM type_class WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmtz->execute();

$cb_type = isset($_POST['cb_type']) ? $_POST['cb_type'] : array();
foreach($cb_type as $valuext) {
    // here you can use $value
	//echo $valuext."<br>";
	$dtype[]= $valuext;
	//===========================
	$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE nm_sub_category='$valuext'");
	$select_stmt_subcat->execute();
	$row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC);
	//===========================
	$select_stmt4=$db->prepare("INSERT INTO type_class_sub (
		type_class,
		kd_instructor,
		sub_class_name 
		) VALUES (
		'$row_subcat[id_category]',
		'$_SESSION[yo_kd_user]',
		'$valuext'
		)");	
	$select_stmt4->execute();
	//===============================
	$class_sub[]= $row_subcat['nm_sub_category'];
}
$array_class_sub = implode(",", $class_sub); 
$xx_class_sub= $array_class_sub;
//echo "class_sub: ".$xx_class_sub."";

//========================================================================================= 
$select_stmt_cek=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek->execute();
$row_cek=$select_stmt_cek->fetch(PDO::FETCH_ASSOC);

if ($row_cek['id_']!="") 
{
$select_stmt8=$db->prepare("UPDATE content_search SET
sub_category='$xx_class_sub'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt8->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt8=$db->prepare("INSERT INTO content_search (kd_instructor, sub_category) VALUES ('$_SESSION[yo_kd_user]','$xx_class_sub')");	//sql select query
$select_stmt8->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$select_stmt_catx=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$_SESSION[yo_kd_user]' GROUP BY type_class");
                                             $select_stmt_catx->execute();
                                             while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
                                             {
												 
												 $select_stmt_catxx=$db->prepare("SELECT category.nm_category, category_sub.nm_sub_category, category.id_ FROM category_sub JOIN category
ON category_sub.id_category = category.id_ WHERE nm_sub_category='$row_catx[sub_class_name]'");
                                             $select_stmt_catxx->execute();
											 $row_catxx=$select_stmt_catxx->fetch(PDO::FETCH_ASSOC);
											 
												$select_stmt5=$db->prepare("INSERT INTO type_class (
												kd_instructor,
												type 
												) VALUES (
												'$_SESSION[yo_kd_user]',
												'$row_catxx[nm_category]'
												)");	
												$select_stmt5->execute(); 
												$class[]= $row_catxx['nm_category'];
											}
$array_class = implode(",", $class); 
$xx_class= $array_class;
//echo "class: ".$xx_class."";
//========================================================================================= 
$select_stmt_cek2=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek2->execute();
$row_cek2=$select_stmt_cek2->fetch(PDO::FETCH_ASSOC);

if ($row_cek2['id_']!="") 
{
$select_stmt82=$db->prepare("UPDATE content_search SET
category='$xx_class'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt82->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt82=$db->prepare("INSERT INTO content_search (kd_instructor, category) VALUES ('$_SESSION[yo_kd_user]','$xx_class')");	//sql select query
$select_stmt82->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
												 
?>

<?php
$select_stmt_cat=$db->prepare("SELECT
                  type_class.kd_instructor,
                  type_class.type,
                  type_class.aktif,
                  category.id_
                  FROM
                  category
                  JOIN type_class
                  ON category.nm_category = type_class.type WHERE kd_instructor='$_SESSION[yo_kd_user]' AND type_class.aktif='1'
                  GROUP BY
                  category.id_ LIMIT 1");	//sql select query
$select_stmt_cat->execute();
?>


<table border="0" style="width:230px; border-style:none; border:none;">
  <tr valign="top" style=" border-style:none; border:none;">
  <?php
		while($row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC))
        	{
             ?>
    <td valign="top" style="vertical-align:top;border-style:none; border:none;">
                              <span class="xlabel " style="width:220px; margin:5px;">
                              <?php echo $row_cat['type']; ?>
                              </span>
    
    <table>
    <?php
                                             $select_stmt_catsubx=$db->prepare("SELECT * FROM type_class_sub
                                    WHERE kd_instructor='$_SESSION[yo_kd_user]' AND type_class='$row_cat[id_]' LIMIT 3");	//sql select query
                                    $select_stmt_catsubx->execute();
                                             while($row_catsubx=$select_stmt_catsubx->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
    <tr style="border-style:none; border:none;">
                                    <td style="border-style:none; border:none;"><span class="xlabel2 " style="width:220px; margin:2px; margin-left:5px;">
												<?php echo $row_catsubx['sub_class_name']; ?>
                                                </span>
                                                </td><?php } ?>
    </tr>
    
    </table>
    </td>
    <?php } ?>
  </tr>
   
</table>
