<?php
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

// Step 2: Query the database
$sql = "SELECT * FROM blood_donate"; 
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Services</title>
    <link rel="stylesheet" href="Blooddonation_services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <img src="img/Logo2a.png" alt="Logo"> </a>
        <h1>BLOOD DONATION SERVICES</h1>
    </header>

    <p>You can easily donate blood through the previously located blood banks.</p>

    <div class="row">
        <img src="img/blooddonation_services.png" alt="Blood Donation Services" class="blooddonation_services">
    </div>

    <div>
        <div class="rectangle1">
            <h2 class="heading">BLOOD DONATABLE BANKS</h2><br>

            <?php
            // Display the data from the database
            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo "<h3>" . $row["name"] . "</h3>";
                    echo "<button class='ambulance-btn'>" . $row["address"] . ", " . $row["city"] . ", " . $row["country"] . "</button>";
                    echo "<button class='ambulance-btn01'>
                            <div class='rounded-button'>
                                <ion-icon name='navigate-circle-outline'></ion-icon>
                            </div>
                            <h2 class='locate'>LOCATE</h2>
                          </button><br>";
                }
            } else {
                echo "No blood donation centers found.";
            }

            // Step 4: Close the database connection
            $conn->close();
            ?>

        </div><br>

        <button class="btn"> <i class="fa-solid fa-angle-left"></i> Back</button>
    </div>
</body>
</html>
