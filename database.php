<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "eindopdracht_php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); 
}