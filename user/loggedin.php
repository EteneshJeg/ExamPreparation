<?php
require_once("../helpers/init.php");

print "<pre>";
print_r($_POST);
print_r($_SESSION);


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
if (!empty($email) && !empty($password)) {
    $loggedinuser = loginUser($email, $password);
}

if (empty($loggedinuser)) {
    echo "Not Logged in";

    $_SESSION['login_error'] = "Invalid credentials";
    header("Location: ./login.php");
} else {
    print_r($loggedinuser);
    $_SESSION['uHash'] = $loggedinuser['uHash'];
    $_SESSION['fName'] = $loggedinuser['fName'];
    
    // echo "successfully login";
    header("Location: ../index.php");
}
