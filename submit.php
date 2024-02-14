<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a connection to your MySQL database (replace with your actual credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travelhowl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    echo "<script>alert('hehhehehe')</script>";
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $conn->real_escape_string($_POST["name"]);
    $rating = $conn->real_escape_string($_POST["rating"]);
    $comment = $conn->real_escape_string($_POST["comment"]);

    // Handle photo upload
    $photo = $_FILES["photo"];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($photo["name"]);

    move_uploaded_file($photo["tmp_name"], $targetFile);

    // Insert data into the MySQL table
    $sql = "INSERT INTO reviews (name, rating, comment, photo_path) VALUES ('$name', '$rating', '$comment', '$targetFile')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
