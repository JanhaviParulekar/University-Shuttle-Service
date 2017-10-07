<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ride_details";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$time = $_POST['state'];
$date = $_POST['selectdate'];
$userid=$_SESSION["login_user"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ride_details (fname, lname, ride_time,userid,ride_date)
VALUES ('$first_name', '$last_name', '$time', '$userid', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>