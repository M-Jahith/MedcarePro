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

// Array of random pharmacy images
$pharmacy_images = [
    "img/ph1.jpg",
    "img/ph2.jpg",
    "img/ph3.jpg",
    "img/ph4.jpg",
    "img/ph5.jpg"
];

// Fetch pharmacy data
$sql = "SELECT * FROM pharmacies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $random_image = $pharmacy_images[array_rand($pharmacy_images)]; // Select a random image
        
        echo "<div class='pharmacy'>";
        echo "<img src='" . htmlspecialchars($random_image) . "' alt='Pharmacy Image'>";
        echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
        echo "<p class='location'>" . htmlspecialchars($row["address"]) . "<br><h6>" . htmlspecialchars($row["phone_number"]) . "</h6></p>";
        echo "<button class='locate-btn' onclick=\"showMap('" . htmlspecialchars($row["address"]) . "')\">LOCATE</button>";
        echo "</div>";
    }
} else {
    echo "No pharmacies found.";
}

// Close the connection
$conn->close();
?>
