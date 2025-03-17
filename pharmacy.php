<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pharmacies Locator</title>
    <link rel="stylesheet" type="text/css" href="pharmacy.css">
    <script>
        function showMap(location) {
            // Create a Google Maps link with the specified location
            const mapsLink = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(location)}`;
            window.open(mapsLink, '_blank');
        }
    </script>
</head>
<body>
    <div class="logo">
        <img src="Logo2a.png" alt="logo1"/>
        <div>
            <h1>PHARMACIES</h1>
        </div>
    </div>
    <div class="pharmacy-list">
        <?php include 'conn_pharmacy.php'; ?>
    </div>
    <div id="map"></div>
    
</body>
</html>
