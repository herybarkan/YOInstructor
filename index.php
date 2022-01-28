<?php
ob_start();
session_start();

error_reporting(0);
@ini_set('display_errors', 0);

require_once 'Connections/con.php';
date_default_timezone_set('Asia/Jakarta');



?>
<!DOCTYPE html>
<html lang="en-US" class=" js flexbox flexboxlegacy canvas canvastext no-touch hashchange history draganddrop rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg inlinesvg svgclippaths js_active  vc_desktop  vc_transform  vc_transform ">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!--<meta property="og:url" content="https://yoinstructor.com">-->
      <!--<meta property="og:type" content="article">-->
      <!-- <meta property="og:title" content="UrbanGo"> -->
      <!--<meta property="og:description" content="Welcome to YO Instructor.com">-->
      <!--<meta property="og:description" content="We connect you with the best.">-->
      <!--<meta property="og:url" content="https://urbango.qodeinteractive.com/listing-item/art-exile/" />-->
      



      <!-- <meta property="og:image" content="https://urbango.qodeinteractive.com/wp-content/uploads/2019/04/open_graph.jpg">
       --><!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
      <title>YO Instructor</title>
      <?php
      //
         include ('element/list_css.php');
         include ('element/list_js1.php');
      ?>
      
      <style type="text/css" id="wp-custom-css">
         .edgtf-mobile-header 
         .edgtf-mobile-nav 
            {
               max-height: calc(100vh - 50px);
               overflow-y: scroll;
            }		
      </style>
      <noscript>
         <style> .wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>
<link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!--<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Goldman:wght@700&family=Rubik+Mono+One&family=Roboto:wght@900&family=Roboto:wght@100&display=swap" rel="stylesheet">-->
      
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
      
<!--<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
-->

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" 
/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
<style type="text/css">
#loading-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 5000;
  background: rgba(0, 0, 0, 0.95);
  display: flex;
  align-items: center;
  justify-content: center; }
  #loading-wrapper .spinner-border {
    width: 5rem;
    height: 5rem;
    color: #e7c901; }
	
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   #apDiv1 {
   position: absolute;
   width: 441px;
   height: 115px;
   z-index: 100;
   left: 36px;
   top: 50px;
}
#apDiv2 {
   position: absolute;
   width: 500px;
   height: 191px;
   z-index: 101;
   left: 36px;
   top: 183px;
}
.font_hitam{
   font-size:50px; font-family: 'Roboto';
   color:#FFF;
}
.font_kuning{
   font-size:50px; font-family: 'Roboto';
   color:#ffe45f;
}

.font_hitam2{
   font-size:35px; font-family: 'Roboto';
   color:#000;
}
.font_kuning2{
   font-size:35px; font-family: 'Roboto';
   color:#ffe45f;
}


.font_putih{
   font-size:23px; font-family: 'Heebo', cursive; 
   color:#FFF;
}
.boxh{
   background-color:#ffffff; margin-top: 135px;
}
.bgatas{
   content:url('images/bg-header.png');
   margin-left: -60px;
   right:0px;
   height:100%;
   position:relative;
   max-width:none;
}
.bgcontent3{
   content:url('images/bg-header3.png');
   margin-left: 60px;
}
.bgcontent4{
   content:url('images/bg-header4.png');
   margin-left: 60px;
}
.bgcontent5{
   content:url('images/new_audience_bg.png');
   margin-left: 60px;
}
}

@media only screen 
   and (max-width : 1200px) {
   #apDiv1 {
   position: absolute;
   width: 441px;
   height: 115px;
   z-index: 100;
   left: 36px;
   top: 45px;
}
#apDiv2 {
   position: absolute;
   width: 500px;
   height: 130px;
   z-index: 101;
   left: 36px;
   top: 143px;
}
.font_hitam{
   font-size:30px; font-family: 'Roboto';
   color:#FFF;
}
.font_kuning{
   font-size:30px; font-family: 'Roboto';
   color:#ffe45f;
}

