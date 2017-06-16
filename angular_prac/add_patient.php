<?php

?>

<!doctype html>
<html>
    <head>
	    <link type="text/css" rel="stylesheet" href="resources/css/materialize.min.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="resources/css/main.css">
	    <link type="text/css" rel="stylesheet" href="resources/fonts/materialize/material-icons.css">
	    <script type="text/javascript" src="resources/js/moment.min.js"></script>
	    <script type="text/javascript" src="resources/js/jquery-3.1.1.min.js"></script>
	    <script type="text/javascript" src="resources/js/materialize.min.js"></script>
	    <script type="text/javascript" src="resources/js/angular.min.js"></script>
	    <script type="text/javascript" src="resources/js/consultation.js"></script>
	    <meta http-equiv="Cache-control" content="no-cache">
    </head>
    <body>
        <div style="padding-bottom: 100px;">
        	<div id="header_nav">
        		<ul id="user_dropdown" class="dropdown-content">
					<li><a href="#!">User Settings</a></li>
					<li><a href="#!">Help</a></li>
					<li class="divider"></li>
					<li><a href="#!">Logout</a></li>
				</ul>
        		<nav class="nav-extended">
				    <div class="nav-wrapper">
				      	<a href="dashboard.php" class="brand-logo" style="padding-left:5%"><i class="large material-icons">accessibility</i>to Dashboard</a>
				      	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      	<ul id="nav-mobile" class="right hide-on-med-and-down">
					        <li>Hello!,</li>
					        <li><a class="dropdown-button" href="#!" data-activates="user_dropdown"><b style="font-size: 24px;">Dr. Ric</b></a></li>
					        <li>March 7, 2017 3:30PM</li>
					        
				      	</ul>
				      	<!-- 
							This is only for mobile or screen adjusted

				      		<ul class="side-nav" id="mobile-demo">
					        <li><a href="sass.html">Sass</a></li>
					        <li><a href="badges.html">Components</a></li>
					        <li><a href="collapsible.html">JavaScript</a></li>
				      	</ul> -->
				      	<ul class="tabs tabs-transparent nav-tabs">
				        	
				        	<li class="tab"><a class="active" href="#addpatient"><h4>Add Patient</h4></a></li>
				      	</ul>
				      	
				    </div>	
				</nav>
        	</div>
        	<div id="main_content" class="main-content" style="padding-top: 15px;">
        		<!-- DASHBOARD -->
        		
        		<div id="dashboard" class="row col s12">
        			<div class="col s6">
        				
        				<!-- Add Patient -->
        				<div id="add_patient" class="col s11 boxed scrollspy">
        					<div class="col s12 ">
        						<h4>New Patient Information</h4>
        					</div>
                            <div class="input-field col s12">
                                <input id="p_lname" name="patient_lname" type="text" class="validate"> 
                                <label for="p_lname">Surname</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="p_fname" name="patient_fname" type="text" class="validate"> 
                                <label for="p_fname">First Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="p_mname" name="patient_mname" type="text" class="validate"> 
                                <label for="p_mname">Middle Name</label>
                            </div>
                            <div class="input-field col s12">
                            	Date of Birth
                            	<input id="p_birthdate" placeholder="Select Date of Birth" name="p_birthdate" type="date" class="datepicker">
                            </div>
                            <div class="input-field col s12">
                                <input id="age" name="age" type="text" class="validate"> 
                                <label id="age_label" for="age">Age</label>
                            </div>
                            <div class="input-field col s12">
                            	Gender
							    <select id="gender" class="browser-default">
									<option value="" disabled selected>Choose Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
							    </select>
							    
							</div>
							<div class="input-field col s12">
								Religion
							    <select id="religion" class="browser-default">
							      	<option value="" disabled selected>Choose Religion</option>
									<option value="1">Roman Catholic</option>
									<option value="2">Protestant</option>
									<option value="3">Iglesia Ni Cristo</option>
									<option value="4">Mormon</option>
									<option value="5">Jehovas</option>
									<option value="6">Islam</option>
									<option value="7">Budhist</option>
									<option value="8">Hinduist</option>
									<!-- <option value="9">Others</option> -->
							    </select>
							</div>
							
							<div class="input-field col s12">
                                <input id="address" name="address" type="text"> 
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="contact" name="contact" type="text"> 
                                <label for="contact">Contact No./Person</label>
                            </div>
                            <div class="input-field col s12">
                                <p class="col s6">
									<input class="with-gap" checked="checked" name="pstatus" type="radio" id="new_patient" value="1"/>
									<label for="new_patient">New Patient</label>
								</p>
								<p class="col s6">
									<input class="with-gap" name="pstatus" type="radio" id="old_patient" value="2" />
									<label for="old_patient">Old Patient</label>
									<div id="pstatus_input" class="input-field col s12"	>
		                            	Since when?
		                            	<input id="p_olddate" placeholder="Select Date" disabled name="p_olddate" type="date" class="datepicker">
		                            </div>
								</p>
                            </div>
                            <div class="input-field col s12">
                                <p class="col s6">
									<input class="with-gap" name="hmo_non" checked="checked" type="radio" id="hnh2" value="HMO" />
									<label for="hnh2">HMO</label>
								</p>
								<p class="col s6">
									<input class="with-gap" name="hmo_non" type="radio" id="hnh3" value="NonHMO" />
									<label for="hnh3">Non HMO</label>
								</p>
                            </div>
                        </div>   
        				
        			</div>
        			<div class="col s6">
        				
        				<!-- Add Patient -->
        				<div id="add_patient" class="col s11 boxed scrollspy">
                            <div class="col s12">
        						<h4>PHM</h4>
        					</div>
                            <div class="input-field col s12">
                            	Allergies
                            	<div class="col s12">
                            		<p class="col s6">
										<input class="with-gap" name="allergy" type="radio" id="allergy_none" checked="checked" value="1"/>
										<label for="allergy_none">None</label>
									</p>
									<p class="col s6">
										<input class="with-gap" name="allergy" type="radio" id="allergy_spec" value="2" />
										<label for="allergy_spec">Specify</label>
										<div class="input-field col s12" id="allergy_input">
			                            	<input id="allergies_inp" disabled name="allergy_inp" type="text"> 
			                            </div>
									</p>
                            	</div>
                            	
                            </div>
                            <div class="input-field col s12">
                            	Known Past Illness/es
                            	<div class="col s12">
                            		<!-- <p class="col s3">
										<input type="checkbox"  name="" class="filled-in" id="illNone" checked="checked" />
										<label for="illNone">None</label>
									</p> -->
									<div id="past_ill">
										<p class="col s3">
											<input type="checkbox" name="past_illness" class="filled-in" id="htn" value="htn"/>
											<label for="htn">HTN</label>
										</p>
										<p class="col s3">
											<input type="checkbox"  name="past_illness" class="filled-in" id="dm" value="dm"/>
											<label for="dm">DM</label>
										</p>
											<p class="col s3">
												<input type="checkbox" name="past_illness" class="filled-in" id="asthma" value="asthma"/>
											<label for="asthma">Asthma</label>
										</p>
										<p class="col s3">
											<input type="checkbox" name="past_illness" class="filled-in" id="copd" value="copd"/>
											<label for="copd">COPD</label>
										</p>
										<p class="col s3">
											<input type="checkbox" name="past_illness" class="filled-in" id="ptb" value="ptb"/>
											<label for="ptb">PTB</label>
										</p>
										<p class="col s3">
											<input type="checkbox"  name="past_illness" class="filled-in" id="cad" value="cad"/>
											<label for="cad">CAD</label>
										</p>
										<p class="col s3">
											<input type="checkbox" name="past_illness" class="filled-in" id="vhd" value="vhd"/>
											<label for="vhd">VHD</label>
										</p>
										<p class="col s3">
											<input type="checkbox" name="past_illness" class="filled-in" id="cancer" value="cancer"/>
											<label for="cancer">Cancer</label>
										</p>
									</div>
									<div id="otherillness">
										<p class="col s3">
											<input type="checkbox" name="" class="filled-in" id="other_illness"/>
											<label for="other_illness">Others</label>
											<div class="input-field col s12">
				                            	<input id="illness_input" disabled name="illness" type="text"> 
				                            </div>
										</p>
									</div>
                            	</div>
                            	
                            </div>
                            <div class="input-field col s12">
                            	
	        					Previous Surgery/ies
                            	<div class="col s12">
                            		<p class="col s4">
										<input class="with-gap" name="surgeryGrp" checked="checked" type="radio" id="surgeryNone" value='1'/>
										<label for="surgeryNone">None</label>
									</p>
									<p class="col s8">
										<input class="with-gap col s6" name="surgeryGrp" type="radio" id="surgeryAbdominal" value='2' />
										<label for="surgeryAbdominal">Abdominal</label>
										<input class="with-gap  col s6" name="surgeryGrp" type="radio" id="surgeryNonAbdominal" value='3' />
										<label for="surgeryNonAbdominal">Non-Abdominal</label>
									</p>
									<p class="col s12">
			                            <input id="surgeryNonAbdominalSpec" placeholder="Specify Abdominal Surgery" disabled name="surgery_non_abdominal" type="text"> 
									</p>
									
                            	</div>
                            	
                            </div>
                            
                            <div class="col s12">
        						<h4>Problem</h4>
        					</div>
        					<div class="col s12">
								
								<div class="input-field col s12">
	                            	<input id="patient_problem" name="patient_problem" type="text">
	                            </div>
								
                        	</div>
							<div class="row col s12">
                                 <a class="waves-effect waves-light btn" onclick="add_patient()"><i class="small material-icons">add_to_queue</i>&nbsp;Add Patient</a> &nbsp; 
                            </div>
        				</div>
        				
        			</div>
        		</div>
        		
        	</div>
        </div>
        <div class="card-boxed center" style="position:fixed; width:100%; height: 100px; background-color: #0089ec; bottom: 0; color: #fff;">
        		Copyright 2017 . Ric Lobaton Clinic
        </div>
        <script type="text/javascript">
        	$('.datepicker').pickadate({
			    selectMonths: true, 
			    selectYears: 100,
			    format: 'dd-mm-yyyy' 
			});

			$('.scrollspy').scrollSpy({
				scrollOffset: 0
			});
			$('ul.tabs').tabs();

    		$('.collapsible').collapsible();
  
        </script>
        <script type="text/javascript" src="resources/js/click_manager.js"></script> 
    </body>

</html>