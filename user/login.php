<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/user/loggedin.php" method = "post">
        <lable for="email">Email:</lable> <br>
        <input type="email" name="email" /> <br> <br>

        <lable for="password">Password:</lable> <br>
        <input type="password" name="password" /> <br> <br>

        <input type="submit" value="Login" />

    </form>
</body>
</html>