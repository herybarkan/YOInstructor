<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   
.posisi_top{
	margin-top:120px;
	}
.posisi_top2{
	margin-top:-70px;
	}
.bt_back{
	margin-top:0px;
	margin-left:50px;
	}
}

@media only screen 
   and (max-width : 1200px) {
   
.posisi_top{
	margin-top:0px;
	}
.posisi_top2{
	margin-top:0px;
	
	}
.bt_back{
	margin-top:-50px;
	margin-left:auto;
	margin-right:auto;
	}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>

<div class="edgtf-row-grid-section-wrapper posisi_top" style="background-color:#FFF;">
   <div class="edgtf-row-grid-section">
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1534170416478">
         <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
               <div class="wpb_wrapper">
                  <div class="edgtf-section-title-holder   edgtf-st-position-center">
                  
                  <div class="bt_back" style=" z-index:10000; width:50px;"><a href="#" onclick="history.back()"><img src="img/left.png" width="50" height="50" /></a></div>
                  
                     <div class="edgtf-st-inner posisi_top2">
                        <h2>
                        <span class="edgtf-st-title font_hitam2">
                        LIST
                        </span>
                        <span class="edgtf-st-title font_kuning2">
                        POST
                        </span>
                     </h2>
                     </div>

                     <!--<a href="#"><span class="edgtf-btn edgtf-btn-small edgtf-btn-solid">View All Post</span></a>-->

                  </div>
                  <div class="vc_empty_space" style="height: 47px">
                     <span class="vc_empty_space_inner"></span>
                  </div>
                  <div class="edgtf-row-grid-section-wrapper " style="background-color:#fff">
                     <div class="edgtf-row-grid-section">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1534948538885">
                           <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                 <div class="wpb_wrapper">
                                    <div class="edgtf-listing-list-holder  edgtf-ll-gallery edgtf-ll-layout-standard edgtf-grid-list edgtf-disable-bottom-space  edgtf-three-columns edgtf-normal-space edgtf-ll-no-map  edgtf-ll-no-filter edgtf-ll-pag-no-pagination    " data-type="gallery" data-item-layout="standard" data-number-of-columns="three" data-space-between-items="normal" data-number-of-items="3" data-selected-items="868,650,871,802,874,522" data-order-by="menu_order" data-order="DESC" data-image-proportions="full" data-title-tag="h5" data-enable-excerpt="yes" data-excerpt-length="0" data-enable-category="yes" data-enable-location="yes" data-enable-reviews-count="yes" data-enable-price-range="yes" data-enable-map="no" data-enable-map-switcher="no" data-enable-filter="no" data-enable-filter-custom-search="yes" data-enable-filter-category="yes" data-enable-filter-location="yes" data-filter-location-field-type="select" data-enable-filter-tag="yes" data-enable-filter-order-by="yes" data-enable-filter-switch-layout="yes" data-pagination-type="no-pagination" data-hide-active-filter="yes" data-max-num-pages="2" data-next-page="2">
                                       <div class="edgtf-listing-list-items-part">
                                          <div class="edgtf-ll-inner edgtf-outer-space  clearfix">
                                          <?php
                           $select_inst=$db->prepare("SELECT * FROM tbl_post WHERE id_category='$_GET[cat]' ORDER BY id_ DESC"); //sql select query
                           $select_inst->execute();
                           while($row_inst=$select_inst->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                                             <article class="edgtf-ll-item edgtf-item-space post-650 listing-item type-listing-item status-publish has-post-thumbnail hentry listing-category-all-inclusive listing-category-coworking listing-tag-modern listing-tag-office listing-tag-startup listing-location-new-york listing-location-upper-west-side listing-amenity-air-conditioned listing-amenity-free-parking listing-amenity-free-wi-fi listing-amenity-kitchen listing-amenity-open-24-7 listing-amenity-personal-lockers listing-amenity-recreation-room listing-amenity-wheelchair-accessible" data-id="650">
                                                <div class="edgtf-ll-item-inner">
                                                   <div class="edgtf-lli-image-holder">
                                                      <div class="edgtf-lli-image">
                                                         <a itemprop="url" href="?com=list_blog_detail&id_=<?php echo $row_inst['id_']; ?>&title=<?php echo $row_inst['title']; ?>">
                                                         <img width="800" height="545" src="foto/article/<?php echo $row_inst['image']; ?>" class="attachment-full size-full wp-post-image" alt="a" loading="lazy" > </a>
                                                      </div>
                                                      <!--<div class="edgtf-lli-category-holder">
                                                         <a itemprop="url" class="edgtf-lli-category edgtf-is-icon" href="https://urbango.qodeinteractive.com/listing-category/coworking/">
                                                            
                                                         </a>
                                                      </div>-->
                                                      <!--<div class="edgtf-wishlist-holder">
                                                         <a class="edgtf-wishlist-link " href="#" data-id="650">
                                                         <i class="edgtf-icon-font-awesome far fa-heart "></i> </a>
                                                         <div class="edgtf-wishlist-response"></div>
                                                      </div>-->
                                                   </div>
                                                   <div class="edgtf-lli-content">
                                                      <h5 itemprop="name" class="edgtf-lli-title entry-title">
                                                         <a itemprop="url" href="?com=list_blog_detail&id_=<?php echo $row_inst['id_']; ?>&title=<?php echo $row_inst['title']; ?>"><?php echo substr($row_inst['title'],0,120)."..."; ?></a>
                                                      </h5>
                                                      <div class="edgtf-lli-location-holder">
                                                         <a itemprop="url" class="edgtf-lli-location edgtf-without-icon" href="#">
                                                         <?php echo $row_inst['tgl']; ?></a>
                                                         <a itemprop="url" class="edgtf-lli-location edgtf-without-icon" href="#">
                                                         <?php echo $row_inst['jam']; ?> </a>
                                                      </div>
                                                      
                                                   </div>
                                                </div>
                                             </article>
                                             <?php } ?>
                                             
                                             
                                          </div>
                                          <div class="edgtf-ll-loading">
                                             <div class="edgtf-ll-loading-pulse"></div>
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
      </div>
   </div>
</div>