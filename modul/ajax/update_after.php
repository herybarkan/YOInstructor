<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<script>

   
</script>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
/*$select_stmt2=$db->prepare("SELECT COUNT(id_) AS jmli FROM instructor_before_after WHERE kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
$select_stmt2->execute();
$row_stmt2=$select_stmt2->fetch(PDO::FETCH_ASSOC);*/

$select_stmt_after=$db->prepare("SELECT * FROM instructor_before_after WHERE id_='$_GET[get_after]' AND  kd_instructor='$_SESSION[yo_kd_user]'");	//sql select query
$select_stmt_after->execute();
$row_after=$select_stmt_after->fetch(PDO::FETCH_ASSOC);


/*$pfix=$row_stmt2['jmli']+1;

$img_before="BF-".$_SESSION['yo_kd_user']."-".$pfix.".png";
$img_ba="BA-".$_SESSION['yo_kd_user']."-".$pfix.".png";


$select_stmt=$db->prepare("INSERT INTO instructor_before_after (
kd_instructor, 
name_member, 
image_before, 
ket_before, 
tgl_bf, 
image_ba
) VALUES (
'$_SESSION[yo_kd_user]',
'$_POST[tname_member]',
'$img_before',
'$_POST[ket_before]',
'$_POST[date_before]',
'$img_ba'
)");	
$select_stmt->execute();*/
?>

<h5>Add &quot;After&quot; Images</h5>
<form action="#" method="post" name="fba2">


<div class="row">
<div class="col-sm-12 col-lg-6" id="data_after">
<label>Select After Image</label>
<input name="foto_after" type="file" id="foto_after" value="">
</div>
<div class="col-sm-12 col-lg-6">
<label>Member Name</label><br>
<textarea name="ket_after" placeholder="Description of Image 'After'"></textarea>
<input name="id_after" id="id_after" type="hidden" value="<?php echo $row_after['id_']; ?>"/>
<input name="xkdi" id="xkdi" type="hidden" value="<?php echo $row_after['kd_instructor']; ?>"/>
<input name="image_before" id="image_before" type="hidden" value="<?php echo $row_after['image_before']; ?>"/>
<input name="date_after" id="date_after" type="hidden" />
</div>
<div class="col-sm-12 col-lg-12">
<input name="bt_save_ba2" type="button" value="Save" onclick="submit_add_after()"/>
<input name="bt_cancel_ba2" type="button" value="Cancel" id="bt_cancel_ba2"/>
</div>
</div>



                                          
</form>
</div>

<!--
<div class="edgtf-category-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-six-columns edgtf-normal-space">
      <div class="edgtf-cl-inner edgtf-outer-space clearfix">
      
      <?php
      /*$select_stmt_ba=$db->prepare("SELECT * FROM instructor_before_after WHERE kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1' ORDER BY id_ DESC");
      $select_stmt_ba->execute();
      while($row_ba=$select_stmt_ba->fetch(PDO::FETCH_ASSOC))
      {*/
      ?>
         <article class="edgtf-cl-item edgtf-item-space">
            <div class="edgtf-cl-item-inner">
               <div class="edgtf-cl-image">
                  <img width="800" height="800" src="foto/member/<?php //echo $row_ba['image_ba']; ?>" class="attachment-full size-full" alt="a" loading="lazy"> 
               </div>
<div class="edgtf-cl-content">
                  <h6 itemprop="name" class="edgtf-cl-title entry-title">
                     <a itemprop="url" href="#"><?php //echo $row_ba['name_member']; ?></a>
                  </h6>
               </div>
            </div>
			<br>
			<?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_add_ba2"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; "></i></a>
                                       <?php //} ?>
         </article>
         <br>

         <? //} ?>
      </div>
   </div>-->
