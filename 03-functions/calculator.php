<?php
/*
Create three separate functions:
add()
subtract()
multiply()

Each function should use the following values inside the function:
$a = 20;
$b = 10;

The functions should display:
Addition: 30
Subtraction: 10
Multiplication: 200

Finally, call all three functions.
*/



function add(){
    $a=20;
    $b=10;
    echo "Addition: ".($a + $b)."<br>";
} 

function subtraction(){
    $a=20;
    $b=10;
    echo "Subtraction: ".($a - $b)."<br>";
} 

function multiplication(){
    $a=20;
    $b=10;
    echo "Multiplication: ".($a * $b)."<br>";
} 

add();
subtraction();
multiplication();