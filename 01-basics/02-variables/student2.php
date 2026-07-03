<?php
/*Question 2

Create variables to store:
Full Name
Age
Degree
GPA
Is Undergraduate

Display the output in a neat format. If the user is an undergraduate, display "Yes"; otherwise display "No".
*/

$fullName="Matheesha Induwara";
$age=23;
$degree="CIS";
$gpa=3.46;
$isUndergraduate=true;

echo "Full Name: $fullName<br>";
echo "Age: $age<br>";
echo "Degree: $degree<br>";

if($isUndergraduate){
    echo "Undergraduate: yes";
}
else{
    echo "Undergraduate: no";
}

