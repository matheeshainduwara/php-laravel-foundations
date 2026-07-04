<?php
/*
Create $username and $password.
If both are correct, display:
Login Successful
Otherwise display:
Invalid Username or Password
*/

$username="matheesha";
$password="12345";

if($username==="matheesha" && $password==="12345"){
    echo "Login Successful.";
}
else{
    echo "Login Failed.";
}