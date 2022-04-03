<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 

if ($conn === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name  = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
$comment = mysqli_real_escape_string($conn, $_REQUEST['message']);
 
// Attempt insert query execution
$sql = "INSERT INTO data (name, email,subject, comment) VALUES ('$name', '$email', '$subject ', '$comment ')";
if (mysqli_query($conn, $sql)) {
     echo  "<script> alert('Thank your for your comment Mr/Mrs.  $name')</script>";
     echo "<script>window.open('index.php', '_self')</script>";

} else {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
























// sql to create table
// $sql = "CREATE TABLE data (
// id INT(11)  AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// email VARCHAR(30) NOT NULL,
// subject VARCHAR(250),
// comment VARCHAR(250)
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table data created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();


// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//      $name   = test_input($_POST["name"]);
//      $email   = test_input($_POST["email"]);
//      $subject  = test_input($_POST["subject"]);
//      $comment  = test_input($_POST["message"]);
    
     // $sql = "INSERT INTO data (name,email,subject,message) VALUES (?,?,?,?)";


     // prepare and bind
     // $stmt = $conn->prepare("INSERT INTO data (name,email,subject,message) VALUES ($name, $email, $subject, $comment)");
     // $stmt->bind_param($name, $email, $subject, $message);

     // $stmt->execute();
//      $stmtinsert = $db->prepare($sql);
//      $result = $stmtinsert -> execute([$name, $email, $subject,$message]);
//      if ($result) {
//          echo "successfully";
//      }
//      else
//      {

//           echo "Error creating table: " . $conn->error;
//      }


// }

// function test_input($data)
// {
//      $data = trim($data);
//      $data = stripslashes($data);
//      $data = htmlspecialchars($data);
//      return $data;
// }

