<?php

if(isset($_REQUEST["name"])){
    echo "Name: ".$_REQUEST["name"]."<br>";
    echo "Email: ".$_REQUEST["email"]."<br>";
    echo "Message: ".$_REQUEST["message"]."<br>";

}
else{
    echo "no data recieved";
}