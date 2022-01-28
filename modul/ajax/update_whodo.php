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

$cb_who = isset($_POST['cb_who']) ? $_POST['cb_who'] : array();
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

<!--<div class="wpb_wrapper" >
                  <h5>Where do you train?</h5>
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           /*$select_stmt_wt=$db->prepare("SELECT * FROM who_train WHERE kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1'");
                           $select_stmt_wt->execute();
                           while($row_wt=$select_stmt_wt->fetch(PDO::FETCH_ASSOC))
                           {*/
                           ?>
                        <div class="edgtf-ls-combined-item">
                           
                           <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#FFDE39;"></i>
                           <span class="edgtf-ls-amenity-label"><?php //echo $row_wt['wtrain']; ?></span>
                           
                        </div>
                        <?php //} ?>
                     </div>
                  </div>
                  <br>
                  
               </div>-->
               
<div class="edgtf-category-tabs-holder" style="border:0px; box-shadow:none; box-sizing:border-box; padding:0px; margin-left:-75px;">
      <div class="edgtf-ct-inner">
      
  
      
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
         <div class="edgtf-ct-item">
            <div class="edgtf-ct-item-inner">
            <div class="edgtf-ct-icon">
               <img class="ic-check-1" src="img/iccheck@1x.png" style="margin-top:8px; margin-right:12px;">
               </div>
               <div class="edgtf-ct-icon">
                  <img class="ic-men" src="img/<?php echo $row_wt['icon']; ?>">
               </div>
               <p itemprop="name" class="edgtf-ct-title entry-title" style="font-size: 13px;margin-top: 4px">
			   <?php echo $row_wt['wtrain']; ?></p>
               
            </div>
         </div>
         
         <?php } ?>
      </div>
   </div>

