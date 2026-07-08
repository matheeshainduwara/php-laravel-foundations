<?php

if(isset($_GET["number1"])){
    echo "Addition: ".($_GET["number1"]+$_GET["number2"])."<br>";
    echo "Substraction: ".($_GET["number1"]-$_GET["number2"])."<br>";
    echo "Multiplication: ".($_GET["number1"]*$_GET["number2"])."<br>";
    echo "Division: ".($_GET["number1"]/$_GET["number2"])."<br>";
}
else{
    echo "no data recieved";
}