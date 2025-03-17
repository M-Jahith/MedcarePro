<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "med_care_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM health_tips ORDER BY RAND() LIMIT 5";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='tip'>";
        echo "<img src=' " . htmlspecialchars($row["image_path"]) . "' alt='" . htmlspecialchars($row["title"]) . "' />";
        echo "<div>";
        echo "<h2>" . htmlspecialchars($row["title"]) . "</h2>";
        echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No health tips found.";
}

// Close connection
$conn->close();
?>
