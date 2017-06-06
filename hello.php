<?php

Echo "Hello World"; 

?>

<?php

$server = "localhost";
$username = "root";
$password="";
$db_name ="pabackend";

//Establish connection
$connect = mysqli_connect($server, $username, $password, $db_name);
if(!$connect){
	die("Connection failed: " .mysqli_connect_error());
} else {
	echo "Connected to Database successfully";
}

?>