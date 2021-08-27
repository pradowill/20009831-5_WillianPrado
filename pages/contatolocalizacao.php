<?php
    include("menu.php");   
?>

<link rel="stylesheet" href="../css/Style.css" type="text/css">

<div style='overflow:hidden;height:280px;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%;'></div>
</div>

<script src= 'http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
<script type='text/javascript'>
function init_map() {
     var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(-23.443583, -51.918843),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'),
            myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(-23.443583, -51.918843),
        });
        infowindow = new google.maps.InfoWindow({
            content: '<img src="../images/doces.png" style="width:70%; transform: translate(15%, 0%);">'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);</script>

<div>
    <br>
    <h5>Encaminhe seu nome e e-mail para enviarmos nossas promoções, ou entre em contato conosco pelo nosso telefone.</h5>
    <h5>Telefone: (99) 99999-9999</h5>
    <br>
    <label for="name">Nome:</label>
    <input type="text" id="name" />
    <br>
    <label for="email">E-mail:</label>
    <input type="text" id="email" />
    <br>
    <div class="button">
    <button class="btn third">Enviar</button>
    <br>
    </div>
    <br><br><br><br>


<?php
    include ("footer.php");
?>
