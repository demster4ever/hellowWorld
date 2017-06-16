
/*Login Validation*/
function login_submit(){
	var formData = $("#login_form").serialize();
	$.ajax({
		type: "post",
		url: 'click_manager.php',
		data: formData+"&action=login",
		success: function(data){
			
			if(data == "success"){
				alert("Login Successful.");
				window.location.href = 'dashboard.php';
				return false;
			}else{
				alert(data);
				alert('Login Failed');
			}
		}
	});
}
/*Add Patient*/
function add_patient(){

	var lname 		= $('#p_lname').val();
	var fname 		= $('#p_fname').val();
	var mname 		= $('#p_mname').val();
	var birth 		= $('#p_birthdate').val()
	var dob_unformat= birth.split('-');
	var dob 		= dob_unformat[2]+'-'+dob_unformat[1]+'-'+dob_unformat[0];
	var age 		= $('#age').val();
	if(age=='NaN'){
    	age = 0;
    }

	var gender 		= $('#gender').val();
	var religion 	= $('#religion').val();
	var address 	= $('#address').val();
	var contact 	= $('#contact').val();

	var pstatus 	= $('input[name=pstatus]:checked').val();
	var p_old_new	= '';
	var pstatus_input = '';
	if(pstatus==1){
		p_old_new = 'new';
		var d = new Date();
		var month = d.getMonth(); month++;
		pstatus_input =  d.getFullYear()+'-'+month+'-'+d.getDate();
		
	}else{
		p_old_new = 'old';
		var old_reg	=	$('#p_olddate').val();
		var reg_unformat= old_reg.split('-');
		pstatus_input = reg_unformat[2]+'-'+reg_unformat[1]+'-'+reg_unformat[0];
		
	}

	var hmo_non 	= $("input[name=hmo_non]:checked").val();
	var allergy 	= $("input[name=allergy]:checked").val();
	var allergies_inp = '';
	if(allergy==1){
		allergies_inp = 'None';
	}else{
		allergies_inp = $('#allergies_inp').val();
	}

	var past_illnesses = [];
	$('#past_ill :checked').each(function(){
		past_illnesses.push($(this).val());
	});

	if($("#other_illness" ).is(':checked')){
		var illness_input = $('#illness_input').val();
		if(illness_input!='' && illness_input!=null){
			past_illnesses.push(illness_input);
		}
	}

	var surgeryGrp	= $('input[name=surgeryGrp]:checked').val();
	var surgery;
	if(surgeryGrp==1){
		surgery = 'None';
	}else if(surgeryGrp==2){
		surgery = 'Abdominal Surgery';
	}else{
		var inp = $('#surgeryNonAbdominalSpec').val();
		if(inp!='' && inp!=null){
			surgery = inp;
		}else{
			surgery = 'Non Abdominal Surgery';
		}
	}

	var problem = $('#patient_problem').val();
	var dataString = 'action=addpatient&last_name='+lname+'&first_name='+fname+'&middle_name='+mname+'&date_of_birth='+dob+'&age='+age+'&gender='+gender+'&religion='+religion+'&address='+address+'&contacts='+contact+'&new_old='+p_old_new+'&patient_registered='+pstatus_input+'&hmo_non='+hmo_non+'&allergies='+allergies_inp+'&past_illness='+past_illnesses+'&previous_surgery='+surgery+'&problem='+problem;
	//alert (dataString);
	$.ajax({
		type: "post",
		url: 'click_manager.php',
		data: dataString,
		success: function(data){
			
			if(data == "1"){
				alert("Patient added successfully.");
				window.location.href = 'dashboard.php';
				return false;
				
			}else{
				alert("Failed to add Patient.");
			}
		}
	});

	
}

/*Auto-set Age*/
$( "#p_birthdate" ).change(function() {
 	var age = getAge($('#p_birthdate').val());

 	$('#age').val(age);
 	$('#age_label').attr('class', 'active');
 	
});

$( "#other_illness" ).on('click',function () { 
	if($("#other_illness" ).is(':checked')){
		$('#illness_input').removeAttr('disabled');

	}else{
		$('#illness_input').attr('disabled', true);
		$('#illness_input').val('');
		//alert("Check available past illness/es or specify");
	}
});

/*Patient Status*/
$( "#old_patient" ).on('click',function () { 
	if($("#old_patient" ).is(':checked')){
		$('#p_olddate').removeAttr('disabled');

	}
});

$( "#new_patient" ).on('click',function () { 
	if($("#new_patient" ).is(':checked')){
		$('#p_olddate').attr('disabled', true);
		$('#p_olddate').val('');
	}
});

/*Allergies*/
$( "#allergy_spec" ).on('click',function () { 
	if($("#allergy_spec" ).is(':checked')){
		$('#allergies_inp').removeAttr('disabled');

	}
});

$( "#allergy_none" ).on('click',function () { 
	if($("#allergy_none" ).is(':checked')){
		$('#allergies_inp').attr('disabled', true);
		$('#allergies_inp').val('');
	}
});

/*Surgeries*/
$( "#surgeryNone" ).on('click',function () { 
	if($("#surgeryNone" ).is(':checked')){
		$('#surgeryNonAbdominalSpec').attr('disabled', true);
		$('#surgeryNonAbdominalSpec').val('');


	}
});

$( "#surgeryAbdominal" ).on('click',function () { 
	if($("#surgeryAbdominal" ).is(':checked')){
		$('#surgeryNonAbdominalSpec').attr('disabled', true);
		$('#surgeryNonAbdominalSpec').val('');
	}
});

$( "#surgeryNonAbdominal" ).on('click',function () { 
	if($("#surgeryNonAbdominal" ).is(':checked')){
		
		$('#surgeryNonAbdominalSpec').removeAttr('disabled');

	}
});



/*Get Current Age*/	
function getAge(dateString) {

    var dates = dateString.split("-");
    var d = new Date();
    var userday = dates[0];
    var usermonth = dates[1];
    var useryear = dates[2];
    var curday = d.getDate();
    var curmonth = d.getMonth()+1;
    var curyear = d.getFullYear();
    var age = curyear - useryear;

    if((curmonth < usermonth) || ( (curmonth == usermonth) && curday < userday   )){
        age--;
    }

    return age;
}