<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
//$select_post=$db->prepare("SELECT * FROM tbl_post ORDER BY id_ DESC"); //sql select query
//$select_post->execute();
//$row_post=$select_post->fetch(PDO::FETCH_ASSOC);
						   
?>

   <div class="edgtf-title-holder edgtf-centered-type edgtf-title-va-header-bottom edgtf-has-bg-image edgtf-bg-parallax" style="height: 600px; background-image: url(&quot;images/bg-artikel.png&quot;); background-position: center -129.15px;" data-height="375">
      <div class="edgtf-title-image">
         <img itemprop="image" src="images/bg-artikel.png" alt="a">
      </div>
      <div class="edgtf-title-wrapper" style="height: 375px">
         <div class="edgtf-title-inner">
            <div class="edgtf-grid">
               <!-- <span class="edgtf-page-subtitle">Check it Out</span> -->
               <!-- <h2 class="edgtf-page-title entry-title" style="color: #ffffff">Pricing Package</h2> -->
               
               <h2 style="padding-top: 25%;"> <span class="font_hitam">BLOG</span> <span class="font_kuning">LIST</span>
               <!-- <span class="font_hitam">MEMBERSHIP</span>--></h2> 
            </div>
         </div>
      </div>
   </div>

   <div class="edgtf-container" style="margin-top: 100px;">
      <div class="edgtf-container-inner clearfix">
         <div class="edgtf-grid-row edgtf-grid-normal-gutter">
            <div class="edgtf-page-content-holder edgtf-grid-col-9">
               <div class="edgtf-blog-holder edgtf-blog-standard-date-on-image edgtf-blog-pagination-standard" data-blog-type="standard-date-on-image" data-next-page="2" data-max-num-pages="3" data-post-number="6" data-excerpt-length="57">
                  <div class="edgtf-blog-holder-inner">
                  <?php
                           $select_inst=$db->prepare("SELECT * FROM tbl_post WHERE aktif='1' ORDER BY id_ DESC LIMIT 5"); //sql select query
                           $select_inst->execute();
                           while($row_inst=$select_inst->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                           
                     <article id="post-165" class="edgtf-post-has-media post-165 post type-post status-publish format-standard has-post-thumbnail hentry category-cowork category-creative tag-music tag-vegetables">
                        <div class="edgtf-post-content">
                           <div class="edgtf-post-heading">
                              <div class="edgtf-post-date">
                                 <div class="edgtf-post-date-day">
                                 <?php 
echo date("d", strtotime($row_inst['tgl']));
echo "<br>";
echo date("M", strtotime($row_inst['tgl']));
//echo $row_post['image']; 
?>
                                 </div>
                              </div>
                              <div class="edgtf-post-imagex">
                                 <a itemprop="url" href="index.php?com=list_blog_detail&id_=<?php echo $row_inst['id_']; ?>&title=<?php echo $row_inst['title']; ?>">
                                 <img width="100%"  src="foto/article/<?php echo $row_inst['image']; ?>" class="" alt="a" style="width:100%; border-radius:10px;"> 
                                 
                                 <!--<img width="100%" src="" class="attachment-full size-full" alt="a" loading="lazy">-->
                                 </a>
                              </div>
                           </div>
                           <div class="edgtf-post-text">
                              <div class="edgtf-post-text-inner">
                                 <!--<div class="edgtf-post-info edgtf-post-info-top">
                                    <div class="edgtf-post-info-category">
                                       <a href="https://urbango.qodeinteractive.com/category/cowork/" rel="category tag">Cowork</a>, <a href="https://urbango.qodeinteractive.com/category/creative/" rel="category tag">Creative</a>
                                    </div>
                                 </div>-->
                                 <div class="edgtf-post-text-main">
                                    <h3 itemprop="name" class="entry-title edgtf-post-title">
                                       <a itemprop="url" href="index.php?com=list_blog_detail&id_=<?php echo $row_inst['id_']; ?>&title=<?php echo $row_inst['title']; ?>" title="<?php echo $row_inst['title']; ?>">
                                       <?php echo $row_inst['title']; ?> </a>
                                    </h3>
                                    <div class="edgtf-post-excerpt-holder">
                                       <!--<p itemprop="description" class="edgtf-post-excerpt">
                                          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel et duis dicat prodesset ei, ius ne lorem veritus repudiandae, quidam ocurreret elaboraret te sit. Eos eu nisl nonumy. Has alum iisque mentitum id, tale partem ei mei cibo mundi ea duo, vim exerci phaedrum complectitur et. 
                                       </p>-->
                                       <?php echo substr($row_inst['content'],0,130); ?>
                                    </div>
                                 </div>
                                 <div class="edgtf-post-info edgtf-post-info-bottom">
                                    <div class="edgtf-post-info-author">
                                       <span class="edgtf-post-info-author-text">
                                       By </span>
                                       <a itemprop="author" class="edgtf-post-info-author-link" href="#">
                                       Admin </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>
                     
                     <?php } ?>
                     
                     
                     
                     
                     
                     <!--<article id="post-406" class="edgtf-post-has-media post-406 post type-post status-publish format-gallery has-post-thumbnail hentry category-cowork category-food tag-groceries tag-healthy post_format-post-format-gallery">
                        <div class="edgtf-post-content">
                           <div class="edgtf-post-heading">
                              <div class="edgtf-post-date">
                                 <div class="edgtf-post-date-day">
                                    08	
                                 </div>
                                 <div class="edgtf-post-date-month">
                                    Aug	
                                 </div>
                              </div>
                              <div class="edgtf-post-image">
                                 <div class="edgtf-blog-gallery edgtf-owl-slider owl-loaded owl-drag" style="visibility: visible;">
                                    <div class="owl-stage-outer">
                                       <div class="owl-stage" style="transform: translate3d(-2904px, 0px, 0px); transition: all 0.6s ease 0s; width: 5808px;">
                                          <div class="owl-item cloned" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-6.jpg" class="attachment-full size-full" alt="a" loading="lazy"> </a>
                                             </div>
                                          </div>
                                          <div class="owl-item cloned" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-4.jpg" class="attachment-full size-full" alt="a" loading="lazy"> </a>
                                             </div>
                                          </div>
                                          <div class="owl-item" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-6.jpg" class="attachment-full size-full" alt="a" loading="lazy"> </a>
                                             </div>
                                          </div>
                                          <div class="owl-item active" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-4.jpg" class="attachment-full size-full" alt="a" loading="lazy" > </a>
                                             </div>
                                          </div>
                                          <div class="owl-item cloned" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-6.jpg" class="attachment-full size-full" alt="a" loading="lazy" > </a>
                                             </div>
                                          </div>
                                          <div class="owl-item cloned" style="width: 968px;">
                                             <div>
                                                <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/">
                                                <img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-4.jpg" class="attachment-full size-full" alt="a" loading="lazy" > </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="edgtf-prev-icon arrow_left"></span></button><button type="button" role="presentation" class="owl-next"><span class="edgtf-next-icon arrow_right"></span></button></div>
                                    <div class="owl-dots disabled"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="edgtf-post-text">
                              <div class="edgtf-post-text-inner">
                                 <div class="edgtf-post-info edgtf-post-info-top">
                                    <div class="edgtf-post-info-category">
                                       <a href="https://urbango.qodeinteractive.com/category/cowork/" rel="category tag">Cowork</a>, <a href="https://urbango.qodeinteractive.com/category/food/" rel="category tag">Food</a>
                                    </div>
                                 </div>
                                 <div class="edgtf-post-text-main">
                                    <h3 itemprop="name" class="entry-title edgtf-post-title">
                                       <a itemprop="url" href="https://urbango.qodeinteractive.com/the-fashion-breakfast/" title="The Fashion Breakfast">
                                       The Fashion Breakfast </a>
                                    </h3>
                                    <div class="edgtf-post-excerpt-holder">
                                       <p itemprop="description" class="edgtf-post-excerpt">
                                          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel et duis dicat prodesset ei, ius ne lorem veritus repudiandae, quidam ocurreret elaboraret te sit. Eos eu nisl nonumy. Has alum iisque mentitum id, tale partem ei mei cibo mundi ea duo, vim exerci phaedrum complectitur et. 
                                       </p>
                                    </div>
                                 </div>
                                 <div class="edgtf-post-info edgtf-post-info-bottom">
                                    <div class="edgtf-post-info-author">
                                       <span class="edgtf-post-info-author-text">
                                       By </span>
                                       <a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">
                                       Cintia Edge </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>-->
                  </div>
                  <!--<div class="edgtf-blog-pagination">
                     <ul>
                        <li class="edgtf-pag-number edgtf-pag-active">
                           <a href="#">1</a>
                        </li>
                        <li class="edgtf-pag-number">
                           <a itemprop="url" href="https://urbango.qodeinteractive.com/blog/right-sidebar/page/2/">2</a>
                        </li>
                        <li class="edgtf-pag-number">
                           <a itemprop="url" href="https://urbango.qodeinteractive.com/blog/right-sidebar/page/3/">3</a>
                        </li>
                        <li class="edgtf-pag-next">
                           <a itemprop="url" href="https://urbango.qodeinteractive.com/blog/right-sidebar/page/2/">
                           <span class="arrow_carrot-right"></span>
                           </a>
                        </li>
                     </ul>
                  </div>-->
                  <!--<div class="edgtf-blog-pagination-wp"></div>-->
               </div>
            </div>
            <div class="edgtf-sidebar-holder edgtf-grid-col-3">
               <aside class="edgtf-sidebar">
                  <!--<div class="edgtf-author-info-widget ">
                     <a itemprop="url" class="edgtf-aiw-image" href="https://urbango.qodeinteractive.com/author/admin/">
                     <img src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-author-img-300x300.jpg" width="288" height="288" alt="Cintia Edge" class="avatar avatar-288 wp-user-avatar wp-user-avatar-288 alignnone photo"> <span class="edgtf-aiw-name vcard author">
                     <span class="fn">
                     Cintia Edge </span>
                     </span>
                     </a>
                     <div class="edgtf-aiw-content">
                        <h5 class="edgtf-aiw-title">About</h5>
                        <p itemprop="description" class="edgtf-aiw-text">Lorem ipsum dolor sit amet,conse adipiscing elit, sed dotempo dicant partem scripserit, doctus :)</p>
                        <div class="edgtf-aiw-social-icons clearfix">
                           <a itemprop="url" href="https://www.facebook.com/" target="_blank">
                           <span aria-hidden="true" class="edgtf-icon-font-elegant social_facebook edgtf-author-social-facebook edgtf-author-social-icon "></span> </a>
                           <a itemprop="url" href="https://twitter.com/" target="_blank">
                           <span aria-hidden="true" class="edgtf-icon-font-elegant social_twitter edgtf-author-social-twitter edgtf-author-social-icon "></span> </a>
                           <a itemprop="url" href="https://www.instagram.com/" target="_blank">
                           <span aria-hidden="true" class="edgtf-icon-font-elegant social_instagram edgtf-author-social-instagram edgtf-author-social-icon "></span> </a>
                        </div>
                     </div>
                  </div>-->
                  <div class="widget edgtf-blog-list-widget">
                     <h5 class="edgtf-widget-title">Latest Posts</h5>
                     <div class="edgtf-blog-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-bl-simple edgtf-one-columns edgtf-normal-space edgtf-bl-pag-no-pagination" data-type="simple" data-number-of-posts="5" data-number-of-columns="one" data-space-between-items="normal" data-orderby="date" data-order="ASC" data-image-size="thumbnail" data-title-tag="h6" data-excerpt-length="10" data-pagination-type="no-pagination" data-max-num-pages="3" data-next-page="2">
                        <div class="edgtf-bl-wrapper edgtf-outer-space">
                           <ul class="edgtf-blog-list">
                           <?php
                           $select_ps2=$db->prepare("SELECT * FROM tbl_post WHERE aktif='1' ORDER BY rand() LIMIT 5"); //sql select query
                           $select_ps2->execute();
                           while($row_ps2=$select_ps2->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
                              <li class="edgtf-bl-item edgtf-item-space clearfix">
                                 <div class="edgtf-bli-inner">
                                    <div class="edgtf-post-image">
                                       <a itemprop="url" href="index.php?com=list_blog_detail&id_=<?php echo $row_ps2['id_']; ?>&title=<?php echo $row_ps2['title']; ?>" title="Warm Places">
                                       <img width="150" height="150" src="foto/article/<?php echo $row_ps2['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="a" loading="lazy"> </a>
                                    </div>
                                    <div class="edgtf-bli-content">
                                       <h6 itemprop="name" class="entry-title edgtf-post-title">
                                          <a itemprop="url" href="index.php?com=list_blog_detail&id_=<?php echo $row_ps2['id_']; ?>&title=<?php echo $row_ps2['title']; ?>" title="<?php echo $row_ps2['title']; ?>">
                                          <?php echo substr($row_ps2['title'],0,30)."..."; ?> </a>
                                       </h6>
                                       <div class="edgtf-post-info-author">
                                          <span class="edgtf-post-info-author-text">
                                          By </span>
                                          <!--<a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">-->
                                          Admin <!--</a>-->
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <?php } ?>
                              
                              
                              
                              
                              
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!--<div id="categories-2" class="widget widget_categories">
                     <h5 class="edgtf-widget-title">Category</h5>
                     <ul>
                     <?php
                           /*$select_rcat=$db->prepare("SELECT * FROM category WHERE aktif='1'"); //sql select query
                           $select_rcat->execute();
                           while($row_rcat=$select_rcat->fetch(PDO::FETCH_ASSOC))
                           {*/
                           ?>
                           <?php
						   /*$select_rjp=$db->prepare("SELECT COUNT(id_) AS jpost FROM tbl_post  WHERE id_category='$row_rcat[id_]'"); //sql select query
                           $select_rjp->execute();
                           $row_rjp=$select_rjp->fetch(PDO::FETCH_ASSOC);*/
						   ?>
                        <li class="cat-item cat-item-220"><a href="index.php?com=list_post&cat=<?php //echo $row_rcat['id_']; ?>" title="<?php //echo $row_ps2['title']; ?>"><?php //echo $row_rcat['nm_category']; ?></a> (<?php //echo $row_rjp['jpost']; ?>)</li>
                        <?php //} ?>
                        
                     </ul>
                  </div>-->
                  <!--<div id="search-3" class="widget widget_search">
                     <form role="search" method="get" class="edgtf-searchform searchform" id="searchform-418" action="#">
                        <label class="screen-reader-text">Search for:</label>
                        <div class="input-holder clearfix">
                           <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:">
                           <button type="submit" class="edgtf-search-submit"><i class="edgtf-icon-font-awesome fas fa-search "></i></button>
                        </div>
                     </form>
                  </div>-->
               </aside>
            </div>
         </div>
      </div>
   </div>
