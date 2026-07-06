<?php
/*

Multi-Dimensional Arrays

Create a multidimensional array named:
employees

Store 3 employees, each with:
Name
Position
Salary

Display:
The second employee's name
The third employee's salary
Update the first employee's position to "Senior Developer"
Display the updated position
*/

$employees=[
    ["Amal","Quality Assuarance",86000],
    ["Chamal","Software Engineer",100000],
    ["Kasuni","Project Manager",95000]
];

echo $employees[1][0]."<br>";
echo $employees[2][2]."<br>";
$employees[0][1]="Senior Developer";
echo $employees[0][1];
