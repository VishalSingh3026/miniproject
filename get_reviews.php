<?php
// Establish a connection to your MySQL database (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelhowl";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reviews from the MySQL table
$sql = "SELECT * FROM reviews ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

// Display reviews as an HTML list
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='review-item'>";
        echo "<strong>{$row['name']}</strong>";
        echo "<div class='stars'>", str_repeat('★', $row['rating']), "</div>";
        echo "<p>{$row['comment']}</p>";
        echo "<img src='{$row['photo_path']}' alt='User Photo' style='max-width: 400px; height: 300px;'>";
        echo "</li>";
    }
} else {
    echo "No reviews yet.";
}

// Close the database connection
$conn->close();
?>
