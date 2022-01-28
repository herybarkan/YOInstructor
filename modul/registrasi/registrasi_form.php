<?php
ob_start();
session_start();

require_once 'Connections/con.php';

if ($_GET['com']=="registration")
{

srand ((double) microtime() * 10000000);
$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");
$rand_index = array_rand($input,8);
$kode= $input[$rand_index[3]].$input[$rand_index[5]].$input[$rand_index[4]].$input[$rand_index[2]].$input[$rand_index[1]];

$zxtahun=date('y');
$zxbulan=date('m');
$zxtanggal=date('d');
$zxjam=date('H');
$zxmenit=date('i');
$zxdetik=date('s');
$awal1="MEM";
$awal2="INS";

$kd_member = $awal1.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;
$kd_inst = $awal2.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;



	if ($_GET['type']=="member") {$_SESSION['kdxx']=$kd_member;}
elseif ($_GET['type']=="instructor") {$_SESSION['kdxx']=$kd_inst;}


}
elseif ($_GET['com']!="registration")
{
	$_SESSION['kdxx'] = NULL;	
	//$_SESSION['kd_inst']= NULL;
	//$_SESSION['kdxx']= NULL;

	unset($_SESSION['kdxx']);
	//unset($_SESSION['kd_inst']);
	//unset($_SESSION['kdxx']);
}
?>

<?php
   //$select_stmt_cat=$db->prepare("SELECT * FROM category WHERE aktif='1'"); //sql select query
   //$select_stmt_cat->execute();	//execute query with bind parameter
   //$row_cat=$select_stmt_cat->fetch(PDO::FETCH_ASSOC);
   
   
  // $dakun=$row['kd_akun'];
   //$dklinik=$row['kd_klinik'];
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
            
            <script src="js/bootstrap.min2.js"></script>        
		<link rel="stylesheet" href="css/dropzone.css" />
		<link href="css/cropper.css" rel="stylesheet"/>
		<script src="js/dropzone.js"></script>
		<script src="js/cropper.js"></script>
        
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js" id="jquery-easing-1.3-js"></script>
      <!--================================================================-->
