<?php

echo "hello world";
require_once('../helpers/init.php');

$password = "";
$fname = "";
$lname = "";
$email = "";
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
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    registerUser($fname, $lname, $email, $password);
}
