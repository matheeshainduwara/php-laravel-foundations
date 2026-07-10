<!--
Create a form with:
Employee Name
Department
Salary

Use:
method="post"

Submit to:
employee_details.php
using $_REQUEST.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Request</title>
</head>

<body>

<h2>Employee Details</h2>

<form action="employee_details.php" method="post">
    Employee Name:
    <input type="text" name="name">
    <br><br>

    Department:
    <input type="text" name="department">
    <br><br>

    Salary:
    <input type="number" name="salary">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>