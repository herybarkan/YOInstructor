<?php
   //
   ob_start();
   session_start();
   ?>
<div class="edgtf-container-inner clearfix fotox" style="margin-top:10px; height:100%; ">
   <div class="woocommerce-notices-wrapper"></div>
   <div id="product-477" class="post-477 product type-product status-publish has-post-thumbnail product_cat-food product_tag-breakfast product_tag-healthy first instock sale shipping-taxable purchasable product-type-simple" style="height:0px;">
      <div class="woocommerce-tabs" style="position:absolute; display:block; width: 845px;">
         <ul class="tabs wc-tabs" role="tablist">
            <!--<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
               <a href="#tab-description"><span style="font-size:14px;">Type</span></a>
            </li>-->
            <!--<li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
               <a href="#tab-whodoyou"><span style="font-size:14px;">Who Do They Train</span></a>
            </li>-->
            <!--<li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-wheredoyou">
               <a href="#tab-wheredoyou"><span style="font-size:14px;">Where Do They Train</span></a>
            </li>-->
            <!--<li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-post">
               <a href="#tab-post"><span style="font-size:14px;">Post</span></a>
            </li>-->
            <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-socmed">
               <a href="#tab-socmed"><span style="font-size:14px;">Contact</span></a>
            </li>
            <!--<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
               <a href="#tab-reviews"><span style="font-size:14px;">Reviews</span></a>
            </li>-->
         </ul>
         <!--<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="-webkit-box-shadow:none; height:100%;">
            
         </div>-->
         <!--<div class="woocommerce-Tabs-panel panel wc-tab" id="tab-whodoyou" role="tabpanel" aria-labelledby="tab-title-description" style="-webkit-box-shadow:none; height:100%;">
            
            
            <div id="dt_whodoyou">
               <div id="result_whodo">
                  <div class="edgtf-category-tabs-holder" style="border:0px; box-shadow:none; box-sizing:border-box; padding:0px; margin-left:0px;">
                     <div class="edgtf-ct-inner">
                        <?php
                           /*$select_stmt_wt=$db->prepare("SELECT
                           who_train.id_,
                           who_train.kd_instructor,
                           who_train.wtrain,
                           who_train.aktif,
                           train.icon
                           FROM
                           who_train
                           JOIN train
                           ON who_train.wtrain = train.nm_train
                           WHERE who_train.kd_instructor='$row[kd_instructor]' AND who_train.aktif='1'");	//sql select query
                                                      $select_stmt_wt->execute();
                                                      while($row_wt=$select_stmt_wt->fetch(PDO::FETCH_ASSOC))
                                                      {*/
                                                      ?>
                        <div class="edgtf-ct-item" style="text-align:left;">
                           <div class="edgtf-ct-item-inner">
                              <div class="edgtf-ct-icon">
                                 <img class="ic-check-1" src="img/iccheck@1x.png" style="margin-top:8px; margin-right:12px;">
                              </div>
                              <div class="edgtf-ct-icon">
                                 <img class="ic-men" src="img/<?php //echo $row_wt['icon']; ?>">
                              </div>
                              <p itemprop="name" class="edgtf-ct-title entry-title" style="font-size: 13px;margin-top: 4px"><?php //echo $row_wt['wtrain']; ?></p>
                           </div>
                        </div>
                        <?php //} ?>
                     </div>
                  </div>
               </div>
            </div>
            <!--============================================================================================-->
            <!--<div class="wpb_text_column wpb_content_element" id="dwhodoyou">
               <form action="#" method="post" name="fwhodoyou" id="fwhodoyou">
                  <div class="wpb_wrapper" >
                     <h5>Update Who Do They train</h5>
                     <div class="edgtf-ls-amenities-items">
                        <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                           <?php
                              /*$select_stmt_wt2=$db->prepare("SELECT * FROM train WHERE aktif='1'");	//sql select query
                              $select_stmt_wt2->execute();
                              while($row_wt2=$select_stmt_wt2->fetch(PDO::FETCH_ASSOC))
                              {
                              
                              $select_stmt_wt3=$db->prepare("SELECT * FROM who_train WHERE kd_instructor ='$row[kd_instructor]' AND wtrain='$row_wt2[nm_train]'");
                              		$select_stmt_wt3->execute();
                              		$row_wt3=$select_stmt_wt3->fetch(PDO::FETCH_ASSOC);
                              if ($row_wt2['nm_train']==$row_wt3['wtrain']) {$ckd="checked=\"checked\"";}
                              else {$ckd="";}*/
                              ?>
                           <div class="edgtf-ls-combined-item">
                              <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                              <input name="cb_who[]" id="cb_who[]" type="checkbox" value="<?php //echo $row_wt2['nm_train']; ?>" <?php //echo $ckd; ?>/>
                              <span class="edgtf-ls-amenity-label"><?php //echo $row_wt2['nm_train']; ?></span>
                              </a>
                           </div>
                           <?php //} ?>
                        </div>
                     </div>
                     <br>
                  </div>
                  <input name="bt_save_whodoyou" id="bt_save_whodoyoux" type="button" value="Save" onclick="submitFormWhodo()"/>
                  <input name="bt_cancel_whodoyou" type="button" value="Cancel" id="bt_cancel_whodoyou"/>
               </form>
            </div>-->
            <!--============================================================================================-->
            <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <!--<a href="javascript:void(0);" id="bt_whodoyou"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>-->
            <?php //} ?>
         <!--</div>-->
         <!--<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-wheredoyou" role="tabpanel" aria-labelledby="tab-title-description" style="-webkit-box-shadow:none; height:100%;">
            <div id="dt_wheredoyou">
               <div id="result_wheredo">
                  <div class="wpb_wrapper">
                     <div class="edgtf-category-tabs-holder" style="border:0px; box-shadow:none; box-sizing:border-box; padding:0px; margin-left:-35px;"">
                        <div class="edgtf-ct-inner">
                           <?php
                              /*$select_stmt_ww=$db->prepare("SELECT
                              where_work.id_,
                              where_work.kd_instructor,
                              where_work.wwork,
                              where_work.aktif,
                              `work`.icon
                              FROM
                              `work`
                              JOIN where_work
                              ON `work`.nm_work = where_work.wwork WHERE kd_instructor='$row[kd_instructor]' AND where_work.aktif='1'");	//sql select query
                              $select_stmt_ww->execute();
                              while($row_ww=$select_stmt_ww->fetch(PDO::FETCH_ASSOC))
                              {*/
                              ?>
                           <div class="edgtf-ct-item" style="text-align:left; margin-left:38px;">
                              <div class="edgtf-ct-item-inner">
                                 <div class="edgtf-ct-icon">
                                    <img class="ic-check-1" src="img/iccheck@1x.png" style="margin-top:8px; margin-right:12px;">
                                 </div>
                                 <div class="edgtf-ct-icon">
                                    <img class="ic-personal-studio" src="img/<?php //echo $row_ww['icon']; ?>" height="32" width="32">
                                 </div>
                                 <p itemprop="name" class="edgtf-ct-title entry-title" style="font-size: 13px;margin-top: 4px"><?php //echo $row_ww['wwork']; ?></p>
                              </div>
                           </div>
                           <?php //} ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--===================================================================================-->
            <!--<div class="wpb_text_column wpb_content_element " id="dwheredoyou">
               <form action="#" method="post" name="fwheredoyou">
                  <div class="wpb_wrapper">
                     
                     <h5>Update Where do you train?</h5>
                     <div class="edgtf-ls-amenities-items">
                        <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                           <?php
                              /*$select_stmt_ww2=$db->prepare("SELECT * FROM work WHERE aktif='1'");	//sql select query
                              $select_stmt_ww2->execute();
                              while($row_ww2=$select_stmt_ww2->fetch(PDO::FETCH_ASSOC))
                              {
                              $select_stmt_ww3=$db->prepare("SELECT * FROM where_work WHERE kd_instructor ='$row[kd_instructor]' AND wwork='$row_ww2[nm_work]'");
                              		$select_stmt_ww3->execute();
                              		$row_ww3=$select_stmt_ww3->fetch(PDO::FETCH_ASSOC);
                              if ($row_ww2['nm_work']==$row_ww3['wwork']) {$ckd="checked=\"checked\"";}
                              else {$ckd="";}*/
                              ?>
                           <div class="edgtf-ls-combined-item">
                              <input name="cb_work[]" id="cb_work[]" type="checkbox" value="<?php //echo $row_ww2['nm_work']; ?>" <?php //echo $ckd; ?>/>
                              <span class="edgtf-ls-amenity-label"><?php //echo $row_ww2['nm_work']; ?></span>
                           </div>
                           <?php //} ?>
                        </div>
                     </div>
                     <br>
                  </div>
                  <input name="bt_save_wheredoyou" type="button" value="Save" onclick="submitFormWheredo()"/>
                  <input name="bt_cancel_wheredoyou" type="button" value="Cancel" id="bt_cancel_wheredoyou"/>
               </form>
            </div>-->
            <!--====================================================================================-->
            <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <!--<a href="javascript:void(0);" id="bt_wheredoyou"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>-->
            <?php //} ?>
         <!--</div>-->
         <!--<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-post" role="tabpanel" aria-labelledby="tab-title-description" style="-webkit-box-shadow:none; height:100%;">
            <div class="wpb_wrapper">
               <div class="edgtf-image-gallery edgtf-grid-list edgtf-disable-bottom-space  edgtf-ig-grid-type edgtf-four-columns edgtf-small-space  edgtf-has-radius ">
                  <div class="edgtf-ig-inner edgtf-outer-space">
                     <div id="dt_post">
                        <div id="result_post">
                           <!--<div class="edgtf-ig-image edgtf-item-space">
                              <div class="edgtf-ig-image-inner">
                                 <img width="800" height="552" src="img/beforeimg@1x.png" class="attachment-full size-full" alt="a" loading="lazy" sizes="(max-width: 800px) 100vw, 800px"> 
                              </div>
                              </div>
                              
                              <div class="edgtf-ig-image edgtf-item-space">
                              <div class="edgtf-ig-image-inner">
                                 <img width="800" height="552" src="img/afterimg@1x.png" class="attachment-full size-full" alt="a" loading="lazy" sizes="(max-width: 800px) 100vw, 800px"> 
                              </div>
                              </div>
                           <?php
                              /*$select_stmt_post=$db->prepare("SELECT * FROM instructor_post WHERE  kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1'");	//sql select query
                              $select_stmt_post->execute();
                              while($row_post=$select_stmt_post->fetch(PDO::FETCH_ASSOC))
                              {*/
                              ?>
                           <div class="edgtf-ig-image edgtf-item-space">
                              <div class="edgtf-ig-image-inner">
                                 <img width="800" height="552" src="foto/assets/<?php //echo $row_post['image']; ?>" class="attachment-full size-full" alt="a" loading="lazy" sizes="(max-width: 800px) 100vw, 800px"> 
                              </div>
                           </div>
                           <?php //} ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="d_post">
                  <div class="edgtf-bl-wrapper edgtf-outer-space" style="margin-left:0px;">
                     <form action="#" method="post" name="fpost" id="fpost" enctype="multipart/form-data">
                        Title<br>
                        <input name="nm_title" type="text"  id="nm_title" style="width:90%"/><br>      
                        Post Images<br>
                        <input name="pimages" type="file"  id="pimages" style="width:90%"/><br>     
                        Description<br>
                        <textarea name="desc_post" id="desc_post" cols="" rows="2"  style="width:90%"></textarea><br>
                        <input name="bt_save_post" type="button" value="Add New" onclick="submit_post()"/>
                        <input name="bt_cancel_post" type="button" value="Cancel" id="bt_cancel_post"/>        
                     </form>
                  </div>
               </div>
               <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_post"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-top:15px;"></i></a>
               <?php //} ?>
            </div>
            <!--<div class="flex-row">
               <img class="before-img" src="img/beforeimg@1x.png">
               <img class="after-img" src="img/afterimg@1x.png">
               </div>-->
         <!--</div-->
         <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-socmed" role="tabpanel" aria-labelledby="tab-title-description" style="-webkit-box-shadow:none;">
            <!--<h2>Description</h2>-->
            <!--<div class="edgtf-aiw-social-icons clearfix">
               <div id="dt_sosmed">
                  <div id="result_sosmed">
                     <a itemprop="url" href="<?php //echo $row_sos['fb']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_facebook edgtf-author-social-facebook edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php //echo $row_sos['tw']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_twitter edgtf-author-social-twitter edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php //echo $row_sos['ig']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_instagram edgtf-author-social-instagram edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php //echo $row_sos['yt']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_youtube edgtf-author-social-youtube edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                  </div>
               </div>
               <?php //if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <a href="javascript:void(0);" id="bt_sosmed"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
            <?php //} ?>   
            </div>-->
            
            <!--<div id="dsosmed">
               <h5>Update Social Media</h5>
               <form action="#" method="post" name="fsosmed">
                  <input name="fb" id="fb" type="text" placeholder="facebook link" value="<?php //echo $row_sos['fb']; ?>"/>
                  <input name="tw" id="tw" type="text" placeholder="Twitter link" value="<?php //echo $row_sos['tw']; ?>"/>
                  <input name="ig" id="ig" type="text" placeholder="Instagram link" value="<?php //echo $row_sos['ig']; ?>"/>
                  <input name="yt" id="yt" type="text" placeholder="Youtube link" value="<?php //echo $row_sos['yt']; ?>"/>
                  <input name="bt_save_sosmed" type="button" value="Save" onclick="show_sosmed(
                     (document.getElementById('fb').value),
                     (document.getElementById('tw').value),
                     (document.getElementById('ig').value),
                     (document.getElementById('yt').value))"/>
                  <input name="bt_cancel_sosmed" type="button" value="Cancel" id="bt_cancel_sosmed"/>
               </form>
            </div>-->
             
             
             <div id="dcontact" style="height:500px; position:relative; display:block; overflow:scroll;z-index:10000;">
            <h5 style="padding-left:0px;">Update Contact</h5>
            <form action="#" method="post" name="fcontact">
