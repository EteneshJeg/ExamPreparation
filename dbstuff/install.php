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
   echo "Connected <br>";
 }

//  Query file 
$queryfile = 'dbQuery.sql';
// Temporary variable, used to store current query 
$templine = '';
// Read in entire file 
$lines = file($queryfile);

// Loop through each line 
foreach ($lines as $line){
    // skip it if it's a comment 
    if (substr($line, 0, 2) =='--' || $line == '') continue;
    // Add this line to the current segment 
    $templine .= $line;
    $query =false;
    // If it has a semicolon at the end, it's the end of the query 
    if (substr(trim($line), -1, 1) == ';' ) {
        // Perform the query 
    $query = mysqli_query($link, $templine);
        // Reset temp variable to empty 
        $templine = '';
    }
}

echo "done";


?>