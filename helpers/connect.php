<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
// require_once("../config.php");
require_once($root."/config.php");
// echo $_SERVER['DOCUMENT_ROOT'];
 // connect to sql server


 $link = mysqli_init();
 $success = mysqli_real_connect(
    $link,
    $sql_db_host,
    $sql_db_user,
    $sql_db_pass,
    $sql_db_name,
    $port
 );
 if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
 }else{
   echo "Connected oneee  <br>";
 }



?>