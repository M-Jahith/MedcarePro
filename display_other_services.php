<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "med_care_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM ambulance_services ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . htmlspecialchars($row["Name"]) . "</h3>";
        echo "<button class='ambulance-btn01'>" . htmlspecialchars($row["Phone Number"]) . "</button>";
        echo "<button class='ambulance-btn' onclick=\"window.location.href='tel:" . htmlspecialchars($row["Phone Number"]) . "'\">CONNECT</button><br><br>";
    }
} else {
    echo "No ambulance services found.";
}

// Close connection
$conn->close();
?>
