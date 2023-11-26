<?php
$servername = "localhost:3307";
$username = "root";
$dbname = "database_ikn";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>