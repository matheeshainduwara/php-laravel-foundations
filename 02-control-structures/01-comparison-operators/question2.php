<?php
/*
Question 2 (Medium)

Create:
$password = "12345";
$userInput = "12345";

Use:
==
===
!=
!==

Display the result of each comparison using var_dump().
*/

$password="12345";
$userInput="12345";

var_dump($password==$userInput);
var_dump($password===$userInput);
var_dump($password!=$userInput);
var_dump($password!==$userInput);

/*
Operator	Meaning	                Example
==	        Equal to	            $a == $b
===	        Identical               (value + type)	$a === $b
!=	        Not equal	            $a != $b
!==	        Not identical	        $a !== $b
>	        Greater than	        $a > $b
<	        Less than	            $a < $b
>=	        Greater than or equal	$a >= $b
<=	        Less than or equal	    $a <= $b
*/