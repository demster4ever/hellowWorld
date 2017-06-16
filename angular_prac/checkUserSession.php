<?php
session_start();

$user = isset($_SESSION['user'])?$_SESSION['user']:'';

if(!empty($user)){
    //echo 'Has session. Proceed to main page';
}else{
    //echo 'No user session. Proceed to login.';
}
?>