<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
$select_stmt2=$db->prepare("SELECT * FROM instructor_before_after WHERE id_='$_POST[id_after]'");	//sql select query
$select_stmt2->execute();
$row_stmt2=$select_stmt2->fetch(PDO::FETCH_ASSOC);

$data_img  = $row_stmt2['image_before'];
$pieces = explode("-", $data_img);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2
//echo $pieces[2]; // piece2


$img_before = $row_stmt2['image_before'];
$img_after = "AF-".$_SESSION['yo_kd_user']."-".$pieces[2];


$select_stmt=$db->prepare("UPDATE instructor_before_after SET 
image_after='$img_after', 
ket_after='$_POST[ket_after]', 
tgl_af='$_POST[date_after]'
WHERE id_='$_POST[id_after]'");	
$select_stmt->execute();
?>

<h5>Before After Images <?php if ($_SESSION['yo_kd_user']==$_POST['xkdi']) { ?>
                                       <a href="javascript:void(0);" id="bt_add_bf">
                                       <i class="edgtf-icon-font-awesome far fa-plus-square" style="color:#FC0; margin-left:15px;">
                                       </i>
                                       </a>
                                       <?php } ?></h5>

<div class="wpb_wrapper">

   <div class="edgtf-category-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-six-columns edgtf-normal-space">
      <div class="edgtf-cl-inner edgtf-outer-space clearfix">
      
      <?php
      $select_stmt_ba=$db->prepare("SELECT * FROM instructor_before_after WHERE kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1' ORDER BY id_ DESC");
      $select_stmt_ba->execute();
      while($row_ba=$select_stmt_ba->fetch(PDO::FETCH_ASSOC))
      {
      ?>
         <article class="edgtf-cl-item edgtf-item-space">
            <div class="edgtf-cl-item-inner">
               <div class="edgtf-cl-image">
                  <img width="800" height="800" src="foto/member/<?php echo $row_ba['image_ba']; ?>" class="attachment-full size-full" alt="a" loading="lazy"> 
               </div>
<div class="edgtf-cl-content">
                  <h6 itemprop="name" class="edgtf-cl-title entry-title">
                     <a itemprop="url" href="#"><?php echo $row_ba['name_member']; ?></a>
                  </h6>
                  <!--<p itemprop="description" class="edgtf-cl-excerpt">Lorem ipsum dolor sit amet</p>-->
               </div>
            </div>
            <br>
<?php if ($_SESSION['yo_kd_user']==$_POST['xkdi']) { ?>
                                       <a href="javascript:void(0);" id="bt_add_ba2x" onclick="show_after('<?php echo $row_ba['id_']; ?>')"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; "></i></a>
                                       <?php } ?>
                                       
         </article>
         
         <? } ?>

         
      </div>
   </div>
   
   
</div>