.font_hitam2{
   font-size:30px; font-family: 'Roboto';
   color:#000;
}
.font_kuning2{
   font-size:30px; font-family: 'Roboto';
   color:#ffe45f;
}


.font_putih{
   font-size:16px; font-family: 'Heebo'; 
   color:#FFF;
}
.boxh{
   background-color:#ffffff; margin-top: 0px;
}
.bgatas{
   content:url('images/bg-header2.png');
   width: 150%;
}
.bgcontent3{
   content:url('images/bg-header3.png');
   margin-left: -60px;
}
.bgcontent4{
   content:url('images/bg-header4.png');
   margin-left: -60px;
}
.bgcontent5{
   content:url('images/new_audience_bg.png');
   margin-left: -60px;
}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>
      
<style>
.fluidvids 
   {
      width: 100%; 
      max-width: 100%; 
      position: relative;
   }
.fluidvids-item 
   {
      position: absolute; 
      top: 0px; 
      left: 0px; 
      width: 100%; 
      height: 100%;
   }
   
   
</style>

<style type="text/css">
@media only screen and (min-width: 1367px) and (max-width: 1600px) 
   {
      .edgtf-eh-item-content
      .edgtf-eh-custom-5501 
         { 
            padding: 0 140px 0 140px !important; 
         } 
   }
@media only screen and (min-width: 1025px) and (max-width: 1366px) 
   {
      .edgtf-eh-item-content.edgtf-eh-custom-5501 
         { 
            padding: 0 70px 0 70px !important; 
         } 
   }
@media only screen and (min-width: 769px) and (max-width: 1024px) 
   {
      .edgtf-eh-item-content.edgtf-eh-custom-5501 
      { 
         padding: 0 10px 0 10px !important; 
      } 
   }
@media only screen and (min-width: 681px) and (max-width: 768px) 
   {
      .edgtf-eh-item-content
      .edgtf-eh-custom-5501 
         { 
            padding: 0 3% 0 3% !important; 
         } 
   }
@media only screen and (max-width: 680px) 
   {
      .edgtf-eh-item-content
      .edgtf-eh-custom-5501 
         { 
            padding: 0 0 0 0 !important; 
         } 
   }
