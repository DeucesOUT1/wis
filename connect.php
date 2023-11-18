<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
</head>
<body>
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

// Function to handle form submission for adding a new student
function addStudent() {
    global $conn;
    $name = $_POST['student_name'];
    $age = $_POST['student_age'];
    $query = "INSERT INTO Student (name, age) VALUES ('$name', '$age')";
    if ($conn->query($query) === TRUE) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new course
function addCourse() {
    global $conn;
    $name = $_POST['course_name'];
    $code = $_POST['course_code'];
    $query = "INSERT INTO Courses (name, code) VALUES ('$name', '$code')";
    if ($conn->query($query) === TRUE) {
        echo "New course added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new enrollment
function addEnrollment() {
    global $conn;
    $studentId = $_POST['student_id'];
    $courseId = $_POST['course_id'];
    $query = "INSERT INTO Enrollments (student_id, course_id) VALUES ('$studentId', '$courseId')";
    if ($conn->query($query) === TRUE) {
        echo "New enrollment added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new instructor
function addInstructor() {
    global $conn;
    $name = $_POST['instructor_name'];
    $specialty = $_POST['instructor_specialty'];
    $query = "INSERT INTO Instructors (name, specialty) VALUES ('$name', '$specialty')";
    if ($conn->query($query) === TRUE) {
        echo "New instructor added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Check if the form for adding a new student is submitted
if (isset($_POST['add_student'])) {
    addStudent();
}

// Check if the form for adding a new course is submitted
if (isset($_POST['add_course'])) {
    addCourse();
}

// Check if the form for adding a new enrollment is submitted
if (isset($_POST['add_enrollment'])) {
    addEnrollment();
}

// Check if the form for adding a new instructor is submitted
if (isset($_POST['add_instructor'])) {
    addInstructor();
}

?>

<div class="container student-container">
  <h2>STUDENT</h2>
  <?php include 'show_student.php'; ?>
  <form method="POST" action="">
    <input type="text" name="student_name" placeholder="Name" required>
    <input type="number" name="student_age" placeholder="Age" required>
    <button type="submit" name="add_student">Add Student</button>
  </form>
</div>

<div class="container">
  <h2>COURSES</h2>
  <?php include 'show_courses.php'; ?>
  <form method="POST" action="">
    <input type="text" name="course_name" placeholder="Course Name" required>
    <input type="text" name="course_code" placeholder="Course Code" required>
    <button type="submit" name="add_course">Add Course</button>
  </form>
</div>

<div class="container">
  <h2>ENROLLMENTS</h2>
  <?php include 'show_enrollments.php'; ?>
  <form method="POST" action="">
    <input type="number" name="student_id" placeholder="Student ID" required>
    <input type="number" name="course_id" placeholder="Course ID" required>
   <button type="submit" name="add_enrollment">Add Enrollment</button>
  </form>
</div>

<div class="container">
  <h2>INSTRUCTORS</h2>
  <?php include 'show_instructors.php'; ?>
  <form method="POST" action="">
    <input type="text" name="instructor_name" placeholder="Name" required>
    <input type="text" name="instructor_specialty" placeholder="Specialty" required>
    <button type="submit" name="add_instructor">Add Instructor</button>
  </form>
</div>

</body>
</html>