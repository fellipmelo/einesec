<?php 



?>

<!DOCTYPE html>
<html>
<head>
  <title>Historico</title>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="60; URL=https://b2699ed3960e.ngrok.io/historico.php" />

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


        const MinhaLoc46 = { lat: -18.9687753, lng: -48.2704887 };         const MinhaLoc45 = { lat: -18.9687723, lng: -48.2704771 };         const MinhaLoc44 = { lat: -18.968775, lng: -48.270487 };         const MinhaLoc43 = { lat: -18.9687727, lng: -48.2704818 };         const MinhaLoc42 = { lat: -18.9687526, lng: -48.2704963 };         const MinhaLoc41 = { lat: -18.9687717, lng: -48.2704742 };         const MinhaLoc40 = { lat: -18.9687719, lng: -48.2704778 };         const MinhaLoc39 = { lat: -18.9687678, lng: -48.2704862 };         const MinhaLoc38 = { lat: -18.9687761, lng: -48.2704756 };         const MinhaLoc37 = { lat: -18.9687662, lng: -48.2704917 };         const MinhaLoc36 = { lat: -18.9687764, lng: -48.2704939 };         const MinhaLoc35 = { lat: -18.9687828, lng: -48.2704887 };         const MinhaLoc34 = { lat: -18.9687317, lng: -48.2705385 };         const MinhaLoc33 = { lat: -18.9687835, lng: -48.2705225 };         const MinhaLoc32 = { lat: -18.9688077, lng: -48.2705422 };         const MinhaLoc31 = { lat: -18.9689551, lng: -48.2704776 };         const MinhaLoc30 = { lat: -18.9689942, lng: -48.270266 };         const MinhaLoc29 = { lat: -18.9689707, lng: -48.2700996 };         const MinhaLoc28 = { lat: -18.9690915, lng: -48.2698857 };         const MinhaLoc27 = { lat: -18.9691382, lng: -48.2697247 };         const MinhaLoc26 = { lat: -18.9690801, lng: -48.2695825 };         const MinhaLoc25 = { lat: -18.9692732, lng: -48.2695838 };         const MinhaLoc24 = { lat: -18.9694064, lng: -48.269659 };         const MinhaLoc23 = { lat: -18.9694332, lng: -48.2696666 };         const MinhaLoc22 = { lat: -18.9694256, lng: -48.2697553 };         const MinhaLoc21 = { lat: -18.9695358, lng: -48.2695943 };         const MinhaLoc20 = { lat: -18.9697693, lng: -48.2699403 };         const MinhaLoc19 = { lat: -18.9697468, lng: -48.2700165 };         const MinhaLoc18 = { lat: -18.9698173, lng: -48.2700898 };         const MinhaLoc17 = { lat: -18.9697165, lng: -48.2704319 };         const MinhaLoc16 = { lat: -18.9696675, lng: -48.2705894 };         const MinhaLoc15 = { lat: -18.9696706, lng: -48.2705903 };         const MinhaLoc14 = { lat: -18.9696312, lng: -48.270538 };         const MinhaLoc13 = { lat: -18.9697209, lng: -48.2707141 };         const MinhaLoc12 = { lat: -18.9696481, lng: -48.2708382 };         const MinhaLoc11 = { lat: -18.9693892, lng: -48.2707511 };         const MinhaLoc10 = { lat: -18.9693266, lng: -48.2706279 };         const MinhaLoc9 = { lat: -18.9691284, lng: -48.2706698 };         const MinhaLoc8 = { lat: -18.968882, lng: -48.2705228 };         const MinhaLoc7 = { lat: -18.9687497, lng: -48.2705274 };         const MinhaLoc6 = { lat: -18.9687581, lng: -48.2705113 };         const MinhaLoc5 = { lat: -18.9687779, lng: -48.2704867 };         const MinhaLoc4 = { lat: -18.9687809, lng: -48.2704669 };         const MinhaLoc3 = { lat: -18.9687802, lng: -48.2704587 };         const MinhaLoc2 = { lat: -18.9687744, lng: -48.2704782 }; 

        /* The width is the width of the web page */
        const map = new google.maps.Map(document.getElementById("map"), {zoom: 15, center: MinhaLoc2,});
        const image = "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
        /* The width is the width of the web page */



        const marker46 = new google.maps.Marker({position: MinhaLoc46,map: map,title:"2021-01-26 20:21",});        const marker45 = new google.maps.Marker({position: MinhaLoc45,map: map,title:"2021-01-26 20:21",});        const marker44 = new google.maps.Marker({position: MinhaLoc44,map: map,title:"2021-01-26 20:20",});        const marker43 = new google.maps.Marker({position: MinhaLoc43,map: map,title:"2021-01-26 20:20",});        const marker42 = new google.maps.Marker({position: MinhaLoc42,map: map,title:"2021-01-26 20:20",});        const marker41 = new google.maps.Marker({position: MinhaLoc41,map: map,title:"2021-01-26 20:20",});        const marker40 = new google.maps.Marker({position: MinhaLoc40,map: map,title:"2021-01-26 20:19",});        const marker39 = new google.maps.Marker({position: MinhaLoc39,map: map,title:"2021-01-26 20:19",});        const marker38 = new google.maps.Marker({position: MinhaLoc38,map: map,title:"2021-01-26 20:19",});        const marker37 = new google.maps.Marker({position: MinhaLoc37,map: map,title:"2021-01-26 20:19",});        const marker36 = new google.maps.Marker({position: MinhaLoc36,map: map,title:"2021-01-26 20:18",});        const marker35 = new google.maps.Marker({position: MinhaLoc35,map: map,title:"2021-01-26 20:18",});        const marker34 = new google.maps.Marker({position: MinhaLoc34,map: map,title:"2021-01-26 20:18",});        const marker33 = new google.maps.Marker({position: MinhaLoc33,map: map,title:"2021-01-26 20:17",});        const marker32 = new google.maps.Marker({position: MinhaLoc32,map: map,title:"2021-01-26 20:17",});        const marker31 = new google.maps.Marker({position: MinhaLoc31,map: map,title:"2021-01-26 20:17",});        const marker30 = new google.maps.Marker({position: MinhaLoc30,map: map,title:"2021-01-26 20:17",});        const marker29 = new google.maps.Marker({position: MinhaLoc29,map: map,title:"2021-01-26 20:16",});        const marker28 = new google.maps.Marker({position: MinhaLoc28,map: map,title:"2021-01-26 20:16",});        const marker27 = new google.maps.Marker({position: MinhaLoc27,map: map,title:"2021-01-26 20:16",});        const marker26 = new google.maps.Marker({position: MinhaLoc26,map: map,title:"2021-01-26 20:16",});        const marker25 = new google.maps.Marker({position: MinhaLoc25,map: map,title:"2021-01-26 20:15",});        const marker24 = new google.maps.Marker({position: MinhaLoc24,map: map,title:"2021-01-26 20:15",});        const marker23 = new google.maps.Marker({position: MinhaLoc23,map: map,title:"2021-01-26 20:15",});        const marker22 = new google.maps.Marker({position: MinhaLoc22,map: map,title:"2021-01-26 20:15",});        const marker21 = new google.maps.Marker({position: MinhaLoc21,map: map,title:"2021-01-26 20:14",});        const marker20 = new google.maps.Marker({position: MinhaLoc20,map: map,title:"2021-01-26 20:14",});        const marker19 = new google.maps.Marker({position: MinhaLoc19,map: map,title:"2021-01-26 20:14",});        const marker18 = new google.maps.Marker({position: MinhaLoc18,map: map,title:"2021-01-26 20:14",});        const marker17 = new google.maps.Marker({position: MinhaLoc17,map: map,title:"2021-01-26 20:13",});        const marker16 = new google.maps.Marker({position: MinhaLoc16,map: map,title:"2021-01-26 20:13",});        const marker15 = new google.maps.Marker({position: MinhaLoc15,map: map,title:"2021-01-26 20:13",});        const marker14 = new google.maps.Marker({position: MinhaLoc14,map: map,title:"2021-01-26 20:12",});        const marker13 = new google.maps.Marker({position: MinhaLoc13,map: map,title:"2021-01-26 20:12",});        const marker12 = new google.maps.Marker({position: MinhaLoc12,map: map,title:"2021-01-26 20:12",});        const marker11 = new google.maps.Marker({position: MinhaLoc11,map: map,title:"2021-01-26 20:12",});        const marker10 = new google.maps.Marker({position: MinhaLoc10,map: map,title:"2021-01-26 20:11",});        const marker9 = new google.maps.Marker({position: MinhaLoc9,map: map,title:"2021-01-26 20:11",});        const marker8 = new google.maps.Marker({position: MinhaLoc8,map: map,title:"2021-01-26 20:11",});        const marker7 = new google.maps.Marker({position: MinhaLoc7,map: map,title:"2021-01-26 20:11",});        const marker6 = new google.maps.Marker({position: MinhaLoc6,map: map,title:"2021-01-26 20:10",});        const marker5 = new google.maps.Marker({position: MinhaLoc5,map: map,title:"2021-01-26 20:10",});        const marker4 = new google.maps.Marker({position: MinhaLoc4,map: map,title:"2021-01-26 20:10",});        const marker3 = new google.maps.Marker({position: MinhaLoc3,map: map,title:"2021-01-26 19:51",});        const marker2 = new google.maps.Marker({position: MinhaLoc2,map: map,title:"2021-01-26 19:38",});

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