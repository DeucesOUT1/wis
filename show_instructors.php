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

$sql = "SELECT * FROM Instructor";
$result = $conn->query($sql);
// Check if the query was successful
// Check if the query was successful
if ($result) {
    echo '<table>';
    echo '<tr><th>InstructorID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Email</th>
          <th>Contact NUmber</th></tr>';
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['InstructorID'] . '</td>';
        echo '<td>' . $row['FirstName'] . '</td>';
        echo '<td>' . $row['LastName'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '</tr>';
        echo '<tr><td colspan="5" style="border-bottom: 1px dotted #000;"></td></tr>'; // Add a dotted line after each row
    }
    echo '</table>';
} else {
    echo 'Error retrieving data: ' . mysqli_error($connection);
}


?>