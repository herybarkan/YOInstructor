<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />

	<div class="image-container set-full-height" style="background-image: url('images/bg_reg1.jpg'); margin-top: 30px;">
	    <!--   Creative Tim Branding   -->
	    <!--<a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a>-->

		<!--  Made With Material Kit  -->
		<!--<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a>-->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="yellow" id="wizardProfile" style="margin-top: 30px;">
		                    <form action="#" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Build Your Profile
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#bio" data-toggle="tab">Bio</a></li>
			                            <li><a href="#address" data-toggle="tab">Address</a></li>
                                        <li><a href="#special" data-toggle="tab">Specialities</a></li>
                                        <li><a href="#others" data-toggle="tab">Others</a></li>
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
														<i class="material-icons">email</i>
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
                                                
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">phone</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Phone (Optional. Shown on Public Profile) <small>(required)</small></label>
			                                            <input name="phone" type="number" class="form-control">
			                                        </div>
												</div>
                                                
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">language</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">Website (Optional. Shown on Public Profile) <small>(required)</small></label>
			                                            <input name="website" type="text" class="form-control">
			                                        </div>
												</div>
                                                
                                               <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">today</i>
													</span>
													<div class="form-group label-floating col-12">
			                                            <label class="control-label">Birth Date</label>
			                                            <input name="bd" type="date" class="form-control col-12" style="width:300%;">
			                                        </div>
												</div>
                                            
                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">group</i>
													</span>
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Gender</label>
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
                                    
                                    <div class="tab-pane" id="address">
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
                                    
                                    
		                            <div class="tab-pane" id="others">
		                                <div class="row">
		                                    <div class="col-sm-10">
		                                        <h4 class="info-text"> Others Data </h4>
		                                    </div>
		                                    <div class="col-sm-10 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Listing Title</label>
	                                    			<input class="form-control" type="text" name="title" value="" placeholder="">
                                                    <small>This is the main title of your listing. It should contain roughly 10 words that emphasize your service. Please do not use all caps.</small>
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Overview</label>
		                                            <textarea class="form-control" rows="8" name="about"></textarea>
                                                    <small>This should contain a short paragraph about your training methods and techniques. Explain the things that make you stand out from other trainers.</small>
		                                        </div>
		                                    </div>
                                            
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Training Philosophy</label>
		                                            <textarea class="form-control" rows="8" name="philosophy"></textarea>
                                                    <small>This is very important and many clients choose a personal trainer based on their training philosophy. Be creative and complete. List your personal theories on personal training. What methods do you implore and believe in? Examples include weight training, cardio, nutrition, diet, yoga, pilates, meditation, stretching. How do you motivate clients? What motivates you? Sell yourself here and connect with your client. Let them know why you are the right trainer for their training needs..</small>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Education</label>
		                                            <textarea class="form-control" rows="8" name="education"></textarea>
                                                    <small>List the type of classes you have attended or degrees you hold (ex. kinesiology, exercise physiology, sports nutrition, sport injury prevention, exercise for special populations, weight training techniques, fitness assessment, exercise leadership). List previous internships. Include skill sets and training experiences (ex. loss education, Physiology, Pilates, Yoga, Tai Chi, kettle bell training, stability balls, child/geriatric fitness, boot camp instructing, lifestyle management, sports conditioning, group fitness, and adaptive exercise for special populations).</small>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Certifications</label>
		                                            <textarea class="form-control" rows="8" name="certification"></textarea>
                                                    <small>Include organizations you belong to and formal training that has resulted in credits, diplomas or formal certifications (ex. ISSA, AFPA, NFPT,NESTA, NASM, AFPA)..</small>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Biography</label>
		                                            <textarea class="form-control" rows="8" name="biografi"></textarea>
                                                    <small>Include organizations you belong to and formal training that has resulted in credits, diplomas or formal certifications (ex. ISSA, AFPA, NFPT,NESTA, NASM, AFPA)..</small>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label for="subscription_type">Subscription Type<br></label>
                                            <small><br>
                                            *We offer two different kinds of subscriptions. Premium subscription members have their listings show up first. Promotional listings are listed below the paid listings but they have the added benefit of being part of our advertising network which requires that you give away two one-on-one (or group) classes to each new clients that we send to you.

</small>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <div class="radio"><label><input type="radio" name="subscription_type" value="yearly">Business ($99/year)</label></div>

<div class="radio"><label><input type="radio" name="subscription_type" value="promotional">Proffesional</label></div>

<div class="radio"><label><input type="radio" name="subscription_type" value="promotional">Freemium (FREE)</label></div>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label for="terms">Terms and Conditions<br></label>
                                                    <div class="checkbox"><label><input type="checkbox" name="terms" value="1">I agree to the <a href="javascript:popUp('http://www.ipersonaltrainer.net/terms?template=plain')">Terms &amp; Services</a> of this website.</label></div>
		                                        </div>
		                                    </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <small>
                                                    Disclaimer: By filling out this form you are giving iPersonalTrainer.net the right to list your services and use your photograph on our website and promotional material related to iPersonalTrainer.net.
                                                    </small>
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
		            </div> <!-- wizard container -->
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
    
    
