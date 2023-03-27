<!DOCTYPE html>
<html>

<head>
    <title>Registration and Login</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form method="post" action="register.php">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required><br><br>
        <input type="submit" value="Register">
    </form>

    <h1>Login</h1>
    <form method="post" action="login.php">
        <label for="loginemail">Email:</label>
        <input type="email" id="loginemail" name="loginemail" required><br><br>
        <label for="loginpassword">Password:</label>
        <input type="password" id="loginpassword" name="loginpassword" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
