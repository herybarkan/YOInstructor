<?php 
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt_cekp=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cekp->execute();
$row_cekp=$select_stmt_cekp->fetch(PDO::FETCH_ASSOC);

if ($row_cekp['id_']!="")
{
$select_stmt=$db->prepare("UPDATE instructor_price2 SET currency='$_POST[currency2]', price1='$_POST[p12]',price2='$_POST[p22]', price3='$_POST[p32]' WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
}
elseif ($row_cekp['id_']=="")
{
$select_stmt=$db->prepare("INSERT INTO instructor_price2 (kd_instructor, currency, price1, price2, price3) VALUES ('$_SESSION[yo_kd_user]','$_POST[currency2]','$_POST[p12]','$_POST[p22]','$_POST[p32]')");	
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
price='$_POST[currency2] $_POST[p12]'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt82->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt82=$db->prepare("INSERT INTO content_search (kd_instructor, price) VALUES ('$_SESSION[yo_kd_user]','$_POST[currency2] $_POST[p12]')");	//sql select query
$select_stmt82->execute();
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


$select_stmt_pr=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_pr->execute();
$row_pr=$select_stmt_pr->fetch(PDO::FETCH_ASSOC);

?>

<?php
$select_stmt_prc=$db->prepare("SELECT * FROM instructor_price2 WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_prc->execute();
$row_prc=$select_stmt_prc->fetch(PDO::FETCH_ASSOC);
			   ?>

            <div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-specs-138" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: inline-block;">
               
               
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px">
				<?php echo $row_prc['currency']; ?> 
				<?php echo number_format($row_prc['price1'],0,",","."); ?></div>
              </div>
              
            </div>
            
            
            <div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-trophies-549" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: none;">
              
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php echo $row_prc['currency']; ?> <?php echo number_format($row_prc['price2'],0,",","."); ?></div>
              </div>
              
            </div>
            <div class="edgtf-tab-container ui-tabs-panel ui-widget-content ui-corner-bottom" id="tab-achievements-932" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
               
               <div class="group-56" style="width:100%; margin-top:-15px;">
                <div class="surname opensans-semi-bold-black-15px">PRICE</div>
                <div class="price montserrat-bold-black-24px"><?php echo $row_prc['currency']; ?> <?php echo number_format($row_prc['price3'],0,",","."); ?></div>
              </div>
            </div>
            