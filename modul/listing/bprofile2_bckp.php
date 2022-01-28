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
   width: 170px;
   height: 170px;
   z-index: 100;
   margin-left:150px;
   margin-top:-180px;
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
   margin-left:20px;
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
   // include ('element/listing_detail_gallery.php');
   
   
   
   
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
<div class="edgtf-row-grid-section-wrapper " style="margin-top:173px;">
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
                 <!-- <div class="vc_empty_space" style="height: 7px"><span class="vc_empty_space_inner"></span></div>-->
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <figure class="woocommerce-product-gallery__wrapper">
                                       <div  class="woocommerce-product-gallery__image">
                                          <a href="#">
                                          <img width="100%"  src="foto/user/<?php echo $row['photo']; ?>" class="wp-post-image" alt="a" loading="lazy" title="shop-img-1" style="border-radius:20px;"></a>
                                          <div id="apDiv1">
                                             <?php
                                                echo '<img src="'.$tempdir.$row['kd_instructor'].'.png'.'" width="200" height="200" align="middle"/>';
                                                ?>
                                             <!--<img src="images/yoi1.png" width="200" height="200">-->
                                          </div>
                                       </div>
                                       <!--<span class="edgtf-onsale">Sale</span>-->
                                    </figure>
                                 </div>
                              </div>
                              <div class="vc_empty_space" style="height: 42px">
                              <span class="vc_empty_space_inner"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-8 vc_col-sm-offset-0 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                           
                              <!--<div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1528880573569">-->
                                    
                                    
                                       <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                          <!--<div class="vc_column-inner">-->
                                             <!--<div class="wpb_wrapper">-->
                                                <!--<div class="vc_row wpb_row vc_inner vc_row-fluid">-->
                                                   <!--<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">-->
                                                      <!--<div class="vc_column-inner vc_custom_1534499745469">
                                                         <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">-->
                                                               <!--<div class="wpb_wrapper">-->
                                                                  <h2 itemprop="name" class="edgtf-single-product-title" style="margin-top:0px;"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
                                                                  <div class="woocommerce-product-rating" style="margin-top:-20px;">
                                                                     <div class="star-rating">
                                                                     <span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on 
                                                                     <span class="rating">1</span> customer rating</span>
                                                                     </div>
                                                                     <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a> 
                                                                  </div>
                                                               <!--</div>-->
                                                            <!--</div>
                                                         </div>
                                                      </div>-->
                                                   <!--</div>-->
                                                <!--</div>-->
                                                <!--<div class="vc_empty_space" style="height: 29px">
                                                <span class="vc_empty_space_inner"></span>
                                                </div>-->
                                            <!-- </div>-->
                                         <!-- </div>-->
                                       </div>
                                       
                                       
                                       <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                       <center>
                                          <div class="vc_column-inner">
                                             <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                      <!--<div class="vc_column-inner vc_custom_1534499760269">
                                                         <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">-->
                                                               <div class="wpb_wrapper">
                                                                  <div class="edgtf-ls-tra-section edgtf-ls-tra-section-two">
                                          <div class="edgtf-wishlist-holder">
                                          
                                             <a class="edgtf-wishlist-link " href="#" data-id="967">
                                             <span class="edgtf-wishlist-title" data-title="Add to wishlist" data-added-title="Added into wishlist">Add to wishlist</span>
                                             <i class="edgtf-icon-font-awesome far fa-heart "></i> 
                                             </a>
                                             
                                             <div class="edgtf-wishlist-response"></div>
                                          </div>
                                          <div class="edgtf-ls-social-share">
                                             <div class="edgtf-social-share-holder edgtf-dropdown">
                                                <a class="edgtf-social-share-dropdown-opener" href="javascript:void(0)">
                                                <span class="edgtf-social-share-title">Share this</span>
                                                <i class="fas fa-share-alt"></i>
                                                </a>
                                                <div class="edgtf-social-share-dropdown">
                                                   <ul>
                                                      <li class="edgtf-facebook-share">
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=https%3A%2F%2Furbango.qodeinteractive.com%2Flisting-item%2Fart-exile%2F', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                                                         <span class="edgtf-social-network-icon social_facebook"></span>
                                                         </a>
                                                      </li>
                                                      <li class="edgtf-twitter-share">
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('http://twitter.com/home?status=Venenatis+fauci+nulla+quis+ante.+Etiam+sit+amet+orci+eget+eros.+Maecenas+nec+odio+et+ante+tincidunt+tempus+vitaae+https://urbango.qodeinteractive.com/listing-item/art-exile/', 'popupwindow', 'scrollbars=yes,width=800,height=400');">
                                                         <span class="edgtf-social-network-icon social_twitter"></span>
                                                         </a>
                                                      </li>
                                                      <li class="edgtf-tumblr-share">
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=https%3A%2F%2Furbango.qodeinteractive.com%2Flisting-item%2Fart-exile%2F&amp;name=Art+Exile&amp;description=Venenatis+fauci+nulla+quis+ante.+Etiam+sit+amet+orci+eget+eros.+Maecenas+nec+odio+et+ante+tincidunt+tempus+vitaae+sapien+ut+libero%3F+Nam+quam+nunc%2C+blandit+vel%2C+luctus+pulvinar%2C+hendrerit+id%2C+lorem.', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                                         <span class="edgtf-social-network-icon social_tumblr"></span>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                <!--</div>
                                             </div>
                                          </div>-->
                                       </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 29px"><span class="vc_empty_space_inner"></span></div>
                                             </div>
                                          </div>
                                          </center>
                                       </div>
                                       
                                       
                                       <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                          <div class="vc_column-inner">
                                             <!--<div class="wpb_wrapper">-->
                                                <!--<div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                   <div class="wpb_column vc_column_container vc_col-sm-12">
                                                      <div class="vc_column-inner vc_custom_1528880492646">-->
                                                         <!--<div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">-->
                                                            <!--<h4>$ 4</h4>-->
                                                            
                                                               <!--<div class="wpb_wrapper">-->
                                                                 <!-- <p class="price">-->
                                                                     <!--<del>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">&#36;
                                                                        </span>5
                                                                        </span>
                                                                        </del> -->
                                                                     <!--<ins>
                                                                     <span class="woocommerce-Price-amount amount">-->
                                                                     <!--<span class="woocommerce-Price-currencySymbol">&#36;
                                                                     </span>-->
                                                                     <h2 style="margin-top:0px;">$ 4</h2>
                                                                     <!--</span>
                                                                     </ins> -->
                                                                 <!-- </p>-->
                                                                 <div style="margin-top:-20px;">
                                                                  <span style="margin-top: -20px;"> Per Hour</span>
                                                                  </div>
                                                                  <br>
                                                                  <a itemprop="url" href="?com=booking" target="_self" class="edgtf-btn edgtf-btn-small edgtf-btn-solid" style="margin-top:-20px;">
                                                                  <span class="edgtf-btn-text">Book Now</span>
                                                                  </a>
                                                               </div>
                                                            <!--</div>-->
                                                         <!--</div>
                                                      </div>-->
                                                   </div>
                                                </div>
                                                <!--<div class="vc_empty_space" style="height: 29px">
                                                <span class="vc_empty_space_inner"></span>
                                                </div>-->
                                             <!--</div>
                                          </div>
                                       </div>-->
                                       
                                       
                                    <!--</div>
                                 </div>
                              </div>-->
                              
                              
                              <!--<div class="vc_empty_space" style="height: 42px">
                              <span class="vc_empty_space_inner"></span>
                              </div>-->
                              
                           <!--</div>-->
                        </div>
                     </div>
                     <!--==========================================================================-->
                     
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-7 vc_col-md-offset-0 vc_col-md-7 vc_col-sm-offset-0 vc_col-xs-12" style="margin-top:55px;">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                 <h5>Bio</h5>
                                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Etiam eros faucibus tincidunt et.</p>
                                 </div>
                              </div>
                              <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="vc_empty_space" style="height: 42px">
                              <span class="vc_empty_space_inner"></span>
                              </div>
                              <!--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Etiam eros faucibus tincidunt et.</p>-->
                                 </div>
                              </div>
                              <div class="vc_empty_space" style="height: 42px">
                              <span class="vc_empty_space_inner"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--==========================================================================-->
                     
