<?php

function Connect()
{
	$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Default XAMPP username is 'root'
$password = ""; // Default XAMPP password is empty
$dbname = "carrentalp"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	return $conn;
}
?>