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
	margin-top:-50px;
	}
.bt_back{
	margin-top:50px;
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
<div class="vc_row wpb_row vc_row-fluid vc_custom_1533890452168 posisi_top" >
                                 <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div class="edgtf-section-title-holder   edgtf-st-position-center">
                                          
                                          <div class="bt_back" style=" z-index:10000; width:50px;"><a href="#" onclick="history.back()"><img src="img/left.png" width="50" height="50" /></a></div>


                                             <div class="edgtf-st-inner posisi_top2">
                                                <span class="edgtf-st-subtitle " style="margin-bottom: -7px; font-size:25px; font-family: 'Heebo', cursive; color:#ffe45f;">
                                                What are your interest ?</span>
                                                <h2> <span class="edgtf-st-title font_hitam2">
                                                   YOUR
                                                </span>
                                                <span class="edgtf-st-title font_kuning2">
                                                   WELLNESS
                                                </span>
                                                <span class="edgtf-st-title font_hitam2">
                                                   JOURNEY STARTS NOW
                                                </span>
                                                </h2>
                                             </div>
                                            <!-- <a href="#"><span class="edgtf-btn edgtf-btn-small edgtf-btn-solid">View All Category</span></a>-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>

<div class="edgtf-row-grid-section-wrapper " style="margin-top: 10px;">
                                 <div class="edgtf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1533893025905">
                                       <div class="wpb_column vc_column_container vc_col-sm-12">
                                          <div class="vc_column-inner">
                                             <div class="wpb_wrapper">
                                                <div class="edgtf-category-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-four-columns edgtf-normal-space">
                                                   <div class="edgtf-cl-inner edgtf-outer-space clearfix">
                                                      <?php
                           $select_stmt=$db->prepare("SELECT * FROM category WHERE aktif='1'"); //sql select query
                           $select_stmt->execute();
                           while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                                                      <article class="edgtf-cl-item edgtf-item-space">
                                                         <div class="edgtf-cl-item-inner">
                                                            <div class="edgtf-cl-image">
                                                               <img width="800" height="800" src="foto/assets/<?php echo $row['image']; ?>" class="attachment-full size-full" alt="a" loading="lazy"> 
                                                            </div>
                                                            <div class="edgtf-cl-content">
                                                               <h4 itemprop="name" class="edgtf-cl-title entry-title">
                                                                  <a itemprop="url" href="https://urbango.qodeinteractive.com/listing-category/private-parties/">
                                                                     <?php echo $row['nm_category']; ?></a>
                                                               </h4>
                                                               <!-- <p itemprop="description" class="edgtf-cl-excerpt">Lorem ipsum dolor sit amet</p> -->
                                                            </div>
                                                            <a itemprop="url" class="edgtf-cl-link" href="?com=sub_category&title=<?php echo $row['nm_category']; ?>&id_=<?php echo $row['id_']; ?>"></a> 
                                                         </div>
                                                      </article>
                                                   <?php } ?>
                                                      
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>