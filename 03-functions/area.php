<?php
/*
Create a function:
calculateArea($length, $width)

The function should:
Return the area (length × width).
Store the returned value in a variable.

Display Area.
*/

function calculateArea($length,$width){
    return ($length*$width);
}

$shape1=calculateArea(4,6);
echo "Area: ".$shape1."<br>";
$shape2=calculateArea(5,5);
echo "Area: ".$shape2."<br>";
