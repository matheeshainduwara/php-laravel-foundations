<?php
/*
Question 1 

Create:
$month = 2;

Use match to display:
1 → January
2 → February
3 → March
4 → April

Otherwise:
Invalid Month
*/

$month=2;

$message= match ($month){
    1=>"January",
    2=>"February",
    3=>"March",
    4=>"April",
    default=>"Invalid month"
};

echo "$message";