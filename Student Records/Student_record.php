<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>StudentRecord</title>
</head>
<body>
    <ul class="navigation-bar">
        <li><a href="Student_record.php">StudentRecord</a></li>
        <li><a href="Course_Record.php">Course</a></li>
        <li><a href="Instructor_Record.php">Instructor</a></li>
        <li><a href="Enrollment_Record.php">Enrollment</a></li>
    </ul>
    <?php // Check if the query was successful
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentrecord";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Status:  Connection failed: " . $conn->connect_error);
    }
    echo "Server Status: Connected successfully";
    ?>
    <hr>
    <h1>Add Student Record</h1>
    <table style="width:40%">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <tr><td><label for="fname">First name:</label></td>
            <td><input type="text" name="studentFname" id="studentFname" value=""></td></tr>
            <tr><td><label for="fname">Last name:</label></td>
            <td><input type="text" name="studentLname" id="studentLname" value=""></td></tr>
            <tr><td><label for="fname">Date of Birth</label></td>
            <td><input type="text" name="studentDOB" id="studentDOB" value=""></td></tr>
            <tr><td><label for="fname">Email:</label></td>
            <td><input type="text" name="studentEmail" id="studentEmail" value=""></td></tr>
            <tr><td><label for="fname">Phone:</label></td>
            <td><input type="text" name="studentPhone" id="studentPhone" value=""></td></tr>
            <tr><td><label for="fname">Course:</label></td>
            <td>
            <select id="course" name="course">
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
            <option value="BSDA">BSDA</option>
            <option value="BLIS">BLIS</option>
            <option value="ACT">ACT</option>
            </select>
            </td></tr>    
            <tr><td></td><td><input type="submit" value="submit" name="submit"></td></tr>
        </form>
    </table>
    <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        try{
            $studenfname = $_POST['studentFname'];
            $studentlname = $_POST['studentLname'];
            $studentDOB = $_POST['studentDOB'];
            $studentemail = $_POST['studentEmail'];
            $studentphone = (int)$_POST['studentPhone'];
            $studentsql = "INSERT INTO student (FirstName,LastName,DateOfBirth,Email,Phone) 
                                    VALUES(
                                    '$studenfname',
                                    '$studentlname',
                                    '$studentDOB',
                                    '$studentemail',
                                    $studentphone)";
            //$studentrecord = $conn->exec($studentsql);
            //echo  gettype($studenfname);	

            if (mysqli_query($conn, $studentsql)) {
                echo "New record created successfully";
            } else {
                echo "<br>Error: " . $studentsql . "<br>" . mysqli_error($conn);
            }
        }catch(PDOException $e) {
            echo $studentrecord . "<br>" . $e->getMessage();
        }
        
        
    }?>
    <h1>Students Records</h1>
    <table style="width:100%">
    <tr>
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
    echo "<br><hr>";
    // Example query
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["StudentID"] . "</td>"
            . "<td>" . $row["FirstName"]. "</td>"
            . "<td>" . $row["LastName"]. "</td>"
            . "<td>" . $row["DateOfBirth"]. "</td>"
            . "<td>" . $row["Email"]. "</td>"
            . "<td>" . $row["Phone"]. "</td></tr>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }?>
    </table><hr>
</body>
</html>

