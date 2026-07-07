<?php
/*
Question 1
Create an indexed array and display all elements using for each.
*/

//indexed array
$fruits=["Mango","Apple","Banana","Strawberry"];

foreach($fruits as $fruit){
    echo "Friuts: ".$fruit."<br>";
}

echo "<br>";

/*
Question 2
Create an associative array and display all elements using for each.
*/

//associative array
$user=[
    "name"=>"Matheesha",
    "age"=>23,
    "Degree"=>"CIS"
];

foreach($user as $key=> $value){
    echo $key.": ".$value."<br>";
}