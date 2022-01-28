<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
$select_stmt=$db->prepare("SELECT
user_.username AS email,
instructor.*,
countries.`name` AS negara,
states.`name` AS propinsi,
cities.`name` AS kota
FROM
instructor
JOIN user_
ON instructor.kd_instructor = user_.kd_user 
JOIN countries
ON countries.id = instructor.country 
JOIN states
ON states.id = instructor.state 
JOIN cities
ON cities.id = instructor.city
WHERE instructor.kd_instructor='$_GET[kd_inst]'
GROUP BY instructor.kd_instructor"); //sql select query
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

                           ?>

<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   #apDiv1 {
   position: relative;
   width: 200px;
   height: 200px;
   z-index: 100;
   margin-left:10px;
   margin-top:-200px;
}
.fotox{margin-top: 70px;}
#apDiv2 {
	position: absolute;
	width: 100%;
	height: 80pxpx;
	z-index: 101;
	visibility:hidden
}
}

@media only screen 
   and (max-width : 1200px) {
   #apDiv1 {
   position: relative;
   width: 110px;
   height: 110px;
   z-index: 100;
   margin-left:10px;
   margin-top:-120px;
   padding-bottom: 100px;
}
.fotox{margin-top: 30px;}
#apDiv2 {
	position: fixed;
	width: 98%;
	right: 25px;
	bottom: 25px;
	margin: 0;
	z-index: 20010;
	opacity: 1;
	visibility: visible;
}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
/*#apDiv2 {
	position: absolute;
	width: 378px;
	height: 115px;
	z-index: 101;
	visibility:hidden
}*/
</style>
<!-- <div class="edgtf-container"> -->

   <?php
   //
   include ('element/listing_detail_gallery.php');
   
   

 include "modul/listing/qrcode/qrlib.php"; 
  $tempdir = "modul/listing/temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

    //ambil logo
    $logopath="images/logoyo.png";

 //isi qrcode jika di scan
 $codeContents = "https://yoinstructor.com/?com=bprofile&kd_inst=".$row['kd_instructor']; 

 //simpan file qrcode
 QRcode::png($codeContents, $tempdir.'qrwithlogo.png', QR_ECLEVEL_H, 10,4);


 // ambil file qrcode
 $QR = imagecreatefrompng($tempdir.'qrwithlogo.png');

 // memulai menggambar logo dalam file qrcode
 $logo = imagecreatefromstring(file_get_contents($logopath));
 
 imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
 imagealphablending($logo , false);
 imagesavealpha($logo , true);

 $QR_width = imagesx($QR);
 $QR_height = imagesy($QR);

 $logo_width = imagesx($logo);
 $logo_height = imagesy($logo);

 // Scale logo to fit in the QR Code
 $logo_qr_width = $QR_width/8;
 $scale = $logo_width/$logo_qr_width;
 $logo_qr_height = $logo_height/$scale;

 imagecopyresampled($QR, $logo, $QR_width/2.3, $QR_height/2.3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

 // Simpan kode QR lagi, dengan logo di atasnya
 //imagepng($QR,$tempdir.'qrwithlogo.png');
 imagepng($QR,$tempdir.$row['kd_instructor'].'.png');
 
 

  //menampilkan file qrcode 
 //echo '<div align="center"><h2>Create QR Code With Logo PHP</h2>';
 //echo '<img src="'.$tempdir.'qrwithlogo.png'.'" width="297" height="118" align="middle"/>';
 //echo '<br><a href="https://www.maribelajarcoding.com">maribelajarcoding.com</a><div>';
 ?>
 
			
            

                     <div class="edgtf-container-inner clearfix fotox" >
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-477" class="post-477 product type-product status-publish has-post-thumbnail product_cat-food product_tag-breakfast product_tag-healthy first instock sale shipping-taxable purchasable product-type-simple">
                           <div class="edgtf-single-product-content">
                              <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                                <figure class="woocommerce-product-gallery__wrapper">
                                    <div  class="woocommerce-product-gallery__image">
                                    
                                    
                                    
                                    
                                    <a href="#">
                                   <img width="100%"  src="foto/user/<?php echo $row['photo']; ?>" class="wp-post-image" alt="a" loading="lazy" title="shop-img-1" style="border-radius:20px;"></a>
                                    <div id="apDiv1">
                                    <?php
									echo '<img src="'.$tempdir.$row['kd_instructor'].'.png'.'" width="200" height="200" align="middle"/>';
									?>
                                    <!--<img src="images/yoi1.png" width="200" height="200">--></div>
                                   </div>
                                    <!--<span class="edgtf-onsale">Sale</span>-->
                                 </figure>
                                 <h5 style="margin-top:80px;">Experience:</h5>
                                 
                                       
                                       <p style="margin-top:-20px;">
                                       
                                       <div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
                                       </p>
                                       
                                       
                                       
                                       <h5>Certificate:</h5>
                                       <p style="margin-top:-20px;">
                                       Senior
                                       </p>
                                       
                                        <h5>Schedule:</h5>
                                       <!--<p style="margin-top:-20px;">-->
                                       <table width="100%" border="0" style="border-collapse: collapse; border: none;margin-top:-20px;">
  <tr style="border: none;">
    <td width="50%" align="left" style="border: none; text-align:left;">Monday: </td>
    <td width="50%" style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Tuesday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Wednesday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Thursday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Friday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Saturday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Sunday:</td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
</table>
                                       
                              </div>
                              <div class="edgtf-single-product-summary">
                                 <div class="summary entry-summary">
                                    <h2 itemprop="name" class="edgtf-single-product-title"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
                                    
                                    <div class="woocommerce-product-rating">
                                       <div class="star-rating"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                       <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a> 
                                    </div>
                                    <p class="price">
                                    
                                    <!--<del>
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">&#36;
                                    </span>5
                                    </span>
                                    </del> -->
                                    
                                    <ins>
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">&#36;
                                    </span>4
                                    </span>
                                    </ins> 
                                    </p><span class="rating"> Per Hour</span><br>
                                    
                                    <a itemprop="url" href="?com=booking" target="_self" class="edgtf-btn edgtf-btn-small edgtf-btn-solid" style="margin-top:20px;">
<span class="edgtf-btn-text">Book Now</span>
</a>
                                    
                                    <div class="woocommerce-product-details__short-description">
                                       <h5>Quotes:</h5>
                                       <p style="margin-top:-20px;">Mensana in corporesano</p>
                                       
                                       <h5>Overview:</h5>
                                       <p style="margin-top:-20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod dolor temporeum dicant partem scripserit, doctus appetere interpretaris mea noId vix deseruisse repudiandae, sea accusam percipit te. Vim praesent maiestati. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</p>
                                       
                                       <h5>Contact:</h5>
                                       <p style="margin-top:-20px;">
                                       <span style="border: none; text-align:left;"><?php echo $row['street_name']; ?> <?php echo $row['street_number']; ?></span> 
                                       <span style="border: none; text-align:left;"><?php echo $row['kota']; ?></span> 
                                       <span style="border: none; text-align:left;"><?php echo $row['propinsi']; ?></span> 
                                       <span style="border: none; text-align:left;"><?php echo $row['zip_code']; ?> <?php echo $row['negara']; ?></span>
                                       </p>
                                        <span style="border: none; text-align:left;">Phone :<strong><?php echo $row['phone_number']; ?></strong></span><br />
                                         
                                       <span style="border: none; text-align:left;">Email : <strong><?php echo $row['email']; ?></strong></span></p>
                                       
                                      <!-- <h5>Schedule:</h5>
                                       
                                       <table width="100%" border="0" style="border-collapse: collapse; border: none;margin-top:-20px;">
  <tr style="border: none;">
    <td width="50%" align="left" style="border: none; text-align:left;">Monday: </td>
    <td width="50%" style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Tuesday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Wednesday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Thursday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Friday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Saturday: </td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align:left;">Sunday:</td>
    <td style="border: none; text-align:left;">&nbsp;</td>
  </tr>
</table>-->
                                       
                                       
                                      
                                       
                                       <h5>Class Category:</h5>
                                       
                                       <p style="margin-top:-20px;">
                                       
                                       <div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
</p>

<h5>Class Sub Category:</h5>
                                       
                                       <p style="margin-top:-20px;">
                                       
                                       <div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
<div class="edgtf-icon-list-holder ">
<div class="edgtf-il-icon-holder">
<i class="edgtf-icon-font-awesome fa fa-angle-right " style="color: #fc475f;font-size: 12px"></i> </div>
<p class="edgtf-il-text">Mea omnium explicari sit vidit harum</p>
</div>
</p>

<!--<h5>Level:</h5>
                                       <p style="margin-top:-20px;">Senior</p>
-->

                                       
                                    </div>
                                    <div class="product_meta">
                                       <!--<span class="sku_wrapper">SKU: <span class="sku">01</span></span>
                                       <span class="posted_in">Category: <a href="product-category/food/index.html" rel="tag">Food</a></span>
                                       --><span class="tagged_as">Tags: 
                                       <a href="#" rel="tag">Breakfast</a>, 			
                                       <a href="#" rel="tag">Healthy</a>
                                       <a href="#" rel="tag">Yoga</a>
                                       <a href="#" rel="tag">Personal Trainer</a>
                                       </span>
                                    </div>
                                    <div class="edgtf-woo-social-share-holder">
                                       <div class="edgtf-social-share-holder edgtf-list">
                                          <!--<p class="edgtf-social-title">Share:</p>-->
                                          <h5>Social Media</h5>
                                          <ul>
                                             <li class="edgtf-facebook-share">
                                                <a itemprop="url" class="edgtf-share-link" href="#">
                                                <span class="edgtf-social-network-icon social_facebook"></span>
                                                </a>
                                             </li>
                                             <li class="edgtf-twitter-share">
                                                <a itemprop="url" class="edgtf-share-link" href="#" >
                                                <span class="edgtf-social-network-icon social_twitter"></span>
                                                </a>
                                             </li>
                                             <li class="edgtf-tumblr-share">
                                                <a itemprop="url" class="edgtf-share-link" href="#" >
                                                <span class="edgtf-social-network-icon social_instagram"></span>
                                                </a>
                                             </li>
                                             <li class="edgtf-tumblr-share">
                                                <a itemprop="url" class="edgtf-share-link" href="#" >
                                                <span class="edgtf-social-network-icon social_youtube"></span>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    
                                   
                                   <!--<a itemprop="url" href="?com=booking" target="_self" class="edgtf-btn edgtf-btn-small edgtf-btn-solid" style="margin-top:20px;">
<span class="edgtf-btn-text">Book Now</span>
</a>-->

                                 </div>
                              </div>
                           </div>
                           
                            
                            
                           <div class="woocommerce-tabs wc-tabs-wrapper">
                              <ul class="tabs wc-tabs" role="tablist">
                                 <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description">Description</a>
                                 </li>
                                 <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                    <a href="#tab-additional_information">Additional information</a>
                                 </li>
                                 <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews">Reviews (1)</a>
                                 </li>
                              </ul>
                              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                 <h2>Description</h2>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporeum dicant partem scripserit, doctus appetere interpretaris mea noId vix deseruisse repudiandae, sea accusam percipit te. Vim praesent maiestati. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                              </div>
                              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                                 <h2>Additional information</h2>
                                 <table class="shop_attributes">
                                    <tr>
                                       <th>Weight</th>
                                       <td class="product_weight">0.3 kg</td>
                                    </tr>
                                    <tr>
                                       <th>Dimensions</th>
                                       <td class="product_dimensions">20 &times; 20 &times; 5 cm</td>
                                    </tr>
                                 </table>
                              </div>
                              
                             
                              
                              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                 <div id="reviews" class="woocommerce-Reviews">
                                    <div id="comments">
                                       <h2 class="woocommerce-Reviews-title">1 review for <span>Italian Salad</span></h2>
                                       <ol class="commentlist">
                                          <li class="review even thread-even depth-1" id="li-comment-40">
                                             <div id="comment-40" class="comment_container">
                                                <img src="https://secure.gravatar.com/avatar/b1ac19a348c000029ef529ecd5a0facb?s=60&amp;d=mm&amp;r=g" width="60" height="60" alt="Avatar" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default" />
                                                <div class="comment-text">
                                                   <div class="star-rating"><span style="width:80%">Rated <strong class="rating">4</strong> out of 5</span></div>
                                                   <p class="meta">
                                                      <strong class="woocommerce-review__author">Anne </strong>
                                                      <span class="woocommerce-review__dash">&ndash;</span> <time class="woocommerce-review__published-date" datetime="2018-08-09T07:53:48+00:00">August 9, 2018</time>
                                                   </p>
                                                   <div class="description">
                                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ol>
                                       
                                    </div>
                                    
                                    
                                   <!--<div id="review_form_wrapper">
                                       <div id="review_form">
                                          <div id="respond" class="comment-respond">
                                             <span id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></span>
                                             <form action="https://urbango.qodeinteractive.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                <div class="comment-form-rating">
                                                   <label for="rating">Your rating</label>
                                                   <select name="rating" id="rating" required>
                                                      <option value="">Rate&hellip;</option>
                                                      <option value="5">Perfect</option>
                                                      <option value="4">Good</option>
                                                      <option value="3">Average</option>
                                                      <option value="2">Not that bad</option>
                                                      <option value="1">Very poor</option>
                                                   </select>
                                                </div>
                                                <p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>
                                                <p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" required /></p>
                                                <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required /></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='477' id='comment_post_ID' />
                                                   <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>
                                                <div class="wantispam-required-fields">
                                                   <input type="hidden" name="wantispam_t" class="wantispam-control wantispam-control-t" value="1628086510" />
                                                   <div class="wantispam-group wantispam-group-q" style="clear: both;">
                                                      <label>Current <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="b4cdd1f4c6">[email&#160;protected]</a> <span class="required">*</span></label>
                                                      <input type="hidden" name="wantispam_a" class="wantispam-control wantispam-control-a" value="2021" />
                                                      <input type="text" name="wantispam_q" class="wantispam-control wantispam-control-q" value="7.2.0" autocomplete="off" />
                                                   </div>
                                                   <div class="wantispam-group wantispam-group-e" style="display: none;">
                                                      <label>Leave this field empty</label>
                                                      <input type="text" name="wantispam_e_email_url_website" class="wantispam-control wantispam-control-e" value="" autocomplete="off" />
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>-->
                                    
                                    
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  <!-- </div> -->
                  <div id="apDiv2">zxzxzxzxz</div>