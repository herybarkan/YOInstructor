<style>
   #dbioz{
   display:none;
   }
</style>
<?php
error_reporting(0);
@ini_set('display_errors', 0);
date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$select_stmt_in=$db->prepare("INSERT INTO tbl_visit (kd_instructor, ip_address, tgl, jam, kd_user) VALUES ('$_GET[kd_inst]', '$ip', '$tglin', '$jamin', '$_SESSION[yo_kd_user]')");	
$select_stmt_in->execute();
?>
<div class="vc_row wpb_row vc_inner vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="wpb_text_column wpb_content_element ">
         <div id="dname">
            <div class="wpb_wrapper margin_nama">
               <!--<p>Lorem ipsum dolor amet elit, consectetuer massa adipiscing. Aenean commodo ligula eget dolor. Cum sociis theme natoque penatibus montes.</p>-->
               <div id="result_unama">
               <h2 itemprop="name" class="edgtf-single-product-title" style="margin-top:0px;"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
               
               <div class="woocommerce-product-rating" style="margin-top:-20px;">
                  <div class="star-rating">
                     <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on 
                     <span class="rating">1</span> customer rating</span>
                  </div>
                  <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a> 
               </div>
               </div>
               <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
               <a href="javascript:void(0);" id="bt_name"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>  
               <?php } ?> 
            </div>
            </div>
            
            <div id="dt_name">
            <form action="#" method="GET" name="fname">
            <input name="tfname" id="tfname" type="text" value="<?php echo $row['first_name']; ?> "/>
            <input name="tlname" id="tlname" type="text" value="<?php echo $row['last_name']; ?>"/>
            <input name="bt_save_name" id="bt_save_name" type="button" value="Save" onclick="show_unama((document.getElementById('tfname').value),(document.getElementById('tlname').value));"/>
            <input name="bt_cancel_name" type="button" value="Cancel" id="bt_cancel_name"/>
            </form>
            </div>
         </div>
         <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
      </div>
   </div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
               <!--<p>Lorem ipsum dolor amet elit, consectetuer massa adipiscing. Aenean commodo ligula eget dolor. Cum sociis theme natoque penatibus montes.</p>-->
               <div class="edgtf-wishlist-holder">
                  <a class="edgtf-wishlist-linkx " href="javascript:void(0);" onclick="show_like('<?php echo $_GET['kd_inst']; ?>');">
                  <span class="edgtf-wishlist-title">Like</span>
                  <i class="edgtf-icon-font-awesome far fa-heart "></i>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php
				  $select_stmt_like=$db->prepare("SELECT COUNT(id_) AS jml_like FROM tbl_like WHERE kd_instructor='$_GET[kd_inst]'");	
$select_stmt_like->execute();
$row_like=$select_stmt_like->fetch(PDO::FETCH_ASSOC);

				  ?>
                  <span id="result_like">
                  <?php echo $row_like['jml_like']; ?>
                  </span>
                  </a>
                  <div class="edgtf-wishlist-response"></div>
               </div>
