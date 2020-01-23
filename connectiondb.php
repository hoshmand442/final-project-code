<?php

if(isset($_POST['username'])){
	$username =$_POST['username'];	
}


$password = isset($_POST['password']);
$email = isset($_POST['email']);
$phonenumber = isset($_POST['phonenumber']);

// Create connection
$conn = new mysqli('localhost','root','','information');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (username, password, email, phonenumber) 
VALUES ('$username', '$password', '$email', '$phonenumber')";

$run=mysqli_query($conn,$sql);
if($run==TRUE)
     echo "seccess" ;


else
	echo "error_log(false)";


$conn->close();

?>
