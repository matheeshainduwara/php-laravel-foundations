<?php
/*
Question 2 

Create:
$marks = 72;

Display:
Grade A → 75 and above
Grade B → 65–74
Grade C → 50–64
Fail → Below 50

Use if, elseif, and else.
*/

$marks=72;

if($marks>=75){
    echo "Grade A";
}
else if($marks>=65){
    echo "Grade B";
}
else if($marks>=50){
    echo "Grade C";
}
else{
    echo "Fail";
}