<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";


$first_name = $_POST['first_name'];
$last_name= $_POST['last_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city =$_POST[city];
$dob = $_POST['dob'];
$course = $_POST['course'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (first_name, last_name, address, gender, state, city, dob, course)
VALUES ('$first_name', '$last_name', '$address', '$gender', '$state', '$city', '$dob', '$course')";

if ($conn->query($sql) === TRUE) {
  $status = "success";
  #go back to the form
  header('location:registration.php?status='.$status);

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
