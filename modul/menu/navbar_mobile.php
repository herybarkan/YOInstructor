<?php
ob_start();
session_start();

require_once 'Connections/con.php';

$select_stmt_inst=$db->prepare("SELECT * FROM instructor WHERE kd_instructor='$_SESSION[yo_kd_user]'");
$select_stmt_inst->execute();
$row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

?>
<header class="edgtf-mobile-header" style="margin-bottom: 0px;">
               <div class="edgtf-mobile-header-inner">
                  <div class="edgtf-mobile-header-holder">
                     <div class="edgtf-grid">
                        <div class="edgtf-vertical-align-containers">
                           <div class="edgtf-vertical-align-containers">
                              <div class="edgtf-position-left">
                                 <div class="edgtf-position-left-inner">
                                    <div class="edgtf-mobile-logo-wrapper">
                                       <a itemprop="url" href="index.php" style="height: 41px">
                                       <img itemprop="image" src="images/logo.png" alt="Mobile Logo">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="edgtf-mobile-menu-opener edgtf-mobile-menu-opener-icon-pack">
                                 <a href="javascript:void(0)">
                                 <span class="edgtf-mobile-menu-icon">
                                 <i class="edgtf-icon-font-awesome fa fa-bars "></i> </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <nav class="edgtf-mobile-nav">
                     <div class="edgtf-grid">
                        <ul id="menu-main-menu-navigation-2" class="">
                           
                           <!--<li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-active-item"><a href="index.php" class=" current "><span>Home</span></a></li>-->
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="index.php" class=" current "><span>Home</span></a></li>
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=how_it_work" class=" current "><span>How it Works</span></a></li>
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=about_us" class=" current "><span>About us</span></a></li>
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=pricing" class=" current "><span>Pricing</span></a></li>
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=list_blog" class=" current "><span>Blog</span></a></li>
                           
                           <!--<li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-active-item"><a href="?com=become_partner" class=" current "><span>Become a Partner</span></a></li>-->

                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=contact_us" class=" current "><span>Contact Us</span></a></li>
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><hr></li>
                           
                           <?php if ($_SESSION['yo_uname']=="") { ?>
                           <!--<li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="#" class="edgtf-login-opener"><span>Join Us</span></a></li>-->
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="index.php?com=registration&type=instructor" class="edgtf-login-openerx"><span>Join Us</span></a></li>
                           <?php } ?>
                           
                           <?php if ($_SESSION['yo_uname']=="") { ?>
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="?com=login" class="edgtf-login-openerx"><span>Login</span></a></li>
                           <?php } elseif ($_SESSION['yo_uname']!="") { ?>
                           
                           <span class="edgtf-login-text">Welcome <span style="color:#ffe45f;"><?php echo $row_inst['first_name']; ?> <?php echo $row_inst['last_name']; ?></span></span>
                           
                           <hr>
                           <?php
						if ($_SESSION['yo_grup']=="1") { ?>
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="./admin/" class="edgtf-login-openerx"><span>Admin</span></a>
                           </li>
                         <?php } 
                        elseif ($_SESSION['yo_grup']=="3") { ?>
                        <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="index.php?com=bprofile&kd_inst=<?php echo $_SESSION['yo_kd_user']; ?>" class="edgtf-login-openerx"><span>My Profile</span></a>
                        
                        
                        <?php } ?>
                        
                           
                           <li id="mobile-menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-31 current_page_item edgtf-item"><a href="modul/login/logout.php" class="edgtf-login-openerx"><span>Logout</span></a>
                           </li>
                           
                            <?php } ?>
                           
                           
                           
                           
                           
                           
                           
                           
                        </ul>
                     </div>
                  </nav>
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
            </header>