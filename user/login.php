<?php

// Initialize session
session_start();

// Check if there is an error message in session
if (isset($_SESSION['login_error'])) {
    // Display the error message
    echo "<p style='color: red; font-size: 16px; font-weight:bold;'>" . $_SESSION['login_error'] . "</p>";
    // Clear the error message from session
    unset($_SESSION['login_error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="/user/loggedin.php" method="post">
        <lable for="email">Email:</lable> <br>
        <input type="email" name="email" /> <br> <br>

        <lable for="password">Password:</lable> <br>
        <input type="password" name="password" /> <br> <br>

        <input type="submit" value="Login" />

    </form>
</body>

</html>