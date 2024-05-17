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
        <label for="email">Email:</label><br>
        <input type="email" name="email" /><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" /><br><br>

        <label for="role">Role:</label><br>
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <input type="submit" value="Login" />
    </form>

</body>

</html>