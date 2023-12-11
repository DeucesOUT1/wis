<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <title>Setup</title>
</head>
<body>

<ul class="navigation-bar">
        <li><a href="Student_record.php">StudentRecord</a></li>
        <li><a href="Course_Record.php">Course</a></li>
        <li><a href="Instructor_Record.php">Instructor</a></li>
        <li><a href="Enrollment_Record.php">Enrollment</a></li>
        <li><a href="setup.php">Setup</a></li>
    </ul>

    <h1>Timmango Database Setup</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}


$sql = "CREATE DATABASE IF NOT EXISTS Timmango";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


$conn->select_db("Timmango");


$sql = "CREATE TABLE IF NOT EXISTS student (
    StudentID MEDIUMINT NOT NULL AUTO_INCREMENT,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50),
    DateOfBirth date,
    Email varchar(50),
    Phone INT(20),
    PRIMARY KEY(StudentID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS course (
    CourseID MEDIUMINT NOT NULL AUTO_INCREMENT,
    CourseName varchar(100),
    Credits INT(255),
    PRIMARY KEY(CourseID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table course created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS instructor (
    InstructorID MEDIUMINT NOT NULL AUTO_INCREMENT,
    FirstName varchar(50),
    LastName varchar(50),
    Email varchar(50),
    Phone INT(20),
    PRIMARY KEY(InstructorID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table instructor created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS enrollment (
    EnrollmentID MEDIUMINT NOT NULL AUTO_INCREMENT,
    StudentID MEDIUMINT,
    FOREIGN KEY (StudentID) REFERENCES student(StudentID),
    CourseID MEDIUMINT,
    FOREIGN KEY (CourseID) REFERENCES course(CourseID),
    EnrollmentDate date,
    Grade INT,
    PRIMARY KEY(EnrollmentID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table enrollment created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$conn->close();

?>

    
</body>
</html>
