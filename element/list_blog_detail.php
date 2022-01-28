<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>

<?php
                           $select_post=$db->prepare("SELECT * FROM tbl_post WHERE id_='$_GET[id_]' AND aktif='1'"); //sql select query
                           $select_post->execute();
                           $row_post=$select_post->fetch(PDO::FETCH_ASSOC);
						   
?>
   <div class="edgtf-title-holder edgtf-centered-type edgtf-title-va-header-bottom edgtf-has-bg-image edgtf-bg-parallax" style="height: 600px; background-image: url(&quot;images/bg-artikel.png&quot;); background-position: center -129.15px;" data-height="375">
      <!--<div class="edgtf-title-image">
         <img itemprop="image" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-title-img1.jpg" alt="a">
      </div>-->
      <div class="edgtf-title-wrapper" style="height: 375px">
         <div class="edgtf-title-inner">
            <div class="edgtf-grid">
               <!-- <span class="edgtf-page-subtitle">Check it Out</span> -->
               <!-- <h2 class="edgtf-page-title entry-title" style="color: #ffffff">Pricing Package</h2> -->
               
               <h2 style="padding-top: 25%;"> <span class="font_hitam">BLOG</span> <span class="font_kuning">DETAIL</span>
               <!-- <span class="font_hitam">MEMBERSHIP</span> --></h2>
            </div>
         </div>
      </div>
   </div>

   <div class="edgtf-container" style="margin-top: 100px;">
      <div class="edgtf-container-inner clearfix">
         <div class="edgtf-grid-row edgtf-grid-normal-gutter">
            <div class="edgtf-page-content-holder edgtf-grid-col-9">
<div class="edgtf-blog-holder edgtf-blog-single edgtf-blog-single-standard">
<article id="post-165" class="post-165 post type-post status-publish format-standard has-post-thumbnail hentry category-cowork category-creative tag-music tag-vegetables">
<div class="edgtf-post-content">
<div class="edgtf-post-heading">
<div class="edgtf-post-date">
<div class="edgtf-post-date-day">
<?php 
echo date("d", strtotime($row_post['tgl']));
echo "<br>";
echo date("M", strtotime($row_post['tgl']));
//echo $row_post['image']; 
?>	</div>
<div class="edgtf-post-date-month">
<?php //echo $row_post['image']; ?>	</div>
</div>
<div class="edgtf-post-image">
<img width="1300" height="797" src="foto/article/<?php echo $row_post['image']; ?>" class="attachment-full size-full wp-post-image" alt="a" loading="lazy" > </div>
</div>
<div class="edgtf-post-text">
<div class="edgtf-post-text-inner">

<div class="edgtf-post-text-main">
<h3 itemprop="name" class="entry-title edgtf-post-title">
<?php echo $row_post['title']; ?> </h3> <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 9px"><span class="vc_empty_space_inner"></span></div>
<div class="wpb_text_column wpb_content_element ">
<!--<div class="wpb_wrapper">-->
<!--<p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel et duis dicat prodesset ei, ius ne lorem veritus repudiandae, quidam ocurreret elaboraret te sit. Eos eu nisl nonumy. Has alum iisque mentitum id, tale partem ei mei cibo mundi ea duo, vim exerci phaedrum complectitur et.&nbsp;Saepe veniam nostrud usu at, ullum dolores comprehensam est in, mazim imperdiet sea id. Ad per melius antiopam perpetua, id atqui audire mea, inani copiosae mei eu. Natum scribentur mei cu. Nec ad assum timeam latine, sed inani ea essent vidisse. Eu duo admodum sed molestiae, ne sed quodsi appellantur, vim ex nihil quando. tale partem ei mei.&nbsp;Has iisque mentitum id, tale partem ei mei.</p>-->

