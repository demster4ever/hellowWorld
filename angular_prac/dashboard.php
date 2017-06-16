<?php

?>

<!doctype html>
<html>
    <head>
	    <link type="text/css" rel="stylesheet" href="resources/css/materialize.min.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="resources/css/main.css">
	    <link type="text/css" rel="stylesheet" href="resources/fonts/materialize/material-icons.css">
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
				      	<a href="#" class="brand-logo" style="padding-left:5%"><i class="large material-icons">accessibility</i>R. Lobaton Clinic
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
				        	<li class="tab"><a class="active" href="#dashboard"><h4>Dashboard </h4></a></li>
				        	<li class="tab"><a class="" href="#appointment"><h4>Appointments</h4></a></li>
				      	</ul>
				      	
				    </div>	
				</nav>
        	</div>
        	<div id="main_content" class="main-content" style="padding-top: 15px;">
        		<!-- DASHBOARD -->
        		<div id="dashboard" class="row col s12" >
        			<div id="main_buttons" class="col s3">
        				<div style="position:fixed; width:33%">
        					<div class="row col s12 ">
        						
        							<a href="add_patient.php" class="waves-effect waves-light btn-large row col s8 text-left"><i class="large material-icons">group_add</i>&nbsp;Add Patient</a>
        							<br>
        							<a href="scheduler.php" class="btn-large row col s8 text-left"><i class="large material-icons">add_to_queue</i>&nbsp;Schedule</a>
        							<br>
        							<a href="#" class="btn-large row col s8 text-left"><i class="large material-icons">save</i>&nbsp;Documents</a>
        							<br>
	        						<a href="#" class="btn-large row col s8 text-left"><i class="large material-icons">sort</i>&nbsp;Others</a>
	        					
	        				</div>

        				</div>
        				
        			</div>
        			<div class="col s9">
        				<div class="card-boxed z-depth-1" style="position:fixed; width:25%; height: 800px; right:-10px; border-radius: 10px; padding: 5px;">
        					<div class="row col s12 row-no-margin boxed-divider">
	        					<h4><i class="small material-icons">textsms</i>&nbsp;News Feeds...</h4>
	        					
	        				</div>
	        				<div class="row col s12 row-no-margin boxed-divider">
	        					<h5><b>Patient in Progress</b></h5>
	        					<p>
	        						Juan Dela Cruz
	        					</p>
	        				</div>

	        				<div class="row col s12 row-no-margin boxed-divider">
	        					<h5><b>Patients Waiting</b></h5>
	        				</div>
	        				<div class="col s12">
	        					<?php
	        					for($i=0;$i<10;$i++){?>
	        						<div class="col s12">
	        							<i class="small material-icons">play_arrow</i>&nbsp;Patient Test &nbsp;<?php echo $i;?>
	        						</div>
	        					<?php
                            	} ?>
	        				</div>

        				</div>

  						<ul class="collapsible popout col s7 boxed" data-collapsible="accordion">
        					<li>
        						<div class="collapsible-header">Search Patient</div>
      							<div class="collapsible-body">
      								<div class="col s12">
      									<div class="input-field col s12" style="background-color: #fff">
			                                <input id="p_name" name="patient_name" type="text"> 
			                                <label for="p_name">Search Patient Name</label>
			                            </div>
			                        </div>
      							</div>
        					</li>
        					
        				</ul>
        				<div id="t_patients" class="col s7" style="background-color: #f5f2f0 ">
        					<div class="col s12">
        						<h4 class="test-font">Today's Patient(s)</h4>
        					</div>

        					<?php 
        					for($i=0;$i<10;$i++){?>


                            <div class="col row s12 b-bottom-dashed" style="padding-bottom: 5px;">
                                <div class="col s8"><i class="small material-icons">person</i>&nbsp;Patient Test &nbsp;<?php echo $i;?></div>
                                <div class="col s4">
                                	<button type="submit" class="btn "><i class="large material-icons">search</i>View</button>
                                </div>
                            </div>
                            <?php
                            } ?>
							
        				</div>
        				
        			</div>
        		</div>
        		<!-- APPOINTMENT:: -->
				<div id="appointment" class="row col s12" ng-app="consultApp" ng-controller="consultCtrl">
					<div id="main_buttons" class="col s3">
        				<div style="position:fixed; width:33%">
        					<div class="row col s12 ">
        						
        						<a href="#add_patient" class="waves-effect waves-light btn-large row col s8 text-left"><i class="large material-icons">group_add</i>&nbsp;Add Patient</a>
    							<br>
    							<a href="#schedule_patient" class="btn-large row col s8 text-left"><i class="large material-icons">add_to_queue</i>&nbsp;Schedule</a>
    							<br>
    							<a href="#" class="btn-large row col s8 text-left"><i class="large material-icons">save</i>&nbsp;Documents</a>
    							<br>
        						<a href="#" class="btn-large row col s8 text-left"><i class="large material-icons">sort</i>&nbsp;Others</a>
	        					
	        				</div>

        				</div>
        				
        			</div>
        			<div class="col s9">
        				<div class="card-boxed z-depth-1" style="position:fixed; width:25%; height: 800px; right:-10px; border-radius: 10px; padding: 5px;">
        					<div class="row col s12 row-no-margin boxed-divider">
	        					<h4><i class="small material-icons">textsms</i>&nbsp;News Feeds</h4>
	        					
	        				</div>
	        				<div class="row col s12 row-no-margin boxed-divider">
	        					<h5><b>Patient in Progress...</b></h5>
	        					<p>
	        						Juan Dela Cruz
	        					</p>
	        				</div>

	        				<div class="row col s12 row-no-margin boxed-divider">
	        					<h5><b>Patients Waiting...</b></h5>
	        				</div>
	        				<div class="col s12">
	        					<?php
	        					for($i=0;$i<10;$i++){?>
	        						<div class="col s12">
	        							<i class="small material-icons">play_arrow</i>&nbsp;Patient Test &nbsp;<?php echo $i;?>
	        						</div>
	        					<?php
                            	} ?>
	        				</div>

        				</div>

  						<ul class="collapsible popout col s7 boxed" data-collapsible="accordion">
        					<li>
        						<div class="collapsible-header">Search Patient</div>
      							<div class="collapsible-body">
      								<div class="col s12">
      									<div class="input-field col s12" style="background-color: #fff">
			                                <input id="p_name" name="patient_name" type="text"> 
			                                <label for="p_name">Search Patient Name</label>
			                            </div>
			                        </div>
      							</div>
        					</li>
        					
        				</ul>
        				<div id="t_patients" class="col s7 " style="background-color: #f5f2f0 ">
        					<div class="col s12">
        						<h4 class="test-font">Patient(s) Waiting...</h4>
        					</div>

        					<?php 
        					for($i=0;$i<10;$i++){?>


                            <div class="col row s12 b-bottom-dashed" style="padding-bottom: 5px;">
                                <div class="col s6"><i class="small material-icons">person</i>&nbsp;Patient Test &nbsp;<?php echo $i;?></div>
                                <div class="col s3">
                                	<button type="submit" class="btn orange">Consult</button>
                                </div>
                                <div class="col s3">
                                	<button type="submit" class="btn"><i class="material-icons ">person_outline</i> View </button>
                                </div>
                            </div>
                            <?php
                            } ?>
							
        				</div>
        				
        			</div>
					
				</div>
        	</div>
        	
        </div>
        <div class="card-boxed z-depth-1 center" style="position:fixed; width:100%; height: 100px; background-color: #0089ec; bottom: 0; color: #fff;">
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