<script type="text/javascript" src="js/ajax_states.js"></script>
<script type="text/javascript" src="js/ajax_city.js"></script>
<!-- CSS Just for demo purpose, don't include it in your project -->
<!--<link href="css/demo.css" rel="stylesheet" />-->
<!--<div class="image-container set-full-height posisi_top" style="background-image: url('images/bg_reg1.jpg'); ">-->
<div class="image-container set-full-height posisi_top">
<div class="container">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <!--      Wizard container        -->
         <?php
            //
            		if ($_GET['type']=="member") 
            { 
            $xtype=" Member"; 
            $subtitel="please register and find the right instructor for you.";
            ?>
         <div class="wizard-container">
            <div class="card wizard-card" data-color="yellow" id="wizardProfile" style="margin-top: 30px;">
               <form action="modul/registrasi/in_reg_member.php" method="POST" enctype="multipart/form-data" >
                  <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="wizard-header">
                     <h3 class="wizard-title">
                        Registration <?php echo $xtype; ?>
                     </h3>
                     <h6 class="info-text"><?php echo $subtitel; ?> 
					 <?php
									//echo "kd member: ";
									//echo $_SESSION['kdxx'];
									

									?></h6>
                  </div>
                  <div class="wizard-navigation">
                     <ul>
                        <li><a href="#bio" data-toggle="tab">Info</a></li>
                        <li><a href="#contact" data-toggle="tab">Contact</a></li>
                        <li><a href="#special" data-toggle="tab">Interest</a></li>
                     </ul>
                  </div>
                  <div class="tab-content">
                     <div class="tab-pane" id="bio">
                        <div class="row">
                           <center><h5> Let's start with the basic information (with validation)</h5></center>
                           <div class="col-sm-4 col-sm-offset-1">
                              <div class="picture-container">
                                 <div class="picture">
                                    <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                    
                                    <div class="overlay">
                                       <div class="text">Click to Change Profile Image</div>
                                    </div>
                                    <input name="file_foto" type="file" id="wizard-picture" value="">
                                    
                                 </div>
                                 <h6>Choose Picture</h6>
                                 
                              </div>
                           </div>
                           <input name="tangkapfile" type="hidden" id="tangkapfile" />
                           <!--<input name="file_foto3" type="file" id="file_foto3" value="<?php //echo "modul/registrasi/upload/1632934651.png"; ?>">-->
                           <!--<input name="file_foto2" type="file" id="file_foto2" value="">-->
                           <div id="path_profile"></div>
                           
                          
                           
                          <div class="col-sm-6">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">face</i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">First Name <small>(required)</small></label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" required="required">
                                 </div>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">record_voice_over</i>
                                 </span>
                                 <div class="form-group">
                                    <label class="control-label">Last Name <small>(required)</small></label>
                                    <input name="last_name" type="text" class="form-control" id="last_name"  required="required">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-10 col-sm-offset-1">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">email </i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">Email <small>(required)</small></label>
                                    <input name="email" type="email" class="form-control">
                                 </div>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">lock</i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">Password <small>(required)</small></label>
                                    <input name="password" type="password" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="contact">
                        <div class="row">
                           <div class="col-sm-12">
                              <center><h5> Your address </h5></center>
                              
                           </div>
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group">
                                 <label class="control-label">Country</label>
                                 <select name="country" class="form-control default-select select2" id="country" onchange="show_states(document.getElementById('country').value);" style="width:100%;">
                                    <option selected>Choose...</option>
                                    <?php
                                       $select_stmt=$db->prepare("SELECT * FROM countries");	//sql select query
                                       $select_stmt->execute();
                                       while($row_countries=$select_stmt->fetch(PDO::FETCH_ASSOC))
                                       {
                                       ?>
                                    <option value="<?php echo $row_countries['id']; ?>"><?php echo $row_countries['name']; ?></option>
                                    <?php
                                       }
                                       ?>
                                 </select>
                              </div>
                           </div>
                           
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group">
                              <div id="result_states">
                                 <label class="control-label">State</label>
                                 <select name="state" class="form-control default-select select2" id="state" style="width:100%;">
                                    <option selected>Choose...</option>
                                   
                                 </select>
                                 </div>
                              </div>
                           </div>
                           
                           
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group ">
                                 
                                 <div id="result_city">
                                 <label class="control-label">City</label>
                                 <select name="city" class="form-control default-select select2" id="city" style="width:100%;">
                                    <option selected>Choose...</option>
                                   
                                 </select>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group ">
                                 <label class="control-label">Phone Number</label>
                                 <input name="phone_number" type="number" class="form-control" id="phone_number">
                                 <input name="street_name" type="hidden" class="form-control" id="street_name">
                                 <input name="street_number" type="hidden" class="form-control" id="street_number">
                              </div>
                           </div>
                           
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group">
                                 <label class="control-label">Zip Code</label>
                                 <input name="zip_code" type="number" class="form-control" id="zip_code">
                              </div>
                           </div>
                           <!--<div class="col-sm-5">
                              <div class="form-group label-floating">
                                  <label class="control-label">Work Area</label>
                                 	<select name="work_area" class="form-control" id="work_area">
                              <option disabled="" selected=""></option>
                                     	<option value="Afghanistan"> Afghanistan </option>
                                     	<option value="Albania"> Albania </option>
                                     	<option value="Algeria"> Algeria </option>
                                     	<option value="American Samoa"> American Samoa </option>
                                     	<option value="Andorra"> Andorra </option>
                                     	<option value="Angola"> Angola </option>
                                     	<option value="Anguilla"> Anguilla </option>
                                     	<option value="Antarctica"> Antarctica </option>
                                     	<option value="...">...</option>
                                 	</select>
                              </div>
                              </div>-->
                        </div>
                     </div>
                     <!--<div class="tab-pane" id="special">
                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Design">
                                        <div class="icon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <h6>Design</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Code">
                                        <div class="icon">
                                            <i class="fa fa-terminal"></i>
                                        </div>
                                        <h6>Code</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Develop">
                                        <div class="icon">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <h6>Develop</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>-->
                        <div class="tab-pane" id="special">
                        
                        <center><h5> Interest </h5></center>
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1">
                              <!--<label for="location">Where do you work ?<br></label>-->
                              
                                                                   <!--================================================================-->
                  
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="edgtf-accordion-holder edgtf-ac-default  edgtf-accordion clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
            
            
            
            
            
            <?php
										
									$select_stmt_catx=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
									$select_stmt_catx->execute();
									while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
									{
									?>
            <h5 class="edgtf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
               <span class="edgtf-tab-title"><?php echo $row_catx['nm_category']; ?></span>
               <span class="edgtf-accordion-mark">
               <span class="edgtf-icon-plus fas fa-plus"></span>
               <span class="edgtf-icon-minus fas fa-minus"></span>
               </span>
            </h5>
            <div class="edgtf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" >
               <div class="edgtf-accordion-content-inner">
                  <div class="wpb_text_column wpb_content_element ">
                     <div class="wpb_wrapper">
                        <!--<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus ligula eget.</p>-->
                        <p>
                        <div class="col-sm-12" style="padding-bottom:25px; z-index:10000;">
                             <?php
										
									$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_catx[id_]' AND aktif='1'");	//sql select query
									$select_stmt_subcat->execute();
									while($row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC))
									{
									?>
							 
                              <div class="col-sm-4">
                                 <div class="checkboxx">
                                 <input type="checkbox" name="cb_type[]" value="<?php echo $row_subcat['nm_sub_category']; ?>" style="accent-color: #ffe14e;">
                                    <?php echo $row_subcat['nm_sub_category']; ?>
                                 </div>
                              </div>
                              <?php } ?>

                           </div>
                           </p>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            
            
         </div>
         <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
      </div>
   </div>
                  <!--=================================================================-->
                              
                           </div>
                           <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                 <!--<div class="form-group label-floating">
                                    <label class="control-label">Others</label>
                                    <input type="text" class="form-control">
                                 </div>-->
                              </div>
                            </div>
                           
                            
                           
                           
                        </div>
                     </div>
                  </div>
                  
                     
                  <div class="wizard-footer">
                     <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' data-color="yellow" style="background-color:#FC0;" id="reg_next"/>
                        <input type='submit' class='btn btn-finish btn-fill btn-wd' name='finish' value='Finish' data-color="yellow" style="background-color:#FC0;"/>
                     </div>
                     <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' data-color="yellow" style="background-color:#FC0;"/>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </form>
            </div>
         </div>
         <?php }
            elseif ($_GET['type']!="member") 
            {
            $xtype=" Instructor"; 
            $subtitel="Sign up for FREE & <br>Start Maximising your Revenue.<br><br>Take advantage of 30 days <br>of FULL access to features<br> & benefits for FREE!";
            ?>
         <div class="wizard-container">
            <div class="card wizard-card" data-color="yellow" id="wizardProfile" style="margin-top: 30px;">
               <form action="modul/registrasi/in_reg_instructor.php" method="POST" enctype="multipart/form-data" >
                  <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="wizard-header">
                     <h3 class="wizard-title">
                        <?php echo $xtype; ?> Registration 
                        <?php
									//echo "kd member: ";
									//echo $_SESSION['kdxx'];
									

									?>
                     </h3>
                     <h6 class="info-text"><?php echo $subtitel; ?></h6>
                     <!--<h4 class="info-text"> Please enter <br>your username/email and password</h4>-->
                  </div>
                  <div class="wizard-navigation">
                     <ul>
                        <li><a href="#bio" data-toggle="tab">Info</a></li>
                        <li><a href="#contact" data-toggle="tab">Contact</a></li>
                        <li><a href="#special" data-toggle="tab">Type</a></li>
                     </ul>
                  </div>
                  <div class="tab-content">
                     <div class="tab-pane" id="bio">
                        <div class="row">
                           
                           <center><h5> Let's start with the basic information (with validation)</h5></center>
                           
                           <div class="col-sm-4 col-sm-offset-1">
                              <div class="picture-container">
                                 <div class="picture">
                                    <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                    <input name="file_foto" type="file" id="wizard-picture">
                                 </div>
                                 <h6>Choose Picture</h6>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">face</i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">First Name <small>(required)</small></label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" required="required">
                                 </div>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">record_voice_over</i>
                                 </span>
                                 <div class="form-group">
                                    <label class="control-label">Last Name <small>(required)</small></label>
                                    <input name="last_name" type="text" class="form-control" id="last_name" required="required">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-10 col-sm-offset-1">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">email </i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">Email <small>(required)</small></label>
                                    <input name="email" type="email" class="form-control">
                                 </div>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="material-icons">lock</i>
                                 </span>
                                 <div class="form-group ">
                                    <label class="control-label">Password <small>(required)</small></label>
                                    <input name="password" type="password" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="contact">
                        <div class="row">
                           <div class="col-sm-12">
                              
                              <center><h5> Your address </h5></center>
                           </div>
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group ">
                                 <label class="control-label">Country</label>
                                 <select name="country" class="form-control default-select" id="country" onchange="show_states(document.getElementById('country').value);" style="width:100%;">
                                    <option selected>Choose...</option>
                                    <?php
                                       $select_stmt=$db->prepare("SELECT * FROM countries");	//sql select query
                                       $select_stmt->execute();
                                       while($row_countries=$select_stmt->fetch(PDO::FETCH_ASSOC))
                                       {
                                       ?>
                                    <option value="<?php echo $row_countries['id']; ?>"><?php echo $row_countries['name']; ?></option>
                                    <?php
                                       }
                                       ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-5">
                              <div class="form-group">
                                 
                                 <div id="result_states">
                                 <label class="control-label">State</label>
                                 <select name="state" class="form-control default-select select2" id="state" style="width:100%;">
                                    <option selected>Choose...</option>
                                   
                                 </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-5 col-sm-offset-1">
                              <div class="form-group">
                                 
                                 <div id="result_city">
                                 <label class="control-label">City</label>
                                 <select name="city" class="form-control default-select select2" id="city" style="width:100%;">
                                    <option selected>Choose...</option>
                                   
                                 </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-5">
                              <div class="form-group">
                                 <label class="control-label">Phone Number</label>
                                 <input name="phone_number" type="number" class="form-control" id="phone_number">
                                 <input name="street_name" type="hidden" class="form-control" id="street_name">
                                 <input name="street_number" type="hidden" class="form-control" id="street_number">
                              </div>
                           </div>
                           
                           <div class="col-sm-5">
                              <div class="form-group">
                                 <label class="control-label">Zip Code</label>
                                 <input name="zip_code" type="number" class="form-control" id="zip_code">
                              </div>
                           </div>
                           <!--<div class="col-sm-5">
                              <div class="form-group label-floating">
                                  <label class="control-label">Work Area</label>
                                 	<select name="work_area" class="form-control" id="work_area">
                              <option disabled="" selected=""></option>
                                     	<option value="Afghanistan"> Afghanistan </option>
                                     	<option value="Albania"> Albania </option>
                                     	<option value="Algeria"> Algeria </option>
                                     	<option value="American Samoa"> American Samoa </option>
                                     	<option value="Andorra"> Andorra </option>
                                     	<option value="Angola"> Angola </option>
                                     	<option value="Anguilla"> Anguilla </option>
                                     	<option value="Antarctica"> Antarctica </option>
                                     	<option value="...">...</option>
                                 	</select>
                              </div>
                              </div>-->
                        </div>
                     </div>
                     <!--<div class="tab-pane" id="special">
                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Design">
                                        <div class="icon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <h6>Design</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Code">
                                        <div class="icon">
                                            <i class="fa fa-terminal"></i>
                                        </div>
                                        <h6>Code</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="jobb" value="Develop">
                                        <div class="icon">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <h6>Develop</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>-->
                     <div class="tab-pane" id="special">
                        
                        <center><h5> Type </h5></center>
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1">
                              <!--<label for="location">Where do you work ?<br></label>-->
                              
                                                                   <!--================================================================-->
                  
   <div class="vc_column-inner">
      <div class="wpb_wrapper">
         <div class="edgtf-accordion-holder edgtf-ac-default  edgtf-accordion clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
            
            
            
            
            
            <?php
										
									$select_stmt_catx=$db->prepare("SELECT * FROM category WHERE aktif='1'");	//sql select query
									$select_stmt_catx->execute();
									while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
									{
									?>
            <h5 class="edgtf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
               <span class="edgtf-tab-title"><?php echo $row_catx['nm_category']; ?></span>
               <span class="edgtf-accordion-mark">
               <span class="edgtf-icon-plus fas fa-plus"></span>
               <span class="edgtf-icon-minus fas fa-minus"></span>
               </span>
            </h5>
            <div class="edgtf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true">
               <div class="edgtf-accordion-content-inner">
                  <div class="wpb_text_column wpb_content_element ">
                     <div class="wpb_wrapper">
                        <!--<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus ligula eget.</p>-->
                        <p>
                        <div class="col-sm-12" style="padding-bottom:25px; z-index:10000;">
                             <?php
										
									$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE id_category='$row_catx[id_]' AND aktif='1'");	//sql select query
									$select_stmt_subcat->execute();
									while($row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC))
									{
									?>
							 
                              <div class="col-sm-4">
                                 <div class="checkboxx">
                                 <input type="checkbox" name="cb_type[]" value="<?php echo $row_subcat['nm_sub_category']; ?>" style="accent-color: #ffe14e;">
                                    <?php echo $row_subcat['nm_sub_category']; ?>
                                 </div>
                              </div>
                              <?php } ?>

                           </div>
                           </p>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            
            
         </div>
         <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
      </div>
   </div>
                  <!--=================================================================-->
                              
                           </div>
                           <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                 <!--<div class="form-group label-floating">
                                    <label class="control-label">Others</label>
                                    <input type="text" class="form-control">
                                 </div>-->
                              </div>
                            </div>
                            <center><h5> Who do you train? </h5></center>
                           <div class="row"> 
                              <div class="col-sm-10 col-sm-offset-1">
                              <!--<label for="location">Where do you work ?<br></label>-->
                              <div class="col-sm-12 col-sm-offset-0">
                                 <!--<label for="client_sex">Who do you train?<br></label>-->
                                 <?php
										
									$select_stmt_train=$db->prepare("SELECT * FROM train WHERE aktif='1'");	//sql select query
									$select_stmt_train->execute();
									while($row_train=$select_stmt_train->fetch(PDO::FETCH_ASSOC))
									{
									?>
							 
                              <div class="col-sm-4">
                                 <div class="checkboxx"><input type="checkbox" name="cb_train[]" value="<?php echo $row_train['nm_train']; ?>" style="accent-color: #ffe14e;">
                                    <?php echo $row_train['nm_train']; ?>
                                 </div>
                              </div>
                              <?php } ?>
                                 
                                </div> 
                                 <!--<div class="radio"><label><input type="radio" name="ctrain" value="male">Men</label></div>
                                 <div class="radio"><label><input type="radio" name="ctrain" value="female">Women</label></div>
                                 <div class="radio"><label><input type="radio" name="ctrain" value="kids">Kids</label></div>
                                 <div class="radio"><label><input type="radio" name="ctrain" value="all">All the Above</label></div>-->
                              </div>
                           </div>
                           <center><h5> Where do you work? </h5></center>
                           <div class="row"> 
                           <div class="col-sm-10 col-sm-offset-1">
                              <!--<label for="location">Where do you work ?<br></label>-->
                              <div class="col-sm-12 col-sm-offset-0">
                              
                              
                                 <?php
										
									$select_stmt_work=$db->prepare("SELECT * FROM work WHERE aktif='1'");	//sql select query
									$select_stmt_work->execute();
									while($row_work=$select_stmt_work->fetch(PDO::FETCH_ASSOC))
									{
									?>
							 
                              <div class="col-sm-4">
                                 <div class="checkboxx"><input type="checkbox" name="cb_work[]" value="<?php echo $row_work['nm_work']; ?>" style="accent-color: #ffe14e;">
                                    <?php echo $row_work['nm_work']; ?>
                                 </div>
                              </div>
                              <?php } ?>
                              
                                 <!--<div class="col-sm-4">
                                    <div class="checkbox"><label><input type="checkbox" name="cb_work[]" value="Clients Home">
                                       Clients Home</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkbox"><label><input type="checkbox" name="cb_work[]" value="Facility">
                                       Facility</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkbox"><label><input type="checkbox" name="cb_work[]" value="Park">
                                       Park</label>
                                    </div>
                                 </div>-->
                              </div>
                           </div>
                           </div> 
                           
                           
                        </div>
                     </div>
                     <br><br>
                     <div class="wizard-footer">
                        <div class="pull-right">
                           <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' data-color="yellow" style="background-color:#FC0;" id="reg_next"/>
                           
                          <!-- <a href="javascript:void(0);" id="bt_alertx">xxx</a>-->
                          <input type='submit' class='btn btn-finish btn-fill btn-wd' name='finish' value='Finish' data-color="yellow" style="background-color:#FC0;"/>
                        </div>
                        <div class="pull-left">
                           <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' data-color="yellow" style="background-color:#FC0;"/>
                        </div>
                        <div class="clearfix"></div>
                     </div>
               </form>
               </div>
            </div>
            <?php } ?>
            <!-- wizard container -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!--  big container -->
   <!--<div class="footer">
      <div class="container text-center">
           Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
      </div>
      </div>-->
   <br><br>
   <br><br>
</div>

