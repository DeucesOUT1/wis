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

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    echo '<table>';
    echo '<tr>
            <th>ID Number</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Birth Date</th>
            <th>E-mail</th>
            <th>Contact Number</th>
          </tr>';
    echo '<tr><td colspan="6"><hr></td></tr>'; // Separation line 

    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['StudentID'] . '</td>';
        echo '<td>' . $row['FirstName'] . '</td>';
        echo '<td>' . $row['LastName'] . '</td>';
        echo '<td>' . $row['DateOfBirth'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '</tr>';
        echo '<tr><td colspan="6" style="border-bottom: 1px dotted #000;"></td></tr>'; // Add a dotted line after each row
    }
    echo '</table>';
} else {
    echo 'Error retrieving data: ' . $conn->error;
}

$conn->close(); // Close the connection
?>