<?php
$site_url="https%3A%2F%2Fyoinstructor.com%2F%3Fkd_inst%3D".$_GET['kd_inst']."";
$site_title="xxx";
?>
               <div class="edgtf-ls-social-share">
                  <div class="edgtf-social-share-holder edgtf-dropdown">
                     <a class="edgtf-social-share-dropdown-opener" href="javascript:void(0)">
                     <span class="edgtf-social-share-title">Share this</span>
                     <i class="fas fa-share-alt"></i>
                     </a>
                     <div class="edgtf-social-share-dropdown">
                        <ul>
                           <li class="edgtf-facebook-share">
                              <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fyoinstructor.com%2F%3Fkd_inst%3D<?php echo $_GET['kd_inst']; ?>&display=popup&ref=plugin&src=share_button', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                              <span class="edgtf-social-network-icon social_facebook"></span>
                              </a>
                           </li>
                           <li class="edgtf-twitter-share">
                              <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('http://twitter.com/share?text=Visit the link &url=https://yoinstructor.com/index.php?kd_inst=<?php echo $_GET['kd_inst']; ?> &hashtags=yo_instructor,wellness,healty', 'popupwindow', 'scrollbars=yes,width=800,height=400');">
                              <span class="edgtf-social-network-icon social_twitter"></span>
                              </a>
                           </li>
                           <li class="edgtf-tumblr-share">
                              <a itemprop="url" class="edgtf-share-link" href="#" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=<?php echo $site_url; ?>&amp;title=<?php echo $site_title; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                              <span class="edgtf-social-network-icon social_tumblr"></span>
                              </a>
                           </li>
                           
                           <!--<li class="edgtf-tumblr-share">
                              <a itemprop="url" class="edgtf-share-link" href="#" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=https://urbango.qodeinteractive.com/listing-item/art-exile/&amp;name=Art Exile&amp;description=Venenatis fauci nulla quis ante. Etiam sit amet orci eget eros. Maecenas nec odio et ante tincidunt tempus vitaae sapien ut libero? Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                              <span class="edgtf-social-network-icon social_digg"></span>
                              </a>
                           </li>-->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
      </div>
   </div>
</div>
<?php
$select_stmt_prc=$db->prepare("SELECT * FROM instructor_price WHERE kd_instructor='$_GET[kd_inst]' AND checked='1'");	
$select_stmt_prc->execute();
$row_prc=$select_stmt_prc->fetch(PDO::FETCH_ASSOC);
?>
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
               <!--<p>Lorem ipsum dolor amet elit, consectetuer massa adipiscing. Aenean commodo ligula eget dolor. Cum sociis theme natoque penatibus montes.</p>-->
               <div id="dprice">
               <div id="result_price">
               <table width="100%" border="0" style="border: none;">
  <tr style="border: none;">
    <td style="border: none;" align="left">
    <div id="result_opack">
    <table width="100%" border="0" style="border: none;">
  <tr style="border: none;">
    <td style="border: none;"><h2 style="margin-top:0px; margin-left:-25px;"><?php echo $row_prc['currency']; ?></h2>
    
    </td>
    <td style="border: none;"><h2 style="margin-top:0px;"><?php echo number_format($row_prc['price'],0,',','.'); ?></h2></td>
  </tr>
</table>
</div>


     </td>
    <td style="border: none;"></td>
  </tr>
</table>
<div id="result_opack2">
    <h4><select name="package" class="default-select select2" id="package" style="width:100%; margin-left:-10px;">
                                                      
                                                      <?php
                                                         $select_stmt_pack=$db->prepare("SELECT * FROM instructor_price WHERE kd_instructor='$_GET[kd_inst]'");	//sql select query
                                                         $select_stmt_pack->execute();
                                                         while($row_pack=$select_stmt_pack->fetch(PDO::FETCH_ASSOC))
                                                         {
                                                         ?>
                                                      <option value="<?php echo $row_pack['price']; ?>"><?php echo $row_pack['currency']; ?><?php echo number_format($row_pack['price'],0,',','.'); ?> - <?php echo $row_pack['pack']; ?></option>
                                                      <?php
                                                         }
                                                         ?>
                                                   </select></h4>
