<?php
/*
Question 2 

Create:
$status = "pending";

Use match to display:
pending → Waiting for Approval
approved → Request Approved
rejected → Request Rejected

Otherwise:
Unknown Status
*/

$status="pending";

$message= match($status){
    "pending"=>"Waiting for Approval",
    "approved"=>"Request Approved",
    "rejected"=>"Request Rejected",
    default=>"Unknown Status."
};

echo "$message";