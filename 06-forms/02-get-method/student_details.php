<?php

if(isset($_GET["name"])){
    echo "Name: ".$_GET["studentName"]."<br>";
    echo "Degree: ".$_GET["degree"]."<br>";
    echo "GPA: ".$_GET["gpa"]."<br>";
}
else{
    echo "no data recieved.";
}