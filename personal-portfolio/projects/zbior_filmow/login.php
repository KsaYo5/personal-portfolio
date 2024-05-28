<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style3.css">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>

    

    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <label for="new_username">New Username:</label><br>
        <input type="text" id="new_username" name="new_username" required><br>
        <label for="new_password">New Password:</label><br>
        <input type="password" id="new_password" name="new_password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>