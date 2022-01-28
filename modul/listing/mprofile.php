<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
$select_stmt=$db->prepare("SELECT
member.kd_member,
member.first_name,
member.last_name,
countries.`name` AS nm_negara,
states.`name` AS nm_state,
cities.`name` AS nm_city,
member.photo,
member.aktif,
member.phone_number,
user_.username
FROM
countries
JOIN member
ON countries.id = member.country 
JOIN states
ON states.id = member.state 
JOIN cities
ON cities.id = member.city 
JOIN user_
ON user_.kd_user = member.kd_member
WHERE member.kd_member='$_GET[kd_mem]'
"); //sql select query
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

                           ?>
<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   #apDiv1 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 100;
	margin-left:10px;
	margin-top:-210px;
}
.posisi_top{
	margin-top:120px;
	}
}

@media only screen 
   and (max-width : 1200px) {
   #apDiv1 {
	position: absolute;
	width: 110px;
	height: 110px;
	z-index: 100;
	margin-left:10px;
	margin-top:-120px;
}
.posisi_top{
	margin-top:0px;
	}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>


      
<div class="edgtf-container posisi_top" style="padding-top:70px;">
                     <div class="edgtf-container-inner clearfix">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-477" class="post-477 product type-product status-publish has-post-thumbnail product_cat-food product_tag-breakfast product_tag-healthy first instock sale shipping-taxable purchasable product-type-simple">
                           <div class="edgtf-single-product-content">
                              <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                                 <figure class="woocommerce-product-gallery__wrapper">
                                    <div data-thumb="foto/user/<?php echo $row['photo']; ?>" class="woocommerce-product-gallery__image">
                                    <a href="#">
                                   <img width="800" height="900" src="foto/user/<?php echo $row['photo']; ?>" class="wp-post-image" alt="a" loading="lazy" title="shop-img-1" style="border-radius:20px;">
                                   </a>
                                    
                                    <!--<div id="apDiv1"><img src="foto/user/yoi1.png" width="200" height="200"></div>-->
                                   </div>
                                    <!--<span class="edgtf-onsale">Sale</span>-->
                                 </figure>
                              </div>
                              <div class="edgtf-single-product-summary">
                                 <div class="summary entry-summary">
                                    <h2 itemprop="name" class="edgtf-single-product-title"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
                                    <div class="woocommerce-product-rating">
                                       <!--<div class="star-rating"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>-->
                                       <a href="#" class="woocommerce-review-link" rel="nofollow">(Member)</a> 
                                    </div>
                                    <!--<p class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>5</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>4</span></ins></p>-->
                                    <h4>Bio</h4>
                                    <div class="woocommerce-product-details__short-description" style="margin-top:-25px;">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod dolor temporeum dicant partem scripserit, doctus appetere interpretaris mea noId vix deseruisse repudiandae, sea accusam percipit te. Vim praesent maiestati. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</p>
                                    </div>
                                    
                                    <h4>Contact</h4>
                                    <div class="product_meta" style="margin-top:-25px;" >
                                       <span class="sku_wrapper">
									   <?php echo $row['nm_negara'].','.$row['nm_state'].','.$row['nm_city']; ?></span>
                                       <span class="posted_in">
									   <?php echo $row['username'].', <a href="tel:081330798168">'.$row['phone_number'].'</a>'; ?></span>
                                       <!--<span class="tagged_as">Tags: <a href="product-tag/breakfast/index.html" rel="tag">Breakfast</a>, <a href="product-tag/healthy/index.html" rel="tag">Healthy</a></span>-->
                                    </div>
                                    <div class="edgtf-woo-social-share-holder">
                                       <div class="edgtf-social-share-holder edgtf-list">
                                          <!--<p class="edgtf-social-title">Share:</p>-->
                                          <ul>
                                             <li class="edgtf-facebook-share">
                                                <a itemprop="url" class="edgtf-share-link" href="#" >
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
                                          </ul>
                                       </div>
                                    </div>
                                    
                                      <!-- <div class="edgtf-quantity-buttons quantity">
                                          <label class="screen-reader-text" for="quantity_610aa0ee87cc8">Quantity</label>-->
                                          <!--<span class="edgtf-quantity-minus icon_minus-06"></span>-->
                                          <!--<input type="text" id="quantity_610aa0ee87cc8" class="input-text qty text edgtf-quantity-input" data-step="1" data-min="1" data-max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Italian Salad quantity" />-->
                                          <!--<span class="edgtf-quantity-plus icon_plus"></span>-->
                                          
                                         
                                         
                                         
                                       <!--</div>-->
                                       <br>
                                       <div style="margin-top:15px; margin-left:15px;">
                                       <a href="index.php" >
                                         <span class="btn" style="background-color:#FFE45F; border:none; margin-left:-15px;">Search Instructor</span>
</a>
</div>
                                   
                                 </div>
                              </div>
                           </div>
                           <!--<div class="woocommerce-tabs wc-tabs-wrapper">
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
                                    
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>-->
                           
                        </div>
                     </div>
                  </div>