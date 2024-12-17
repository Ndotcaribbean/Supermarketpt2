<?php
//logout file
session_start();

//unset all session variables
$_session = array();

if (isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-3600,'/');

}

session_destroy();


//redirects to login page
header('Location:login-form.php');
exit();
?>