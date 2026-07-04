<?php
/*
Question 2 (Medium)

Create:
$username = "matheesha";
$password = "12345";

Check:
Is the username "matheesha" AND the password "12345"?
Is the username "admin" OR the password "12345"?
Is the username NOT "guest"?
*/

$username = "matheesha";
$password = "12345";

var_dump($username="matheesha" && $password="12345");
var_dump($username="admin" && $password="12345");
var_dump($username!=="guest");