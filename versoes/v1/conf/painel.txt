<?php

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];




$dados = "\n$latitude $longitude";

$fp = fopen('data.txt', 'a');

fwrite($fp, $dados);

fclose($fp);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="30; URL=https://17b8e7dc2f31.ngrok.io/painel.php" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7aXtB83ADGIuD8Da7uJR3ZiPInQ1oVgY&callback=initMap&libraries=&v=weekly"
      defer
    ></script>


    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>

    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const MinhaLoc = { lat: -18.969444, lng: -48.2697384 };
 

        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: MinhaLoc,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: MinhaLoc,
          map: map,
        });
      }
    </script>


</head>
<body>

  <h3><a href="painel.php">Localização do seu auto</a></h3>
  <h3><a href="historico.php">Histórico de movimentação</a></h3>
    <!--The div element for the map -->
    <div id="map"></div>

</body>
</html>


 