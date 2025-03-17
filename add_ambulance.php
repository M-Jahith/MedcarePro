<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];

    // Connect to MySQL
    $conn = new mysqli("localhost", "root", " ", "ambulance_service");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the ambulance table
    $sql = "INSERT INTO ambulance (name, phone, location) VALUES ('$name', '$phone', '$location')";
    if ($conn->query($sql) === TRUE) {
        echo "Ambulance added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
