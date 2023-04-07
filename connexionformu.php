<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase="food";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbase);
// Check connection
if ($conn->connect_error) {
  die("Connexion échoué: " . $conn->connect_error);
}
else {
  // echo ("connexion reusssit");
}
?>
