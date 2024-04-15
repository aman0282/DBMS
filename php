<?php
// Connect to MySQL database
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "database"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SQL command
$sqlCommand = $_POST['sql_command'];
$result = $conn->query($sqlCommand);

if ($result === TRUE) {
    echo "SQL command executed successfully.";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>