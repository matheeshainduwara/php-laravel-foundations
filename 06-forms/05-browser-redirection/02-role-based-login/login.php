<!--
Create a Role-Based Login.

If:
Username: admin → Redirect to admin.php
Username: teacher → Redirect to teacher.php
Username: student → Redirect to student.php
Anything else → Redirect to error.php
-->

<!DOCTYPE html>
<html>
<head>
    <title>Browser-Redirection</title>
</head>

<body>

<h2>Login</h2>

<form action="login_process.php" method="post">
    User Name:
    <input type="text" name="username">
    <br><br>

    <input type="Submit" value="login">

</form>

</body>
</html>