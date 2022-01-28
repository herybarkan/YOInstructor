<div class="vc_row wpb_row vc_inner vc_row-fluid">
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element" id="dt_whodoyou">
            <div id="result_whodo">
               <div class="wpb_wrapper" >
                  <h5>Who do you train?</h5>
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           $select_stmt_wt=$db->prepare("SELECT * FROM who_train WHERE kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                           $select_stmt_wt->execute();
                           while($row_wt=$select_stmt_wt->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                        <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#FFDE39;"></i>
                           <span class="edgtf-ls-amenity-label"><?php echo $row_wt['wtrain']; ?></span>
                           </a>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                  <br>
                  
               </div>
               </div>
               <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_whodoyou"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
                  <?php } ?>
            </div>
            
            <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
            <div class="wpb_text_column wpb_content_element" id="dwhodoyou">
            <form action="#" method="post" name="fwhodoyou" id="fwhodoyou">
               <div class="wpb_wrapper" >
                  <h5>Update Who do you train?</h5>
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           $select_stmt_wt2=$db->prepare("SELECT * FROM train WHERE aktif='1'");	//sql select query
                           $select_stmt_wt2->execute();
                           while($row_wt2=$select_stmt_wt2->fetch(PDO::FETCH_ASSOC))
                           {
							   
							   	$select_stmt_wt3=$db->prepare("SELECT * FROM who_train WHERE kd_instructor ='$row[kd_instructor]' AND wtrain='$row_wt2[nm_train]'");
                           		$select_stmt_wt3->execute();
                           		$row_wt3=$select_stmt_wt3->fetch(PDO::FETCH_ASSOC);
								if ($row_wt2['nm_train']==$row_wt3['wtrain']) {$ckd="checked=\"checked\"";}
								else {$ckd="";}
                           ?>
                        <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <input name="cb_who[]" id="cb_who[]" type="checkbox" value="<?php echo $row_wt2['nm_train']; ?>" <?php echo $ckd; ?>/>
                           <span class="edgtf-ls-amenity-label"><?php echo $row_wt2['nm_train']; ?></span>
                           </a>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                  <br>
                  
               </div>
               <input name="bt_save_whodoyou" id="bt_save_whodoyoux" type="button" value="Save" onclick="submitFormWhodo()"/>
               <input name="bt_cancel_whodoyou" type="button" value="Cancel" id="bt_cancel_whodoyou"/>
               </form>
            </div>
            
            
            <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
<script>
//jQuery(document).ready(function ($) {
function submitFormWhodo() {
var form = document.fwhodoyou;

var dataString = jQuery(form).serialize();


jQuery.ajax({
    type:'POST',
    url:'modul/ajax/update_whodo.php',
    data: dataString,
    success: function(data){
        jQuery('#result_whodo').html(data);
		jQuery('#dwhodoyou').hide();
		jQuery('#dt_whodoyou').show();


    }
});
return false;
}
//});
</script>
   <!--=================================================-->
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element " id="dt_wheredoyou">
            <div id="result_wheredo">
               <div class="wpb_wrapper">
                  <!--<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum, etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>-->
                  <h5>Where do you train?</h5>
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           $select_stmt_ww=$db->prepare("SELECT * FROM where_work WHERE kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                           $select_stmt_ww->execute();
                           while($row_ww=$select_stmt_ww->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                        <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#FFDE39;"></i>
                           <span class="edgtf-ls-amenity-label"><?php echo $row_ww['wwork']; ?></span>
                           </a>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                  
               </div>
               </div>
               <br>
                  <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_wheredoyou"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
                  <?php } ?>
            </div>
            <div class="wpb_text_column wpb_content_element " id="dwheredoyou">
            <form action="#" method="post" name="fwheredoyou">
               <div class="wpb_wrapper">
                  <!--<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum, etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>-->
                  <h5>Update Where do you train?</h5>
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           $select_stmt_ww2=$db->prepare("SELECT * FROM work WHERE aktif='1'");	//sql select query
                           $select_stmt_ww2->execute();
                           while($row_ww2=$select_stmt_ww2->fetch(PDO::FETCH_ASSOC))
                           {
							   $select_stmt_ww3=$db->prepare("SELECT * FROM where_work WHERE kd_instructor ='$row[kd_instructor]' AND wwork='$row_ww2[nm_work]'");
                           		$select_stmt_ww3->execute();
                           		$row_ww3=$select_stmt_ww3->fetch(PDO::FETCH_ASSOC);
								if ($row_ww2['nm_work']==$row_ww3['wwork']) {$ckd="checked=\"checked\"";}
								else {$ckd="";}
                           ?>
                        <div class="edgtf-ls-combined-item">
                           
                           <input name="cb_work[]" id="cb_work[]" type="checkbox" value="<?php echo $row_ww2['nm_work']; ?>" <?php echo $ckd; ?>/>
                           <span class="edgtf-ls-amenity-label"><?php echo $row_ww2['nm_work']; ?></span>
                           
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                  <br>
               </div>
               <input name="bt_save_wheredoyou" type="button" value="Save" onclick="submitFormWheredo()"/>
               <input name="bt_cancel_wheredoyou" type="button" value="Cancel" id="bt_cancel_wheredoyou"/>
               </form>
            </div>
            
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
   
<script>
//jQuery(document).ready(function ($) {
function submitFormWheredo() {
var form = document.fwheredoyou;

var dataString = jQuery(form).serialize();


jQuery.ajax({
    type:'POST',
    url:'modul/ajax/update_wheredo.php',
    data: dataString,
    success: function(data){
        jQuery('#result_wheredo').html(data);
		jQuery('#dwheredoyou').hide();
		jQuery('#dt_wheredoyou').show();


    }
});
return false;
}
//});
</script>

</div>