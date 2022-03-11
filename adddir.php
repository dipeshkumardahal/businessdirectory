<?php
$name = $_POST["name"];
$location = $_POST["location"];
$phone = $_POST["phone"];

echo("name is.$name.");

include 'db.php';

$sql = "INSERT INTO business(name, location, phone,)VALUES('$name','$location','$phone')";
$result = mysqli_connect($conn,$sql);
if($result){
    header('Location:index.php');
} 
?>