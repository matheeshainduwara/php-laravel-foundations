<?php

if($_POST["userName"]!=="admin"){
    echo "Invalid Username<br>";
}
else if($_POST["password"]!=="12345"){
    echo "Invalid Password<br>";
}
else if($_POST["userName"]=="admin"&& $_POST["password"]==12345){
    echo "Login Successful.<br>";
}
