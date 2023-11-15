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
// echo "Connected successfully";

$sql = "SELECT * FROM Enrollment";
$result = $conn->query($sql);
// Check if the query was successful

if ($result) {
    echo '<table>';
    echo '<tr><th>EnrollmentID</th
    ><th>StudentID</th>
    <th>CourseID</th>
    <th>EnrollmentDate</th></tr>';
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['EnrollmentID'] . '</td>';
        echo '<td>' . $row['StudentID'] . '</td>';
        echo '<td>' . $row['CourseID'] . '</td>';
        echo '<td>' . $row['EnrollmentDate'] . '</td>';
        echo '</tr>';
        echo '<tr><td colspan="4" style="border-bottom: 1px dotted #000;"></td></tr>'; // Add a dotted line after each row
    }
    echo '</table>';
} else {
    echo 'Error retrieving data: ' . mysqli_error($connection);
}


?>