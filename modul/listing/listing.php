<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
// $select_stmt=$db->prepare("SELECT
// category_sub.id_category,
// category.nm_category,
// category_sub.id_,
// category_sub.nm_sub_category,
// type_class.kd_instructor,
// instructor.first_name,
// instructor.last_name,
// instructor.kd_instructor AS kd_instructor_0,
// instructor.country,
// instructor.state,
// instructor.city,
// instructor.street_name,
// instructor.street_number,
// instructor.zip_code,
// instructor.phone_number,
// instructor.photo,
// instructor.who_train,
// instructor.aktif,
// instructor.tgl_in
// FROM
// category_sub
// JOIN category
// ON category_sub.id_category = category.id_ 
// JOIN type_class
// ON type_class.type = category.nm_category 
// JOIN instructor
// ON instructor.kd_instructor = type_class.kd_instructor
// WHERE category_sub.nm_sub_category='$_GET[subc]'
// GROUP BY instructor.kd_instructor
// "); //sql select query
// $select_stmt->execute();
// $row=$select_stmt->fetch(PDO::FETCH_ASSOC);



?>
                           <div style="margin-top: 137px;">
<div class="edgtf-content">
   <div class="edgtf-content-inner">
      <div class="edgtf-full-width">
         <div class="edgtf-full-width-inner">
            <div class="edgtf-listing-list-holder  edgtf-ll-gallery edgtf-ll-layout-standard edgtf-grid-list edgtf-disable-bottom-space  edgtf-three-columns edgtf-normal-space edgtf-ll-with-map edgtf-map-list-holder edgtf-ll-have-switcher edgtf-ll-with-filter edgtf-ll-pag-load-more edgtf-ll-category-set   " data-type=gallery data-item-layout=standard data-number-of-columns=three data-space-between-items=normal data-number-of-items=6 data-order-by=featured-first data-order=DESC data-category=23 data-image-proportions=full data-title-tag=h5 data-enable-excerpt=yes data-excerpt-length=53 data-enable-category=yes data-enable-location=yes data-enable-reviews-count=yes data-enable-price-range=yes data-enable-map=yes data-enable-map-switcher=yes data-enable-filter=yes data-enable-filter-custom-search=yes data-enable-filter-category=yes data-enable-filter-location=yes data-filter-location-field-type=places data-enable-filter-tag=yes data-enable-filter-order-by=yes data-enable-filter-switch-layout=yes data-pagination-type=load-more data-hide-active-filter=yes data-max-num-pages=4 data-next-page=2>
               <div class="edgtf-map-switcher">
                  <a class="edgtf-map-switcher-link edgtf-map-switcher-full-map" href="#">
                  <span aria-hidden="true" class="edgtf-icon-font-elegant edgtf-map-switcher-icon arrow_left "></span> <span class="edgtf-map-switcher-label">Open Full Map</span>
                  </a>
                  <a class="edgtf-map-switcher-link edgtf-map-switcher-reset" href="#">
                  <span aria-hidden="true" class="edgtf-icon-font-elegant edgtf-map-switcher-icon icon_menu "></span> <span class="edgtf-map-switcher-label">Reset To Default</span>
                  </a>
                  <a class="edgtf-map-switcher-link edgtf-map-switcher-full-list" href="#">
                  <span aria-hidden="true" class="edgtf-icon-font-elegant edgtf-map-switcher-icon arrow_right "></span> <span class="edgtf-map-switcher-label">Open Full List</span>
                  </a>
               </div>
               <div class="edgtf-map-list-map-part edgtf-listing-list-map-part">
                  <script type="text/template" class="edgtf-info-window-template">
                     <div class="edgtf-info-window">
                        <div class="edgtf-info-window-inner">
                           <a itemprop="url" class="edgtf-info-window-link" href="<%= itemUrl %>"></a>
                           <% if ( featuredImage ) { %>
                              <div class="edgtf-info-window-image">
                                 <img itemprop="image" src="<%= featuredImage[0] %>" alt="<%= title %>" width="<%= featuredImage[1] %>" height="<%= featuredImage[2] %>">
                              </div>
                           <% } %>
                           <div class="edgtf-info-window-details">
                              <h6 itemprop="name" class="edgtf-info-window-title"><%= title %></h6>
                              <p class="edgtf-info-window-location"><%= address %></p>
                           </div>
                        </div>
                     </div>
                  </script><script type="text/template" class="edgtf-marker-template">
                     <div class="edgtf-map-marker">
                        <div class="edgtf-map-marker-inner">
                           <%= termIcon %>
                           <svg class="edgtf-map-marker-pin" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="37.875px" height="50.75px" viewBox="0 0 37.875 50.75" enable-background="new 0 0 37.875 50.75" xml:space="preserve"><g><path fill="#EF4960" d="M0,18.938C0,29.396,17.746,50.75,18.938,50.75V0C8.479,0,0,8.479,0,18.938z"/><path fill="#DC4458" d="M37.875,18.938C37.875,8.479,29.396,0,18.938,0v50.75C20.129,50.75,37.875,29.396,37.875,18.938z"/></g><circle fill="#FFFFFF" cx="18.938" cy="19.188" r="14.813"/></svg>
                        </div>
                     </div>
                  </script>
                  <div id="edgtf-listing-multiple-map-holder"></div>
               </div>
               <div class="edgtf-listing-list-items-part">
                  <div class="edgtf-ll-filter-holder">
                     <div class="edgtf-ll-filter-top">
                        <div class="edgtf-filter-section edgtf-filter-section-custom-search">
                           <div class="edgtf-fs-inner edgtf-fs-is-text" data-type="custom-search">
                              <input type="text" name="edgtf-text-custom-search" value="" placeholder="What you are looking for?" />
                           </div>
                        </div>
                        <div class="edgtf-filter-section edgtf-filter-section-location">
                           <div class="edgtf-fs-inner edgtf-fs-is-places edgtf-fs-has-geo-location" data-type="location">
                              <input type="text" id="edgtf-fs-places-location" name="edgtf-fs-places-location" value="" placeholder="Fill your location..." autocomplete="off" />
                              <a class="edgtf-fs-places-link edgtf-fs-places-reset" href="#">
                              <span aria-hidden="true" class="edgtf-icon-font-elegant edgtf-fs-places-icon icon_close "></span> </a>
                              <a class="edgtf-fs-places-link edgtf-fs-places-geo" href="#">
                              <i class="edgtf-icon-font-awesome edgtf-fs-places-icon fas fa-crosshairs "></i> <span class="edgtf-fs-places-notice">Locate me</span>
                              </a>
                              <div class="edgtf-fs-places-geo-radius" data-geo-location="">
                                 <span class="edgtf-range-slider-label">Near me</span>
                                 <div class="edgtf-range-slider" id="edgtf-range-slider-id"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="edgtf-filter-section edgtf-filter-section-tag">
                        <div class="edgtf-fs-inner edgtf-fs-is-checkbox" data-type="tag">
                           <h5 class="edgtf-fs-tag-title">Filter by Tags</h5>
                           <div class="edgtf-fs-cb-items">
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="bicycle-86" name="edgtf-fs-cb-tag[]" data-id="86" value="" />
                                 <label for="bicycle-86">Bicycle</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="bus-93" name="edgtf-fs-cb-tag[]" data-id="93" value="" />
                                 <label for="bus-93">Bus</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="camping-94" name="edgtf-fs-cb-tag[]" data-id="94" value="" />
                                 <label for="camping-94">Camping</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="field-trips-90" name="edgtf-fs-cb-tag[]" data-id="90" value="" />
                                 <label for="field-trips-90">Field trips</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="forest-89" name="edgtf-fs-cb-tag[]" data-id="89" value="" />
                                 <label for="forest-89">Forest</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="getaway-96" name="edgtf-fs-cb-tag[]" data-id="96" value="" />
                                 <label for="getaway-96">Getaway</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="holiday-91" name="edgtf-fs-cb-tag[]" data-id="91" value="" />
                                 <label for="holiday-91">Holiday</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="mountaineering-87" name="edgtf-fs-cb-tag[]" data-id="87" value="" />
                                 <label for="mountaineering-87">Mountaineering</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="resort-95" name="edgtf-fs-cb-tag[]" data-id="95" value="" />
                                 <label for="resort-95">Resort</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="trekking-88" name="edgtf-fs-cb-tag[]" data-id="88" value="" />
                                 <label for="trekking-88">Trekking</label>
                              </div>
                              <div class="edgtf-fs-cb-item">
                                 <input type="checkbox" id="vacation-92" name="edgtf-fs-cb-tag[]" data-id="92" value="" />
                                 <label for="vacation-92">Vacation</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="edgtf-filter-section edgtf-filter-section-buttons">
                        <div class="edgtf-fs-inner">
                           <button type="submit" class="edgtf-btn edgtf-btn-medium edgtf-btn-outline edgtf-ll-filter-search"> <span class="edgtf-btn-text">Filter Results</span></button><button type="submit" class="edgtf-btn edgtf-btn-medium edgtf-btn-outline edgtf-ll-filter-save"> <span class="edgtf-btn-text">Save Search</span></button><button type="submit" class="edgtf-btn edgtf-btn-medium edgtf-btn-outline edgtf-ll-filter-reset"> <span class="edgtf-btn-text">Reset All</span></button> <span class="edgtf-filter-query-results"></span>
                        </div>
                     </div>
                     <div class="edgtf-ll-filter-bottom">
                        <div class="edgtf-filter-section edgtf-filter-section-switch-layout">
                           <div class="edgtf-fs-inner">
                              <div class="edgtf-fs-sl-icons">
                                 <a class="edgtf-fs-sl-standard" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.167px" height="15.292px" viewBox="0 0 18.167 15.292" enable-background="new 0 0 18.167 15.292" xml:space="preserve">
                                       <g>
                                          <rect width="5" height="4" />
                                          <rect x="6.563" width="5" height="4" />
                                          <rect x="13.167" width="5" height="4" />
                                          <rect y="5.583" width="5" height="4" />
                                          <rect x="6.563" y="5.583" width="5" height="4" />
                                          <rect x="13.167" y="5.583" width="5" height="4" />
                                          <rect y="11.292" width="5" height="4" />
                                          <rect x="6.563" y="11.292" width="5" height="4" />
                                          <rect x="13.167" y="11.292" width="5" height="4" />
                                       </g>
                                    </svg>
                                 </a>
                                 <a class="edgtf-fs-sl-simple" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.167px" height="15.292px" viewBox="0 0 18.167 15.292" enable-background="new 0 0 18.167 15.292" xml:space="preserve">
                                       <rect width="5" height="4" />
                                       <rect x="6.563" width="11.604" height="4" />
                                       <rect y="5.583" width="5" height="4" />
                                       <rect x="6.563" y="5.583" width="11.604" height="4" />
                                       <rect y="11.292" width="5" height="4" />
                                       <rect x="6.563" y="11.292" width="11.604" height="4" />
                                    </svg>
                                 </a>
                              </div>
                              <h5 class="edgtf-fs-sl-title">
                                 <span class="edgtf-fs-sl-count">6</span>
                                 <span class="edgtf-fs-sl-label">Results Found</span>
                              </h5>
                           </div>
                        </div>
                        <div class="edgtf-filter-section edgtf-filter-section-order-by">
                           <div class="edgtf-fs-inner edgtf-fs-is-select2" data-type="order-by" data-default-order-by="" data-order-by="">
                              <select name="edgtf-fs-order-by">
                                 <option value="">Default Sorting</option>
                                 <option value="date">Sort by: Date</option>
                                 <option value="title">Sort by: Title</option>
                                 <option value="featured-first">Sort by: Featured Items First</option>
                                 <option value="featured-last">Sort by: Featured Items Last</option>
                                 <option value="price-range-high">Sort by: Price Range from High to Low</option>
                                 <option value="price-range-low">Sort by: Price Range From Low To High</option>
                                 <option value="ID">Sort by: ID</option>
                                 <option value="rand">Sort by: Random</option>
                                 <option value="menu_order">Sort by: Menu Order</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="edgtf-ll-inner edgtf-outer-space edgtf-ml-inner clearfix">
                     
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
WHERE category_sub.nm_sub_category='$_GET[subc]'
GROUP BY instructor.kd_instructor"); //sql select query
                           $select_stmt->execute();
                           while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                           {
      $select_stmt_country=$db->prepare("SELECT * FROM countries WHERE id='$row[country]'"); //sql select query
      $select_stmt_country->execute();   //execute query with bind parameter
      $row_country=$select_stmt_country->fetch(PDO::FETCH_ASSOC);

      $select_stmt_state=$db->prepare("SELECT * FROM states WHERE id='$row[state]'"); //sql select query
      $select_stmt_state->execute();   //execute query with bind parameter
      $row_state=$select_stmt_state->fetch(PDO::FETCH_ASSOC);

      $select_stmt_city=$db->prepare("SELECT * FROM cities WHERE id='$row[city]'"); //sql select query
      $select_stmt_city->execute();   //execute query with bind parameter
      $row_city=$select_stmt_city->fetch(PDO::FETCH_ASSOC);
                           ?>
                     <article class="edgtf-ll-item edgtf-item-space edgtf-featured-item post-1115 listing-item type-listing-item status-publish has-post-thumbnail hentry listing-category-camping listing-category-tours listing-tag-bicycle listing-tag-camping listing-tag-forest listing-tag-mountaineering listing-tag-trekking listing-location-new-york listing-location-upper-west-side listing-amenity-camping-kit listing-amenity-climbing-equipment listing-amenity-hiking-gear listing-amenity-online-reservations listing-amenity-safety-instructor listing-amenity-student-discounts listing-amenity-trip-leader" data-id="1115">
                        <div class="edgtf-ll-item-inner">
                           <div class="edgtf-lli-image-holder">
                              <div class="edgtf-lli-image" style="background-image: url(foto/user/<?php echo $row['photo']; ?>)">
                                 <a itemprop="url" href="?com=listing_detail&kd_inst=<?php echo $row['kd_instructor']; ?>&name=<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>">
                                 <img width="800" height="545" src="foto/user/<?php echo $row['photo']; ?>" class="attachment-full size-full wp-post-image" alt="a" loading="lazy"  /> </a>
                              </div>
                              <div class="edgtf-lli-category-holder">
                                 <a itemprop="url" class="edgtf-lli-category edgtf-is-icon" href="tours/index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48.9px" height="42.375px" viewBox="0 0 48.9 42.375" enable-background="new 0 0 48.9 42.375" xml:space="preserve">
                                       <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="10.337,28.385 1.25,28.385 8.75,20.34 3.157,20.34 11.022,11.295 5.718,11.295 13.745,1.25 17.9,5.352 " />
                                       <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="38.563,28.385 47.65,28.385 40.15,20.34 45.743,20.34 37.878,11.295 43.183,11.295 35.155,1.25 31,5.352 " />
                                       <polygon stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="24.516,34.625 38.381,34.625 28.631,24.25 36.193,24.25 28.318,13.875 33.256,13.875 24.516,3.5 15.776,13.875 20.713,13.875 12.838,24.25 20.401,24.25 10.651,34.625" />
                                       <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="21.933,34.625 21.933,41.125 27.099,41.125 27.099,34.625" />
                                    </svg>
                                 </a>
                              </div>
                              <div class="edgtf-wishlist-holder">
                                 <a class="edgtf-wishlist-link " href="#" data-id="1115">
                                 <i class="edgtf-icon-font-awesome far fa-heart "></i> </a>
                                 <div class="edgtf-wishlist-response"></div>
                              </div>
                           </div>
                           <div class="edgtf-lli-content">
                              <div class="edgtf-lli-featured-mark">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11.938px" height="15.181px" viewBox="0 0 11.938 15.181" enable-background="new 0 0 11.938 15.181" xml:space="preserve">
                                    <polygon points="0,0 0,8.813 0.016,8.813 5.97,15.181 11.923,8.813 11.938,8.813 11.938,0 " />
                                 </svg>
                              </div>
                              <h5 itemprop="name" class="edgtf-lli-title entry-title">
                                 <a itemprop="url" href="?com=listing_detail&kd_inst=<?php echo $row['kd_instructor']; ?>&name=<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a>
                              </h5>
                              <div class="edgtf-lli-location-holder">
                                 <a itemprop="url" class="edgtf-lli-location edgtf-without-icon" href="#">
                                 <?php echo $row_country['name']; ?> </a>
                                 <a itemprop="url" class="edgtf-lli-location edgtf-without-icon" href="#">
                                 <?php echo $row_state['name']; ?></a>
                                 <a itemprop="url" class="edgtf-lli-location edgtf-without-icon" href="#">
                                 <?php echo $row_city['name']; ?></a>
                              </div>
                              <p itemprop="description" class="edgtf-lli-excerpt">Venenatis fauci nulla quis ante. Etiam sit amet orci </p>
                              <div class="edgtf-lli-bottom-info">
                                 <div class="edgtf-lli-reviews-count">
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
                                       <i class="fas fa-star" aria-hidden="true"></i>
                                       <i class="far fa-star" aria-hidden="true"></i>
                                       </span>
                                       </span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="edgtf-lli-price-range">
                                    <span class="edgtf-lli-price-range-icons">
                                    <i class="edgtf-lli-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                    <i class="edgtf-lli-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                    <i class="edgtf-lli-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                    <i class="edgtf-lli-price-range-icon fas fa-dollar-sign edgtf-active"></i>
                                    <i class="edgtf-lli-price-range-icon fas fa-dollar-sign "></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>
                  <?php } ?>

                     
                  </div>
                  <div class="edgtf-ll-loading">
                     <div class="edgtf-ll-loading-pulse"></div>
                  </div>
                  <div class="edgtf-ll-load-more-holder">
                     <div class="edgtf-ll-load-more">
                        <a itemprop="url" href="#" target="_self" class="edgtf-btn edgtf-btn-large edgtf-btn-solid"> <span class="edgtf-btn-text">Load More</span></a> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>