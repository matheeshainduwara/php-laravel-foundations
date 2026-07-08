<!--
Create a form with:
Full Name
Email
Password
Age

Use:
method="post"

Submit to:
registration_details.php
-->

<!DOCTYPE html>
<html>
<head>
    <title>POST Method</title>
</head>

<body>

<h2>Registration</h2>

<form action="registration_details.php" method="post">
    Full Name:
    <input type="text" name="fullName">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    Age:
    <input type="number" name="age">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>
