<script>
var map = L.map('map').setView([35.369963, 5.884158], 10);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Map data &copy;',maxZoom: 19}).addTo(map);
L.marker([35.369963, 5.884158]).addTo(map).bindPopup('Maggache Land').openPopup();
</script>