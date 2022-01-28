<?php
ob_start();
session_start();

require_once 'Connections/con.php';

if ($_SESSION['yo_grup']=="1") {
$select_stmt_inst=$db->prepare("SELECT * FROM user_ WHERE kd_user='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Super Admin";
}
elseif ($_SESSION['yo_grup']=="2") {
$select_stmt_inst=$db->prepare("SELECT * FROM staff WHERE kd_staff='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Staff";
}
elseif ($_SESSION['yo_grup']=="3") {
$select_stmt_inst=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Instructor";
}
elseif ($_SESSION['yo_grup']=="4") {
$select_stmt_inst=$db->prepare("SELECT * FROM member WHERE kd_member='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

$stsx="Member";
}

?>
<div class="edgtf-top-bar edgtf-light">
               <div class="edgtf-vertical-align-containers">
                  <div class="edgtf-position-left">
                     <div class="edgtf-position-left-inner">
                        <div id="text-2" class="widget widget_text edgtf-top-bar-widget">
                           <div class="textwidget">
                              <p>Follow us</p>
                           </div>
                        </div>
                        <div class="widget edgtf-social-icons-group-widget text-align-left"> 
                        
                        <a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://www.facebook.com" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-facebook-f"></span> 
                        </a>
                        
                        <a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://www.instagram.com" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-instagram"></span> 
                        </a>
                        
                        <!--<a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://www.tripadvisor.com/" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-tripadvisor"></span> 
                        </a>-->
                        
                        <a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://www.youtube.com" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-youtube"></span> 
                        </a>
                           
                        <!--<a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://vimeo.com/" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-vimeo-v"></span> 
                        </a>-->
                           
                        <!--<a class="edgtf-social-icon-widget-holder edgtf-icon-has-hover" style="margin: 0 7px;" href="https://www.pinterest.com/qodeinteractive/" target="_blank">
                           <span class="edgtf-social-icon-widget fab fa-pinterest-p"></span> 
                        </a>-->
                        
                        </div>
                     </div>
                  </div>
                  <div class="edgtf-position-right">
                     <div class="edgtf-position-right-inner">
                     	<?php if ($_SESSION['yo_uname']=="") { ?>
                        <!--<div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        <a href="#" class="edgtf-login-opener">-->
                           <!--<i class="edgtf-icon-font-awesome far fa-user edgtf-logged-in-icon"></i> -->
                           <!--<span class="edgtf-login-text">Join us</span>
                        </a>
                        </div>-->
                        
                         <div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        <a href="index.php?com=registration&type=instructor" class="edgtf-login-openerx">
                           <span class="edgtf-login-text">Join us</span>
                        </a>
                        </div>
                        
                        <?php } ?>
                        <?php if ($_SESSION['yo_uname']=="") { ?>
                        <div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        <a href="?com=login" class="edgtf-login-openerx">
                           <!--<i class="edgtf-icon-font-awesome fas fa-lock edgtf-logged-in-icon" style="color:#ffe45f;"></i> -->
                           <span class="edgtf-login-text">Login</span>
                        </a>
                        </div>
                        <?php } elseif ($_SESSION['yo_uname']!="") { ?>
                        <div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        
                           <span class="edgtf-login-text">Welcome <span style="color:#ffe45f;">
						   <?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></span><!--(<?php //echo $stsx; ?>)--></span>
                        
                        </div>
                        
                        <div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        <?php
						if ($_SESSION['yo_grup']=="1") { ?>
                        <a href="./admin/" class="edgtf-login-openerx">
                           <span class="edgtf-login-text">Admin</span>
                        </a>
                        <?php } 
                        elseif ($_SESSION['yo_grup']=="3") { ?>
                        <a href="index.php?com=bprofile&kd_inst=<?php echo $_SESSION['yo_kd_user']; ?>" class="edgtf-login-openerx">
                           <span class="edgtf-login-text">My Profile</span>
                        </a>
                        <?php } ?>
                        </div>
                        
                        <div class="widget edgtf-login-register-widget edgtf-user-not-logged-in">
                        <a href="modul/login/logout.php" class="edgtf-login-openerx">
                           <!--<i class="edgtf-icon-font-awesome fas fa-unlock edgtf-logged-in-icon" style="color:#ffe45f;"></i> -->
                           <span class="edgtf-login-text">Logout</span>
                        </a>
                        </div>
                        <?php } ?>
                        
                        <!--<div class="edgtf-add-listing-widget">
                           <a itemprop="url" class="edgtf-add-listing-button edgtf-login-opener" href="https://urbango.qodeinteractive.com/#">
                           <i class="edgtf-icon-font-awesome far fa-plus-square edgtf-alw-icon"></i> <span class="edgtf-alw-text">Add listing</span>
                           </a>
                        </div>-->
                     </div>
                  </div>
               </div>
               <!--<div class="edgtf-slide-from-header-bottom-holder">
                  <form action="https://urbango.qodeinteractive.com/" method="get">
                     <div class="edgtf-form-holder">
                        <input type="text" placeholder="Search here..." name="s" class="edgtf-search-field" autocomplete="off" required>
                        <button type="submit" class="edgtf-search-submit edgtf-search-submit-icon-pack">
                        <i class="edgtf-icon-font-awesome fa fa-search "></i> </button>
                     </div>
                  </form>
               </div>-->
            </div>