<?php

error_reporting();

include('constants.php');

$action = $_REQUEST['action'];

if($action=='login'){
	include(BASE_URL."Classes/User.php");

	$user =	new User();
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	echo $user->login_user($username, $password);

}

if($action=='addpatient'){

	include(BASE_URL."Classes/Patient.php");

	$patient =	new Patient();
	$new_patient = $patient->add_patient($_REQUEST['last_name'],$_REQUEST['first_name'],$_REQUEST['middle_name'],$_REQUEST['date_of_birth'],$_REQUEST['age'],$_REQUEST['gender'],$_REQUEST['religion'],$_REQUEST['address'],$_REQUEST['contacts'],$_REQUEST['new_old'],$_REQUEST['patient_registered'],$_REQUEST['hmo_non'],$_REQUEST['allergies'],$_REQUEST['past_illness'],$_REQUEST['previous_surgery'],$_REQUEST['problem']);

	/*action=addpatient&last_name='+lname+'&first_name='+fname+'&middle_name='+mname+'&date_of_birth='+dob+'&age='+age+'&gender='+gender+'&religion='+religion+'&address='+address+'&contacts='+contact+'&new_old='+p_old_new+'&patient_registered='+pstatus_input+'&hmo_non='+hmo_non+'&allergies='+allergies_inp+'&past_illness='+past_illnesses+'&previous_surgery='+surgery+'&problem='+problem;
	*/
	
	echo $new_patient;
}	


?>