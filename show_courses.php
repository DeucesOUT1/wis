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

$sql = "SELECT * FROM Course";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    echo '<table>';
    echo '<tr><th>CourseID</th>
    <th>CourseName</th>
    <th>Credits</th></tr>';
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['CourseID'] . '</td>';
        echo '<td>' . $row['CourseName'] . '</td>';
        echo '<td>' . $row['Credits'] . '</td>';
        echo '</tr>';
        echo '<tr><td colspan="4" style="border-bottom: 1px dotted #000;"></td></tr>'; // Add a dotted line after each row
    }
    echo '</table>';
} else {
    echo 'Error retrieving data: ' . mysqli_error($connection);
}



?>