</div>
<br>
               <input name="bt_opack" id="bt_opack" type="button" value="Other Package"/>
                  
                  </div>
                  <br>
                  
                  <div style="margin-top:-20px;">
                     <span style="margin-top: -20px;"> <?php echo $row_prc['pack']; ?></span> 
                     <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                     &nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" id="bt_price" title="Update Price"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
                     &nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" id="bt_add_price" title="Add New Package"><i class="edgtf-icon-font-awesome far fa-plus-square " style="color:#FC0;"></i></a>
                     <?php } ?>
                  </div>
                  <br>
                  <a itemprop="url" href="?com=booking" target="_self" class="edgtf-btn edgtf-btn-small edgtf-btn-solid" style="margin-top:-20px;">
                  <span class="edgtf-btn-text">Book Now</span>
                  </a>
               </div>
               <div id="dt_price">
                  <form action="#" method="post" name="fprice">
                  Select Currency<br>
                                                   <select name="currency" class="default-select select2" id="currency" style="width:100%;">
                                                      
                                                      <?php
                                                         $select_stmt_curr=$db->prepare("SELECT * FROM currency");	//sql select query
                                                         $select_stmt_curr->execute();
                                                         while($row_curr=$select_stmt_curr->fetch(PDO::FETCH_ASSOC))
                                                         {
                                                         ?>
                                                      <option value="<?php echo $row_curr['nm_curr']; ?>"><?php echo $row_curr['nm_curr']; ?></option>
                                                      <?php
                                                         }
                                                         ?>
                                                   </select>
                                                  
                     Price<br><input name="tprice" id="tprice" type="text" value="<?php echo $row_prc['price']; ?>"/>
                     Package<br><input name="tpack" id="tpack" type="text" value="<?php echo $row_prc['pack']; ?>"/>
                     Description<br><input name="tdesc" id="tdesc" type="text" value="<?php echo $row_prc['deskripsi']; ?>"/>
                     <input name="bt_save_price" id="bt_save_price" type="button" value="Save" onclick="submit_price()"/>
                     <input name="bt_cancel_price" type="button" value="Cancel" id="bt_cancel_price"/>
                  </form>
               </div>
               
               <div id="dt_price2">
                  <form action="#" method="post" name="fprice2">
                  Select Currency<br>
                                                   <select name="currency2" class="default-select select2" id="currency2" style="width:100%;">
                                                      
                                                      <?php
                                                         $select_stmt_curr=$db->prepare("SELECT * FROM currency");	//sql select query
                                                         $select_stmt_curr->execute();
                                                         while($row_curr=$select_stmt_curr->fetch(PDO::FETCH_ASSOC))
                                                         {
                                                         ?>
                                                      <option value="<?php echo $row_curr['nm_curr']; ?>"><?php echo $row_curr['nm_curr']; ?></option>
                                                      <?php
                                                         }
                                                         ?>
                                                   </select>
                                                  
                     Price<br><input name="tprice2" id="tprice2" type="text" />
                     Package<br><input name="tpack2" id="tpack2" type="text" />
                     Description<br><input name="tdesc2" id="tdesc2" type="text" />
                     <input name="bt_save_price2" id="bt_save_price2" type="button" value="Input" onclick="submit_price2()"/>
                     <input name="bt_cancel_price2" type="button" value="Cancel" id="bt_cancel_price2"/>
                  </form>
               </div>
               <!--</span>
                  </ins> -->
               <!-- </p>-->
            </div>
         </div>
         <!--<div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>-->
      </div>
   </div>
</div>
<!--===================================================================================================-->
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-12 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
               
               <div id="pbio">
               
               <h5>Bio</h5>
               <div id="result_bio">
                  <p><?php echo $row_det['overview']; ?></p>
                  </div>
                  <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
                  <a href="javascript:void(0);" id="bt_bio"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a>
                  <?php } ?>
               </div>
               <div id="dbio">
               <h5>Update Bio</h5>
                  <form action="#" method="post" name="fbio">
                  
                     <textarea name="tbio" id="tbio" cols="" rows="6" ><?php echo $row_det['overview']; ?></textarea>
                     <input name="bt_bio" type="button" value="Save" onclick="show_bio(document.getElementById('tbio').value);"/>
                     <input name="bt_bio" type="button" value="Cancel" id="bt_bio_cancel"/>
                  </form>
               </div>
            </div>
         </div>
         <!--<div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>-->
      </div>
   </div>
</div>

<script>
function submit_price() {
   var form = document.fprice;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_price.php',
       data: dataString,
       success: function(data){
		jQuery('#dprice').show();
        jQuery('#result_price').html(data);
   		jQuery('#dt_price').hide();
		
   
   
       }
   });
   return false;
   }
   //=============================================
   function submit_price2() {
   var form = document.fprice2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/input_price.php',
       data: dataString,
       success: function(data){
		jQuery('#dprice').show();
        jQuery('#result_price').html(data);
   		jQuery('#dt_price2').hide();
		
   
   
       }
   });
   return false;
   }
</script>