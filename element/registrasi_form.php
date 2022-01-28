<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />-->

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!--<link href="css/demo.css" rel="stylesheet" />-->

	<div class="image-container set-full-height" style="background-image: url('images/bg_reg1.jpg'); margin-top: 30px;">
	    
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
									<h5><?php echo $subtitel; ?></h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#bio" data-toggle="tab">Bio</a></li>
			                            <li><a href="#contact" data-toggle="tab">Contact</a></li>
                                        
                                        
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="bio">
		                              <div class="row">
		                                	<h4 class="info-text"> Let's start with the basic information (with validation)</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">First Name <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Last Name <small>(required)</small></label>
													  <input name="lastname" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email </i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Email <small>(required)</small></label>
			                                            <input name="email" type="email" class="form-control">
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock</i>
													</span>
													<div class="form-group label-floating">
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
		                                        <h4 class="info-text"> Your address </h4>
		                                    </div>
                                        <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Country</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">State</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">City</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            
		                                    
		                                    <div class="col-sm-7 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Street Name</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Street Number</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Zip Code</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Work Area</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
		                                    
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
                                    
                                    
                                    
                                    
		                            
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' data-color="yellow" style="background-color:#FC0;"/>
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
								$subtitel="Sign up for FREE & Start Maximising your Revenue.<br><br>Take advantage of 30 days of FULL access to features & benefits for FREE!";
								?>
							
                            <div class="wizard-container">
		                <div class="card wizard-card" data-color="yellow" id="wizardProfile" style="margin-top: 30px;">
		                 
                        
                          <form action="modul/registrasi/in_reg_instructor.php" method="POST" enctype="multipart/form-data" >
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Registration <?php echo $xtype; ?>
		                        	</h3>
									<h5><?php echo $subtitel; ?></h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#bio" data-toggle="tab">Bio</a></li>
			                            <li><a href="#contact" data-toggle="tab">Contact</a></li>
                                        <li><a href="#special" data-toggle="tab">Services</a></li>
                                        
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="bio">
		                              <div class="row">
		                                	<h4 class="info-text"> Let's start with the basic information (with validation)</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">First Name <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Last Name <small>(required)</small></label>
													  <input name="lastname" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email </i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Email <small>(required)</small></label>
			                                            <input name="email" type="email" class="form-control">
			                                        </div>
												</div>
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock</i>
													</span>
													<div class="form-group label-floating">
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
		                                        <h4 class="info-text"> Your address </h4>
		                                    </div>
                                        <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Country</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">State</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">City</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
                                            
                                            
		                                    
		                                    <div class="col-sm-7 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Street Name</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Street Number</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Zip Code</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Work Area</label>
	                                            	<select name="country" class="form-control">
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
		                                    </div>
		                                    
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
		                                <h4 class="info-text"> Your Speciality </h4>
		                                <div class="row">
		                                    <div class="col-sm-12 col-sm-offset-1">
		                                        <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special1" value="Strength Building">Strength Building</label></div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special2" value="Body Building">Body Building</label></div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special3" value="Weight Loss">Weight Loss</label></div>
		                                        </div>
                                               <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special4" value="Rehabilitation">Rehabilitation</label></div>
		                                        </div>
                                                <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special5" value="Yoga">Yoga</label></div>
		                                        </div>
                                                <div class="col-sm-4">
		                                            <div class="checkbox"><label><input type="checkbox" name="special6" value="Pilates">Pilates</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special7" value="Aerobics">Aerobics</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special8" value="Spin">Spin</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special9" value="Taichi">Taichi</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special10" value="Kick Boxing">Kick Boxing</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special11" value="Body Sculpting">Body Sculpting</label></div>
		                                        </div>
                                                <div class="col-sm-4">
                                                <div class="checkbox"><label><input type="checkbox" name="special12" value="FitRanX">FitRanX</label></div>
		                                        </div>
                                                </div>
                                                
                                                
                                                <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Others</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
                                            <label for="client_sex">Who do you train?<br></label>
                                            
                                            <div class="radio"><label><input type="radio" name="client_sex" value="male">Men</label></div>
                                            
                                            
                                            <div class="radio"><label><input type="radio" name="client_sex" value="female">Women</label></div>
                                            
                                            <div class="radio"><label><input type="radio" name="client_sex" value="either">Both</label></div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                        <label for="location">Where do you train?<br></label>
                                        <div class="form-group label-floating">
		                                            
	                                            	<select name="country" class="form-control">
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
                                        </div>
                                                
		                                    </div>
                                     
                                            
                                            
                                            
                                            
                                        
                                        
                                        
                                        
		                            </div>
                                    
                                    
		                            
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-wd' name='next' value='Next' data-color="yellow" style="background-color:#FC0;"/>
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
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <!--<div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
	        </div>
	    </div>-->
        <br><br>
    <br><br>
	</div>
    

    
