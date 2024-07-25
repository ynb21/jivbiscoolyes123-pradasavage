<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "xVLe7#_VulifyzAe3$."; // Default XAMPP password
$dbname = "webpage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update view count
$sql = "UPDATE view_count SET count = count + 1 WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "View count updated successfully";
} else {
    echo "Error updating view count: " . $conn->error;
}

$conn->close();
?>