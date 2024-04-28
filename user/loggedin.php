<?php
require_once("../helpers/init.php");

print "<pre>";
print_r($_POST);


$email = "";
$password = "";
$loggedinuser = array();

// Check if the form was submitted

// Grab values 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if ( !empty($email) && !empty($password)) {
  $loggedinuser = loginUser( $email, $password);
}

if(empty($loggedinuser)){
    echo "Not Logged in";
}else{
    print_r($loggedinuser);
}