<!DOCTYPE html>
<html lang="en">
<?php
include("inc/connect.php");
include("inc/getInformations.php");
$step = isset($_GET['step']) ? $_GET['step'] : '1';
if($step==2)$num = $_GET['num'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <title><?php echo($websiteName); ?></title>
</head>
<style>.hide {display: none;}</style>
<body>
   <?php include("styles/sections/header.php");?>
    <form id="step1"  class=" <?php if ($step != 1) echo 'hide'; ?>"  action="process.php?step=2" method="post" novalidate>
  <div class="form-group">
    <label for="type">Type:</label>
    <select id="type" name="type" onchange="toggleInputs1()">
      <option value="Family">Family</option>
      <option value="Association">Association</option>
      <option value="Personal">Personal</option>
    </select>
  </div>
  <div class="form-group" id="nameContainer" style="display: none;">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
  </div>
  <div class="form-group" id="amountContainer" style="display: none;">
    <label for="amount">Amount:</label>
    <input type="number"  name="amount" min="70" max="100" required>
  </div>
  <div class="form-group" id="numberContainer">
    <label for="amount">Number:</label>
    <input type="number"  name="number" min="2" max="100" required>
  </div>
  <input type="submit" value="Next" name="doIT" />
</form>
<form id="step2" class=" <?php if ($step != 2) echo 'hide'; ?>" action="process.php?step=3" method="post" novalidate>
  <?php
   for($i=1;$i<=$num;$i++){
    echo "<div class='form-group' id='nameContainer' >
    <label for='name'>Name:</label>
    <input type='text' name='name".$i."' required>
  </div>
  <div class='form-group' id='amountContainer'>
    <label for='amount'>Amount:</label>
    <input type='number'  name='amount".$i."' min='70' max='100' required>
  </div>";
   }
   ?>
<div class="form-group" id="nameContainer" style="display: none;">
    <label for="name">Name:</label>
    <input type="text" id="name" required>
  </div>
  <div class="form-group" id="amountContainer" style="display: none;">
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" min="70" max="100" required>
  </div>
 <button type="submit">done</button>
</form>
  <?php
    include("styles/sections/aboutUs.php");
    include("styles/sections/footer.php");
    ?>
<script>
  function toggleInputs1() {
    var typeSelect = document.getElementById("type");
    var nameContainer = document.getElementById("nameContainer");
    var amountContainer = document.getElementById("amountContainer");
    var numberContainer = document.getElementById("numberContainer");
    if (typeSelect.value === "Personal") {
      nameContainer.style.display = "block";
      amountContainer.style.display = "block";
      numberContainer.style.display="none";
    } else {
      nameContainer.style.display = "none";
      amountContainer.style.display = "none";
      numberContainer.style.display = "block";
    }
  }
</script>
   <script>
var map = L.map('map').setView([35.369963, 5.884158], 10);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy;',maxZoom: 19}).addTo(map);
L.marker([35.369963, 5.884158]).addTo(map).bindPopup('Maggache Land').openPopup();
</script>

</body>
</html>