<?php

if(isset($_POST["fullName"])){
    echo "Full Name: ".$_POST["fullName"]."<br>";
    echo "Email: ".$_POST["email"]."<br>";
    echo "Password: ".$_POST["password"]."<br>";
    echo "Age: ".$_POST["age"]."<br>";
}
else{
    echo "no data recieved";
}