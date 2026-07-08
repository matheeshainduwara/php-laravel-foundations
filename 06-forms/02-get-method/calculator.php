<!--
Inputs:
Number 1
Number 2

Submit to:
result.php
result.php

Display:
Addition: __
Subtraction: __
Multiplication: __
Division: __

using $_GET.
-->

<!DOCTYPE html>
<html>
<head>
    <title>GET Method</title>
</head>

<body>

<h2>Calculator</h2>

<form action="result.php" method="get">
    Number 1:
    <input type="number" name="number1">
    <br><br>

     Number 2:
    <input type="number" name="number2">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>