<div id="boxx" style="display:inline-block;">
<div id="col1" style="width:400px; display:inline-block; ">
<div id="form-group-sm">
Country
                              <select name="country" class="default-select select2" id="country" onchange="show_states(document.getElementById('country').value);" style="width:100%;">
                                 <option >Country</option>
                                 <?php
                                    $select_stmt_country=$db->prepare("SELECT * FROM countries");	//sql select query
                                    $select_stmt_country->execute();
                                    while($row_countries=$select_stmt_country->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_countries['id']; ?>" <?php if ($row_countries['id']==$row_inst['country']) {echo "selected=\"selected\"";} ?>><?php echo $row_countries['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col2" style="width:400px; display:inline-block;"><div id="result_states">
States
                              <select name="state" id="state" style="width:100%;">
                                 <?php
                                    $select_stmt_state=$db->prepare("SELECT * FROM states WHERE country_id='$row[country]'");	//sql select query
                                    $select_stmt_state->execute();
                                    while($row_state=$select_stmt_state->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_state['id']; ?>" <?php if ($row_state['id']==$row_inst['state']) {echo "selected=\"selected\"";} ?>><?php echo $row_state['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col1" style="width:400px; display:inline-block;">
<div id="result_city">
Cities
<select name="city" id="city" style="width:100%;">
                                 <?php
                                    $select_stmt_city=$db->prepare("SELECT * FROM cities WHERE state_id='$row[state]'");	//sql select query
                                    $select_stmt_city->execute();
                                    while($row_city=$select_stmt_city->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                 <option value="<?php echo $row_city['id']; ?>" <?php if ($row_city['id']==$row_inst['city']) {echo "selected=\"selected\"";} ?>><?php echo $row_city['name']; ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </div></div>
<div id="col2" style="width:800px; display:inline-block;">
Street Name
<input name="street_name" type="text"  id="street_name" placeholder="Street Name" value="<?php echo $row_inst['street_name']; ?>">
</div>
<div id="col2" style="width:400px; display:inline-block;">
Street Number
<input name="street_number" type="text"  id="street_number" placeholder="Street Number" value="<?php echo $row_inst['street_number']; ?>">
</div>
<div id="col2" style="width:400px; display:inline-block;">
Zip Code
<input name="zip_code" type="text"  id="zip_code" placeholder="Zip Code" value="<?php echo $row_inst['zip_code']; ?>">
</div>
<div id="col2" style="width:400px; display:inline-block;">
Phone Number
<input name="phone" type="text" id="phone" placeholder="Phone Number" value="<?php echo $row_inst['phone_number']; ?>">
</div>
<div id="col2" style="width:400px; display:inline-block;">
Email
<input name="email" type="text"  id="email" placeholder="Email" value="<?php echo $row_inst['username']; ?>">
</div>
</div>            

                  <input name="bt_save_contact" type="button" value="Save" onclick="submit_contact()"/>
                  <input name="bt_cancel_contact" type="button" value="Cancel" id="bt_cancel_contact"/>
               </form>
            </div>
            
<div id="dt_contact">
<div id="result_contact">       

            <div class="group-32 opensans-normal-black-16px" style="margin-top:20px;">

               <div class="text-53"><?php echo $row['propinsi']; ?>, <?php echo $row['kota']; ?> <?php echo $row['negara']; ?></div>
               <div class="text-54"><a href="tel:<?php echo $row['phone_number']; ?>"><span style="color:#03F;"><?php echo $row['phone_number']; ?></span>
                </a><br>
                <a href="mailto:<?php echo $row['email']; ?>"><span style="color:#03F;"><?php echo $row['email']; ?></span></a>
               </div>
            </div>
            
</div>
</div>
            <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
            <a href="javascript:void(0);" id="bt_contact"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; "></i></a>
            <?php } ?>
         </div>
         
      </div>
   </div>
</div>
<script>
   //jQuery(document).ready(function ($) {
   
   
   function submit_contact() {
   var form = document.fcontact;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_contact.php',
       data: dataString,
       success: function(data){
        jQuery('#result_contact').html(data);
   		jQuery('#dcontact').hide();
   		jQuery('#dt_contact').show();
   
   
       }
   });
   return false;
   }
   //====================================================================   
   
   //====================================================================
   function submit_add_before() {
   var form = document.fba;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_before.php',
       data: dataString,
       success: function(data){
        jQuery('#result_ba').html(data);
   		jQuery('#d_ba').hide();
   		jQuery('#dt_ba').hide();
   
   
       }
   });
   return false;
   }
   
   //====================================================================
   function submit_add_after() {
   var form = document.fba2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_after2.php',
       data: dataString,
       success: function(data){
        jQuery('#result_ba').html(data);
   		jQuery('#d_ba').hide();
   		jQuery('#dt_ba').hide();
   
   
       }
   });
   return false;
   }
   //====================================================================
   function submit_certificate() {
   event.preventDefault();
            var formx = $('#fcertificate')[0];
            var data = new FormData(formx);
   
            data.append("CustomField", "This is some extra data, testing");
   
   
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "modul/ajax/in_certificate.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function(data)
     	{
        			jQuery('#result_certificate').html(data);
   					$('#dcertificate').show();
   		$('#dt_certificate').hide();
   
   
       			}
   
            });
   }
   
   
   
   
