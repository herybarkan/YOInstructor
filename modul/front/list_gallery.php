<?php
ob_start();
session_start();

?>
<div id="d_ba">
<h5>Add &quot;Before&quot; Images</h5>
<form action="#" method="post" name="fba">


<div class="row">
<div class="col-sm-12 col-lg-6">
<label>Select Before Image</label>
<input name="foto_before" type="file" id="foto_before" value="">
<input name="xkdi" id="xkdi" type="hidden" value="<?php echo $_GET['kd_inst']; ?>"/>
<input name="tname_member" type="hidden" placeholder="Member Name"/>
<input name="date_before" id="date_before" type="hidden" />
</div>
<div class="col-sm-12 col-lg-6">
<textarea name="ket_before" placeholder="Description of Image 'Before'"></textarea>
</div>

<div class="col-sm-12 col-lg-12">
<input name="bt_save_ba" type="button" value="Save" onclick="submit_add_before()"/>
<input name="bt_cancel_ba" type="button" value="Cancel" id="bt_cancel_ba"/>
</div>
</div>



                                          
</form>
</div>

<div id="d_ba2">
<!--<div id="result_after">-->
<!--<h5>Add &quot;After&quot; Images</h5>
<form action="#" method="post" name="fba">


<div class="row">
<div class="col-sm-12 col-lg-6">
<label>Select Before Image</label>
<input name="foto_after" type="file" id="foto_after" value="">
</div>
<div class="col-sm-12 col-lg-6">
<label>Member Name</label><br>
xxx
</div>
<div class="col-sm-12 col-lg-6">
<label>Date Start</label>
<input name="date_after" id="date_after" type="date" />
</div>
<div class="col-sm-12 col-lg-6">
<textarea name="ket_after" placeholder="Description of Image 'After'"></textarea>
</div>
<div class="col-sm-12 col-lg-12">
<input name="bt_save_ba2" type="button" value="Save" onclick="submit_add_after()"/>
<input name="bt_cancel_ba2" type="button" value="Cancel" id="bt_cancel_ba2"/>
</div>
</div>



                                          
</form>
</div>-->
</div>

<!--<input name="foto_after" type="file" id="foto_after" value="">-->
<div id="dt_ba">
<h5>Before After Images <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_add_bf">
                                       <i class="edgtf-icon-font-awesome far fa-plus-square" style="color:#FC0; margin-left:15px;">
                                       </i>
                                       </a>
                                       <?php } ?></h5>

<div class="wpb_wrapper">

   <div class="edgtf-category-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-six-columns edgtf-normal-space">
      <div class="edgtf-cl-inner edgtf-outer-space clearfix">
      
      <?php
      $select_stmt_ba=$db->prepare("SELECT * FROM instructor_before_after WHERE kd_instructor='$_GET[kd_inst]' AND aktif='1' ORDER BY id_ DESC");
      $select_stmt_ba->execute();
      while($row_ba=$select_stmt_ba->fetch(PDO::FETCH_ASSOC))
      {
      ?>
         <article class="edgtf-cl-item edgtf-item-space">
            <div class="edgtf-cl-item-inner">
               <div class="edgtf-cl-image">
                  <img width="800" height="800" src="foto/member/<?php echo $row_ba['image_ba']; ?>" class="attachment-full size-full" alt="a" loading="lazy" style="border-radius:10px;"> 
               </div>
<!--<div class="edgtf-cl-content">-->
                  <!--<h6 itemprop="name" class="edgtf-cl-title entry-title">
                     <a itemprop="url" href="#"><?php //echo $row_ba['name_member']; ?></a>
                  </h6>-->
                  <!--<p itemprop="description" class="edgtf-cl-excerpt">Lorem ipsum dolor sit amet</p>-->
               <!--</div>-->
            </div>
            <br>
<?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_add_ba2x" onclick="show_after('<?php echo $row_ba['id_']; ?>')"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; "></i></a>
                                       <?php } ?>
                                       
         </article>
         
         <? } ?>
         <!--<input name="foto_after" type="file" id="foto_after" value="">-->
         <!--<article class="edgtf-cl-item edgtf-item-space">
            <div class="edgtf-cl-item-inner">
               <div class="edgtf-cl-image">
                  <img width="800" height="800" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/h1-list-img-7.jpg" class="attachment-full size-full" alt="a" loading="lazy" > 
               </div>
               <div class="edgtf-cl-content">
                  <h4 itemprop="name" class="edgtf-cl-title entry-title">
                     <a itemprop="url" href="https://urbango.qodeinteractive.com/listing-category/private-parties/">Private Parties</a>
                  </h4>
                  <p itemprop="description" class="edgtf-cl-excerpt">Lorem ipsum dolor sit amet</p>
               </div>
               <a itemprop="url" class="edgtf-cl-link" href="https://urbango.qodeinteractive.com/listing-category/private-parties/"></a> 
            </div>
         </article>-->
         
      </div>
   </div>
   
   
</div>

                                       
</div>

<div id="result_ba"></div>

									   
                                       
                                       
                                       