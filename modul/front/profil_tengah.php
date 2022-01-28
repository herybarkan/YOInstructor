<?php
   ob_start();
   session_start();
   
   $select_stmt_inst=$db->prepare("SELECT
   instructor.id_,
   instructor.kd_instructor,
   instructor.first_name,
   instructor.last_name,
   instructor.country,
   instructor.state,
   instructor.city,
   instructor.street_name,
   instructor.street_number,
   instructor.zip_code,
   instructor.phone_number,
   instructor.photo,
   instructor.typec,
   instructor.tgl_in,
   instructor.jam_in,
   instructor.aktif,
   user_.username
   FROM
   user_
   JOIN instructor
   ON user_.kd_user = instructor.kd_instructor 
   WHERE kd_instructor='$row[kd_instructor]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
   ?>
<style>
   .xlabelz {
   font-family: 'Roboto', sans-serif;
   font-size: 12px;
   font-weight: 600;
   /*letter-spacing: 0.025rem;*/
   font-style: normal;
   text-transform: uppercase;
   color: #ffffff;
   background-color: #fddf21;
   border-radius: 1.25rem;
   -webkit-border-radius: 1.25rem;
   -moz-border-radius: 1.25rem;
   padding: 0.35rem 0.75rem;
   border-style: solid;
   border-width: 0.125rem;
   border-color: #f0c93d;
   -webkit-box-shadow: none;
   -moz-box-shadow: none;
   -box-shadow: none;
   width:300px;
   }
   .xlabel {
	box-shadow: 0px 1px 0px 0px #fddf21;
	background:linear-gradient(to bottom, #fddf21 5%, #fddf21 100%);
	background-color:#fddf21;
	border-radius:14px;
	display:inline-block;
	cursor:pointer;
	color:#fff;
	font-family:Roboto;
	font-size:14px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	
}
</style>
<script type="text/javascript" src="js/ajax_states.js"></script>
<script type="text/javascript" src="js/ajax_city.js"></script>
<!--<div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>-->
<div class="edgtf-row-grid-section-wrapper ">
   <div class="edgtf-row-grid-section">
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1534496261206">
         <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
               <div class="wpb_wrapper">
                  <!--<div class="wpb_text_column wpb_content_element ">
                     <div class="wpb_wrapper">
                        <h4>I Third / II Thirds Layout</h4>
                     </div>
                     </div>-->
                  <!--<div class="vc_empty_space" style="height: 7px"><span class="vc_empty_space_inner"></span></div>-->
                  
                 
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                 
                                    <!-- <p>Lorem ipsum dolor amet elit, consectetuer massa adipiscing. Aenean commodo ligula eget dolor. Cum sociis theme natoque penatibus montes.</p>-->
                                    
                                     <!--================================================================-->
                  
<div class="vc_column-inner" id="dtype">
 <form action="#" method="post" name="ftype">
      <div class="wpb_wrapper">
         <div class="edgtf-accordion-holder edgtf-ac-default  edgtf-accordion clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
            <?php
										
			$select_stmt_catx=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
			$select_stmt_catx->execute();
			while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
			{
			?>
            <h5 class="edgtf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
               <span class="edgtf-tab-title"><?php echo $row_catx['nm_category']; ?></span>
               <span class="edgtf-accordion-mark">
               <span class="edgtf-icon-plus fas fa-plus"></span>
               <span class="edgtf-icon-minus fas fa-minus"></span>
               </span>
            </h5>
            <div class="edgtf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none; height:250px;">
               <div class="edgtf-accordion-content-inner">
                  <div class="wpb_text_column wpb_content_element ">
                     <div class="wpb_wrapper">
                        <!--<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus ligula eget.</p>-->
                        <p>
                        <div class="col-sm-12" style="padding-bottom:25px; column-count:2;">
                             <?php
										
									$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_catx[id_]' AND aktif='1'");	//sql select query
									$select_stmt_subcat->execute();
									while($row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC))
									{
										
										$select_stmt_subcat2=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$row[kd_instructor]' AND sub_class_name='$row_subcat[nm_sub_category]'");	//sql select query
									$select_stmt_subcat2->execute();
									$row_subcat2=$select_stmt_subcat2->fetch(PDO::FETCH_ASSOC);
									if ($row_subcat2['sub_class_name']==$row_subcat['nm_sub_category']) {$chkd="checked=\"checked\"";}
									else {$chkd="";}
									?>
							 
                              <div class="col-sm-12">
                                 <div class="checkboxx">
                                 
                                 <input type="checkbox" name="cb_type[]" value="<?php echo $row_subcat['nm_sub_category']; ?>" <?php echo $chkd; ?>>
                                    <?php echo $row_subcat['nm_sub_category']; ?>
                                 </div>
                              </div>
                              <?php } ?>

                           </div>
                           </p>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            
            
         </div>
         <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
      </div>
      <input name="bt_save_type" id="bt_save_type" type="button" value="Save" onclick="submit_type()"/>
      <input name="bt_cancel_type" id="bt_cancel_type" type="button" value="Cancel"/>
      </form>
   </div>
                  <!--=================================================================-->
                                    <div class="edgtf-ls-amenities-items" id="dt_type">
                                    
                                    <div id="result_type">
                                    <h5 class="edgtf-widget-title" style="margin-left:15px;">Type</h5>
                                       <div class="edgtf-ls-amenities-items" style="column-count:1; padding-left:15px;">
                                          <?php
                                             $select_stmt_cat=$db->prepare("SELECT
type_class.kd_instructor,
type_class_sub.sub_class_name,
type_class.type
FROM
type_class_sub
JOIN type_class
ON type_class_sub.type_class = type_class.id_ WHERE type_class_sub.kd_instructor='$row[kd_instructor]' AND type_class_sub.aktif='1'");	//sql select query
                                             $select_stmt_cat->execute();
                                             while($row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
                                          <div class="edgtf-ls-combined-item " style="padding:5px;">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                                <!--<i class="edgtf-ls-combined-icon far fa-check-square" style="color:#FFDE39;"></i>-->
                                                <span class="xlabel " style="width:100%;"><?php echo $row_cat['type']; ?> - <?php echo $row_cat['sub_class_name']; ?></span>
                                             </a>
                                          </div>
                                          <?php } ?>
                                       </div>
                                       </div>
                                       <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_type"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                       <?php } ?>
                                    </div>
                                    

                                    <br><br>
                                    
                                    
                                    <div class="widget edgtf-blog-list-widget" style="padding-left:15px;">
                                       
                                       <h5 class="edgtf-widget-title">Certification</h5>
									   <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <div id="dcertificate">
                                       <div id="result_certificate">
                                       <div class="edgtf-blog-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-bl-simple edgtf-one-columns edgtf-normal-space edgtf-bl-pag-no-pagination" data-type="simple" data-number-of-posts="5" data-number-of-columns="one" data-space-between-items="normal" data-orderby="date" data-order="ASC" data-image-size="thumbnail" data-title-tag="h6" data-excerpt-length="10" data-pagination-type="no-pagination" data-max-num-pages="3" data-next-page="2">
                                          <div class="edgtf-bl-wrapper edgtf-outer-space">
                                             <ul class="edgtf-blog-list">
                                                <?php
                                             $select_stmt_ser=$db->prepare("SELECT * FROM instructor_sertifikat WHERE  kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                                             $select_stmt_ser->execute();
                                             while($row_ser=$select_stmt_ser->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
                                                <li class="edgtf-bl-item edgtf-item-space clearfix">
                                                   <div class="edgtf-bli-inner">
                                                      <div class="edgtf-post-image">
                                                         <a itemprop="url" href="#" title="Certificate">
                                                         <img width="150" height="150" src="foto/assets/<?php echo $row_ser['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="a" loading="lazy" > </a>
                                                      </div>
                                                      <div class="edgtf-bli-content">
                                                         <h6 itemprop="name" class="entry-title edgtf-post-title">
                                                            <a itemprop="url" href="#">
                                                            <?php echo $row_ser['nm_sertifikat']; ?></a>
                                                         </h6>
                                                         <div class="edgtf-post-info-author">
                                                            <span class="edgtf-post-info-author-text">
                                                           Year  </span>
                                                            <a itemprop="author" class="edgtf-post-info-author-link" href="#">
                                                            <?php echo $row_ser['year']; ?>  </a>
                                                         </div>
                                                         <?php if ($row_ser['verified']=="1") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#0C3;"></i> Verified
                                                         <?php } elseif ($row_ser['verified']=="0") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#F00;"></i> Not Verified
                                                         <?php } ?>
                                                      </div>
                                                   </div>
                                                </li>
                                                <?php } ?>
                                                
                                                
                                             </ul>
                                          </div>
                                          </div>
                                          
                                          
                                       
                                       
                                          </div>
                                          
                                          </div>
                                          
										  <?php } ?>
                                          
<!--===========================================================================================-->
<div id="dt_certificate">
                                       <div class="edgtf-blog-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-bl-simple edgtf-one-columns edgtf-normal-space edgtf-bl-pag-no-pagination" data-type="simple" data-number-of-posts="5" data-number-of-columns="one" data-space-between-items="normal" data-orderby="date" data-order="ASC" data-image-size="thumbnail" data-title-tag="h6" data-excerpt-length="10" data-pagination-type="no-pagination" data-max-num-pages="3" data-next-page="2">
                                          <div class="edgtf-bl-wrapper edgtf-outer-space" style="margin-left:0px;">
<form action="#" method="post" name="fcertificate" id="fcertificate" enctype="multipart/form-data">
Certificate Name
<input name="nm_certificate" type="text"  id="nm_certificate" style="width:90%"/>      
<br>
Year<br>
<input name="cyear" type="text"  id="cyear" style="width:90%"/>       
Certificate Images
<input name="cimages" type="file"  id="cimages" style="width:90%"/>     
Description
<textarea name="desc_certificate" id="desc_certificate" cols="" rows="2"  style="width:90%"></textarea>
<!--<input name="bt_save_certificate" type="button" value="Add New" onclick="show_certificate((document.getElementById('nm_certificate').value),(document.getElementById('cyear').value),(document.getElementById('cimages').value),(document.getElementById('desc_certificate').value))"/>-->
<input name="bt_save_certificate" type="button" value="Add New" onclick="submit_certificate()"/>
<input name="bt_cancel_certificate" type="button" value="Cancel" id="bt_cancel_certificate"/>        
</form>
                                          </div>
                                          </div>
                                          </div>
                                          
<!--===========================================================================================-->
                                          
                                    </div>
                                    <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                    <a href="javascript:void(0);" id="bt_certificate"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                    <?php } ?>