<?php echo $row_post['content']; ?>
<!--</div>-->
</div>
<!--<div class="vc_empty_space" style="height: 26px"><span class="vc_empty_space_inner"></span></div>-->
<!--<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<blockquote>
<p style="text-align: left;">Every day is a journey. For my part, I travel not to go anywhere, but to go. I travel for travel’s sake. The great affair is to move.</p>
</blockquote>
</div>
</div>-->
<!--<div class="vc_empty_space" style="height: 26px"><span class="vc_empty_space_inner"></span></div>-->
<!--<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel duis dicat prodesset ei, ius ne lorem veritus repudiandae, quidam ocurreret elaboraret te sit. Eos eu nisl nonumy. Has iisque mentitum id, tale partem ei mei. Saepe veniam nostrud usu at, ullum dolores comprehensam est in, mazim imperdiet sea id. Ad per melius antiopam perpetua, id atqui audire mea, inani copiosae mei eu. Natum scribentur mei cu. Nec ad assum timeam latine, sed ea essent vidisse. Eu duo admodum molestiae, ne sed quodsi appellantur, vim ex essent nihil.</p>
</div>
</div>-->
<!--<div class="vc_empty_space" style="height: 49px"><span class="vc_empty_space_inner"></span></div>--></div></div></div></div><!--<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="edgtf-image-gallery edgtf-grid-list edgtf-disable-bottom-space  edgtf-ig-grid-type edgtf-two-columns edgtf-small-space  edgtf-has-radius ">
<div class="edgtf-ig-inner edgtf-outer-space">
<div class="edgtf-ig-image edgtf-item-space">
<div class="edgtf-ig-image-inner">
<img width="800" height="552" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img1.jpg" class="attachment-full size-full" alt="a" loading="lazy" srcset="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img1.jpg 800w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img1-300x207.jpg 300w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img1-768x530.jpg 768w" sizes="(max-width: 800px) 100vw, 800px"> </div>
</div>
<div class="edgtf-ig-image edgtf-item-space">
<div class="edgtf-ig-image-inner">
<img width="800" height="552" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img2.jpg" class="attachment-full size-full" alt="a" loading="lazy" srcset="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img2.jpg 800w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img2-300x207.jpg 300w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-single-img2-768x530.jpg 768w" sizes="(max-width: 800px) 100vw, 800px"> </div>
</div>
</div>
</div></div></div></div></div>--><!--<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 41px"><span class="vc_empty_space_inner"></span></div>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel duis dicat prodesset ei, ius ne lorem veritus repudiandae, quidam ocurreret elaboraret te sit. Eos eu nisl nonumy. Has iisque mentitum id, tale partem ei mei. Saepe veniam nostrud usu at, ullum dolores comprehensam est in, mazim imperdiet sea id. Ad per melius antiopam perpetua, id atqui audire mea, inani copiosae mei eu. Natum scribentur mei cu.</p>
</div>
</div>
</div></div></div></div>-->
</div>
<!--<div class="edgtf-post-info edgtf-post-info-bottom">
<div class="edgtf-post-info-author">
<span class="edgtf-post-info-author-text">
By </span>
<a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">
Cintia Edge </a>
</div> <div class="edgtf-post-info-bottom-left">
<div class="edgtf-tags-holder">
<div class="edgtf-tags">
<a href="https://urbango.qodeinteractive.com/tag/music/" rel="tag">Music</a><a href="https://urbango.qodeinteractive.com/tag/vegetables/" rel="tag">Vegetables</a> </div>
</div>
</div>
<div class="edgtf-post-info-bottom-right">
<div class="edgtf-blog-share">
<div class="edgtf-social-share-holder edgtf-list">
<p class="edgtf-social-title">Share</p>
<ul>
<li class="edgtf-facebook-share">
<a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=https%3A%2F%2Furbango.qodeinteractive.com%2Fdelicious-coffee%2F', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
<span class="edgtf-social-network-icon social_facebook"></span>
</a>
</li><li class="edgtf-twitter-share">
<a itemprop="url" class="edgtf-share-link" href="#" onclick="window.open('http://twitter.com/home?status=Lorem+ipsum+dolor+sit+amet%2C+cibo+mundi+ea+duo%2C+vim+exerci+phaedrum+complectitur+et%2C+eam+ut+veri+omnium+fabulas.+Mel+https://urbango.qodeinteractive.com/delicious-coffee/', 'popupwindow', 'scrollbars=yes,width=800,height=400');">
<span class="edgtf-social-network-icon social_twitter"></span>
</a>
</li><li class="edgtf-tumblr-share">
<a itemprop="url" class="edgtf-share-link" href="#" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=https%3A%2F%2Furbango.qodeinteractive.com%2Fdelicious-coffee%2F&amp;name=Delicious+Coffee&amp;description=Lorem+ipsum+dolor+sit+amet%2C+cibo+mundi+ea+duo%2C+vim+exerci+phaedrum+complectitur+et%2C+eam+ut+veri+omnium+fabulas.+Mel+et+duis+dicat+prodesset+ei%2C+ius+ne+lorem+veritus+repudiandae%2C+quidam+ocurreret+elaboraret+te+sit.+Eos+eu+nisl+nonumy.+Has+alum+iisque+mentitum+id%2C+tale+partem+ei+mei+cibo+mundi+ea+duo%2C+vim+exerci+phaedrum+complectitur+et.+Saepe+veniam+nostrud+usu+at%2C+ullum+dolores+comprehensam+est+in%2C+mazim+imperdiet+sea+id.+Ad+per+melius+antiopam+perpetua%2C+id+atqui+audire+mea%2C+inani+copiosae+mei+eu.+Natum+scribentur+mei+cu.+Nec+ad+assum+timeam+latine%2C+sed+inani+ea+essent+vidisse.+Eu+duo+admodum+sed+molestiae%2C+ne+sed+quodsi+appellantur%2C+vim+ex+nihil+quando.+tale+partem+ei+mei.+Has+iisque+mentitum+id%2C+tale+partem+ei+mei.', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
<span class="edgtf-social-network-icon social_tumblr"></span>
</a>
</li> </ul>
</div> </div>
</div>
</div>-->
</div>
</div>
</div>
</article> <!--<div class="edgtf-blog-single-navigation">
<a itemprop="url" class="edgtf-blog-single-prev edgtf-has-image" href="https://urbango.qodeinteractive.com/theory-and-practice/">
<img width="150" height="150" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="a" loading="lazy" srcset="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2-150x150.jpg 150w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2-650x650.jpg 650w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2-300x300.jpg 300w, https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"> <span class="edgtf-blog-single-nav-info">
<span class="edgtf-blog-single-nav-title">Theory And Practice</span>
<span class="edgtf-blog-single-nav-label">Previous</span> </span>
</a>
<a itemprop="url" class="edgtf-blog-single-next edgtf-no-image" href="https://urbango.qodeinteractive.com/the-best-places-to-buy-a-wife-for-your-significant-other/">
<span class="edgtf-blog-single-nav-info">
<span class="edgtf-blog-single-nav-title">The best places to Buy A Wife For Your Significant Other</span>
<span class="edgtf-blog-single-nav-label">Next</span> </span>
</a>
</div>-->
<!--<div class="edgtf-related-posts-holder clearfix">
<h4 class="edgtf-related-posts-title">Related Posts</h4>
<div class="edgtf-related-posts-inner clearfix">
<div class="edgtf-related-post">
<div class="edgtf-related-post-inner">
<div class="edgtf-related-post-image">
<a itemprop="url" href="https://urbango.qodeinteractive.com/theory-and-practice/" title="Theory And Practice">
<img width="100%"  src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-2.jpg" class="attachment-full size-full wp-post-image" alt="a" loading="lazy"> </a>
</div>
<h5 itemprop="name" class="entry-title edgtf-post-title"><a itemprop="url" href="https://urbango.qodeinteractive.com/theory-and-practice/" title="Theory And Practice">Theory And Practice</a></h5>
<div class="edgtf-post-info">
<div class="edgtf-post-info-author">
<span class="edgtf-post-info-author-text">
By </span>
<a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">
Cintia Edge </a>
</div> </div>
</div>
</div>
<div class="edgtf-related-post">
<div class="edgtf-related-post-inner">
<div class="edgtf-related-post-image">
<a itemprop="url" href="https://urbango.qodeinteractive.com/world-traveler/" title="World Traveler">
<img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-3.jpg" class="attachment-full size-full wp-post-image" alt="a" loading="lazy"> </a>
</div>
<h5 itemprop="name" class="entry-title edgtf-post-title"><a itemprop="url" href="https://urbango.qodeinteractive.com/world-traveler/" title="World Traveler">World Traveler</a></h5>
<div class="edgtf-post-info">
<div class="edgtf-post-info-author">
<span class="edgtf-post-info-author-text">
By </span>
<a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">
Cintia Edge </a>
</div> </div>
</div>
</div>
<div class="edgtf-related-post">
<div class="edgtf-related-post-inner">
<div class="edgtf-related-post-image">
<a itemprop="url" href="https://urbango.qodeinteractive.com/out-of-sight/" title="Out of Sight">
<img width="100%" src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/blog-img-4.jpg" class="attachment-full size-full wp-post-image" alt="a" loading="lazy"> </a>
</div>
<h5 itemprop="name" class="entry-title edgtf-post-title"><a itemprop="url" href="https://urbango.qodeinteractive.com/out-of-sight/" title="Out of Sight">Out of Sight</a></h5>
<div class="edgtf-post-info">
<div class="edgtf-post-info-author">
<span class="edgtf-post-info-author-text">
By </span>
<a itemprop="author" class="edgtf-post-info-author-link" href="https://urbango.qodeinteractive.com/author/admin/">
Cintia Edge </a>
</div> </div>
</div>
</div>
</div>
</div>-->
<!--<div class="edgtf-comment-holder clearfix" id="comments">
<div class="edgtf-comment-holder-inner">
<div class="edgtf-comments-title">
<h4>Comments</h4>
</div>
<div class="edgtf-comments">
<ul class="edgtf-comment-list">
<li>
<div class="edgtf-comment clearfix">
<div class="edgtf-comment-image"> <img src="https://secure.gravatar.com/avatar/b1ac19a348c000029ef529ecd5a0facb?s=96&amp;d=mm&amp;r=g" width="96" height="96" alt="Avatar" class="avatar avatar-96wp-user-avatar wp-user-avatar-96 alignnone photo avatar-default"> </div>
<div class="edgtf-comment-text">
<div class="edgtf-comment-info">
<h4 class="edgtf-comment-name vcard">
Anne Green </h4>
<div class="edgtf-comment-links">
<a rel="nofollow" class="comment-reply-link" href="https://urbango.qodeinteractive.com/delicious-coffee/?replytocom=15#respond" data-commentid="15" data-postid="165" data-belowelement="comment-15" data-respondelement="respond" data-replyto="Reply to Anne Green" aria-label="Reply to Anne Green">Reply</a> </div>
</div>
<div class="edgtf-text-holder" id="comment-15">
<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper faucibus tincidunt!! <img draggable="false" role="img" class="emoji" alt="🙂" src="https://s.w.org/images/core/emoji/13.0.0/svg/1f642.svg"></p>
<div class="edgtf-comment-date">August 7, 2018</div>
</div>
</div>
</div>
<ul class="children">
<li>
<div class="edgtf-comment clearfix">
<div class="edgtf-comment-image"> <img src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/user-img-7-100x100.jpg" width="96" height="96" alt="Brian Rice" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo"> </div>
<div class="edgtf-comment-text">
<div class="edgtf-comment-info">
<h4 class="edgtf-comment-name vcard">
Brian Rice </h4>
<div class="edgtf-comment-links">
<a rel="nofollow" class="comment-reply-link" href="https://urbango.qodeinteractive.com/delicious-coffee/?replytocom=17#respond" data-commentid="17" data-postid="165" data-belowelement="comment-17" data-respondelement="respond" data-replyto="Reply to Brian Rice" aria-label="Reply to Brian Rice">Reply</a> </div>
</div>
<div class="edgtf-text-holder" id="comment-17">
<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum! <img draggable="false" role="img" class="emoji" alt="🙂" src="https://s.w.org/images/core/emoji/13.0.0/svg/1f642.svg"></p>
<div class="edgtf-comment-date">August 7, 2018</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<li>
<div class="edgtf-comment clearfix">
<div class="edgtf-comment-image"> <img src="https://urbango.qodeinteractive.com/wp-content/uploads/2018/08/user-img-6-100x100.jpg" width="96" height="96" alt="George Moreno" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo"> </div>
<div class="edgtf-comment-text">
<div class="edgtf-comment-info">
<h4 class="edgtf-comment-name vcard">
George Moreno </h4>
<div class="edgtf-comment-links">
<a rel="nofollow" class="comment-reply-link" href="https://urbango.qodeinteractive.com/delicious-coffee/?replytocom=16#respond" data-commentid="16" data-postid="165" data-belowelement="comment-16" data-respondelement="respond" data-replyto="Reply to George Moreno" aria-label="Reply to George Moreno">Reply</a> </div>
</div>
<div class="edgtf-text-holder" id="comment-16">
<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
<div class="edgtf-comment-date">August 7, 2018</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>-->
<!--<div class="edgtf-comment-form">
<div class="edgtf-comment-form-inner">
<div id="respond" class="comment-respond">
<h4 id="reply-title" class="comment-reply-title">Write a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/delicious-coffee/#respond" style="display:none;">Cancel reply</a></small></h4><form action="https://urbango.qodeinteractive.com/wp-comments-post.php" method="post" id="commentform" class="comment-form"><textarea id="comment" placeholder="Your comment" name="comment" cols="45" rows="6" aria-required="true"></textarea><input id="author" name="author" placeholder="Your Name" type="text" value="" aria-required="true">
<input id="email" name="email" placeholder="Your Email" type="text" value="" aria-required="true">
<input id="url" name="url" placeholder="Website" type="text" value="" size="30" maxlength="200">
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
<p class="form-submit"><input name="submit" type="submit" id="submit_comment" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="165" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p><div class="wantispam-required-fields wantispam-form-processed"><input type="hidden" name="wantispam_t" class="wantispam-control wantispam-control-t" value="1630503794"><div class="wantispam-group wantispam-group-q" style="clear: both; display: none;">
<label>Current ye@r <span class="required">*</span></label>
<input type="hidden" name="wantispam_a" class="wantispam-control wantispam-control-a" value="2021">
<input type="text" name="wantispam_q" class="wantispam-control wantispam-control-q" value="7.2.0" autocomplete="off">
</div>
<div class="wantispam-group wantispam-group-e" style="display: none;">
<label>Leave this field empty</label>
<input type="text" name="wantispam_e_email_url_website" class="wantispam-control wantispam-control-e" value="" autocomplete="off">
</div>
<input type="hidden" name="wantispam_d" class="wantispam-control wantispam-control-d" value="2021"></div></form> </div>
</div>
</div>-->
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
