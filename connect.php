<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentRecord";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Include the PHP files to display tables
echo "STUDENT";
include 'show_student.php'. "<br>";
include 'show_courses.php';
include 'show_enrollments.php';
include 'show_instructors.php';


?>