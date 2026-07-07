<?php

/*
==========================================================
                PHP MINI PROJECT 01
             STUDENT MANAGEMENT SYSTEM
==========================================================

Objective:
Develop a simple Student Management System using PHP to
practice the following concepts:

- Variables
- Functions
- Function Parameters
- Return Values
- Indexed Arrays
- Associative Arrays
- Multidimensional Arrays
- foreach Loop
- if...else
- count()

----------------------------------------------------------
Problem Statement
----------------------------------------------------------

A university wants a simple PHP program to manage student
records.

Each student should have the following details:

- Name
- Age
- Degree
- GPA

Store all student records in a multidimensional
associative array.

----------------------------------------------------------
Tasks
----------------------------------------------------------

Task 01
--------
Create a function:

displayStudents($students)

Display all student details using a foreach loop.

Expected Output Format:

-----------------------------------
Student 1
-----------------------------------
Name    :
Age     :
Degree  :
GPA     :

-----------------------------------
Student 2
-----------------------------------
...


Task 02
--------
Create a function:

countStudents($students)

Display the total number of students.

Example:

Total Students : 3


Task 03
--------
Create a function:

findTopStudent($students)

Find the student with the highest GPA.

Display:

Top Student
Name :
GPA  :

Use:
- foreach
- if statement

Do NOT sort the array.


Task 04
--------
Create a function:

checkStudentStatus($students)

Determine whether each student has PASSED or FAILED.

Rule:

GPA >= 2.0  → PASS
GPA < 2.0   → FAIL

Example:

John  : PASS
Alice : PASS
David : PASS


Task 05
--------
Create a function:

addStudent(&$students)

Add the following student to the array:

Name   : Matheesha
Age    : 23
Degree : CIS
GPA    : 3.80

After adding the student,
display all students again.


Task 06
--------
Create a function:

searchStudent($students, $name)

Search for a student by name.

If found:

Student Found
Name :
Age :
Degree :
GPA :

Otherwise display:

Student Not Found

*/

$students=[
    [
        "name"=>"Kasun",
        "age"=>23,
        "degree"=>"CIS",
        "gpa"=>2.00
    ],
    [
        "name"=>"Ravindu",
        "age"=>23,
        "degree"=>"IS",
        "gpa"=>2.76
    ],
    [
        "name"=>"Sachini",
        "age"=>23,
        "degree"=>"SE",
        "gpa"=>1.98
    ],
    [
        "name"=>"Kavindu",
        "age"=>23,
        "degree"=>"DS",
        "gpa"=>3.45
    ],
    [
        "name"=>"Tharushi",
        "age"=>23,
        "degree"=>"SE",
        "gpa"=>3.98
    ]   
];

//task 1
function displayStudents($students){
    $num=1;
    foreach($students as $student){
        echo "---------------------------------<br>";
        echo "Student ".$num."<br>";
        echo "---------------------------------<br>";
        echo "Name: ".$student["name"]."<br>";
        echo "Age: ".$student["age"]."<br>";
        echo "Degree: ".$student["degree"]."<br>";
        echo "GPA: ".$student["gpa"]."<br>";
        echo "<br>";
        $num+=1;
    }
    
}

displayStudents($students);

//task 2
function countStudents($students){
    echo "---------------------------------<br>";
    echo "Total Students: ".count($students)."<br>";
    echo "---------------------------------<br>";
    echo "<br>";
}

countStudents($students);

//task 3
function findTopStudent($students){
    $topStudent=$students[0];
    foreach($students as $student){
        if($student["gpa"]>$topStudent["gpa"]){
            $topStudent=$student;
        } 
    }
        echo "---------------------------------<br>";
        echo "Top Student <br>";
        echo "---------------------------------<br>";
        echo "Name: ".$topStudent["name"]."<br>";
        echo "GPA: ".$topStudent["gpa"]."<br>";
        echo "<br>";
}

findTopStudent($students);

//task 4
function checkStudentStatus($students){
    echo "---------------------------------<br>";
    echo "Student Status <br>";
    echo "---------------------------------<br>";
    foreach($students as $student){
        if($student["gpa"]>=2.0){
            echo $student["name"]." : "."Pass<br>";
        }
        else{
            echo $student["name"]." : "."Fail<br>";
        }
    }
    echo "<br>";
    
}

checkStudentStatus($students);

//task 5
function addStudent($students){
    $newStudent = [
    "name" => "Matheesha",
    "age" => 23,
    "degree" => "CIS",
    "gpa" => 3.80
    ];
    array_push($students,$newStudent);
    return $students;
}

echo "---------------------------------<br>";
echo "New Student List <br>";
echo "---------------------------------<br>";
$students = addStudent($students);
displayStudents($students);

//task 6
function searchStudent($students, $name){

    $findStudent=false;
    foreach($students as $student){
        if($name==$student["name"]){
            echo "Name: ".$student["name"]."<br>";
            echo "Age: ".$student["age"]."<br>";
            echo "Degree: ".$student["degree"]."<br>";
            echo "GPA: ".$student["gpa"]."<br>";
            echo "<br>";
            $findStudent=true;
            break;    
        }    
    }
    if($findStudent==false){
        echo "Student not found.<br>";
    }
}

searchStudent($students,"Matheesha");
searchStudent($students,"Induwara");