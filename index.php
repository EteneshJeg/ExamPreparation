<?php

require_once("./helpers/init.php");
  $_SESSION['test'] = 'example';
  
  print "<pre>";
print_r($_POST);
print_r($_SESSION);
?>

<?php


// Start the session
// session_start();

// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if user is logged in (you can replace this condition with your own logic)
if (isset($_SESSION['uHash'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

// Simulating logout functionality (You can implement your own logout logic)
if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to homepage or login page
    header("Location: user/login.php"); // Change the URL to your desired location
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/user/css/styles.css">
</head>

<body>
    <h1>Home Page</h1>

    <?php if ($isLoggedIn) : ?>
        <h2 class="welcome-text">Welcome, <?php echo $_SESSION['fName']?></h2>
    <?php endif; ?>

    <header id="header">
        <nav id="navbar">
            <ul>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">About</a></li>
                <li><a href="#" class="nav-link">Services</a></li>
                <?php if ($isLoggedIn) : ?>
                    <!-- If user is logged in, show Logout -->
                    <li>
                    <form method="post">
                            <input type="submit" name="logout" value="Logout" class="nav-link" style="background-color: green;">
                    </form>
                    </li>
                <?php else : ?>
                    <!-- If user is logged out, show Login -->
                    <li><a href="./user/login.php" class="nav-link">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>

</html>