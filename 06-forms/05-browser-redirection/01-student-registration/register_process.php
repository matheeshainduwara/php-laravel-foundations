<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "student" && $password == "1234") {

    header("Location: success.php");
    exit();

} else {

    header("Location: error.php");
    exit();

}