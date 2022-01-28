<?php
ob_start();
session_start();
?>

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />
<div class="edgtf-row-grid-section-wrapper ">
               <div class="edgtf-row-grid-section">
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1534496261206">
                  
                     <!--=======================================================================-->
                                 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-0 vc_col-xs-12">
                                    <!--===========================================================-->
                                                <?php if ($_SESSION['yo_kd_user']==$_GET['kd_inst']) { ?>
         <a href="javascript:void(0);" id="bt_image"><i class="edgtf-icon-font-awesome far fa-edit " style="color:#FC0;"></i></a> 
         <?php } ?>
         <form action="" method="get" name="ffoto">
         							<div id="dimage">
                                    
                                    <div class="picture">
                                    
                                    <div class="overlay">
                                       <div class="text">Click to Change Profile Image</div>
                                    </div>
                                    <input name="file_foto" type="file" id="file_foto" value="">
                                    
                                 </div>
                                 <div id="path_profile"></div>
                                    </div></form>
                                    
                                    <div id="dt_image">
                                    <figure class="woocommerce-product-gallery__wrapper">
                                       <div  class="woocommerce-product-gallery__image">
                                         
                                          <img width="100%"  src="foto/user/<?php echo $row['photo']; ?>" class="wp-post-image" alt="a" loading="lazy" title="shop-img-1" style="border-radius:20px;" id="new_profile">
                                          <div id="apDiv1">
                                             <?php
                                                echo '<img src="'.$tempdir.$row['kd_instructor'].'.png'.'" width="200" height="200" align="middle"/>';
                                                ?>
                                          </div>
                                       </div>
                                    </figure>
                                    </div>
                                    
                                <!--=========================================================-->
                                             
                                          </div>
                                          
                                          <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                                      <!--======================================================-->
                                 
                                 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-8 vc_col-sm-offset-0 vc_col-xs-12">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div class="wpb_text_column wpb_content_element ">
                                             <div class="wpb_wrapper">
                                               
                                                <?php
												//
												include ('modul/front/profil_atas2.php');
												?>
                                             </div>
                                          </div>
                                          <div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>
                                       </div>
                                    </div>
                                 </div>
                        <!--==============================================================-->
                  </div>
               </div>
            </div>