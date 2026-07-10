<?php

if(isset($_REQUEST["name"])){
    echo "Employee Name: ".$_REQUEST["name"]."<br>";
    echo "Department: ".$_REQUEST["department"]."<br>";
    echo "Salary: ".$_REQUEST["salary"]."<br>";

}
else{
    echo "no data recieved";
}