<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
$select_stmt=$db->prepare("SELECT
category_sub.id_category,
category.nm_category,
category_sub.id_,
category_sub.nm_sub_category,
type_class.kd_instructor,
instructor.first_name,
instructor.last_name,
instructor.kd_instructor AS kd_instructor_0,
instructor.country,
instructor.state,
instructor.city,
instructor.street_name,
instructor.street_number,
instructor.zip_code,
instructor.phone_number,
instructor.photo,
instructor.who_train,
instructor.aktif,
instructor.tgl_in
FROM
category_sub
JOIN category
ON category_sub.id_category = category.id_ 
JOIN type_class
ON type_class.type = category.nm_category 
JOIN instructor
ON instructor.kd_instructor = type_class.kd_instructor
WHERE instructor.kd_instructor='$_GET[kd_inst]'
GROUP BY instructor.kd_instructor"); //sql select query
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

                           ?>
<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   #foto {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 100;
	margin-left:10px;
	margin-top:-210px;
}
}

@media only screen 
   and (max-width : 1200px) {
   #foto {
	position: absolute;
	width: 110px;
	height: 110px;
	z-index: 100;
	margin-left:10px;
	margin-top:-120px;
}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>

<div style="margin-top: 137px;">
<div class="edgtf-content">
               <div class="edgtf-content-inner">
                  <div class="edgtf-full-width">
                     <div class="edgtf-full-width-inner">
                        <div class="edgtf-listing-single-holder ">
                           <?php
						   //
						   include ('element/listing_detail_gallery.php');
                     //include ('modul/listing/bprofile2.php');
						   ?>

                   
                           <div class="edgtf-ls-title-area-wrapper edgtf-ls-title-has-logo">
                              <div class="edgtf-grid">
                                 <div class="edgtf-ls-title-area">
                                    <div class="edgtf-ls-title-left-area">
                                       <div class="edgtf-ls-logo">
<img width="80"  src="foto/user/<?php echo $row['photo']; ?>" class="attachment-thumbnail size-thumbnail" alt="a" loading="lazy"> </div>
                                       <div class="edgtf-ls-title-content">
                                       <h2 itemprop="name" class="edgtf-ls-title entry-title"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h2>
                                          
                                          <a itemprop="url" href="?com=bprofile&kd_inst=<?php echo $row['kd_instructor']; ?>" target="_self" class="edgtf-btn edgtf-btn-large edgtf-btn-solid ">
