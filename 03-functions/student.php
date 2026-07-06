<?php
/*
Create a function:
studentDetails($name, $age, $degree)

Display:
Name: Matheesha
Age: 23
Degree: BSc (Hons) in Computing and Information Systems

Call the function twice with two different students.
*/

function studentDetails($name,$age,$degree){
    echo "Name: ".$name."<br>";
    echo "Age: ".$age."<br>";
    echo "Degree: ".$degree."<br>";
}

studentDetails("Matheesha",23,"CIS");
echo "<br>";
studentDetails("Induwara",22,"DS");