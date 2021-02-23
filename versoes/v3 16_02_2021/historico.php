<?php 



?>

<!DOCTYPE html>
<html>
<head>
  <title>Historico</title>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="60; URL=https://96f0533311a2.ngrok.io/historico.php" />

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

       
      function initMap() {
        // The location of Uluru


        const MinhaLoc41 = { lat: -18.921537, lng: -48.2452307 };         const MinhaLoc40 = { lat: -18.921536, lng: -48.2452365 };         const MinhaLoc39 = { lat: -18.9215372, lng: -48.2452336 };         const MinhaLoc38 = { lat: -18.9215391, lng: -48.2452337 };         const MinhaLoc37 = { lat: -18.9215353, lng: -48.2452288 };         const MinhaLoc36 = { lat: -18.921538, lng: -48.2452369 };         const MinhaLoc35 = { lat: -18.9215357, lng: -48.2452368 };         const MinhaLoc34 = { lat: -18.9215358, lng: -48.2452393 };         const MinhaLoc33 = { lat: -18.9215408, lng: -48.2452298 };         const MinhaLoc32 = { lat: -18.9215374, lng: -48.2452414 };         const MinhaLoc31 = { lat: -18.9215374, lng: -48.2452317 };         const MinhaLoc30 = { lat: -18.9215365, lng: -48.245234 };         const MinhaLoc29 = { lat: -18.9215347, lng: -48.2452293 };         const MinhaLoc28 = { lat: -18.921535, lng: -48.2452277 };         const MinhaLoc27 = { lat: -18.9215357, lng: -48.2452297 };         const MinhaLoc26 = { lat: -18.9215373, lng: -48.2452329 };         const MinhaLoc25 = { lat: -18.9215376, lng: -48.2452319 };         const MinhaLoc24 = { lat: -18.9215376, lng: -48.2452383 };         const MinhaLoc23 = { lat: -18.9215362, lng: -48.2452334 };         const MinhaLoc22 = { lat: -18.9215331, lng: -48.2452393 };         const MinhaLoc21 = { lat: -18.9687743, lng: -48.2704998 };         const MinhaLoc20 = { lat: -18.9687743, lng: -48.2704998 };         const MinhaLoc19 = { lat: -18.9693614, lng: -48.2707186 };         const MinhaLoc18 = { lat: -18.974159, lng: -48.2678169 };         const MinhaLoc17 = { lat: -18.9688131, lng: -48.2705457 };         const MinhaLoc16 = { lat: -18.9687442, lng: -48.2705286 };         const MinhaLoc15 = { lat: -18.9687442, lng: -48.2705286 };         const MinhaLoc14 = { lat: -18.9687503, lng: -48.2705098 };         const MinhaLoc13 = { lat: -18.9687488, lng: -48.2704998 };         const MinhaLoc12 = { lat: -18.9687463, lng: -48.2705116 };         const MinhaLoc11 = { lat: -18.9687743, lng: -48.2704759 };         const MinhaLoc10 = { lat: -18.9687743, lng: -48.2704759 };         const MinhaLoc9 = { lat: -18.968771, lng: -48.2704785 };         const MinhaLoc8 = { lat: -18.9687737, lng: -48.2704766 };         const MinhaLoc7 = { lat: -18.9687743, lng: -48.270465 };         const MinhaLoc6 = { lat: -18.9687655, lng: -48.2704698 };         const MinhaLoc5 = { lat: -18.9687705, lng: -48.2704763 };         const MinhaLoc4 = { lat: -18.9685802, lng: -48.2704587 };         const MinhaLoc3 = { lat: -18.9689802, lng: -48.2704587 };         const MinhaLoc2 = { lat: -18.9688744, lng: -48.2707782 }; 

        /* The width is the width of the web page */
        const Centro = { lat: -18.9787746, lng: -48.2704809 }; const map = new google.maps.Map(document.getElementById("map"), {zoom: 15, center: Centro,});
        const image = "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
        /* The width is the width of the web page */



        const marker41 = new google.maps.Marker({position: MinhaLoc41,map: map,title:"2021-02-16 21:20",});        const marker40 = new google.maps.Marker({position: MinhaLoc40,map: map,title:"2021-02-16 21:20",icon: image,});        const marker39 = new google.maps.Marker({position: MinhaLoc39,map: map,title:"2021-02-16 21:19",icon: image,});        const marker38 = new google.maps.Marker({position: MinhaLoc38,map: map,title:"2021-02-16 21:19",icon: image,});        const marker37 = new google.maps.Marker({position: MinhaLoc37,map: map,title:"2021-02-16 21:19",icon: image,});        const marker36 = new google.maps.Marker({position: MinhaLoc36,map: map,title:"2021-02-16 21:19",icon: image,});        const marker35 = new google.maps.Marker({position: MinhaLoc35,map: map,title:"2021-02-16 21:18",icon: image,});        const marker34 = new google.maps.Marker({position: MinhaLoc34,map: map,title:"2021-02-16 21:18",icon: image,});        const marker33 = new google.maps.Marker({position: MinhaLoc33,map: map,title:"2021-02-16 21:18",icon: image,});        const marker32 = new google.maps.Marker({position: MinhaLoc32,map: map,title:"2021-02-16 21:18",icon: image,});        const marker31 = new google.maps.Marker({position: MinhaLoc31,map: map,title:"2021-02-16 21:17",icon: image,});        const marker30 = new google.maps.Marker({position: MinhaLoc30,map: map,title:"2021-02-16 21:17",icon: image,});        const marker29 = new google.maps.Marker({position: MinhaLoc29,map: map,title:"2021-02-16 21:17",icon: image,});        const marker28 = new google.maps.Marker({position: MinhaLoc28,map: map,title:"2021-02-16 21:17",icon: image,});        const marker27 = new google.maps.Marker({position: MinhaLoc27,map: map,title:"2021-02-16 21:16",icon: image,});        const marker26 = new google.maps.Marker({position: MinhaLoc26,map: map,title:"2021-02-16 21:16",icon: image,});        const marker25 = new google.maps.Marker({position: MinhaLoc25,map: map,title:"2021-02-16 21:16",icon: image,});        const marker24 = new google.maps.Marker({position: MinhaLoc24,map: map,title:"2021-02-16 21:16",icon: image,});        const marker23 = new google.maps.Marker({position: MinhaLoc23,map: map,title:"2021-02-16 21:15",icon: image,});        const marker22 = new google.maps.Marker({position: MinhaLoc22,map: map,title:"2021-02-16 21:15",icon: image,});        const marker21 = new google.maps.Marker({position: MinhaLoc21,map: map,title:"2021-01-28 23:51",icon: image,});        const marker20 = new google.maps.Marker({position: MinhaLoc20,map: map,title:"2021-01-28 23:51",icon: image,});        const marker19 = new google.maps.Marker({position: MinhaLoc19,map: map,title:"2021-01-28 23:51",icon: image,});        const marker18 = new google.maps.Marker({position: MinhaLoc18,map: map,title:"2021-01-28 23:51",icon: image,});        const marker17 = new google.maps.Marker({position: MinhaLoc17,map: map,title:"2021-01-28 23:51",icon: image,});        const marker16 = new google.maps.Marker({position: MinhaLoc16,map: map,title:"2021-01-28 23:50",icon: image,});        const marker15 = new google.maps.Marker({position: MinhaLoc15,map: map,title:"2021-01-28 23:50",icon: image,});        const marker14 = new google.maps.Marker({position: MinhaLoc14,map: map,title:"2021-01-28 23:50",icon: image,});        const marker13 = new google.maps.Marker({position: MinhaLoc13,map: map,title:"2021-01-28 23:50",icon: image,});        const marker12 = new google.maps.Marker({position: MinhaLoc12,map: map,title:"2021-01-28 23:49",icon: image,});        const marker11 = new google.maps.Marker({position: MinhaLoc11,map: map,title:"2021-01-28 23:49",icon: image,});        const marker10 = new google.maps.Marker({position: MinhaLoc10,map: map,title:"2021-01-28 23:42",icon: image,});        const marker9 = new google.maps.Marker({position: MinhaLoc9,map: map,title:"2021-01-28 23:41",icon: image,});        const marker8 = new google.maps.Marker({position: MinhaLoc8,map: map,title:"2021-01-28 23:41",icon: image,});        const marker7 = new google.maps.Marker({position: MinhaLoc7,map: map,title:"2021-01-28 23:41",icon: image,});        const marker6 = new google.maps.Marker({position: MinhaLoc6,map: map,title:"2021-01-28 23:41",icon: image,});        const marker5 = new google.maps.Marker({position: MinhaLoc5,map: map,title:"2021-01-28 23:41",icon: image,});        const marker4 = new google.maps.Marker({position: MinhaLoc4,map: map,title:"2021-01-26 19:51",icon: image,});        const marker3 = new google.maps.Marker({position: MinhaLoc3,map: map,title:"2021-01-26 19:51",icon: image,});        const marker2 = new google.maps.Marker({position: MinhaLoc2,map: map,title:"2021-01-26 19:38",icon: image,});

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