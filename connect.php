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
    $firstName = $_POST['student_first_name'];
    $lastName = $_POST['student_last_name'];
    $dob = $_POST['student_dob'];
    $email = $_POST['student_email'];
    $phone = $_POST['student_phone'];

    $query = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) 
              VALUES ('$firstName', '$lastName', '$dob', '$email', '$phone')";

    if ($conn->query($query) === TRUE) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new course
function addCourse() {
    global $conn;
    $courseName = $_POST['course_name'];
    $credits = $_POST['course_credits'];

    $query = "INSERT INTO Course (CourseName, Credits) 
              VALUES ('$courseName', '$credits')";

    if ($conn->query($query) === TRUE) {
        echo "New course added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new enrollment
function addEnrollment() {
    global $conn;
    $studentId = $_POST['enrollment_student_id'];
    $courseId = $_POST['enrollment_course_id'];
    $enrollmentDate = $_POST['enrollment_date'];
    $grade = $_POST['enrollment_grade'];

    $query = "INSERT INTO Enrollment (StudentID, CourseID, EnrollmentDate, Grade) 
              VALUES ('$studentId', '$courseId', '$enrollmentDate', '$grade')";

    if ($conn->query($query) === TRUE) {
        echo "New enrollment added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Function to handle form submission for adding a new instructor
function addInstructor() {
    global $conn;
    $instructorFirstName = $_POST['instructor_first_name'];
    $instructorLastName = $_POST['instructor_last_name'];
    $instructorEmail = $_POST['instructor_email'];
    $instructorPhone = $_POST['instructor_phone'];

    $query = "INSERT INTO Instructor (FirstName, LastName, Email, Phone) 
              VALUES ('$instructorFirstName', '$instructorLastName', '$instructorEmail', '$instructorPhone')";

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
    <input type="text" name="student_first_name" placeholder="First Name" required>
    <input type="text" name="student_last_name" placeholder="Last Name" required>
    <input type="date" name="student_dob" placeholder="Date of Birth" required>
    <input type="email" name="student_email" placeholder="Email" required>
    <input type="tel" name="student_phone" placeholder="Phone" required>
    <button type="submit" name="add_student">Add Student</button>
  </form>
</div>

<div class="container">
  <h2>COURSES</h2>
  <?php include 'show_courses.php'; ?>
  <form method="POST" action="">
    <input type="text" name="course_name" placeholder="Course Name" required>
    <input type="number" name="course_credits" placeholder="Credits" required>
    <button type="submit" name="add_course">Add Course</button>
  </form>
</div>

<div class="container">
  <h2>ENROLLMENTS</h2>
  <?php include 'show_enrollments.php'; ?>
  <form method="POST" action="">
    <input type="number" name="enrollment_student_id" placeholder="Student ID" required>
    <input type="number" name="enrollment_course_id" placeholder="Course ID" required>
    <input type="date" name="enrollment_date" placeholder="Enrollment Date" required>
    <input type="text" name="enrollment_grade" placeholder="Grade" required>
    <button type="submit" name="add_enrollment">Add Enrollment</button>
  </form>
</div>

<div class="container">
  <h2>INSTRUCTORS</h2>
  <?php include 'show_instructors.php'; ?>
  <form method="POST" action="">
    <input type="text" name="instructor_first_name" placeholder="First Name" required>
    <input type="text" name="instructor_last_name" placeholder="Last Name" required>
    <input type="email" name="instructor_email" placeholder="Email" required>
    <input type="tel" name="instructor_phone" placeholder="Phone" required>
    <button type="submit" name="add_instructor">Add Instructor</button>
  </form>
</div>

</body>
</html>
