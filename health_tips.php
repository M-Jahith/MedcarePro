<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Tips</title>
    <link rel="stylesheet" type="text/css" href="tipcss.css">
</head>
<body>
    <div class="logo">
        <img src="Logo2a.png" alt="Med Care Logo">
        <h1>MEDICAL TIPS FOR DAY-TO-DAY HEALTHY LIFE</h1>
    </div>

    <!-- Dynamic Health Tips Section -->
    <div class="tips-container">
        <?php include 'fetch_health_tips.php'; ?>
    </div>

    <!-- Back Button -->
    
    <a class="back-button" href="/hms_medcare/index.php"> <i class="fa-solid fa-angle-left">  Back </button>
</body>
</html>
