<?php 
include('db_config.php');

class User{

	
	public function add_user(){

	}

	public function delete_user(){

	}

	public function update_user(){

	}

	public function select_user(){

	}

	public function login_user($username, $password){

		$user_query	=	 mysql_query("SELECT * FROM users WHERE user = '" . $username . "'");
				
		$user = mysql_fetch_array($user_query);

		if($user['pass'] == $password){
			return "success";
		}else{
			return "failed";
		}
			
	}

	public function logout_user(){

	}

}

?>