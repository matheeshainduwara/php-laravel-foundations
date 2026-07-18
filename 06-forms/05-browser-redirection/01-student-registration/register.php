<!--
If the user enters:
Username: student
Password: 12345

Redirect to:
success.php

Otherwise redirect to:
error.php
-->

<!DOCTYPE html>
<html>
<head>
    <title>Browser-Redirection</title>
</head>

<body>

<h2>Register Details</h2>

<form action="register_process.php" method="post">
    User Name:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="Submit" value="login">

</form>

</body>
</html>