</script>
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
   
   function submitFormWhodo2() {
   var form = document.fwhodoyou2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_whodo2.php',
       data: dataString,
       success: function(data){
           jQuery('#result_whodo2').html(data);
   		jQuery('#dwhodoyou2').hide();
   		jQuery('#dt_whodoyou2').show();
   
   
       }
   });
   return false;
   }
   //});
</script>
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
   
   function submitFormWheredo2() {
   var form = document.fwheredoyou2;
   
   var dataString = jQuery(form).serialize();
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_wheredo2.php',
       data: dataString,
       success: function(data){
           jQuery('#result_wheredo2').html(data);
   		jQuery('#dwheredoyou2').hide();
   		jQuery('#dt_wheredoyou2').show();
   
   
       }
   });
   return false;
   }
</script>
<script>
   function submit_post() {
      event.preventDefault();
               var formx = $('#fpost')[0];
               var data = new FormData(formx);
   
               data.append("CustomField", "This is some extra data, testing");
   
   
               $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "modul/ajax/in_post.php",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 600000,
                   success: function(data)
   			  	{
           			jQuery('#result_post').html(data);
      					$('#d_post').hide();
   					$('#dt_post').show();
   					$('#nm_title').val('');
   					$('#pimages').val('');
   					$('#desc_post').val('');
          			}
   
               });
      }
      
   function submit_post2() {
      event.preventDefault();
               var formx = $('#fpost2')[0];
               var data = new FormData(formx);
   
               data.append("CustomField", "This is some extra data, testing");
   
   
               $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "modul/ajax/in_post2.php",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 600000,
                   success: function(data)
   			  	{
           			jQuery('#result_post2').html(data);
      					$('#d_post2').hide();
   					$('#dt_post2').show();
   					$('#nm_title2').val('');
   					$('#pimages2').val('');
   					$('#desc_post2').val('');
          			}
   
               });
      }
      
   function submit_certificate() {
      event.preventDefault();
               var formx = $('#fcertificate')[0];
               var data = new FormData(formx);
   
               data.append("CustomField", "This is some extra data, testing");
   
   
               $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "modul/ajax/in_certificate.php",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 600000,
                   success: function(data)
   			  	{
           			jQuery('#result_certificate').html(data);
      					$('#dcertificate').show();
   					$('#dt_certificate').hide();
      
      
          			}
   
               });
      }
</script>