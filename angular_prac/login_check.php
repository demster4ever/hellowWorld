<?php


include('constants.php');

include(BASE_URL."Classes/User.php");

$user =	new User();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

echo $user->login_user($username, $password);

?>