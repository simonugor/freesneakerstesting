<?php

$message = "Connected succesfully and both databoxes are filled";
$message1 = "Username should not be empty";
$message2 = "Password should not be empty";

$host = "sql310.epizy.com";
$dbusername = "epiz_25702891";
$dbpassword = "I5lZnt9WYlpzX";
$dbname = "epiz_25702891_freesneakers";

$email_input = filter_input(INPUT_POST, 'email');

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    } 
    else {
        echo "<script type='text/javascript'>alert('Wrong data');</script>";
    }
?> 