<php
navigator.geolocation.getCurrentPosition(function (position) {

?>
<php

var lat = position.coords.latitude;
var long = position.coords.longitude;




var mymap = L.map('map', {
    center: ([lat, long]),
    zoom: 13
});

console.log(mymap);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);


<?php

var ubi = ([lat, long]);

console.log(ubi);

L.marker([lat, long]).addTo(mymap)
    .bindPopup(' .<br> Usted Esta Aquí.')
    .openPopup();


L.marker([20.9142, -100.74420]).addTo(mymap)
    .bindPopup(' .<br> Restaurante Taa Sabrosoo.')
    .openPopup();





L.Routing.control({
    waypoints: [
        L.latLng(lat, long),
        L.latLng(20.9142, -100.74420)
    ],
    routeWhileDragging: true
}).addTo(mymap);

});
?>