<?php
/*
Question 2 

Create:
$role = "admin";

Display:
admin → Welcome Administrator
teacher → Welcome Teacher
student → Welcome Student
guest → Welcome Guest

Otherwise display:
Unknown Role
*/

$role="admin";

switch($role){
    case "admin":
        echo "Welcome Administrator.";
        break;
    case "teacher":
        echo "Welcome Teacher.";
        break;
    case "student":
        echo "Welcome Student.";
        break;
    case "guest":
        echo "Welcome Guest.";
        break;
    default:
        echo "Invalid Role.";

}