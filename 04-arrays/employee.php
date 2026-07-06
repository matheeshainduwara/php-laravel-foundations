<?php
/*
Associative-Arrays

Create an associative array named:
employee

with the following keys:
"name"
"position"
"salary"

Give them any values you like.

Then:
Display the employee's name.
Display the employee's salary.
Update the salary to a new value.
Display the updated salary.
*/

$employee = [
    "name"=>"Kamal",
    "position"=>"Software Developer",
    "salary"=>86000
];

echo $employee["name"]."<br>";
echo $employee["salary"]."<br>";
$employee["salary"]=94000;
echo $employee["salary"];