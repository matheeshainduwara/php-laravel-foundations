<?php
/*
Display:
Request Method
Current PHP File
Server Name
Browser Information

using $_SERVER.
*/

echo ("Request Method: ".$_SERVER["REQUEST_METHOD"]."<br>");
echo ("Current PHP File: ".$_SERVER["PHP_SELF"]."<br>");
echo ("Server Name: ".$_SERVER["SERVER_NAME"]."<br>");
echo ("Browser Information: ".$_SERVER["HTTP_USER_AGENT"]."<br>");