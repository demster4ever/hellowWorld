<?php
	include('db_config.php');

class Patient{

	
	public function add_patient($last_name,$first_name,$middle_name,$date_of_birth,$age, $gender, $religion, $address, $contacts, $new_old, $patient_registered,$hmo_non, $allergies, $past_illness, $previous_surgery, $problem){

		$sql = "INSERT INTO patients (last_name,first_name,middle_name, date_of_birth, age, gender, religion, address, contacts, new_old, patient_registered,hmo_non, allergies, past_illness, previous_surgery, problem) VALUES ('".$last_name."','".$first_name."','".$middle_name."','".$date_of_birth."',".$age.",'".$gender."',".$religion.",'".$address."','". $contacts."','".$new_old."','".$patient_registered."','".$hmo_non."','".$allergies."','".$past_illness."','".$previous_surgery."','".$problem."')";

		$saved	= mysql_query($sql);
		
		if($saved != 1) {
	      	return mysql_error();
	   	}
	   	
	   	return $saved;
	   	

	   	//return $sql;	
	   
		//return $mysqli->error;
	}

	public function get_patient($id){
		$patient_query	=	 mysql_query("SELECT * FROM users WHERE patient_id = '" . $id . "'");
				
		$patient = mysql_fetch_array($patient_query);

		if(!empty($patient)){
			return $patient;
		}else{
			return '';
		}
	}

	
}
?>