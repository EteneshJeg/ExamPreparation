<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../helpers/init.php");

print "<pre>";
print_r($_POST);
print_r($_SESSION);

$email = "";
$password = "";
$role = ""; // Initialize role
$loggedinuser = array();

// Check if the form was submitted

// Grab values 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

// Update: Get role from form if set
if (isset($_POST['role'])) {
    $role = $_POST['role'];
}

if (!empty($email) && !empty($password)) {
    // Update: Pass role to loginUser function
    $loggedinuser = loginUser($email, $password, $role);
}

if (empty($loggedinuser)) {
    echo "Not Logged in";
} else {
    print_r($loggedinuser);
    $_SESSION['uHash'] = $loggedinuser['uHash'];
    $_SESSION['role'] = $loggedinuser['role']; // Store the role in session
}



?>