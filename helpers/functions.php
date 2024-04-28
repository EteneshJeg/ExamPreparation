<?php
// function abebe(){
//     echo "I am here";
// }

// function cleanUp($data){
//     // Agood article on how to sanitize user input 

//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);

//     return $data;
// }

// function registerUser($fname,$lname,$email,$password){
    
//     global $link;

//     $fname = cleanUp($fname);
//     $lname = cleanUp($lname);
//     $email = cleanUp($email);
//     $password = md5($password);
//     $joined_date = date("Y-m-d H:i:s");
//     $uHash = md5($email);

    // $query_text = "INSERT INTO users (email,fName,lName,password,joined_date,uHash) VALUES ('?','?','?','?',Now(),?)";

// Register 
    function registerUser($firstName, $lastName, $email, $password)
{
    global $link; // Assuming $link is the established database connection

    $uHash = md5($email);
    $password = md5($password);

    $query = "INSERT INTO Users (fName, lName, email, password, joined_date, uHash) VALUES (?, ?, ?, ?, NOW(), ?)";

    // Prepare the query
    $stmt = mysqli_prepare($link, $query);
    if (!$stmt) {
        die("Error: " . mysqli_error($link));
    }

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $password, $uHash);

    // Execute the query
    $result = mysqli_stmt_execute($stmt);
    if (!$result) {
        die("Error: " . mysqli_stmt_error($stmt));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// login 
function  loginUser( $email, $password){
    global $link; // Assuming $link is the established database connection

    $email = $email;
    $password = md5($password);

    $fetched_data = array() ;
    
    $query_text = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $query = mysqli_query($link,$query_text);
    if($query){
        while($row = mysqli_fetch_assoc($query)){
        $fetched_data = $row;
    }
    }
    return $fetched_data;
}
    
    
//     $query = mysqli_query($link,$query_text);

//     if($query){
//         // return true;
//     echo "connected";

//     }else{
//         echo "not connected";
// }
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank you page</title>
  </head>
  <body>
    <header>
      <h1>Thank you for your message!</h1>
     
    </header>
    <section>We will get back to you soon.</section>
  </body>
</html>