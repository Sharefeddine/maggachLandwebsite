<!DOCTYPE html>
<html lang="en">
<?php
include("inc/connect.php");
include("inc/getInformations.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/css/style.css">
    <link rel="stylesheet" type="text/css" href="styles/css/slideShow.css">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <title><?php echo($websiteName); ?></title>
</head>
<body>
   <?php
    include("styles/sections/header.php");
     include("styles/sections/slideshow.php");
    include("styles/sections/aboutUs.php");
    include("styles/sections/contactUs.php");
    include("styles/sections/footer.php");
   ?>
<script>
var map = L.map('map').setView([35.369963, 5.884158], 10);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy;',maxZoom: 19}).addTo(map);
L.marker([35.369963, 5.884158]).addTo(map).bindPopup('Maggache Land').openPopup();
</script>
   <script src="styles/js/slideShow.js"></script>
</body>
</html>