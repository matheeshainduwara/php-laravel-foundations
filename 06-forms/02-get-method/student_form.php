<!--
Create a form with:

Student Name
Degree
GPA

Use:
method="get"

Submit to:
student_details.php
-->
<!DOCTYPE html>
<html>
<head>
    <title>GET Method</title>
</head>

<body>

<h2>Student Form</h2>

<form action ="student_details.php" method="get">
    Student Name:
    <input type="text" name="studentName">
    <br><br>

    Degree:
    <input type="text" name="degree">
    <br><br>

    GPA:
    <input type="text" name="gpa">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>
