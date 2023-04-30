<?php
$a = $_POST['name'];
$b = $_POST['number'];
$c = $_POST['email'];
$d = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact VALUES ('$a', '$b', '$c' ,'$d')";

if ($conn->query($sql) === TRUE) {
  
  header("Location: index.html");
  echo 'alert("Submitted Successfully")';
  exit();
} 
else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>