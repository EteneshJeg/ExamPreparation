<?php
require_once('../helpers/init.php');

$fname = "";
$lname = "";
$email = "";
$password = "";
$role = "";

// Grab values 
if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
}
if (isset($_POST['lname'])) {
    $lname = $_POST['lname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['role'])) {
    $role = $_POST['role'];
}

// Validate input
$errors = array();
if (empty($fname)) {
    $errors[] = "First name is required";
}
if (empty($lname)) {
    $errors[] = "Last name is required";
}
if (empty($email)) {
    $errors[] = "Email is required";
}
if (empty($password)) {
    $errors[] = "Password is required";
}
if (empty($role)) {
    $errors[] = "Role is required";
}

// If there are errors, display them
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    // No errors, proceed with registration
    if (registerUser($fname, $lname, $email, $password, $role)) {
        echo "User registered successfully";
    } else {
        echo "Failed to register user";
    }
}
