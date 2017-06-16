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
				        	<li class="tab"><a class="active" href="#dashboard"><h4>Dashboard</h4></a></li>
				        	<li class="tab"><a class="" href="#appointment"><h4>Appointments</h4></a></li>
				      	</ul>
				      	
				    </div>	
				</nav>
        	</div>
        	<div id="main_content" class="main-content" style="padding-top: 15px;">
        		<!-- DASHBOARD -->
        		
        		<div id="dashboard" class="row col s12">
        			<div class="col s3">
        			</div>
        			<div class="col s6">
        				
        				<div id="schedule_patient" class="col s7 boxed scrollspy">
        					<div class="col s12">
        						<h4><i class="material-icons">schedule</i>&nbsp;Schedule a Patient</h4>
        					</div>
                            <div class="input-field col s12">
                                <input id="sp_name" name="sp_name" type="text"> 
                                <label for="sp_name">Search Patient Name</label>
                            </div>
                            <div class="input-field col s12">
                            	Date of Appointment
                            	<input id="p_schedule" placeholder="Select Date" name="p_schedule" type="date" class="datepicker">
                            	
                            </div>
                            <div class="row col s7">
                                <button type="submit" class="btn ">Schedule Patient</button>
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