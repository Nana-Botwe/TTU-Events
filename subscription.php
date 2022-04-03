<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gad_event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 

if ($conn === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name  = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO subscrib(name, email) VALUES ('$name', '$email')";
if (mysqli_query($conn, $sql)) {
     echo  "<script> alert('Thank you Mr/Mrs. $name for your Subscription')</script>";
     echo "<script>window.open('index.php', '_self')</script>";

} else {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

