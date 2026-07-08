<!--
Create a Student Login System.

Fields:
Username
Password

Use:
method="post"
login_result.php

If:
Username = admin
Password = 1234

Display:
Login Successful

Otherwise:
Invalid Username or Password
-->

<!DOCTYPE html>
<html>
<head>
    <title>POST Method</title>
</head>

<body>

<h2>Login</h2>

<form action="login_result.php" method="post">
    User Name:
    <input type="text" name="userName">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>