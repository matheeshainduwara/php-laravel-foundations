<!--
Create a Feedback Form.

Fields:
Name
Email
Message

Submit to:
feedback_result.php

Display the submitted values using $_REQUEST.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Request</title>
</head>

<body>

<h2>Feedback Form</h2>

<form action="feedback_result.php" method="post">
    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Message:
    <input type="text" name="message">
    <br><br>

    <input type="Submit" value="submit">

</form>

</body>
</html>