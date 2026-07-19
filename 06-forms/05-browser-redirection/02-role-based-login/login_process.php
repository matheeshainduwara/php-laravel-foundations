<?php
$username= $_POST["username"];

if ($username=="admin"){
    header("Location: admin.php");
    exit();
}
elseif($username=="teacher"){
    header("Location: teacher.php");
    exit();
}
elseif($username=="student"){
    header("Location: student.php");
    exit();
}
else{
    header("Location: error.php");
    exit();
}
