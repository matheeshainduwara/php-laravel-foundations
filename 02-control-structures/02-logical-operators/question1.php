<?php
/*
Question 1 

Create question1.php.
$age = 25;

Use var_dump() to check:
Is age greater than or equal to 18 AND less than or equal to 30?
Is age less than 18 OR greater than 60?
*/

$age=25;

var_dump($age>=18 && $age<=30);
var_dump($age<18 || $age<60);