</style>

      <!-- <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
         .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
         .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
         .fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_customer_chat_bubble_animated_no_badge{box-shadow:0 3px 12px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_no_badge:hover{box-shadow:0 5px 24px rgba(0, 0, 0, .3)}.fb_customer_chat_bubble_animated_with_badge{box-shadow:-5px 4px 14px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_with_badge:hover{box-shadow:-5px 8px 24px rgba(0, 0, 0, .2)}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_new_ui_mobile_overlay_active{overflow:hidden}@keyframes fb_mpn_landing_page_slide_in{0%{border-radius:50%;margin:0 24px;width:60px}40%{border-radius:18px}100%{margin:0 12px;width:100% - 24px}}@keyframes fb_mpn_landing_page_slide_in_from_left{0%{border-radius:50%;left:12px;margin:0 24px;width:60px}40%{border-radius:18px}100%{left:12px;margin:0 12px;width:100% - 24px}}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes fb_bounce_out_v2_mobile_chat_started{0%{opacity:1;top:0}100%{opacity:0;top:20px}}@keyframes fb_customer_chat_bubble_bounce_in_animation{0%{bottom:6pt;opacity:0;transform:scale(0, 0);transform-origin:center}70%{bottom:18pt;opacity:1;transform:scale(1.2, 1.2)}100%{transform:scale(1, 1)}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}
      </style> -->
      <!-- <script type="text/javascript" charset="UTF-8" src="js/common.js"></script>
      <script type="text/javascript" charset="UTF-8" src="js/util.js"></script> -->
      


   </head>
   <!--<body class="home page-template page-template-full-width page-template-full-width-php page page-id-31 urbango-core-1.0 edgtf-social-login-1.0 woocommerce-js qodef-qi--no-touch qi-addons-for-elementor-1.2.2 urbango-listing-1.0 urbango-ver-1.0 edgtf-smooth-page-transitions edgtf-smooth-page-transitions-fadeout edgtf-grid-1300 edgtf-content-is-behind-header edgtf-wide-dropdown-menu-content-in-grid edgtf-light-header edgtf-sticky-header-on-scroll-down-up edgtf-dropdown-default edgtf-header-standard edgtf-menu-area-shadow-disable edgtf-menu-area-in-grid-shadow-disable edgtf-menu-area-border-disable edgtf-menu-area-in-grid-border-disable edgtf-logo-area-border-disable edgtf-logo-area-in-grid-border-disable edgtf-woocommerce-columns-3 edgtf-woo-normal-space edgtf-woo-pl-info-below-image edgtf-woo-single-thumb-below-image edgtf-woo-single-has-pretty-photo edgtf-default-mobile-header edgtf-sticky-up-mobile-header edgtf-header-top-enabled edgtf-slide-from-header-bottom wpb-js-composer js-comp-ver-6.0.5 vc_responsive elementor-default elementor-kit-15490" itemscope="" itemtype="http://schema.org/WebPage" cz-shortcut-listen="true">-->
   
   <body class="product-template-default single single-product postid-477 urbango-core-1.0 edgtf-social-login-1.0 woocommerce woocommerce-page woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.2.2 urbango-listing-1.0 urbango-ver-1.0 edgtf-smooth-page-transitions edgtf-smooth-page-transitions-fadeout edgtf-grid-1300 edgtf-wide-dropdown-menu-content-in-grid edgtf-sticky-header-on-scroll-down-up edgtf-dropdown-default edgtf-header-standard edgtf-menu-area-in-grid-shadow-disable edgtf-menu-area-in-grid-border-disable edgtf-logo-area-border-disable edgtf-logo-area-in-grid-border-disable edgtf-page-has-title edgtf-woocommerce-page edgtf-woo-single-page edgtf-woocommerce-columns-4 edgtf-woo-normal-space edgtf-woo-pl-info-below-image edgtf-woo-single-thumb-below-image edgtf-woo-single-has-pretty-photo edgtf-default-mobile-header edgtf-sticky-up-mobile-header edgtf-header-top-enabled edgtf-slide-from-header-bottom wpb-js-composer js-comp-ver-6.0.5 vc_responsive elementor-default elementor-kit-15490" itemscope itemtype="http://schema.org/WebPage">
   
   <div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<!--<span class="sr-only">Loading...</span>-->
                <span style="color:#FFF;"><img src="images/logo_loader.png" width="100" height="186"></span>
			</div>
		</div>
   
   
      <div class="edgtf-wrapper">
         <div class="edgtf-wrapper-inner">
            
            
            <?php 
            //
			echo $_SESSION['kd_member'];
            include ('modul/menu/topbar.php');
            include ('modul/menu/navbar.php');
            include ('modul/menu/navbar_mobile.php');
            ?>
            <!--<a id="edgtf-back-to-top" href="#" class="off">
            <span class="edgtf-icon-stack">
            <i class="edgtf-icon-font-awesome fa fa-angle-up "></i> </span>
            </a>-->
            <div class="edgtf-content" style="margin-top: -137px;">
               <?php
               //
                  if ($_GET['com']=="" && $_GET['kd_inst']=="") 
				  	{
$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$select_stmt_in=$db->prepare("INSERT INTO tbl_visit (kd_instructor, ip_address, tgl, jam, kd_user,page) VALUES ('$_GET[kd_inst]', '$ip', '$tglin', '$jamin', '$_SESSION[yo_kd_user]','home')");	
$select_stmt_in->execute();
               ?>

               <div class="edgtf-content-inner" style="background-color:#FFF;">
                     
                  <?php
                  //
                     //include ('element/slider.php');
                  include ('element/section_atas.php');
                  include ('element/search_box.php');
                  ?>
                  <div class="edgtf-full-width">
                     <div class="edgtf-full-width-inner">
                        <div class="edgtf-grid-row">
                           <div class="edgtf-page-content-holder edgtf-grid-col-12">
                              
                              
                              <?php
                                 //
                              //include ('element/box_icon.php');

                              include ('modul/front/category.php');
                              //include ('element/popular_category.php');
                              include ('element/top_instructor2.php');
                              include ('element/latest_post.php');
                              include ('element/how_it_work_front.php');
                              //include ('element/new_audience.php');
                              //include ('element/grow_business.php');
                              //include ('element/wellness.php');
                              //include ('element/block_info.php');
                              //include ('element/testimoni.php');
                              //include ('element/get_started.php');
                              //include ('element/parallax1.php');
                              //include ('element/title_list_location.php');
                              //include ('element/list_location.php');
                              //include ('element/viewmore.php');
                              //include ('element/parallax2.php');
                              //include ('element/parallax3.php');
                              

                              //include ('element/blog_list.php');
                              //include ('element/box_bawah.php');
                              //include ('element/box_bawah2.php');
                              ?>

                              

                           </div>
                        </div>
                     </div>
                  </div>

               <?php } 

               elseif ($_GET['com']=="list_blog") {include ('element/list_blog.php');}
               elseif ($_GET['com']=="list_blog_detail") {include ('element/list_blog_detail.php');}
			   elseif ($_GET['com']=="list_post") {include ('element/all_post.php');}
               elseif ($_GET['com']=="about_us") {include ('element/about_us.php');}
               elseif ($_GET['com']=="how_it_work") {include ('element/how_it_work.php');}
               elseif ($_GET['com']=="pricing") {include ('element/pricing.php');}
               elseif ($_GET['com']=="contact_us") {include ('element/contact_us.php');}
               elseif ($_GET['com']=="become_partner") {include ('element/become_partner.php');}

               elseif ($_GET['com']=="sub_category") {include ('modul/listing/sub_category.php');}
			   elseif ($_GET['com']=="all_category") {include ('modul/front/all_category.php');}
               elseif ($_GET['com']=="listing") {include ('modul/listing//listing2.php');}
			   elseif ($_GET['com']=="listing_all") {include ('modul/listing//listing_all.php');}
			   elseif ($_GET['com']=="result_search") {include ('modul/listing//listing_search.php');}
               elseif ($_GET['com']=="listing_detail") {include ('modul/listing/listing_detail.php');}
               elseif ($_GET['com']=="bprofile") {include ('modul/listing/bprofile_check.php');}
			   elseif ($_GET['com']=="mprofile") {include ('modul/listing/mprofile.php');}
               elseif ($_GET['com']=="registration") {include ('modul/registrasi/registrasi_form.php');}
               elseif ($_GET['com']=="konf_registration") {include ('modul/registrasi/konf_registration.php');}
			   /*elseif ($_GET['com']=="booking") {include ('tes/datepicker1.php');}*/
			   elseif ($_GET['com']=="booking") {include ('modul/booking/fbooking.php');}
			   elseif ($_GET['com']=="porder") {include ('modul/booking/porder.php');}
			   elseif ($_GET['com']=="konf_booking") {include ('modul/booking/konf_booking.php');}
			   elseif ($_GET['com']=="konf_payment") {include ('modul/payment/konf_payment.php');}
			   elseif ($_GET['com']=="konf_payment_fail") {include ('modul/payment/PaypalFailed.php');}
			   elseif ($_GET['com']=="konf_payment_cancel") {include ('modul/payment/payment-cancelled.php');}
			   
               elseif ($_GET['com']=="login") {include ('modul/login/login.php');}
			   elseif ($_GET['com']=="lost_password") {include ('modul/login/lost_password.php');}
			   elseif ($_GET['com']=="conf_reset_password_ok") {include ('modul/login/crp_ok.php');}
			   elseif ($_GET['com']=="crp_done") {include ('modul/login/crp_done.php');}
			   elseif ($_GET['com']=="conf_reset_password_fail") {include ('modul/login/crp_fail.php');}
			   elseif ($_GET['com']=="form_reset_password") {include ('modul/login/form_crp_ok.php');}
			   
			   elseif ($_GET['com']=="upgrade_account") {include ('modul/upgrade/fupgrade.php');}
			   elseif ($_GET['com']=="next_payment") {include ('modul/upgrade/fnext_payment.php');}
			   elseif ($_GET['com']=="konf_payment_upgrade") {include ('modul/payment/konf_payment_upgrade.php');}
			   elseif ($_GET['com']=="konf_payment_upgrade2") {include ('modul/payment/konf_payment_upgrade2.php');}
			   elseif ($_GET['com']=="konf_payment_extend") {include ('modul/payment/konf_payment_extend.php');}
			   elseif ($_GET['com']=="konf_payment_extend2") {include ('modul/payment/konf_payment_extend2.php');}
			   elseif ($_GET['com']=="fpayment_bt") {include ('modul/upgrade/fpayment_bt.php');}
			   elseif ($_GET['com']=="fextend_bt") {include ('modul/upgrade/fextend_bt.php');}
			   
			   elseif ($_GET['com']=="pp") {include ('element/privacy.php');}
			    elseif ($_GET['com']=="tac") {include ('element/tac.php');}
               //elseif ($_GET['com']=="registration") {include ('element/registrasi_form.php');}
			   
			   
               
			   	   if ($_GET['com']=="" && $_GET['kd_inst']!="") {include ('modul/listing/bprofile2.php');}
			   //elseif ($_GET['com']=="" && $_GET['kd_mem']!="") {include ('modul/listing/bprofile2.php');}
               ?>
               </div>
            </div>
            <?php
               //
			   
               include ('element/footer.php');
               //include ('element/tooltip.php');
            ?>
            
         </div>
      </div>

      


     <!--  <div class="rbt-toolbar" data-theme="UrbanGo" data-featured="" data-button-position="60%" data-button-horizontal="right" data-button-alt="no">
         <section class="rbt-sidearea rbt-edge rbt-btn-horizontal-right rbt-btn-alt-no rbt-loaded rbt-scrolled">
            <div class="rbt-theme-dropdown" style="top: calc(60% - 25px);">
               <div class="rbt-btn">
                  <span class="rbt-icon">
                     <svg x="0px" y="0px" viewBox="0 0 87 87" style="fill: #fff;height: 26px;">
                        <path d="M55.4,81.5c6.1-11.1,5.2-16.1-4.3-24.3c6.1-3.5,9.5-8.5,9.1-15.7c-0.5-8.2-7.7-14.7-16.3-14.6
                           c-8.5,0.1-15.6,6.7-15.9,15c-0.3,8.5,5.9,15.8,14.3,16.6c1.4,0.1,2.8,0.2,4.2,0.5c5.9,1.2,10.2,6.7,9.8,12.6
                           c-0.4,6.4-5.5,11.4-11.8,11.7C24.9,84.2,5.9,68.5,3.2,49.3C-0.1,26.9,14.4,6.8,36.4,2.8c22.3-4,43.4,10,48.1,32
                           c4.3,20-8.6,41.2-28.4,46.7C55.9,81.5,55.6,81.5,55.4,81.5z"></path>
                     </svg>
                     <svg width="32" height="32" viewBox="0 0 32 32" style="fill: #fff;height: 20px;">
                        <path d="M 4,15C 4,15.552, 4.448,16, 5,16l 19.586,0 l-4.292,4.292c-0.39,0.39-0.39,1.024,0,1.414 c 0.39,0.39, 1.024,0.39, 1.414,0l 6-6c 0.092-0.092, 0.166-0.202, 0.216-0.324C 27.972,15.26, 28,15.132, 28,15.004c0-0.002,0-0.002,0-0.004 l0,0c0-0.13-0.026-0.26-0.078-0.382c-0.050-0.122-0.124-0.232-0.216-0.324l-6-6c-0.39-0.39-1.024-0.39-1.414,0 c-0.39,0.39-0.39,1.024,0,1.414L 24.586,14L 5,14 C 4.448,14, 4,14.448, 4,15z"></path>
                     </svg>
                  </span>
                  <span class="rbt-text-name">RELATED</span>
               </div>
            </div>
            <div class="rbt-purchase" style="top: calc(60% + 25px);">
               <a target="_blank" href="https://1.envato.market/c/1310726/275988/4415?u=https%3A%2F%2Fthemeforest.net%2Fcheckout%2Ffrom_item%2F22712624%3Flicense%3Dregular%26aso=direct%26aca=direct%26aid=mikado">
                  <span class="rbt-icon">
                     <svg x="0px" y="0px" viewBox="0 0 24 24" style="fill: #ee2852; height: 16px;">
                        <circle cx="9" cy="21" r="2"></circle>
                        <circle cx="20" cy="21" r="2"></circle>
                        <path d="M23.8,5.4C23.6,5.1,23.3,5,23,5H6.8L6,0.8C5.9,0.3,5.5,0,5,0H1C0.4,0,0,0.4,0,1s0.4,1,1,1h3.2L5,6.2c0,0,0,0.1,0,0.1
                           l1.7,8.3C7,16,8.2,17,9.6,17c0,0,0,0,0.1,0h9.7c1.5,0,2.7-1,3-2.4L24,6.2C24,5.9,24,5.6,23.8,5.4z"></path>
                     </svg>
                  </span>
                  <span class="rbt-purchase-text">BUY NOW</span>
               </a>
            </div>
            <div class="rbt-list-holder">
               <div class="rbt-list">
                  <div class="rbt-list-inner">
                     <div class="rbt-logo">
                        <a href="https://qodeinteractive.com/" target="_blank">
                           <div class="logo-svg-holder">
                              <svg x="0px" y="0px" viewBox="0 0 87 87" style="fill: #ee2852; height: 40px;">
                                 <path d="M55.4,81.5c6.1-11.1,5.2-16.1-4.3-24.3c6.1-3.5,9.5-8.5,9.1-15.7c-0.5-8.2-7.7-14.7-16.3-14.6
                                    c-8.5,0.1-15.6,6.7-15.9,15c-0.3,8.5,5.9,15.8,14.3,16.6c1.4,0.1,2.8,0.2,4.2,0.5c5.9,1.2,10.2,6.7,9.8,12.6
                                    c-0.4,6.4-5.5,11.4-11.8,11.7C24.9,84.2,5.9,68.5,3.2,49.3C-0.1,26.9,14.4,6.8,36.4,2.8c22.3-4,43.4,10,48.1,32
                                    c4.3,20-8.6,41.2-28.4,46.7C55.9,81.5,55.6,81.5,55.4,81.5z"></path>
                              </svg>
                           </div>
                           <p class="logo-text-holder">Qode Interactive</p>
                        </a>
                     </div>
                     <span class="rbt-list-related">Related Themes</span>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/tiare-wedding-vendor-directory-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Tiare - Wedding Vendor Directory Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview.png" alt="Tiare" class="">
                           </div>
                           <span class="rbt-theme-name">Tiare</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/findall-business-directory-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="FindAll - Business Directory Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview(1).png" alt="FindAll" class="">
                           </div>
                           <span class="rbt-theme-name">FindAll</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/staffscout-job-board-and-employment-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="StaffScout - Job Board and Employment Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview(2).png" alt="StaffScout" class="">
                           </div>
                           <span class="rbt-theme-name">StaffScout</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/bizfinder-business-directory-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="BizFinder - Business Directory Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview(3).png" alt="BizFinder" class="">
                           </div>
                           <span class="rbt-theme-name">BizFinder</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/findme-urban-directory-listing-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="FindMe - Directory Listing Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview(4).png" alt="FindMe" class="">
                           </div>
                           <span class="rbt-theme-name">FindMe</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/cityrama-local-listing-city-guide-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Cityrama - Listing &amp; City Guide Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover">
                              <img itemprop="image" width="225" height="114" src="images/00_preview.__large_preview(5).png" alt="Cityrama" class="">
                           </div>
                           <span class="rbt-theme-name">Cityrama</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/lister-business-finder-directory-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Lister - Business Directory &amp; Listing Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/226312527/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Lister">
                           </div>
                           <span class="rbt-theme-name">Lister</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/search-go-smart-directory-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Search &amp; Go - Directory WordPress Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/242390793/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Search &amp; Go">
                           </div>
                           <span class="rbt-theme-name">Search &amp; Go</span>
                           <span class="rbt-theme-tag">listing</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <span class="rbt-list-new">New Themes</span>
                     <a target="_blank" href="https://thorsten.qodeinteractive.com/landing/?utm_campaign=edge&amp;utm_source=toolbar" title="Thorsten - Business Consulting">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/352826189/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Thorsten">
                           </div>
                           <span class="rbt-theme-name">Thorsten</span>
                           <span class="rbt-theme-tag"></span>
                           <span class="rbt-theme-price">$34</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/gracey-creative-portfolio-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Gracey - Creative Portfolio Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/352539391/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Gracey">
                           </div>
                           <span class="rbt-theme-name">Gracey</span>
                           <span class="rbt-theme-tag">portfolio</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/amoli-fashion-photography-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Amoli - Fashion Photography Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/352423420/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Amoli">
                           </div>
                           <span class="rbt-theme-name">Amoli</span>
                           <span class="rbt-theme-tag">photography</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/valeska-fashion-ecommerce-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Valeska - Fashion eCommerce Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/350947071/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Valeska">
                           </div>
                           <span class="rbt-theme-name">Valeska</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/askka-candle-shop/?utm_campaign=edge&amp;utm_source=toolbar" title="Askka - Candle Shop">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/351052418/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Askka">
                           </div>
                           <span class="rbt-theme-name">Askka</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/giada-jewelry-and-watch-store/?utm_campaign=edge&amp;utm_source=toolbar" title="Giada - Jewelry and Watch Store">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/349566818/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Giada">
                           </div>
                           <span class="rbt-theme-name">Giada</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/fonster-creative-portfolio-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Fönster - Creative Portfolio Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/349566794/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Fönster">
                           </div>
                           <span class="rbt-theme-name">Fönster</span>
                           <span class="rbt-theme-tag">portfolio</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/tobel-modern-furniture-store/?utm_campaign=edge&amp;utm_source=toolbar" title="Töbel - Modern Furniture Store">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/349479967/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Töbel">
                           </div>
                           <span class="rbt-theme-name">Töbel</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/thalassa-seafood-restaurant-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Thalassa - Seafood Restaurant Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/349399251/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Thalassa">
                           </div>
                           <span class="rbt-theme-name">Thalassa</span>
                           <span class="rbt-theme-tag">food &amp; restaurants</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/leonie-nail-and-beauty-salon/?utm_campaign=edge&amp;utm_source=toolbar" title="Léonie - Nail and Beauty Salon">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/348946884/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Léonie">
                           </div>
                           <span class="rbt-theme-name">Léonie</span>
                           <span class="rbt-theme-tag">lifestyle</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/drew-restaurant-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Drew - Restaurant Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/347679393/00_preview.__large_preview.jpg" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Drew">
                           </div>
                           <span class="rbt-theme-name">Drew</span>
                           <span class="rbt-theme-tag">food &amp; restaurants</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/hugge-elementor-woocommerce-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Hugge - Elementor WooCommerce Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/347008073/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Hugge">
                           </div>
                           <span class="rbt-theme-name">Hugge</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/fokkner-real-estate-and-property-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Fokkner - Real Estate and Property Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/346910017/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Fokkner">
                           </div>
                           <span class="rbt-theme-name">Fokkner</span>
                           <span class="rbt-theme-tag">real estate</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/valiance-business-consulting/?utm_campaign=edge&amp;utm_source=toolbar" title="Valiance - Business Consulting">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/346767989/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Valiance">
                           </div>
                           <span class="rbt-theme-name">Valiance</span>
                           <span class="rbt-theme-tag">business</span>
                           <span class="rbt-theme-price">$75</span>
                        </div>
                     </a>
                     <a target="_blank" href="https://qodeinteractive.com/wordpress-theme/pome-food-store-wordpress-theme/?utm_campaign=edge&amp;utm_source=toolbar" title="Pome - Food Store WordPress Theme">
                        <div class="rbt-theme">
                           <div class="rbt-img-hover rbt-lazy-load">
                              <img itemprop="image" data-image="https://previews.customer.envatousercontent.com/files/345989967/00_preview.__large_preview.png" width="225" height="114" src="images/rbt-placeholder.jpg" alt="Pome">
                           </div>
                           <span class="rbt-theme-name">Pome</span>
                           <span class="rbt-theme-tag">woocommerce</span>
                           <span class="rbt-theme-price">$69</span>
                        </div>
                     </a>
                    
                  </div>
               </div>
               <div class="rbt-list-bottom">
                  <a class="rbt-link-holder" href="https://qodeinteractive.com/" target="_blank">
                     <p class="link-text-holder">VIEW ALL QODE THEMES</p>
                     <div class="link-svg-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9" height="9" viewBox="0 0 9 9">
                           <image width="9" height="9" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAQAAABKmM6bAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfjBhISBAPLk0qYAAAAZ0lEQVQI103OsQnCUACE4S9qmofLWLpDcChXEPcIksoF3CG94ALaBDmLl0j+Kw7urjgxq2TMmBIblWLQag1KE2jcbT1w9F1WN53JpNPvQFzm6uO6rFaso/3s/xOHPHOKkFcq75xr+QPBNi/UsU/OawAAAABJRU5ErkJggg=="></image>
                        </svg>
                     </div>
                  </a>
               </div>
            </div>
         </section>
      </div> -->
     <?php
      //
         include ('element/modal_login.php');
      ?>     <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T772QJ"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
      <?php
      //
         include ('element/list_js2.php');
      ?>

      

      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
         </div>
      </div>
      <iframe id="ssIFrame_google" sandbox="allow-scripts allow-same-origin" aria-hidden="true" frame-border="0" style="position: absolute; width: 1px; height: 1px; inset: -9999px; display: none;" src="images/iframe.html"></iframe>

<?php if ($_GET['com']=="registration" || $_GET['com']=="bprofile") { ?>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
			  	<div class="modal-dialog modal-lg" role="document" style="z-index:10000;">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
                        <?php if ($_GET['com']=="registration") { ?>
			      			<button type="button" id="crop" class="btn btn-warning">Crop</button>
                         <?php } elseif ($_GET['com']=="bprofile") { ?>
			      			<button type="button" id="crop2" class="btn btn-warning">Crop</button>
                         <?php } ?>  
			        		<!--<button type="button" id="cancel"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>-->
			      		</div>
			    	</div>
			  	</div>
			</div>
            
            <!--======================================================================-->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
			  	<div class="modal-dialog modal-lg" role="document" style="z-index:10000;">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image3" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
                        
			      			<button type="button" id="crop3" class="btn btn-warning">Crop</button>
                        
			        		<!--<button type="button" id="cancel"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>-->
			      		</div>
			    	</div>
			  	</div>
			</div>
            <!--======================================================================-->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
			  	<div class="modal-dialog modal-lg" role="document" style="z-index:10000;">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image4" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
                        
			      			<button type="button" id="crop4" class="btn btn-warning">Crop</button>
                        
			        		<!--<button type="button" id="cancel"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>-->
			      		</div>
			    	</div>
			  	</div>
			</div>
            <!--======================================================================-->
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
			  	<div class="modal-dialog modal-lg" role="document" style="z-index:10000;">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image5" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
                        
			      			<button type="button" id="crop5" class="btn btn-warning">Crop</button>
                        
			        		<!--<button type="button" id="cancel"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>-->
			      		</div>
			    	</div>
			  	</div>
			</div>
            <script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js" id="jquery-easing-1.3-js"></script>
            <?php } ?>
            
<!--<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js" id="jquery-easing-1.3-js"></script>-->
   </body>
</html>