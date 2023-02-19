<?php


$conn= new mysqli('localhost','root','','loginsystem')or die("Could not connect to mysql".mysqli_error($con));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
