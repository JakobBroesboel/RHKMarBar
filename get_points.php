<?php
$servername = "localhost";
$username = "root";
$password = "123qweasd";
$dbname = "MarBar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from Streger";
$result = $conn->query($sql);

$array = $result->fetch_all();
echo json_encode($array);

$conn->close();
?>
