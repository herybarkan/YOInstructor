<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
$select_visit=$db->prepare("SELECT COUNT(id_) AS jml_visit FROM tbl_visit WHERE kd_instructor='$_SESSION[yo_kd_user]' GROUP BY ip_address
"); //sql select query
   $select_visit->execute();
   $row_visit=$select_visit->fetch(PDO::FETCH_ASSOC);
   //$num_rows = $row_visit->fetchColumn();
   $row_count = $select_visit->rowCount(); 
   
$select_book=$db->prepare("SELECT COUNT(id) AS jml_book FROM payments WHERE product_name LIKE '%$_SESSION[yo_kd_user]%'
"); //sql select query
   $select_book->execute();
   $row_book=$select_book->fetch(PDO::FETCH_ASSOC);
   
$select_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE kd_instructor='$_SESSION[yo_kd_user]'
"); //sql select query
   $select_like->execute();
   $row_like=$select_like->fetch(PDO::FETCH_ASSOC);
   
$select_share=$db->prepare("SELECT COUNT(id_) AS jml_share FROM tbl_share WHERE kd_instructor='$_SESSION[yo_kd_user]'
"); //sql select query
   $select_share->execute();
   $row_share=$select_share->fetch(PDO::FETCH_ASSOC);
?>

<div class="group-52">
              <div class="rectangle"></div>
              <div class="group-32-5">
                <div class="text-17 opensans-bold-black-13px">INSIGHT</div>
 
 
 <table width="100%" border="0" style="border-style:none; border:none;margin-top:10px;">
 <tr style="border-style:none; border:none;">
 <td style="border-style:none; border:none;">
 <div style="width:100%; height:50px; background-color:#ffde39; border-top-left-radius:10px; border-top-right-radius:10px;display:block;padding:15px;">
 <span style="font-size:18; color:#000;"><strong>Visitors</strong></span>
 </div>
 <div style="width:100%; height:50px; background-color:#000; border-bottom-left-radius:10px; border-bottom-right-radius:10px;display:block;padding:15px;">
 <span style="font-size:15; color:#ffde39;"><strong><?php echo $row_count; ?></strong></span>
 </div>
 
 </td>
 </tr>
 
<tr style="border-style:none; border:none;"> 
<td style="border-style:none; border:none;">
 <div style="width:100%; height:50px; background-color:#ffde39; border-top-left-radius:10px; border-top-right-radius:10px;display:block;padding:15px;">
 <span style="font-size:18; color:#000;"><strong>Like</strong></span>
 </div>
 <div style="width:100%; height:50px; background-color:#000; border-bottom-left-radius:10px; border-bottom-right-radius:10px;display:block;padding:15px;">
 <span style="font-size:15; color:#ffde39;"><strong><?php echo number_format($row_like['jml_like'],0,",","."); ?></strong></span>
 </div>
 </td>
</tr>
 
<tr style="border-style:none; border:none;"> 
 <td style="border-style:none; border:none;">
 <div style="width:100%; height:50px; background-color:#ffde39; border-top-left-radius:10px; border-top-right-radius:10px;display:block;padding:15px;">
 <span style="font-size:18; color:#000;"><strong>Share</strong></span>
 </div>
 <div style="width:100%; height:50px; background-color:#000; border-bottom-left-radius:10px; border-bottom-right-radius:10px;display:block;padding:15px;">
<span style="font-size:15; color:#ffde39;"><strong>
<?php 
$xshare=$row_share['jml_share']/2; 
$zshare=round($xshare,0);
echo $zshare;
?>

</strong></span>
 
 
 </div>
 </td>
 </tr>
  
</table>

</div>
</div>