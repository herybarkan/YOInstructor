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
                  <form action="modul/login/reset_password2.php" method="POST">
                     <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                     <div class="wizard-header">
                        <h3 class="wizard-title">
                           Password Reset Complete
                        </h3>
                        <h5>&nbsp;</h5>
                     </div>
                     <div class="wizard-navigation">
                        <ul>
                           <li><a href="#bio" data-toggle="tab">Confirmation Reset Password</a></li>
                           <!--<li><a href="#contact" data-toggle="tab">Contact</a></li>-->
                        </ul>
                     </div>
                     <div class="tab-content" style="min-height:0px;">
                        <div class="tab-pane" id="bio">
                           <div class="row">
                           
                              
                              <h4 class="info-text"> your password has been reset. Please login again with the new password.<br> Thanks</h4>
                              
                              
                              
                           </div>
                        </div>
                     </div>
                     <div class="wizard-footer">
                     
                       <!-- <div class="pull-right">-->
                        
                          <center> 
                          <a href="index.php?com=login">
                           <input type='button' class='btn btn-finish btn-fill btn-wd' name='finish' value='LOGIN' data-color="yellow" style="background-color:#FC0;"/>
                           </a>
                           </center>
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