<!--=====================================================================================================-->                                    
                                    
                                    
                                          <div class="edgtf-bl-wrapper edgtf-outer-space">
                                             
                                                <?php
                                             $select_stmt_ser2=$db->prepare("SELECT * FROM instructor_sertifikat WHERE  kd_instructor='$row[kd_instructor]' AND verified='1'");	//sql select query
                                             $select_stmt_ser2->execute();
                                             $row_ser2=$select_stmt_ser2->fetch(PDO::FETCH_ASSOC);
                                             ?>
                                                
                                                         <?php if ($row_ser2['verified']=="1") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square fa-2x" style="color:#0C3; margin-left:15px;"></i> Verified
                                                         <?php } elseif ($row_ser2['verified']=="0") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square fa-2x" style="color:#F00; margin-left:15px;"></i> Not Verified
                                                         <?php } ?>
                                                      
                                               
                                         
                                          </div>
                                          

                                    
                                    
                                    <?php
                                       $select_stmt_sch=$db->prepare("SELECT * FROM instructor_schedule WHERE  kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                                       $select_stmt_sch->execute();
                                       $row_sch=$select_stmt_sch->fetch(PDO::FETCH_ASSOC);
                                       ?>
                                    <!--<p style="margin-top:-20px;">-->
                                    <div style="padding-left:0px;" id="dschedule">
                                       <div id="result_sch">
                                          <h5 style="padding-left:15px;">Schedule</h5>
                                          <table width="100%" border="0" style="border-collapse: collapse; border: none;margin-top:-20px; ">
                                             <tr style="border: none;">
                                                <td width="50%" align="left" style="border: none; text-align:left;">Monday: </td>
                                                <td width="50%" style="border: none; text-align:left;"><?php echo $row_sch['mon_start']; ?> - <?php echo $row_sch['mon_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Tuesday: </td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['tue_start']; ?> - <?php echo $row_sch['tue_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Wednesday: </td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['wed_start']; ?> - <?php echo $row_sch['wed_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Thursday: </td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['thurs_start']; ?> - <?php echo $row_sch['thurs_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Friday: </td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['fri_start']; ?> - <?php echo $row_sch['fri_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Saturday: </td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['sat_start']; ?> - <?php echo $row_sch['sat_end']; ?></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Sunday:</td>
                                                <td style="border: none; text-align:left;"><?php echo $row_sch['sun_start']; ?> - <?php echo $row_sch['sun_end']; ?></td>
                                             </tr>
                                          </table>
                                       </div>
                                       <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_schedule"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                       <?php } ?>
                                    </div>
                                    <div id="dt_schedule">
                                       <h5 style="padding-left:15px;">Update Schedule</h5>
                                       <form action="#" method="post" name="fschedule">
                                          <table width="100%" border="0" style="border-collapse: collapse; border: none;margin-top:-20px; ">
                                             <tr style="border: none;">
                                                <td width="50%" align="left" style="border: none; text-align:left;">Monday: </td>
                                                <td width="50%" style="border: none; text-align:left;">
                                                   <input name="mon_start" id="mon_start" type="time" value="<?php echo $row_sch['mon_start']; ?>"/> - 		<input name="mon_end" id="mon_end" type="time" value="<?php echo $row_sch['mon_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Tuesday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="tue_start" id="tue_start" type="time"  value="<?php echo $row_sch['tue_start']; ?>"/> - <input name="tue_end" id="tue_end" type="time"  value="<?php echo $row_sch['tue_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Wednesday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="wed_start" id="wed_start" type="time" value="<?php echo $row_sch['wed_start']; ?>"/> - <input name="wed_end" id="wed_end" type="time" value="<?php echo $row_sch['wed_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Thursday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="thurs_start" id="thurs_start" type="time" value="<?php echo $row_sch['thurs_start']; ?>"/> - <input name="thurs_end" id="thurs_end" type="time" value="<?php echo $row_sch['thurs_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Friday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="fri_start" id="fri_start" type="time" value="<?php echo $row_sch['fri_start']; ?>"/> - <input name="fri_end" id="fri_end" type="time" value="<?php echo $row_sch['fri_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Saturday: </td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="sat_start" id="sat_start" type="time" value="<?php echo $row_sch['sat_start']; ?>"/> - <input name="sat_end" id="sat_end" type="time" value="<?php echo $row_sch['sat_end']; ?>"/>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none; text-align:left;">Sunday:</td>
                                                <td style="border: none; text-align:left;">
                                                   <input name="sun_start" id="sun_start" type="time" value="<?php echo $row_sch['sun_start']; ?>"/> - <input name="sun_end" id="sun_end" type="time" value="<?php echo $row_sch['sun_end']; ?>"/>
                                                </td>
                                             </tr>
                                          </table>
                                          <input name="bt_save_schedule" type="button" value="Save" onclick="show_sch(
                                             (document.getElementById('mon_start').value),
                                             (document.getElementById('mon_end').value),
                                             (document.getElementById('tue_start').value),
                                             (document.getElementById('tue_end').value),
                                             (document.getElementById('wed_start').value),
                                             (document.getElementById('wed_end').value),
                                             (document.getElementById('thurs_start').value),
                                             (document.getElementById('thurs_end').value),
                                             (document.getElementById('fri_start').value),
                                             (document.getElementById('fri_end').value),
                                             (document.getElementById('sat_start').value),
                                             (document.getElementById('sat_end').value),
                                             (document.getElementById('sun_start').value),
                                             (document.getElementById('sun_end').value))"/>
                                          <input name="bt_cancel_schedule" type="button" value="Cancel" id="bt_cancel_schedule"/>
                                       </form>
                                    </div>
                                    <div id="dt_contact">
                                       <div id="result_contact">
                                          <h5 style="padding-left:15px;">Contact</h5>
                                          <p style="margin-top:-20px; padding-left:15px;">
                                             <!--<span style="border: none; text-align:left;"><?php //echo $row['street_name']; ?> <?php //echo $row['street_number']; ?></span> -->
                                             <span><?php echo $row['propinsi']; ?></span> 
                                             <span><?php echo $row['kota']; ?></span> 
                                             <span><?php //echo $row['zip_code']; ?> <?php echo $row['negara']; ?></span><br>
                                             <span><a href="tel:<?php echo $row['phone_number']; ?>"><?php echo $row['phone_number']; ?></a></span><br />
                                             <span><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></span>
                                          </p>
                                       </div>
                                       <br>
                                       <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_contact"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                       <?php } ?>
                                    </div>
                                    <div id="dcontact">
                                       <h5 style="padding-left:15px;">Update Contact</h5>
                                       <form action="#" method="post" name="fcontact">
                                          <table width="100%" border="0" style="border-collapse: collapse; border: none;">
                                             <tr style="border: none;">
                                                <td style="border: none;">
                                                   <div id="form-group-sm">
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
                                                   </div>
                                                </td>
                                                <td style="border: none;">
                                                   <div id="result_states">
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
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none;">
                                                   <div id="result_city">
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
                                                   </div>
                                                </td>
                                                <td style="border: none;"></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td colspan="2" style="border: none;">
                                                   <input name="street_name" type="text"  id="street_name" placeholder="Street Name" value="<?php echo $row_inst['street_name']; ?>">
                                                </td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none;"><input name="street_number" type="text"  id="street_number" placeholder="Street Number" value="<?php echo $row_inst['street_number']; ?>"></td>
                                                <td style="border: none;"><input name="zip_code" type="text"  id="zip_code" placeholder="Zip Code" value="<?php echo $row_inst['zip_code']; ?>"></td>
                                             </tr>
                                             <tr style="border: none;">
                                                <td style="border: none;"><input name="phone" type="text" id="phone" placeholder="Phone Number" value="<?php echo $row_inst['phone_number']; ?>"></td>
                                                <td style="border: none;"><input name="email" type="text"  id="email" placeholder="Email" value="<?php echo $row_inst['username']; ?>"></td>
                                             </tr>
                                          </table>
                                          <input name="bt_save_contact" type="button" value="Save" onclick="submit_contact()"/>
                                          <input name="bt_cancel_contact" type="button" value="Cancel" id="bt_cancel_contact"/>
                                       </form>
                                    </div>
                                    <?php
                                       $select_stmt_sos=$db->prepare("SELECT * FROM instructor_detail WHERE  kd_instructor='$row[kd_instructor]'");	//sql select query
                                       $select_stmt_sos->execute();
                                       $row_sos=$select_stmt_sos->fetch(PDO::FETCH_ASSOC);
                                       ?>
                                    <div id="dt_sosmed">
                                       <div id="result_sosmed">
                                          <div class="edgtf-woo-social-share-holder" style="padding-left:15px;">
                                             <div class="edgtf-social-share-holder edgtf-list">
                                                <!--<p class="edgtf-social-title">Share:</p>-->
                                                <h5>Social Media</h5>
                                                <ul>
                                                   <li class="edgtf-facebook-share">
                                                      <a itemprop="url" class="edgtf-share-link" href="<?php echo $row_sos['fb']; ?>" target="_blank">
                                                      <span class="edgtf-social-network-icon social_facebook"></span>
                                                      </a>
                                                   </li>
                                                   <li class="edgtf-twitter-share">
                                                      <a itemprop="url" class="edgtf-share-link" href="<?php echo $row_sos['tw']; ?>" target="_blank">
                                                      <span class="edgtf-social-network-icon social_twitter"></span>
                                                      </a>
                                                   </li>
                                                   <li class="edgtf-tumblr-share">
                                                      <a itemprop="url" class="edgtf-share-link" href="<?php echo $row_sos['ig']; ?>" target="_blank">
                                                      <span class="edgtf-social-network-icon social_instagram"></span>
                                                      </a>
                                                   </li>
                                                   <li class="edgtf-tumblr-share">
                                                      <a itemprop="url" class="edgtf-share-link" href="<?php echo $row_sos['yt']; ?>" target="_blank">
                                                      <span class="edgtf-social-network-icon social_youtube"></span>
                                                      </a>
                                                   </li>
                                                </ul>
                                                <br>
                                             </div>
                                          </div>
                                       </div>
                                       <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                                       <a href="javascript:void(0);" id="bt_sosmed"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0; margin-left:15px;"></i></a>
                                       <?php } ?>
                                    </div>
                                    <div id="dsosmed">
                                       <h5>Update Social Media</h5>
                                       <form action="#" method="post" name="fsosmed">
                                          <input name="fb" id="fb" type="text" placeholder="facebook link" value="<?php echo $row_sos['fb']; ?>"/>
                                          <input name="tw" id="tw" type="text" placeholder="Twitter link" value="<?php echo $row_sos['tw']; ?>"/>
                                          <input name="ig" id="ig" type="text" placeholder="Instagram link" value="<?php echo $row_sos['ig']; ?>"/>
                                          <input name="yt" id="yt" type="text" placeholder="Youtube link" value="<?php echo $row_sos['yt']; ?>"/>
                                          <input name="bt_save_sosmed" type="button" value="Save" onclick="show_sosmed(
                                             (document.getElementById('fb').value),
                                             (document.getElementById('tw').value),
                                             (document.getElementById('ig').value),
                                             (document.getElementById('yt').value))"/>
                                          <input name="bt_cancel_sosmed" type="button" value="Cancel" id="bt_cancel_sosmed"/>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-8 vc_col-sm-offset-0 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <!--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Etiam eros faucibus tincidunt et.</p>-->
                                    <?php //include ('modul/front/slider_gallery.php');?>
<div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                                    <?php
                                       //
                                       include ('modul/front/list_gallery.php');
                                       
                                       ?>
                                    <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                                    <?php
                                       //
                                       
                                       include ('modul/front/who_do.php');
                                       ?>
                                 </div>
                              </div>
                              <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
   function submit_type() {
   var form = document.ftype;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_type.php',
       data: dataString,
       success: function(data){
        jQuery('#result_type').html(data);
   		jQuery('#dtype').hide();
   		jQuery('#dt_type').show();
   
   
       }
   });
   return false;
   }
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