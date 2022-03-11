<?php
$host= 'localhost';
$user ='root';
$pass='';
$dbname='sodhpuch';


$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
?>
<?php
$mysqli = new mysqli("localhost","root","","sodhpuch");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>