<span class="edgtf-btn-text text-dark" style="color:#000;">Businnes Profile</span>
</a>

                                          <div class="edgtf-ls-title-info">
                                             <div class="edgtf-ls-listing-id">
                                                <span class="edgtf-ls-listing-id-label">ID:</span>
                                                <span class="edgtf-ls-listing-id-value"><?php echo $row['kd_instructor']; ?></span>
                                             </div>
                                             <div class="edgtf-ls-categories">
                                                <a itemprop="url" class="edgtf-ls-category edgtf-is-icon" href="#">
                                                   <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.629px" height="46.484px" viewBox="0 0 49.629 46.484" enable-background="new 0 0 49.629 46.484" xml:space="preserve">
                                                      <g>
                                                         <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.867,12.443c-7.66,0-14.617-2.416-14.617-2.416v18.342c0,9.275,7.66,16.865,14.617,16.865c6.956,0,14.615-7.59,14.615-16.865 V10.027C30.482,10.027,23.526,12.443,15.867,12.443z" />
                                                         <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M22.717,30.395c0,3.784-3.066,6.852-6.85,6.852c-3.785,0-6.852-3.067-6.852-6.852c0,0,3.066,1.367,6.852,1.367 C19.65,31.762,22.717,30.395,22.717,30.395z" />
                                                         <g>
                                                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M7.529,21.537c0.48-0.889,1.422-1.492,2.504-1.492c1.064,0,1.994,0.586,2.481,1.451" />
                                                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M19.219,21.537c0.48-0.889,1.422-1.492,2.504-1.492c1.064,0,1.994,0.586,2.482,1.451" />
                                                         </g>
                                                         <path stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M32.62,36.395 c0.376,0.072,0.853,0.061,1.144,0.061c6.957,0,14.615-7.589,14.615-16.865V1.25c0,0-6.955,2.416-14.615,2.416 S19.147,1.25,19.147,1.25v7.402" />
                                                         <path stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M33.764,26.693 c3.783,0,6.85,1.367,6.85,1.367c0-3.785-3.066-6.852-6.85-6.852" />
                                                         <g>
                                                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M37.115,11.266c0.481,0.89,1.422,1.494,2.505,1.494c1.063,0,1.993-0.586,2.481-1.452" />
                                                         </g>
                                                      </g>
                                                   </svg> -->
                                                   <span class="edgtf-ls-category-label">Culture</span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="edgtf-ls-title-right-area">
                                       <div class="edgtf-ls-tra-section edgtf-ls-tra-section-one">
                                          <div class="edgtf-reviews-list-info edgtf-reviews-average-count">
                                             <span class="edgtf-reviews-number">
                                             3 </span>
                                             <span class="edgtf-reviews-label">
                                             Reviews </span>
                                             <span class="edgtf-stars">
                                             <span class="edgtf-stars-wrapper-inner">
                                             <span class="edgtf-stars-items">
                                             <i class="fas fa-star" aria-hidden="true"></i>
                                             <i class="fas fa-star" aria-hidden="true"></i>
                                             <i class="fas fa-star" aria-hidden="true"></i>
                                             <i class="far fa-star" aria-hidden="true"></i>
                                             <i class="far fa-star" aria-hidden="true"></i>
                                             </span>
                                             </span>
                                             </span>
                                          </div>
                                          <div class="edgtf-ls-price-range">
                                             <span class="edgtf-ls-price-range-title">Prices</span>
                                             <span class="edgtf-ls-price-range-icons">
                                             <i class="edgtf-ls-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                             <i class="edgtf-ls-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                             <i class="edgtf-ls-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                             <i class="edgtf-ls-price-range-icon fas fa-dollar-sign "></i>
                                             <i class="edgtf-ls-price-range-icon fas fa-dollar-sign "></i>
                                             </span>
                                          </div>
                                       </div>
                                       <div class="edgtf-ls-tra-section edgtf-ls-tra-section-two">
                                          <div class="edgtf-wishlist-holder">
                                             <a class="edgtf-wishlist-link " href="#" data-id="967">
                                             <span class="edgtf-wishlist-title" data-title="Add to wishlist" data-added-title="Added into wishlist">Add to wishlist</span>
                                             <i class="edgtf-icon-font-awesome far fa-heart "></i> </a>
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
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open(&#039;http://www.facebook.com/sharer.php?u=https%3A%2F%2Furbango.qodeinteractive.com%2Flisting-item%2Fart-exile%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);">
                                                         <span class="edgtf-social-network-icon social_facebook"></span>
                                                         </a>
                                                      </li>
                                                      <li class="edgtf-twitter-share">
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open(&#039;http://twitter.com/home?status=Venenatis+fauci+nulla+quis+ante.+Etiam+sit+amet+orci+eget+eros.+Maecenas+nec+odio+et+ante+tincidunt+tempus+vitaae+https://urbango.qodeinteractive.com/listing-item/art-exile/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);">
                                                         <span class="edgtf-social-network-icon social_twitter"></span>
                                                         </a>
                                                      </li>
                                                      <li class="edgtf-tumblr-share">
                                                         <a itemprop="url" class="edgtf-share-link" href="#" onclick="popUp=window.open(&#039;http://www.tumblr.com/share/link?url=https%3A%2F%2Furbango.qodeinteractive.com%2Flisting-item%2Fart-exile%2F&amp;name=Art+Exile&amp;description=Venenatis+fauci+nulla+quis+ante.+Etiam+sit+amet+orci+eget+eros.+Maecenas+nec+odio+et+ante+tincidunt+tempus+vitaae+sapien+ut+libero%3F+Nam+quam+nunc%2C+blandit+vel%2C+luctus+pulvinar%2C+hendrerit+id%2C+lorem.&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;">
                                                         <span class="edgtf-social-network-icon social_tumblr"></span>
                                                         </a>
                                                      </li>
                                                   </ul>
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
                           //   include ('element/bprofile2.php');
                           ?>
                           
                           
                           <div class="edgtf-grid edgtf-ls-content-area">
                              <div class="edgtf-grid-row edgtf-grid-large-gutter">
                                 <div class="edgtf-grid-col-8">
                                    <div class="edgtf-ls-content">
                                       <div class="vc_row wpb_row vc_row-fluid">
                                          <div class="wpb_column vc_column_container vc_col-sm-12">
                                             <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                   <div class="wpb_text_column wpb_content_element ">
                                                      <div class="wpb_wrapper">
                                                         <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc vel blandit luctus pulvinar hendreri id lorem odio.</p>
                                                      </div>
                                                   </div>
                                                   <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="wpb_text_column wpb_content_element ">
                                                      <div class="wpb_wrapper">
                                                         <blockquote>
                                                            <p>
                                                               Maecenas tempus, tellus eget rhoncus sem semper libero.
                                                            </p>
                                                         </blockquote>
                                                      </div>
                                                   </div>
                                                   <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="wpb_text_column wpb_content_element ">
                                                      <div class="wpb_wrapper">
                                                         <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut imperdiet venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="edgtf-ls-amenities">
                                       <h5 class="edgtf-ls-parts-title ">Amenities</h5>
                                       <div class="edgtf-ls-amenities-items">
                                          <div class="edgtf-ls-combined-item">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                             <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                                             <span class="edgtf-ls-amenity-label">Card Payment</span>
                                             </a>
                                          </div>
                                          <div class="edgtf-ls-combined-item">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                             <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                                             <span class="edgtf-ls-amenity-label">Family Friendly</span>
                                             </a>
                                          </div>
                                          <div class="edgtf-ls-combined-item">
                                             <a itemprop="url" class="edgtf-ls-amenity edgtf-ls-included-item" href="#">
                                             <i class="edgtf-ls-combined-icon far fa-check-square"></i>
                                             <span class="edgtf-ls-amenity-label">Free Admission</span>
                                             </a>
                                          </div>
                                          <div class="edgtf-ls-combined-item">
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
                                          </div>
                                       </div>
                                    </div>
                                    <div class="edgtf-ls-tags">
                                       <h5 class="edgtf-ls-parts-title ">Tags</h5>
                                       <div class="edgtf-ls-tags-items">
                                          <a itemprop="url" class="edgtf-ls-tag edgtf-without-icon" href="#">
                                          <span class="edgtf-ls-tag-label">Exhibitions</span>
                                          </a>
                                          <a itemprop="url" class="edgtf-ls-tag edgtf-without-icon" href="#">
                                          <span class="edgtf-ls-tag-label">Gallery</span>
                                          </a>
                                          <a itemprop="url" class="edgtf-ls-tag edgtf-without-icon" href="#">
                                          <span class="edgtf-ls-tag-label">Paintings</span>
                                          </a>
                                          <a itemprop="url" class="edgtf-ls-tag edgtf-without-icon" href="#">
                                          <span class="edgtf-ls-tag-label">Sculptures</span>
                                          </a>
                                          <a itemprop="url" class="edgtf-ls-tag edgtf-without-icon" href="#">
                                          <span class="edgtf-ls-tag-label">Tours</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="edgtf-reviews-list-info edgtf-reviews-per-criteria">
                                       <div class="edgtf-item-reviews-display-wrapper clearfix">
                                          <div class="edgtf-item-reviews-average-wrapper">
                                             <div class="edgtf-item-reviews-average-rating">
                                                5.5 
                                             </div>
                                             <div class="edgtf-item-reviews-verbal-description">
                                                <span class="edgtf-item-reviews-rating-description">
                                                Good </span>
                                                <span class="edgtf-item-reviews-ratings-count">
                                                   <div class="edgtf-reviews-list-info edgtf-reviews-count">
                                                      <p class="edgtf-reviews-summary">
                                                         <span class="edgtf-reviews-number">
                                                         3 </span>
                                                         <span class="edgtf-reviews-label">
                                                         Reviews </span>
                                                      </p>
                                                   </div>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="edgtf-rating-percentage-wrapper">
                                             <div class="edgtf-progress-bar  ">
                                                <h6 class="edgtf-pb-title-holder">
                                                   <span class="edgtf-pb-title">Rating</span>
                                                   <span class="edgtf-pb-percent">0</span>
                                                </h6>
                                                <div class="edgtf-pb-content-holder">
                                                   <div data-percentage=60 class="edgtf-pb-content"></div>
                                                </div>
                                             </div>
                                             <div class="edgtf-progress-bar  ">
                                                <h6 class="edgtf-pb-title-holder">
                                                   <span class="edgtf-pb-title">Atmosphere</span>
                                                   <span class="edgtf-pb-percent">0</span>
                                                </h6>
                                                <div class="edgtf-pb-content-holder">
                                                   <div data-percentage=40 class="edgtf-pb-content"></div>
                                                </div>
                                             </div>
                                             <div class="edgtf-progress-bar  ">
                                                <h6 class="edgtf-pb-title-holder">
                                                   <span class="edgtf-pb-title">Personel</span>
                                                   <span class="edgtf-pb-percent">0</span>
                                                </h6>
                                                <div class="edgtf-pb-content-holder">
                                                   <div data-percentage=40 class="edgtf-pb-content"></div>
                                                </div>
                                             </div>
                                             <div class="edgtf-progress-bar  ">
                                                <h6 class="edgtf-pb-title-holder">
                                                   <span class="edgtf-pb-title">Price Tags</span>
                                                   <span class="edgtf-pb-percent">0</span>
                                                </h6>
                                                <div class="edgtf-pb-content-holder">
                                                   <div data-percentage=80 class="edgtf-pb-content"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="edgtf-reviews-list-info edgtf-reviews-count">
                                       <h4 class="edgtf-reviews-summary">
                                          <span class="edgtf-reviews-number">
                                          3 </span>
                                          <span class="edgtf-reviews-label">
                                          Reviews </span>
                                       </h4>
                                    </div>
                                    <div class="edgtf-comment-holder clearfix" id="comments">
                                       <div class="edgtf-comment-holder-inner">
                                          <div class="edgtf-comments-title">
                                             <h4>Comments</h4>
                                          </div>
                                          <div class="edgtf-comments">
                                             <ul class="edgtf-comment-list">
                                                <li>
                                                   <div class="edgtf-comment clearfix">
                                                      <div class="edgtf-comment-image"> <img src="wp-content/uploads/2018/08/user-img-7-100x100.jpg" width="96" height="96" alt="Brian Rice" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo" /> </div>
                                                      <div class="edgtf-comment-text">
                                                         <div class="edgtf-comment-info">
                                                            <h5 class="edgtf-comment-name vcard">Brian Rice</h5>
                                                            <div class="edgtf-review-rating">
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Rating </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Atmosphere </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Personel </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Price Tags </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="edgtf-text-holder" id="comment-65">
                                                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget ante condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus nullam.</p>
                                                            <p class="edgtf-review-comment-date">August 15, 2018</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="edgtf-comment clearfix">
                                                      <div class="edgtf-comment-image"> <img src="https://secure.gravatar.com/avatar/b1ac19a348c000029ef529ecd5a0facb?s=96&amp;d=mm&amp;r=g" width="96" height="96" alt="Avatar" class="avatar avatar-96wp-user-avatar wp-user-avatar-96 alignnone photo avatar-default" /> </div>
                                                      <div class="edgtf-comment-text">
                                                         <div class="edgtf-comment-info">
                                                            <h5 class="edgtf-comment-name vcard">Anne Green</h5>
                                                            <div class="edgtf-review-rating">
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Rating </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Atmosphere </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Personel </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Price Tags </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="edgtf-text-holder" id="comment-66">
                                                            <p>Quisque rutrum aenean imperdiet. Etiam ultricies nisi vel augue.</p>
                                                            <p class="edgtf-review-comment-date">August 15, 2018</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="edgtf-comment clearfix">
                                                      <div class="edgtf-comment-image"> <img src="wp-content/uploads/2018/08/user-img-6-100x100.jpg" width="96" height="96" alt="George Moreno" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo" /> </div>
                                                      <div class="edgtf-comment-text">
                                                         <div class="edgtf-comment-info">
                                                            <h5 class="edgtf-comment-name vcard">George Moreno</h5>
                                                            <div class="edgtf-review-rating">
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Rating </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Atmosphere </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Personel </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                               <span class="edgtf-rating-inner">
                                                               <span class="edgtf-rating-label">
                                                               Price Tags </span>
                                                               <span class="edgtf-rating-value">
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="fas fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               <i class="far fa-star" aria-hidden="true"></i>
                                                               </span>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="edgtf-text-holder" id="comment-67">
                                                            <p>Maecenas tempus, tellus eget condimentum rhoncus? Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus vitae sapien ut libero? Venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                                                            <p class="edgtf-review-comment-date">August 15, 2018</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <div class="edgtf-comment-form">
                                       <div class="edgtf-comment-form-inner">
                                          <div id="respond" class="comment-respond">
                                             <h4 id="reply-title" class="comment-reply-title">Write a Review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h4>
                                             <form action="https://urbango.qodeinteractive.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                <div class="edgtf-comment-form-ratings">
                                                   <div class="edgtf-comment-form-rating">
                                                      <label>Rating<span class="required">*</span></label>
                                                      <span class="edgtf-comment-rating-box">
                                                      <span class="edgtf-star-rating" data-value="1"></span>
                                                      <span class="edgtf-star-rating" data-value="2"></span>
                                                      <span class="edgtf-star-rating" data-value="3"></span>
                                                      <span class="edgtf-star-rating" data-value="4"></span>
                                                      <span class="edgtf-star-rating" data-value="5"></span>
                                                      <input type="hidden" name="edgtf_global_rating" class="edgtf-rating" value="3">
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-comment-form-rating">
                                                      <label>Atmosphere<span class="required">*</span></label>
                                                      <span class="edgtf-comment-rating-box">
                                                      <span class="edgtf-star-rating" data-value="1"></span>
                                                      <span class="edgtf-star-rating" data-value="2"></span>
                                                      <span class="edgtf-star-rating" data-value="3"></span>
                                                      <span class="edgtf-star-rating" data-value="4"></span>
                                                      <span class="edgtf-star-rating" data-value="5"></span>
                                                      <input type="hidden" name="atmosphere" class="edgtf-rating" value="3">
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-comment-form-rating">
                                                      <label>Personel<span class="required">*</span></label>
                                                      <span class="edgtf-comment-rating-box">
                                                      <span class="edgtf-star-rating" data-value="1"></span>
                                                      <span class="edgtf-star-rating" data-value="2"></span>
                                                      <span class="edgtf-star-rating" data-value="3"></span>
                                                      <span class="edgtf-star-rating" data-value="4"></span>
                                                      <span class="edgtf-star-rating" data-value="5"></span>
                                                      <input type="hidden" name="personel" class="edgtf-rating" value="3">
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-comment-form-rating">
                                                      <label>Price Tags<span class="required">*</span></label>
                                                      <span class="edgtf-comment-rating-box">
                                                      <span class="edgtf-star-rating" data-value="1"></span>
                                                      <span class="edgtf-star-rating" data-value="2"></span>
                                                      <span class="edgtf-star-rating" data-value="3"></span>
                                                      <span class="edgtf-star-rating" data-value="4"></span>
                                                      <span class="edgtf-star-rating" data-value="5"></span>
                                                      <input type="hidden" name="price-tags" class="edgtf-rating" value="3">
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="edgtf-comment-input-title">
                                                   <label>Title of your Review</label>
                                                   <input id="title" name="edgtf_comment_title" class="edgtf-input-field" type="text" />
                                                </div>
                                                <div class="edgtf-comment-input-text">
                                                   <label>Comment</label>
                                                   <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                                                </div>
                                                <input id="author" name="author" placeholder="Your Name" type="text" value="" aria-required='true' />
                                                <input id="email" name="email" placeholder="Your Email" type="text" value="" aria-required='true' />
                                                <input id="url" name="url" placeholder="Website" type="text" value="" size="30" maxlength="200" />
                                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit_comment" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='967' id='comment_post_ID' />
                                                   <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>
                                                <div class="wantispam-required-fields">
                                                   <input type="hidden" name="wantispam_t" class="wantispam-control wantispam-control-t" value="1628084821" />
                                                   <div class="wantispam-group wantispam-group-q" style="clear: both;">
                                                      <label>Current <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="96eff3d6e4">[email&#160;protected]</a> <span class="required">*</span></label>
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
                                    </div> -->
                                 </div>
                                 <div class="edgtf-grid-col-4">
                                    <div class="edgtf-ls-sidebar">
                                       <div class="edgtf-ls-location">
                                          <div class="edgtf-ls-location-map">
                                             <div class="edgtf-google-map-holder">
                                                <a itemprop="url" class="edgtf-google-map-direction" href="https://maps.google.com/?q=410+St+Nicholas+Ave+New+York+NY+10027+USA" target="_blank">Get direction</a>
                                                <div class="edgtf-google-map" id="edgtf-map-2939704" data-addresses='["410 St Nicholas Ave, New York, NY 10027, USA"]' data-custom-map-style=no data-color-overlay=#393939 data-saturation=-100 data-lightness=-60 data-zoom=12 data-pin=https://urbango.qodeinteractive.com/wp-content/themes/urbango/assets/img/pin.png data-unique-id=2939704 data-scroll-wheel=no data-height=250 data-snazzy-map-style=yes></div>
                                                <input type="hidden" class="edgtf-snazzy-map" value="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f3f3f3&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural.landcover&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural.landcover&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#d2f9bc&quot;},{&quot;saturation&quot;:&quot;-19&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;: 45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#c0e4f3&quot;},{&quot;visibility&quot;: &quot;on&quot;}]}]" />
                                                <div class="edgtf-google-map-overlay"></div>
                                             </div>
                                          </div>
                                          <div class="edgtf-ls-location-contact-info">
                                             <div class="edgtf-ls-location-heading">
                                                <h5 class="edgtf-ls-parts-title ">Contact info</h5>
                                                <div class="edgtf-ls-notice">
                                                   <a class="edgtf-claim-opener" href="#" data-id="967">
                                                   <span class="edgtf-claim-icon icon_error-circle_alt"></span>
                                                   <span class="edgtf-claim-notice">Claim</span>
                                                   </a><a class="edgtf-report-opener" href="#" data-id="967">
                                                   <span class="edgtf-report-icon icon_error-triangle_alt"></span>
                                                   <span class="edgtf-report-notice">Report</span>
                                                   </a> 
                                                </div>
                                             </div>
                                             <div class="edgtf-ls-location-cid-holder">
                                                <p class="edgtf-ls-location-address">410 St Nicholas Ave, New York, NY 10027, USA</p>
                                                <p class="edgtf-ls-location-phone">
                                                   <a itemprop="url" class="edgtf-ls-location-phone-link" href="tel:0052366852">0052366852</a>
                                                </p>
                                                <p class="edgtf-ls-location-email">
                                                   <a itemprop="url" class="edgtf-ls-location-email-link" href="cdn-cgi/l/email-protection.html#a9c0c7cfc6e9ccd1c8c4d9c5cc87cac6c4"><span class="__cf_email__" data-cfemail="e78e898188a7829f868a978b82c984888a">[email&#160;protected]</span></a>
                                                </p>
                                                <p class="edgtf-ls-location-site-url">
                                                   <a itemprop="url" class="edgtf-ls-location-site-url-link" href="#" target="_blank">https://yoinstructor.com/</a>
                                                </p>
                                             </div>
                                             <div class="edgtf-ls-business-hours">
                                                <div class="edgtf-ls-bg-notice">
                                                   <h5 class="edgtf-ls-parts-title edgtf-ls-bg-closed">Closed now</h5>
                                                </div>
                                                <div class="edgtf-ls-bg-items">
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Monday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-closed">Closed</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Tuesday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-closed">Closed</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Wednesday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-open">11:00am</span>
                                                      <span class="edgtf-ls-bg-separator">-</span>
                                                      <span class="edgtf-ls-bg-close">10:00pm</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Thursday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-open">11:00am</span>
                                                      <span class="edgtf-ls-bg-separator">-</span>
                                                      <span class="edgtf-ls-bg-close">10:00pm</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Friday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-open">11:00am</span>
                                                      <span class="edgtf-ls-bg-separator">-</span>
                                                      <span class="edgtf-ls-bg-close">10:00pm</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Saturday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-open">11:00am</span>
                                                      <span class="edgtf-ls-bg-separator">-</span>
                                                      <span class="edgtf-ls-bg-close">10:00pm</span>
                                                      </span>
                                                   </div>
                                                   <div class="edgtf-ls-bg-item">
                                                      <span class="edgtf-ls-bg-day">Sunday</span>
                                                      <span class="edgtf-ls-bg-time">
                                                      <span class="edgtf-ls-bg-open">11:00am</span>
                                                      <span class="edgtf-ls-bg-separator">-</span>
                                                      <span class="edgtf-ls-bg-close">10:00pm</span>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="edgtf-ls-bg-local-time">
                                                   <span>Local time 05:47am</span>
                                                </div>
                                             </div>
                                             <div class="edgtf-ls-location-social">
                                                <span class="edgtf-ls-location-social-title">Social Profiles:</span>
                                                <a itemprop="url" class="edgtf-ls-location-social-facebook" href="https://www.facebook.com/" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a itemprop="url" class="edgtf-ls-location-social-twitter" href="https://twitter.com/" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                                </a>
                                                <a itemprop="url" class="edgtf-ls-location-social-instagram" href="https://www.instagram.com/" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                                </a>
                                                <a itemprop="url" class="edgtf-ls-location-social-tripadvisor" href="https://www.tripadvisor.com/" target="_blank">
                                                <i class="fab fa-tripadvisor"></i>
                                                </a>
                                                <a itemprop="url" class="edgtf-ls-location-social-youtube" href="https://www.youtube.com/" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                                </a>
                                                <a itemprop="url" class="edgtf-ls-location-social-yelp" href="https://www.yelp.com/" target="_blank">
                                                <i class="fab fa-yelp"></i>
                                                </a>
                                             </div>
                                             <button type="submit" class="edgtf-btn edgtf-btn-huge edgtf-btn-outline edgtf-enquiry-opener"> <span class="edgtf-btn-text">Contact This Business</span></button> 
                                          </div>
                                       </div>
                                       <div class="edgtf-ls-additional-info">
                                          <h5 class="edgtf-ls-parts-title ">Additional info</h5>
                                          <div class="edgtf-ls-ai-items">
                                             <div class="edgtf-ls-ai-item">
                                                <p class="edgtf-ls-ai-label">View collection</p>
                                                <p class="edgtf-ls-ai-value">
                                                   <a itemprop="url" href="index.html">
                                                   Click here </a>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="edgtf-ls-ads">
                                          <h5 class="edgtf-ls-parts-title ">Sponsored Ad</h5>
                                          <div class="edgtf-ls-ads-info">
                                             <a itemprop="url" class="edgtf-ls-ads-link" href="renew/index.html"><img width="100%" src="images/listing-ad-img.jpg" class="attachment-full size-full" alt="a" loading="lazy"/></a> 
                                             <h5 class="edgtf-ls-ads-title">
                                                <a itemprop="url" class="edgtf-ls-ads-link" href="renew/index.html">Renew - All Natural SPA</a> 
                                             </h5>
                                             <p class="edgtf-ls-ads-text">Aliquam lorem ante, dapibus in viverra quis, feugiat tellus nulla ut metus varius. </p>
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
         </div>