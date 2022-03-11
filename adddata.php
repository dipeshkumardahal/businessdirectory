<?php
$name = $_POST["name"];
$location = $_POST["location"];
$phone = $_POST["phone"];
include 'db.php';
$sql = "INSERT INTO business (name, location, phone)
VALUES ('$name', '$location', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>