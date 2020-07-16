<?php
$servername = "https://databases.000webhost.com/";
$username = "admin";
$password = "JR0%Iz^ssb3W]M?N";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  $_SESSION['MSG'] = " Error! " . $conn->connect_error;
  die();
}
else
{
  $_SESSION['MSG'] = " Success!";
}
?>
