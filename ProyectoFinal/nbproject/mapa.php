<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar">
</script>

<script>
function iniciar() {
var mapOptions = {
center: new google.maps.LatLng(25.80, -80.30),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map"),mapOptions);}		
</script>

<div id="map"></div>
    </body>
</html>