<div class="vc_row wpb_row vc_inner vc_row-fluid">
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
               
                  <div class="edgtf-ls-amenities-items">
                     <div class="edgtf-ls-amenities-items" style="column-count:2; padding-left:15px;">
                        <?php
                           $select_stmt_cat=$db->prepare("SELECT * FROM type_class WHERE kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
                           $select_stmt_cat->execute();
                           while($row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                        <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#FFDE39;"></i>
                           <span class="edgtf-ls-amenity-label"><?php echo $row_cat['type']; ?></span>
                           </a>
                        </div>
                        <?php } ?>
                        <!--<div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                           <span class="edgtf-ls-amenity-label">Group Visits</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                           <span class="edgtf-ls-amenity-label">Pet Friendly</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                           <span class="edgtf-ls-amenity-label">Science Museum</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                           <span class="edgtf-ls-amenity-label">Wheelchair Accessibility</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                           <span class="edgtf-ls-amenity-label">Wi-Fi</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-excluded-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-square"></i>
                           <span class="edgtf-ls-amenity-label">Free Parking</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-excluded-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-square"></i>
                           <span class="edgtf-ls-amenity-label">Guided Tours</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-excluded-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-square"></i>
                           <span class="edgtf-ls-amenity-label">Reservations</span>
                           </a>
                           </div>
                           <div class="edgtf-ls-combined-item">
                           <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-excluded-item" href="#">
                           <i class="edgtf-ls-combined-icon far fa-square"></i>
                           <span class="edgtf-ls-amenity-label">Retail and Dining</span>
                           </a>
                           </div>-->
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="vc_empty_space" style="height: 42px">
            <span class="vc_empty_space_inner"></span>
            </div-->
            
            <br><br>
            <div class="widget edgtf-blog-list-widget" style="padding-left:15px;">
   <h5 class="edgtf-widget-title">Certification</h5>
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
                        <a itemprop="url" href="https://urbango.qodeinteractive.com/warm-places/" title="Warm Places">
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

<?php
										
									$select_stmt_sch=$db->prepare("SELECT * FROM instructor_schedule WHERE  kd_instructor='$row[kd_instructor]' AND aktif='1'");	//sql select query
									$select_stmt_sch->execute();
									$row_sch=$select_stmt_sch->fetch(PDO::FETCH_ASSOC);
									?>
<h5 style="padding-left:15px;">Schedule:</h5>
            <!--<p style="margin-top:-20px;">-->
            <div style="padding-left:15px;">
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
            
            <h5 style="padding-left:15px;">Contact:</h5>
                  <p style="margin-top:-20px; padding-left:15px;">
                     <!--<span style="border: none; text-align:left;"><?php //echo $row['street_name']; ?> <?php //echo $row['street_number']; ?></span> -->
                     <span><?php echo $row['propinsi']; ?></span> 
                     <span><?php echo $row['kota']; ?></span> 
                     
                     <span><?php //echo $row['zip_code']; ?> <?php echo $row['negara']; ?></span><br>
                  
                  <span><?php echo $row['phone_number']; ?></span><br />
                  <span><?php echo $row['email']; ?></span>
                  </p>
                  
                  
                  <div class="edgtf-woo-social-share-holder" style="padding-left:15px;">
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
                  
         </div>
      </div>
   </div>
   
   
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-8 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper" style="padding-left:15px;">
                  <?php include ('modul/front/slider_gallery.php');?>
                  <!--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Etiam eros faucibus tincidunt et.</p>-->
                  
                  
                  
                  
                  
                  <!--=================================================================-->
                  <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                  <?php
				  //
				  include ('modul/front/list_gallery.php');
				  ?>
                  
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
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
               </div>
            </div>
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
   <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0 vc_col-xs-12">
      <div class="vc_column-inner">
         <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
               <div class="wpb_wrapper">
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
            <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
         </div>
      </div>
   </div>
</div>
                  <!--=================================================================-->
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
</div>
<?php
//
include ('modul/front/desc_review.php');
?>
<!-- </div> -->
<div id="apDiv2">zxzxzxzxz</div>