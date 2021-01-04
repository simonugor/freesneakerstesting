<?php
$message = "You will be notified about the drop!";
$error_message1 = "Username should not be empty!"; #skontrolovať či takéto meno v databáze ešte nie je!
$error_message2 = "Full Name should not be empty!";
$error_message3 = "Email should not be empty!"; #skontrolovať či taký v databáze ešte nie je!
$error_message4 = "Age should not be empty!";
$error_message5 = "Password should not be empty!";
$username_insert = filter_input(INPUT_POST, 'username');
$fullname_insert = filter_input(INPUT_POST, 'fullname');
$email_insert = filter_input(INPUT_POST, 'email');
$age_insert = filter_input(INPUT_POST, 'age');
$password_insert = filter_input(INPUT_POST, 'password'); #skontrolovať či sú heslá rovnaké a dosť dlhé!
if (!empty($username_insert) and !empty($fullname_insert) and !empty($email_insert) and !empty($age_insert) and !empty($password_insert)) {
$host = "sql310.epizy.com";
$dbusername = "epiz_25702891";
$dbpassword = "I5lZnt9WYlpzX";
$dbname = "epiz_25702891_register";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register_data (username, full_name, email, age, pass)
values ('$username_insert', '$fullname_insert', '$email_insert', '$age_insert', '$password_insert')"; 
if ($conn->query($sql)){
echo "<script type='text/javascript'>alert('$message');</script>";
header( "Location: http://scaredofdeath.online/registered.html" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
} elseif (empty($username_insert)) {
    echo "<script type='text/javascript'>alert('$error_message1');</script>";
die();
} elseif (empty($fullname_insert)) {
    echo "<script type='text/javascript'>alert('$error_message2');</script>";
die();
} elseif (empty($email_insert)) {
    echo "<script type='text/javascript'>alert('$error_message3');</script>";
die();
} elseif (empty($age_insert)) {
    echo "<script type='text/javascript'>alert('$error_message4');</script>";
die();
} elseif (empty($password_insert)) {
    echo "<script type='text/javascript'>alert('$error_message5');</script>";
die();
}
?> 