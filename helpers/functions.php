<?php

require_once("init.php");

//clean up

function cleanUp($data)
{
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  $data = trim($data);

  return $data;
}

//Register function
function registerUser($fname, $lname, $email, $password)
{
  global $link;

  $fname = cleanUp($fname);
  $lname = cleanUp($lname);
  $email = cleanUp($email);
  $password = md5($password);
  $joined_date = date("Y-m-d H:i:s");
  $uHash = md5($email);

  $query_text = "INSERT INTO users (email, fName, lName, password, joined_date, uHash) VALUES (?, ?, ?, ?, Now(), ?)";
  $query = mysqli_prepare($link, $query_text);
  mysqli_stmt_bind_param($query, 'sssss', $email, $fname, $lname, $password, $uHash);
  mysqli_stmt_execute($query);

  if (mysqli_stmt_affected_rows($query) > 0) {
    echo "sertuwal konjo";
  } else {
    echo "alseram yene web";
  }
}

// Login 

// check if user name and password is correct 

function loginUser($email, $password)
{
  global $link;
  $email = cleanUp($email);
  $password = md5($password);

  $fetched_Data = array();

  $query_text = "SELECT * FROM Users WHERE email = ? AND password = ?";

  // Prepare the query
  $stmt = mysqli_prepare($link, $query_text);
  if (!$stmt) {
    die("Error: " . mysqli_error($link));
  }

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, "ss", $email, $password);

  // Execute the query
  $result = mysqli_stmt_execute($stmt);
  if (!$result) {
    die("Error: " . mysqli_stmt_error($stmt));
  }

  // Get the result set
  $query = mysqli_stmt_get_result($stmt);

  if ($query) {
    while (($row = mysqli_fetch_assoc($query))) {
      $fetched_Data = $row;
    }
  }
  // Close the statement
  mysqli_stmt_close($stmt);

  return $fetched_Data;
}
