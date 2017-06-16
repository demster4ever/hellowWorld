<?php

?>

<!doctype html>
<html>
    <head>
	    <link type="text/css" rel="stylesheet" href="resources/css/materialize.min.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="resources/css/main.css">
	    <script type="text/javascript" src="resources/js/jquery-3.1.1.min.js"></script>
	    <script type="text/javascript" src="resources/js/materialize.min.js"></script>
	    <script type="text/javascript" src="resources/js/angular.min.js"></script>
	    <script type="text/javascript" src="resources/js/consultation.js"></script>
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
				      	<a href="#" class="brand-logo" style="padding-left:5%"><i class="large material-icons">accessibility</i>R. Lobaton Clinic</a>
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
				        	<li class="tab"><a class="active" href="#dashboard"><h4>Dashboard</h4></a></li>
				        	<li class="tab"><a class="" href="#appointment"><h4>Appointments</h4></a></li>
				      	</ul>
				      	
				    </div>	
				</nav>
        	</div>
        	<div id="main_content" class="main-content">
        		<!-- DASHBOARD -->
        		
        		<div id="dashboard" class="row col s12">
        			<div class="col s12">
						<h4>PRESENT WORKING IMPRESSION</h4>
					</div>
        			<div class="col s4">
        				
        				<!-- Add Patient -->
        				<div id="" class="col s11 boxed scrollspy">
        					<div class="col s12 semi-title-font">
        						<h5><i class="small material-icons">person</i>&nbsp;Patient Information</h5>
        					</div>
                            <div class="col s12">
                            	<div class="col s12">
                            		<div class="col s5">Patient Name:</div>
                                	<div class="col s7">Marcelo Sanchez</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Date of Birth:</div>
                                	<div class="col s7">August 30, 1985</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Patient Age:</div>
                                	<div class="col s7">30 year/s old</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Gender:</div>
                                	<div class="col s7">Male</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Religion:</div>
                                	<div class="col s7">Roman Catholic</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Address:</div>
                                	<div class="col s7">Bacolod City, Negros Occidental</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Patient Type:</div>
                                	<div class="col s7">New Patient</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5"></div>
                                	<div class="col s7">Non HMO</div>
                            	</div>
                            	<div class="col s12"><b>PMH</b></div>
                            	<div class="col s12">
                            		<div class="col s5">Allergies</div>
                                	<div class="col s7">None</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Known Past Illness:</div>
                                	<div class="col s7">None</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Previous Surgery:</div>
                                	<div class="col s7">None</div>
                            	</div>
                            	<div class="col s12">
                            		<div class="col s5">Problem:</div>
                                	<div class="col s7" style="color: red;">High Fever with colds</div>
                            	</div>
                            </div>
                        </div>   
                    </div>
                    <div class="col s8">        
						<div id="" class="col s11 boxed scrollspy">
                            <div class="col s12">
        						<h5><i class="small material-icons">healing</i>&nbsp;DIAGNOSTICS</h5>
        					</div>
                            <div class="input-field col s12">
                            	REQUEST FOR LABORATORY/ RADIOLOGIC/ ENDOSCOPIC DIAGNOSTICS
                            	<div class="col s12">
                            		<p class="col s3">
										<input type="checkbox"  class="filled-in" id="labNone" />
										<label for="labNone">None</label>
									</p>
                            	</div>
                            	<div class="col s12">
                            		<div>
                            			<h5>Laboratory Tests</h5>
                            		</div>
									<b class="col s12 test-font">Blood Tests</b>
									<div class="row col s12">
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">CBC</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Blood Type</label>
												</div>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="asthma"  />
												<label for="asthma">Platelet Count</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="copd"  />
												<label for="copd">Reticulocyte Count</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="ptb"  />
												<label for="ptb">Peripheral Blood Smear</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="cad"  />
												<label for="cad">ESR</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="vhd" />
												<label for="vhd">Protime</label>
											</p>
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="htn"  />
												<label for="htn">FBS</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">RBS</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="asthma"  />
												<label for="asthma">2HPP</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="copd"  />
												<label for="copd">HbA1c</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="ptb"  />
												<label for="ptb">5 gms OGTT</label>
											</p>
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">BUN</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Creatinine</label>
												</div>

												
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Total Cholesterol/ HDL /LDL</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="asthma"  />
												<label for="asthma">Triglycerides</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="copd"  />
												<label for="copd">Uric Acid</label>
											</p>
											<p class="col s12 check-box-selection">
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">Na</label>
												</div>
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">K</label>
												</div>
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">Cl</label>
												</div>
												
											</p>
											<p class="col s12 check-box-selection">
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">Ca</label>
												</div>
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">Mg</label>
												</div>
												<div class="col s4">
													<input type="checkbox" class="filled-in" id="ptb"/>
													<label for="ptb">Phos</label>
												</div>
												
											</p>
										</div>
										
									</div>
									<br>
									<b class="col s12 test-font">Urine Tests</b>
									<div class="row col s12">
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">AST</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">ALT</label>
												</div>
											</p>
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">ALP</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">GGT</label>
												</div>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Total Bilirubin / B1 / B2</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox" class="filled-in" id="asthma"  />
												<label for="asthma">Total Protein</label>
											</p>
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Albumin</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Globulin</label>
												</div>
											</p>
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Amylase</label>
												</div>
												<div class="col s6">
													<input type="checkbox" class="filled-in" id="htn"  />
													<label for="htn">Lipase</label>
												</div>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">AFP</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">CEA</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">CA 19-9</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">PSA</label>
											</p>
											
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HAV Igm</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">HBsAg</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HBs</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">HBeAg</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HBe</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HBe – do only if HBeAg (-)</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HBc IgM</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HBc, Total</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Anti HCV</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">HBV DNA - PCR method</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">HCV RNA – PCR method</label>
											</p>
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">ANA qualitative</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">CRP</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Rheumatoid Factor</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Typhidot</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Routine Urinalysis</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Urinary  Na</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Fecalysis, routine</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Fecalysis, conc method</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Fecal Occult Blood</label>
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Rapid H. pylori  Fecal Ag test</label>
											</p>
										</div>
									</div>
									<br>
									<b class="col s12 test-font">Stool Tests</b>
									<div class="col s12">
										<div class="col s4">
											<p class="col s12 check-box-selection">
												<div class="col s6">
													<input type="checkbox"  class="filled-in" id="dm"  />
													<label for="dm">Free T4</label>
												</div>
												<div class="col s6">
													<input type="checkbox"  class="filled-in" id="dm"  />
													<label for="dm">T3</label>
												</div>
												
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">TSH</label>
											</p>
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">GS/CS of</label>
												<input id="gscs" name="gscs" type="text">
											
											</p>
											<p class="col s12 check-box-selection">
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">AFB smear of  </label>
												<input id="afbsmear" name="afbsmear" type="text">
											</p>
										</div>
										<div class="col s4">
											<p class="col s12 check-box-selection">
												
												<input type="checkbox"  class="filled-in" id="dm"  />
												<label for="dm">Other Labs</label>
												<input id="labs" name="labs" type="text">
											
											</p>
											
										</div>
									</div>
                            	</div>
                            </div>
                                                        
							<div class="row col s12">
                                <button type="submit" class="btn">Save Patient</button>
                            </div>
        				</div>
        				
        			</div>
        			<div class="col s3">
        				
        				
        				
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
			    selectYears: 60 
			});

			$('.scrollspy').scrollSpy({
				scrollOffset: 0
			});
			$('ul.tabs').tabs();

    		$('.collapsible').collapsible();
  
        </script>
    </body>

</html>