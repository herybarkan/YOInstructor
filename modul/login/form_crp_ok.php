<?php
ob_start();
session_start();
require_once 'Connections/con.php';

date_default_timezone_set('Asia/Jakarta');

$kduser=$_GET['kdu'];

$select_cu=$db->prepare("SELECT kd_user, username, grup, aktif FROM user_ WHERE md5(kd_user)='$_GET[kdu]'");
$select_cu->execute();
$row_cu=$select_cu->fetch(PDO::FETCH_ASSOC);
?>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />-->
<!-- CSS Files -->
<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {

.posisi_top{
	margin-top:30px;
	}
}

@media only screen 
   and (max-width : 1200px) {

.posisi_top{
	margin-top:-90px;
	}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

 <!--===============================================================-->
      
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/jquery.bootstrap.js" type="text/javascript"></script>
            <script src="js/material-bootstrap-wizard.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            
            
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js" id="jquery-easing-1.3-js"></script>
      <!--================================================================-->
      
      
<!-- CSS Just for demo purpose, don't include it in your project -->
<!--<link href="css/demo.css" rel="stylesheet" />-->
<div class="image-container set-full-height posisi_top" style="background-image: url('images/bg_reg1.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
               <div class="card wizard-card" data-color="yellow" id="wizardProfile" style="margin-top: 30px;">
                  <form action="modul/login/in_reset_password.php" method="POST">
                     <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                     <div class="wizard-header">
                        <h3 class="wizard-title">
                           Reset Password
                        </h3>
                       
                     </div>
                     <div class="wizard-navigation">
                        <ul>
                           <li><a href="#bio" data-toggle="tab">Form Reset Password</a></li>
                           <!--<li><a href="#contact" data-toggle="tab">Contact</a></li>-->
                        </ul>
                     </div>
                     <!--=================================================================-->
                     <?php
					 if ($row_cu['kd_user']!="") { ?>
                     <div class="tab-content" style="min-height:0px;">
                        <div class="tab-pane" id="bio">
                           <div class="row">
                           
                              
                              <h4 class="info-text"> Please enter <br>your New Password</h4>
                              
                              <div class="col-sm-10 col-sm-offset-1">
                              
                              <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="material-icons">email </i>
                                    </span>
                                <div class="form-group">
                                       <label class="control-label">Your Email / Username<br> </label>
                                       <?php echo $row_cu['username']; ?>
                                  <input name="hf_kdu" type="hidden" id="hf_kdu" value="<?php echo $row_cu['kd_user']; ?>" />
                                    </div>
                                 </div>
                                 
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                    </span>
                                    <div class="form-group ">
                                       <label class="control-label">New Password <small>(required)</small></label>
                                       <input name="passwd" type="password" class="form-control" id="passwd" required="required">
                                    </div>
                                    
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <?php } else { ?>
						 
						 <div class="tab-content" style="min-height:0px;">
                        <div class="tab-pane" id="bio">
                           <div class="row">
                           
                              
                              <h4 class="info-text"> This form <br>is no longer available</h4>
                              
                          </div>
                          </div>
                          </div>
					<?php }?>
                     <!--===============================================================-->
                     <div class="wizard-footer">
                     
                       <!-- <div class="pull-right">-->
                        <?php
					 if ($row_cu['kd_user']!="") { ?>
                          <center> 
                           <input type='submit' class='btn btn-finish btn-fill btn-wd' name='finish' value='RESET PASSWORD' data-color="yellow" style="background-color:#FC0;"/>
                           </center>
                           <?php } 
						   else { ?>
							   <center> 
                               <a href="index.php">
                           <input type='button' class='btn btn-finish btn-fill btn-wd' name='finish' value='HOME' data-color="yellow" style="background-color:#FC0;"/>
                           </a>
                           </center>
							   <?php }
						   ?>
                       <!-- </div>-->
                        
                        <div class="clearfix"></div>
                     </div>
                  </form>
               </div>
            </div>
            <!-- wizard container -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <br><br>
   <br><br>
</div>